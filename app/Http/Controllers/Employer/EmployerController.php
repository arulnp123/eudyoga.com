<?php
namespace App\Http\Controllers\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use users;
use Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;

class EmployerController extends Controller
{

        public function  employer_register(){
            $states = DB::table('states')->orderBy('id', 'Asc')->get();
            $cities = DB::table('cities')->orderBy('id', 'Asc')->get();
            return view( 'employer/employer_register',compact('cities','states'));
        }

        public function  employer_register2(){
            $states = DB::table('states')->orderBy('id', 'Asc')->get();
            $cities = DB::table('cities')->orderBy('id', 'Asc')->get();
            return view( 'employer/employer_register2',compact('cities','states'));
        }

        public function  basic_detials(){
            $userid = Session::get('id');
            $employerprofile = DB::table('companies')->select('companies.*', 'cities.city', 'states.state_name')
            ->join('states','states.id','=','companies.state_id')
            ->join('cities','cities.id','=','companies.city_id')
            ->where('companies.id', '=', $userid)->first();
                return view( 'employer/basic_detials', compact('employerprofile'));
        }
        
        
        public function savebasic(Request $request){
           DB::table('companies')->insert([
                'name' => $request -> name,
                'email'=> $request -> email,
                'phone'=> $request -> phone,
                'state_id'=>$request->state_id,
                'city_id'=>$request->city_id,
            ]);
            return redirect()->back()->with('success', 'Basic details Successfully... !');
        }

        public function  candiate_profile (){
            $users = DB::table('users')->select('users.*','companies.company_follwers_id')
            ->join('companies','companies.company_follwers_id', '=' ,'users.id')
            ->orderBy('id', 'Asc')->paginate(10);

            $states = DB::table('states')->orderBy('id', 'Asc')->get();
            $countries = DB::table('countries')->orderBy('id', 'Asc')->get();
            $cities = DB::table('cities')->orderBy('id', 'Asc')->get();
            $functional_areas = DB::table('functional_areas')->orderBy('id', 'Asc')->get();
            $industries = DB::table('industries')->orderBy('id', 'Asc')->get();
            $career_levels = DB::table('career_levels')->orderBy('id', 'Asc')->get();
            $job_experiences = DB::table('job_experiences')->orderBy('id', 'Asc')->get();
            $genders = DB::table('genders')->orderBy('id', 'Asc')->get();
            $job_skills = DB::table('job_skills')->orderBy('id', 'Asc')->get();
            $activeusers = DB::table( 'users' )->where( 'is_active', 1 )->count();

            return view( 'employer/candiate_profile', compact('countries','states','cities','functional_areas','users','industries','career_levels','job_experiences','genders','job_skills','activeusers'));
        }


        public function candidatejobs( Request $request ) {

            $functional_area_id = $request->functional_area_id;
            $state_id = $request->state_id;
            $city_id = $request->city_id;
            {
                $getjobs = DB::table( 'jobs' )->select( 'jobs.functional_area_id','jobs.city_id','jobs.state_id', 'functional_areas.functional_area', 'cities.city', 'states.state_name', 'jobs.id as id' )
                ->Join( 'functional_areas', 'functional_areas.id', '=', 'jobs.functional_area_id' )
                ->Join( 'cities', 'cities.id', '=', 'jobs.city_id' )
                ->Join( 'states', 'states.id', '=', 'jobs.state_id' )
                ->where( 'jobs.functional_area_id', $functional_area_id )
                ->where( 'jobs.city_id', $city_id )
                ->where( 'jobs.state_id', $state_id )
                ->orderBy( 'jobs.id', 'asc' )->get();
            }
            // echo'<pre>';print_r( $getjobs );echo'</pre>';die;
            return view( 'employer.candidatejobs', compact( 'getjobs' ) );
        }

        public function addemployer(Request $request){
        $employeeData = DB::table( 'companies' )->insert( [
            'user_type_id'=>'2',
            'name'=>$request->name,
            'c_name'=>$request->c_name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=> Hash::Make($request->password),
            'c_password'=>$request->c_password,
            'state_id'=>$request->state_id,
            'city_id'=>$request->city_id,
            'refrence'=>$request->refrence,
            ] );
            $user_id = DB::getPdo()->lastInsertId();

            Session::put( 'id', $user_id );
            return redirect( '/employer_index' );
        }

        public function employer_login(){
            return view( 'employer/employer_login');
        }

        public function checklogin( Request $request ){
            $message = "";
            $email = trim( $request->email );
            $password = trim( $request->password );
            $sql = "select * from companies where email='$email'";
            $result = DB::select(  $sql ) ;
            $hash = '';
            if ( count( $result ) > 0 ) {
            $hash = $result[ 0 ]->password;
            if ( Hash::check( $password, $hash ) ) {
                if ( count( $result ) > 0 ) {
                Session::put( 'id', $result[ 0 ]->id );
                Session::put( 'user_type_id', $result[ 0 ]->user_type_id );

                return redirect( '/employer_index' )->with( 'message', $message );
                } else {
                $message = 'Login Failed';
                return redirect( '/employer_login' )->with( 'message', $message );
                }
            } else {
                $message = 'Incorrect Password';
                return redirect( '/employer_login' )->with( 'message', $message );
            }
            }else{
            $message = 'Email Not Found';
            return redirect( '/employer_login' )->with( 'message', $message );
            }
        }

        public function checkemail( Request $request ) {
            $email = trim( $request->email );
            $id = trim( $request->id );
            if ( $id == 0 ) {
                $sql = "SELECT * FROM companies where email='$email'";
            } else {
                $sql = "SELECT * FROM companies where email='$email' and id <> $id";
            }
            $users = DB::select($sql);
            if ( count( $users ) > 0 ) {
                return response()->json( array( 'exists' => true ) );
            } else {
                return response()->json( array( 'exists' => false ) );
            }
        }

        public function employerlogout(){
            Session::flush();
            return redirect( '/employer_login' );
        }

        public function employer_profile(){
            return view( 'employer/employer_profile');
        }

        public function employer_index()
            {
                $companyId = Session::get('id');
                $jobCount = DB::table('jobs')->where('company_id', $companyId)->count();
                $followersCount =DB::table('companies')->where('company_follwers_id', $companyId)->count();
                return view('employer.employer_index', compact('jobCount','followersCount'));
            }

        public function employer_dashboard(){
            return view( 'employer/employer_dashboard');
        }

        public function abc(){
            return view( 'employer/abc');
        }

        public function company_followers(){
            return view( 'employer/company_followers');
        }

        public function company_jobs(){
            $userid = Session::get('id');
            $jobDetail = DB::table('jobs')->select('jobs.*','job_shifts.job_shift' ,'cities.city')
            ->join('job_shifts','job_shifts.id', '=' ,'jobs.job_shift_id')
            ->join('cities','cities.id', '=' ,'jobs.city_id')
            ->where('jobs.company_id', '=', $userid)->get();
            return view( 'employer/company_jobs',compact('jobDetail'));
        }

        public function company_messages(){
            return view( 'employer/company_messages');
        }

        public function company_public_profile(){
            return view( 'employer/company_public_profile');
        }

        public function cv_search_packages(){
            return view( 'employer/cv_search_packages');
        }

        public function getcity($state_id){
            $cities = DB::table('cities')->select('id','city')->where('state_id',$state_id)->orderBy( 'city', 'Asc' )->get();
            return response()->json($cities);
        }

        public function edit_profile(){
            $userid = Session::get('id');
            $getstate = DB::table('states')->orderBy( 'id', 'Asc' )->get();
            $getcountry = DB::table('countries')->orderBy( 'id', 'Asc' )->get();
            $getcity = DB::table('cities')->orderBy( 'id', 'Asc' )->get();
            $getindustries = DB::table('industries')->orderBy( 'id', 'Asc' )->get();
            $getownership_types = DB::table('ownership_types')->orderBy( 'id', 'Asc' )->get();
            $getdegree_level = DB::table('degree_levels')->orderBy( 'id', 'Asc' )->get();
            $getjob_experience = DB::table('job_experiences')->orderBy( 'id', 'Asc' )->get();
            $employerprofile = DB::table('companies')->select('companies.*', 'cities.city', 'states.state_name')
            ->join('states','states.id','=','companies.state_id')
            ->join('cities','cities.id','=','companies.city_id')
            ->where('companies.id', '=', $userid)->first();
            //dd($employerprofile);
            return view( 'employer/edit_profile', compact('employerprofile','getstate','getcountry','getcity',
            'getindustries','getownership_types','getdegree_level','getjob_experience'));
        }

        public function editprofile(Request $request){
            $userid = $request->id;
            $updatemember = DB::table('companies')->where('id',$userid)->update([
                    'logo'=>$request->logo,
                    'name'=>$request->name,
                    'c_name'=>$request->c_name,
                    'industry_id'=>$request->industry_id,
                    'phone'=>$request->phone,
                    'alternate_phone'=>$request->alternate_phone,
                    'email'=>$request->email,
                    'alternate_email'=>$request->alternate_email,
                    'established_in'=>$request->established_in,
                    'website'=>$request->website,
                    'gst'=>$request->gst,
                    'branch'=>$request->branch,
                    'no_of_offices'=>$request->no_of_offices,
                    'no_of_employees'=>$request->no_of_employees,
                    'description'=>$request->description,
                    'location'=>$request->location,
                    'country_id'=>$request->country_id,
                    'state_id'=>$request->state_id,
                    'city_id'=>$request->city_id,
                    'ownership_type_id'=>$request->ownership_type_id,
                    'facebook'=>$request->facebook,
                    'twitter'=>$request->twitter,
                    'linkedin'=>$request->linkedin,
                    'google_plus'=>$request->google_plus,
                    'pinterest'=>$request->pinterest,
                    'map'=>$request->map,
                ] );
            $updateJobExperiences = DB::table('job_experiences')->where('user_id',$userid)->update([
            'job_experience' => $request->job_experience,
            ]);

    return redirect( 'edit_profile')->with('success', 'Profile updated successfully');

  }

        public function post_job(){
            $userid = Session::get('id');
            $employerprofile = DB::table('companies')->select('companies.*');
            $states = DB::table('states')->orderBy('id', 'Asc')->get();
            $country = DB::table('countries')->orderBy('id', 'Asc')->get();
            $get_job_skills = DB::table('job_skills')->orderBy('id', 'Asc')->get();
            $get_salary_periods = DB::table('salary_periods')->orderBy('id', 'Asc')->get();
            $get_career_levels = DB::table('career_levels')->orderBy('id', 'Asc')->get();
            $get_functional_areas = DB::table('functional_areas')->orderBy('id', 'Asc')->get();
            $get_job_types = DB::table('job_types')->orderBy('id', 'Asc')->get();
            $get_job_shifts = DB::table('job_shifts')->orderBy('id', 'Asc')->get();
            $get_genders = DB::table('genders')->orderBy('id', 'Asc')->get();
            $get_degree_levels = DB::table('degree_levels')->orderBy('id', 'Asc')->get();
            $get_job_experiences = DB::table('job_experiences')->orderBy('id', 'Asc')->get();

            return view( 'employer/post_job', compact('employerprofile','states','country','get_job_skills','get_salary_periods','get_career_levels','get_functional_areas','get_job_types','get_job_shifts','get_genders','get_degree_levels','get_job_experiences'));

        }

        public function upload_post_job(Request $request){
            $userid = Session::get('id');
        DB::table('jobs')->where('id',$userid)->insert([
            'company_id'         => $userid,
            'title'              => $request->title,
            'description'        => $request->description,
            'benefits'           => $request->benefits,
            'job_skill_id'       => $request->job_skill_id,
            'country_id'         => $request->country_id,
            'state_id'           => $request->state_id,
            'city_id'            => $request->city_id,
            'salary_from'        => $request->salary_from,
            'salary_to'          => $request->salary_to,
            'salary_period_id'   => $request->salary_period_id,
            'hide_salary'        => $request->hide_salary,
            'career_level_id'    => $request->career_level_id,
            'functional_area_id' => $request->functional_area_id,
            'job_type_id'        => $request->job_type_id,
            'job_shift_id'       => $request->job_shift_id,
            'num_of_positions'   => $request->num_of_positions,
            'gender_id'          => $request->gender_id,
            'expiry_date'        => $request->expiry_date,
            'degree_level_id'    => $request->degree_level_id,
            'job_experience_id'  => $request->job_experience_id,
            'is_freelance'       => $request->is_freelance,
            'hr_details'         => $request->hr_details,
        ]);

        return redirect('company_jobs')->with('success', 'Job Post successfully');
        }

        public function delete_post_job($id){
        DB::table('jobs')->where('id', '=' , $id)->delete();
        return redirect('company_jobs')->with('success','Successfully deteled..!');

        }

        public function edit_post_job(Request $request){
        $userid = $request->id;

        $JobPost = DB::table('jobs')->select('jobs.*')
        ->where('jobs.id', '=' , $userid)->first();
        $states = DB::table('states')->orderBy('id', 'Asc')->get();
        $country = DB::table('countries')->orderBy('id', 'Asc')->get();
        $get_job_skills = DB::table('job_skills')->orderBy('id', 'Asc')->get();
        $get_salary_periods = DB::table('salary_periods')->orderBy('id', 'Asc')->get();
        $get_career_levels = DB::table('career_levels')->orderBy('id', 'Asc')->get();
        $get_functional_areas = DB::table('functional_areas')->orderBy('id', 'Asc')->get();
        $get_job_types = DB::table('job_types')->orderBy('id', 'Asc')->get();
        $get_job_shifts = DB::table('job_shifts')->orderBy('id', 'Asc')->get();
        $get_genders = DB::table('genders')->orderBy('id', 'Asc')->get();
        $get_degree_levels = DB::table('degree_levels')->orderBy('id', 'Asc')->get();
        $get_job_experiences = DB::table('job_experiences')->orderBy('id', 'Asc')->get();

        return view( 'employer/edit_post_job', compact('JobPost','states','country','get_job_skills','get_salary_periods','get_career_levels','get_functional_areas','get_job_types','get_job_shifts','get_genders','get_degree_levels','get_job_experiences'));

        }

        public function update_post_job(Request $request){
        $userid = $request->id;

        $updateJobPost = DB::table('jobs')->where('id', '=' ,$userid)->update([

            'title'              => $request->title,
            'description'        => $request->description,
            'benefits'           => $request->benefits,
            'job_skill_id'       => $request->job_skill_id,
            'country_id'         => $request->country_id,
            'state_id'           => $request->state_id,
            'city_id'            => $request->city_id,
            'salary_from'        => $request->salary_from,
            'salary_to'          => $request->salary_to,
            'salary_period_id'   => $request->salary_period_id,
            'hide_salary'        => $request->hide_salary,
            'career_level_id'    => $request->career_level_id,
            'functional_area_id' => $request->functional_area_id,
            'job_type_id'        => $request->job_type_id,
            'job_shift_id'       => $request->job_shift_id,
            'num_of_positions'   => $request->num_of_positions,
            'gender_id'          => $request->gender_id,
            'expiry_date'        => $request->expiry_date,
            'degree_level_id'    => $request->degree_level_id,
            'job_experience_id'  => $request->job_experience_id,
            'is_freelance'       => $request->is_freelance,
            'hr_details'         => $request->hr_details,
        ]);

        return redirect('company_jobs')->with('success' , 'Job Post Successfully Updated...! ');

        }

        public function unlocked_users(){
            return view( 'employer/unlocked_users');
        }

        public function user_profile($id){
            $profile  = DB::table('users')->where('id', '=', $id)->get();
            $profile1 = DB::table('users')->select('users.*', 'cities.city', 'states.state_name')->join('states','states.id','=','users.state_id')->join('cities','cities.id','=','users.city_id')->where('users.id', '=', $id)->first();
            return view( 'employer/user_profile',compact('profile','profile1'));
        }

public function candsearch(Request $request)
  {

  if($request->ajax())
  {

  $output="";

  $users=DB::table('users')->where('first_name','LIKE','%'.$request->search."%")->get();

  if($users)

  {

  foreach ($users as $key => $product) {
      $output.=' <li class="">'.

      '<div class="row">


          <div class="col-lg-10 col-md-8">
              <div class="jobimg"><img
                      src="http://localhost/eudyoga.in/public/assets/company_logos/guru-swamy-1702037951-933.jpg">
              </div>
              <div class="jobinfo">
                  <h3><a href="job/Relationship%20Manager.html"
                          title="Relationship Manager">'.$product->first_name.' </h3>
                  <div class="companyName"><a href="company/srinivas-92.html"
                          title="Kalyani Motors">'.$product->street_address.'</a></div>
              </div>
              <div class="clearfix"></div>
          </div>
          <div class="col-lg-2.5">
              <div class="listbtn"><a
                      href="{{ "user_profile/", '.$product->id.') }}">ViewProfile</a>
              </div>
          </div>
      </div>
    <p>  </p>
  </li>';
  }

  return Response($output);

     }
     }
  }

        public function search_cand(Request $request){
            $title = $request->search;
            if($title != 0){
            $search_cand = DB::table('users')->where('first_name','LIKE','%'.$request->search."%")->paginate(10);
            }else {
                $search_cand = DB::table('users')->where('first_name','LIKE','%'.$request->search."%")->paginate(10);
            }
            return view('search_cand',compact('search_cand'));
        }





}
