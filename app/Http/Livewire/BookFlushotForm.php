<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookFlushotForm extends Component
{
    
    public $number_of_appointments = 1;
    public $client_type = 1;
    public $otherQuestions = [
        'well_today' => [
            'text' => 'Are you well today?',
            'label' => 'If no, describe',
            'hide_on' => 1,
        ],
        'allergies' => [
            'text' => 'Do you have any allergies?',
            'label' => 'If yes, describe',
            'hide_on' => 0,
        ],
        'conditions_following_vaccines' => [
            'text' => 'Have you ever had a serious reaction or condition following any vaccine?',
            'label' => 'If yes, describe',
            'hide_on' => 0,
        ],
        'conditions_requiring_dr' => [
            'text' => 'Do you have any conditions that require regular visits to a doctor?',
            'label' => 'If yes, describe and discuss with immunizer',
            'hide_on' => 0,
        ],
    ];
    
    
    public function render()
    {
        return view('livewire.book-flushot-form');
    }
    
    
    protected $listeners = ['updatedQuestionWithOther' => 'updateQuestionsWithOther'];
    
    public function updateQuestionsWithOther($name, $hideOn, $hideOther, $answer)
    {
    
    }
}
