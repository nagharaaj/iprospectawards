<?php
class AwardsController extends AppController
{
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Awards');
		$this->set('currentPage', 'awards');
	}
}
