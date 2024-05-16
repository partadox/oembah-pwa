<?php
namespace App\Controllers\FE;
use App\Controllers\BaseController;
class Customer extends BaseController
{
	public function index()
	{
        $data = [
            'title'         => "Oembah - Customer",
            'nav_active'    => "customer",
            'back'          => "",
        ];
        return view('page/customer',$data);
    }
}