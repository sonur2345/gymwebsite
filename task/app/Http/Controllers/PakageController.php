<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddPlan;
use App\Models\AddPlantenure;

class PakageController extends Controller
{
    //    Pakage_manage
    public function Package_manage()
    {
        
        return view('Dashboard.Package.Package', ['pakage' => AddPlan::get()],['plantenure' => AddPlantenure::get()]);
    }
}
