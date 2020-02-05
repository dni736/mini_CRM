<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Company extends Model
{

    protected $table = 'companies';

    protected $guarded = [];

    protected $fillable = [
        'id', 'company_name', 'email', 'website'
    ];


    public function employees()
    {
    	return $this->hasMany(Employee::class);
    }
    public $timestamps = false;

}