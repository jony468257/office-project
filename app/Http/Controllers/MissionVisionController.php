<?php

namespace App\Http\Controllers;

use App\Models\MissionVision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class MissionVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = MissionVision::all();
            return view('backend.mission.index',compact('datas'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.mission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//        return $request->all();
            $image = imageCustomization($request->file('image'), 80, 80, 'mission', 'image');

            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'type' => $request->type,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'mission/' . $image,
            ];
            MissionVision::insert($data);
            return redirect()->route('mission-vision.index')->with('success', 'Data Created Successfully');
//            dd($data);
        } catch (\Exception $e) {
            return redirect()->route('mission-vision.index')->with('success', 'Data Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MissionVision $missionVision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = MissionVision::findOrFail($id);
            return view('backend.mission.edit', compact( 'data'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try {
            $missionVision = MissionVision::findOrFail($id);
            $missionVision->title_en = $request->title_en;
            $missionVision->title_bn = $request->title_bn;
            $missionVision->type = $request->type;
            $missionVision->description_en = $request->description_en;
            $missionVision->description_bn = $request->description_bn;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 80, 80, 'mission', 'image');
                $missionVision->image = 'mission/' . $image;
            }
            $missionVision->save();
            return redirect()->route('mission-vision.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            return Redirect::back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = MissionVision::findOrFail($id);
            Storage::delete('public/storage/sliders/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
