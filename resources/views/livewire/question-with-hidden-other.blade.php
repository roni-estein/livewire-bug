<div class="py-1">
    <div class="flex flex-col">
        <div class="flex items-center">
            <div class="w-2/3">{{ $question }}</div>
            <div class="ml-2 w-1/3 text-right">
                <label class="inline-flex items-center">
                    <input type="radio" wire:model.lazy="hideOther" name="{{ $name }}_yes" id="{{ $name }}_yes" class="form-radio" value="1" @checked($hideOther,1)>
                    <span class="ml-1 mt-1">Yes</span>
                </label>
                <label class="ml-2 inline-flex items-center">
                    <input type="radio" wire:model.lazy="hideOther" name="{{ $name }}_no" id="{{ $name }}_no" class="form-radio" value="0" @checked($hideOther,0)>
                    <span class="ml-1 mt-1">No</span>
                </label>
            </div>
        </div>

        @if($hideOther != $hideOn)
            <label class="block mt-2 mb-6" wire:transition.slide.up.500ms>
                <div class="form-label"> {{ $label }}: @error('answer')<br>{{ $message }}@enderror</div>
                <textarea wire:model.lazy="answer"
                          name="answer"
                          id="answer"
                          autocomplete="" autocapitalize="off" rows="5"
                          class="form-input block w-full @error('answer') error @enderror">
            </textarea>
            </label>
        @endif

    </div>
</div>
