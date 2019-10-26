<div class="text-gray-700 text-sm font-sans">

    <h3 class="uppercase">Flu Shot Appointment</h3>
    <h4 class="uppercase font-semibold text-teal-600 font-sans text-base tracking-wide pt-3 pb-1">Instructions</h4>
    <p class="">You may fill this form out for yourself, a dependant or a client.</p>
    <label class="mt-4 block">
        <div class="form-label">Number of appointments: @error('number_of_appointments ')<br>{{ $message }}@enderror
        </div>
        <select wire:model.lazy="number_of_appointments " name="number_of_appointments " id="number_of_appointments "
                class="form-select block w-full @error('number_of_appointments ') error @enderror">
            <option value="1" {{ $number_of_appointments  ===  1 ? 'selected':'' }}>Just you | or a single person
            </option>
            @for($i = 2; $i < 7; $i++)
                <option value="{{$i}}" {{ $number_of_appointments  ===  $i ? 'selected':'' }}>{{$i}} - People</option>
            @endfor
        </select>
    </label>

    <h4 class="uppercase font-semibold text-teal-600 font-sans text-base tracking-wide pt-6 pb-1">Personal
        Information</h4>
    <p class="">Your Personal information is only stored for the purposes of submitting your Seasonal Influenza and
        Pneumococcal Vaccine Consent form. Your email address will only be used to send you a reminder.</p>

    <p class="mt-2">Once your form has been processed your contact information will be destroyed.</p>
    <label class="block mt-4">
        <div class="form-label">Relation to Client: @error('client_type')<br>{{ $message }}@enderror</div>
        <select wire:model.lazy="client_type" name="client_type" id="client_type"
                class="form-select block w-full @error('client_type') error @enderror">
            <option value="1" @selected($client_type,1) >I am the Client</option>
            <option value="2" @selected($client_type,2) >I am the Parent</option>
            <option value="3" @selected($client_type,3) >I am the legal decision maker</option>
            <option value="4" @selected($client_type,4) >I am </option>
        </select>
    </label>

    <label class="block mt-3">
        <div class="form-label">Email: @error('email')<br>{{ $message }}@enderror</div>
        <input type="email" wire:model.lazy="email" name="email" id="email" autocomplete="email" autocapitalize="off"
               class="form-input block w-full @error('email') error @enderror"
               placeholder="your@email.com" />
    </label>

    <div class="flex mt-3 -mx-2">

        <label class="block px-2 w-full">
            <div class="form-label">First name: @error('first_name')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="first_name" name="first_name" id="first_name" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('first_name') error @enderror"
                   placeholder="your first name ..." />
        </label>

        <label class="block px-2 w-full">
            <div class="form-label">Last name: @error('last_name')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="last_name" name="last_name" id="last_name" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('last_name') error @enderror"
                   placeholder="your last name ..." />
        </label>
    </div>

    <div class="flex mt-3 -mx-2">
        <label class="block px-2 w-full">
            <div class="form-label">Phone number: @error('phone_number')<br>{{ $message }}@enderror</div>
            <input type="tel" wire:model.lazy="phone_number" name="phone_number" id="phone_number" autocomplete="tel-national"
                   class="form-input block w-full @error('phone_number') error @enderror"
                   placeholder="your phone number ..." />
        </label>

        <div class="w-full px-2"></div>
    </div>

    <h4 class="uppercase font-semibold text-teal-600 font-sans text-base tracking-wide pt-6 pb-1">A. Client Information</h4>
    <div class="flex -mx-2">
        <label class="block px-2 w-full">
            <div class="form-label">Client first name: @error('client_first_name')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="client_first_name" name="client_first_name" id="client_first_name" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('client_first_name') error @enderror"
                   placeholder="client's first name ..." />
        </label>

        <label class="block px-2 w-full">
            <div class="form-label">Client last name: @error('client_last_name')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="client_last_name" name="client_last_name" id="client_last_name" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('client_last_name') error @enderror"
                   placeholder="client's last name ..." />
        </label>

    </div>

    <div class="flex -mx-2 mt-3">
        <label class="block px-2 w-full">
            <div class="form-label">City: @error('city')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="city" name="city" id="city" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('city') error @enderror"
                   placeholder="Winnipeg" />
        </label>

        <label class="block px-2 w-full">
            <div class="form-label">Postal code: @error('postcode')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="postcode" name="postcode" id="postcode" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('postcode') error @enderror"
                   placeholder="R1R R1R" />
        </label>
    </div>

    <div class="flex -mx-2 mt-3">
        <label class="block px-2 w-full">
            <div class="form-label">Home phone number: @error('home_phone_number')<br>{{ $message }}@enderror</div>
            <input type="tel" wire:model.lazy="home_phone_number" name="home_phone_number" id="home_phone_number" autocomplete="tel-national"
                   class="form-input block w-full @error('home_phone_number') error @enderror"
                   placeholder="your home phone number ..." />
        </label>

        <label class="block px-2 w-full">
            <div class="form-label">Client birthdate: @error('client_birthdate')<br>{{ $message }}@enderror</div>
            <input type="date" wire:model.lazy="client_birthdate" name="client_birthdate" id="client_birthdate" autocomplete="bday"
                   class="form-input block w-full @error('client_birthdate') error @enderror"
                   placeholder="client birthdate" />
        </label>

    </div>
    <div class="flex -mx-2 mt-3">
        <label class="block px-2 w-full">
            <div class="form-label">Mb health number: @error('mb_health_number')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="mb_health_number" name="mb_health_number" id="mb_health_number" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('mb_health_number') error @enderror"
                   placeholder="6 digit number" />
        </label>

        <label class="block px-2 w-full">
            <div class="form-label">Personal health number: @error('personal_health_number')<br>{{ $message }}@enderror</div>
            <input type="text" wire:model.lazy="personal_health_number" name="personal_health_number" id="personal_health_number" autocomplete="" autocapitalize="off"
                   class="form-input block w-full @error('personal_health_number') error @enderror"
                   placeholder="9 digit number." />
        </label>
    </div>

    <h4 class="uppercase font-semibold text-teal-600 font-sans text-base tracking-wide pt-6 pb-1">B. Client Health History</h4>

    @foreach($otherQuestions as $name => $question)
        @livewire('question-with-hidden-other',$name, $question['text'],$question['label'],$question['hide_on'])
    @endforeach
{{--    @livewire('question-with-hidden-other','well_today', 'Are you well today?','If no, describe')--}}
{{--    @livewire('question-with-hidden-other','allergies', 'Do you have any allergies?','If yes, describe',0)--}}
{{--    @livewire('question-with-hidden-other','conditions_following_vaccines', 'Have you ever had a serious reaction or condition following any vaccine?','If yes, describe',0)--}}
{{--    @livewire('question-with-hidden-other','conditions_requiring_dr', 'Do you have any conditions that require regular visits to a doctor?','If yes, describe and discuss with immunizer',0)--}}

</div>
