<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Areas::all();
            return view('backend.areas.index',compact('datas'));
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
        return view('backend.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name_bn' => 'required|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'description_bn' => 'nullable|string|max:1000',
            'description_en' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_status' => 'required|boolean',
        ]);

        try {
            // Handle the image upload
            $image = imageCustomization($request->file('image'), 492, 370, 'areas', 'image');

            // Prepare the data for insertion
            $data = [
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'areas/' . $image,
                'row_status' => $request->row_status,
            ];

            // Insert the data into the database
            Areas::insert($data);

            // Redirect with a success message
            return redirect()->route('areas.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            // Redirect back with error message and old input values
            return redirect()->back()->with('error', 'Something went wrong!')->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Areas $newsEvents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Areas::findOrFail($id);
            return view('backend.areas.edit', compact( 'data'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validate the request
//            $request->validate([
//                'name_bn' => 'required|string|max:255',
//                'name_en' => 'nullable|string|max:255',
//                'description_bn' => 'nullable|string|max:1000',
//                'description_en' => 'nullable|string|max:1000',
//                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//                'row_status' => 'required|boolean',
//            ]);

            // Find the area entry by ID
            $area = Areas::findOrFail($id);

            // Update the fields
            $area->name_bn = $request->name_bn;
            $area->name_en = $request->name_en;
            $area->description_bn = $request->description_bn;
            $area->description_en = $request->description_en;
            $area->row_status = $request->row_status;

            // Handle the image upload
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 492, 370, 'areas', 'image');
                $area->image = 'areas/' . $image;
            }

            // Save the updated entry
            $area->save();

            return redirect()->route('areas.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            return Redirect::back()->with('error', $e->getMessage())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Areas::findOrFail($id);
            Storage::delete('public/storage/areas/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
