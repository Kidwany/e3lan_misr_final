<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Billboard;
use App\Models\Child_location;
use App\Models\Child_of_child_location;
use App\Models\Image;
use App\Models\Parent_location;
use App\Models\Service;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BillboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billboards = Billboard::all();

        return view('dashboard.billboard.index', compact('billboards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::with('service_en')->where('parent_service_id', null)->get();
        $parentLocations = Parent_location::with('parentLocation_en')->get();
        $sizes = Size::all();
        return view('dashboard.billboard.create', compact('services', 'parentLocations', 'sizes'));
    }


    public function getChildLocations($id)
    {
        $childLocations = Child_location::with('childLocation_en')->where('parent_location_id', $id)->get();
        return response()->json($childLocations);
    }


    public function getChildOfChildLocations($id)
    {
        $childOfChildLocations = Child_of_child_location::with('childOfChildLocation_en')->where('child_location_id', $id)->get();
        return response()->json($childOfChildLocations);
    }

    public function getSubServices($id)
    {
        $subServices = Service::with('service_en')->where('parent_service_id', $id)->get();
        return response()->json($subServices);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $this->validate($request,[
            'image_id.*'                 => 'mimes:jpeg,jpg,png,gif',
            'images.*'                   => 'mimes:jpeg,jpg,png,gif',
            'image_id'                   => 'required',
            'name'                       => 'required',
            'code'                       => 'required|max:7',
            'dimensions'                 => 'required',
            'location'                   => 'required|url',
            'service_id'                 => 'required|int',
            'sub_service'                => 'int|nullable',
            'size'                       => 'int',
            'description'                => 'required',
            'parent_location'            => 'required|int',
            'child_location'             => 'int|nullable',
            'child_of_child_location'    => 'int|nullable',
        ], [], [
            'image_id.*'                 => 'Images',
            'images'                     => 'Images',
            'main_services'              => 'Main Services',
            'sub_services'               => 'Sub Services',
            'parent_location'            => 'Location',
            'child_location'             => 'Zone',
            'child_of_child_location'    => 'Area',
        ]);

        //Upload Slide Image
        if ($uploadedFile = $request->file('image_id'))
        {
            $fileName = time() . $uploadedFile->getClientOriginalName();
            $uploadedFile->move('dashboardImages/billboard', $fileName);
            $filePath = 'dashboardImages/billboard/'.$fileName;
            $image = Image::create(['name' => $fileName, 'path' => $filePath]);
            $input['image_id'] = $image->id;
        }

        try
        {
            if ($request->hasFile('images'))
            {
                $images = array();
                foreach ($request->images as $image) {

                    $name =  time() . $image->getClientOriginalName();

                    $image->move('dashboardImages/billboard', $name);

                    $path = 'dashboardImages/billboard/' .$name;

                    $image = Image::create(['name' => $name, 'path' => $path]);

                    $input['image_id'] = $image->id;

                    array_push($images, $image->id);
                }
            }
        }
        catch (\Exception $e)
        {
            Session::flash('exception', 'Can\'t Add Images To Billboard');
            return redirect(adminUrl('gallery'));
        }

        $billboard = new Billboard();
        $billboard->code = $input['code'];
        $billboard->image_id = $input['image_id'];
        $billboard->service_id = $input['service_id'];
        $billboard->sub_service_id = \request('sub_service');
        $billboard->parent_location_id = $input['parent_location'];
        $billboard->child_location_id = \request('child_location');
        $billboard->child_of_child_location_id = \request('child_of_child_location');
        $billboard->size_id = $input['size'];
        $billboard->location = $input['location'];
        $billboard->dimension = $input['dimensions'];
        $billboard->created_by = Auth::user()->id;
        $billboard->save();

        $billboard->billboard_en()->create(['name' => $input['name'], 'description' => $input['description']]);

        if (!empty($images))
        {
            $billboard->images()->attach($images);
        }

        return redirect(adminUrl('billboard'))->with('created', 'New Bill Board Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $billboard = Billboard::with('image')->find($id);
        return view('dashboard.billboard.show', compact('billboard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::with('service_en')->where('parent_service_id', null)->get();
        $subServices = Service::with('service_en')->where('parent_service_id', '!=', null)->get();
        $parentLocations = Parent_location::with('parentLocation_en')->get();
        $childLocations = Child_location::with('childLocation_en')->get();
        $childOfChildLocations = Child_of_child_location::with('childOfChildLocation_en')->get();
        $sizes = Size::all();
        $billboard = Billboard::with('image')->find($id);
        return view('dashboard.billboard.edit', compact('billboard', 'services', 'subServices', 'parentLocations', 'sizes', 'childLocations', 'childOfChildLocations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $billboard = Billboard::with('image')->find($id);
        $input = $request->all();
        $this->validate($request,[
            'image_id'                   => 'mimes:jpeg,jpg,png,gif',
            'images.*'                   => 'mimes:jpeg,jpg,png,gif',
            'name'                       => 'required',
            'code'                       => 'required|max:7',
            'dimensions'                 => 'required',
            'location'                   => 'required|url',
            'service_id'                 => 'required|int',
            'sub_service'                => 'int|nullable',
            'size'                       => 'int',
            'description'                => 'required',
            'parent_location'            => 'required|int',
            'child_location'             => 'int|nullable',
            'child_of_child_location'    => 'int|nullable',
        ], [], [
            'image_id.*'                 => 'Images',
            'images'                     => 'Images',
            'main_services'              => 'Main Services',
            'sub_services'               => 'Sub Services',
            'parent_location'            => 'Location',
            'child_location'             => 'Zone',
            'child_of_child_location'    => 'Area',
        ]);


        //Upload Slide Image
        if ($uploadedFile = $request->file('image_id'))
        {
            $fileName = time() . $uploadedFile->getClientOriginalName();
            $uploadedFile->move('dashboardImages/billboard', $fileName);
            $filePath = 'dashboardImages/billboard/'.$fileName;
            $image = Image::create(['name' => $fileName, 'path' => $filePath]);
            $input['image_id'] = $image->id;
            $billboard->image_id = $input['image_id'];
        }

        try
        {
            if ($request->hasFile('images'))
            {
                $images = array();
                foreach ($request->images as $image) {

                    $name =  time() . $image->getClientOriginalName();

                    $image->move('dashboardImages/billboard', $name);

                    $path = 'dashboardImages/billboard/' .$name;

                    $image = Image::create(['name' => $name, 'path' => $path]);

                    $input['image_id'] = $image->id;

                    array_push($images, $image->id);
                }
                $billboard->images()->attach($images);
            }
        }
        catch (\Exception $e)
        {
            Session::flash('exception', 'Can\'t Add Images To Billboard');
            return redirect(adminUrl('gallery'));
        }

        $billboard->code = $input['code'];
        $billboard->service_id = $input['service_id'];
        $billboard->sub_service_id = \request('sub_service');
        $billboard->parent_location_id = $input['parent_location'];
        $billboard->child_location_id = \request('child_location');
        $billboard->child_of_child_location_id = \request('child_of_child_location');
        $billboard->size_id = $input['size'];
        $billboard->location = $input['location'];
        $billboard->dimension = $input['dimensions'];
        $billboard->created_by = Auth::user()->id;
        $billboard->save();

        $billboard->billboard_en()->update(['name' => $input['name'], 'description' => $input['description']]);

        return redirect(adminUrl('billboard'))->with('update', 'Billboard Has Been Updated Successfully');
    }

    public function billboardImages($id)
    {
        $billboard = Billboard::with('image')->find($id);
        return view('dashboard.billboard.images', compact('billboard'));
    }



    public function deleteBillboardImage($id)
    {
        $image = Image::find($id);
        $image->delete();

        return redirect()->back()->with('delete', 'Image Deleted Successfully');

    }




    public function destroy($id)
    {
        $billboard = Billboard::with('image')->find($id);
        $billboard->images()->detach();
        $billboard->delete();
        Session::flash('delete', 'Billboard ' . $billboard->id . ' Has Been Deleted Successfully');
        return redirect(adminUrl('billboard'));
    }
}
