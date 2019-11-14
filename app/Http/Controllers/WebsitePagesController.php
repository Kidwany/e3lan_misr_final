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
use App\Models\Parent_location;
use App\Models\About;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Campaign;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class WebsitePagesController extends Controller
{
    public function index()
    {
        // $slides = Slider::with('slider_'.currentLang(), 'image')->get();
        // //$projects = Project::with('project_en')->limit(6)->orderBy('created_at', 'desc')->get();
        // $clients = Client::with('image')->orderBy('created_at', 'desc')->limit(10)->get();
        return view('website.welcome');
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
        $about = About::with('about_en', 'about_ar', 'missionImage', 'visionImage', 'valuesImage')->orderBy('created_at', 'desc')->first();
        // dd($about);
        return view('website.about',compact('about'));
    }

    public function contact()
    {
        $contact = Contact::orderby('id', 'desc')->first();
        return view('website.contact', compact('contact'));
    }


    public function client()
    {
        $clients = Client::with('image')->paginate(6);
        return view('website.client', compact('clients'));
    }

    public function buildCamp()
    {
        $locations = Parent_location::with('parentLocation_en')->get();
        $buildCamps = Service::with('service_en', 'createdBy', 'image')->where('parent_service_id', null)->get();
        return view('website.buildCamp', compact('buildCamps','locations'));
    }

    public function service()
    {
        $services = Service::with('service_en', 'createdBy', 'image')->where('parent_service_id', null)->get();
        return view('website.services', compact('services'));
    }


    public function message(Request $request)
    {
     

        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->Phone;
        $message->title = $request->subject;
        $message->message = $request->message;
        $message->phone = 1;

        $message->save();
        return redirect()->back()->with('message', 'We Will Contact you within two days ');

    }


   

    public function team()
    {
        $members = Team::with('image')->get();
        return view('website.team', compact('members'));
    }


    public function service_details($id)
    {
        $services = Service::with('service_en', 'createdBy', 'image')->where('id', $id)->first();
        return view('website.services_details', compact('services'));
    }

    public function add_buildCamp($id,Request $request)
    {
        dd($request);
        $services = Service::with('service_en', 'createdBy', 'image')->where('id', $id)->first();
        return view('website.services_details', compact('services'));
    }


}

























