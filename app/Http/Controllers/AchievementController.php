<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Achievement::all();
            return view('backend.achievement.index',compact('datas'));
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
        return view('backend.achievement.create');
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request)
    {
        $request->validate([
            'title_bn' => 'required|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'contests_bn' => 'required|string|max:255',
            'contests_en' => 'nullable|string|max:255',
            'description_bn' => 'nullable|string|max:1000',
            'description_en' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_status' => 'required|boolean',
        ]);

        try {
            $image = imageCustomization($request->file('image'), 1024, 720, 'achievement', 'image');

            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'contests_en' => $request->contests_en,
                'contests_bn' => $request->contests_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'achievement/' . $image,
                'row_status' => $request->row_status,
            ];

            Achievement::create($data);

            return redirect()->route('achievement.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Achievement::findOrFail($id);
            return view('backend.achievement.edit', compact( 'data'));
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
            // Validate the incoming request data
//            $request->validate([
//                'title_en' => 'nullable|string|max:255',
//                'title_bn' => 'required|string|max:255',
//                'contests_en' => 'nullable|string|max:255',
//                'contests_bn' => 'required|string|max:255',
//                'description_en' => 'nullable|string|max:1000',
//                'description_bn' => 'required|string|max:1000',
//                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//                'row_status' => 'required|boolean',
//            ]);

            // Find the existing record
            $achievement = Achievement::findOrFail($id);

            // Update the fields with the request data
            $achievement->title_en = $request->title_en;
            $achievement->title_bn = $request->title_bn;
            $achievement->contests_en = $request->contests_en;
            $achievement->contests_bn = $request->contests_bn;
            $achievement->description_en = $request->description_en;
            $achievement->description_bn = $request->description_bn;
            $achievement->row_status = $request->row_status;

            // Handle file upload for the image
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 1024, 720, 'achievement', 'image');
                $achievement->image = 'achievement/' . $image;
            }

            // Save the updated data
            $achievement->save();

            // Redirect with success message
            return redirect()->route('achievement.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            // Redirect back with error message
            return Redirect::back()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Achievement::findOrFail($id);
            Storage::delete('public/storage/achievement/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
