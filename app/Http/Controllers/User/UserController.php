<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;

class UserController extends Controller{

    public function index(){
        return view( 'user/index');
    }  

    public function jobs(){
        return view( 'user/jobs');
    }  

    public function about_us(){
        return view( 'user/about_us');
    }  

    public function companies(){
        return view( 'user/companies');
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

    public function  company_detail(){
        return view( 'user/company_detail');
    }



}



