<?php
class SubmissionController extends AppController
{
	public $uses = array('Submission');
	
	public function beforeRender()
	{
		$this->set('currentPage', 'submission');
	}
	
	public function form1()
	{
		if ($this->request->is('post'))
		{
			var_dump($this->data);
			if (isset($this->data['Submission']['storyboard']['tmp_name']))
			{
				echo $this->data['Submission']['storyboard']['tmp_name'];
			}
			
			if ($this->Submission->save($this->request->data))
			{
				
			}
		}
	}
}