<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class AddFeedback extends Component
{
    public $title;
    public $feedback;
    public $feedbackboard_id;

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'feedback' => 'required|string',
            'feedbackboard_id' => 'required|exists:feedbackboard,id',
        ]);

        Feedback::create([
            'title' => $this->title,
            'feedback' => $this->feedback,
            'feedbackboard_id' => $this->feedbackboard_id,
        ]);

        session()->flash('success', 'Feedback added successfully!');

        $this->reset('title', 'feedback', 'feedbackboard_id');

        return redirect()->route('public.feedback', ['board_id' => $this->feedbackboard_id]);
    }

    public function render()
    {
        return view('livewire.add-feedback');
    }
}
