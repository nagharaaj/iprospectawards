<?php
class JudgingController extends AppController
{
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Judging');
		$this->set('currentPage', 'judging');
	}
}
