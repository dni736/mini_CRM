<?php

namespace App;

use App\Company;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $table = 'employees';

    protected $guarded = [];

    protected $fillable = [
        'id', 'first_name', 'last_name', 'company_id', 'email', 'phone'
    ];

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }
}
