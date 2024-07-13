<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardiologyModel;

class CardiologyController extends Controller
{
    public function cardiology()
    {
        $data['getRecord'] = CardiologyModel::get();
        return view('backend.admin.cardiology.list', $data);
    }

    public function add_cardiology(Request $request)
    {
        return view('backend.admin.cardiology.add');
    }

    public function insert_add_cardiology(Request $request)
    {
        $save = new CardiologyModel;
        $save->name = $request->name;
        $save->contact = $request->contact;
        $save->email = $request->email;
        $save->address = $request->address;
        $save->save();

        return redirect('admin/cardiology')->with('success', 'Cardiology successfully created');

    }

    public function Editcardiology($id)
    {
        $pediatrics = CardiologyModel::find($id);
        return view('backend.admin.cardiology.edit', compact('pediatrics'));

    }

    public function Updatecardiology(Request $request, $id)
    {

        $update = CardiologyModel::find($id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('admin/cardiology')->with('success', 'Cardiology Updated succcessfully');

    }

    public function Deletecardiology($id)
    {
        $delete = CardiologyModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Cardiology Deleted succcessfully');
    }

     //Patients

     public function patient_cardiology()
     {
         $data['getRecord'] = CardiologyModel::get();
         return view('patient.cardiology.list', $data);
     }
 
     public function patient_add_cardiology()
     {
       
         return view('patient.cardiology.add');
 
     }
}
