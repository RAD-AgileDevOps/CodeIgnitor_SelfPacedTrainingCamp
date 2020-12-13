<?php namespace App\Controllers;


use App\Controllers\Admin\Shop	as AdminShop ;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	function validation() {


		$shop = new Shop();
		echo $shop->product('Laptop', 'RADFS_tech0001') .'<br>';  	 	

		$AdminShop = new AdminShop() ;
		echo $AdminShop->product('movies', 'thrillers') ;

	}

	//--------------------------------------------------------------------

}
