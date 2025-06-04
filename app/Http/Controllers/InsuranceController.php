<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Insurance::all();
//            dd($datas);
            return view('backend.insurance.index',compact('datas'));
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
        return view('backend.insurance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
//            return $request->all();
            $validatedData = $request->validate([
                'title_bn' => 'required|string|max:255',
                'title_en' => 'nullable|string|max:255',
                'description_en' => 'nullable|string|max:255',
                'description_bn' => 'nullable|string|max:255',
                'attachment' => 'required|file|mimes:jpeg,png,jpg,pdf|max:5120',
            ]);

            // Handle file upload for the attachment
            if ($request->hasFile('attachment')) {
                $file = anyTypeFileUpload($request->file('attachment'), 'insurance');
                $validatedData['attachment'] = 'insurance/' . $file;
            }

            // Create the insurance entry with validated data
            Insurance::create($validatedData);

            // Redirect with success message
            return redirect()->route('insurance.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            // Redirect back with error message
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Insurance::findOrFail($id);
            return view('backend.insurance.edit', compact( 'data'));
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
            $insurance = Insurance::findOrFail($id);
            // Validate the incoming request data
            $validatedData = $request->validate([
                'title_bn' => 'required|string|max:255',
                'title_en' => 'nullable|string|max:255',
                'description_en' => 'nullable|string|max:255',
                'description_bn' => 'nullable|string|max:255',
                'attachment' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:5120',
            ]);

            // Handle file upload for the attachment if a new file is uploaded
            if ($request->hasFile('attachment')) {
                // Delete the old attachment if it exists
                if ($insurance->attachment && Storage::exists($insurance->attachment)) {
                    Storage::delete($insurance->attachment);
                }
                // Upload the new file
                $file = anyTypeFileUpload($request->file('attachment'), 'insurance');
                $validatedData['attachment'] = 'insurance/' . $file;
            }
            $insurance->update($validatedData);
            return redirect()->route('insurance.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->withInput()->with('error', 'An error occurred while updating the data. Please try again.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Insurance::findOrFail($id);
            Storage::delete('public/storage/insurance/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
