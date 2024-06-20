<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use App\Models\Favorite;

class MainController extends Controller{

    

    public function index(){
       
        $activejobs = DB::table( 'jobs' )->where( 'is_active', 1 )->count();
        $activecompanies = DB::table( 'companies' )->where( 'is_active', 1 )->count();
        $activecandidates = DB::table( 'users' )->where( 'is_active', 1 )->count();
        $functional_area = DB::table('functional_areas')->get();
        $featured_companies = DB::table('featured_companies')->paginate(5);
        $get_featured_companies = DB::table('featured_companies')->get();
      

        // $favourites_company = DB::table('favourites_company')->paginate(5);
        // $favourites_company_num = DB::table( 'favourites_company' )->where( 'is_active', 1 )->count();

        return view( 'index',compact('activejobs','activecompanies','activecandidates' ,'functional_area','featured_companies' ));

        return view( 'index',compact('activejobs','activecompanies','activecandidates'  ));
    }
    
    public function featured_companies($id){
        $get_featured_companies = DB::table('featured_companies')->where('id' ,$id)->first();
        return view('company/featured_companies' ,compact('get_featured_companies'));
    }

    public function jobs(){
        $jobs = DB::table('jobs')->get();
        $job_titles = DB::table('job_titles')->get();
        $activejobs = DB::table( 'jobs' )->where( 'is_active', 1 )->count();
        $countries = DB::table('countries')->orderBy('id', 'Asc')->get();
        $states = DB::table('states')->orderBy('id', 'Asc')->get();
        $cities = DB::table('cities')->orderBy('id', 'Asc')->get();
        $job_experiences = DB::table('job_experiences')->orderBy('id', 'Asc')->get();
        $job_types = DB::table('job_types')->orderBy('id', 'Asc')->get();
        $job_shifts = DB::table('job_shifts')->orderBy('id', 'Asc')->get();
        $career_levels = DB::table('career_levels')->orderBy('id', 'Asc')->get();
        $genders = DB::table('genders')->orderBy('id', 'Asc')->get();
        $job_skills = DB::table('job_skills')->orderBy('id', 'Asc')->get();
        $degree_levels = DB::table('degree_levels')->orderBy('id', 'Asc')->get();
        $functional_areas = DB::table('functional_areas')->orderBy('id', 'Asc')->get();
        $industries = DB::table('industries')->orderBy('id', 'Asc')->get();
        $companies = DB::table('companies')->orderBy('id', 'Asc')->get();


       $jobs1 = DB::table( 'jobs' )->select( 'jobs.*', 'states.state_name', 'companies.c_name', 'cities.city' )
        ->join('companies', 'companies.id','=','jobs.company_id')
        ->join('states','states.id','=','jobs.state_id')
        ->join('cities','cities.id','=' ,'jobs.city_id')
        ->orderBy('jobs.id', 'Asc')->paginate(10);
        // echo $jobs1;die;
    return view( 'user/jobs',compact('jobs','jobs1' ,'activejobs','job_titles','countries','states','cities','job_experiences','job_types','job_shifts',
                    'career_levels','genders','job_skills','degree_levels','functional_areas','industries','companies'));
    } 

    public function view_detail($id) {
        $userid = Session::get('id'); 
        // dd($userid);
    
        $profile1 = DB::table('jobs')
            ->select('jobs.*', 'companies.c_name', 'job_experiences.job_experience', 'degree_levels.degree_level', 'job_types.job_type', 'functional_areas.functional_area', 'career_levels.career_level')
            ->join('companies', 'companies.id', '=', 'jobs.company_id')
            ->join('job_experiences', 'job_experiences.id', '=', 'jobs.job_experience_id')
            ->join('degree_levels', 'degree_levels.id', '=', 'jobs.degree_level_id')
            ->join('job_types', 'job_types.id', '=', 'jobs.job_type_id')
            ->join('functional_areas', 'functional_areas.id', '=', 'jobs.functional_area_id')
            ->join('career_levels', 'career_levels.id', '=', 'jobs.career_level_id')
            ->where('jobs.id', '=', $id)
            ->first();
        
        return view('view_detail', compact('id', 'profile1', 'userid'));
    }
    
      
      public function add_to_favorite(Request $request){
      $userid = Session::get('id'); 
        DB::table('favourites_job')->insert([
            'user_id' =>$userid,
            'job_id' =>$request->job_id
        ]);
        
        return redirect('my_favourite_jobs');

      }


    public function about_us(){
        return view( 'user/about_us');
    }  

    public function companies(){
        $companies = DB::table('companies')->paginate(20);
        $companies_count = DB::table( 'companies' )->where( 'is_active', 1 )->count();


        return view( 'user/companies' , compact('companies','companies_count'));
    } 


    public function contact_us(){
        return view( 'user/contact_us');
    }  

    public function Privacy_Policy(){
        return view( 'user/Privacy_Policy');
    }  

    public function Refund_Policy(){
        return view( 'user/Refund_Policy');
    }  

    public function Terms_And_Conditions(){
        return view( 'user/Terms_And_Conditions');
    }
    public function  company_public_profile($id){
        $companies_list = DB::table('companies')->where('id',$id)->first();
        return view( 'employer/company_public_profile',compact('companies_list'));
    } 
    
    public function featured_jobs(){
    return view('featured_jobs');
}
 public function search(Request $request)

    {
    
    if($request->ajax())
    
    {
    
    $output="";
    
    $job=DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->get();
    
    if($job)
    
    {
    
    foreach ($job as $key => $product) {
        $output.=' <li class="">'.
    
        '<div class="row">'.
    
    
            '<div class="col-lg-10 col-md-8">
                 <div class="jobimg"><img
                        src="https://eudyoga.com/public/admin_assets/no-image.png">
                </div>
                 <div class="jobinfo">
                     <h3><a href="job/Relationship%20Manager.html"
                            title="Relationship Manager">'.$product->title.'</h3>
                            <div class="companyName"><a href="company/srinivas-92.html"
                            title="Kalyani Motors">'.$product->id.'</a></div>
                       <div class="location">
                        <label class="fulltime" title="Full Time/Permanent">Full
                            Time/Permanent</label>
                        - <span>Hyderabad</span>
                    </div>
                 </div>
                <div class="clearfix"></div>
             </div> 
                 <div class="col-lg-2 col-md-4">
                     <div class="listbtn"><a
                            href="{{"job_details/",'.$product->id.'}}">View
                            Details</a>
                     </div>
                 </div>
           
         </div>
         <p>'.$product->description.' }}</p>
     </li>';
    /* $output.='<tr>'.
    
    '<td>'.$product->id.'</td>'.
    
    '<td>'.$product->title.'</td>'.
    
    '<td>'.$product->description.'</td>'.
    
    
    '</tr>'; */
    
    }
    
    
    
    return Response($output);
    
    
    
       }
    
    
    
       }
    
    
    
    }
     public function job_search(Request $request){
        $title = $request->search;
        // $location = $request->job_location;
      
        if($title != 0){
        $job_search = DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->paginate(20);
        // ->Where('job_location', '=', $location)->Where('status', '=', 'Active')->get();
        }else {
            $job_search = DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->paginate(20);
        //    ->where('job_tittle', 'LIKE', '%'.$title.'%')->Where('status', '=', 'Active')->get();
      
        }
        return view('job_search',compact('job_search'));
      }  
    
    
    public function searchcompany(Request $request)

    {
    
    if($request->ajax())
    
    {
    


        
    $output="";
    
    $companies=DB::table('companies')->where('c_name','LIKE','%'.$request->search."%")->get();
    
    if($companies)
    
    {
    
    foreach ($companies as $key => $product) {
        $output.= '<li class="col-lg-3 col-md-6">'.
          '<div class="empint">'.
             '<a href="{{ url("company_public_profile/{id}",) }}" title="Galaxy Technology">
                <div class="emptbox">
                    <div class="comimg"><img
                            src="https://eudyoga.com/public/admin_assets/no-image.png">
                    </div>
                    <div class="text-info-right">
                        <h4>'.$product->c_name.'</h4>
                        <div class="emloc"><i class="fas fa-map-marker-alt"></i>
                            '.$product->location.' </div>
                    </div>

                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="btn"><a
                            href="{{url("company_public_profile/{id}", '.$product->id.')}}"><i
                                class="fas fa-briefcase"></i> 0 Open Jobs</a>
                    </div>
                </div>
               <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 0 Open Jobs</div>
            </a>
        </div>

    </li>';
    /* $output.='<tr>'.
    
    '<td>'.$product->c_name.'</td>'.
    
    '<td>'.$product->location.'</td>'.
    
    '<td>'.$product->id.'</td>'.
    
    
    '</tr>'; */
    
    } 
    
    
    
    return Response($output);
    
    
    
       } 
    
    
    
       }
    
    
    
    }

    




    public function company_search(Request $request){
        $title = $request->search;
        // $location = $request->job_location;
      
        if($title != 0){
        $company_search = DB::table('companies')->where('c_name','LIKE','%'.$request->search."%")->paginate(20);
        // ->Where('job_location', '=', $location)->Where('status', '=', 'Active')->get();
        }else {
            $company_search = DB::table('companies')->where('c_name','LIKE','%'.$request->search."%")->paginate(20);
        //    ->where('job_tittle', 'LIKE', '%'.$title.'%')->Where('status', '=', 'Active')->get();
      
        }
        return view('company_search',compact('company_search'));
      }  
      
      
      
      
      public function searchindex(Request $request)

    {
    
    if($request->ajax())
    
    {
    
    $output="";
    
    $job=DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->get();
    
    if($job)
    
    {
    
    foreach ($job as $key => $product) {
        $output.=' <li class="">'.
    
        '<div class="row">'.
    
    
            '<div class="col-lg-10 col-md-8">
                 <div class="jobimg"><img
                        src="https://eudyoga.com/public/admin_assets/no-image.png">
                </div>
                 <div class="jobinfo">
                     <h3><a href="job/Relationship%20Manager.html"
                            title="Relationship Manager">'.$product->title.'</h3>
                            <div class="companyName"><a href="company/srinivas-92.html"
                            title="Kalyani Motors">'.$product->id.'</a></div>
                       <div class="location">
                        <label class="fulltime" title="Full Time/Permanent">Full
                            Time/Permanent</label>
                        - <span>Hyderabad</span>
                    </div>
                 </div>
                <div class="clearfix"></div>
             </div> 
                 <div class="col-lg-2 col-md-4">
                     <div class="listbtn"><a
                            href="{{"job_details/",'.$product->id.'}}">View
                            Details</a>
                     </div>
                 </div>
           
         </div>
         <p>'.$product->description.' }}</p>
     </li>';
    /* $output.='<tr>'.
    
    '<td>'.$product->id.'</td>'.
    
    '<td>'.$product->title.'</td>'.
    
    '<td>'.$product->description.'</td>'.
    
    
    '</tr>'; */
    
    }
    
    
    
    return Response($output);
    
    
    
       }
    
    
    
       }
    
    
    
    }





    public function index_search(Request $request){
        $title = $request->search;
        // $location = $request->job_location;
      
        if($title != 0){
        $index_search = DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->paginate(10);
        // ->Where('job_location', '=', $location)->Where('status', '=', 'Active')->get();
        }
        else {
            $index_search = DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->paginate(10);
        //    ->where('job_tittle', 'LIKE', '%'.$title.'%')->Where('status', '=', 'Active')->get();
      
        }
        return view('index_search',compact('index_search'));
    }

      


    public function searchabout(Request $request)

    {
    
    if($request->ajax())
    
    {
    
    $output="";
    
    $job=DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->get();
    
    if($job)
    
    {
    
    foreach ($job as $key => $product) {
        $output.=' <li class="">'.
    
        '<div class="row">'.
    
    
            '<div class="col-lg-10 col-md-8">
                 <div class="jobimg"><img
                        src="https://eudyoga.com/public/admin_assets/no-image.png">
                </div>
                 <div class="jobinfo">
                     <h3><a href="job/Relationship%20Manager.html"
                            title="Relationship Manager">'.$product->title.'</h3>
                            <div class="companyName"><a href="company/srinivas-92.html"
                            title="Kalyani Motors">'.$product->id.'</a></div>
                       <div class="location">
                        <label class="fulltime" title="Full Time/Permanent">Full
                            Time/Permanent</label>
                        - <span>Hyderabad</span>
                    </div>
                 </div>
                <div class="clearfix"></div>
             </div> 
                 <div class="col-lg-2 col-md-4">
                     <div class="listbtn"><a
                            href="{{"job_details/",'.$product->id.'}}">View
                            Details</a>
                     </div>
                 </div>
           
         </div>
         <p>'.$product->description.' }}</p>
     </li>';
    /* $output.='<tr>'.
    
    '<td>'.$product->id.'</td>'.
    
    '<td>'.$product->title.'</td>'.
    
    '<td>'.$product->description.'</td>'.
    
    
    '</tr>'; */
    
    } 
    
    
    
    return Response($output);
    
    
    
       } 
    
    
    
       }
    
    
    
    }
    
    
    
    
      public function about_search(Request $request){
        $title = $request->search;
        // $location = $request->job_location;
      
        if($title != 0){
        $about_search = DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->paginate(10);
        // ->Where('job_location', '=', $location)->Where('status', '=', 'Active')->get();
        }else {
            $about_search = DB::table('jobs')->where('title','LIKE','%'.$request->search."%")->paginate(10);
        //    ->where('job_tittle', 'LIKE', '%'.$title.'%')->Where('status', '=', 'Active')->get();
      
        }
        return view('about_search',compact('about_search'));
      }  
      



    

    
    // public function  company_detail(){
    //     return view( 'user/company_detail');
    // }
}