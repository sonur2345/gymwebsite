<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Enquiry;
use App\Models\Trial;

class EnquiryController extends Controller
{
    // Enquiry_manage
    public function Enquiry_manage()
    {
        return view('Dashboard.Enquiry.Enquiry', ['employee' => Employee::get()], ['enquiry' => Enquiry::get()]);
    }

    public function Enquiry_save(Request $request)
    {
        if ($request->action == 'trial_save') {
            $trial = new Trial;

            $trial->name = $request->m_name;
            $trial->adv_name = $request->add_emp_role;
            $trial->mobile_num = $request->number;
            $trial->trial_date = $request->date;
            $trial->gender = $request->gender;
            $trial->Description = $request->description;
            $trial->trial_serv = $request->text_trialservices;
            $trial->start_date = $request->trial_startdate;
            $trial->end_date = $request->trial_enddate;
            $trial->save();
            return redirect('/home');
        }
        if ($request->action == 'save') {

            $enquiry = new Enquiry;

            $enquiry->name = $request->m_name;
            $enquiry->adv_name = $request->add_emp_role;
            $enquiry->mobile_num = $request->number;
            $enquiry->trial_date = $request->date;
            $enquiry->gender = $request->gender;
            $enquiry->Description = $request->description;
            $enquiry->N_follow_days = $request->enquiry_followdays;
            $enquiry->follow_days = $request->enquiry_followdate;
            $enquiry->save();
            return redirect()->back();
        }
    }
}
