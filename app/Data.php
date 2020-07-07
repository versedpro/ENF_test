<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'company_name', 'skype', 'region', 'newsletter'
    ];
}
