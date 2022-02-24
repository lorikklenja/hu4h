<?php

namespace App\Http\Controllers;
use App\Models\UserForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function getwithAPI(){
        $forms = UserForm::get();

        return response()->json($forms, 200, array() ,JSON_PRETTY_PRINT);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'image' => 'required|mimes:jpg,bmp,png,jpeg'
        ]);

        $newImageName = time() . '-' . $request->firstname . '.' . $request->image->extension();
        $request->image->move(storage_path('app/public'), $newImageName);
        
        UserForm::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'image_path' => $newImageName
        ]);
        
        return view('/users')->with('param',$request->all())->with('image_url',$newImageName);
    }

    public function storewithAPI(Request $request) {

        UserForm::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'image_path' => $request->image
        ]);

        return response()->json([
            "message" => "Form Submitted",
            "FirstName" => "$request->firstname",
            "LastName" => "$request->lastname",
            "Email" => "$request->email",
            "Phone" => "$request->phone",
            "image_path" => "$request->image"
        ], 201);
    }
}
