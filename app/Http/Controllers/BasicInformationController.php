<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Relay\Exception;

class BasicInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = BasicInformation::all();
//          dd($datas);
            return view('backend.basic.index', compact('datas'));
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
        return view('backend.basic.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'name_en' => 'required|string|max:255',
            'logo' => 'required|file|mimes:png,jpg,jpeg,webp,svg|max:2048',
            // Add other validation rules as needed
        ]);
        try {
            // Handle file uploads
            if ($request->hasFile('favicon')) {
                $favicon = imageCustomization($request->file('favicon'), 16, 16, 'basicInfo', 'favicon');
            }

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                $logoFilename = 'logo_' . time() . '.' . $logo->getClientOriginalExtension();
                $logoPath = $logo->storeAs('uploads/basicInfo', $logoFilename, 'public');
            }

            $data = [
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'favicon' => isset($favicon) ? 'basicInfo/' . $favicon : null,
                'logo' => isset($logoPath) ? 'basicInfo/' . $logoFilename : null,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'address' => $request->address,
                'email' => $request->email,
                'copyrights' => $request->copyrights,
                'row_status' => $request->row_status,
            ];
            BasicInformation::insert($data);
            return redirect()->route('basic-information.index')->with('success', 'Data Created Successfully');
        } catch (\Exception $e) {
            // Redirect back with the old input values and the error message
            return Redirect::back()->withInput()->with('error', $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        try{
            $data = BasicInformation::findOrFail($id);
            return view('backend.basic.edit', compact( 'data'));
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $basicInfo = BasicInformation::findOrFail($id);

            // Validate the incoming request data
//            $request->validate([
//                'name_en' => 'required|string|max:255',
//                'name_bn' => 'nullable|string|max:255',
//                'email' => 'required|email|max:255',
//                'address' => 'nullable|string|max:255',
//                'description_en' => 'nullable|string',
//                'description_bn' => 'nullable|string',
//                'copyrights' => 'nullable|string|max:255',
//                'favicon' => 'nullable|image|mimes:jpg,png,svg,ico|max:2048',
//                'logo' => 'nullable|image|mimes:jpg,png,svg|max:2048',
//            ]);

            // Update the record with the new data
            $basicInfo->name_en = $request->name_en;
            $basicInfo->name_bn = $request->name_bn;
            $basicInfo->email = $request->email;
            $basicInfo->address = $request->address;
            $basicInfo->description_en = $request->description_en;
            $basicInfo->description_bn = $request->description_bn;
            $basicInfo->copyrights = $request->copyrights;
            $basicInfo->row_status = $request->has('row_status') ? 1 : 0;

            // Handle file uploads
            if ($request->hasFile('favicon')) {
                $favicon = imageCustomization($request->file('favicon'), 16, 16, 'basicInfo', 'favicon');
                $basicInfo->favicon = 'basicInfo/' . $favicon;
            }

            if ($request->hasFile('logo')) {
                $logo = imageCustomization($request->file('logo'), 250, 400, 'basicInfo', 'logo');
                $basicInfo->logo = 'basicInfo/' . $logo;
            }

            // Save the updated record
            $basicInfo->save();

            // Redirect back with a success message
            return redirect()->route('basic-information.index')->with('success', 'Data Updated Successfully');
        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = BasicInformation::findOrFail($id);
            Storage::delete('public/storage/basicInfo/' . $data->favicon);
            Storage::delete('public/storage/basicInfo/' . $data->logo);
            Storage::delete('public/storage/basicInfo/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
