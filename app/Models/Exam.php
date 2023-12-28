<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'create_job_id',
        'quiz_id',
        'question',
        'answer',
        'given_answer',
        'is_correct',
    ];
}
