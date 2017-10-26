<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller {

	public function Input(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Reference_model');
		$this->load->model('Finding_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Finding";
				$data['Site'] = $this->Reference_model->getSite();
        $data['Rig'] = $this->Reference_model->getRig();
			
				    $data['dateInformation'] = "";
      
		        $this->load->view('Finding/Input',$data);
    }else {
			redirect(base_url());
    }
	}

	public function InputFinding()
	{
    	if ($this->session->userdata('Drilling')) {
    		//$Date =  $this->input->post('Date');
			//$Date = explode('/', $Date)[2].'-'.explode('/', $Date)[0].'-'.explode('/', $Date)[1];
    		$Date = $this->input->post("date");
    		$Site = $this->input->post("site");
    		$FindingFrom = $this->input->post("findingfrom");
    		$Observer = $this->input->post("observer");
    		$Findingdetails = $this->input->post("findingdetails");
    		$Procedurespreferences = $this->input->post("procedurepreferences");
    		$Personinvolved = $this->input->post("personinvolved");
    		$Accountability = $this->input->post("accountability");
    		$Bywho = $this->input->post("bywho");
       	$Bywhen = $this->input->post("bywhen");
        $Recommendationaction = $this->input->post("recommendationaction");
        $Completedate = $this->input->post("completedate");
        $Status = $this->input->post("status");
        $Location = $this->input->post("location");
        $Type = $this->input->post("type");
        $Class = $this->input->post("class");
        $Riskrank = $this->input->post("riskrank");


       		$data['main'] = "Finding";
       		$data['Site'] = $this->Reference_model->getSite();
			    $data['Location'] = $this->Reference_model->getLocation();
			    $data['Rig'] = $this->Reference_model->getRig();
    
    		$Finding = array(
    			'date' => $Date,
    			'site' => $Site,
    			'findingfrom' => $FindingFrom,
    			'observer' => $Observer,
    			'findingdetails' => $Findingdetails,
    			'procedurespreferences' => $Procedurespreferences,
    			'personinvolved' => $Personinvolved,
    			'accountability' => $Accountability,
    			'bywho' => $Bywho,
    			'bywhen' => $Bywhen,
          'recommendationaction' => $Recommendationaction,
          'completedate' => $Completedate,
          'status' => $Status,
          'location' => $Location,
          'type' => $Type,
          'class' => $Class,
          'riskrank' => $Riskrank,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

    		$this->Finding_model->InsertFinding($Finding);

    		$this->load->view('Finding/Input',$data);
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

      $data['main'] = "InputDiamonddrilling";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocation();
          $data['Rig'] = $this->Reference_model->getRig();
          $data['Activity'] = $this->Diamonddrilling_model->getActivity();
          $data['Subactivity'] = $this->Diamonddrilling_model->getSubactivity();
          $data['Subsubactivity'] = $this->Diamonddrilling_model->getSubsubactivity();
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
          'status' => 'DD',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->Diamonddrilling_model->InputConsumable($Consumable);

        $this->load->view('Diamonddrilling/Input',$data);
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

      $data['main'] = "InputDiamonddrilling";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocation();
          $data['Rig'] = $this->Reference_model->getRig();
          $data['Activity'] = $this->Diamonddrilling_model->getActivity();
          $data['Subactivity'] = $this->Diamonddrilling_model->getSubactivity();
          $data['Subsubactivity'] = $this->Diamonddrilling_model->getSubsubactivity();
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
          'status' => 'DD',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->Diamonddrilling_model->InputDetailActivity($DetailActivity);

        $this->load->view('Diamonddrilling/Input',$data);
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

      $data['main'] = "InputDiamonddrilling";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocation();
          $data['Rig'] = $this->Reference_model->getRig();
          $data['Activity'] = $this->Diamonddrilling_model->getActivity();
          $data['Subactivity'] = $this->Diamonddrilling_model->getSubactivity();
          $data['Subsubactivity'] = $this->Diamonddrilling_model->getSubsubactivity();
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
          'status' => 'DD',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->Diamonddrilling_model->InputDownhole($Downhole);

        $this->load->view('Diamonddrilling/Input',$data);
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

      $data['main'] = "InputDiamonddrilling";
          $data['Site'] = $this->Reference_model->getSite();
          $data['Location'] = $this->Reference_model->getLocation();
          $data['Rig'] = $this->Reference_model->getRig();
          $data['Activity'] = $this->Diamonddrilling_model->getActivity();
          $data['Subactivity'] = $this->Diamonddrilling_model->getSubactivity();
          $data['Subsubactivity'] = $this->Diamonddrilling_model->getSubsubactivity();
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
          'status' => 'DD',
          'usrid' => $this->session->userdata('usernameDrilling'),
          );

        $this->Diamonddrilling_model->InputSurvey($Survey);

        $this->load->view('Diamonddrilling/Input',$data);
    }
    else {
      redirect(base_url());
    }
  }

	public function DeleteScat($id)
	{
		if ($this->session->userdata('GradeControl')) {
			$this->ClosingStock_model->DeleteScat($id);
			redirect('ClosingStock/Scat');
		}
		else {
			redirect(base_url());
		}
	}

}
?>
