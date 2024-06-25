<?php
namespace App\Http\Controllers\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;
use Auth;

class CandidateController extends Controller
{
   public function  candidate_login(){
        return view( 'candidate/candidate_login');
    }

       public function candidatepost( Request $request ) {

        DB::table( 'users' )->insert( [
            'user_type_id'=>'3',
            'name'=>$request->name,
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
        return redirect( '/candidate_index');
        }


      public function candidatelogout(){
        Session::flush();
        return redirect( '/candidate_login' );
      }


  public function checkloginn( Request $request ){
        // dd($request->all());
        $message = "";
        $email = trim( $request->email );
        $password = trim( $request->password );
        $sql = "select * from users where email='$email'";
        $result = DB::select(  $sql ) ;
        $hash = '';
        if ( count( $result ) > 0 ) {
            $hash = $result[ 0 ]->password;
            if ( Hash::check( $password, $hash ) ) {
                if ( count( $result ) > 0 ) {
                    Session::put( 'id', $result[ 0 ]->id );
                    Session::put( 'user_type_id', $result[ 0 ]->user_type_id );

                    return redirect( '/candidate_index' )->with( 'message', $message );
                } else {
                    $message = 'Login Failed';
                    return redirect( '/candidate_login' )->with( 'message', $message );
                }
            } else {
                $message = 'Incorrect Password';
                return redirect( '/candidate_login' )->with( 'message', $message );
            }
        }else{
            $message = 'Email Not Found';
            return redirect( '/candidate_login' )->with( 'message', $message );
        }
  }

  public function candidate_index(){
    return view( 'candidate/candidate_index');
  }

  public function get_user_name()
  {
      $userId = Session::get('id');

      $userFirstName = null;
      if ($userId) {
          $user = DB::table('users')->where('id', $userId)->first();
          $userFirstName = $user ? $user->first_name : null;
      }

  }
  public function abc(){
    return view( 'candidate/abc');
  }

  public function  candidate_register(){

    $states = DB::table('states')->orderBy('id', 'Asc')->get();

        $cities = DB::table('cities')->orderBy('id', 'Asc')->get();
        return view( 'candidate/candidate_register' ,compact('cities','states'));
  }

  public function  edit_profile_candidate(){
      $userid = Session::get('id');
      $gender = DB::table('genders')->orderBy( 'id', 'Asc' )->get();
      $marital_statuses = DB::table('marital_statuses')->orderBy( 'id', 'Asc' )->get();
      $candidateprofile = DB::table('users')->where('id', '=', $userid)->first();
      $managecountries = DB::table( 'countries' )->orderBy( 'id', 'Asc' )->get();
      $job_experiences = DB::table('job_experiences')->orderBy( 'id', 'Asc' )->get();
      $career_levels  = DB::table('career_levels')->orderBy( 'id', 'Asc' )->get();
      $industries  = DB::table('industries')->orderBy( 'id', 'Asc' )->get();
      $functional_areas  = DB::table('functional_areas')->orderBy( 'id', 'Asc' )->get();
    $getnationality =DB::table('nationality')->get();

        return view( 'candidate/edit_profile_candidate', compact('candidateprofile','gender' ,'managecountries','marital_statuses','job_experiences','career_levels','industries'
      ,'functional_areas','getnationality'));
  }
  public function  editprofilecandidate(Request $request){
      $userid = $request->id;
      $updatecandidate = DB::table('users')->where('id',$userid)->update([
                    'email'=>$request->email,
                    'image'=>$request->image,
                    'first_name'=>$request->first_name,
                    'name'=>$request->name,
                    'mother_name'=>$request->mother_name,
                    'father_name'=>$request->father_name,
                    'gender_id'=>$request->gender_id,
                    'marital_status_id'=>$request->marital_status_id,
                    'country_id'=>$request->country_id,
                    'state_id'=>$request->state_id,
                    'city_id'=>$request->city_id,
                    'nationality_id'=>$request->nationality_id,
                    'date_of_birth'=>$request->date_of_birth,
                    'age'=>$request->age,
                    'phone'=>$request->phone,
                    'mobile_num'=>$request->mobile_num,
                    'street_address'=>$request->street_address,
                    'job_experience_id'=>$request->job_experience_id,
                    'career_level_id'=>$request->career_level_id,
                    'industry_id'=>$request->industry_id,
                    'functional_area_id'=>$request->functional_area_id,
                    'current_salary'=>$request->current_salary,
                    'expected_salary'=>$request->expected_salary,
                    'salary_currency'=>$request->salary_currency,
              ] );
           //dd($updatecandidate);
                return redirect( 'edit_profile_candidate')->with('success', 'Profile updated successfully');
   }



//     public function  candidatepost(Request $request){
//         $userid = $request->id;
//     $PostCandidate = DB::table('users')->insert([
//                   'first_name'=>$request->first_name,
//                   'phone'=>$request->phone,
//                   'email'=>$request->email,
//                   'password'=>$request->password,
//                   'password_confirmation'=>$request->password_confirmation,
//                   'state_id'=>$request->state_id,
//                   'city_id'=>$request->city_id,
//                   'refrence'=>$request->refrence,

//             ] );

//             return redirect('/candidatepost')->with('success', 'Register successfully');
//  }


    public function getstate( Request $request )
    {
        $getstate = DB::table( 'states' )->where( 'country_id', $request->country_id )->orderBy( 'id', 'Asc' )->get();
        return response()->json( $getstate );
    }
    public function getcity( Request $request ) {
      $getcity = DB::table( 'cities' )->where( 'state_id', $request->state_id )->orderBy( 'id', 'Asc' )->get();

      return response()->json( $getcity );
    }


  public function  manage_resume(){
    $userid = Session::get('id');
    // dd($userid);


    $gender = DB::table('genders')->orderBy( 'id', 'Asc' )->get();
    $candidateprofile = DB::table('users')->where('id', '=', $userid)->first();
    $marital_statuses = DB::table('marital_statuses')->orderBy( 'id', 'Asc' )->get();
    $managecountries = DB::table( 'countries' )->orderBy( 'id', 'Asc' )->get();
    $job_experiences = DB::table('job_experiences')->orderBy( 'id', 'Asc' )->get();
    $career_levels  = DB::table('career_levels')->orderBy( 'id', 'Asc' )->get();
    $industries  = DB::table('industries')->orderBy( 'id', 'Asc' )->get();
    $functional_areas  = DB::table('functional_areas')->orderBy( 'id', 'Asc' )->get();
    $getnationality =DB::table('nationality')->orderBy( 'id', 'Asc' )->get();


    $view_puplic_profile = DB::table('users')->select('users.*','cities.city','states.state_name','countries.country','marital_statuses.marital_status', 'job_experiences.job_experience','genders.gender','career_levels.career_level')
    ->join('states','states.id','=','users.state_id')
    ->join('cities','cities.id','=','users.city_id')
    ->join('countries','countries.id','=','users.country_id')
    ->join('marital_statuses','marital_statuses.id','=','users.marital_status_id')
    ->join('job_experiences','job_experiences.id','=','users.job_experience_id')
    ->join('genders','genders.id','=','users.gender_id')
    ->join('career_levels','career_levels.id','=','users.career_level_id')
    ->where('users.id', '=', $userid)
    ->first();
    // print_r($view_puplic_profile);
    //  echo($userid);
    // die;
        return view( 'candidate/manage_resume',compact('view_puplic_profile' ,'gender','candidateprofile','marital_statuses','managecountries','job_experiences','career_levels','industries','functional_areas','getnationality'));
  }


  public function  updateresume(Request $request){
    $userid = $request->id;
    $updatecandidate = DB::table('users')->where('id',$userid)->update([
                  'email'=>$request->email,
                  'image'=>$request->image,
                  'first_name'=>$request->first_name,
                  'name'=>$request->name,
                  'mother_name'=>$request->mother_name,
                  'father_name'=>$request->father_name,
                  'gender_id'=>$request->gender_id,
                  'marital_status_id'=>$request->marital_status_id,
                  'country_id'=>$request->country_id,
                  'state_id'=>$request->state_id,
                  'city_id'=>$request->city_id,
                  'nationality_id'=>$request->nationality_id,
                  'date_of_birth'=>$request->date_of_birth,
                  'age'=>$request->age,
                  'phone'=>$request->phone,
                  'mobile_num'=>$request->mobile_num,
                  'street_address'=>$request->street_address,
                  'job_experience_id'=>$request->job_experience_id,
                  'career_level_id'=>$request->career_level_id,
                  'industry_id'=>$request->industry_id,
                  'functional_area_id'=>$request->functional_area_id,
                  'current_salary'=>$request->current_salary,
                  'expected_salary'=>$request->expected_salary,
                  'salary_currency'=>$request->salary_currency,
            ] );
         //dd($updatecandidate);
              return redirect( 'candidate/manage_resume')->with('success', 'Profile updated successfully');
 }
 public function resume_data(Request $request){
  if ($request->isMethod('post')) {
      $userid = Session::get('id');
      $gender = DB::table('genders')->orderBy('id', 'asc')->get();
      $candidateprofile = DB::table('users')->where('id', '=', $userid)->first();
      $marital_statuses = DB::table('marital_statuses')->orderBy('id', 'asc')->get();
      $managecountries = DB::table('countries')->orderBy('id', 'asc')->get();
      $job_experiences = DB::table('job_experiences')->orderBy('id', 'asc')->get();
      $career_levels  = DB::table('career_levels')->orderBy('id', 'asc')->get();
      $industries  = DB::table('industries')->orderBy('id', 'asc')->get();
      $functional_areas  = DB::table('functional_areas')->orderBy('id', 'asc')->get();
      $getnationality = DB::table('nationality')->orderBy('id', 'asc')->get();

      $view_puplic_profile = DB::table('users')
          ->select('users.*', 'cities.city', 'states.state', 'countries.country', 'marital_statuses.marital_status', 'job_experiences.job_experience', 'genders.gender', 'career_levels.career_level')
          ->join('states', 'states.id', '=', 'users.state_id')
          ->join('cities', 'cities.id', '=', 'users.city_id')
          ->join('countries', 'countries.id', '=', 'users.country_id')
          ->join('marital_statuses', 'marital_statuses.id', '=', 'users.marital_status_id')
          ->join('job_experiences', 'job_experiences.id', '=', 'users.job_experience_id')
          ->join('genders', 'genders.id', '=', 'users.gender_id')
          ->join('career_levels', 'career_levels.id', '=', 'users.career_level_id')
          ->where('users.id', '=', $userid)
          ->first();

      if ($request->isMethod('post')) {
        $userid = Session::get('id');

        if ($request->filled('project_name', 'project_client', 'project_description')) {
            $projectNames = $request->input('project_name');
            $projectClients = $request->input('project_client');
            $projectDescriptions = $request->input('project_description');

            foreach ($projectNames as $key => $projectName) {
                DB::table('candidate_project')->insert([
                    'project_name'        => $projectName,
                    'project_client'      => $projectClients[$key],
                    'project_description' => $projectDescriptions[$key],
                    'user_id'             => $userid
                ]);
            }
        }

    }

    if ($request->filled('company_name') && is_array($request->company_name)) {
        $experiences = [];

        foreach ($request->company_name as $key => $company_name) {
            $experiences[] = [
                'company_name' => $company_name,
                'to_date' => $request->to_date[$key],
                'end_date' => $request->end_date[$key],
                'role' => $request->role[$key],
                'package' => $request->package[$key],
                'user_id' => $userid
            ];
        }

        DB::table('candidate_experience')->insert($experiences);
    }

    if ($request->filled('college_name') && is_array($request->college_name)) {
        $educations = [];

        foreach ($request->college_name as $key => $college_name) {
            $educations[] = [
                'college_name' => $college_name,
                'year_of_passout' => $request->year_of_passout[$key],
                'university' => $request->university[$key],
                'grade' => $request->grade[$key],
                'user_id' => $userid
            ];
        }

        DB::table('candidate_education')->insert($educations);
    }

    if ($request->filled('primary_skill') && is_array($request->primary_skill)) {
        $skills = [];

        foreach ($request->primary_skill as $key => $primary_skill) {
            $skills[] = [
                'primary_skill' => $primary_skill,
                'secondary_skill' => $request->secondary_skill[$key],
                'user_id' => $userid
            ];
        }

        DB::table('candidate_skill')->insert($skills);
    }

    if ($request->filled('language') && is_array($request->language)) {
        $languages = [];

        foreach ($request->language as $key => $language) {
            $languages[] = [
                'language' => $language,
                'language_level' => $request->language_level[$key],
                'user_id' => $userid
            ];
        }

        DB::table('candidate_language')->insert($languages);
    }


      return view('candidate/manage_resume', compact('view_puplic_profile', 'gender', 'candidateprofile', 'marital_statuses', 'managecountries', 'job_experiences', 'career_levels', 'industries', 'functional_areas', 'getnationality'));
  }

  return view('empty_view');
}

public function upload_cv(Request $request) {
  $request->validate([
      'cv_file' => 'required|mimes:pdf|max:2048', // PDF file, maximum size 2MB
  ]);

  $userId = Session::get('id');

  if ($request->hasFile('cv_file')) {
      $file = $request->file('cv_file');

      $fileName = $userId . '_cv.' . $file->getClientOriginalExtension();

      $file->move(public_path('uploads/cv'), $fileName);

      DB::table('candidate_cv')->insert([
          'user_id' => $userId,
          'cv'      => $fileName,
      ]);

      return redirect('manage_resume')->with('success', 'CV uploaded successfully.');
  } else {
      return redirect('manage_resume')->back()->with('error', 'No file uploaded.');
  }
}




  public function  my_followings(){
        return view( 'candidate/my_followings');
  }
  public function  my_job_alerts(){
        return view( 'candidate/my_job_alerts');
  }
  public function  my_favourite_jobs(){
    $userid = Session::get('id');
    $fav = DB::table('jobs')->select('jobs.*','favourites_job.job_id', 'states.state_name', 'companies.c_name', 'cities.city')
    ->join('favourites_job','favourites_job.job_id' , '=' ,'jobs.id')
    ->join('companies', 'companies.id','=','jobs.company_id')
        ->join('states','states.id','=','jobs.state_id')
        ->join('cities','cities.id','=' ,'jobs.city_id')
    ->where('favourites_job.user_id', '=', $userid)
    ->get();

    //print_r($fav);
    // echo($FavoritesJobs);
    //die;

        return view( 'candidate/my_favourite_jobs', compact('fav'));
  }
  public function view_details($id){
    // $jobs1 = DB::table('jobs')->where('id', '=', $id)->get();
     $profile1 = DB::table('jobs')->select('jobs.*', 'companies.c_name','job_experiences.job_experience','degree_levels.degree_level','job_types.job_type','functional_areas.functional_area','career_levels.career_level')
     ->join('companies','companies.id','=','jobs.company_id')
     ->join('job_experiences','job_experiences.id','=','jobs.job_experience_id')
     ->join('degree_levels','degree_levels.id','=','jobs.degree_level_id')
     ->join('job_types','job_types.id','=','jobs.job_type_id')
     ->join('functional_areas','functional_areas.id','=','jobs.functional_area_id')
     ->join('career_levels','career_levels.id','=','jobs.career_level_id')->where('jobs.id', '=', $id)->orderBy('jobs.id', 'Asc')->first();
     // echo($jobs1);die;
    //dd($profile1);

     return view( 'candidate/view_details',compact('id','profile1'));
   }
   public function delete_fav_job( $id ){
    $userid = Session::get('id');

    $delete_fav_job = DB::table('jobs')->where( 'id', $id )->delete();
   return redirect()->route('my_favourite_jobs')->withMessage('Delete Jobs Successfully Deleted !');
}
  public function  my_job_application(){
        return view( 'candidate/my_job_application');
  }
  public function  my_mesages(){
        return view( 'candidate/my_mesages');
  }
  public function  view_public_profile(){
    $userid = Session::get('id');
    $view_puplic_profile = DB::table('users')->select('users.*','cities.city','states.state_name','countries.country','marital_statuses.marital_status', 'job_experiences.job_experience','genders.gender','career_levels.career_level')
    ->join('states','states.id','=','users.state_id')
    ->join('cities','cities.id','=','users.city_id')
    ->join('countries','countries.id','=','users.country_id')
    ->join('marital_statuses','marital_statuses.id','=','users.marital_status_id')
    ->join('job_experiences','job_experiences.id','=','users.job_experience_id')
    ->join('genders','genders.id','=','users.gender_id')
    ->join('career_levels','career_levels.id','=','users.career_level_id')
    ->where('users.id', '=', $userid)
    ->first();

    // print_r($view_puplic_profile);
    // //  echo($userid);
    // die;
        return view( 'candidate/view_public_profile',compact('view_puplic_profile'));
  }
//   public function  print_resume(){
//     $userid = Session::get('id');
//     $printresume = DB::table('users')->select('users.*', 'cities.city')->join('cities','cities.id','=','users.city_id')->where('users.id', '=', $userid)->first();
//         return view( 'candidate/print_resume', compact('printresume'));
//   }
public function  print_resume(){


    $userid = Session::get('id');
    $printresume = DB::table('users')->select('users.*', 'states.state_name', 'cities.city','countries.country','genders.gender','marital_statuses.marital_status', 'job_experiences.job_experience','career_levels.career_level')
    ->join('countries','countries.id','=','users.country_id')
    ->join('cities','cities.id','=','users.city_id')
    ->join('states','states.id','=','users.state_id')
    ->join('marital_statuses','marital_statuses.id','=','users.marital_status_id')
    ->join('job_experiences','job_experiences.id','=','users.job_experience_id')
    ->join('genders','genders.id','=','users.gender_id')
    ->join('career_levels','career_levels.id','=','users.career_level_id')
    ->where('users.id', '=', $userid)->first();

    // print_r($printresume);
    // die;
        return view( 'candidate/print_resume', compact('printresume'));
  }
  public function  basicdetialscandidate(){
    $userid = Session::get('id');
    $candidateprofile = DB::table('users')->select('users.*', 'cities.city', 'states.state_name')
    ->join('states','states.id','=','users.state_id')
    ->join('cities','cities.id','=','users.city_id')
    ->where('users.id', '=', $userid)->first();

    // print_r($userid);
    // die;

        return view( 'candidate/basic_detials_candidate', compact('candidateprofile'));
  }


  public function add_to_following(Request $request){
    $userid = Session::get('id');
    $following = DB::table('companies')->where('id' , '=' , $userid)->insert([
      'company_follwers_id'=>$userid,

    ]);
    return redirect('jobs')->with('success','Successfully Following...');
  }

 }
