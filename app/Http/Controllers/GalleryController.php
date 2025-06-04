<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Gallery::all();
            return view('backend.gallery.index',compact('datas'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//        return $request->all();
            $image = imageCustomization($request->file('image'), 600, 500, 'gallery', 'image');

            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
//                'type' => $request->type,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'gallery/' . $image,
            ];
            Gallery::insert($data);
            return redirect()->route('gallery.index')->with('success', 'Data Created Successfully');
//            dd($data);
        } catch (\Exception $e) {
            return redirect()->route('gallery.index')->with('success', 'Data Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Gallery::findOrFail($id);
            return view('backend.gallery.edit', compact( 'data'));
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
            $gallery = Gallery::findOrFail($id);
            $gallery->title_en = $request->title_en;
            $gallery->title_bn = $request->title_bn;
            $gallery->description_en = $request->description_en;
            $gallery->description_bn = $request->description_bn;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 1080, 720, 'gallery', 'image');
                $gallery->image = 'gallery/' . $image;
            }
            $gallery->save();
            return redirect()->route('gallery.index')->with('success', 'Data Updated Successfully');
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
            if (!$id) {
                return redirect()->back()->with('error', 'Gallery not found');
            }
            $data = Gallery::findOrFail($id);
            Storage::delete('public/storage/gallery/' . $data->image);
            $data->delete();
            return redirect()->route('gallery.index')->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            // Handle exceptions
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
