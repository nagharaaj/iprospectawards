<?php

App::uses('CakeEmail', 'Network/Email');
App::uses('Xml', 'Utility');
App::uses('File', 'Utility');
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
					$email = new CakeEmail('gmail');
					$email->viewVars(array('title_for_layout' => 'IPG Submission', 'type' => $header, 'data' => $this->data, 'uploadData' => $data));
					$email->template('form1', 'default')
					    ->emailFormat('html')
					    ->to(array('Amanda.DuBois@iprospect.com'))
					    ->from(array('awards@iprospectawards.com' => 'IPG Award Submission'))
					    ->subject('IPG Award Submission')
					    ->send();
					
                                        $this->xmlGeneration($this->data, $data, $header);
                                        
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
					$email = new CakeEmail('gmail');
					$email->viewVars(array('title_for_layout' => 'IPG Submission', 'type' => $header, 'data' => $this->data, 'uploadData' => $data));
					$email->template('form2', 'default')
					    ->emailFormat('html')
					    ->to(array('Amanda.DuBois@iprospect.com'))
					    ->from(array('awards@iprospectawards.com' => 'IPG Award Submission'))
					    ->subject('IPG Award Submission')
					    ->send();
					
                                        $this->xmlGeneration($this->data, $data, $header);
                                        
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
        
        protected function xmlGeneration($data, $uploadData, $header) {
                if(!empty($data)) {
                        
                        $arrXml = array();
                        if($header == 'cultivating') {

                                $arrXml['award-info']['name'] = $data['Cultivate']['first_name'] . ' ' . $data['Cultivate']['last_name'];
                                $arrXml['award-info']['email'] = $data['Cultivate']['email_address'];
                                $arrXml['award-info']['country'] = $data['Cultivate']['country'];
                                $arrXml['award-info']['client'] = $data['Cultivate']['who'];
                                $arrXml['award-info']['client-email'] = $data['Cultivate']['their_email'];
                                $arrXml['award-info']['client-country'] = $data['Cultivate']['their_country'];

                                $description = array();
                                $description['para'][] = array('title' => 'How do you think the employee is driving our corporate culture?', 'detail' => nl2br($data['Cultivate']['driving']));
                                $description['para'][] = array('title' => 'What examples can you provide that illustrate the positive impact on our culture, the employee is having?', 'detail' => nl2br($data['Cultivate']['examples']));
                                $description['para'][] = array('title' => 'How does the attitude of the employee affect the peers around them?', 'detail' => nl2br($data['Cultivate']['attitude']));
                                $arrXml['award-info']['description'] = $description;
                                
                                $visual = array();
                                if (isset($uploadData['picture1']) && !empty($uploadData['picture1']['path'])) {
                                        $visual['source'][] = 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['picture1']['path'];
                                }
                                if (isset($uploadData['picture2']) && !empty($uploadData['picture2']['path'])) {
                                        $visual['source'][] = 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['picture2']['path'];
                                }
                                if (isset($uploadData['picture3']) && !empty($uploadData['picture3']['path'])) {
                                        $visual['source'][] = 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['picture3']['path'];
                                }
                                $arrXml['award-info']['visual'] = $visual;
                        } else {

                                $arrXml['award-info']['name'] = $data['Submission']['first_name'] . ' ' . $data['Submission']['last_name'];
                                $arrXml['award-info']['team'] = $data['Submission']['team_name'];
                                $arrXml['award-info']['email'] = $data['Submission']['email_address'];
                                $arrXml['award-info']['country'] = $data['Submission']['country'];
                                
                                if ($header == 'pioneering' && !empty($data['Submission']['budget'])) { 
                                        $arrXml['award-info']['budget'] = ucfirst($data['Submission']['budget']) . ' Budget';
                                }

                                if ($header == 'digital' && !empty($data['Submission']['scale'])) {
                                        $arrXml['award-info']['scale'] = ucfirst($data['Submission']['scale']) . ' Scale';
                                }

                                if ($header == 'vertical' && !empty($data['Submission']['vertical'])) {
                                        $arrXml['award-info']['vertical'] = (($data['Submission']['vertical'] == 'finance') ? 'Finance/Insurance' : (($data['Submission']['vertical'] == 'b2b') ? 'B2B' : ''));
                                }

                                if ($header == 'service' && !empty($data['Submission']['service'])) {
                                        $arrXml['award-info']['service'] = (($data['Submission']['service'] == 'mobile') ? 'Mobile' : (($data['Submission']['service'] == 'content') ? 'Content Generation' : ''));
                                }
                                $arrXml['award-info']['client'] = $data['Submission']['client_name'];
                                
                                $description = array();
                                $services = '';
                                if (isset($data['Submission']['seo']) && !empty($data['Submission']['seo'])) {
                                        $services .= 'SEO, ';
                                }
                                if (isset($data['Submission']['ppc_sem_sea']) && !empty($data['Submission']['ppc_sem_sea'])) {
                                        $services .= 'PPC/SEM/SEA, ';
                                }
                                if (isset($data['Submission']['mobile']) && !empty($data['Submission']['mobile'])) {
                                        $services .= 'Mobile, ';
                                }
                                if (isset($data['Submission']['video']) && !empty($data['Submission']['video'])) {
                                        $services .= 'Video, ';
                                }
                                if (isset($data['Submission']['structured_data']) && !empty($data['Submission']['structured_data'])) {
                                        $services .= 'Structured Data, ';
                                }
                                if (isset($data['Submission']['social_platform_management']) && !empty($data['Submission']['social_platform_management'])) {
                                        $services .= 'Social Platform Management, ';
                                }
                                if (isset($data['Submission']['display_advertising']) && !empty($data['Submission']['display_advertising'])) {
                                        $services .= 'Display Advertising, ';
                                }
                                if (isset($data['Submission']['analytics_and_analysis']) && !empty($data['Submission']['analytics_and_analysis'])) {
                                        $services .= 'Analytics and Analysis, ';
                                }
                                if (isset($data['Submission']['content_generation']) && !empty($data['Submission']['content_generation'])) {
                                        $services .= 'Content Generation, ';
                                }
                                if (isset($data['Submission']['affiliate_program_management']) && !empty($data['Submission']['affiliate_program_management'])) {
                                        $services .= 'Affiliate Program Management, ';
                                }
                                if (isset($data['Submission']['conversion_optimization']) && !empty($data['Submission']['conversion_optimization'])) {
                                        $services .= 'Conversion Optimization, ';
                                }
                                if (isset($data['Submission']['other_text']) && !empty($data['Submission']['other_text'])) {
                                        $services .= 'Other: '.$data['Submission']['other_text'];
                                }
                                $description['para'][] = array('title' => 'Service Lines:', 'detail' => $services);

                                $description['para'][] = array('title' => 'Overall Summary:', 'detail' => nl2br($data['Submission']['overall_summary']));
                                $description['para'][] = array('title' => 'Challenge/Objective:', 'detail' => nl2br($data['Submission']['challenge']));
                                $description['para'][] = array('title' => 'Strategy/Tactics:', 'detail' => nl2br($data['Submission']['strategy']));
                                $description['para'][] = array('title' => 'Results/Solutions:', 'detail' => nl2br($data['Submission']['results']));
                        
                                $arrXml['award-info']['description'] = $description;
                                
                                $visual = array();
                                if (isset($uploadData['storyboard']) && !empty($uploadData['storyboard']['path'])) {
                                        $visual['source'][] = 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['storyboard']['path'];
                                }
                                if (isset($uploadData['ppt']) && !empty($uploadData['ppt']['path'])) {
                                        $visual['source'][] = 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['ppt']['path'];
                                }
                                if (isset($uploadData['video']) && !empty($uploadData['video']['path'])) {
                                        $visual['source'][] = 'http://'.rtrim(rtrim($_SERVER['HTTP_HOST'], '/'), '/').$uploadData['video']['path'];
                                }
                                $arrXml['award-info']['visual'] = $visual;
                        }
                        
                        $xmlObject = Xml::fromArray($arrXml, 'tags');
                        $xmlString = $xmlObject->asXML();
                        
                        $file = new File(WWW_ROOT . 'files/awards/' . $header . '_' . $arrXml['award-info']['name'] . '_' . $arrXml['award-info']['country'] . '_' . $arrXml['award-info']['client'] . '.xml', true);
                        $file->append($xmlString);
                        $file->close();
                }
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
