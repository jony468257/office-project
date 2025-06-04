<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = About::all();
//          dd($datas);
            return view('backend.about.index', compact('datas'));
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
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $request->validate([
                'title_en' => 'nullable|string|max:255',
                'title_bn' => 'required|string|max:255',
                'contests_en' => 'required|string|max:255',
                'contests_bn' => 'required|string|max:255',
                'description_en' => 'nullable|string|max:1000',
                'description_bn' => 'required|string|max:1000',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'row_status' => 'nullable|boolean',
            ]);

            $image = imageCustomization($request->file('image'), 1024, 720, 'abouts', 'image');

            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'contests_en' => $request->contests_en,
                'contests_bn' => $request->contests_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'abouts/' . $image,
                'row_status' => $request->has('row_status') ? true : false,
            ];
            About::create($data);
            return redirect()->route('about.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            return redirect()->route('about.index')->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = About::findOrFail($id);
            return view('backend.about.edit', compact( 'data'));
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
            $ataGlance = About::findOrFail($id);
            $ataGlance->title_en = $request->title_en;
            $ataGlance->title_bn = $request->title_bn;
            $ataGlance->description_en = $request->description_en;
            $ataGlance->description_bn = $request->description_bn;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 1024, 720, 'abouts', 'image');
                $ataGlance->image = 'abouts/' . $image;
            }
            $ataGlance->save();
            return redirect()->route('about.index')->with('success', 'Data Updated Successfully');
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
            $data = About::findOrFail($id);
            Storage::delete('public/storage/about/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
