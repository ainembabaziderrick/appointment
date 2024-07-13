<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PediatricsModel;

class PediatricsController extends Controller
{
    public function pediatrics()
    {
        $data['getRecord'] = PediatricsModel::get();
        return view('backend.admin.pediatrics.list', $data);
    }

    public function add_pediatrics(Request $request)
    {
        return view('backend.admin.pediatrics.add');
    }

    public function insert_add_pediatrics(Request $request)
    {
        $save = new PediatricsModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/pediatrics')->with('success', 'Pediatrics successfully created');

    }

    public function Editpediatrics($id)
    {
        $pediatrics = PediatricsModel::find($id);
        return view('backend.admin.pediatrics.edit', compact('pediatrics'));

    }

    public function Updatepediatrics(Request $request, $id)
    {

        $update = PediatricsModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/pediatrics')->with('success', 'Pediatrics Updated succcessfully');

    }

    public function Deletepediatrics($id)
    {
        $delete = PediatricsModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Pediatrics Deleted succcessfully');
    }


    //Citizen

    public function patient_pediatrics()
    {
        $data['getRecord'] = PediatricsModel::get();
        return view('patient.pediatrics.list', $data);
    }

    public function patient_Editpediatrics($id)
    {
        $pediatrics = PediatricsModel::find($id);
        return view('patient.pediatrics.edit', compact('pediatrics'));

    }

    public function patient_Updatepediatrics(Request $request, $id)
    {

        $update = PediatricsModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
            'patient_name' => $request->patient_name,
            'patient_contact' => $request->patient_contact,
            'message' => $request->message,
        ]);
        return redirect('patient/pediatrics')->with('success', 'Pediatrics Connected succcessfully');

    }

    public function patient_add_pediatrics()
    {
        $pediatrics = PediatricsModel::get();
        return view('patient.pediatrics.add', compact('pediatrics'));
    }

    public function patient_insert_add_pediatrics(Request $request)
    {
        $save = new PediatricsModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('patient/pediatrics')->with('success', 'Pediatrics successfully Connected');

    }
}
