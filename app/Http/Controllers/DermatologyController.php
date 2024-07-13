<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DermatologyModel;


class DermatologyController extends Controller
{
    public function dermatology()
    {
        $data['getRecord'] = DermatologyModel::get();
        return view('backend.admin.dermatology.list', $data);
    }

    public function add_dermatology(Request $request)
    {
        return view('backend.admin.dermatology.add');
    }

    public function insert_add_dermatology(Request $request)
    {
        $save = new DermatologyModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/dermatology')->with('success', 'Dermatology successfully created');

    }

    public function Editdermatology($id)
    {
        $pediatrics = DermatologyModel::find($id);
        return view('backend.admin.dermatology.edit', compact('pediatrics'));

    }

    public function Updatedermatology(Request $request, $id)
    {

        $update = DermatologyModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/dermatology')->with('success', 'Dermatology Updated succcessfully');

    }

    public function Deletedermatology($id)
    {
        $delete = DermatologyModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Dermatology Deleted succcessfully');
    }

    //Patients

    public function patient_dermatology()
    {
        $data['getRecord'] = DermatologyModel::get();
        return view('patient.dermatology.list', $data);
    }

    public function patient_add_dermatology()
    {
      
        return view('patient.dermatology.add');

    }
}
