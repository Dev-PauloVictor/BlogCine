<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
                
                $this->load->library(['ion_auth', 'form_validation']);
                if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			redirect('auth', 'refresh');
		}
	}
        
        public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}
        
        public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}
        
        public function cadastro_livro()
	{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('post');
			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('Post');

			//$crud->required_fields('lastName');

			$crud->set_field_upload('url_imagem','assets/uploads/files');
                       
			$output = $crud->render();
                      //$output = $c->render();

			$this->_example_output($output);
	}
        
        
}
