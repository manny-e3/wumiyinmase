<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContactSubmission;
use App\Mail\ContactSubmissionConfirmation;

class PageController extends Controller
{
    private $services = [
        'global-air-ocean-freight' => [
            'slug' => 'global-air-ocean-freight',
            'title' => 'Global Air & Ocean Freight',
            'headline' => 'Fast, Reliable International Shipping.',
            'short_desc' => 'We connect Nigeria to major global trade hubs through robust air and ocean freight networks.',
            'body' => 'We connect Nigeria to major global trade hubs through robust air and ocean freight networks. Whether you need rapid air delivery for urgent items or cost-effective sea shipping for bulk cargo, we manage the entire journey with strict attention to timeline and budget constraints.',
            'icon' => 'flaticon-airplane-2',
            'image' => 'images/resource/globalair.jpg'
        ],
        'household-goods-relocation' => [
            'slug' => 'household-goods-relocation',
            'title' => 'Household Goods & Personal Effects',
            'headline' => 'Relocate Safely with Zero Stress.',
            'short_desc' => 'Moving your home or shipping personal belongings requires extreme care. We handle your household goods with the utmost respect.',
            'body' => 'Moving your home or shipping personal belongings requires extreme care. We handle your household goods with the utmost respect. Our secure packaging, careful loading, and dependable transit ensure your personal history arrives safely at its new destination.',
            'icon' => 'flaticon-cargo-boat',
            'image' => 'images/resource/householdpic.jpg'
        ],
        'pet-shipping' => [
            'slug' => 'pet-shipping',
            'title' => 'Specialized Pet Shipping Services',
            'headline' => 'Safe Journey for Your Beloved Pets.',
            'short_desc' => 'We understand that pets are cherished family members. Dedicated climate-controlled transport and compliance.',
            'body' => 'We understand that pets are cherished family members. Our dedicated pet relocation specialists manage climate-controlled transport, proper documentation, and veterinary compliance. We ensure a warm, comfortable, and completely safe travel experience for your animals.',
            'icon' => 'flaticon-logistics-delivery',
            'image' => 'images/resource/dog.jpeg'
        ],
        'customs-clearance' => [
            'slug' => 'customs-clearance',
            'title' => 'Customs Clearance & Permit Processing',
            'headline' => 'Seamless Compliance without the Delays.',
            'short_desc' => 'Navigating Nigerian customs regulations and import/export permits made smooth and efficient.',
            'body' => 'Navigating Nigerian customs regulations and import/export permits can be complex. Our experienced compliance team handles all paperwork, tariffs, and agency approvals on your behalf. We clear your goods quickly to prevent expensive port delays.',
            'icon' => 'flaticon-delivery-box-3',
            'image' => 'images/resource/service-4.jpg'
        ],
        'warehousing-haulage' => [
            'slug' => 'warehousing-haulage',
            'title' => 'Warehousing & Local Haulage',
            'headline' => 'Secure Storage and Efficient Final-Mile Delivery.',
            'short_desc' => 'Keep your inventory safe in secure facilities with dependable final-mile delivery across Nigeria.',
            'body' => 'Keep your inventory safe in our secure, well-monitored warehousing facilities. When your goods are ready to move, our local haulage fleet ensures dependable final-mile delivery to any destination within Nigeria.',
            'icon' => 'flaticon-warehouse-1',
            'image' => 'images/resource/wharhouse.jpg'
        ]
    ];

    public function home()
    {
        $services = $this->services;

        $galleryPath = public_path('images/gallery');
        $galleryImages = [];

        if (file_exists($galleryPath) && is_dir($galleryPath)) {
            $files = glob($galleryPath . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
            if ($files) {
                foreach ($files as $file) {
                    $galleryImages[] = 'images/gallery/' . basename($file);
                }
            }
        }

        // Fallback in case folder is empty or missing
        if (empty($galleryImages)) {
            $galleryImages = [
                'images/resource/project-1.jpg',
                'images/resource/project-2.jpg',
                'images/resource/project-3.jpg',
                'images/resource/project-4.jpg',
                'images/resource/about-1.jpg',
                'images/resource/about-2.jpg'
            ];
        }

        shuffle($galleryImages);
        $randomImages = array_slice($galleryImages, 0, 6);

        return view('pages.home', compact('services', 'randomImages'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = $this->services;
        return view('pages.services', compact('services'));
    }

    public function serviceDetail($slug)
    {
        if (!isset($this->services[$slug])) {
            abort(404);
        }
        $service = $this->services[$slug];
        $allServices = $this->services;
        return view('pages.service-detail', compact('service', 'allServices'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'required|string',
            'origin' => 'nullable|string',
            'destination' => 'nullable|string',
            'message' => 'required|string'
        ]);

        // 1. Store in Database
        $submission = ContactSubmission::create($validated);

        try {
            // 2. Send email to Wumiyin & Mase team
            $adminEmail = trim(env('ADMIN_EMAIL'));
            Mail::to($adminEmail)->send(new NewContactSubmission($submission));

            // 3. Send email to the user
            Mail::to($submission->email)->send(new ContactSubmissionConfirmation($submission));
        } catch (\Exception $e) {
            // Log mail sending error and prevent crash
            \Illuminate\Support\Facades\Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you! Your quote request has been sent successfully. Our team will contact you shortly.');
    }

    public function gallery()
    {
        $galleryPath = public_path('images/gallery');
        $galleryImages = [];

        if (file_exists($galleryPath) && is_dir($galleryPath)) {
            $files = glob($galleryPath . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
            if ($files) {
                foreach ($files as $file) {
                    $galleryImages[] = 'images/gallery/' . basename($file);
                }
            }
        }

        // Fallback in case folder is empty or missing
        if (empty($galleryImages)) {
            $galleryImages = [
                'images/resource/project-1.jpg',
                'images/resource/project-2.jpg',
                'images/resource/project-3.jpg',
                'images/resource/project-4.jpg',
                'images/resource/about-1.jpg',
                'images/resource/about-2.jpg'
            ];
        }

        return view('pages.gallery', compact('galleryImages'));
    }
}
