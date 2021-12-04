<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GSTReg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','phone','email','org_name','about_business','constitution_of_business','pan_card_no','premises_address',
        'electricity_bill','pan_card','status'

    ];
}
