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

    public function checkemail( Request $request ) {
        $email = trim( $request->email );
        $id = trim( $request->id );
        if ( $id == 0 ) {
            $sql = "SELECT * FROM users where email='$email'";
        } else {
            $sql = "SELECT * FROM users where email='$email' and id <> $id";
        }
        $users = DB::select($sql);
        if ( count( $users ) > 0 ) {
            return response()->json( array( 'exists' => true ) );
        } else {
            return response()->json( array( 'exists' => false ) );
        }
    }

    public function checkphone( Request $request ) {
        $phone = trim( $request->phone );
        $id = trim( $request->id );
        if ( $id == 0 ) {
            $sql = "SELECT * FROM users where phone='$phone'";
        } else {
            $sql = "SELECT * FROM users where phone='$phone' and id <> $id";
        }
        $users = DB::select( $sql);
        if ( count( $users ) > 0 ) {
            return response()->json( array( 'exists' => true ) );
        } else {
            return response()->json( array( 'exists' => false ) );
        }
    }


}