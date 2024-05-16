<?php
namespace App\Controllers\FE;
use App\Controllers\BaseController;
class Auth extends BaseController
{
	public function login()
	{
        $data = [
            'title'         => "Oembah - Login",
            'nav_active'    => "dashboard",
        ];
        return view('page/login',$data);
    }

    public function otp_validation()
	{
        $data = [
            'title'         => "Oembah - OTP Verification",
            'nav_active'    => "dashboard",
        ];
        return view('page/otp',$data);
    }

    public function register()
	{
        $data = [
            'title'         => "Oembah - Daftar",
            'nav_active'    => "dashboard",
        ];
        return view('page/register',$data);
    }
}