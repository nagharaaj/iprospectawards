<?php

App::uses('CakeEmail', 'Network/Email');
CakePlugin::load('Uploader');
App::import('Vendor', 'Uploader.Uploader');

class SubmissionController extends AppController
{
	public $uses = array('Submission');
	
	public function beforeRender()
	{
		$this->set('currentPage', 'submission');
	}
	
	public function form1($header)
	{
		if ($this->request->is('post'))
		{
			$this->Uploader = new Uploader();
			$this->Uploader->setup(array('tempDir' => TMP));
			
			if ($this->Submission->save($this->request->data))
			{
				if ($data = $this->Uploader->uploadAll())
				{
					$email = new CakeEmail();
					$email->viewVars(array('type' => $header, 'data' => $this->data, 'uploadData' => $data));
					$email->template('form1', 'default')
					    ->emailFormat('text')
					    ->to('peters.robert.j@gmail.com')
					    ->from(array('donotreply@localhost.com' => 'IPG Award Submission'))
					    ->send();
				}
			}
		}
		
		$this->set('header', $header);
	}
}