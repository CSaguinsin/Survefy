<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Feedback;
use Illuminate\Support\Facades\Log;

class AddFeedback extends Component
{
    public $title;
    public $feedback;
    public $feedbackboard_id;

    public function mount($feedbackboard_id)
    {
        $this->feedbackboard_id = $feedbackboard_id;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'feedback' => 'required|string',
            'feedbackboard_id' => 'required|exists:feedbackboard,id',
        ]);

        Log::info('Validated data', [
            'title' => $this->title,
            'feedback' => $this->feedback,
            'feedbackboard_id' => $this->feedbackboard_id,
        ]);

        $feedback = Feedback::create([
            'title' => $this->title,
            'feedback' => $this->feedback,
            'feedbackboard_id' => $this->feedbackboard_id,
        ]);

        Log::info('Feedback created', ['feedback' => $feedback]);

        session()->flash('success', 'Feedback added successfully!');

        $this->reset('title', 'feedback');

        return redirect()->route('public.feedback', ['boardId' => $this->feedbackboard_id]);
    }

    public function render()
    {
        return view('livewire.add-feedback');
    }
}
