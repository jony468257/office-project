<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Faq::all()->map(function ($item) {
            // Decode the JSON data
            $item->faq_items = json_decode($item->faq_data, true);
            return $item;
        });

        return view('backend.faq.index', compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'faq_questions.*' => 'required|string',
            'faq_answers.*' => 'required|string',
        ]);

        $faq_Data = [];

        // Loop through the FAQ questions and answers to create a structured array
        foreach ($request->faq_questions as $index => $question) {
            // Get the corresponding answer for the current question
            $answer = $request->faq_answers[$index] ?? null;

            // Get the corresponding id for the current FAQ
            $faq_id = $request->faq_ids[$index] ?? null;

            // Add the FAQ id, question, and answer to the FAQ data array
            $faq_Data[] = [
                'faq_id' => $faq_id, // Store the ID for each FAQ
                'faq_question' => $question,
                'faq_answer' => $answer,
            ];
        }

        // Convert the FAQ data array to JSON format
        $data = [
            'faq_data' => json_encode($faq_Data),
        ];

        try {
            // Save the data into the database
            Faq::create($data);

            // Redirect or return a response
            return redirect()->route('faq.index')->with('success', 'FAQ saved successfully.');
        } catch (\Exception $e) {
            // Handle the error
            return redirect()->back()->with('error', 'Failed to save FAQ: ' . $e->getMessage());
        }
    }






    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        $faqItems = json_decode($faq->faq_data, true);
        return view('backend.faq.edit', compact('faq', 'faqItems'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'faq_questions.*' => 'required|string',
            'faq_answers.*' => 'required|string',
        ]);

        try {
            // Find the existing FAQ entry by ID
            $faq = Faq::findOrFail($id);

            // Decode the existing FAQ data
            $faqItems = json_decode($faq->faq_data, true);

            // Create an array to hold the new FAQ items
            $updatedFaqData = [];

            // Loop through the FAQ questions and answers to create a structured array
            foreach ($request->faq_questions as $index => $question) {
                // Get the corresponding answer and ID for the current question
                $answer = $request->faq_answers[$index] ?? null;
                $faq_id = $request->faq_ids[$index] ?? null;

                // Check if the current FAQ item already exists (by matching ID)
                $existingItem = collect($faqItems)->firstWhere('faq_id', $faq_id);

                if ($existingItem) {
                    // Update the existing FAQ item
                    $updatedFaqData[] = [
                        'faq_id' => $faq_id,
                        'faq_question' => $question,
                        'faq_answer' => $answer,
                    ];
                } else {
                    // Add new FAQ item if ID is not present
                    $updatedFaqData[] = [
                        'faq_id' => $faq_id ?? uniqid(), // Assign a unique ID if not provided
                        'faq_question' => $question,
                        'faq_answer' => $answer,
                    ];
                }
            }

            // Convert the updated FAQ data array to JSON format
            $faq->faq_data = json_encode($updatedFaqData);
            $faq->save();

            // Redirect or return a response
            return redirect()->route('faq.index')->with('success', 'FAQ updated successfully.');
        } catch (\Exception $e) {
            // Handle the error
            return redirect()->back()->with('error', 'Failed to update FAQ: ' . $e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, $faqIndex)
    {
        try {
            $data = Faq::findOrFail($id);
            // Decode the existing FAQ data
            $faqItems = json_decode($data->faq_data, true);

            // Check if the specified index exists
            if (isset($faqItems[$faqIndex])) {
                // Remove the specific FAQ item
                unset($faqItems[$faqIndex]);
                // Re-index the array (optional, but keeps the keys clean)
                $faqItems = array_values($faqItems);
                // Update the FAQ data
                $data->faq_data = json_encode($faqItems);
                $data->save();

                return redirect()->back()->with('success', 'FAQ item deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'FAQ item not found.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
