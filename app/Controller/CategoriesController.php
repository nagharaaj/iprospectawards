<?php
class CategoriesController extends AppController
{
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Categories');
		$this->set('currentPage', 'categories');
	}
}
