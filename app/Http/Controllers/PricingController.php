<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Pricing::all();
            return view('backend.pricing.index',compact('datas'));
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
        return view('backend.pricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
//            $request->validate([
//                'title_bn' => 'required|string|max:255',
//                'title_en' => 'nullable|string|max:255',
//                'sub_title_bn' => 'required|string|max:255',
//                'sub_title_en' => 'nullable|string|max:255',
//                'price_bn' => 'required|integer',
//                'price_en' => 'nullable|integer',
//                'url' => 'required|url|max:255',
//                'attachment' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
//                'row_status' => 'required|boolean',
//            ]);

            // Handle file upload for the attachment
            if ($request->hasFile('attachment')) {
                $file = anyTypeFileUpload($request->file('attachment'), 'pricing');
                $attachmentPath = 'pricing/' . $file;
            }

            // Prepare data for insertion
            $data = [
                'title_bn' => $request->title_bn,
                'title_en' => $request->title_en,
                'sub_title_bn' => $request->sub_title_bn,
                'sub_title_en' => $request->sub_title_en,
                'price_bn' => $request->price_bn,
                'price_en' => $request->price_en,
                'url' => $request->url,
                'attachment' => $attachmentPath ?? null,
                'row_status' => $request->row_status,
            ];
            // Insert data into the Pricing table
            Pricing::create($data);
            // Redirect back with success message
            return redirect()->route('pricing.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->route('pricing.index')->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Pricing $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Pricing::findOrFail($id);
            return view('backend.pricing.edit', compact( 'data'));
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
//                'title_bn' => 'required|string|max:255',
//                'title_en' => 'nullable|string|max:255',
//                'sub_title_bn' => 'required|string|max:255',
//                'sub_title_en' => 'nullable|string|max:255',
//                'price_bn' => 'required|integer',
//                'price_en' => 'nullable|integer',
//                'url' => 'required|url|max:255',
//                'attachment' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:2048',
//                'row_status' => 'required|boolean',
//            ]);

            // Find the pricing entry by ID
            $pricing = Pricing::findOrFail($id);

            // Handle file upload for the attachment if a new file is provided
            if ($request->hasFile('attachment')) {
                // Delete the old attachment if it exists
                if ($pricing->attachment && file_exists(public_path($pricing->attachment))) {
                    unlink(public_path($pricing->attachment));
                }

                // Upload the new file
                $file = anyTypeFileUpload($request->file('attachment'), 'pricing');
                $pricing->attachment = 'pricing/' . $file;
            }

            // Update the pricing entry with new data
            $pricing->title_bn = $request->title_bn;
            $pricing->title_en = $request->title_en;
            $pricing->sub_title_bn = $request->sub_title_bn;
            $pricing->sub_title_en = $request->sub_title_en;
            $pricing->price_bn = $request->price_bn;
            $pricing->price_en = $request->price_en;
            $pricing->url = $request->url;
            $pricing->row_status = $request->row_status;

            // Save the updated pricing entry
            $pricing->save();

            // Redirect back with success message
            return redirect()->route('pricing.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->route('pricing.index')->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Pricing::findOrFail($id);
            Storage::delete('public/storage/histories/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
