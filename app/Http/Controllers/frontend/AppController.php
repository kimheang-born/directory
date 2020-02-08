<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;
use App\User;
use Cohensive\Embed\Facades\Embed;

class AppController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }    

    public function listing($id)
    {
        $data       = Listing::findOrFail($id);
        $video_url  = $data->video ? $data->video->url : null;
        $video      = Embed::make($video_url)->parseUrl();

        // dd($data->galleries);
        // dd($data->user);
        // dd($data->user->userGalleries);

        if ($video):
            $video->setAttribute(['width' => 600]);
            $video = $video->getHtml();

        else:
            $video = null; 

        endif;

        return view('frontend.listing', ['model' => $data, 'video' => $video]);
    }

    public function listings(Request $request)
    {
        $search     = $request->input('search');

        $listings   = Listing::select('id', 'title', 'description', 'image', 'location')
        ->when($search, function($query, $search) {
            return $query->where('title', 'LIKE', "%$search%");
        })
        ->paginate(8);

        return view('frontend.listings', ['listings' => $listings]);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function user($id)
    {
        $user = User::findOrFail($id);
        return view('frontend.user', ['user' => $user]);
    }
}
