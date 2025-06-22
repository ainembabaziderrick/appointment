<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    
      public function hospital()
    {
        $data['getRecord'] = Hospital::get();
        return view('backend.admin.hospital.list', $data);
    }

    public function add_hospital(Request $request)
    {
        return view('backend.admin.hospital.add');
    }

    public function insert_add_hospital(Request $request)
    {
        $save = new Hospital;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->location = $request->location;
        $save->services = $request->services;
        $save->working_hours = $request->working_hours;
        $save->working_days = $request->working_days;
        $save->save();

        return redirect('admin/hospital')->with('success', 'Hospital successfully created');

    }

    public function Edithospital($id)
    {
        $hospital = Hospital::find($id);
        return view('backend.admin.hospital.edit', compact('hospital'));

    }

    public function Updatehospital(Request $request, $id)
    {

        $update = Hospital::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/hospital')->with('success', 'Hospital Updated succcessfully');

    }

    public function Deletehospital($id)
    {
        $delete = Hospital::find($id)->Delete();
        return Redirect()->back()->with('success', 'Hospital Deleted succcessfully');
    }

    //Patients

    public function patient_dermatology()
    {
        $data['getRecord'] = Hospital::get();
        return view('patient.hospital.list', $data);
    }

    public function patient_add_dermatology()
    {
      
        return view('patient.hospital.add');

    }

}
