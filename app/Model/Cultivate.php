<?php

class Cultivate extends AppModel {
	
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
        'who' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Who you are submitting this for is required'
        ),
        'their_email' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Their Email Address is required'
        ),
        'their_country' => array(
			'allowEmpty' => false,
			'required' => true,
            'rule'    => array('minLength', '1'),
            'message' => 'Their country is required'
        ),
        'files_submission' => array(
            'message' => 'You must submit at least one file'
        )
    );
    
    public function beforeValidate()
    {    	
    	if (
    		empty($this->data[$this->name]['driving']) && 
    		empty($this->data[$this->name]['examples']) &&
    		empty($this->data[$this->name]['attitude'])
    	)
    	{
    		$this->invalidate('word_submission', 'You must fill out at least one word submission');
    	}    	

	if (
            str_word_count($this->data[$this->name]['driving']) > 175 ||
            str_word_count($this->data[$this->name]['examples']) > 175 ||
            str_word_count($this->data[$this->name]['attitude'])  > 175
        )
        {
            $this->invalidate('word_submission', 'You have entered more than 175 words in a submission');
        }
    	
    	return true;
    }
}
