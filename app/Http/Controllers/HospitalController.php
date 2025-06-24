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

        $case_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($case_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/locate/';
        $last_img = $up_location.$img_name;
        $case_image -> move($up_location, $img_name);

        $save = new Hospital;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->location = $request->location;
        $save->services = $request->services;
        $save->working_hours = $request->working_hours;
        $save->working_days = $request->working_days;
        $save->image = $last_img;
        $save->description = $request->description;
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
            'location' => $request->location,
            'services' => $request->services,
            'working_hours' => $request->working_hours,
            'working_days' => $request->working_days,
            'description' => $request->description,
            'image' => $request->hasFile('image') ? $request->file('image')->store('image/locate', 'public') : Hospital::find($id)->image
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
