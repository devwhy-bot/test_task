<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
	  protected $table = 'employes';
    protected $fillable = ['company_id', 'position_id', 'name', 'email', 'phone', 'salary'];
    public function company()
    {
        return $this->hasOne('App\Models\Company', 'id', 'company_id');
    }
    public function position()
    {
        return $this->hasOne('App\Models\Position', 'id', 'position_id');
    }
}
