<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Contact::all();
//          dd($datas);
            return view('backend.contact.index', compact('datas'));
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
        return view('backend.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        try {
//        return $request->all();
            $image = imageCustomization($request->file('image'), 600, 400, 'contact', 'image');

            $data = [
                'name_en' => $request->name_en,
                'name_bn' => $request->name_bn,
                'address' => $request->address,
                'sub_name_bn' => $request->sub_name_bn,
                'email' => $request->email,
                'phone' => $request->phone,
                'mobile' => $request->mobile,
                'image' => 'contact/' . $image,
            ];
            Contact::insert($data);
            return redirect()->route('contact-us.index')->with('success', 'Data Created Successfully');
//            dd($basicInfo);
//        } catch (\Exception $e) {
//            return Redirect::back()->with('error', $e->getMessage());
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = Contact::findOrFail($id);
            return view('backend.contact.edit', compact( 'data'));
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
            $contact = Contact::findOrFail($id);
            $contact->name_en = $request->name_en;
            $contact->name_bn = $request->name_bn;
            $contact->address = $request->address;
            $contact->sub_name_bn = $request->sub_name_bn;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->mobile = $request->mobile;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 600, 400, 'contact', 'image');
                $contact->image = 'contact/' . $image;
            }
            $contact->save();
            return redirect()->route('contact-us.index')->with('success', 'Data Updated Successfully');
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
            $data = Contact::findOrFail($id);
            Storage::delete('public/storage/contact/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
