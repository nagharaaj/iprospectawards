<?php
class CategoriesController extends AppController
{
	public function index()
	{
		$this->set('currentPage', 'categories');
	}
}