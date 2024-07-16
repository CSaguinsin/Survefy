<?php

namespace App\Livewire;

use App\Models\Feedback;
use Livewire\Component;

class FeedbackDisplay extends Component
{
    public $title;
    public $feedback;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'feedback' => 'required|string',
        ];
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'feedback' => 'required|string',
        ]);

        Feedback::create([
            'title' => $this->title,
            'feedback' => $this->feedback,
        ]);
    }

    public function render()
    {
        $feedbacks = Feedback::all(); // Fetch all feedbacks
        return view('livewire.feedback-display', compact('feedbacks'));
    }
}
