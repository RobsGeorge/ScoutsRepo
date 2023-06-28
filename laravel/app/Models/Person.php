<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'PersonID',
        'FirstName',
        'SecondName',
        'ThirdName',
        'FourthName',
        'DateOfBirth',
        'RaqamQawmy',
        'ScoutJoiningYear',
        'BloodTypeID',
        'FacebookProfileURL',
        'InstagramProfileURL',
        'PersonalEmail',
        'MotherFirstName',
        'MotherSecondName',
    ];

    protected $table = 'PersonInformation';

    use HasFactory;
}
