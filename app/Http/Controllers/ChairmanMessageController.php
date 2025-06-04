<?php

namespace App\Http\Controllers;

use App\Models\CattleRegistration;
use App\Models\ChairmanMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ChairmanMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = CattleRegistration::all();
//            dd($datas);
            return view('backend.chairman.index',compact('datas'));
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
        return view('backend.chairman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//        return $request->all();
            $image = imageCustomization($request->file('image'), 600, 400, 'chairman', 'image');

            $data = [
                'name_bn' => $request->name_bn,
                'name_en' => $request->name_en,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'image' => 'chairman/' . $image,
            ];
            ChairmanMessage::insert($data);
            return redirect()->route('chairman-message.index')->with('success', 'Data Created Successfully');

//            dd($data);
        } catch (\Exception $e) {
            return redirect()->route('chairman-message.index')->with('success', 'Data Created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ChairmanMessage $chairmanMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $data = ChairmanMessage::findOrFail($id);
            return view('backend.chairman.edit', compact( 'data'));
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
            $chairmanMessage = ChairmanMessage::findOrFail($id);
            $chairmanMessage->name_bn = $request->name_bn;
            $chairmanMessage->name_en = $request->name_en;
            $chairmanMessage->description_en = $request->description_en;
            $chairmanMessage->description_bn = $request->description_bn;
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 600, 400, 'chairman', 'image');
                $chairmanMessage->image = 'chairman/' . $image;
            }
            $chairmanMessage->save();
            return redirect()->route('chairman-message.index')->with('success', 'Data Updated Successfully');
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
            $data = CattleRegistration::findOrFail($id);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
