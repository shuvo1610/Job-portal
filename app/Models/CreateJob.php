<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CreateJob extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function category()
    {

        return $this->belongsTo(Category::class);

    }

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class, 'job_id');
    }

    public function job_quiz()
    {
        return $this->hasOne(Quizze::class, 'job_id');
    }
    public function quizzes(): HasMany
    {
        return $this->hasMany(Quizze::class, 'job_id');
    }

    public function assessment(): HasOne
    {
        return $this->hasOne(Assessment::class, 'create_job_id');
    }



}
