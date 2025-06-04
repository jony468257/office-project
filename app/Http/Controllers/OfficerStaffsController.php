<?php

namespace App\Http\Controllers;

use App\Models\OfficerStaffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class  OfficerStaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = OfficerStaffs::all();
            return view('backend.staffs.index',compact('datas'));
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//        return $request->all();
            $image = imageCustomization($request->file('image'), 600, 400, 'teachers', 'image');

            $data = [
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'designation' => $request->designation,
                'shift' => $request->shift,
                'email' => $request->email,
                'phone' => $request->phone,
                'image' => 'teachers/' . $image,
            ];
            OfficerStaffs::insert($data);
            return redirect()->route('officers-and-staffs.index')->with('success', 'Data Created Successfully');

//            dd($basicInfo);
        } catch (\Exception $e) {
            return redirect()->route('officers-and-staffs.index')->with('success', 'Data Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(OfficerStaffs $officerStaffs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = OfficerStaffs::findOrFail($id);
            return view('backend.staffs.edit', compact( 'data'));
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
            $officer = OfficerStaffs::findOrFail($id);
            $officer->name_en = $request->name_en;
            $officer->name_bn = $request->name_bn;
            $officer->shift = $request->shift;
            $officer->designation = $request->designation;
            $officer->email = $request->email;
            $officer->phone = $request->phone;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 1024, 720, 'teachers', 'image');
                $officer->image = 'teachers/' . $image;
            }
            $officer->save();
            return redirect()->route('officers-and-staffs.index')->with('success', 'Data Updated Successfully');
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
            $data = OfficerStaffs::findOrFail($id);
            Storage::delete('public/storage/sliders/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
