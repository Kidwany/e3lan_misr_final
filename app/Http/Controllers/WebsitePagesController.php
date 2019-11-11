<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Client;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class WebsitePagesController extends Controller
{
    public function index()
    {
        $slides = Slider::with('slider_'.currentLang(), 'image')->get();
        $projects = Project::with('project_en')->limit(6)->orderBy('created_at', 'desc')->get();
        $clients = Client::with('image')->orderBy('created_at', 'desc')->limit(10)->get();
        return view('website.welcome', compact( 'slides', 'images', 'projects', 'clients', 'images'));
    }

    public function project()
    {
        $projects = Project::with('image')->orderBy('created_at', 'desc')->get();
        return view('website.portfolio', compact('projects'));
    }

    public function projectDetails($id)
    {
        $project = Project::with('images', 'image')->find($id);
        if ($project)
        {
            $next = Project::where('id', '>', $id)->orderBy('id', 'asc')->first();
            $previous = Project::where('id', '<', $id)->orderBy('id', 'desc')->first();
            return view('website.project', compact('project', 'next', 'previous'));
        }
    }


    public function about()
    {
        return view('website.about', compact('og'));
    }

    public function contact()
    {
        $contact = Contact::orderby('id', 'desc')->first();
        return view('website.contact', compact('contact'));
    }


    public function client()
    {
        $clients = Client::with('image')->get();
        return view('website.client', compact('clients'));
    }


    public function message(Request $request)
    {
        $input = Input::get();
        $this->validate($request,[
            'email'         => 'bail|required|email|max:100',
            'name'          => 'bail|required|max:100',
            'phone'          => 'bail|required|max:14',
            'message'       => 'bail|required|min:30|max:500',
        ], [], [
            'email'         => 'Email',
            'name'          => 'Name ',
            'phone'          => 'Phone ',
            'message'       => 'Message',
        ]);

        $message = new Message;
        $message->name = $input['name'];
        $message->email = $input['email'];
        $message->phone = $input['phone'];
        $message->title = $input['title'];
        $message->message = $input['message'];
        $message->phone = 1;

        $message->save();
        Session::flash('create', ' Thanks for your Message ' . $message->name .  ' We Will Contact you within two days ');

        return redirect('contact#contact');
    }


    public function service()
    {
        //$services = Service::with('childService')->where('parent_service_id', null)->get()
        return view('website.service');
    }

    public function team()
    {
        $members = Team::with('image')->get();
        return view('website.team', compact('members'));
    }

}

























