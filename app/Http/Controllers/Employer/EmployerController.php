<?php
namespace App\Http\Controllers\Employer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use users;
use Illuminate\Support\Facades\Validator;

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
    $employerprofile = DB::table('companies')->select('companies.*', 'cities.city', 'states.state')->join('states','states.id','=','companies.state_id')->join('cities','cities.id','=','companies.city_id')->first();
        return view( 'employer/basic_detials', compact('employerprofile'));
  } 

  public function  candiate_profile (){
    // $candiate_profile = DB::table('users')->select('users.*')->get();
    $states = DB::table('states')->orderBy('id', 'Asc')->get();
    $countries = DB::table('countries')->orderBy('id', 'Asc')->get();
    $cities = DB::table('cities')->orderBy('id', 'Asc')->get();
    $functional_areas = DB::table('functional_areas')->orderBy('id', 'Asc')->get();
    $users = DB::table('users')->orderBy('id', 'Asc')->paginate(10);
    $industries = DB::table('industries')->orderBy('id', 'Asc')->get();
    $career_levels = DB::table('career_levels')->orderBy('id', 'Asc')->get();
    $job_experiences = DB::table('job_experiences')->orderBy('id', 'Asc')->get();
    $genders = DB::table('genders')->orderBy('id', 'Asc')->get();
    $job_skills = DB::table('job_skills')->orderBy('id', 'Asc')->get();
    $activeusers = DB::table( 'users' )->where( 'is_active', 1 )->count();
    // dd($users);
        return view( 'employer/candiate_profile', compact('countries','states','cities','functional_areas','users','industries','career_levels','job_experiences','genders','job_skills','activeusers'));
  } 





  public function addemployer(Request $request){
       // dd($request->all()); 
       
    DB::table( 'users' )->insert( [
      'name'=>$request->name,
      'name'=>$request->c_name,
      'phone'=>$request->phone,
      'email'=>$request->email,
      'password'=> Hash::Make($request->password),
      'state_id'=>$request->state_id,
      'city_id'=>$request->city_id,
      'refrence'=>$request->refrence,
    ] );
    return view( 'employer/employer_index');
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

  public function employerlogout(){
    Session::flush();
    return redirect( '/employer_login' );
  }   

  public function employer_profile(){
    return view( 'employer/employer_profile');
  }  

  public function employer_index(){
    return view( 'employer/employer_index');
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
    return view( 'employer/company_jobs');
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

  public function edit_profile(){
    $userid = Session::get('id'); 
    $employerprofile = DB::table('companies')->first();
     $degree_levels = DB::table('degree_levels')->first();
    $job_experiences = DB::table('job_experiences')->first();
    // print_r($employerprofile);die;
    return view( 'employer/edit_profile', compact('employerprofile','degree_levels','job_experiences'));
  } 
  public function editprofile(Request $request){
    $userid = $request->id;
    $updatemember = DB::table('companies')->where('id',$userid)->update([
			'logo'=>$request->logo,
			'c_name'=>$request->c_name,
			'name'=>$request->name,
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
      'job_experience_id' => $request->job_experience_id]
  );
  $updateDegreeLevels = DB::table('degree_levels')->where('user_id',$userid)->update([
    'degree_level_id' => $request->degree_level_id]
 );
 //dd($updatemember, $updateJobExperiences, $updateDegreeLevels);
    return redirect( 'edit_profile')->with('success', 'Profile updated successfully');
  
  } 

  public function post_job(){
      $state = DB::table('states')->get();
    return view( 'employer/post_job', compact('state'));
  } 
  public function unlocked_users(){
    return view( 'employer/unlocked_users');
  } 
  public function user_profile($id){
    $profile = DB::table('users')->where('id', '=', $id)->get();
    $profile1 = DB::table('users')->select('users.*', 'cities.city', 'states.state')->join('states','states.id','=','users.state_id')->join('cities','cities.id','=','users.city_id')->where('users.id', '=', $id)->first();
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
                      href="{{"user_profile/", '.$product->id.') }}">ViewProfile</a>    
              </div>
          </div>
      </div>
    <p>  </p> 
  </li>';
   /* $output.='<tr>'.
    
    '<td>'.$product->first_name.'</td>'.
    
    '<td>'.$product->street_address.'</td>'.
    
    '<td>'.$product->description.'</td>'.
    
    
    '</tr>'; */
  }
    
    
    
  return Response($output);
  
  
  
     }
  
  
  
     }
  
  
  
  }

  public function search_cand(Request $request){
    $title = $request->search;
    // $location = $request->job_location;
  
    if($title != 0){
    $search_cand = DB::table('users')->where('first_name','LIKE','%'.$request->search."%")->paginate(10);
    // ->Where('job_location', '=', $location)->Where('status', '=', 'Active')->get();
    }else {
        $search_cand = DB::table('users')->where('first_name','LIKE','%'.$request->search."%")->paginate(10);
    //    ->where('job_tittle', 'LIKE', '%'.$title.'%')->Where('status', '=', 'Active')->get();
  
    }
    return view('search_cand',compact('search_cand'));
  }  
  




}