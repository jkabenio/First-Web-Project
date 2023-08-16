<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class DashboardController extends Controller
{
   public function index()
   {
     $posts = Post::count();
     $employer = User::where('role_as','0')->count();
     $admins = User::where('role_as','1')->count();
     $vinzons_admins = User::where('role_as','2')->count();
     $talisay_admins = User::where('role_as','3')->count();
     $sta_elena_admins = User::where('role_as','4')->count();
     $san_vicente_admins = User::where('role_as','5')->count();
     $san_lorenzo_admins = User::where('role_as','6')->count();
     $paracale_admins = User::where('role_as','7')->count();
     $mercedes_admins = User::where('role_as','8')->count();
     $labo_admins = User::where('role_as','9')->count();
     $panganiban_admins = User::where('role_as','10')->count();
     $daet_admins = User::where('role_as','11')->count();
     $capalonga_admins = User::where('role_as','12')->count();
     $basud_admins = User::where('role_as','13')->count();
     $municipality_admins = $vinzons_admins + $talisay_admins + $sta_elena_admins + $san_vicente_admins + $san_lorenzo_admins + $paracale_admins + $mercedes_admins + $labo_admins + $panganiban_admins + $daet_admins + $capalonga_admins + $basud_admins;
     return view('admin.dashboard',compact('posts','employer','admins','municipality_admins'));
   }
}
