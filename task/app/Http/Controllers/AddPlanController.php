<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\AddPlan;
use \App\Models\AddPlantenure;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class AddPlanController extends Controller
{
    public function Add_plan_save(Request $request){
      
       $addtenure = new AddPlantenure;
      $addtenure->tenure_name = $request->tenure_name;
       $addtenure->tenure_Surfix = $request->surfix;
       $addtenure->tenure_amount = $request->text_tenureamount;
       $addtenure->tenure_duration = $request->tenureduration;
       $addtenure->save();

       $addplan = new Addplan;
       $addplan->pakage_name = $request->text_Packagename;
       $addplan->services =  $request->text_browsersname;
       $addplan->comp_name = $request->complimentryname;
       $addplan->comp_duration =$request->complimentryduration;
       $addplan->plan_price = $request->text_planprice;
       $addplan->fk_tenure_id = $addtenure->id;
       $addplan->save();
       return redirect('/home');


     
    }
}
