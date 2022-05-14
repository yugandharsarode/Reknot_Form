<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;

class RegisterController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'college' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:10',
                'college_id' => 'required',
                'id_pic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'percentage' => 'required|numeric',
                'pc' => 'required',
                'address' => 'required'
            ]
        );


        $intern = new Intern;
        $intern->name = $request['name'];
        $intern->college = $request['college'];
        $intern->email = $request['email'];
        $intern->phone = $request['phone'];
        $intern->college_id = $request['college_id'];
        $img_name = $request['college_id'];
        if($request->hasfile('id_pic'))
        {
            $file = $request->file('id_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = $img_name.'.'.$extension;
            $file->move('uploads', $filename);
            $intern->id_pic = $filename;
        }
        $intern->percentage = $request['percentage'];
        $intern->pc = $request['pc'];
        $intern->address = $request['address'];
        $intern->save();
        return redirect()->back()->with('status', 'Your data has been recorded, we will contact you soon');
    }

    public function display()
    {
        $interns = Intern::all();
        $data = compact('interns');
        return view('display')->with($data);
        
    }

    public function edit($id)
    {
        $interns = Intern::find($id);
        if(is_null($interns))
        {
            return view('/display');
        }
        else
        {
            $url = url('/edit_data/update')."/".$id;
            $tittle = "Update your Data";
            $data = compact('interns','url','tittle');
            return view('edit_data')->with($data);               
        }       
    } 

    public function update($id,Request $request)
    {
        $intern = Intern::find($id);
        $intern->name = $request['name'];
        $intern->college = $request['college'];
        $intern->email = $request['email'];
        $intern->phone = $request['phone'];
        $intern->college_id = $request['college_id'];
        $img_name = $request['college_id'];
        if($request->hasfile('id_pic'))
        {
            $file = $request->file('id_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = $img_name.'.'.$extension;
            $file->move('uploads', $filename);
            $intern->id_pic = $filename;
        }
        $intern->percentage = $request['percentage'];
        $intern->pc = $request['pc'];
        $intern->address = $request['address'];
        $intern->save();
        return redirect('/display');
    }
}
