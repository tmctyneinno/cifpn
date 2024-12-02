<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Project;
use App\Models\DropdownItem;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Service;
use App\Models\CoreActivities;
use App\Models\ContactForm;


class PagesController extends Controller
{
   
    public function index($slug)
    {
        $pages = [
            'home' => 'index',
            'about-us' => 'home.pages.aboutUs.about',
            'vision' => 'home.pages.aboutUs.vision',
            'mission' => 'home.pages.aboutUs.mission',
            'core-activities' => 'home.pages.coreActivities.core-activities',
            'careers' => 'home.pages.careers',
            'contact' => 'home.pages.contact-us',
            'appointment' => 'home.pages.appointment',
            'blognews' => 'home.pages.blognews',
            'faq' => 'home.pages.faqs',
            'testimonials' => 'home.pages.testimonials',
            'terms-conditions' => 'home.pages.terms-conditions',
            'privacy-policy' => 'home.pages.privacy-policy',
            'governance-board' => 'home.pages.governance-board',
            'membership-benefits' => 'home.pages.membership.Membership-benefits',
            'membership-overview' => 'home.pages.membership.membership-overview',
            'membership-subscription-fees' => 'home.pages.membership.membership-subscription-fees',
            'membership-tiers' => 'home.pages.membership.membership-tiers',
            'mentorship-programme' => 'home.pages.membership.mentorship-programme',
            'membership-login' => 'home.pages.membership.membership-login',
            'membership-signup' => 'home.pages.membership.membership-signup',
            'membership-application' => 'home.pages.membership.membership-application',

            'programmes-and-examinations' => 'home.pages.certification.programmes-and-examinations',
            'exam-requirement' => 'home.pages.certification.exam-requirement',

            'events' => 'home.pages.event.event',
            'livestream' => 'home.pages.livestream',
            'partners-and-affiliates' => 'home.pages.partnersAffiliates',

            'membership-logout' => 'home.pages.membership.membership-login',

            'legislative-recommendations' => 'home.pages.advocacyPolicy.legislative-recommendations',
            'government-ngo-partnerships' => 'home.pages.advocacyPolicy.government-ngo-partnerships',
            'position-papers-policy-briefs' => 'home.pages.advocacyPolicy.position-papers-policy-briefs',
            'advisory-board-members' => 'home.pages.advocacyPolicy.advisory-board-members',
            'policies-governance-framework' => 'home.pages.advocacyPolicy.policies-governance-framework',

        ];
    
        $servicesPages = [
            'digital-transformation',
            'systems-integration',
            'cloud-solutions',
            'iot-and-automation-solutions',
            'data-analytics-ai-solutions',
            'enterprise-resource-planning-erp',
            'cybersecurity-solutions'
        ];
        
        if (array_key_exists($slug, $pages)) {
            return view($pages[$slug]);
        }
        // if ($slug === 'privacy-policy') {
        //     return redirect()->route('home.privacyPolicy');
        // }

       
    
        if (in_array($slug, $servicesPages)) {
            $solution = DropdownItem::where('slug', $slug)->first();
    
            if (!$solution) {
                return view('home.errors.404'); 
            }
    
            $solutionItem = Service::where('title', $solution->name)->first();
    
            if (!$solutionItem) {
                return view('home.errors.404'); 
            }
    
            $relatedSolutions = Service::where('id', '!=', $solutionItem->id)
                                ->latest()
                                ->get();
    
            return view('home.pages.solutions.solution-details', compact('solutionItem', 'relatedSolutions'));
        }
    
        return view('home.errors.404');
    }

    public function membershipLogin(){
        return view('home.pages.membership.membership-login'); 
    }
    
   
  

}
