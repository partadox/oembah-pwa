<?php
namespace App\Controllers\FE;
use App\Controllers\BaseController;
class Order extends BaseController
{
	public function index()
	{
        $data = [
            'title'         => "Oembah - Order",
            'nav_active'    => "order",
            'back'          => "",
        ];
        return view('page/order',$data);
    }

    public function new()
	{
        $data = [
            'title'         => "Oembah - Order Baru",
            'nav_active'    => "order",
            'back'          => "dashboard",
        ];
        return view('page/order-new',$data);
    }
}