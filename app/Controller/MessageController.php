<?php
class MessageController extends AppController
{
	public function index()
	{
		$this->set('currentPage', 'message');
	}
}