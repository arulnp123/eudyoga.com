<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\User;

class AdminController extends Controller
{
    
   public function Admin(){
      return view( 'admin/admin_login');
  }  

  public function dashboard_admin(){
    return view( 'admin/dashboard_admin');
}  

  public function admin_register(){
    return view( 'admin/admin_register');
}
 public function states(){
     $states = DB::table('states')->orderBy('id', 'Asc')->paginate(4101);

   return view( 'admin/states', compact ('states'));
 
 }
public function addstate(Request $request)
{
    $addstates = DB::table('states')->insert([
        'state_name' => $request->state_name,
        'status' => 'Active'
    ]);
    return redirect()->back()->with('success', 'Add states Successfully ... !');
} 
public function updatestate(Request $request)
{
    DB::table('states')->where('id',$request->state_id)->update([
        'state_name' => $request->state,
        'status' => $request->status,
    ]);
    return redirect()->back()->with('success', 'update states  Successfully ... !');
}

    public function deletestate($id)
    {
        $deleteimage = DB::table('states')->where('id', $id)->delete();
    	return redirect()->back()->with('success', 'delete states Successfully ... !');
    }
//cities
 public function cities(){
     $cities = DB::table('cities')->orderBy('id', 'Asc')->paginate(48583);


  return view( 'admin/cities', compact ('cities'));
 } 
 
public function addcity(Request $request)
{
    DB::table('cities')->insert([
        'state_id' => $request->state_id,
        'city' => $request->city,
        'status' => 'Active'
    ]);
    return redirect()->back()->with('success', 'Add cities Successfully ... !');
} 

public function updatecity(Request $request)
{
    DB::table('cities')->where('id',$request->id)->update([
        'city' => $request->city,
        'status' => $request->status,
    ]);
    return redirect()->back()->with('success', 'update cities Successfully ... !');
}


    public function deletecity($id)
    {
        $deleteimage = DB::table('cities')->where('id', $id)->delete();
    	return redirect()->back()->with('success', 'delete cities Successfully ... !');
    }

public function checkadminlogin(Request $request){
    $message = "";
    $email = trim( $request->email );
    $password = trim( $request->password );
    $sql = "select * from user_profile where email='$email'";
    $result = DB::select(  $sql ) ;
    $hash = '';
    if ( count( $result ) > 0 ) {
      $hash = $result[ 0 ]->password;
      if ( Hash::check( $password, $hash ) ) {
        if ( count( $result ) > 0 ) {
          Session::put( 'id', $result[ 0 ]->id );

          return redirect( '/dashboard_admin' )->with( 'message', $message );
        } else {
          $message = 'Login Failed';
          return redirect( '/admin' )->with( 'message', $message );
        }
      } else {
        $message = 'Incorrect Password';
        return redirect( '/admin' )->with( 'message', $message );
      }
    }else{
      $message = 'Email Not Found';
      return redirect( '/admin' )->with( 'message', $message );
    }
  }
//admin users
public function list_admin_users(){
    $admins = DB::table('admins')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_admin_users', compact( 'admins' ));
  
} 

public function view_admin_users($id){
    $view_admin_users = DB::table('admins')->where('id', '=', $id)->get();
    return view('admin/view_admin_users', compact( 'view_admin_users' ));
} 

public function edit_admin_users($id){  
    $edit_admin_users = DB::table('admins')->where('id', '=', $id)->get();
    $get_admin_users = DB::table('admins')->get();
    return view( 'admin/edit_admin_users', compact('edit_admin_users','get_admin_users'));
}

public function delete_admin_users( $id ){  
    $delete_admin_users = DB::table('admins')->where( 'id', $id )->delete();    
   return redirect()->route('list_admin_users')->withMessage('Delete admin users Successfully Deleted !');
} 
public function update_admin_users(Request $request){
    $get_admin_users = DB::table('admins')->where('id', $request->id)->update([
        'name' => $request -> name,
        'email'=> $request -> email,
        'role_id'=> $request -> role_id,
       
    ]);    
    return redirect()->route('list_admin_users')->withMessage('Admin Users Successfully updated...!');
} 
public function add_admin_users(){
    $admins = DB::table('admins')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_admin_users',compact('admins'));
} 
public function add_admin_user(Request $request) {
    $add_admin_user = DB::table( 'admins' )->insert( [
        'name' => $request -> name,
        'email'=> $request -> email,
        'role_id'=> $request -> role_id,
    ] );
   return redirect()->route('list_admin_users')->withMessage('Admin Users Successfully Added !');
    }
public function save_admin_user(Request $request){
        $get_admin_user = DB::table('admins')->insert([
            'name' => $request -> name,
            'email'=> $request -> email,
            'role_id'=> $request -> role_id,  
        ]);    
        return redirect()->route('list_admin_users')->withMessage('Admin Users Successfully Added...!');
    }




public function companyApproval(){
    return view( 'admin/companyApproval');
}  

public function admin_profile(){
    return view( 'admin/admin_profile');
}  

public function view_companies(){
    return view( 'admin/view_companies');
}  

public function dashboard_post_job(){
    return view( 'admin/dashboard_post_job');
}  

public function admin_manage_job(){
    return view( 'admin/admin_manage_job');
}  

public function admin_job_lists(){
    return view( 'admin/admin_job_lists');
}  

public function dashboard_applicants(){
    return view( 'admin/dashboard_applicants');
}  

public function dashboard_category(){
    return view( 'admin/dashboard_category');

}  

public function dashboard_industries(){
    return view( 'admin/dashboard_industries');
}  

public function dashboard_education(){
    return view( 'admin/dashboard_education');
}  

public function job_location(){
  return view( 'admin/job_location');
}  

public function dashboard_packages(){
    return view( 'admin/dashboard_packages');
}

public function dashboard_messages(){
    return view( 'admin/dashboard_messages');
}

public function dashboard_change_password(){
    return view( 'admin/dashboard_change_password');
}  

public function dashboard_view_profile(){
    return view( 'admin/dashboard_view_profile');
}  

public function create_admin_user(){
    return view( 'admin/create_admin_user');
}  
public function saveadmin(Request $request) {
    $addadmin = DB::table( 'user_profile' )->insert( [
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'password' => bcrypt($request->password),
        'role'=>$request->role,
    ] );
    // dd($addadmin);
    return redirect( '/create_admin_user');
}  
public function list_jobs(){

    $jobs = DB::table('jobs')->select('jobs.*','companies.c_name','cities.city')
    ->Join('companies', 'companies.id', '=', 'jobs.id')
    ->Join('cities', 'cities.id', '=', 'jobs.id')
    // ->Join('job_skills', 'job_skills.id', '=', 'jobs.id')
    ->orderBy('jobs.id','Asc')->get();
    // dd($jobs);
    // $jobs = DB::table('jobs')->orderBy( 'id', 'Asc' )->get();
    return view('admin/list_jobs', compact( 'jobs' ));
}  

public function add_jobs(){
    $getcompanies = DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $jobtitles = DB::table('job_titles')->orderBy( 'id', 'Asc' )->get();
    $getstate = DB::table('states')->orderBy( 'id', 'Asc' )->get();
    $jobskills = DB::table('job_skills')->orderBy( 'id', 'Asc' )->get();
    $getcountry = DB::table('countries')->orderBy( 'id', 'Asc' )->get();
    $getcity = DB::table('cities')->orderBy( 'id', 'Asc' )->get();
    $careerlevels = DB::table('career_levels')->orderBy( 'id', 'Asc' )->get();
    $salaryperiods = DB::table('salary_periods')->orderBy( 'id', 'Asc' )->get();
    $functionalareas = DB::table('functional_areas')->orderBy( 'id', 'Asc' )->get();
    $jobtypes = DB::table('job_types')->orderBy( 'id', 'Asc' )->get();
    $jobshifts = DB::table('job_shifts')->orderBy( 'id', 'Asc' )->get();
    $roles = DB::table('roles')->orderBy( 'id', 'Asc' )->get();
    $genders = DB::table('genders')->orderBy( 'id', 'Asc' )->get();
    $degreelevels = DB::table('degree_levels')->orderBy( 'id', 'Asc' )->get();
    $jobexperiences = DB::table('job_experiences')->orderBy( 'id', 'Asc' )->get();
    return view( 'admin/add_jobs',compact('getcompanies',
    'getstate' ,
    'jobtitles',
    'getcountry',
    'jobskills',
    'getcity' ,
    'careerlevels',
    'salaryperiods',
    'functionalareas',
    'jobtypes' ,
    'jobshifts',
    'roles',
    'genders',
    'degreelevels',
    'jobexperiences'));
}  

public function addjobss(Request $request) {
    $addjobss = DB::table( 'jobs' )->insert( [
        'company_id'=>$request->company_id,
        'title'=>$request->job_title,
        'description'=>$request->description,
        'benefits'=>$request->benefits,
        'job_skill_id'=>$request->job_skills,
        'country_id'=>$request->country_id,
        'state_id'=>$request->state_id,
        'city_id'=>$request->city_id,
        'career_level_id'=>$request->career_level_id,
        'salary_from'=>$request->salary_from,
        'salary_to'=>$request->salary_to,
        'functional_area_id'=>$request->functional_area_id,
        'job_type_id'=>$request->job_type_id,
        'job_shift_id'=>$request->job_shift_id,
        'num_of_positions'=>$request->num_of_positions,
        'gender_id'=>$request->gender_id,
        'expiry_date'=>date('Y-m-d'),
        'degree_level_id'=>$request->degree_level_id,
        'job_experience_id'=>$request->job_experience_id,
       
    ] );
    
   
   return redirect()->route('list_jobs')->withMessage('job Successfully Added !');

}
public function edit_jobs($id){  
    $edit_jobs = DB::table('jobs')->where('id', '=', $id)->get();
    return view( 'admin/edit_jobs', compact('edit_jobs'));   
}
public function update_jobs(Request $request){
    $update_jobs = DB::table('jobs')->where('id', $request->id)->update([
        'company_id'=>$request->company_id,
        'title'=>$request->title,
        'description'=>$request->description,
        'benefits'=>$request->benefits,
        'job_skills'=>$request->job_skills,
        'country_id'=>$request->country_id,
        'state_id'=>$request->state_name,
        'city_id'=>$request->city_id,
        'career_level_id'=>$request->career_level_id,
        'salary_from'=>$request->salary_from,
        'salary_to'=>$request->salary_to,
        'functional_area_id'=>$request->functional_area_id,
        'job_type_id'=>$request->job_type_id,
        'job_shift_id'=>$request->job_shift_id,
        'num_of_positions'=>$request->num_of_positions,
        'gender_id'=>$request->gender_id,
        'expiry_date'=>date('Y-m-d'),
        'degree_level_id'=>$request->degree_level_id,
        'job_experience_id'=>$request->job_experience_id,
   ]);
   return redirect()->route('list_jobs')->withMessage('job Successfully updated !');
} 
public function view_jobs($id){
   
    $view_jobs = DB::table('jobs')->select('jobs.*','companies.c_name','cities.city','countries.country')
    ->Join('companies', 'companies.id', '=', 'jobs.id')
    ->Join('cities', 'cities.id', '=', 'jobs.id')
    ->Join('countries', 'countries.id', '=', 'jobs.id')
    ->orderBy('jobs.id','Asc')->where('jobs.id', '=', $id)->get();
    // dd($view_jobs);
    return view('admin/view_jobs', compact( 'view_jobs'));
} 

public function delete_jobs( $id ){  
    $delete_jobs = DB::table('jobs')->where( 'id', $id )->delete();    
   return redirect()->route('list_jobs')->withMessage('job Successfully Deleted !');
} 
public function employer_add(){
    $companies=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $email=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $password=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $c_name=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $industry_id=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $ownership_type_id=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $description=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $location=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $map=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $no_of_offices=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $website=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $no_of_employees=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $established_in=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $fax=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $phone=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $facebook=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $twitter=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $linkedin=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $google_plus=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $pinterest=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $country_id=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $state_id=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $city_id=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $package_id=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $package_start_date=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    $package_end_date=DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    return view( 'admin/employer_add',compact('companies',
    'email',
    'password',
    'c_name',
    'industry_id',
    'ownership_type_id',
    'description',
    'location','map',
    'no_of_offices','website','no_of_employees','established_in','fax','phone','facebook','twitter','linkedin','google_plus',
    'pinterest','country_id','state_id','city_id','package_id','package_start_date','package_end_date'

));
}  



public function employer_list(){
    $employer_list = DB::table('companies')->orderBy( 'id', 'Asc' )->get();
    return view('admin/employer_list', compact( 'employer_list' ));
}  


public function saveemployer(Request $request) {
    $addemployers = DB::table( 'companies' )->insert( [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'c_name'=>$request->c_name,
        'industry_id'=>$request->industry_id,
        'ownership_type_id'=>$request->ownership_type_id,
        'description'=>$request->description,
        'location'=>$request->location,
        'map'=>$request->map,
        'no_of_offices'=>$request->no_of_offices,
        'website'=>$request->website,
        'no_of_employees'=>$request->no_of_employees,
        'established_in'=>$request->established_in,
        'fax'=>$request->fax,
        'phone'=>$request->phone,
        'facebook'=>$request->facebook,
        'twitter'=>$request->twitter,
        'linkedin'=>$request->linkedin,
        'google_plus'=>$request->google_plus,  
        'pinterest'=>$request->pinterest,
        'country_id'=>$request->country_id,
        'state_id'=>$request->state_id,
        'city_id'=>$request->city_id,
        'package_id'=>$request->package_id,
        'package_start_date'=>$request->package_start_date,
        'package_end_date'=>$request->package_end_date,
  
    ] );
    // echo($addemployers);
    // die;
//    dd($addemployers);
    return redirect( '/employer_add');
} 
public function edit_employer($id){  
    $edit_employer = DB::table('companies')->where('id', '=', $id)->first();
    return view( 'admin/edit_employer', compact('edit_employer'));   
} 
public function update_employer(Request $request){
    $update_jobs = DB::table('companies')->where('id', $request->id)->update( [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'c_name'=>$request->c_name,
        'industry_id'=>$request->industry_id,
        'ownership_type_id'=>$request->ownership_type_id,
        'description'=>$request->description,
        'location'=>$request->location,
        'map'=>$request->map,
        'no_of_offices'=>$request->no_of_offices,
        'website'=>$request->website,
        'no_of_employees'=>$request->no_of_employees,
        'established_in'=>$request->established_in,
        'fax'=>$request->fax,
        'phone'=>$request->phone,
        'facebook'=>$request->facebook,
        'twitter'=>$request->twitter,
        'linkedin'=>$request->linkedin,
        'google_plus'=>$request->google_plus,  
        'pinterest'=>$request->pinterest,
        'country_id'=>$request->country_id,
        'state_id'=>$request->state_id,
        'city_id'=>$request->city_id,
        'package_id'=>$request->package_id,
        'package_start_date'=>$request->package_start_date,
        'package_end_date'=>$request->package_end_date,
  
    ] );
    // dd($request->all());die;
        return redirect()->route('employer_list')->withMessage('employer Successfully updated !');
} 
public function view_employer($id){
    $view_employer = DB::table('companies')->where('id', '=', $id)->get();
    return view('admin/view_employer', compact( 'view_employer' ));
} 
public function delete_employer( $id ){  
    $delete_employer = DB::table('companies')->where( 'id', $id )->delete();    
   return redirect()->route('employer_list')->withMessage('job Successfully Deleted !');
} 

public function employer_payment_history(){
    return view( 'admin/employer_payment_history');
}  

// CANDIDATE

public function candidate_list(){
    $candidate_list = DB::table('users')->orderBy( 'id', 'Desc' )->get();
    return view('admin/candidate_list', compact( 'candidate_list' ));
}  

public function candidate_add(){
    $get_users = DB::table('users')->orderBy( 'id', 'Desc' )->get();
    $get_marital_statuses = DB::table('marital_statuses')->orderBy( 'id', 'Desc' )->get();
    $getcountry = DB::table('countries')->orderBy( 'id', 'Desc' )->get();
    $getcity = DB::table('cities')->orderBy( 'id', 'Desc' )->get();
    $getstate = DB::table('states')->orderBy( 'id', 'Desc' )->get();
    $getjob_experiences = DB::table('job_experiences')->orderBy( 'id', 'Desc' )->get();
    $getindustries= DB::table('industries')->orderBy( 'id', 'Desc' )->get();
    $getfunctionalareas = DB::table('functional_areas')->orderBy( 'id', 'Desc' )->get();
    $getpackages = DB::table('packages')->orderBy( 'id', 'Desc' )->get();

    
    return view( 'admin/candidate_add',compact('get_users','get_marital_statuses','getcountry','getcity','getstate','getjob_experiences' ,'getindustries','getfunctionalareas','getpackages'));
}   



public function savecandidate(Request $request) {
    $addcandidate = DB::table( 'users' )->insert( [
                'name'=>$request->name,
                'email'=>$request->email,
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
                'mobile_num'=>$request->mobile_num,
                'phone'=>$request->phone,
                'street_address'=>$request->street_address,
                'job_experience_id'=>$request->job_experience_id,
                'industry_id'=>$request->industry_id,
                'functional_area_id'=>$request->functional_area_id,
                'current_salary'=>$request->current_salary,  
                'expected_salary'=>$request->expected_salary,
                'salary_currency'=>$request->salary_currency,
                'package_id'=>$request->package_id 	,
                'package_start_date'=>$request->package_start_date,
                'package_end_date'=>$request->package_end_date,
    ] );
    // echo($addemployers);
    // die;
//    dd($addemployers);
return redirect()->route('candidate_list')->withMessage('Candidate Successfully Added !');

}  

public function update_candidate(Request $request){
    $update_candidate = DB::table('users')->where('id', $request->id)->update([
        'name'=>$request->name,
         'email'=>$request->email,
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
         'mobile_num'=>$request->mobile_num,
         'phone'=>$request->phone,
         'street_address'=>$request->street_address,
         'job_experience_id'=>$request->job_experience_id,
         'industry_id'=>$request->industry_id,
         'functional_area_id'=>$request->functional_area_id,
         'current_salary'=>$request->current_salary,  
         'expected_salary'=>$request->expected_salary,
         'salary_currency'=>$request->salary_currency,
         'package_id'=>$request->package_id 	,
         'package_start_date'=>$request->package_start_date,
         'package_end_date'=>$request->package_end_date,
   ]);
   return redirect()->route('candidate_list')->withMessage('Candidate Successfully updated !');
}

public function view_candidate($id){
    $view_candidate = DB::table('users')->where('id', '=', $id)->first();
    return view('admin/view_candidate', compact( 'view_candidate' ));
} 

public function edit_candidate($id){  
    $edit_candidate = DB::table('users')->where('id', '=', $id)->first();
    return view( 'admin/edit_candidate', compact('edit_candidate'));   
}

public function delete_candidate( $id ){  
    $delete_candidate = DB::table('users')->where( 'id', $id )->delete();    
   return redirect()->route('candidate_list')->withMessage('Delete Candidate Successfully Deleted !');
} 

// CMS

public function list_cms(){
    $get_cms = DB::table('cms')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_cms', compact( 'get_cms' ));
} 
public function add_cms(){
    $get_cms = Db::table('cms')->orderby('id' , 'Desc')->get();
    return view( 'admin/add_cms',compact('get_cms'));
}
public function save_cms(Request $request){
    $get_cms = Db::table('cms')->insert([
        'page_slug' => $request->page_slug,
        'show_in_top_menu' =>$request->show_in_top_menu,
        'show_in_footer_menu'=>$request->show_in_footer_menu,

    ]);
    return redirect()->route('list_cms')->withMessage('C.M.S successfully Added...!'); 
}
public function edit_cms($id){
    $get_cms = Db::table('cms')->where('id' , '=' , $id)->get();
    $get_cms_detail = Db::table('cms')->get();
    return view('admin/edit_cms',compact('get_cms','get_cms_detail'));
}
public function update_cms(Request $request){
    $get_update_cms = DB::table('cms')->where('id',$request->id)->update([
        'page_slug' => $request->page_slug,
        'show_in_top_menu' =>$request->show_in_top_menu,
        'show_in_footer_menu'=>$request->show_in_footer_menu,
    ]);
    return redirect()->route('list_cms')->withMessage('C.M.S. Successfully Updated');
    
}

public function view_cms($id){
    $get_cms = Db::table('cms')->where('id' ,'=' , $id )->get();
    return view('admin/view_cms' ,compact('get_cms'));
}
public function delete_cms($id){
    $get_cms = DB::table('cms')->where('id' , '=' , $id)->delete();
    return redirect()->route('list_cms')->withMessage('C.M.S successfully deleted');
}
public function add_translated_pages(){
    return view( 'admin/add_translated_pages');
} 
public function list_translated_pages(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_translated_pages', compact( 'companies' ));
} 



// BLOGS
public function add_blogs(){
    
    return view( 'admin/add_blogs');
} 
public function list_blogs(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_blogs', compact( 'companies' ));
} 
public function categories(){
    return view( 'admin/categories');
} 


public function advertisement(){
    return view( 'admin/advertisement');
}  




public function list_seo(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_seo', compact( 'companies' ));
}


//Countries
public function list_countries(){
    $countries = DB::table('countries')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_countries', compact( 'countries' ));
}
public function add_country(){
    $add_country = DB::table('countries')->orderBy('id','Desc')->get();
    $get_lang_list = DB::table('countries')->get();
    $get_country_list = DB::table('countries')->get();
    $get_nationality_list = DB::table('countries')->get();
    return view( 'admin/add_country',compact('add_country','get_lang_list','get_country_list','get_nationality_list'));
} 
public function view_country($id){
    $view_country = DB::table('countries')->where('id', '=', $id)->get();
    return view('admin/view_country', compact( 'view_country' ));
}
public function save_country(Request $request) {
    $add_country = DB::table( 'countries' )->insert( [
            'lang'=>$request->lang,
            'country'=>$request->country,
            'nationality'=>$request->nationality,
    ] );
   return redirect()->route('list_countries')->withMessage('country Successfully Added !');
}
public function edit_country($id){  
    $edit_country = DB::table('countries')->where('id', '=', $id)->get();
    $get_lang_list = DB::table('countries')->get();
    $get_country_list = DB::table('countries')->get();
    $get_nationality_list = DB::table('countries')->get();
    return view( 'admin/edit_country', compact('edit_country','get_lang_list','get_country_list','get_nationality_list'));   
}
public function delete_country( $id ){  
    $delete_country = DB::table('countries')->where( 'id', $id )->delete();    
   return redirect()->route('list_countries')->withMessage('country Successfully Deleted !');
}
public function update_country(Request $request){
    $update_country = DB::table('countries')->where('id', $request->id)->update([
        'lang'=>$request->lang,
        'country'=>$request->country,
        'nationality'=>$request->nationality,
   ]);
   return redirect()->route('list_countries')->withMessage('country Successfully updated !');
}



// FAQs
public function list_faqs(){
    $faqs = DB::table('faqs')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_faqs', compact( 'faqs' ));
}
public function add_faqs(){
    $add_faqs = DB::table('faqs')->orderBy( 'id', 'Desc' )->get();
    $get_lang_list = DB::table('faqs')->get();
    $get_faq_question_list = DB::table('faqs')->get();
    $get_faq_answer_list = DB::table('faqs')->get();
    return view( 'admin/add_faqs',compact('add_faqs','get_lang_list','get_faq_question_list','get_faq_answer_list'));
}
public function save_faqs(Request $request) {
    $add_faqs = DB::table( 'faqs' )->insert( [
            'lang'=>$request->lang,
            'faq_question'=>$request->faq_question,
            'faq_answer'=>$request->faq_answer,
    ] );
   return redirect()->route('list_faqs')->withMessage('faqs Successfully Added !');
} 
public function sort_faqs(){
    $sort_faqs = DB::table('faqs')->orderBy( 'id', 'Desc' )->get();
    $get_faq_question_list = DB::table('faqs')->get();
        return view( 'admin/sort_faqs',compact('sort_faqs','get_faq_question_list'));
}
public function view_faqs($id){
    $view_faqs = DB::table('faqs')->where('id', '=', $id)->get();
    return view('admin/view_faqs', compact( 'view_faqs' ));
}
public function edit_faqs($id){  
    $edit_faqs = DB::table('faqs')->where('id', '=', $id)->get();
    $get_lang_list = DB::table('faqs')->get();
    $get_faq_question_list = DB::table('faqs')->get();
    $get_faq_answer_list = DB::table('faqs')->get();

    return view( 'admin/edit_faqs', compact('edit_faqs','get_lang_list','get_faq_question_list','get_faq_answer_list'));   
}
public function delete_faqs( $id ){  
    $delete_faqs = DB::table('faqs')->where( 'id', $id )->delete();    
   return redirect()->route('list_faqs')->withMessage('faqs Successfully Deleted !');
}
public function update_faqs(Request $request){
    $update_faqs = DB::table('faqs')->where('id', $request->id)->update([
        'lang'=>$request->lang,
        'faq_question'=>$request->faq_question,
        'faq_answer'=>$request->faq_answer,
   ]);
   return redirect()->route('list_faqs')->withMessage('faqs Successfully updated !');
}      


//Video_language
public function list_video_language(){
    $videos = DB::table('videos')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_video_language', compact( 'videos' ));
} 
public function add_video_language(){
    $add_video_language = DB::table('videos')->orderBy( 'id', 'Desc' )->get();
    $get_video_title_list = DB::table('videos')->get();
    $get_video_text_list = DB::table('videos')->get();
    $get_video_link_list = DB::table('videos')->get();
    $get_lang_list = DB::table('videos')->get();
    return view( 'admin/add_video_language',compact('add_video_language','get_video_title_list','get_video_text_list','get_video_link_list','get_lang_list'));
}
public function save_video_language(Request $request) {
    $add_video_language = DB::table( 'videos' )->insert( [
            'lang'=>$request->lang,
            'video_title'=>$request->video_title,
            'video_text'=>$request->video_text,
            'video_link'=>$request->video_link,
            'is_default'=>$request->is_default,
            'is_active'=>$request->is_active,

    ] );
   return redirect()->route('list_video_language')->withMessage('video language Successfully Added !');
}
public function view_video_language($id){
    $view_video_language = DB::table('videos')->where('id', '=', $id)->get();
    return view('admin/view_video_language', compact( 'view_video_language' ));
}
public function edit_video_language($id){  
    $edit_video_language = DB::table('videos')->where('id', '=', $id)->get();
    $get_video_title_list = DB::table('videos')->get();
    $get_video_text_list = DB::table('videos')->get();
    $get_video_link_list = DB::table('videos')->get();
    $get_lang_list = DB::table('videos')->get();

    return view( 'admin/edit_video_language', compact('edit_video_language','get_video_title_list','get_video_text_list','get_video_link_list','get_lang_list'));   
}
public function delete_video_language( $id ){  
    $delete_video_language = DB::table('videos')->where( 'id', $id )->delete();    
   return redirect()->route('list_video_language')->withMessage('video language Successfully Deleted !');
}
public function update_video_language(Request $request){
    $update_video_language = DB::table('videos')->where('id', $request->id)->update([
        'lang'=>$request->lang,
            'video_title'=>$request->video_title,
            'video_text'=>$request->video_text,
            'video_link'=>$request->video_link,
            'is_default'=>$request->is_default,
            'is_active'=>$request->is_active,
   ]);
   return redirect()->route('list_video_language')->withMessage('video language Successfully updated !');
}    
     




//Testimonial
public function list_testimonial(){
    $testimonials = DB::table('testimonials')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_testimonial', compact( 'testimonials' ));
 
} 
public function add_testimonial(){
    $add_testimonial = DB::table('testimonials')->orderBy( 'id', 'Desc' )->get();
    $get_lang_list = DB::table('testimonials')->get();
    $get_testimonial_by_list = DB::table('testimonials')->get();
    $get_testimonial_list = DB::table('testimonials')->get();
    $get_company_list = DB::table('testimonials')->get();
    return view( 'admin/add_testimonial ',compact('add_testimonial','get_lang_list','get_testimonial_by_list','get_testimonial_list','get_company_list'));
}
public function save_testimonial(Request $request) {
    $add_slider = DB::table( 'testimonials' )->insert( [
            'lang'=>$request->lang,
            'testimonial_by'=>$request->testimonial_by,
            'testimonial'=>$request->testimonial,
            'company'=>$request->company,
            'is_default'=>$request->is_default,
            'is_active'=>$request->is_active,

    ] );
   return redirect()->route('list_testimonial')->withMessage('testimonials Successfully Added !');
}
public function sort_testimonial(){
    $sort_testimonial = DB::table('testimonials')->orderBy( 'id', 'Desc' )->get();
    $get_testimonial_list = DB::table('testimonials')->get();
        return view( 'admin/sort_testimonial',compact('sort_testimonial','get_testimonial_list'));
}  
public function view_testimonial($id){
    $view_testimonial = DB::table('testimonials')->where('id', '=', $id)->get();
    return view('admin/view_testimonial', compact( 'view_testimonial' ));
}
public function edit_testimonial($id){  
    $edit_testimonial = DB::table('testimonials')->where('id', '=', $id)->get();
    $get_lang_list = DB::table('testimonials')->get();
    $get_testimonial_by_list = DB::table('testimonials')->get();
    $get_testimonial_list = DB::table('testimonials')->get();
    $get_company_list = DB::table('testimonials')->get();

    return view( 'admin/edit_testimonial', compact('edit_testimonial','get_lang_list','get_testimonial_by_list','get_testimonial_list','get_company_list'));   
}
public function delete_testimonial( $id ){  
    $delete_testimonial = DB::table('testimonials')->where( 'id', $id )->delete();    
   return redirect()->route('list_testimonial')->withMessage('testimonials Successfully Deleted !');
}
public function update_testimonial(Request $request){
    $update_testimonial = DB::table('testimonials')->where('id', $request->id)->update([
        'lang'=>$request->lang,
        'testimonial_by'=>$request->testimonial_by,
        'testimonial'=>$request->testimonial,
        'company'=>$request->company,
        'is_default'=>$request->is_default,
        'is_active'=>$request->is_active,
   ]);
   return redirect()->route('list_testimonial')->withMessage('testimonials Successfully updated !');
}    
     






//Sliders
public function list_slider(){
    $sliders = DB::table('sliders')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_slider', compact( 'sliders' ));
}
public function add_slider(){
    $add_slider = DB::table('sliders')->orderBy( 'id', 'Desc' )->get();
    $get_lang_list = DB::table('sliders')->get();
    $get_slider_heading_list = DB::table('sliders')->get();
    $get_slider_image_list = DB::table('sliders')->get();
    $get_slider_description_list = DB::table('sliders')->get();
    $get_slider_link_list = DB::table('sliders')->get();
    $get_slider_link_text_list = DB::table('sliders')->get();
    return view( 'admin/add_slider',compact('add_slider','get_lang_list','get_slider_image_list','get_slider_heading_list','get_slider_description_list',
'get_slider_link_list','get_slider_link_text_list'));
}
public function save_Slider(Request $request) {
    $add_slider = DB::table( 'sliders' )->insert( [
            'lang'=>$request->lang,
            'slider_image'=>$request->slider_image,
            'slider_heading'=>$request->slider_heading,
            'slider_description'=>$request->slider_description,
            'slider_link'=>$request->slider_link,
            'slider_link_text'=>$request->slider_link_text,
            'is_default'=>$request->is_default,
            'is_active'=>$request->is_active,

    ] );
   return redirect()->route('list_slider')->withMessage('sliders Successfully Added !');
    }
public function sort_slider(){
    $sort_slider = DB::table('sliders')->orderBy( 'id', 'Desc' )->get();
    $get_slider_heading_list = DB::table('sliders')->get();
        return view( 'admin/sort_slider',compact('sort_slider','get_slider_heading_list'));
} 
public function view_Slider($id){
    $view_Slider = DB::table('sliders')->where('id', '=', $id)->get();
    return view('admin/view_Slider', compact( 'view_Slider' ));
}
public function edit_Slider($id){  
    $edit_Slider = DB::table('sliders')->where('id', '=', $id)->get();
    $get_lang_list = DB::table('sliders')->get();
    $get_slider_heading_list = DB::table('sliders')->get();
    $get_slider_image_list = DB::table('sliders')->get();
    $get_slider_description_list = DB::table('sliders')->get();
    $get_slider_link_list = DB::table('sliders')->get();
    $get_slider_link_text_list = DB::table('sliders')->get();

    return view( 'admin/edit_Slider', compact('edit_Slider','get_slider_heading_list','get_lang_list','get_slider_image_list','get_slider_description_list','get_slider_link_list','get_slider_link_text_list'));   
}
public function delete_Slider( $id ){  
    $delete_Slider = DB::table('sliders')->where( 'id', $id )->delete();    
   return redirect()->route('list_slider')->withMessage('sliders Successfully Deleted !');
}
public function update_Slider(Request $request){
    $update_Slider = DB::table('sliders')->where('id', $request->id)->update([
        'lang'=>$request->lang,
        'slider_image'=>$request->slider_image,
        'slider_heading'=>$request->slider_heading,
        'slider_description'=>$request->slider_description,
        'slider_link'=>$request->slider_link,
        'slider_link_text'=>$request->slider_link_text,
        'is_default'=>$request->is_default,
        'is_active'=>$request->is_active,
        
   ]);
   return redirect()->route('list_slider')->withMessage('sliders Successfully updated !');
}    
     




public function list_states(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_states', compact( 'companies' ));
} 

public function list_cities(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_cities', compact( 'companies' ));
} 







public function list_carrer(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_carrer', compact( 'companies' ));
}





//Country details
public function list_country_details(){
    $countries_details = DB::table('countries_details')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_country_details', compact( 'countries_details' ));
} 




//Languages
public function list_language(){
    $languages = DB::table('languages')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_language', compact( 'languages' ));
} 
public function add_language(){
    $add_language = DB::table('languages')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_language',compact('add_language'));
} 
public function add_languages(Request $request) {
    $add_language = DB::table( 'languages' )->insert( [
            'lang'=>$request->lang,
            'native'=>$request->native,
            'iso_code'=>$request->iso_code,
            'is_rtl'=>$request->is_rtl,
            'is_default'=>$request->is_default,

    ] );
   return redirect()->route('list_language')->withMessage('languages Successfully Added !');
    }
public function view_language($id){
        $view_language = DB::table('languages')->where('id', '=', $id)->get();
        return view('admin/view_language', compact( 'view_language' ));
    }
public function edit_language($id){  
        $edit_language = DB::table('languages')->where('id', '=', $id)->get();
        return view( 'admin/edit_language', compact('edit_language'));   
    }
public function delete_language( $id ){  
        $delete_language = DB::table('languages')->where( 'id', $id )->delete();    
       return redirect()->route('list_language')->withMessage('languages Successfully Deleted !');
    }
public function update_language(Request $request){
        $update_language = DB::table('languages')->where('id', $request->id)->update([
            'lang'=>$request->lang,
            'native'=>$request->native,
            'iso_code'=>$request->iso_code,
            'is_rtl'=>$request->is_rtl,
            'is_default'=>$request->is_default,
       ]);
       return redirect()->route('list_language')->withMessage('languages Successfully updated !');    
}



//Functional areas

public function list_functional_areas(){
    $functional_areas = DB::table('functional_areas')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_functional_areas', compact( 'functional_areas' ));
} 
public function add_functional_area(){
    $add_functional_area = DB::table('functional_areas')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_functional_area',compact('add_functional_area'));
} 
public function add_functional_areas(Request $request) {
    $add_functional_area = DB::table( 'functional_areas' )->insert( [
            'lang'=>$request->lang,
            'functional_area'=>$request->functional_area,
    ] );
   return redirect()->route('listlist_functional_areas_packages')->withMessage('Functional Areas Successfully Added !');
    }
public function view_functional_areas($id){
        $view_functional_areas = DB::table('functional_areas')->where('id', '=', $id)->get();
        return view('admin/view_functional_areas', compact( 'view_functional_areas' ));
    }
public function edit_functional_areas($id){  
        $edit_functional_areas = DB::table('functional_areas')->where('id', '=', $id)->get();
        $get_functional_areas = DB::table('functional_areas')->get();
        return view( 'admin/edit_functional_areas', compact('edit_functional_areas','get_functional_areas'));   
    }
public function delete_functional_areas( $id ){  
        $delete_functional_areas = DB::table('functional_areas')->where( 'id', $id )->delete();    
       return redirect()->route('list_functional_areas')->withMessage('Functional Areas Successfully Deleted !');
    }









//packages
public function list_packages(){
    $packages = DB::table('packages')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_packages', compact( 'packages' ));
} 
public function add_packages(){
    $add_packages = DB::table('packages')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_packages',compact('add_packages'));
} 
public function add_package(Request $request) {
    $add_packages = DB::table( 'packages' )->insert( [
        'package_title'=>$request->package_title,
            'package_price'=>$request->package_price,
            'Package_num_days'=>$request->Package_num_days,
            'Package_num_listings'=>$request->Package_num_listings
        
    ] );
    
   
   return redirect()->route('list_packages')->withMessage('packages Successfully Added !');
    }
public function view_packages($id){
        $view_packages = DB::table('packages')->where('id', '=', $id)->get();
        return view('admin/view_packages', compact( 'view_packages' ));
    }
public function edit_packages($id){  
        $edit_packages = DB::table('packages')->where('id', '=', $id)->get();
        return view( 'admin/edit_packages', compact('edit_packages'));   
    }
public function delete_packages( $id ){  
        $delete_packages = DB::table('packages')->where( 'id', $id )->delete();    
       return redirect()->route('list_packages')->withMessage('packages Successfully Deleted !');
    }



//genders
public function list_genders(){
    $genders = DB::table('genders')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_genders', compact('genders'));
} 


public function view_genders($id){
    $view_genders = DB::table('genders')->where('id', '=', $id)->get();
    return view('admin/view_genders', compact( 'view_genders' ));
}
public function edit_genders($id){  
    $edit_genders = DB::table('genders')->where('id', '=', $id)->get();
    $get_genders = DB::table('genders')->get();
    return view( 'admin/edit_genders', compact('edit_genders','get_genders'));   
} 
public function add_genders(){
    $add_genders = DB::table('genders')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_genders',compact('add_genders'));
} 
public function add_gender(Request $request) {
    $add_genders = DB::table( 'genders' )->insert( [
        'gender_id'=>$request->gender_id,
            'gender'=>$request->gender,
            'lang'=>$request->lang
        
    ] );
    
   
   return redirect()->route('list_genders')->withMessage('genders Successfully Added !');
    }

public function update_genders(Request $request){
        $update_genders = DB::table('genders')->where('id', $request->id)->update([
            'gender_id'=>$request->gender_id,
            'gender'=>$request->gender,
            'lang'=>$request->lang
            
       ]);
       return redirect()->route('list_genders')->withMessage('genders Successfully updated !');    
}
public function delete_genders( $id ){  
    $delete_genders = DB::table('genders')->where( 'id', $id )->delete();    
   return redirect()->route('list_genders')->withMessage('genders Successfully Deleted !');
}
public function sort_genders(){
    $sort_genders = DB::table('genders')->orderBy( 'id', 'Desc' )->get();
            return view( 'admin/sort_genders',compact('sort_genders'));
} 



public function list_new_types(){
    $companies = DB::table('companies')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_new_types', compact( 'companies' ));
}




//industries


//industries
public function list_industries(){
    $industries = DB::table('industries')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_industries', compact( 'industries' ));
}
public function view_industries($id){
    $view_industries = DB::table('industries')->where('id', '=', $id)->get();
    return view('admin/view_industries', compact( 'view_industries' ));
}  
public function edit_industries($id){  
    $edit_industries = DB::table('industries')->where('id', '=', $id)->get();
    $get_industries = DB::table('industries')->get();
    return view( 'admin/edit_industries', compact('edit_industries','get_industries'));   
} 
public function add_industries(){
    $add_industries = DB::table('industries')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_industries',compact('add_industries'));
} 
public function adds_industries(){
    $add_industries = DB::table( 'industries' )->insert( [
        'industry_id'=>$request->industry_id,
        'industry'=>$request->industry,
        'lang'=>$request->lang
    ] );
return redirect()->route('list_industries')->withMessage('industries Successfully Added !');
    }
public function update_industries(Request $request){
        $update_industries = DB::table('industries')->where('id', $request->id)->update([
        'industry_id'=>$request->industry_id,
        'industry'=>$request->industry,
        'lang'=>$request->lang
            
       ]);
       return redirect()->route('list_industries')->withMessage('industries Successfully updated !');    
}
public function delete_industries( $id ){  
    $delete_industries = DB::table('industries')->where( 'id', $id )->delete();    
   return redirect()->route('list_industries')->withMessage('industries Successfully Deleted !');
}
public function sort_industries(){
    $sort_industries = DB::table('industries')->orderBy( 'id', 'Desc' )->get();
            return view( 'admin/sort_industries',compact('sort_industries'));
} 






//job types
public function list_job_types(){
    $job_types = DB::table('job_types')->orderBy( 'id', 'Desc' )->get();
        return view('admin/list_job_types', compact( 'job_types' ));
}
public function view_jobtypes($id){
    $view_jobtypes = DB::table('job_types')->where('id', '=', $id)->get();
    return view('admin/view_jobtypes', compact( 'view_jobtypes' ));
}  
public function edit_jobtypes($id){  
    $edit_jobtypes = DB::table('job_types')->where('id', '=', $id)->get();
    $get_jobtypes = DB::table('job_types')->get();
    return view( 'admin/edit_jobtypes', compact('edit_jobtypes','get_jobtypes'));   
} 
public function update_jobtypes(Request $request){
    $update_jobtypes = DB::table('job_types')->where('id', $request->id)->update([
        'job_types_id'=>$request->job_types_id,
        'job_types'=>$request->jobtypes,
        'lang'=>$request->lang
        
   ]);
   return redirect()->route('list_job_types')->withMessage('job types Successfully updated !');    
    
}
public function delete_jobtypes( $id ){  
    $delete_jobtypes = DB::table('job_types')->where( 'id', $id )->delete();    
   return redirect()->route('list_job_types')->withMessage('job Successfully Deleted !');
}
public function add_jobtypes(){
    $job_types = DB::table('job_types')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_jobtypes',compact('job_types'));
} 
public function add_job_types(Request $request) {
    $add_jobs_types = DB::table( 'job_types' )->insert( [
        'job_type_id'=>$request->job_type_id,
        'job_type'=>$request->job_type,
        'lang'=>$request->lang,
        
    ] );
   return redirect()->route('list_job_types')->withMessage('job types Successfully Added !');
    }
public function save_jobtypes(Request $request) {
        $save_jobtypes = DB::table( 'job_types' )->insert( [
                    'job_type_id'=>$request->job_type_id,
                    'job_type'=>$request->job_type,
                    'lang'=>$request->lang,
                    
        ] );
    return redirect()->route('list_job_types')->withMessage('job types Successfully Added !');
        }       
public function sort_job_types(){
    $sort_jobtypes = DB::table('job_types')->orderBy( 'id', 'Desc' )->get();
            return view( 'admin/sort_jobtypes',compact('sort_jobtypes'));
} 
        















public function site_settings(){
    return view( 'admin/site_settings');
} 

 






 
public function add_state(){
    return view( 'admin/add_state');
} 
public function add_city(){
    return view( 'admin/add_city');
} 
 

 



public function add_carrer(){
    return view( 'admin/add_carrer');
} 

 



public function add_job_skill(){
    return view( 'admin/add_job_skill');
} 




// LANGUAGE LEVEL START
public function add_language_level(){
    $get_language_level = DB::table('language_levels')->orderBy( 'id', 'Desc' )->get();  
    return view( 'admin/add_language_level',compact('get_language_level'));
}
public function sort_language_level(){
    return view( 'admin/sort_language_level');
}
public function list_language_level(){
    $get_language_level = DB::table('language_levels')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_language_level', compact( 'get_language_level' ));
} 
public function save_language_level(Request $request){
    $get_language_level = DB::table('language_levels')->insert([
        'lang'            => $request -> lang,
        'language_level'  => $request -> language_level,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);    
    return redirect()->route('list_language_level')->withMessage('Language Level Successfully Added...!');
}
public function edit_language_level($id){  
    $get_language_level = DB::table('language_levels')->where('id', '=', $id)->first();
    $get_language_levels = DB::table('language_levels')->get();
    return view( 'admin/edit_language_level', compact('get_language_level','get_language_levels'));
}
public function update_language_level(Request $request){
    $get_language_level = DB::table('language_levels')->where('id', $request->id)->update([
        'lang'            => $request -> lang,
        'language_level'  => $request -> language_level,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active      
    ]);    
    return redirect()->route('list_language_level')->withMessage('Language Level Successfully updated...!');
} 
public function view_language_level($id){
    $get_language_level = DB::table('language_levels')->where('id' , '=' , $id)->get();
    return view('admin/view_language_level',compact('get_language_level'));
}
public function delete_language_level($id){
    $get_language_level = DB::table('language_levels')->where('id' , $id)->delete();
    return redirect()->route('list_language_level')->withMessage('Language Level Successfully Deleted...!');
} 

// LANGUAGE LEVEL END


// CARRER LEVEL START
public function add_carrer_level(){
    $get_career_levels = DB::table('career_levels')->orderBy( 'id', 'Desc' )->get();  
    return view( 'admin/add_carrer_level',compact('get_career_levels'));
}
public function sort_carrer_level(){
    $get_career_levels = DB::table('career_levels')->orderBy( 'id', 'Desc' )->get();  
    return view( 'admin/sort_carrer_level',compact('get_career_levels'));
}
public function list_carrer_level(){
    $get_career_levels = DB::table('career_levels')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_carrer_level', compact( 'get_career_levels' ));
} 
public function save_carrer_level(Request $request){
    $get_career_levels = DB::table('career_levels')->insert([
        'lang'            => $request -> lang,
        'career_level'    => $request -> career_level,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);    
    return redirect()->route('list_carrer_level')->withMessage('Carrer Level Successfully Added...!');
}
public function edit_carrer_level($id){  
    $get_career_levels = DB::table('career_levels')->where('id', '=', $id)->first();
    $get_career = DB::table('career_levels')->get();
    return view( 'admin/edit_carrer_level', compact('get_career_levels','get_career'));
}
public function update_carrer_level(Request $request){
    $get_career_levels = DB::table('career_levels')->where('id', $request->id)->update([
        'lang'            => $request -> lang,
        'career_level'    => $request -> career_level,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active      
    ]);    
    return redirect()->route('list_carrer_level')->withMessage('Carrer Level Successfully updated...!');
} 
public function view_carrer_level($id){
    $get_career_levels = DB::table('career_levels')->where('id' , '=' , $id)->get();
    return view('admin/view_carrer_level',compact('get_career_levels'));
}
public function delete_carrer_level($id){
    $get_career_levels = DB::table('career_levels')->where('id' , $id)->delete();
    return redirect()->route('list_carrer_level')->withMessage('Carrer Levele Successfully Deleted...!');
} 

// CARRER LEVEL END






// JOB EXPERIANCE START
public function add_job_experiance(){
    $add_job_experiance = DB::table('job_experiences')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_job_experiance',compact('add_job_experiance'));

} 
public function list_job_experiance(){
    $list_job_experiance = DB::table('job_experiences')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_job_experiance', compact( 'list_job_experiance' ));
} 
public function sort_job_experiance(){
    $sort_job_experiance = DB::table('job_experiences')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/sort_job_experiance', compact( 'sort_job_experiance' ));
} 
public function save_job_experiance(Request $request){
    $save_job_experiance = DB::table('job_experiences')->insert([
        'lang'            => $request -> lang,
        'job_experience'  => $request -> job_experience,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);    
    return redirect()->route('list_job_experiance')->withMessage('job Experiences Successfully Added...!');
}
public function edit_job_experiance($id){  
    $edit = DB::table('job_experiences')->where('id', '=', $id)->first();
    $get_job_experience = DB::table('job_experiences')->get();
    return view( 'admin/edit_job_experiance', compact('edit','get_job_experience'));
}
public function update_job_experiance(Request $request){
    $update_job_experiance = DB::table('job_experiences')->where('id', $request->id)->update([
        'lang'            => $request -> lang,
        'job_experiance'  => $request -> job_experiance,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active      
    ]);    
    return redirect()->route('list_job_experiance')->withMessage('job Experiences Successfully updated...!');
}   
public function view_job_experiance($id){
    $view_job_experiance = DB::table('job_experiences')->where('id' , '=' , $id)->get();
    return view('admin/view_job_experiance',compact('view_job_experiance'));
}
public function delete_job_experiance($id){
    $delete_job_experiance = DB::table('job_experiences')->where('id' , $id)->delete();
    return redirect()->route('list_job_experiance')->withMessage('job Experiences Successfully Deleted...!');
} 


// JOB EXPERIANCE START





// JOB SKILL START

public function add_job_skills(){
    $add_job_skills = DB::table('job_skills')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_job_skills',compact('add_job_skills'));
} 
public function list_job_skills(){
    $list_job_skills = DB::table('job_skills')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_job_skills', compact( 'list_job_skills' ));
} 
public function sort_job_skills(){
    $sort_job_skills = DB::table('job_skills')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/sort_job_skills',compact('sort_job_skills'));
}
public function save_job_skills(Request $request){
    $save_job_skills = DB::table('job_skills')->insert([
        'lang'            => $request -> lang,
        'job_skill'       => $request -> job_skill,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);    
    return redirect()->route('list_job_skills')->withMessage('Job Skill Successfully Added...!');
}
public function edit_job_skills($id){  
    $edit_job_skills = DB::table('job_skills')->where('id', '=', $id)->get();
    $get_job_skills = DB::table('job_skills')->get();
    return view( 'admin/edit_job_skills', compact('edit_job_skills','get_job_skills'));
}
 
public function update_job_skills(Request $request){
    $update_job_skills = DB::table('job_skills')->where('id', $request->id)->update([
        'lang'            => $request -> lang,
        'job_skill'      => $request -> job_skill,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active      
    ]);    
    return redirect()->route('list_job_skills')->withMessage('Job Skill Successfully updated...!');
}   
public function view_job_skills($id){
    $view_job_skills = DB::table('job_skills')->where('id' , '=' , $id)->get();
    return view('admin/view_job_skills',compact('view_job_skills'));
}
public function delete_job_skills($id){
    $delete_job_skills = DB::table('job_skills')->where('id' , $id)->delete();
    return redirect()->route('list_job_skills')->withMessage('Job Skill Successfully Deleted...!');
} 

// JOB SKILL END

// JOB SHIFT

public function add_jobshifts(){
    $job_shifts = DB::table('job_shifts')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_jobshifts',compact('job_shifts'));
} 
public function list_jobshifts(){
    $job_shifts = DB::table('job_shifts')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_jobshifts', compact( 'job_shifts' ));
} 
public function sort_jobshifts(){
    $sort_jobshifts = DB::table('job_shifts')->orderBy( 'id', 'Desc' )->get();
            return view( 'admin/sort_jobshifts',compact('sort_jobshifts'));
} 

public function view_jobsshifts($id){
    $view_jobsshifts = DB::table('job_shifts')->where('id', '=', $id)->get();
    return view('admin/view_jobsshifts', compact( 'view_jobsshifts' ));
} 
public function add_jobsshifts(Request $request) {
    $add_jobsshifts = DB::table( 'job_shifts' )->insert( [
        'job_shift_id'=>$request->job_shift_id,
        'job_shift'=>$request->job_shift,
        'lang'=>$request->lang,
        
    ] );
    
   
   return redirect()->route('list_jobshifts')->withMessage('job shifts Successfully Added !');
    }

public function save_jobshifts(Request $request) {
    $add_jobsshifts = DB::table( 'job_shifts' )->insert( [
                'job_shift_id'=>$request->job_shift_id,
                'job_shift'=>$request->job_shift,
                'lang'=>$request->lang,
                
    ] );
return redirect()->route('list_jobshifts')->withMessage('job shifts Successfully Added !');
    }    
public function edit_jobsshifts($id){  
    $edit_jobsshifts = DB::table('job_shifts')->where('id', '=', $id)->get();
    $get_jobsshifts = DB::table('job_shifts')->get();
    return view( 'admin/edit_jobsshifts', compact('edit_jobsshifts','get_jobsshifts'));   
} 
public function update_jobsshifts(Request $request){
    $update_jobs = DB::table('job_shifts')->where('id', $request->id)->update([
        'id'=>$request->id,
        'job_shift'=>$request->jobshift,
        'lang'=>$request->lang
        
   ]);
   return redirect()->route('list_jobshifts')->withMessage('job Successfully updated !');    
    
}
public function delete_jobsshifts( $id ){  
    $delete_jobsshifts = DB::table('job_shifts')->where( 'id', $id )->delete();    
   return redirect()->route('list_jobshifts')->withMessage('job Successfully Deleted !');
}

//ADD DEGREE LEVEL

public function add_degree_levels(){
    $get_degree_levels = DB::table('degree_levels')->orderBy( 'id','Desc' )->get();
    return view( 'admin/add_degree_levels',compact('get_degree_levels'));
} 
public function list_degree_levels(){
    $list_degree_levels = DB::table('degree_levels')->orderBy( 'id','Desc' )->get();
    return view('admin/list_degree_levels', compact( 'list_degree_levels' ));
}
public function save_degree_levels(Request $request){
    $save_degree_levels = DB::table('degree_levels')->insert([
        'lang'            => $request -> lang,
        'degree_level'    => $request -> degree_level,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);
    
    return redirect()->route('list_degree_levels')->withMessage('Degree Level Successfully Added...!');
}
public function edit_degree_levels($id){  
    $edit_degree_levels = DB::table('degree_levels')->where('id', '=', $id)->get();
    $get_degree_level = DB::table('degree_levels')->get();
    return view( 'admin/edit_degree_levels', compact('edit_degree_levels','get_degree_level'));
}
 
public function update_degree_levels(Request $request){
    $update_degree_levels = DB::table('degree_levels')->where('id', $request->id)->update([
        'lang'            => $request -> lang,
        'degree_level'    => $request -> degree_level,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active      
    ]);
    
    return redirect()->route('list_degree_levels')->withMessage('Degree level Successfully updated...!');
}   
public function view_degree_levels($id){
    $view_degree_levels = DB::table('degree_levels')->where('id' , '=' , $id)->get();
    return view('admin/view_degree_levels',compact('view_degree_levels'));
}
public function delete_degree_levels($id){
    $delte_degree_levels = DB::table('degree_levels')->where('id' , $id)->delete();
    return redirect()->route('list_degree_levels')->withMessage('Degree Level Successfully Deleted...!');
}

// DEGREE LEVEL END

// DEGREE TYPE START

public function add_degree_types(){
    $get_degree_types = DB::table('degree_types')->orderby('id','Desc')->get();
    $get_degree_levels = DB::table('degree_levels')->orderby('id','Desc')->get();
    return view( 'admin/add_degree_types',compact('get_degree_types','get_degree_levels'));
} 
public function list_degree_types(){
    $degree_types = DB::table('degree_types')->orderBy( 'id','Desc' )->get();
    return view('admin/list_degree_types', compact( 'degree_types' ));
}
public function save_degree_types(Request $request){
    $save_degree_types = DB::table('degree_types')->insert([
        'lang'            => $request -> lang,
        'degree_level'    => $request -> degree_level,
        'degree_type'     => $request -> degree_type,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);
    
    return redirect()->route('list_degree_types')->withMessage('Degree Type Successfully Added...!');
}
public function edit_degree_types($id){
    $edit_degree_types = DB::table('degree_types')->where('id','=' , $id)->get();
    $edit_degree_level = DB::table('degree_levels')->where('id','=' , $id)->get();
    $get_degree_types = DB::table('degree_types')->get();
    $get_degree_level = DB::table('degree_levels')->get();
    return view('admin/edit_degree_types',compact('edit_degree_types','edit_degree_level','get_degree_types','get_degree_level'));
    
} 
public function update_degree_types(Request $request){
    $update_degree_types = DB::table('degree_types')->where('id', $request->id)->update([
        'lang'            => $request -> lang,
        'degree_level'    => $request -> degree_level,
        'degree_type'     => $request -> degree_type,
        'is_default'      => $request -> is_default,
        'is_active'       => $request -> is_active       
    ]);
    
    return redirect()->route('list_degree_types')->withMessage('Degree Type Successfully updated...!');
}   
public function view_degree_types($id){
    $view_degree_type = DB::table('degree_types')->where('id' , '=' , $id)->get();
    return view('admin/view_degree_types',compact('view_degree_type'));
}
public function delete_degree_types($id){
    $delte_degree_types = DB::table('degree_types')->where('id' , $id)->delete();
    return redirect()->route('list_degree_types')->withMessage('Degree Type Successfully Deleted...!');
}
// DEGREE TYPE END

// MAJOR SUBJECT START

public function add_major_subject(){
    $add_major_subject = DB::table('major_subjects')->orderBy( 'id', 'Desc' )->get();
    return view( 'admin/add_major_subject',compact('add_major_subject'));
} 
public function list_major_subjects(){
    $listmajor = DB::table('major_subjects')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_major_subjects', compact( 'listmajor' ));
} 
public function sort_major_subject(){
    return view( 'admin/sort_major_subject');
} 
public function edit_major_subject($id){  
    $edit_major_subject = DB::table('major_subjects')->where('id', '=', $id)->get();
    $get_major_subject = DB::table('major_subjects')->get();
    return view( 'admin/edit_major_subject', compact('edit_major_subject','get_major_subject'));
}
public function save_major_subject(Request $request){  
    $save_major_subject = DB::table('major_subjects')->insert([
        'major_subject' => $request -> major_subject,
        'is_default'    => $request -> is_default,
        'is_active'     => $request -> is_active,
        'lang'          => $request -> lang,
   ]);
   return redirect()->route('list_major_subjects')->withMessage('Major Subjects Successfully Added !'); 
} 
public function update_major_subject(Request $request){  
    $update_major_subject = DB::table('major_subjects')->where('id', $request->id)->update([
        'major_subject' => $request -> major_subject,
        'is_default'    => $request -> is_default,
        'is_active'     => $request -> is_active,
        'lang'          => $request -> lang,
   ]);
   return redirect()->route('list_major_subjects')->withMessage('Major Subjects Successfully updated !');
}
public function view_major_subject($id){
    $view_major_subject = DB::table('major_subjects')->where('id' , '=' , $id)->get();
    return view('admin/view_major_subject',compact('view_major_subject'));
}
public function delete_major_subject( $id ){  
    $delete_major_subject = DB::table('major_subjects')->where( 'id', $id )->delete();    
   return redirect()->route('list_major_subjects')->withMessage('Major Subjects Successfully Deleted !');
} 

// MAJOR SUBJECT END


// RESULT TYPE START

public function list_result_types(){
    $listresult = DB::table('result_types')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_result_types', compact( 'listresult' ));
}
public function add_new_type(){
    $addresult = DB::table('result_types')->orderBy('id','ASC')->get();
    return view( 'admin/add_new_type',compact('addresult'));  
} 
public function sort_result_types(){

    $resulttype = DB::table('result_types')->orderBy( 'id' )->get();

    return view('admin/sort_result_types', compact( 'resulttype' ));
} 
public function edit_result_type($id){  
    $editresult = DB::table('result_types')->where('id', '=', $id)->get();
    $get_result_type = DB::table('result_types')->get();
    return view( 'admin/edit_result_type', compact('editresult','get_result_type'));
}
public function save_result_type(Request $request){  
    $save_result_type = DB::table('result_types')->insert([
        'result_type' => $request -> result_type,
        'is_default'  => $request -> is_default,
        'is_active'   => $request -> is_active,
        'lang'        => $request -> lang,
   ]);
   return redirect()->route('list_result_types')->withMessage('Result Type Successfully Added !'); 
} 
public function update_result_type(Request $request){  
    $update_result_type = DB::table('result_types')->where('id', $request->id)->update([
        'result_type' => $request -> result_type,
        'is_default'  => $request -> is_default,
        'is_active'   => $request -> is_active,
        'lang'        => $request -> lang,
   ]);
   return redirect()->route('list_result_types')->withMessage('Result Type Successfully updated !');
} 
public function view_result_type($id){
    $view_result_type = DB::table('result_types')->where('id' , '=' , $id)->get();
    return view('admin/view_result_type',compact('view_result_type'));
}
public function delete_result_type( $id ){  
    $deleteresulttype = DB::table('result_types')->where( 'id', $id )->delete();    
   return redirect()->route('list_result_types')->withMessage('Result Type Successfully Deleted !');
} 

// RESULT TYPE END

// MARITAL STATUS START

public function list_marital_status(){
    $list_marital_status = DB::table('marital_statuses')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_marital_status', compact('list_marital_status'));
} 
public function add_marital_status(){
    $add_marital_status = DB::table('marital_statuses')->orderBy('id','ASC')->get();
    return view( 'admin/add_marital_status', compact('add_marital_status') );
} 
public function sort_marital_status(){
    $sort_marital_status = DB::table('marital_statuses')->orderBy( 'id' )->get();
    return view( 'admin/sort_marital_status', compact('sort_marital_status') );
}
public function edit_marital_status($id){ 
    $edit_marital_status = DB::table('marital_statuses')->where('id', '=', $id)->get();  
    $get_marital_status = DB::table('marital_statuses')->get();
    return view( 'admin/edit_marital_status', compact('edit_marital_status','get_marital_status'));
}
public function save_marital_status(Request $request){  
    $save_marital_status = DB::table('marital_statuses')->insert([
        'marital_status' => $request -> marital_status,
        'is_default'     => $request -> is_default,
        'is_active'      => $request -> is_active,
        'lang'           => $request -> lang,
   ]);
   return redirect()->route('list_marital_status')->withMessage('Marital Status Successfully Added !');      
} 
public function update_marital_status(Request $request){
    $update_marital_status = DB::table('marital_statuses')->where('id', $request->id)->update([
        'marital_status' => $request -> marital_status,
        'is_default'     => $request -> is_default,
        'is_active'      => $request -> is_active,
        'lang'           => $request -> lang,
   ]);
   return redirect()->route('list_marital_status')->withMessage('Marital Status Successfully updated !');
} 
public function view_marital_status($id){
    $view_marital_status = DB::table('marital_statuses')->where('id' , '=' , $id)->get();
    return view('admin/view_marital_status',compact('view_marital_status'));
}
public function delete_marital_status( $id ){  
    $delete_marital_status = DB::table('marital_statuses')->where( 'id', $id )->delete();
    return redirect()->route('list_marital_status')->withMessage('Marital Status Successfully Deleted !');
}

// MARITAL STATUS END

// OWNERSHIP TYPE START

public function list_ownership_types(){
    $listownership = DB::table('ownership_types')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_ownership_types', compact( 'listownership' ));
} 
public function add_ownership_types(){
    $add_ownership_types = DB::table('ownership_types')->orderBy('id','ASC')->get();
    return view( 'admin/add_ownership_types',compact('add_ownership_types'));
} 
public function sort_ownership_types(){
    $ownershiptype = DB::table('ownership_types')->orderBy( 'id' )->get();

    return view('admin/sort_ownership_types', compact( 'ownershiptype' ));
} 
public function edit_ownership_types($id){ 
    $edit_ownership_types = DB::table('ownership_types')->where('id', '=', $id)->get();
    $get_ownership_types = DB::table('ownership_types')->get();
    return view( 'admin/edit_ownership_types', compact('edit_ownership_types' ,'get_ownership_types'));
}
public function save_ownership_types(Request $request){  
    $save_ownership_types = DB::table('ownership_types')->insert([
        'ownership_type' => $request -> ownership_type,
        'is_default'     => $request -> is_default,
        'is_active'      => $request -> is_active,
        'lang'           => $request -> lang,
   ]);
   return redirect()->route('list_ownership_types')->withMessage('Ownershipe type Successfully Added !');      
} 
public function update_ownership_types(Request $request){
    $update_ownership_types = DB::table('ownership_types')->where('id', $request->id)->update([
        'ownership_type' => $request -> ownership_type,
        'is_default'     => $request -> is_default,
        'is_active'      => $request -> is_active,
        'lang'           => $request -> lang,
   ]);
   return redirect()->route('list_ownership_types')->withMessage('Ownershipe type Successfully updated !');
} 
public function view_ownership_types($id){
    $view_ownership_types = DB::table('ownership_types')->where('id' , '=' , $id)->get();
    return view('admin/view_ownership_types',compact('view_ownership_types'));
}
public function delete_ownership_types( $id ){  
    $delete_ownership_types = DB::table('ownership_types')->where( 'id', $id )->delete();
    return redirect()->route('list_ownership_types')->withMessage('Ownershipe type Successfully Deleted !');
} 

// OWNWERSHIP TYPE END

// Salary period start

public function list_salary_periods(){
    $listsalary = DB::table('salary_periods')->orderBy( 'id', 'Desc' )->get();
    return view('admin/list_salary_periods', compact( 'listsalary' ));
} 
public function add_salary_periods(){  
    $addsalaryperiod = DB::table('salary_periods')->orderBy('id','ASC')->get();
    return view( 'admin/add_salary_periods',compact('addsalaryperiod'));
}
public function sort_salary_periods(){
    $shortsalary = DB::table('salary_periods')->orderBy( 'id' )->get();

    return view('admin/sort_salary_periods', compact( 'shortsalary' ));
} 
public function edit_salary_period($id){  
    $editsalary = DB::table('salary_periods')->where('id', '=', $id)->get();
    $get_edit_salary = DB::table('salary_periods')->get();
    return view( 'admin/edit_salary_period', compact('editsalary','get_edit_salary'));
}
public function save_salary_periods(Request $request){  
    $addsalaryperiod = DB::table('salary_periods')->insert([
        'salary_period' => $request -> salary_period,
        'is_default'    => $request -> is_default,
        'is_active'     => $request -> is_active,
        'lang'          => $request -> lang,
   ]);
   return redirect()->route('list_salary_periods')->withMessage('salary period Successfully Added !');     
} 
public function updatesalaryperiod(Request $request){  
    $updatesalaryperiod = DB::table('salary_periods')->where('id', $request->id)->update([
        'salary_period'  => $request -> salary_period,
        'is_default'     => $request -> is_default,
        'is_active'      => $request -> is_active,
        'lang'           => $request -> lang,
   ]);
   return redirect()->route('list_salary_periods')->withMessage('salary period Successfully updated !');
} 
public function view_salary_periods($id){
    $view_salary_periods = DB::table('salary_periods')->where('id' , '=' , $id)->get();
    return view('admin/view_salary_periods',compact('view_salary_periods'));
}
public function deletesalaryperiod( $id ){  
    $deletesalaryperiod = DB::table('salary_periods')->where( 'id', $id )->delete();
    return redirect()->route('list_salary_periods')->withMessage('salary period Successfully Deleted !');
} 

// salary period end



public function sort_language(){
    return view( 'admin/sort_language');
} 
 
public function sort_gender(){
    return view( 'admin/sort_gender');
} 





 















 

public function adminlogout()
{
   Session::flush();
   return redirect("/admin");
}
}