<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller {

	public function Input(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->model('RCoperation_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "InputRCoperation";
				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocationTes();
				$data['Rig'] = $this->Reference_model->getRigTes();
        $data['Activity'] = $this->RCoperation_model->getActivity();
        $data['Subactivity'] = $this->RCoperation_model->getSubactivity();
        $data['Subsubactivity'] = $this->RCoperation_model->getSubsubactivity();


				    $data['dateInformation'] = "";
       			$data['shiftInformation'] = "";
       			$data['siteInformation'] = "";
       			$data['locationInformation'] = "";
       			$data['rigInformation'] = "";
		        $this->load->view('RCoperation/Input',$data);
    }else {
			redirect(base_url());
    }
	}

	public function InputManpower()
	{
    	if ($this->session->userdata('Drilling')) {
    		//$Date =  $this->input->post('Date');
			//$Date = explode('/', $Date)[2].'-'.explode('/', $Date)[0].'-'.explode('/', $Date)[1];
    		$DateManpower = $this->input->post("dateManpower");
    		$ShiftManpower= $this->input->post("shiftManpower");
    		$SiteManpower = $this->input->post("siteManpower");
    		$LocationManpower = $this->input->post("locationManpower");
    		$RigManpower = $this->input->post("rigManpower");
    		$position = $this->input->post("position");
    		$name = $this->input->post("name");
    		$hoursfrom = $this->input->post("hoursfrom");
    		$hoursto = $this->input->post("hoursto");
       	$comment = $this->input->post("comment");

       		$data['main'] = "InputRCoperation";
       		$data['Site'] = $this->Reference_model->getSite();
			    $data['Location'] = $this->Reference_model->getLocationTes();
			    $data['Rig'] = $this->Reference_model->getRigTes();
          $data['Activity'] = $this->RCoperation_model->getActivity();
          $data['Subactivity'] = $this->RCoperation_model->getSubactivity();
          $data['Subsubactivity'] = $this->RCoperation_model->getSubsubactivity();
       		$data['dateInformation'] = $DateManpower;
       		$data['shiftInformation'] = $ShiftManpower;
       		$data['siteInformation'] = $SiteManpower;
       		$data['locationInformation'] =$LocationManpower;
       		$data['rigInformation'] = $RigManpower;

    		$Manpower = array(
    			'date' => $DateManpower,
    			'site' => $SiteManpower,
    			'location' => $LocationManpower,
    			'shift' => $ShiftManpower,
    			'rig' => $RigManpower,
    			'position' => $position,
    			'name' => $name,
    			'hoursfrom' => $hoursfrom,
    			'hoursto' => $hoursto,
    			'comment' => $comment,
          'status' => 'RC',
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    		$this->RCoperation_model->InputManpower($Manpower);

    		$this->load->view('RCoperation/Input',$data);
		}
		else {
			redirect(base_url());
		}

	}

  public function InputConsumable(){
    if ($this->session->userdata('Drilling')) {
    $Consumable = $this->input->post("consumable");
    $Quantity = $this->input->post("quantity");
    $CommentConsumable = $this->input->post("commentconsumable");
    $Date = $this->input->post("dateConsumable");
    $Site = $this->input->post("siteConsumable");
    $Location = $this->input->post("locationConsumable");
    $Rig = $this->input->post("rigConsumable");
    $Shift = $this->input->post("shiftConsumable");

      $data['main'] = "InputRCoperation";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocationTes();
          $data['Rig'] = $this->Reference_model->getRigTes();
          $data['Activity'] = $this->RCoperation_model->getActivity();
          $data['Subactivity'] = $this->RCoperation_model->getSubactivity();
          $data['Subsubactivity'] = $this->RCoperation_model->getSubsubactivity();
          $data['dateInformation'] = $Date;
          $data['shiftInformation'] = $Shift;
          $data['siteInformation'] = $Site;
          $data['locationInformation'] =$Location;
          $data['rigInformation'] = $Rig;

        $Consumable = array(
          'date' => $Date,
          'site' => $Site,
          'location' => $Location,
          'rig' => $Rig,
          'comment' => $CommentConsumable,
          'consumable' => $Consumable,
          'quantity' => $Quantity,
          'status' => 'RC',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->RCoperation_model->InputConsumable($Consumable);

        $this->load->view('RCoperation/Input',$data);
    }
    else {
      redirect(base_url());
    }
  }

    public function InputActivity(){
    if ($this->session->userdata('Drilling')) {
    $Activity = $this->input->post("activity");
    $Subactivity = $this->input->post("subactivity");
    $Subsubactivity = $this->input->post("subsubactivity");
    $Hours = $this->input->post("hours");
    $CommentActivity = $this->input->post("commentactivity");
    $Date = $this->input->post("dateActivity");
    $Site = $this->input->post("siteActivity");
    $Location = $this->input->post("locationActivity");
    $Rig = $this->input->post("rigActivity");
    $Shift = $this->input->post("shiftActivity");

      $data['main'] = "InputRCoperation";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocationTes();
          $data['Rig'] = $this->Reference_model->getRigTes();
          $data['Activity'] = $this->RCoperation_model->getActivity();
          $data['Subactivity'] = $this->RCoperation_model->getSubactivity();
          $data['Subsubactivity'] = $this->RCoperation_model->getSubsubactivity();
          $data['dateInformation'] = $Date;
          $data['shiftInformation'] = $Shift;
          $data['siteInformation'] = $Site;
          $data['locationInformation'] =$Location;
          $data['rigInformation'] = $Rig;

        $DetailActivity = array(
          'date' => $Date,
          'site' => $Site,
          'location' => $Location,
          'rig' => $Rig,
          'comment' => $CommentActivity,
          'activity' => $Activity,
          'subactivity' => $Subactivity,
          'subsubactivity' => $Subsubactivity,
          'hours' =>$Hours,
          'status' => 'RC',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->RCoperation_model->InputDetailActivity($DetailActivity);

        $this->load->view('RCoperation/Input',$data);
    }
    else {
      redirect(base_url());
    }
  }

  public function InputDownhole(){
    if ($this->session->userdata('Drilling')) {
    $Description = $this->input->post("description");
    $Series = $this->input->post("series");
    $Quantity = $this->input->post("quantity");
    $Type = $this->input->post("type");
    $CommentDownhole = $this->input->post("commentdownhole");
    $Date = $this->input->post("dateDownhole");
    $Site = $this->input->post("siteDownhole");
    $Location = $this->input->post("locationDownhole");
    $Rig = $this->input->post("rigDownhole");
    $Shift = $this->input->post("shiftDownhole");

      $data['main'] = "InputRCoperation";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocationTes();
          $data['Rig'] = $this->Reference_model->getRigTes();
          $data['Activity'] = $this->RCoperation_model->getActivity();
          $data['Subactivity'] = $this->RCoperation_model->getSubactivity();
          $data['Subsubactivity'] = $this->RCoperation_model->getSubsubactivity();
          $data['dateInformation'] = $Date;
          $data['shiftInformation'] = $Shift;
          $data['siteInformation'] = $Site;
          $data['locationInformation'] =$Location;
          $data['rigInformation'] = $Rig;

        $Downhole = array(
          'date' => $Date,
          'site' => $Site,
          'location' => $Location,
          'rig' => $Rig,
          'comment' => $CommentDownhole,
          'description' => $Description,
          'type' => $Type,
          'series' => $Series,
          'quantity' =>$Quantity,
          'status' => 'RC',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->RCoperation_model->InputDownhole($Downhole);

        $this->load->view('RCoperation/Input',$data);
    }
    else {
      redirect(base_url());
    }
  }

   public function InputSurvey(){
    if ($this->session->userdata('Drilling')) {
    $Hole = $this->input->post("hole");
    $Depth = $this->input->post("depth");
    $Dip = $this->input->post("dip");
    $Azimuth = $this->input->post("azimuth");
    $Date = $this->input->post("dateSurvey");
    $Site = $this->input->post("siteSurvey");
    $Location = $this->input->post("locationSurvey");
    $Rig = $this->input->post("rigSurvey");
    $Shift = $this->input->post("shiftSurvey");

      $data['main'] = "InputRCoperation";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocationTes();
          $data['Rig'] = $this->Reference_model->getRigTes();
          $data['Activity'] = $this->RCoperation_model->getActivity();
          $data['Subactivity'] = $this->RCoperation_model->getSubactivity();
          $data['Subsubactivity'] = $this->RCoperation_model->getSubsubactivity();
          $data['dateInformation'] = $Date;
          $data['shiftInformation'] = $Shift;
          $data['siteInformation'] = $Site;
          $data['locationInformation'] =$Location;
          $data['rigInformation'] = $Rig;

        $Survey = array(
          'date' => $Date,
          'site' => $Site,
          'location' => $Location,
          'rig' => $Rig,
          'hole' => $Hole,
          'depth' => $Depth,
          'dip' => $Dip,
          'azimuth' =>$Azimuth,
          'status' => 'RC',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->RCoperation_model->InputSurvey($Survey);

        $this->load->view('RCoperation/Input',$data);
    }
    else {
      redirect(base_url());
    }
  }



}
?>
