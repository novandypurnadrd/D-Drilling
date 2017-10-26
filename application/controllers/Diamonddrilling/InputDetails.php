<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InputDetails extends CI_Controller {

	public function InputDetails(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->model('Diamonddrilling_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "InputDiamonddrilling";
				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocationTes();
				$data['Rig'] = $this->Reference_model->getRigTes();

            $data['Activity'] = $this->Diamonddrilling_model->getActivity();
            $data['Subactivity'] = $this->Diamonddrilling_model->getSubactivity();
            $data['Subsubactivity'] = $this->Diamonddrilling_model->getSubsubactivity();
				    $data['dateInformation'] = "";
       			$data['shiftInformation'] = "";
       			$data['siteInformation'] = "";
       			$data['locationInformation'] = "";
       			$data['rigInformation'] = "";
		        $this->load->view('Diamonddrilling/InputDetails',$data);
    }else {
			redirect(base_url());
    }
	}

	public function InputDrillingDetails(){
    if ($this->session->userdata('Drilling')) {
    $Hole = $this->input->post("hole");
    $From = $this->input->post("from");
    $To = $this->input->post("to");
    $Total = $this->input->post("total");
    $Recovery = $this->input->post("recovery");
    $Hours = $this->input->post("hoursfrom");
    $Hoursto = $this->input->post("hoursto");
    $Bit = $this->input->post("bit");
    $Series = $this->input->post("series");
    $Size = $this->input->post("size");
    $Angle = $this->input->post("angle");
    $Comment = $this->input->post("comment");
    $Date = $this->input->post("date");
    $Site = $this->input->post("site");
    $Location = $this->input->post("location");
    $Rig = $this->input->post("rig");
    $Shift = $this->input->post("shift");
  

      $data['main'] = "InputDiamonddrilling";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocationTes();
          $data['Rig'] = $this->Reference_model->getRigTes();
          $data['Activity'] = $this->Diamonddrilling_model->getActivity();
          $data['Subactivity'] = $this->Diamonddrilling_model->getSubactivity();
          $data['Subsubactivity'] = $this->Diamonddrilling_model->getSubsubactivity();
          $data['dateInformation'] = $Date;
          $data['shiftInformation'] = $Shift;
          $data['siteInformation'] = $Site;
          $data['locationInformation'] =$Location;
          $data['rigInformation'] = $Rig;

        $Details = array(
          'date' => $Date,
          'shift' => $Shift,
          'site' => $Site,
          'location' => $Location,
          'rig' => $Rig,
          'comment' => $Comment,
          'hole' => $Hole,
          'from' => $From,
          'to' => $To,
          'total' => $Total,
          'recovery' => $Recovery,
          'hours' => $Hours,
          'hoursto' => $Hoursto,
          'bit' => $Bit,
          'series' => $Series,
          'size' => $Size,
          'angle' => $Angle,
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->Diamonddrilling_model->InputDetails($Details);

        $this->load->view('Diamonddrilling/InputDetails',$data);
    }
    else {
      redirect(base_url());
    }
  }


}
?>
