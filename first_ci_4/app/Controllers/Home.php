<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	function validation() {


		$shop = new Shop();
		echo $shop->product('latop', 'RADFS_tech0001');
	}

	//--------------------------------------------------------------------

}
