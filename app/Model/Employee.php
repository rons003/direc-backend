<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employee';
    protected $primayKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lastname', 
        'firstname', 
        'middlename',
        'contact_number',
        'email',
        'address',
        'gender',
        'national'
    ];
}
