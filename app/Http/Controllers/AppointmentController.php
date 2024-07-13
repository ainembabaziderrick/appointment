<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function appointments()
    {
        $data['getRecord'] = Appointment::get();
        return view('backend.admin.appointments.list', $data);
    }

    public function patient_add_appointments(Request $request)
    {
        return view('backend.admin.appointments.add');
    }

    public function insert_add_appointments(Request $request)
    {
        $save = new Appointment;
        $save->crime_type = $request->crime_type;


        $save->save();

        return redirect('admin/crimes')->with('success', 'Crime successfully created');

    }

    public function Editappointments($id)
    {
        $crimes = Appointment::find($id);
        return view('admin.crimes.edit', compact('crimes'));

    }

    public function Updateappointments(Request $request, $id)
    {

        $update = Appointment::find($id)->update([
            'crime_type' => $request->crime_type,



        ]);
        return redirect('admin/crimes')->with('success', 'Crime Updated succcessfully');

    }

    public function Deleteappointments($id)
    {
        $delete = Appointment::find($id)->Delete();
        return Redirect()->back()->with('success', 'Crime Deleted succcessfully');
    }

    //Patients

    public function patient_insert_add_pediatrics(Request $request)
    {

        $save = new Appointment;
        $save->doctor = $request->doctor;
        $save->name = $request->name;
        $save->age = $request->age;
        $save->address = $request->address;
        $save->contact = $request->contact;
        $save->reason = $request->reason;
        $save->date = $request->date;
        $save->save();

        return redirect('patient/pediatrics')->with('success', 'Pediatrics successfully Connected');

    }

    // doctor

    public function doctorappointments()
    {
        $data['getRecord'] = Appointment::get();
        return view('doctor.appointments.list', $data);
    }

    public function Editdoctor($id)
    {
        $pediatrics = Appointment::find($id);
        return view('doctor.appointments.edit', compact('pediatrics'));

    }

    public function Updatedoctor(Request $request, $id)
    {

        $update = Appointment::find($id)->update([
            'doctor' => $request->doctor,
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'contact' => $request->contact,
            'reason' => $request->reason,
            'date' => $request->date,
           
        ]);
        return redirect('doctor/appointments')->with('success', 'Appointment Confirmed succcessfully');

    }

    public function doctorDeleteappointments($id)
    {
        $delete = Appointment::find($id)->Delete();
        return Redirect()->back()->with('success', 'Appointment Declined succcessfully');
    }

}
