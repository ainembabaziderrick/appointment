<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PsychiatryModel;

class PsychiatryController extends Controller
{
    public function psychiatry()
    {
        $data['getRecord'] = PsychiatryModel::get();
        return view('backend.admin.psychiatry.list', $data);
    }

    public function add_psychiatry(Request $request)
    {
        return view('backend.admin.psychiatry.add');
    }

    public function insert_add_psychiatry(Request $request)
    {
        $save = new PsychiatryModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/psychiatry')->with('success', 'Psychiatry successfully created');

    }

    public function Editpsychiatry($id)
    {
        $pediatrics = PsychiatryModel::find($id);
        return view('backend.admin.psychiatry.edit', compact('pediatrics'));

    }

    public function Updatepsychiatry(Request $request, $id)
    {

        $update = PsychiatryModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/psychiatry')->with('success', 'Psychiatry Updated succcessfully');

    }

    public function Deletepsychiatry($id)
    {
        $delete = PsychiatryModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Psychiatry Deleted succcessfully');
    }

     //Patients

     public function patient_psychiatry()
     {
         $data['getRecord'] = PsychiatryModel::get();
         return view('patient.psychiatry.list', $data);
     }
 
     public function patient_add_psychiatry()
     {
       
         return view('patient.psychiatry.add');
 
     }

}
