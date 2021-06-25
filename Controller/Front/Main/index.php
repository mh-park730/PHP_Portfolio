<?php

namespace Controller\Front\Main;

use App;

class IndexController extends \Controller\Front\Controller
{
	public function index()
	{
		$list = getLatestPosts("news", "이적", 5, true);
		$list2 = getLatestPosts("community", null, 5, true);

		
		App::render("Menus/main");
	}
}