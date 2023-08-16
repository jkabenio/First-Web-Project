<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
//     public function index(Request $request){
//         $info = [];
//         return view('remember_me.login', $info);
//     }

//     public function verify(Request $request){
//         $credential = [
//             'email' => $request->email,
//             'password' => $request->password,
//         ];

//         $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;

      
// if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
//     // The user is being remembered...
            
//             Auth::login($user, $remember_me);

//             return redirect(route('dashboard'));
//         }
//     }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $users){
        if(Auth::user()->role_as=='1'){
            return redirect ('/admin/dashboard')->with('success', 'welcome to Admin Dashboard');
        }
        
        else  if(Auth::user()->role_as =='13')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='12')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='11')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Daet Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='10')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='9')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='8')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='7')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='6')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='5')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='4')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        else  if(Auth::user()->role_as =='3')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Panganiban Admin Logged In Successful');
        }
        
        else  if(Auth::user()->role_as =='2')
        {
            return redirect ('/municipalityadmin/municipalityadmindashboard')->with('success', 'Logged In Successful');
        }
        else  if(Auth::user()->role_as =='14')
        {
            return redirect ('/home')->with('success', 'Logged In Successful');
        }
        else  if(Auth::user()->role_as =='0')
        {
            return redirect ('/home')->with('success', 'Logged In Successful');
        }
       else
       {
           return redirect('/');
       }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
