<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = "patient";
    protected $fillable = ['created_by','first_name','last_name'
    ,'gender','dob','email','primary_phone_no1','secondary_phone_no',
    'address1','address2','city','postcode','country'];
}
