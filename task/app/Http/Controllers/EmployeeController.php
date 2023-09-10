<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Role;

class EmployeeController extends Controller
{
  // Emplyoee manage
  public function Employee_manage()
  {
      return view('Dashboard.Employee.Employee',['role' => Role::get()],['employee' => Employee::get()]);
  }

    public  function Employee_Save(Request $request){
     $employee= new Employee;
     $employee->Emp_Name = $request->emplouee_name;
     $employee->Emp_dob = $request->employee_dob;
     $employee->Emp_age = $request->emplyee_age;
     $employee->Emp_number = $request->emplouee_number;
     $employee->Emp_alt_number = $request->employee_altnumber;
     $employee->Emp_gender = $request->emplyee_gender;
     $employee->Emp_marid_statuss = $request->marid_status;
     $employee->Emp_email = $request->employee_email;
     $employee->Emp_role = $request->add_emp_role;
     $employee->Emp_date_join = $request->date_of_join_emp;
     $employee->Emp_pan_num = $request->emplouee_pan_number;
     $employee->Emp_salary = $request->employee_salary;
     $employee->Emp_no_leave = $request->emplyee_leave;
     $employee->Emp_aadhar = $request->emplouee_aadhar_number;
     $employee->Emp_address = $request->employee_address;
     $employee->st_check_in = $request->entrytime2;
     $employee->st_check_out = $request->exittime2;
     $employee->sp_m_check_in = $request->entrytime;
     $employee->sp_m_check_out = $request->exittime;
     $employee->sp_e_check_in = $request->entrytime1;
     $employee->sp_e_check_out = $request->exittime1;
     $employee->la_m_check_in_out = $request->lateminutes;
     $employee->Emp_status = $request->employee_status;
     $employee->save();
     return redirect('/Employee');
    }
    public function Employee_edit(Request $request, $id){
        $employee = Employee::where('id',$id)->first();
        $employee->Emp_Name = $request->emplouee_name;
        $employee->Emp_dob = $request->employee_dob;
        $employee->Emp_age = $request->emplyee_age;
        $employee->Emp_number = $request->emplouee_number;
        $employee->Emp_alt_number = $request->employee_altnumber;
        $employee->Emp_gender = $request->emplyee_gender;
        $employee->Emp_marid_statuss = $request->marid_status;
        $employee->Emp_email = $request->employee_email;
        $employee->Emp_role = $request->add_emp_role;
        $employee->Emp_date_join = $request->date_of_join_emp;
        $employee->Emp_pan_num = $request->emplouee_pan_number;
        $employee->Emp_salary = $request->employee_salary;
        $employee->Emp_no_leave = $request->emplyee_leave;
        $employee->Emp_aadhar = $request->emplouee_aadhar_number;
        $employee->Emp_address = $request->employee_address;
        $employee->st_check_in = $request->entrytime2;
        $employee->st_check_out = $request->exittime2;
        $employee->sp_m_check_in = $request->entrytime;
        $employee->sp_m_check_out = $request->exittime;
        $employee->sp_e_check_in = $request->entrytime1;
        $employee->sp_e_check_out = $request->exittime1;
        $employee->la_m_check_in_out = $request->lateminutes;
        $employee->Emp_status = $request->employee_status;
        $employee->save();
        return redirect('/Employee');
        
    }

    public function Employee_delete($id){
    $employee= Employee::where('id',$id)->first();
    $employee->delete();
    return redirect('/Employee');
}
 
}
