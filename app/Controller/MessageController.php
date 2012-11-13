<?php
class MessageController extends AppController
{
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Message');
		$this->set('currentPage', 'message');
	}
}
