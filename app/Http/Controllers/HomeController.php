<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Achievement;
use App\Models\Areas;
use App\Models\CattleRegistration;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Insurance;
use App\Models\MissionVision;
use App\Models\Pricing;
use App\Models\Research;
use App\Models\Services;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Rules\ValidPhoneNumber;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        //  Slider
        $slider = Slider::whereRowStatus(1)->get();
        //  About
        $about = About::whereRowStatus(1)->first();
        //  Mission, Values, Customer
        $missions = MissionVision::whereRowStatus(1)->whereIn('type', [0, 1, 2])->get()->keyBy('type');
        $mission = $missions->get(0);
        $vision = $missions->get(1);
        $TargetCustomer = $missions->get(2);
        //  Services
        $services = Services::whereRowStatus(1)->get();
        //  Research & Development
        $research = Research::whereRowStatus(1)->get();
        //  Area of Activity
        $areas = Areas::whereRowStatus(1)->get();
        //  Pricing
        $pricing = Pricing::whereRowStatus(1)->get();
        //  Testimonial
        $testimonial = Testimonial::whereRowStatus(1)->get()->take(2);
        //  Awards
        $awards = Achievement::whereRowStatus(1)->get();
        //  Gallery
        $gallery = Gallery::whereRowStatus(1)->get();
        // return $about;

        return view('frontend.home.index', compact('slider','about','mission','vision','TargetCustomer','services','research','areas','pricing','testimonial','awards','gallery'));
    }

    public function store(Request $request)
    {
//        return $request->all();
//        $request->validate([
//            'custom-input' => 'required|string|max:255',
//            'email' => 'required|email',
//            'phone' => 'required|string|max:15',
//            'total_cattle' => 'required|integer',
//            'address' => 'required|string|max:255',
//            'message' => 'nullable|string',
//        ]);

        $formData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'total_cattle' => $request->input('total_cattle'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),
        ];

         Contact::create($formData);
        // Redirect to a success page or back with a success message
        return redirect()->to(url()->previous() . '#contact')->with('success', 'Form submitted successfully!');
    }
    public function registrationStore(Request $request)
    {
//        return $request->all();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'mobile' => 'required|string|max:11',
            'cattle' => 'required|numeric',
            'package' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $formData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
            'cattle' => $request->input('cattle'),
            'package' => $request->input('package'),
            'description' => $request->input('description'),
        ];
//        dd($request->input('mobile'));


        CattleRegistration::create($formData);
        $customerName = $validated['name'];
        $package = $validated['package'];
        $companyName = 'Mimba';

        // Redirect to a success page or back with a success message
        return redirect()->to(url()->previous() . '#registrations')->with([
            'success' => [
                'customerName' => $customerName,
                'package' => $package,
                'companyName' => $companyName,
            ]
        ]);
    }

    public function registration()
    {
        return view('frontend.registration.index');
    }

    public function serviceDetail($id)
    {
        $service = Services::findOrFail($id);
        return view('frontend.service.index',compact('service'));
    }

        public function researchDetail($id)
        {
            $research = Research::findOrFail($id);
            $solutionData = json_decode($research->solution_data, true);
            $featuresData = json_decode($research->features_data, true);
            $worksData = json_decode($research->works_data, true);

            $worksDesc = isset($research->works_desc) ? explode('.', $research->works_desc)[0] : 'No Data';

            if (!empty($research->works_desc)) {
                // Split the description by periods
                $worksDescArray = explode('.', $research->works_desc);
                $remainingWorksDesc = count($worksDescArray) > 1 ? implode('.', array_slice($worksDescArray, 1)) : '';
            } else {
                $remainingWorksDesc = 'No Data';
            }

            return view('frontend.research.index', compact('research', 'solutionData', 'featuresData','worksData','worksDesc','remainingWorksDesc'));
        }

    public function Insurance()
    {
        try {
            $insurances = Insurance::whereRowStatus(1)->first();
            if (!$insurances) {
                return redirect()->back()->with('error', 'No insurance record found.');
            }
            // Check if the attachment exists
            if (!$insurances->attachment) {
                return redirect()->back()->with('error', 'No attachment found.');
            }
            $fileExtension = pathinfo($insurances->attachment, PATHINFO_EXTENSION);
            return view('frontend.insurance.index', compact('insurances', 'fileExtension'));

        } catch (\Exception $e) {
            // Handle exceptions and redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    public function FAQ()
    {
        // Retrieve all FAQ data from the database
        $faqs = Faq::all();
        return view('frontend.faq.index', compact('faqs'));
    }
    public function gallerys()
    {
        // Retrieve all FAQ data from the database
        $gallerys = Gallery::all();
        return view('frontend.gallery.index', compact('gallerys'));
    }


}
