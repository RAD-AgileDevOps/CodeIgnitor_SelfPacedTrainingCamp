<?php namespace App\Controllers;

class Shop extends BaseController
{
	public function index()
	{
		return view('shop');
    }
    
    public function product($type , $id)
	{
        // return view('product');
        
        // echo '<h3>This a product: '.$type. '</h3>'  ;
        echo '<h3>This a product: '.$type.'with ID: '.$id. '</h3>'  ;
	}

	//--------------------------------------------------------------------

}
