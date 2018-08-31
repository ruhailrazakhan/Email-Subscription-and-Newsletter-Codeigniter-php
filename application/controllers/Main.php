<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  function __construct() {
        parent::__construct();
		$this->load->helper('cookie');
		$this->load->library('form_validation');
    }
	public function index()
	{
		$check_cookie_dialog_time = $this->check_cookie_dialog_time();
		if($check_cookie_dialog_time){
			$data['subscription_dialog_box']  = $this->load->view('subscription_dialog_box','',TRUE);
		}
		$this->load->view('home',$data);
	}
	public function dialog_box(){
		$this->load->view('subscription_dialog_box.php');
	}
	public function check_cookie_dialog_time(){
		//delete_cookie('seen_dialog');exit;
		$getcookie = get_cookie('seen_dialog');
		//var_dump($getcookie );
		 if(empty($getcookie)){

			$cookie = array(
						'name'   => 'seen_dialog',
						'value'  => 'No',
						'expire' => '3600',
						'secure' => FALSE
						);
			set_cookie($cookie);
			$getcookie = get_cookie('seen_dialog');
			//var_dump($getcookie );
			return true; // Cookie Is Set Now

		}elseif(!empty($getcookie) && $getcookie == "Yes"){
			return false; // Is Seen
		}elseif(!empty($getcookie) && $getcookie == "No"){
			return true;  // Cookie Is Not Set Need Nothing
		}
	}
	public function update_seen_dialog(){
		delete_cookie('seen_dialog');
		$cookie = array(
			'name'   => 'seen_dialog',
			'value'  => 'Yes',
			'expire' => '3600',
			'secure' => FALSE
			);
		set_cookie($cookie);
		$getcookie = get_cookie('seen_dialog');
		//var_dump($getcookie );
	}
  public function save_subscription(){
	 $this->load->model('Subscription_model');
	 $this->form_validation->set_rules('email', 'Email address', 'required|is_unique[email_list.email_address]','Error Sucks');
	 $this->form_validation->set_message('is_unique', 'The %s is already in subscription lists'); // Custome Message
	 if ($this->form_validation->run() == FALSE)
	 {
			 echo  form_error('email', '<div class="error">', '</div>'); 
	 }
	 else
	 {
			 $email  = $this->input->post('email');
			 $this->Subscription_model->save_subscription_email($email);
	 }

   

  }
}
