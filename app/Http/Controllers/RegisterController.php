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
                'email' => 'email',
                'phone' => 'required|numeric|min:10',
                'id_pic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]
        );
        

        $intern = new Intern;
        $intern->name = $request['name'];
        $intern->college = $request['college'];
        $intern->email = $request['email'];
        $intern->phone = $request['phone'];
        $intern->college_id = $request['college_id'];
        if($request->hasfile('id_pic'))
        {
            $file = $request->file('id_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
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
}
