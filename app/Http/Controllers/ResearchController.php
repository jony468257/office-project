<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $datas = Research::all();
            return view('backend.research.index',compact('datas'));
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
        return view('backend.research.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        try {
            // Validate the incoming request
//        return $request->all();
            $request->validate([
                'title_en' => 'nullable|string|max:255',
                'title_bn' => 'required|string|max:255',
                'description_en' => 'nullable|string|max:1000',
                'description_bn' => 'required|string|max:1000',
                'button_name' => 'required|string|max:255',
//                'button_url' => 'required|url',
                'image' => 'required|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
                'banner_image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:5120',
                'solution_image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:5120',
                'works_image' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:5120',
                'solution_keys' => 'nullable|array',
                'solution_images.*' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
                'features_keys' => 'nullable|array',
                'features_images.*' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
            ]);

            // Handle the image upload
            $image = imageCustomization($request->file('image'), 492, 370, 'research', 'image');
            $bannerImage = imageCustomization($request->file('banner_image'), 1024, 720, 'research', 'banner_image');
            $solutionImage = imageCustomization($request->file('solution_image'), 1024, 720, 'research', 'solution_image');
            $worksImage = imageCustomization($request->file('works_image'), 1024, 720, 'research', 'works_image');

            $solutionData = [];
            if ($request->solution_keys) {
                foreach ($request->solution_keys as $index => $key) {
                    if ($request->hasFile('solution_images.' . $index)) {
                        $solutionImg = imageCustomization($request->file('solution_images.' . $index), 80, 80, 'research', 'solution_image_' . $index);
                        $solutionData[] = [
                            'key' => $key,
                            'image' => 'research/' . $solutionImg,
                        ];
                    }
                }
            }

            // Features Keys and Images
            $featuresData = [];
            if ($request->features_keys) {
                foreach ($request->features_keys as $index => $key) {
                    if ($request->hasFile('features_images.' . $index)) {
                        $featuresImg = imageCustomization($request->file('features_images.' . $index), 80, 80, 'research', 'features_image_' . $index);
                        $featuresData[] = [
                            'key' => $key,
                            'image' => 'research/' . $featuresImg,
                        ];
                    }
                }
            }

            // Prepare the data for insertion
            $data = [
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'description_en' => $request->description_en,
                'description_bn' => $request->description_bn,
                'button_name' => $request->button_name,
                'button_url' => $request->button_url,
                'image' => 'research/' . $image,
                'banner_image' => $bannerImage ? 'research/' . $bannerImage : null,
                'problem' => $request->problem,
                'problem_desc' => $request->problem_desc,
                'solution_title' => $request->solution_title,
                'solution_image' => $solutionImage ? 'research/' . $solutionImage : null,
                'solution_desc' => $request->solution_desc,
                'solution_data' => json_encode($solutionData),
                'features_title' => $request->features_title,
                'features_data' => json_encode($featuresData),
                'works_title' => $request->works_title,
                'works_image' => $worksImage ? 'research/' . $worksImage : null,
                'works_desc' => $request->works_desc,
                'works_data' => json_encode($request->works_data), // Store as JSON
                'row_status' => $request->row_status ?? true,
            ];
            Research::create($data);
            return redirect()->route('research.index')->with('success', 'Data Created Successfully');
//        } catch (\Exception $e) {
//            // Return an error message if something goes wrong
//            return redirect()->back()
//                ->with('error', 'Something went wrong. Data was not saved.')
//                ->withInput(); // Preserve form input
//        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Research $research)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $data = Research::findOrFail($id);

            // Decode JSON fields if stored as JSON in the database
//            $data->solution_data = json_decode($data->solution_data, true) ?? [];
//            $data->features_data = json_decode($data->features_data, true) ?? [];

            // Decode solution keys and images from the solution_data JSON
            $data->solution_keys = collect(json_decode($data->solution_data, true))->pluck('key')->toArray();
            $data->solution_images = collect(json_decode($data->solution_data, true))->pluck('image')->toArray();

            // Decode features keys and images from the features_data JSON
            $data->features_keys = collect(json_decode($data->features_data, true))->pluck('key')->toArray();
            $data->features_images = collect(json_decode($data->features_data, true))->pluck('image')->toArray();

            $data->works_data = json_decode($data->works_data, true) ?? [];

            return view('backend.research.edit', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_en' => 'nullable|string|max:255',
            'title_bn' => 'required|string|max:255',
            'description_en' => 'nullable|string|max:1000',
            'description_bn' => 'required|string|max:1000',
            'button_name' => 'required|string|max:255',
            // 'button_url' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'solution_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'works_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'solution_keys' => 'nullable|array',
            'solution_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'features_keys' => 'nullable|array',
            'features_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            // Find the record to be updated
            $research = Research::findOrFail($id);

            // Handle the image upload, if a new image is provided
            if ($request->hasFile('image')) {
                $image = imageCustomization($request->file('image'), 492, 370, 'research', 'image');
                $research->image = 'research/' . $image;
            }

            if ($request->hasFile('banner_image')) {
                $bannerImage = imageCustomization($request->file('banner_image'), 1024, 720, 'research', 'banner_image');
                $research->banner_image = 'research/' . $bannerImage;
            }

            if ($request->hasFile('solution_image')) {
                $solutionImage = imageCustomization($request->file('solution_image'), 1024, 720, 'research', 'solution_image');
                $research->solution_image = 'research/' . $solutionImage;
            }
            if ($request->hasFile('works_image')) {
                $worksImage = imageCustomization($request->file('works_image'), 1024, 720, 'research', 'works_image');
                $research->works_image = 'research/' . $worksImage;
            }

            // Handle solution_keys and features_keys, converting arrays to JSON
            $solutionData = [];
            if ($request->solution_keys) {
                foreach ($request->solution_keys as $index => $key) {
                    if ($request->hasFile('solution_images.' . $index)) {
                        $solutionImg = imageCustomization($request->file('solution_images.' . $index), 80, 80, 'research', 'solution_image_' . $index);
                        $solutionData[] = [
                            'key' => $key,
                            'image' => 'research/' . $solutionImg,
                        ];
                    }
                }
            }
            $research->solution_data = json_encode($solutionData);  // Store as JSON

            $featuresData = [];
            if ($request->features_keys) {
                foreach ($request->features_keys as $index => $key) {
                    if ($request->hasFile('features_images.' . $index)) {
                        $featuresImg = imageCustomization($request->file('features_images.' . $index), 80, 80, 'research', 'features_image_' . $index);
                        $featuresData[] = [
                            'key' => $key,
                            'image' => 'research/' . $featuresImg,
                        ];
                    }
                }
            }
            $research->features_data = json_encode($featuresData);  // Store as JSON

            // Update the fields
            $research->title_en = $request->title_en;
            $research->title_bn = $request->title_bn;
            $research->description_en = $request->description_en;
            $research->description_bn = $request->description_bn;
            $research->button_name = $request->button_name;
            $research->button_url = $request->button_url;
            $research->problem = $request->problem;
            $research->problem_desc = $request->problem_desc;
            $research->solution_title = $request->solution_title;
            $research->solution_desc = $request->solution_desc;
            $research->features_title = $request->features_title;
            $research->works_title = $request->works_title;
            $research->works_desc = $request->works_desc;
            $research->works_data = json_encode($request->works_data); // Store as JSON
            $research->row_status = $request->row_status ?? true;

            // Save the updated record
            $research->save();

            // Redirect to index with a success message
            return redirect()->route('research.index')->with('success', 'Data Updated Successfully');

        } catch (\Exception $e) {
            // Return an error message if something goes wrong
            return redirect()->route('research.index')
                ->with('error', $e->getMessage())
                ->withInput(); // Preserve form input
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $data = Research::findOrFail($id);
            Storage::delete('public/storage/research/' . $data->image);
            $data->delete();
            return redirect()->back()->with('success', 'Data Delete Successfully');
        } catch (Exception $e) {
            //throw $th;
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
