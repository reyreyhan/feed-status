<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Status;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::where('id_user',Auth::user()->id)->count();
        if($profile == 0) {
            return view('insert_profile');
        } else {
            return view('home');
        }
    }

    public function store(Request $request) {
        $data = new Profile();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->id_user = Auth::user()->id;

        
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'file' => 'required|max:2000|mimes:jpeg,png,jpg',
        ]);
        

        $file = $request->file('file');
        $path = base_path() . '/public/upload/profile';
        $fileName = date('Ymdhis') . "." . $file->getClientOriginalExtension();
        $upload = $request->file('file')->move($path,$fileName);
        $data->image = $fileName;
        $data->save();
        
        return redirect('/home');

    }

    public function profile() {
        $data = Profile::where('id_user',Auth::user()->id)->with(['user'])->first();
        $status = Status::where('id_user',Auth::user()->id)->get();
        return view('profile',compact('data','status'));
    }

    public function edit() {
        $data = Profile::where('id_user',Auth::user()->id)->first();
        return view('edit_profile',compact('data'));
    }

    public function update(Request $request) {
        $data = Profile::where('id_user',Auth::user()->id)->first();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->save();
        return redirect('home/profile');
    }

    public function delete($id) {
        $data = Status::where('id',$id)->first();
        $data->delete();
        return redirect()->back();
    }
}
