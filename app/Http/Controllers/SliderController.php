<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Slider::all();
            return view('backend.slider.index',compact('datas'));
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
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        try {
//        return $request->all();
            $image = imageCustomization($request->file('image'), 1770, 720, 'sliders', 'image');

            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'sliders/' . $image,
            ];
            Slider::insert($data);
            return redirect()->route('slider.index')->with('success', 'Data Created Successfully');

//            dd($data);
        } catch (\Exception $e) {
            return redirect()->route('slider.index')->with('success', 'Data Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Slider::findOrFail($id);
            return view('backend.slider.edit', compact( 'data'));
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
            $slider = Slider::findOrFail($id);
            $slider->title_en = $request->title_en;
            $slider->title_bn = $request->title_bn;
            $slider->description_en = $request->description_en;
            $slider->description_bn = $request->description_bn;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 1770, 720, 'sliders', 'image');
                $slider->image = 'slider/' . $image;
            }
            $slider->save();
            return redirect()->route('slider.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            return Redirect::back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        try {
            $data = Slider::findOrFail($id);
            Storage::delete('public/storage/sliders/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
