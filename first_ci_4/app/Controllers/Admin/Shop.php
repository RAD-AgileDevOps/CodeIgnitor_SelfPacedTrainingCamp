<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController ;


class Shop extends BaseController
{
	public function index()
	{
		//return view('shop');
		echo 'This tha Shop Admin Area';
    }
    
    public function product($type , $id)
	{
        // return view('product');
        
        // echo '<h3>This a product: '.$type. '</h3>'  ;
	   // echo '<h3>This a product: '.$type.'with ID: '.$id. '</h3>'  ;
	   
	   echo 'This is an admin product' ;
	}

	//--------------------------------------------------------------------

}
