<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateReg extends Model
{
    use HasFactory;

    protected $fillable = [
        'aadhar_no','fname','lname','phone','email','udyam_reg_no','org_name',
        'type_of_org','updates','decription','status'
    ];

    
}

