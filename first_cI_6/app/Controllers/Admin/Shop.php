<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController ;


class Shop extends BaseController
{
	public function index()
	{
		//return view('shop');
		echo 'This tha Shop Admin Area';
    }
    
    public function product($type , $product_id)
	{
        
	   
	   echo 'This is an admin product' ;
	}

	//--------------------------------------------------------------------

}
