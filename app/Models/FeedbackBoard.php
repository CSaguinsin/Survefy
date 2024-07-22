<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackBoard extends Model
{
    use HasFactory;

    protected $table = 'feedbackboard';

    protected $fillable = [
        'boardname',
    ];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'feedbackboard_id');
    }
}


