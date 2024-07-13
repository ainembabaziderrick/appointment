<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GynaecologyModel;

class GynaecologyController extends Controller
{
    public function gynaecology()
    {
        $data['getRecord'] = GynaecologyModel::get();
        return view('backend.admin.gynaecology.list', $data);
    }

    public function add_gynaecology(Request $request)
    {
        return view('backend.admin.gynaecology.add');
    }

    public function insert_add_gynaecology(Request $request)
    {
        $save = new GynaecologyModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/gynaecology')->with('success', 'Gynaecology successfully created');

    }

    public function Editgynaecology($id)
    {
        $pediatrics = GynaecologyModel::find($id);
        return view('backend.admin.gynaecology.edit', compact('pediatrics'));

    }

    public function Updategynaecology(Request $request, $id)
    {

        $update = GynaecologyModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/gynaecology')->with('success', 'Gynaecology Updated succcessfully');

    }

    public function Deletegynaecology($id)
    {
        $delete = GynaecologyModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Gynaecology Deleted succcessfully');
    }

     //Patients

     public function patient_gynaecology()
     {
         $data['getRecord'] = GynaecologyModel::get();
         return view('patient.gynaecology.list', $data);
     }
 
     public function patient_add_gynaecology()
     {
       
         return view('patient.gynaecology.add');
 
     }
}
