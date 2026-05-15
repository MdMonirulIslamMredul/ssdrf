<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Banner;
use App\Models\Notice;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Service;
use App\Models\Menu;
use App\Models\Research;
use App\Models\SubMenu;
use App\Models\Enrollment;
use App\Models\Membership;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PaymentNumber;
use App\Models\BannerAndTitle;
use App\Models\Enrollmentform;
use App\Models\EnrollmentformInfo;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class WebsiteController extends Controller
{
    public function tech_web_home()
    {
        return view('frontend.home.home',[
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
            'galleries'=>Gallery::where('status',1)->where('add_home',1)->take(6)->get(),
            'banners'=>Banner::get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),
            'testimonial_title'=>BannerAndTitle::where('page','testimonial')->latest()->first(),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'blogs'=>Blog::where('status',1)->where('add_home',1)->get(),
            'footer_blogs'=>Blog::where('status',1)->where('add_home',1)->take(2)->get(),
            'about'=>DB::table('abouts')->where('id',1)->first(),
            'mission_vision'=>DB::table('abouts')->where('id',2)->first(),
            'titles'=>BannerAndTitle::get(),
            'notices'=>Notice::where('status',1)->take(6)->get(),
            'programs'=>SubMenu::where('menu_id',3)->get(),
        ]);
    }

    public function tech_web_sub_menu_details($id)
    {
        return view('frontend.consultancy.consultancy_page',[
            'consultancy'=>DB::table('sub_menus')->find($id),
        ]);
    }
    public function tech_web_services_details($id)
    {
        return view('frontend.services.service_details',[
            'service'=>Service::find($id),
            'services'=>Service::where('status',1)->where('service_home',1)->get(),
        ]);
    }

    public function tech_web_all_services()
    {

        return view('frontend.services.all_services',[
            'services'=>Service::where('status',1)->paginate(8),
            'banner'=>BannerAndTitle::where('page','courses')->latest()->first(),

        ]);
    }
//
    public function tech_web_about_page($id)
    {
        return view('frontend.about.about_page',[
            'about'=>DB::table('abouts')->find($id),
            'testimonials'=>Testimonial::where('status',1)->where('add_home',1)->get(),
            'teams'=>Team::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','instructor')->latest()->first(),

        ]);
    }

    public function tech_web_all_sub_menus($menu_id)
    {
        return view('frontend.consultancy.all_sub_menus', [
            'menu'      => Menu::find($menu_id),
            'sub_menus' => SubMenu::where('menu_id', $menu_id)->get(),
            'banner'    => BannerAndTitle::where('page', 'gallery')->latest()->first(),
        ]);
    }

    public function tech_web_consultancy_page()
    {
        return view('frontend.consultancy.consultancy_page',[
            'consultancy'=>DB::table('consultancies')->latest()->first(),
        ]);
    }
    public function tech_web_team_page()
    {
        return view('frontend.team.team_page',[

            'banner'=>BannerAndTitle::where('page','instructor')->latest()->first(),
        ]);
    }
    public function tech_web_team_page_details($id)
    {
        return view('frontend.team.team_page_details',[
          'team'=>Team::find($id),
            'banner'=>BannerAndTitle::where('page','instructor')->latest()->first(),
        ]);
    }
public function tech_web_testimonial_page()
{
    $testimonial = Testimonial::where('status',1)->latest()->first();

    return view('frontend.testimonial.testimonial', compact('testimonial'));
}
    public function tech_web_blogs_page()
    {
        return view('frontend.blogs.blogs_page',[
            'blogs'=>Blog::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','blogs')->latest()->first(),
        ]);
    }
    public function tech_web_blogs_details($id)
    {
        return view('frontend.blogs.blogs_details',[
            'blog'=>Blog::find($id),

        ]);
    }

    public function tech_web_research_page()
    {
        return view('frontend.research.research_page',[
            'researches'=>Research::where('status',1)->paginate(6),
            'banner'=>BannerAndTitle::where('page','research')->latest()->first(),
        ]);
    }
    public function tech_web_research_details($id)
    {
        return view('frontend.research.research_details',[
            'research'=>Research::find($id),

        ]);
    }
//
    public function tech_web_contacts()
    {
        return view('frontend.contact.contact',[
            'banner'=>BannerAndTitle::where('page','contacts')->latest()->first(),
        ]);

    }

    public function tech_web_enrollment($id)
    {
        return view('frontend.enrollment.enrollment',[
            'service'=>Service::find($id),
            'enrollment_info'=>EnrollmentformInfo::latest()->first(),
            'numbers'=>PaymentNumber::latest()->first(),
        ]);
    }

    public function tech_web_enrollment_page()
    {
        return view('frontend.enrollment.enrollment_page',[
            'enrollments'=>Enrollment::where('user_id',Auth::user()->id)->with('service','user')->get(),
            'banner'=>BannerAndTitle::where('page','enrollment')->latest()->first(),
        ]);

    }

    public function tech_web_enroll(Request $request)
    {
        Enrollment::save_enrollment($request);
        Alert::toast('Enrollment Request Sent','success');
        return back();
    }

    public function tech_web_message()
    {
        return view('frontend.message.message',[
            'messages'=>Message::latest()->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),

        ]);
    }

    public function tech_web_gallery()
    {
        return view('frontend.gallery.gallery_page',[
            'galleries'=>Gallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),

        ]);
    }

    public function tech_web_media()
    {
        return view('frontend.media.media',[
            'galleries'=>Gallery::where('status',1)->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),

        ]);
    }

    public function tech_web_membership()
    {
        return view('frontend.membership.membership',[
            'memberships'=>Membership::latest('id')->get(),
            'banner'=>BannerAndTitle::where('page','gallery')->latest()->first(),

        ]);
    }

    public function tech_web_manage_enrollment()
    {
        return view('admin.enrollment.manage_enrollment',[
            'enrollments'=>Enrollmentform::with('service','user')->get(),

        ]);
    }

    public function tech_web_update_enrollment($id)
    {
        $enrollment = Enrollmentform::find($id);
        if ($enrollment->status == 0){
            $enrollment->status = 1;
        }else{
            $enrollment->status = 0;
        }
        $enrollment->save();
        return back();
    }

    // store enrollment form data from the user site
    public function tech_web_store_enrollment_form_data(Request $request){

        $user_roll = Auth::user();

        $file = $request->file('photo');
        $fileName = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('enrollmentimage/student'),$fileName);
        $save_url = 'enrollmentimage/student/'.$fileName; //insert photo into database

// return $request;

        Enrollmentform::insert([
            'b_name' => $request->b_name,
            'service_id' => $request->service_id,
            'english_name' => $request->english_name,
            'roll_no' => $user_roll->roll_no,
            'division' => $request->division,
            'school_name' => $request->school_name,
            'father_name' => $request->father_name,
            'father_profession' => $request->father_profession,
            'mother_name' => $request->mother_name,
            'mother_profession' => $request->mother_profession,
            'alter_guardian' => $request->alter_guardian,
            'relation' => $request->relation,
            'dob' => $request->dob,
            'religion' => $request->religion,
            'personal_mobile' => $request->personal_mobile,
            'guardian_mobile' => $request->guardian_mobile,
            'present_address' => $request->present_address,
            'post_office' => $request->post_office,
            'upzilla_name' => $request->upzilla_name,
            'district_name' => $request->district_name,
            'photo' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->back();

    }

    public function tech_web_add_enrollment_info(){

        $enrollment_info = EnrollmentformInfo::latest()->first();
        return view('admin.enrollment.add_enrollment_info',compact('enrollment_info'));
    }

    public function tech_web_store_enrollment_info(Request $request){
// dd($request);

        if($request->id){

            $enrollform_id = $request->id;

            EnrollmentformInfo::findOrFail($enrollform_id)->update([
                'institute_name' => $request->institute_name,
                'institute_address' => $request->institute_address,
                'institute_owner' => $request->institute_owner,
                'institute_Instructions' => $request->institute_Instructions,
                'updated_at' => Carbon::now(),
            ]);

        }else{
            EnrollmentformInfo::insert([
                'institute_name' => $request->institute_name,
                'institute_address' => $request->institute_address,
                'institute_owner' => $request->institute_owner,
                'institute_Instructions' => $request->institute_Instructions,
                'created_at' => Carbon::now(),
            ]);

        }
        return redirect()->back();



    }




}
