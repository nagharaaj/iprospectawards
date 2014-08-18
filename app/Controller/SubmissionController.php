<?php

App::uses('CakeEmail', 'Network/Email');
CakePlugin::load('Uploader');
App::import('Vendor', 'Uploader.Uploader');

class SubmissionController extends AppController
{
	public $uses = array('Submission', 'Cultivate');
        public $categories = array(
            'pioneering' => 'Pioneering Solutions that Drive Industry Leading Results',
            'ambitiously' => 'Ambitiously Driving the Dentsu Aegis Operating Model',
            'digital' => 'Multi-Market Digital Performance',
            'cultivating' => 'Cultivating Culture',
            'vertical' => 'Vertical Spotlight',
            'service' => 'Service Spotlight'
        );
	
	public function beforeRender()
	{
		$this->set('currentPage', 'submission');
	}
	
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Submission');
	}
	
	public function form1($header)
	{
		$this->set('title_for_layout', 'IPG Awards - Submission - '.ucfirst($header));

		if ($this->request->is('post'))
		{
			$this->Uploader = new Uploader();
			$this->Uploader->setup(array('tempDir' => TMP));
			
			if ($this->Submission->save($this->request->data))
			{
				if ($data = $this->Uploader->uploadAll())
				{
					$email = new CakeEmail();
					$email->viewVars(array('title_for_layout' => 'IPG Submission', 'type' => $header, 'data' => $this->data, 'uploadData' => $data));
					$email->template('form1', 'default')
					    ->emailFormat('html')
					    ->to(array('Amanda.Dubois@Iprospect.com','nathan.barling@gmail.com','nathan.barling@iprospect.com'))
					    ->from(array('awards@iprospectawards.com' => 'IPG Award Submission'))
					    ->subject('IPG Award Submission')
					    ->send();
					    
					$this->redirect(array('action' => 'success'));
				}
			}
		}
		
		$this->set('header', $header);
                $this->set('category', $this->categories[$header]);
	}
	
	public function form2($header)
	{
		 $this->set('title_for_layout', 'IPG Awards - Submission - '.ucfirst($header));

		if ($this->request->is('post'))
		{
			$this->Uploader = new Uploader();
			$this->Uploader->setup(array('tempDir' => TMP));
			
			if ($this->Cultivate->save($this->request->data))
			{
				if ($data = $this->Uploader->uploadAll())
				{
					$email = new CakeEmail();
					$email->viewVars(array('title_for_layout' => 'IPG Submission', 'type' => $header, 'data' => $this->data, 'uploadData' => $data));
					$email->template('form2', 'default')
					    ->emailFormat('html')
					    ->to(array('Amanda.Dubois@Iprospect.com','nathan.barling@gmail.com'))
					    ->from(array('noreply@iprospectawards.com' => 'IPG Award Submission'))
					    ->subject('IPG Award Submission')
					    ->send();
					
					$this->redirect(array('action' => 'success'));
				}
			}
		}
		
		$this->set('header', $header);
                $this->set('category', $this->categories[$header]);
	}
	
	public function success()
	{
		
	}
        
        public function submission_criteria() {
                $this->layout = 'ajax';
                $requestVars = $this->parseRequestVars();

                $this->set('title_for_layout', 'IPG Awards - Categories Submission Criteria');
		if (isset($requestVars['category'])) {
                        $this->set('category', $requestVars['category']);
                } else {
                        $this->set('category', null);
                }
        }
        
        public function parseRequestVars()
        {
            $requestVars = array();

            if (isset($this->params['pass']) && !empty($this->params['pass']))
            {
                for ($i = 0; $i < count($this->params['pass']); $i = $i+2 )
                {
                    $requestVars[$this->params['pass'][$i]] = $this->params['pass'][$i+1];
                }
            }

            return $requestVars;
        }
}
