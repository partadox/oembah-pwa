<?php
namespace App\Controllers\FE;
use App\Controllers\BaseController;
class Profile extends BaseController
{
	public function index()
	{
        $data = [
            'title'         => "Oembah - Profile",
            'nav_active'    => "profile",
            'back'          => "",
        ];
        return view('page/profile',$data);
    }
}