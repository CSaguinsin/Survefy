<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackBoard extends Model
{
    protected $table = 'feedbackboard';
    use HasFactory;
    protected $fillable = ['boardname'];
}
