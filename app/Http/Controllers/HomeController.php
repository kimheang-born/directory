<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    public function create(Request $request)

    {
        $data = $request->all();

        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        // ]);

        // $image = $request->file('image');
        // $new_name = rand().'.'.$image->getClientOriginalExtension();
        // $image->move(public_path("img/listing"), $new_name);

        $request->validate([
            'title'         => 'required|max:255',
            'description'   => 'required|max:255',
            'location'      => 'required|max:255',
            'phone'         => 'required',
            'email'         => 'required|email|unique:listings,email|max:255',
            'image'         => 'required|max:255',
        ]);

        $lsting = Listing::create([
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'location'      => $request->input('location'),
            'phone'         => $request->input('phone'),
            'email'         => $request->input('email'),
            'image'         => $request->input('image'),
        ]);      

        return redirect(route('dashboard'))->with('success', 'new record has been created.');
    }
}
