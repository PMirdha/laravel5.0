<? php

namespace app\Http\Controllers;

use app\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function showWelcome()
	{
		return "In Controller now";
	}
}