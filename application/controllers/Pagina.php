<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

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
    
    
	public function index()
	{
                $data['titulo'] = 'Inicio';
                
		$this->load->view('template/topo', $data);
              $postagens =  $this->db->get('post')->result();
                //echo 'quantidade post:'.count($postagens);
               $data['postagens'] = $postagens;
                $this->load->view('home',$data);
                
	}
        public function Post($id = FALSE)
	{
             //echo $id;
            
                $data['titulo'] = 'Blog Cine - Postagem';
            
                
            IF($id != FALSE){
           
                
              $post =  $this->db->get_where('post',array ('id' => $id))->row();
                // print_r($post);
                 
                     $data['postagem'] = $post;
       
            }
                    $this->load->view('template/post',$data);
         
	}
        public function Sobre()
	{
                $data['titulo'] = 'Sobre';
                $this->load->view('template/topo', $data);
                $this->load->view('sobre',$data);
            
	}
        public function Contato()
	{
                $data['titulo'] = 'Contato';
		$this->load->view('template/topo', $data);
                $this->load->view('contato',$data);
	}
          public function Cadastro()
	{
                $data['titulo'] = 'Cadastro';
		$this->load->view('template/topo', $data);
                $this->load->view('cadastro',$data);
	}
          public function Login()
	{
                $data['titulo'] = 'Login';
		$this->load->view('template/topo', $data);
                $this->load->view('login',$data);
	}
          public function Teorias()
	{
                $data['titulo'] = 'Teorias';
		$this->load->view('template/topo', $data);
                $this->load->view('teorias',$data);
	}
         public function Criticas()
	{
                $data['titulo'] = 'Criticas';
		$this->load->view('template/topo', $data);
                $this->load->view('criticas',$data);
	}
          public function Temos()
	{
                $data['titulo'] = 'Politias de Uso';
		$this->load->view('template/topo', $data);
                $this->load->view('temos',$data);       
	}
 
        public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }
    
}
