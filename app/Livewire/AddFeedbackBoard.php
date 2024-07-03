<?php

namespace App\Livewire;

use Livewire\Component;
use App\Model\Feedback;

class AddFeedbackBoard extends Component
{

   public $title;

   public function save()
   {
       $this->validate([
           'title' => 'required',
       ]);

       Feedbacks::create([
           'title' => $this->title,
       ]);
    }

    public function render()
    {
        return view('livewire.add-feedback-board');
    }
}
