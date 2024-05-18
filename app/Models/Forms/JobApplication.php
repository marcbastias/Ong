<?php

namespace App\Models\Forms;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'position', 'message', 'cv_path', 'privacy_policy'
    ];
}
