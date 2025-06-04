<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Testimonial::all();
            return view('backend.testimonial.index', compact('datas'));
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
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name_bn' => 'required|string|max:255',
//            'name_en' => 'nullable|string|max:255',
//            'farm_name_bn' => 'required|string|max:255',
//            'farm_name_en' => 'nullable|string|max:255',
//            'address_bn' => 'required|string|max:255',
//            'address_en' => 'nullable|string|max:255',
//            'description_bn' => 'nullable|string',
//            'description_en' => 'nullable|string',
//            'image' => 'nullable|image|max:2048', // Adjust the max size as needed
//            'row_status' => 'required|boolean',
//        ]);

        try {
            // Handle file upload
            $image = imageCustomization($request->file('image'), 1024, 720, 'testimonial', 'image');

            // Prepare data for insertion
            $data = [
                'name_bn' => $request->name_bn,
                'name_en' => $request->name_en,
                'farm_name_bn' => $request->farm_name_bn,
                'farm_name_en' => $request->farm_name_en,
                'address_bn' => $request->address_bn,
                'address_en' => $request->address_en,
                'description_bn' => $request->description_bn,
                'description_en' => $request->description_en,
                'image' => 'testimonial/' . $image,
                'row_status' => $request->row_status,
            ];
            // Create new testimonial entry
            Testimonial::create($data);

            return redirect()->route('testimonial.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Testimonial $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Testimonial::findOrFail($id);
            return view('backend.testimonial.edit', compact( 'data'));
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
            // Find the existing testimonial by ID
            $testimonial = Testimonial::findOrFail($id);

            // Update fields from request
            $testimonial->name_en = $request->input('name_en');
            $testimonial->name_bn = $request->input('name_bn');
            $testimonial->farm_name_en = $request->input('farm_name_en');
            $testimonial->farm_name_bn = $request->input('farm_name_bn');
            $testimonial->address_en = $request->input('address_en');
            $testimonial->address_bn = $request->input('address_bn');
            $testimonial->description_en = $request->input('description_en');
            $testimonial->description_bn = $request->input('description_bn');
            $testimonial->row_status = $request->input('row_status');

            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 1024, 720, 'testimonial', 'image');
                $testimonial->image = 'testimonial/' . $image;
            }

            // Save the updated testimonial
            $testimonial->save();

            // Redirect with success message
            return redirect()->route('testimonial.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Testimonial::findOrFail($id);
            Storage::delete('public/storage/testimonial/' . $data->attachment);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
