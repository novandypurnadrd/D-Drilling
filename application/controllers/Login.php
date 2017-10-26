<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function Login(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('User_model');
		$this->load->library('session');
	}

	public function Index(){

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$check = $this->User_model->GetUser($username, $password);
		
		if ($check) {
			foreach ($check as $key => $data) {
					$data_session = array(
              'id' => $data->id,
							'usernameDrilling'=>$data->username,
							'passwordDrilling'=>$this->input->post('password'),
							'roleDrilling'=>$data->role,
							'nameDrilling'=>$data->name,
							'Drilling'=>"1",
						);

			}
            
			$this->session->set_userdata($data_session);
			redirect('Drilling');

		}else {
			$data['message'] = 'Wrong username or password';
			$this->load->view('index', $data);
		}
	}

}
?>
