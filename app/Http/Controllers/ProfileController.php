<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\DataTables\productUserDataTable;
class ProfileController extends Controller
{
     // profile view
     public function index(productUserDataTable $dataTable)
     {
         
         return $dataTable->render("profile.index");
     }
 
     
     public function changePassword(Request $request)
     {
         return view('profile.changePassword');
     }
  
     public function changePasswordSave(Request $request)
     {
         
         $this->validate($request, [
             'current_password' => 'required|string|password',
             'new_password' => 'required|confirmed|min:8|string'
         ]);
         $auth = Auth::user();
  
         // The passwords matches
         if (!Hash::check($request->get('current_password'), $auth->password)) 
         {
             return back()->with('error', "Current Password is Invalid");
         }
  
         // Current password and new password same
         if (strcmp($request->get('current_password'), $request->new_password) == 0) 
         {
             return redirect()->back()->with("error", "New Password cannot be same as your current password.");
         }
  
         $user =  User::find($auth->id);
         $user->password =  Hash::make($request->new_password);
         $user->save();
         return back()->with('success', "Password Changed Successfully");
     }
     public function checkprofile(){
       
            return redirect()->route('dash.info');
     
       
     }
     public function dashInfo(){
        $productCount = Product::all()->count();
        $userCount = User::all()->count();
        $authuserCount = User::where("code",null)->count();
        $adminCount = User::where('user_type','admin')->count();

        return view('Admin.dashbord',compact('productCount','userCount','adminCount','authuserCount'));
    }

}
