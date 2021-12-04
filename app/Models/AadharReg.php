<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AadharReg extends Model
{
    use HasFactory;

    protected $fillable = [
        'aadhar_no','fname','lname','phone','email','gender','social_category','physically_handicapped','pan_card',
        'org_name','type_of_org','premises_address','GSTIN_no','date_of_start','bank_account_no',
        'IFSC_code','business_activity','about_product','no_of_emp','total_investment','gross_turnover'

    ];
}
