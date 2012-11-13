<?php
class HomeController extends AppController
{
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Home');
		$this->set('currentPage', 'home');
	}
}
