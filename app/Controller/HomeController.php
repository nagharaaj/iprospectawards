<?php
class HomeController extends AppController
{
	public function index()
	{
		$this->set('currentPage', 'home');
	}
}