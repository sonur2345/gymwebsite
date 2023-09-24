<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddPlan;
use App\Models\Members;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    //    Members_manage
    public function Members_manage()
    {
        $member= Members::get();
        // $fk =$member->fk_mem_id;
        $members = DB::table('members')
        ->join('add_plans','members.fk_pakage_id','=','add_plans.id')->get();
        return view('Dashboard.Members.Members',['pakage' => AddPlan::get()],compact('members'));
    }

    public function Members_save(Request $request){
     $member = new Members;
     $member->mem_Name = $request->member_name;
     $member->fk_pakage_id = $request->mem_pakage_id;
     $member->mem_number = $request->member_number;
     $member->mem_gender = $request->member_gender;
     $member->mem_marid_statuss = $request->marid_status;
     $member->mem_email = $request->member_email;
     $member->mem_dob = $request->member_dob;
     $member->mem_date_join = $request->date_of_join_mem;
     $member->mem_pan_num = $request->mem_pan_number;
     $member->mem_aadhar = $request->mem_aadhar_number;
     $member->mem_address = $request->mem_address;
     $member->mem_status = $request->mem_status;
     $member->st_check_in = $request->entrytime2;
     $member->st_check_out = $request->exittime2;
     $member->sp_m_check_in = $request->entrytime;
     $member->sp_m_check_out = $request->exittime;
     $member->sp_e_check_in = $request->entrytime1;
     $member->sp_e_check_out = $request->exittime1;
     $member->save();
     return redirect('/Members');

    }
}
