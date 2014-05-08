<?php
	class Main extends CI_Controller{
	
		public function index(){
			$layout['header'] = $this->load->view('header',"",true);
			$layout['content'] = $this->load->view('home',"",true);
			
			
			$this->load->view("layout",$layout);
			
		
		
		}
	
	
	}




?>