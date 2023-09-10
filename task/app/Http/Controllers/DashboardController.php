<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Employee;

class DashboardController extends Controller
{

    public function Role_manage()
    {
        return view('Dashboard.Role.RoleManage', ['role' => Role::get()]);
    }
    public function Role_Add(Request $request)
    {
        $role = new Role;
        $role->Role_name = $request->Role_name;
        $role->Role_type = $request->Role_type;
        $role->Is_sale_incentive = $request->Is_sale_incentive;
        $role->save();
        return redirect('/Role');
    }
  
     public function Role_edit(Request $request,$id){
        $Role = Role::where('id',$id)->first();
    $Role->Role_name = $request->role_name;
    $Role->Role_type = $request->select_role;
    $Role->Is_sale_incentive = $request->Is_sale_incentive;
    $Role->save();
    return redirect('/Role');
     }
  
     public function Role_delete($id){
        $role= Role::where('id',$id)->first();
    $role->delete();
    return redirect('/Role');
     }

    // Enquiry_manage
    public function Enquiry_manage()
    {
        return view('Dashboard.Enquiry.Enquiry');
    }

    //    Members_manage
    public function Members_manage()
    {
        return view('Dashboard.Members.Members');
    }

    //    Pakage_manage
    public function Package_manage()
    {
        return view('Dashboard.Package.Package');
    }

    //    Report_manage
    public function Report_manage()
    {
        return view('Dashboard.Report.Report');
    }

    // Trial_manage
    public function Trial_manage()
    {
        return view('Dashboard.Trial.Trial');
    }
}
