<?php

namespace App\Providers;
use App\Models\AboutUs;
use App\Models\Consultant;
use App\Models\ContactUs;
use App\Models\Posts; 
use App\Models\CoreActivities; 
use App\Models\Slider;
use App\Models\Transaction;
use App\Models\MenuItem;
use App\Models\CoreValue;
use App\Models\VisionMission;
use App\Models\GovernanceBoard;
use App\Models\Sociallink;
use App\Models\MembershipTiers; 
use App\Models\MembersBenefit;
use App\Models\MembersOverview;
use App\Models\MembersProgramme;
use App\Models\MembersSubscriptionFees;
use App\Models\PoliciesGovernance;
use App\Models\Testimonials;
use App\Models\AdvisoryBoardMember;
use App\Models\Faqs;
use App\Models\Career; 
use App\Models\ContactForm;
use App\Models\Service;
use App\Models\Livestream;
use App\Models\ApplicationForm;
use App\Models\Event;
use App\Models\ExamRequirement;
use App\Models\ProgrammeExamination;
use App\Models\MembershipApplication;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */ 
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('sliders', Slider::all());
        View::share('aboutUs', AboutUs::first());
        View::share('contactUs', ContactUs::first());
        View::share('coreActivities', CoreActivities::latest()->get()); 
        View::share('posts', Posts::latest()->paginate(20));
        
        View::share('menuItems', MenuItem::with('dropdownItems')->get());
        View::share('visionMission', VisionMission::first()); 
        View::share('governanceBoard', GovernanceBoard::first()); 
        
        View::share('solutions', Service::first());  
        View::share('career', Career::first());  
        View::share('coreValue', CoreValue::first()); 
        View::share('sociallink', Sociallink::first());
        View::share('faqs', Faqs::latest()->get());
        View::share('testimonials', Testimonials::latest()->get());
        View::share('contacts', ContactForm::latest()->paginate(20));
        View::share('consultants', Consultant::latest()->paginate(20));

        View::share('membershipTiers', MembershipTiers::first()); 
        View::share('membersBenefit', MembersBenefit::first()); 
        View::share('membersOverview', MembersOverview::first()); 
        View::share('membersSubscriptionFees', MembersSubscriptionFees::first()); 
        View::share('membersProgramme', MembersProgramme::first()); 
        View::share('membershipApplication', MembershipApplication::first()); 

        View::share('policiesGovernance', PoliciesGovernance::first()); 

        View::share('programmeExamination', ProgrammeExamination::first()); 
        View::share('examRequirement', ExamRequirement::first()); 
        View::share('events', Event::latest()->paginate(20)); 
        View::share('livestream', Livestream::latest()->paginate(20)); 
        View::share('advisoryBoardMember', AdvisoryBoardMember::latest()->paginate(20));
        View::share('transactions', Transaction::latest()->paginate(20)); 
        View::share('application', ApplicationForm::first()); 

        


        
     

 
    }
}
