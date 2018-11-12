<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use Auth;

class StatusController extends Controller
{
    public function create() {
        return view('insert_status');
    }

    public function store(Request $request) {
        $data = new Status();
        $data->id_user = Auth::user()->id;
        $data->status = $request->status;
        $data->image = date('Ymdhis');
        $data->save();
        return redirect('/home/profile');
    }
}
