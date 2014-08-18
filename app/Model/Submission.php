<?php

class Submission extends AppModel {
	
	public $useTable = false;
	
	public $validate = array(
        'first_name' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'First name is required'
        ),
        'last_name' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Last name is required'
        ),
        'email_address' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Email address is required'
        ),
        'country' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Country is required'
        ),
        'client_name' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Client name is required'
        ),
        'files_submission' => array(
            'message' => 'You must submit at least one file'
        )
    );
    
    public $other = array(
    	'other_text' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Text required when "other" is selected'
        )
    );
    
    public $budget = array(
        'budget' => array(
                        'allowEmpty' => false,
                        'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Select budget size larger or smaller'
        )
    );

    public $scale = array(
        'scale' => array(
                        'allowEmpty' => false,
                        'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Select scale larger or smaller'
        )
    );

    public $vertical = array(
        'vertical' => array(
                        'allowEmpty' => false,
                        'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Select Vertical Spotlight'
        )
    );

    public $service = array(
        'service' => array(
                        'allowEmpty' => false,
                        'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Select Service Spotlight'
        )
    );

    public function beforeValidate()
    {
    	if (!empty($this->data[$this->name]['other']))
    	{
    		$this->validate = array_merge($this->validate, $this->other);
    	}
        
        if ($this->data[$this->name]['header'] == 'pioneering') {
                $this->validate = array_merge($this->validate, $this->budget);
        }

        if ($this->data[$this->name]['header'] == 'digital') {
                $this->validate = array_merge($this->validate, $this->scale);
        }

        if ($this->data[$this->name]['header'] == 'vertical') {
                $this->validate = array_merge($this->validate, $this->vertical);
        }

        if ($this->data[$this->name]['header'] == 'service') {
                $this->validate = array_merge($this->validate, $this->service);
        }
        
    	if (
    		empty($this->data[$this->name]['overall_summary']) && 
    		empty($this->data[$this->name]['challenge']) &&
    		empty($this->data[$this->name]['strategy']) &&
    		empty($this->data[$this->name]['results']) 
    	)
    	{
    		$this->invalidate('word_submission', 'You must fill out at least one word submission');
    	}

    	if(
	    	empty($this->data[$this->name]['storyboard']['tmp_name']) && 
	    	empty($this->data[$this->name]['ppt']['tmp_name']) && 
	    	empty($this->data[$this->name]['video']['tmp_name'])
	    )
	    {
	        $this->invalidate('files_submission', $this->validate['files_submission']['message']);
	    }
    	
    	return true;
    }
}
