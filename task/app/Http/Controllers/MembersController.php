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
        $Members = DB::table('members')
        ->select('members.*','add_plans.pakage_name')
        ->join('add_plans','members.fk_pakage_id','=','add_plans.id')
        ->get();
        return view('Dashboard.Members.Members',compact('Members'),['pakage' => AddPlan::get()]);
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

    public function Members_edit(Request $request ,$id){
     $member = Members::where('id',$id)->first();
     $member->mem_Name = $request->Member_name;
     $member->fk_pakage_id = $request->Mem_pakage_id;
     $member->mem_number = $request->Member_number;
     $member->mem_gender = $request->Member_gender;
     $member->mem_marid_statuss = $request->Marid_status;
     $member->mem_email = $request->Member_email;
     $member->mem_dob = $request->Member_dob;
     $member->mem_date_join = $request->Date_of_join_mem;
     $member->mem_pan_num = $request->Mem_pan_number;
     $member->mem_aadhar = $request->Mem_aadhar_number;
     $member->mem_address = $request->Mem_address;
     $member->mem_status = $request->Mem_status;
     $member->st_check_in = $request->Entrytime2;
     $member->st_check_out = $request->Exittime2;
     $member->sp_m_check_in = $request->entrytime;
     $member->sp_m_check_out = $request->exittime;
     $member->sp_e_check_in = $request->entrytime1;
     $member->sp_e_check_out = $request->exittime1;
     $member->save();
     return redirect('/Members');
    }

    public function Members_delete($id){
        $member= Members::where('id',$id)->first();
        $member->delete();
        return redirect('/Members');
    }
}
