<?php
namespace App\Controllers\FE;
use App\Controllers\BaseController;
class Dashboard extends BaseController
{
	public function index()
	{
        $data = [
            'title'         => "Oembah - Dashboard",
            'nav_active'    => "dashboard",
            'back'          => "",
        ];
        return view('page/dashboard',$data);
    }
}