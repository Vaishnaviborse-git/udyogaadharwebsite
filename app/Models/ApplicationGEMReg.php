<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationGEMReg extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','phone','email','org_name','type_of_org','business_pan','date_of_start','business_address','IFSC_code',
        'bank_account_no','bank_name','status'

    ];

}
