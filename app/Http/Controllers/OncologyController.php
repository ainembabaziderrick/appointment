<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OncologyModel;

class OncologyController extends Controller
{
    public function oncology()
    {
        $data['getRecord'] = OncologyModel::get();
        return view('backend.admin.oncology.list', $data);
    }

    public function add_oncology(Request $request)
    {
        return view('backend.admin.oncology.add');
    }

    public function insert_add_oncology(Request $request)
    {
        $save = new OncologyModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/oncology')->with('success', 'Oncology successfully created');

    }

    public function Editoncology($id)
    {
        $pediatrics = OncologyModel::find($id);
        return view('backend.admin.oncology.edit', compact('pediatrics'));

    }

    public function Updateoncology(Request $request, $id)
    {

        $update = OncologyModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/oncology')->with('success', 'Oncology Updated succcessfully');

    }

    public function Deleteoncology($id)
    {
        $delete = OncologyModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Oncology Deleted succcessfully');
    }

    //Patients
    public function patient_oncology()
    {
        $data['getRecord'] = OncologyModel::get();
        return view('patient.oncology.list', $data);
    }

    public function patient_add_oncology()
    {
      
        return view('patient.oncology.add');

    }
}
