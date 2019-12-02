<?php

namespace App;

use App\Company;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $guarded = [];

    public function company()
    {
    	return $this->belongsTo(Company::class,'company_id');
    }
}
