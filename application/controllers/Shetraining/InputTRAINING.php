<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InputTRAINING extends CI_Controller {

	public function InputTRAINING(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Shetraining_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "InputShetraining";
				$data['dateInformationStart'] = "";
       			$data['dateInformationEnd'] = "";
       			$Date="";
       			$start="";
       			$end="";
       			$data['Training'] = $this->Shetraining_model->ViewTraining($start,$end);
		        $this->load->view('Shetraining/InputTRAINING',$data);
    }else {
			redirect(base_url());
    }
	}

	public function Insert(){
		if ($this->session->userdata('Drilling')){

			$Date = $this->input->post('date');
			$Trainingtitle = $this->input->post('trainingtitle');
			$Instructor = $this->input->post('instructor');
			$Venue = $this->input->post('venue');
			$Trainee = $this->input->post('trainee');
			$Comment = $this->input->post('comment');

			$start = $Date;
			$end = $Date;
			
			$start = explode('-',$Date)[1].'/'.explode('-',$Date)[2].'/'.explode('-',$Date)[0];
			$end = explode('-',$Date)[1].'/'.explode('-',$Date)[2].'/'.explode('-',$Date)[0];
		
			$data['main'] = "InputShetraining";
			$data['dateInformationStart'] = $start;
       		$data['dateInformationEnd'] = $end;
			$Training = array(
    			'date' => $Date,
    			'trainingtitle' => $Trainingtitle,
    			'instructor' => $Instructor,
    			'venue' => $Venue,
    			'trainee' => $Trainee,
    			'comment' => $Comment,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

			$this->Shetraining_model->insertTraining($Training);

			
       
			$data['Training'] = $this->Shetraining_model->ViewTraining($Date,$Date);

			$this->load->view('Shetraining/InputTRAINING',$data);
		}else{
			$data['message'] = '';
			$this->load->view('Index', $data);
		}
	}

	public function ViewReport(){
    if ($this->session->userdata('Drilling')) {
    	$data['main'] = "Shetraining";
    	
     	
				$data['dateInformationStart'] = $this->input->post('start');
       			$data['dateInformationEnd'] = $this->input->post('end');

      $startdate = $this->input->post('start');
      $finishdate = $this->input->post('end');
	
     
      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
      	
    
      $data['Training'] = $this->Shetraining_model->ViewTraining($start,$end);

      $this->load->view('Shetraining/InputTRAINING',$data);
    }
    else {
      redirect(base_url());
    }
  }

  public function Delete_multiple_Training()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Shetraining_model->DeleteMultipleTraining();
				$data['main'] = "Shetraining";
    	
     			
				$data['dateInformationStart'] = $this->input->post('dateTrainingStart');
       			$data['dateInformationEnd'] = $this->input->post('dateTrainingEnd');;
       		

      $startdate = $this->input->post('dateTrainingStart');
      $finishdate = $this->input->post('dateTrainingEnd');


      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
  	
     
    
      $data['Training'] = $this->Shetraining_model->ViewTraining($start,$end);

       $this->load->view('Shetraining/InputTRAINING',$data);
		}else {
			redirect(base_url());
		}
	}

	public function pageUpdate($id){
    if ($this->session->userdata('Drilling')) {
        $data['main'] = "Shetraining";
        $data['Table'] = $this->Shetraining_model->getTrainingbyId($id);
        $data['id'] = $id;
        $this->load->view('Shetraining/UpdateTraining',$data);
    }else {
      redirect(base_url());
    }
  }

  public function Update($id){
  if ($this->session->userdata('Drilling')) {

        $data['main'] = "Shetraining";

        	$Date = $this->input->post('date');
			$Trainingtitle = $this->input->post('trainingtitle');
			$Instructor = $this->input->post('instructor');
			$Venue = $this->input->post('venue');
			$Trainee = $this->input->post('trainee');
			$Comment = $this->input->post('comment');

			$start = $Date;
			$end = $Date;
			
			$start = explode('-',$Date)[1].'/'.explode('-',$Date)[2].'/'.explode('-',$Date)[0];
			$end = explode('-',$Date)[1].'/'.explode('-',$Date)[2].'/'.explode('-',$Date)[0];
		
			$data['main'] = "InputShetraining";
			$data['dateInformationStart'] = $start;
       		$data['dateInformationEnd'] = $end;
          
			$Training = array(
    			'date' => $Date,
    			'trainingtitle' => $Trainingtitle,
    			'instructor' => $Instructor,
    			'venue' => $Venue,
    			'trainee' => $Trainee,
    			'comment' => $Comment,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);


        $this->Shetraining_model->UpdateTraining($Training,$id);

        redirect('Shetraining/InputTRAINING');

  }
  else{
    redirect(base_url());
  }
}

}
?>
