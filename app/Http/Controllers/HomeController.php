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

        Validator::make($data, [
            'title'     => ['required', 'max:255'],
            'body'      => ['required', 'string', 'max:255'],
            'image'     => ['required', 'max:255'],
        ])->validate();

        $lsting = Listing::create([
            'title'         => $request->input('title'),
            'body'          => $request->input('body'),
            'image'         => $request->input('image'),
            'active'        => 1,
            'created_at'    => '2020-01-03 15:22:27',
            'updated_at'    => '2020-01-03 15:22:27'
        ]);      

        return redirect(route('dashboard'))->with('success', 'new record has been created.');
    }
}
