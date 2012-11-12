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
    );
    
    public $other = array(
    	'other_text' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Text required when "other" is selected'
        )
    );
    
    public function beforeValidate()
    {
    	if (!empty($this->data[$this->name][strtolower($this->name)]['other']))
    	{
    		$this->validate = array_merge($this->validate, $this->other);
    	}
    	
    	if (
    		empty($this->data[$this->name][strtolower($this->name)]['overall_summary']) && 
    		empty($this->data[$this->name][strtolower($this->name)]['challenge']) &&
    		empty($this->data[$this->name][strtolower($this->name)]['strategy']) &&
    		empty($this->data[$this->name][strtolower($this->name)]['results']) 
    	)
    	{
    		$this->invalidate('word_submission', 'You must fill out at least one word submission');
    	}
    	
    	return true;
    }
}