<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllFeedbacks extends Model
{
    use HasFactory;

    protected $table = 'allfeedbacks';
    protected $primaryKey = 'boardId'; // Specify the primary key

    protected $fillable = [
        'boardId',
        'boardStatus',
        'boardname',
        'feedback',
        'title'
    ];
}
