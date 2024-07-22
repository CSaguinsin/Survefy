<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'feedback', 'feedbackboard_id'];

    protected $table = 'feedbacks'; // Explicitly specify the table name

    public function feedbackboard()
    {
        return $this->belongsTo(FeedbackBoard::class, 'feedbackboard_id');
    }
}


