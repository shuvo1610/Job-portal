<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'job_id',
        'company_name',
        'job_name',
        'name',
        'email',
        'phone_number',
        'resume',
    ];
    public function job()
    {
        return $this->belongsTo(CreateJob::class, 'job_id');
    }
}
