<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\AddPlan;
use \App\Models\add_plans;
use \App\Http\add_plan_tenure;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class AddPlanController extends Controller
{
    public function Add_plan_save(Request $request){
      $validatedData = [
         'tenure_name' => $request->tenure_name,
         'tenure_Surfix' => $request->surfix,
         'tenure_amount' => $request->text_tenureamount,
         'tenure_duration' => $request->tenureduration,
        ];
        DB::table('add_plan_tenure')->insert($validatedData);
      //  $id= DB::table('add_plan_tenure')->when()
      // $id = DB::table('users')->select('id');
      $users = DB::table('add_plan_tenure')->get();
       $addplan = new Addplan;
       $addplan->pakage_name = $request->text_Packagename;
       $addplan->services =  $request->text_browsersname;
       $addplan->comp_name = $request->complimentryname;
       $addplan->comp_duration =$request->complimentryduration;
    //    $addplan->tenure_name = $request->tenure_name;
    //    $addplan->tenure_Surfix = $request->surfix;
    //    $addplan->tenure_amount = $request->text_tenureamount;
    //    $addplan->tenure_duration = $request->tenureduration;
       $addplan->plan_price = $request->text_planprice;
       $addplan->fk_tenure_id;

       
    //    DB::commit();
    //    Toastr::success('add new success:)','success');
       $addplan->save();
       return redirect('/home');


     
    }
}
