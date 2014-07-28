<?php
class CategoriesController extends AppController
{
	public function index()
	{
		$this->set('title_for_layout', 'IPG Awards - Categories');
		$this->set('currentPage', 'categories');
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
