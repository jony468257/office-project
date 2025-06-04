<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Services::all();
            return view('backend.services.index',compact('datas'));
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
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
//        return $request->all();
        // Validate the request data
        $request->validate([
//            'title_en' => 'nullable|string|max:255',
//            'title_bn' => 'required|string|max:255',
//            'description_en' => 'nullable|string|max:1000',
//            'description_bn' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:svg,webp,jpeg,png,jpg,gif|max:5120',
        ]);

//        try {
            if ($request->hasFile('image') && $request->hasFile('banner_image')) {
                $image = imageCustomization($request->file('image'), 200, 150, 'services', 'image');
                $banner_image = imageCustomization($request->file('banner_image'), 1200, 400, 'services', 'banner_image');

                $imagePath = 'services/' . $image;
                $bannerImagePath = 'services/' . $banner_image;
            } else {
                $imagePath = null;
                $bannerImagePath = null;
            }

            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => $imagePath,
                'banner_image' => $bannerImagePath,
                'benefits_one_en' => $request->benefits_one_en,
                'benefits_two_en' => $request->benefits_two_en,
                'benefits_three_en' => $request->benefits_three_en,
                'benefits_four_en' => $request->benefits_four_en,
                'benefits_five_en' => $request->benefits_five_en,
                'benefits_six_en' => $request->benefits_six_en,
                'benefits_one_bn' => $request->benefits_one_bn,
                'benefits_two_bn' => $request->benefits_two_bn,
                'benefits_three_bn' => $request->benefits_three_bn,
                'benefits_four_bn' => $request->benefits_four_bn,
                'benefits_five_bn' => $request->benefits_five_bn,
                'benefits_six_bn' => $request->benefits_six_bn,
                'row_status' => $request->row_status,
            ];
            Services::create($data);
            return redirect()->route('services.index')->with('success', 'Data Created Successfully');
//        } catch (\Exception $e) {
//            return redirect()->back()->with('error', $e->getMessage())->withInput();
//        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Services $infrastructure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Services::findOrFail($id);
            return view('backend.services.edit', compact( 'data'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
//        try {
            $infrastructure = Services::findOrFail($id);
            $infrastructure->title_en = $request->title_en;
            $infrastructure->title_bn = $request->title_bn;
            $infrastructure->description_en = $request->description_en;
            $infrastructure->description_bn = $request->description_bn;
            $infrastructure->benefits_one_en = $request->benefits_one_en;
            $infrastructure->benefits_one_bn = $request->benefits_one_bn;
            $infrastructure->benefits_two_en = $request->benefits_two_en;
            $infrastructure->benefits_two_bn = $request->benefits_two_bn;
            $infrastructure->benefits_three_en = $request->benefits_three_en;
            $infrastructure->benefits_three_bn = $request->benefits_three_bn;
            $infrastructure->benefits_four_en = $request->benefits_four_en;
            $infrastructure->benefits_four_bn = $request->benefits_four_bn;
            $infrastructure->benefits_five_en = $request->benefits_five_en;
            $infrastructure->benefits_five_bn = $request->benefits_five_bn;
            $infrastructure->benefits_six_en = $request->benefits_six_en;
            $infrastructure->benefits_six_bn = $request->benefits_six_bn;
            $infrastructure->row_status = $request->row_status;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 200, 150, 'services', 'image');
                $infrastructure->image = 'services/' . $image;
            }
            if ($request->hasFile('banner_image')) {
                $banner_image = imageCustomization($request->file('banner_image'), 1200, 400, 'services', 'banner_image');
                $infrastructure->banner_image = 'services/' . $banner_image;
            }
            $infrastructure->save();
            return redirect()->route('services.index')->with('success', 'Data Updated Successfully');
//        } catch (\Exception $e) {
//            return Redirect::back()->with('error', $e->getMessage());
//        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Services::findOrFail($id);
            Storage::delete('public/storage/services/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
