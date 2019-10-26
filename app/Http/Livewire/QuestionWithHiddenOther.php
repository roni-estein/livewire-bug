<?php

namespace App\Http\Livewire;

use Livewire\Component;

class QuestionWithHiddenOther extends Component
{
    
    
    public $hideOther;
    public $hideOn = 1;
    public $name = '';
    public $label = '';
    public $question = '';
    public $answer = '';
    
    public function mount($name, $question, $label ='',$hideOn=1)
    {
        $this->name = $name;
        $this->question = $question;
        $this->label = $label;
        $this->hideOn = $hideOn;
        $this->hideOther = $hideOn;
    }
    public function render()
    {
        return view('livewire.question-with-hidden-other');
    }
    
    public function updated()
    {
        $this->emit('updatedQuestionWithOther', $this->name, $this->hideOn, $this->hideOther, $this->answer);
    }
}
