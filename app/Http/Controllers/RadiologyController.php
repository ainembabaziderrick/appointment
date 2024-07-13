<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RadiologyModel;

class RadiologyController extends Controller
{
    public function radiology()
    {
        $data['getRecord'] = RadiologyModel::get();
        return view('backend.admin.radiology.list', $data);
    }

    public function add_radiology(Request $request)
    {
        return view('backend.admin.radiology.add');
    }

    public function insert_add_radiology(Request $request)
    {
        $save = new RadiologyModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/radiology')->with('success', 'Radiology successfully created');

    }

    public function Editradiology($id)
    {
        $pediatrics = RadiologyModel::find($id);
        return view('backend.admin.radiology.edit', compact('pediatrics'));

    }

    public function Updateradiology(Request $request, $id)
    {

        $update = RadiologyModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/radiology')->with('success', 'Radiology Updated succcessfully');

    }

    public function Deleteradiology($id)
    {
        $delete = RadiologyModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Radiology Deleted succcessfully');
    }

     //Patients

     public function patient_radiology()
     {
         $data['getRecord'] = RadiologyModel::get();
         return view('patient.radiology.list', $data);
     }
 
     public function patient_add_radiology()
     {
       
         return view('patient.radiology.add');
 
     }

}
