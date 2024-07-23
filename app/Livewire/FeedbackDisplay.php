<?php

namespace App\Livewire;

use App\Models\Feedback;
use Livewire\Component;

class FeedbackDisplay extends Component
{
    public $feedbackboard_id;

    public function mount($feedbackboard_id)
    {
        $this->feedbackboard_id = $feedbackboard_id;
    }

    public function delete($feedbackId)
    {
        $feedback = Feedback::findOrFail($feedbackId);
        $feedback->delete();
        // Livewire will automatically re-render the component
    }

    public function render()
    {
        $feedbacks = Feedback::where('feedbackboard_id', $this->feedbackboard_id)->get();
        return view('livewire.feedback-display', compact('feedbacks'));
    }
}
