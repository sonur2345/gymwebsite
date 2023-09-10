<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPlan extends Model
{
    use HasFactory;
    public function add_plans()
    {
        return $this->hasOne(add_plans::class);
    }
    
    public function add_plan_tenure()
    {
        return $this->hasOne(add_plan_tenure::class);
    }
}
