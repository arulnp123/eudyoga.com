<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/index', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/jobs', [App\Http\Controllers\MainController::class, 'jobs'])->name('jobs');




Route::get('/about_us', [App\Http\Controllers\MainController::class, 'about_us'])->name('about_us');
Route::get('/companies', [App\Http\Controllers\MainController::class, 'companies'])->name('companies');
Route::get('/contact_us', [App\Http\Controllers\MainController::class, 'contact_us'])->name('contact_us');
Route::get('/login', [App\Http\Controllers\MainController::class, 'login'])->name('login');
Route::get('/Privacy_Policy', [App\Http\Controllers\MainController::class, 'Privacy_Policy'])->name('Privacy_Policy');
Route::get('/Refund_Policy', [App\Http\Controllers\MainController::class, 'Refund_Policy'])->name('Refund_Policy');
Route::get('/Terms_And_Conditions', [App\Http\Controllers\MainController::class, 'Terms_And_Conditions'])->name('Terms_And_Conditions');
Route::get('/company_detail', [App\Http\Controllers\MainController::class, 'company_detail'])->name('company_detail');
Route::get('/employer_index', [App\Http\Controllers\MainController::class, 'employer_index'])->name('employer_index');


Route::get('/company_public_profile/{id}', [App\Http\Controllers\MainController::class, 'company_public_profile'])->name('company_public_profile');
Route::get('/view_detail/{id}', [App\Http\Controllers\MainController::class, 'view_detail'])->name('view_detail');


Route::get('/search',  [App\Http\Controllers\MainController::class, 'search'])->name('search');
Route::get('/job_search',  [App\Http\Controllers\MainController::class, 'job_search'])->name('job_search');
Route::get('/searchcompany',  [App\Http\Controllers\MainController::class, 'searchcompany'])->name('searchcompany');
Route::get('/company_search',  [App\Http\Controllers\MainController::class, 'company_search'])->name('company_search');
Route::get('/featured_companies/{id}', [App\Http\Controllers\MainController::class, 'featured_companies'])->name('featured_companies');
Route::get('/searchindex',  [App\Http\Controllers\MainController::class, 'searchindex'])->name('searchindex');
Route::get('/index_search',  [App\Http\Controllers\MainController::class, 'index_search'])->name('index_search');
Route::get('/searchabout',  [App\Http\Controllers\MainController::class, 'searchabout'])->name('searchabout');
Route::get('/about_search',  [App\Http\Controllers\MainController::class, 'about_search'])->name('about_search');
Route::post('/add_to_favorite',  [App\Http\Controllers\MainController::class, 'add_to_favorite'])->name('add_to_favorite');

//verofied

Route::post('/checkphone', [App\Http\Controllers\User\UserController::class, 'checkphone'])->name('checkphone');
Route::post('/checkemail', [App\Http\Controllers\User\UserController::class, 'checkemail'])->name('checkemail');

// Employer
Route::get('/employer_register', [App\Http\Controllers\Employer\EmployerController::class, 'employer_register'])->name('employer_register');
Route::post('/addemployer', [App\Http\Controllers\Employer\EmployerController::class, 'addemployer'])->name('addemployer');
Route::get('/employer_login', [App\Http\Controllers\Employer\EmployerController::class, 'employer_login'])->name('employer_login');
Route::post('/checklogin', [App\Http\Controllers\Employer\EmployerController::class, 'checklogin'])->name('checklogin');
Route::get('/employerlogout', [App\Http\Controllers\Employer\EmployerController::class, 'employerlogout'])->name('employerlogout');
Route::get('/employer_profile', [App\Http\Controllers\Employer\EmployerController::class, 'employer_profile'])->name('employer_profile');
Route::get('/employer_index', [App\Http\Controllers\Employer\EmployerController::class, 'employer_index'])->name('employer_index');
Route::get('/employer_dashboard', [App\Http\Controllers\Employer\EmployerController::class, 'employer_dashboard'])->name('employer_dashboard');
Route::get('/abc', [App\Http\Controllers\Employer\EmployerController::class, 'abc'])->name('abc');
Route::get('/company_followers', [App\Http\Controllers\Employer\EmployerController::class, 'company_followers'])->name('company_followers');
Route::get('/company_jobs', [App\Http\Controllers\Employer\EmployerController::class, 'company_jobs'])->name('company_jobs');
Route::get('/company_messages', [App\Http\Controllers\Employer\EmployerController::class, 'company_messages'])->name('company_messages');
Route::get('/company_public_profile', [App\Http\Controllers\Employer\EmployerController::class, 'company_public_profile'])->name('company_public_profile');
Route::get('/cv_search_packages', [App\Http\Controllers\Employer\EmployerController::class, 'cv_search_packages'])->name('cv_search_packages');
Route::get('/edit_profile', [App\Http\Controllers\Employer\EmployerController::class, 'edit_profile'])->name('edit_profile');
Route::post('/editprofile', [App\Http\Controllers\Employer\EmployerController::class, 'editprofile'])->name('editprofile');
Route::get('/employer_profile', [App\Http\Controllers\Employer\EmployerController::class, 'employer_profile'])->name('employer_profile');
Route::get('/post_job', [App\Http\Controllers\Employer\EmployerController::class, 'post_job'])->name('post_job');
Route::post('/upload_post_job', [App\Http\Controllers\Employer\EmployerController::class, 'upload_post_job'])->name('upload_post_job');
Route::get('/unlocked_users', [App\Http\Controllers\Employer\EmployerController::class, 'unlocked_users'])->name('unlocked_users');
Route::get('/delete_post_job/{id}', [App\Http\Controllers\Employer\EmployerController::class, 'delete_post_job'])->name('delete_post_job');
Route::get('/edit_post_job/{id}', [App\Http\Controllers\Employer\EmployerController::class, 'edit_post_job'])->name('edit_post_job');
Route::post('/update_post_job', [App\Http\Controllers\Employer\EmployerController::class, 'update_post_job'])->name('update_post_job');
Route::get('/basic_detials', [App\Http\Controllers\Employer\EmployerController::class, 'basic_detials'])->name('basic_detials');

Route::get('/candiate_profile', [App\Http\Controllers\Employer\EmployerController::class, 'candiate_profile'])->name('candiate_profile');
Route::get('/user_profile/{id}', [App\Http\Controllers\Employer\EmployerController::class, 'user_profile'])->name('user_profile');
Route::post('/checkemail', [App\Http\Controllers\Employer\EmployerController::class, 'checkemail'])->name('checkemail');


Route::get('/logout', [App\Http\Controllers\Frontend\EmployerController::class, 'logout'])->name('logout');
Route::get('/candsearch',  [App\Http\Controllers\Employer\EmployerController::class, 'candsearch'])->name('candsearch');
Route::get('/search_cand',  [App\Http\Controllers\Employer\EmployerController::class, 'search_cand'])->name('search_cand');
Route::get('/getcity', [App\Http\Controllers\Candidate\EmployerController::class, 'getcity'])->name('getcity');






// Candidate
Route::get('/candidate_login', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_login'])->name('candidate_login');
Route::get('/candidate_index', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_index'])->name('candidate_index');
Route::post('/checkloginn', [App\Http\Controllers\Candidate\CandidateController::class, 'checkloginn'])->name('checkloginn');
Route::get('/candidate_register', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_register'])->name('candidate_register');
Route::post('/candidatepost', [App\Http\Controllers\Candidate\CandidateController::class, 'candidatepost'])->name('candidatepost');
Route::get('/candidatelogout', [App\Http\Controllers\Candidate\CandidateController::class, 'candidatelogout'])->name('candidatelogout');
// Route::post('/candidate_post', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_post'])->name('candidate_post');





Route::get('/addcandidate', [App\Http\Controllers\Candidate\CandidateController::class, 'addcandidate'])->name('addcandidate');
Route::get('/edit_profile_candidate', [App\Http\Controllers\Candidate\CandidateController::class, 'edit_profile_candidate'])->name('edit_profile_candidate');
Route::post('/editprofilecandidate', [App\Http\Controllers\Candidate\CandidateController::class, 'editprofilecandidate'])->name('editprofilecandidate');
Route::get('/manage_resume', [App\Http\Controllers\Candidate\CandidateController::class, 'manage_resume'])->name('manage_resume');
Route::get('/my_favourite_jobs', [App\Http\Controllers\Candidate\CandidateController::class, 'my_favourite_jobs'])->name('my_favourite_jobs');
Route::get('/my_followings', [App\Http\Controllers\Candidate\CandidateController::class, 'my_followings'])->name('my_followings');
Route::get('/my_job_alerts', [App\Http\Controllers\Candidate\CandidateController::class, 'my_job_alerts'])->name('my_job_alerts');
Route::get('/my_job_application', [App\Http\Controllers\Candidate\CandidateController::class, 'my_job_application'])->name('my_job_application');
Route::get('/my_mesages', [App\Http\Controllers\Candidate\CandidateController::class, 'my_mesages'])->name('my_mesages');
Route::get('/print_resume', [App\Http\Controllers\Candidate\CandidateController::class, 'print_resume'])->name('print_resume');
Route::post('/updateresume', [App\Http\Controllers\Candidate\CandidateController::class, 'updateresume'])->name('updateresume');
Route::get('/view_public_profile', [App\Http\Controllers\Candidate\CandidateController::class, 'view_public_profile'])->name('view_public_profile');
Route::get('/candidatelogout', [App\Http\Controllers\Candidate\CandidateController::class, 'candidatelogout'])->name('candidatelogout');
Route::post('/getstate', [App\Http\Controllers\Candidate\CandidateController::class, 'getstate'])->name('getstate');
Route::post('/getcity', [App\Http\Controllers\Candidate\CandidateController::class, 'getcity'])->name('getcity');

Route::post('/candidate_project', [App\Http\Controllers\Candidate\CandidateController::class, 'resume_data'])->name('resume_data');
Route::post('/candidate_experience', [App\Http\Controllers\Candidate\CandidateController::class, 'resume_data'])->name('resume_data');
Route::post('/candidate_education', [App\Http\Controllers\Candidate\CandidateController::class, 'resume_data'])->name('resume_data');
Route::post('/candidate_skill', [App\Http\Controllers\Candidate\CandidateController::class, 'resume_data'])->name('resume_data');
Route::post('/candidate_language', [App\Http\Controllers\Candidate\CandidateController::class, 'resume_data'])->name('resume_data');
Route::post('/upload_cv', [App\Http\Controllers\Candidate\CandidateController::class, 'upload_cv'])->name('upload_cv');

Route::get('/basicdetialscandidate', [App\Http\Controllers\Candidate\CandidateController::class, 'basicdetialscandidate'])->name('basicdetialscandidate');
Route::post('/favorite-jobs/{job}', [App\Http\Controllers\Candidate\CandidateController::class, 'addToFavorites'])->name('addToFavorites');


Route::get('/example', [App\Http\Controllers\Candidate\CandidateController::class, 'get_user_name'])->name('get_user_name');
Route::get('/candidate/view_details/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'view_details'])->name('view_details');
Route::get('/delete_fav_job/{id}', [App\Http\Controllers\Candidate\CandidateController::class, 'delete_fav_job'])->name('delete_fav_job');
Route::post('/add_to_following', [App\Http\Controllers\Candidate\CandidateController::class, 'add_to_following'])->name('add_to_following');




// <--admin-->



// Admin user
Route::get('/list_admin_users', [App\Http\Controllers\Admin\AdminController::class, 'list_admin_users'])->name('list_admin_users');
Route::get('/view_admin_users/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_admin_users'])->name('view_admin_users');
Route::get('/edit_admin_users/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_admin_users'])->name('edit_admin_users');
Route::post('/update_admin_users', [App\Http\Controllers\Admin\AdminController::class, 'update_admin_users'])->name('update_admin_users');
Route::get('/delete_admin_users/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_admin_users'])->name('delete_admin_users');
Route::get('/add_admin_users', [App\Http\Controllers\Admin\AdminController::class, 'add_admin_users'])->name('add_admin_users');
Route::post('/save_admin_users', [App\Http\Controllers\Admin\AdminController::class, 'save_admin_users'])->name('save_admin_users');








//Job Shift
Route::get('/sort_jobshifts', [App\Http\Controllers\Admin\AdminController::class, 'sort_jobshifts'])->name('sort_jobshifts');
Route::post('/save_jobsshifts', [App\Http\Controllers\Admin\AdminController::class, 'save_jobsshifts'])->name('save_jobsshifts');
Route::post('/add_jobsshifts', [App\Http\Controllers\Admin\AdminController::class, 'add_jobsshifts'])->name('add_jobsshifts');
Route::get('/list_jobshifts', [App\Http\Controllers\Admin\AdminController::class, 'list_jobshifts'])->name('list_jobshifts');
Route::post('/update_jobsshifts', [App\Http\Controllers\Admin\AdminController::class, 'update_jobsshifts'])->name('update_jobsshifts');
Route::get('/delete_jobsshifts/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_jobsshifts'])->name('delete_jobsshifts');
Route::get('/edit_jobsshifts/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_jobsshifts'])->name('edit_jobsshifts');
Route::get('/view_jobsshifts/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_jobsshifts'])->name('view_jobsshifts');

// JOB
Route::get('/list_jobs', [App\Http\Controllers\Admin\AdminController::class, 'list_jobs'])->name('list_jobs');
Route::get('/add_jobs', [App\Http\Controllers\Admin\AdminController::class, 'add_jobs'])->name('add_jobs');
Route::get('/view_jobs/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_jobs'])->name('view_jobs');
Route::post('/save_jobs', [App\Http\Controllers\Admin\AdminController::class, 'save_jobs'])->name('save_jobs');
Route::get('/edit_jobs/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_jobs'])->name('edit_jobs');
Route::post('/update_jobs', [App\Http\Controllers\Admin\AdminController::class, 'update_jobs'])->name('update_jobs');
Route::get('/delete_jobs/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_jobs'])->name('delete_jobs');

//EMPLOYER
Route::get('/employer_list', [App\Http\Controllers\Admin\AdminController::class, 'employer_list'])->name('employer_list');
Route::get('/employer_add', [App\Http\Controllers\Admin\AdminController::class, 'employer_add'])->name('employer_add');
Route::get('/view_employer/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_employer'])->name('view_employer');
Route::post('/saveemployer', [App\Http\Controllers\Admin\AdminController::class, 'saveemployer'])->name('saveemployer');
Route::get('/edit_employer/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_employer'])->name('edit_employer');
Route::post('/update_employer', [App\Http\Controllers\Admin\AdminController::class, 'update_employer'])->name('update_employer');
Route::get('/delete_employer/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_employer'])->name('delete_employer');
Route::get('/employer_payment_history', [App\Http\Controllers\Admin\AdminController::class, 'employer_payment_history'])->name('employer_payment_history');

// CANDIDATE PROFILE
Route::get('/candidate_list', [App\Http\Controllers\Admin\AdminController::class, 'candidate_list'])->name('candidate_list');
Route::get('/candidate_add', [App\Http\Controllers\Admin\AdminController::class, 'candidate_add'])->name('candidate_add');
Route::post('/savecandidate', [App\Http\Controllers\Admin\AdminController::class, 'savecandidate'])->name('savecandidate');
Route::get('/view_candidate/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_candidate'])->name('view_candidate');
Route::get('/edit_candidate/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_candidate'])->name('edit_candidate');
Route::post('/update_candidate', [App\Http\Controllers\Admin\AdminController::class, 'update_candidate'])->name('update_candidate');
Route::get('/delete_candidate/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_candidate'])->name('delete_candidate');

// CMS
Route::get('/add_cms', [App\Http\Controllers\Admin\AdminController::class, 'add_cms'])->name('add_cms');
Route::get('/list_cms', [App\Http\Controllers\Admin\AdminController::class, 'list_cms'])->name('list_cms');
Route::get('/list_translated_pages', [App\Http\Controllers\Admin\AdminController::class, 'list_translated_pages'])->name('list_translated_pages');
Route::get('/savetranslated', [App\Http\Controllers\Admin\AdminController::class, 'savetranslated'])->name('savetranslated');
Route::get('/add_translated_pages', [App\Http\Controllers\Admin\AdminController::class, 'add_translated_pages'])->name('add_translated_pages');
Route::get('/view_translated_pages/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_translated_pages'])->name('view_translated_pages');
Route::get('/edit_translated_pages/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_translated_pages'])->name('edit_translated_pages');
Route::get('/update_translated_pages', [App\Http\Controllers\Admin\AdminController::class, 'update_translated_pages'])->name('update_translated_pages');
Route::post('/save_cms',[App\Http\Controllers\Admin\AdminController::class,'save_cms'])->name('save_cms');
Route::get('/edit_cms/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_cms'])->name('edit_cms');
Route::post('/update_cms',[App\Http\Controllers\Admin\AdminController::class,'update_cms'])->name('update_cms');
Route::get('/view_cms/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_cms'])->name('view_cms');
Route::get('delete_cms/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_cms'])->name('delete_cms');

// BLOGS
Route::get('/add_blogs', [App\Http\Controllers\Admin\AdminController::class, 'add_blogs'])->name('add_blogs');
Route::get('/list_blogs', [App\Http\Controllers\Admin\AdminController::class, 'list_blogs'])->name('list_blogs');
Route::get('/categories', [App\Http\Controllers\Admin\AdminController::class, 'categories'])->name('categories');

Route::get('/view_companies', [App\Http\Controllers\Admin\AdminController::class, 'view_companies'])->name('view_companies');



Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('admin');
Route::post('/checkadminlogin', [App\Http\Controllers\Admin\AdminController::class, 'checkadminlogin'])->name('checkadminlogin');
Route::get('/adminlogout', [App\Http\Controllers\Admin\AdminController::class, 'adminlogout'])->name('adminlogout');
Route::get('/admin_register', [App\Http\Controllers\Admin\AdminController::class, 'admin_register'])->name('admin_register');
Route::get('/dashboard_admin', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_admin'])->name('dashboard_admin');

Route::get('/companyApproval', [App\Http\Controllers\Admin\AdminController::class, 'companyApproval'])->name('companyApproval');
Route::get('/admin_profile', [App\Http\Controllers\Admin\AdminController::class, 'admin_profile'])->name('admin_profile');

Route::get('/dashboard_post_job', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_post_job'])->name('dashboard_post_job');
Route::get('/admin_manage_job', [App\Http\Controllers\Admin\AdminController::class, 'admin_manage_job'])->name('admin_manage_job');
Route::get('/admin_job_lists', [App\Http\Controllers\Admin\AdminController::class, 'admin_job_lists'])->name('admin_job_lists');
Route::get('/dashboard_applicants', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_applicants'])->name('dashboard_applicants');
Route::get('/dashboard_resume_alerts', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_resume_alerts'])->name('dashboard_resume_alerts');
Route::get('/dashboard_category', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_category'])->name('dashboard_category');
Route::get('/dashboard_industries', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_industries'])->name('dashboard_industries');
Route::get('/dashboard_education', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_education'])->name('dashboard_education');
Route::get('/job_location', [App\Http\Controllers\Admin\AdminController::class, 'job_location'])->name('job_location');
Route::get('/dashboard_packages', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_packages'])->name('dashboard_packages');
Route::get('/dashboard_messages', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_messages'])->name('dashboard_messages');
Route::get('/dashboard_change_password', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_change_password'])->name('dashboard_change_password');
Route::get('/dashboard_view_profile', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_view_profile'])->name('dashboard_view_profile');
Route::get('/create_admin_user', [App\Http\Controllers\Admin\AdminController::class, 'create_admin_user'])->name('create_admin_user');
Route::post('/saveadmin', [App\Http\Controllers\Admin\AdminController::class, 'saveadmin'])->name('saveadmin');

Route::post('/addjobss', [App\Http\Controllers\Admin\AdminController::class, 'addjobss'])->name('addjobss');

Route::get('/candidate_list', [App\Http\Controllers\Admin\AdminController::class, 'candidate_list'])->name('candidate_list');
Route::get('/candidate_add', [App\Http\Controllers\Admin\AdminController::class, 'candidate_add'])->name('candidate_add');
Route::post('/savecandidate', [App\Http\Controllers\Admin\AdminController::class, 'savecandidate'])->name('savecandidate');
Route::get('/advertisement', [App\Http\Controllers\Admin\AdminController::class, 'advertisement'])->name('advertisement');

Route::get('/list_seo', [App\Http\Controllers\Admin\AdminController::class, 'list_seo'])->name('list_seo');
Route::get('/list_language', [App\Http\Controllers\Admin\AdminController::class, 'list_language'])->name('list_language');
Route::get('/list_countries', [App\Http\Controllers\Admin\AdminController::class, 'list_countries'])->name('list_countries');
Route::get('/list_states', [App\Http\Controllers\Admin\AdminController::class, 'list_states'])->name('list_states');
Route::get('/list_cities', [App\Http\Controllers\Admin\AdminController::class, 'list_cities'])->name('list_cities');
Route::get('/list_language', [App\Http\Controllers\Admin\AdminController::class, 'list_language'])->name('list_language');

Route::get('/list_packages', [App\Http\Controllers\Admin\AdminController::class, 'list_packages'])->name('list_packages');
Route::get('/list_functional_areas', [App\Http\Controllers\Admin\AdminController::class, 'list_functional_areas'])->name('list_functional_areas');
Route::get('/list_genders', [App\Http\Controllers\Admin\AdminController::class, 'list_genders'])->name('list_genders');


Route::get('/list_carrer', [App\Http\Controllers\Admin\AdminController::class, 'list_carrer'])->name('list_carrer');
Route::get('/list_functional_areas', [App\Http\Controllers\Admin\AdminController::class, 'list_functional_areas'])->name('list_functional_areas');




Route::get('/list_degree_levels', [App\Http\Controllers\Admin\AdminController::class, 'list_degree_levels'])->name('list_degree_levels');

Route::get('/list_industries', [App\Http\Controllers\Admin\AdminController::class, 'list_industries'])->name('list_industries');
Route::get('/list_new_types', [App\Http\Controllers\Admin\AdminController::class, 'list_new_types'])->name('list_new_types');


Route::get('/site_settings', [App\Http\Controllers\Admin\AdminController::class, 'site_settings'])->name('site_settings');
Route::get('/add_language', [App\Http\Controllers\Admin\AdminController::class, 'add_language'])->name('add_language');
Route::get('/add_state', [App\Http\Controllers\Admin\AdminController::class, 'add_state'])->name('add_state');
Route::get('/add_city', [App\Http\Controllers\Admin\AdminController::class, 'add_city'])->name('add_city');
Route::get('/add_package', [App\Http\Controllers\Admin\AdminController::class, 'add_package'])->name('add_package');
Route::get('/add_functional_area', [App\Http\Controllers\Admin\AdminController::class, 'add_functional_area'])->name('add_functional_area');
Route::get('/add_gender', [App\Http\Controllers\Admin\AdminController::class, 'add_gender'])->name('add_gender');
Route::get('/add_industries', [App\Http\Controllers\Admin\AdminController::class, 'add_industries'])->name('add_industries');
Route::get('/add_job_types', [App\Http\Controllers\Admin\AdminController::class, 'add_job_types'])->name('add_job_types');
Route::get('/add_jobshifts', [App\Http\Controllers\Admin\AdminController::class, 'add_jobshifts'])->name('add_jobshifts');



//Country
Route::get('/list_country_details', [App\Http\Controllers\Admin\AdminController::class, 'list_country_details'])->name('list_country_details');
Route::get('/add_country', [App\Http\Controllers\Admin\AdminController::class, 'add_country'])->name('add_country');
Route::post('/save_country',[App\Http\Controllers\Admin\AdminController::class,'save_country'])->name('save_country');
Route::get('/view_country/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_country'])->name('view_country');
Route::get('/edit_country/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_country'])->name('edit_country');
Route::get('delete_country/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_country'])->name('delete_country');
Route::post('/update_country',[App\Http\Controllers\Admin\AdminController::class,'update_country'])->name('update_country');







// FAQs
Route::get('/list_faqs', [App\Http\Controllers\Admin\AdminController::class, 'list_faqs'])->name('list_faqs');
Route::get('/add_faqs', [App\Http\Controllers\Admin\AdminController::class, 'add_faqs'])->name('add_faqs');
Route::post('/save_faqs',[App\Http\Controllers\Admin\AdminController::class,'save_faqs'])->name('save_faqs');
Route::get('/sort_faqs/{id}', [App\Http\Controllers\Admin\AdminController::class, 'sort_faqs'])->name('sort_faqs');
Route::get('/view_faqs/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_faqs'])->name('view_faqs');
Route::get('/edit_faqs/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_faqs'])->name('edit_faqs');
Route::get('delete_faqs/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_faqs'])->name('delete_faqs');
Route::post('/update_faqs',[App\Http\Controllers\Admin\AdminController::class,'update_faqs'])->name('update_faqs');



//Video_language
Route::get('/list_video_language', [App\Http\Controllers\Admin\AdminController::class, 'list_video_language'])->name('list_video_language');
Route::get('/add_video_language', [App\Http\Controllers\Admin\AdminController::class, 'add_video_language'])->name('add_video_language');
Route::post('/save_video_language',[App\Http\Controllers\Admin\AdminController::class,'save_video_language'])->name('save_video_language');
Route::post('/update_video',[App\Http\Controllers\Admin\AdminController::class,'update_video'])->name('update_video');
Route::get('/view_video_language/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_video_language'])->name('view_video_language');
Route::get('/edit_video_language/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_video_language'])->name('edit_video_language');
Route::get('delete_video_language/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_video_language'])->name('delete_video_language');

//Testimonial
Route::get('/list_testimonial', [App\Http\Controllers\Admin\AdminController::class, 'list_testimonial'])->name('list_testimonial');
Route::get('/add_testimonial', [App\Http\Controllers\Admin\AdminController::class, 'add_testimonial'])->name('add_testimonial');
Route::get('/sort_testimonial/{id}', [App\Http\Controllers\Admin\AdminController::class, 'sort_testimonial'])->name('sort_testimonial');
Route::get('/view_testimonial/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_testimonial'])->name('view_testimonial');
Route::get('/edit_testimonial/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_testimonial'])->name('edit_testimonial');
Route::post('/save_testimonial',[App\Http\Controllers\Admin\AdminController::class,'save_testimonial'])->name('save_testimonial');
Route::post('/update_testimonial',[App\Http\Controllers\Admin\AdminController::class,'update_testimonial'])->name('update_testimonial');
Route::get('delete_testimonial/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_testimonial'])->name('delete_testimonial');

//Sliders
Route::get('/list_slider', [App\Http\Controllers\Admin\AdminController::class, 'list_slider'])->name('list_slider');
Route::get('/add_slider', [App\Http\Controllers\Admin\AdminController::class, 'add_slider'])->name('add_slider');
Route::get('/view_Slider/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_Slider'])->name('view_Slider');
Route::get('/edit_Slider/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_Slider'])->name('edit_Slider');
Route::get('delete_Slider/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_Slider'])->name('delete_Slider');
Route::post('/save_Slider',[App\Http\Controllers\Admin\AdminController::class,'save_Slider'])->name('save_Slider');
Route::get('/sort_slider', [App\Http\Controllers\Admin\AdminController::class, 'sort_slider'])->name('sort_slider');
Route::post('/update_Slider',[App\Http\Controllers\Admin\AdminController::class,'update_Slider'])->name('update_Slider');

// LANGUAGE LEVEL
Route::get('/add_language_level', [App\Http\Controllers\Admin\AdminController::class, 'add_language_level'])->name('add_language_level');
Route::get('/list_language_level', [App\Http\Controllers\Admin\AdminController::class, 'list_language_level'])->name('list_language_level');
Route::get('/sort_language_level', [App\Http\Controllers\Admin\AdminController::class, 'sort_language_level'])->name('sort_language_level');
Route::post('/save_language_level',[App\Http\Controllers\Admin\AdminController::class,'save_language_level'])->name('save_language_level');
Route::get('/edit_language_level/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_language_level'])->name('edit_language_level');
Route::post('/update_language_level',[App\Http\Controllers\Admin\AdminController::class,'update_language_level'])->name('update_language_level');
Route::get('/view_language_level/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_language_level'])->name('view_language_level');
Route::get('delete_language_level/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_language_level'])->name('delete_language_level');

// CAREER
Route::get('/add_carrer_level', [App\Http\Controllers\Admin\AdminController::class, 'add_carrer_level'])->name('add_carrer_level');
Route::get('/list_carrer_level', [App\Http\Controllers\Admin\AdminController::class, 'list_carrer_level'])->name('list_carrer_level');
Route::get('/sort_carrer_level', [App\Http\Controllers\Admin\AdminController::class, 'sort_carrer_level'])->name('sort_carrer_level');
Route::post('/save_carrer_level',[App\Http\Controllers\Admin\AdminController::class,'save_carrer_level'])->name('save_carrer_level');
Route::get('/edit_carrer_level/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_carrer_level'])->name('edit_carrer_level');
Route::post('/update_carrer_level',[App\Http\Controllers\Admin\AdminController::class,'update_carrer_level'])->name('update_carrer_level');
Route::get('/view_carrer_level/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_carrer_level'])->name('view_carrer_level');
Route::get('delete_carrer_level/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_carrer_level'])->name('delete_carrer_level');

//Languages
Route::get('/list_language', [App\Http\Controllers\Admin\AdminController::class, 'list_language'])->name('list_language');
Route::get('/add_language', [App\Http\Controllers\Admin\AdminController::class, 'add_language'])->name('add_language');
Route::get('/view_language/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_language'])->name('view_language');
Route::get('/edit_language/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_language'])->name('edit_language');
Route::get('delete_language/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_language'])->name('delete_language');
Route::post('/update_language',[App\Http\Controllers\Admin\AdminController::class,'update_language'])->name('update_language');

// JOB EXPERIANCE
Route::get('/add_job_experiance', [App\Http\Controllers\Admin\AdminController::class, 'add_job_experiance'])->name('add_job_experiance');
Route::get('/list_job_experiance', [App\Http\Controllers\Admin\AdminController::class, 'list_job_experiance'])->name('list_job_experiance');
Route::get('/sort_job_experiance', [App\Http\Controllers\Admin\AdminController::class, 'sort_job_experiance'])->name('sort_job_experiance');
Route::post('/save_job_experiance',[App\Http\Controllers\Admin\AdminController::class,'save_job_experiance'])->name('save_job_experiance');
Route::get('/edit_job_experiance/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_job_experiance'])->name('edit_job_experiance');
Route::post('/update_job_experiance',[App\Http\Controllers\Admin\AdminController::class,'update_job_experiance'])->name('update_job_experiance');
Route::get('/view_job_experiance/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_job_experiance'])->name('view_job_experiance');
Route::get('delete_job_experiance/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_job_experiance'])->name('delete_job_experiance');

// JOB SKILL
Route::get('/add_job_skills', [App\Http\Controllers\Admin\AdminController::class, 'add_job_skills'])->name('add_job_skills');
Route::get('/list_job_skills', [App\Http\Controllers\Admin\AdminController::class, 'list_job_skills'])->name('list_job_skills');
Route::get('/sort_job_skills', [App\Http\Controllers\Admin\AdminController::class, 'sort_job_skills'])->name('sort_job_skills');
Route::post('/save_job_skills',[App\Http\Controllers\Admin\AdminController::class,'save_job_skills'])->name('save_job_skills');
Route::get('/edit_job_skills/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_job_skills'])->name('edit_job_skills');
Route::post('/update_job_skills',[App\Http\Controllers\Admin\AdminController::class,'update_job_skills'])->name('update_job_skills');
Route::get('/view_job_skills/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_job_skills'])->name('view_job_skills');
Route::get('delete_job_skills/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_job_skills'])->name('delete_job_skills');

// JOB TYPE
Route::get('/list_job_types', [App\Http\Controllers\Admin\AdminController::class, 'list_job_types'])->name('list_job_types');
Route::get('/sort_jobtypes', [App\Http\Controllers\Admin\AdminController::class, 'sort_jobtypes'])->name('sort_jobtypes');
Route::post('/save_jobtypes', [App\Http\Controllers\Admin\AdminController::class, 'save_jobtypes'])->name('save_jobtypes');
Route::get('/add_jobtypes', [App\Http\Controllers\Admin\AdminController::class, 'add_jobtypes'])->name('add_job_types');
Route::post('/update_jobtypes', [App\Http\Controllers\Admin\AdminController::class, 'update_jobtypes'])->name('update_jobtypes');
Route::get('/delete_jobtypes/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_jobtypes'])->name('delete_jobtypes');
Route::get('/edit_jobtypes/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_jobtypes'])->name('edit_jobtypes');
Route::get('/view_jobtypes/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_jobtypes'])->name('view_jobtypes');

// JOB SHIFT
Route::get('/sort_jobshifts', [App\Http\Controllers\Admin\AdminController::class, 'sort_jobshifts'])->name('sort_jobshifts');
Route::post('/save_jobsshifts', [App\Http\Controllers\Admin\AdminController::class, 'save_jobsshifts'])->name('save_jobsshifts');
Route::post('/add_jobsshifts', [App\Http\Controllers\Admin\AdminController::class, 'add_jobsshifts'])->name('add_jobsshifts');
Route::get('/list_jobshifts', [App\Http\Controllers\Admin\AdminController::class, 'list_jobshifts'])->name('list_jobshifts');
Route::post('/update_jobsshifts', [App\Http\Controllers\Admin\AdminController::class, 'update_jobsshifts'])->name('update_jobsshifts');
Route::get('/delete_jobsshifts/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_jobsshifts'])->name('delete_jobsshifts');
Route::get('/edit_jobsshifts/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_jobsshifts'])->name('edit_jobsshifts');
Route::get('/view_jobsshifts/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_jobsshifts'])->name('view_jobsshifts');

//DEGREE LEVEL
Route::get('/add_degree_levels', [App\Http\Controllers\Admin\AdminController::class, 'add_degree_levels'])->name('add_degree_levels');
Route::get('/list_degree_levels', [App\Http\Controllers\Admin\AdminController::class, 'list_degree_levels'])->name('list_degree_levels');
Route::post('/save_degree_levels',[App\Http\Controllers\Admin\AdminController::class,'save_degree_levels'])->name('save_degree_levels');
Route::get('/edit_degree_levels/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_degree_levels'])->name('edit_degree_levels');
Route::post('/update_degree_levels',[App\Http\Controllers\Admin\AdminController::class,'update_degree_levels'])->name('update_degree_levels');
Route::get('/view_degree_levels/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_degree_levels'])->name('view_degree_levels');
Route::get('delete_degree_levels/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_degree_levels'])->name('delete_degree_levels');

//  DEGREE TYPE
Route::get('/add_degree_types', [App\Http\Controllers\Admin\AdminController::class, 'add_degree_types'])->name('add_degree_types');
Route::get('/list_degree_types', [App\Http\Controllers\Admin\AdminController::class, 'list_degree_types'])->name('list_degree_types');
Route::post('/save_degree_types',[App\Http\Controllers\Admin\AdminController::class,'save_degree_types'])->name('save_degree_types');
Route::get('/edit_degree_types/{id}',[App\Http\Controllers\Admin\AdminController::class,'edit_degree_types'])->name('edit_degree_types');
Route::post('/update_degree_types',[App\Http\Controllers\Admin\AdminController::class,'update_degree_types'])->name('update_degree_types');
Route::get('/view_degree_types/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_degree_types'])->name('view_degree_types');
Route::get('delete_degree_types/{id}',[App\Http\Controllers\Admin\AdminController::class,'delete_degree_types'])->name('delete_degree_types');

// MAJOR SUBJECT
Route::get('/add_major_subject', [App\Http\Controllers\Admin\AdminController::class, 'add_major_subject'])->name('add_major_subject');
Route::get('/list_major_subjects', [App\Http\Controllers\Admin\AdminController::class, 'list_major_subjects'])->name('list_major_subjects');
Route::get('/sort_major_subject', [App\Http\Controllers\Admin\AdminController::class, 'sort_major_subject'])->name('sort_major_subject');
Route::post('/save_major_subject', [App\Http\Controllers\Admin\AdminController::class, 'save_major_subject'])->name('save_major_subject');
Route::get('/edit_major_subject/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_major_subject'])->name('edit_major_subject');
Route::post('/update_major_subject', [App\Http\Controllers\Admin\AdminController::class, 'update_major_subject'])->name('update_major_subject');
Route::get('/view_major_subject/{id}',[App\Http\Controllers\Admin\AdminController::class,'view_major_subject'])->name('view_major_subject');
Route::get('/delete_major_subject/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_major_subject'])->name('delete_major_subject');

// RESULT TYPE
Route::get('/list_result_types', [App\Http\Controllers\Admin\AdminController::class, 'list_result_types'])->name('list_result_types');
Route::get('/add_new_type', [App\Http\Controllers\Admin\AdminController::class, 'add_new_type'])->name('add_new_type');
Route::get('/sort_result_types', [App\Http\Controllers\Admin\AdminController::class, 'sort_result_types'])->name('sort_result_types');
Route::post('/save_result_type', [App\Http\Controllers\Admin\AdminController::class, 'save_result_type'])->name('save_result_type');
Route::get('/edit_result_type/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_result_type'])->name('edit_result_type');
Route::get('/view_result_type/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_result_type'])->name('view_result_type');
Route::post('/update_result_type', [App\Http\Controllers\Admin\AdminController::class, 'update_result_type'])->name('update_result_type');
Route::get('/delete_result_type/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_result_type'])->name('delete_result_type');

// MARITAL STATUS
Route::get('/add_marital_status', [App\Http\Controllers\Admin\AdminController::class, 'add_marital_status'])->name('add_marital_status');
Route::get('/list_marital_status', [App\Http\Controllers\Admin\AdminController::class, 'list_marital_status'])->name('list_marital_status');
Route::get('/sort_marital_status', [App\Http\Controllers\Admin\AdminController::class, 'sort_marital_status'])->name('sort_marital_status');
Route::post('/save_marital_status', [App\Http\Controllers\Admin\AdminController::class, 'save_marital_status'])->name('save_marital_status');
Route::get('/view_marital_status/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_marital_status'])->name('view_marital_status');
Route::get('/edit_marital_status/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_marital_status'])->name('edit_marital_status');
Route::post('/update_marital_status', [App\Http\Controllers\Admin\AdminController::class, 'update_marital_status'])->name('update_marital_status');
Route::get('/delete_marital_status/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_marital_status'])->name('delete_marital_status');


// OWNERSHIP TYPE
Route::get('/list_ownership_types', [App\Http\Controllers\Admin\AdminController::class, 'list_ownership_types'])->name('list_ownership_types');
Route::get('/add_ownership_types', [App\Http\Controllers\Admin\AdminController::class, 'add_ownership_types'])->name('add_ownership_types');
Route::get('/sort_ownership_types', [App\Http\Controllers\Admin\AdminController::class, 'sort_ownership_types'])->name('sort_ownership_types');
Route::post('/save_ownership_types', [App\Http\Controllers\Admin\AdminController::class, 'save_ownership_types'])->name('save_ownership_types');
Route::get('/edit_ownership_types/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_ownership_types'])->name('edit_ownership_types');
Route::post('/update_ownership_types', [App\Http\Controllers\Admin\AdminController::class, 'update_ownership_types'])->name('update_ownership_types');
Route::get('/delete_ownership_types/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_ownership_types'])->name('delete_ownership_types');
Route::get('/view_ownership_types/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_ownership_types'])->name('view_ownership_types');


// SALARY PERIOD
Route::get('/list_salary_periods', [App\Http\Controllers\Admin\AdminController::class, 'list_salary_periods'])->name('list_salary_periods');
Route::get('/add_salary_periods', [App\Http\Controllers\Admin\AdminController::class, 'add_salary_periods'])->name('add_salary_periods');
Route::get('/sort_salary_periods', [App\Http\Controllers\Admin\AdminController::class, 'sort_salary_periods'])->name('sort_salary_periods');
Route::post('/save_salary_periods', [App\Http\Controllers\Admin\AdminController::class, 'save_salary_periods'])->name('save_salary_periods');
Route::get('/edit_salary_period/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_salary_period'])->name('edit_salary_period');
Route::post('/updatesalaryperiod', [App\Http\Controllers\Admin\AdminController::class, 'updatesalaryperiod'])->name('updatesalaryperiod');
Route::get('/deletesalaryperiod/{id}', [App\Http\Controllers\Admin\AdminController::class, 'deletesalaryperiod'])->name('deletesalaryperiod');
Route::get('/view_salary_periods/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_salary_periods'])->name('view_salary_periods');

Route::get('/sort_faqs', [App\Http\Controllers\Admin\AdminController::class, 'sort_faqs'])->name('sort_faqs');
Route::get('/sort_testimonial', [App\Http\Controllers\Admin\AdminController::class, 'sort_testimonial'])->name('sort_testimonial');
Route::get('/sort_slider', [App\Http\Controllers\Admin\AdminController::class, 'sort_slider'])->name('sort_slider');
Route::get('/sort_language', [App\Http\Controllers\Admin\AdminController::class, 'sort_language'])->name('sort_language');
Route::get('/sort_gender', [App\Http\Controllers\Admin\AdminController::class, 'sort_gender'])->name('sort_gender');
Route::get('/sort_industries', [App\Http\Controllers\Admin\AdminController::class, 'sort_industries'])->name('sort_industries');
Route::get('/sort_job_types', [App\Http\Controllers\Admin\AdminController::class, 'sort_job_types'])->name('sort_job_types');


Route::get('/states', [App\Http\Controllers\Admin\AdminController::class, 'states'])->name('states');
Route::post('/addstate', [App\Http\Controllers\Admin\AdminController::class, 'addstate'])->name('addstate');
Route::post('/updatestate', [App\Http\Controllers\Admin\AdminController::class, 'updatestate'])->name('updatestate');
Route::get('/deletestate/{id}', [App\Http\Controllers\Admin\AdminController::class, 'deletestate'])->name('deletestate');


Route::get('/cities', [App\Http\Controllers\Admin\AdminController::class, 'cities'])->name('cities');
Route::post('/addcity', [App\Http\Controllers\Admin\AdminController::class, 'addcity'])->name('addcity');
Route::post('/updatecity', [App\Http\Controllers\Admin\AdminController::class, 'updatecity'])->name('updatecity');
Route::get('/deletecity/{id}', [App\Http\Controllers\Admin\AdminController::class, 'deletecity'])->name('deletecity');


//industries
Route::get('/list_industries', [App\Http\Controllers\Admin\AdminController::class, 'list_industries'])->name('list_industries');
Route::get('/sort_industries', [App\Http\Controllers\Admin\AdminController::class, 'sort_industries'])->name('sort_industries');
Route::post('/save_industries', [App\Http\Controllers\Admin\AdminController::class, 'save_industries'])->name('save_industries');
Route::post('/add_industries', [App\Http\Controllers\Admin\AdminController::class, 'add_industries'])->name('add_industries');
Route::post('/update_industries', [App\Http\Controllers\Admin\AdminController::class, 'update_industries'])->name('update_industries');
Route::get('/delete_industries/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_industries'])->name('delete_industries');
Route::get('/edit_industries/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_industries'])->name('edit_industries');
Route::get('/view_industries/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_industries'])->name('view_industries');
//genders
Route::get('/list_genders', [App\Http\Controllers\Admin\AdminController::class, 'list_genders'])->name('list_genders');
Route::get('/view_genders/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_genders'])->name('view_genders');
Route::get('/sort_genders', [App\Http\Controllers\Admin\AdminController::class, 'sort_genders'])->name('sort_genders');
Route::post('/save_genders', [App\Http\Controllers\Admin\AdminController::class, 'save_genders'])->name('save_genders');
Route::get('/add_genders', [App\Http\Controllers\Admin\AdminController::class, 'add_genders'])->name('add_genders');
Route::post('/update_genders', [App\Http\Controllers\Admin\AdminController::class, 'update_genders'])->name('update_genders');
Route::get('/delete_genders/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_genders'])->name('delete_genders');
Route::get('/edit_genders/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_genders'])->name('edit_genders');
//packages
Route::get('/list_packages', [App\Http\Controllers\Admin\AdminController::class, 'list_packages'])->name('list_packages');
Route::get('/add_packages', [App\Http\Controllers\Admin\AdminController::class, 'add_packages'])->name('add_packages');
Route::get('/view_packages/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_packages'])->name('view_packages');
Route::get('/edit_packages/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_packages'])->name('edit_packages');
Route::get('/delete_packages/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_packages'])->name('delete_packages');
Route::post('/update_packages', [App\Http\Controllers\Admin\AdminController::class, 'update_packages'])->name('update_packages');
Route::post('/save_packages', [App\Http\Controllers\Admin\AdminController::class, 'save_packages'])->name('save_packages');
//Functional Areas
Route::get('/list_functional_areas', [App\Http\Controllers\Admin\AdminController::class, 'list_functional_areas'])->name('list_functional_areas');
Route::get('/add_functional_areas', [App\Http\Controllers\Admin\AdminController::class, 'add_functional_areas'])->name('add_functional_areas');
Route::get('/view_functional_areas/{id}', [App\Http\Controllers\Admin\AdminController::class, 'view_functional_areas'])->name('view_functional_areas');
Route::get('/edit_functional_areas/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_functional_areas'])->name('edit_functional_areas');
Route::get('/delete_functional_areas/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete_functional_areas'])->name('delete_functional_areas');
Route::post('/update_functional_areas', [App\Http\Controllers\Admin\AdminController::class, 'update_functional_areas'])->name('update_functional_areas');
Route::post('/save_functional_areas', [App\Http\Controllers\Admin\AdminController::class, 'save_functional_areas'])->name('save_functional_areas');

// <--AjaxController-->

Route::post('filter-default-cities-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterDefaultCities')->name('filter.default.cities.dropdown');
Route::post('filter-default-states-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterDefaultStates')->name('filter.default.states.dropdown');
Route::post('filter-lang-cities-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterLangCities')->name('filter.lang.cities.dropdown');
Route::post('filter-lang-states-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterLangStates')->name('filter.lang.states.dropdown');
Route::post('filter-cities-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterCities')->name('filter.cities.dropdown');
Route::post('filter-states-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterStates')->name('filter.states.dropdown');
Route::post('filter-degree-types-dropdown', '[App\Http\Controllers\Employer\AjaxController@filterDegreeTypes')->name('filter.degree.types.dropdown');
