<?php

namespace Controller\Front\Board;

use App;

class TeamRankController extends \Controller\Front\Controller
{
	public function index()
	{
		App::render("board/team_rank");
	}
}