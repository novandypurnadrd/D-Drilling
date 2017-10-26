<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class InputSHE extends CI_Controller {

	public function InputSHE(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Shetraining_model');
		$this->load->model('Reference_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "InputShetraining";

				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocation();
				$data['Rig'] = $this->Reference_model->getRig();
				$data['dateInformationStart'] = "";
       			$data['dateInformationEnd'] = "";
       			$data['siteInformation'] = "";
       			$data['areaInformation'] = "";
       			$data['typeInformation'] = "";

       			$start ="";
       			$end="";
       			$site="";
       			$area="";
       			$type="";
       			$data['She'] = $this->Shetraining_model->ViewShe($start,$end,$site,$area,$type);
		        $this->load->view('Shetraining/InputSHE',$data);
    }else {
			redirect(base_url());
    }
	}

	public function Insert(){
		if ($this->session->userdata('Drilling')){

			$Date = $this->input->post('date');
			$Site = $this->input->post('site');
			$Area = $this->input->post('area');
			$Type = $this->input->post('type');
			$Person = $this->input->post('involveperson');
			$Description = $this->input->post('description');

				$data['Site'] = $this->Reference_model->getSite();
				$data['Location'] = $this->Reference_model->getLocation();
				$data['Rig'] = $this->Reference_model->getRig();
				$data['dateInformationStart'] = $Date;
       			$data['dateInformationEnd'] = $Date;
       			$data['siteInformation'] = $Site;
       			$data['areaInformation'] = $Area;
       			$data['typeInformation'] = $Type;

			$data['main'] = "InputShetraining";

			$SHE = array(
    			'date' => $Date,
    			'site' => $Site,
    			'area' => $Area,
    			'type' => $Type,
    			'person' => $Person,
    			'description' => $Description,
    			'usrid' => $this->session->userdata('usernameDrilling'),
    			);

			$this->Shetraining_model->insertSHE($SHE);

			$start =$Date;
       		$end=$Date;
       		$site=$Site;
       		$area=$Area;
       		$type=$Type;
			$data['She'] = $this->Shetraining_model->ViewShe($start,$end,$site,$area,$type);

			$this->load->view('Shetraining/InputSHE',$data);
		}else{
			$data['message'] = '';
			$this->load->view('Index', $data);
		}
	}

	public function ViewReport(){
    if ($this->session->userdata('Drilling')) {
    	$data['main'] = "Shetraining";
    	
     			$data['Site'] = $this->Reference_model->getSite();
				$data['dateInformationStart'] = $this->input->post('start');
       			$data['dateInformationEnd'] = $this->input->post('end');
       			$data['siteInformation'] = $this->input->post('siteTable');
       			$data['areaInformation'] = $this->input->post('areaTable');
       			$data['typeInformation'] = $this->input->post('typeTable');

      $startdate = $this->input->post('start');
      $finishdate = $this->input->post('end');
      $site = $this->input->post('siteTable');
      $type = $this->input->post('typeTable');
      $area = $this->input->post('areaTable');	
     
      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
      	
    
      $data['She'] = $this->Shetraining_model->ViewShe($start,$end,$site,$area,$type);

      $this->load->view('Shetraining/InputSHE',$data);
    }
    else {
      redirect(base_url());
    }
  }

  public function Delete_multiple_SHE()
	{
		if ($this->session->userdata('Drilling')) {
			
			$this->Shetraining_model->DeleteMultipleSHE();
				$data['main'] = "Shetraining";
    	
     			$data['Site'] = $this->Reference_model->getSite();
				$data['dateInformationStart'] = $this->input->post('dateSheStart');
       			$data['dateInformationEnd'] = $this->input->post('dateSheEnd');;
       			$data['siteInformation'] = $this->input->post('siteShe');
       			$data['areaInformation'] = $this->input->post('areaShe');
       			$data['typeInformation'] = $this->input->post('typeShe');

      $startdate = $this->input->post('dateSheStart');
      $finishdate = $this->input->post('dateSheEnd');
      $site = $this->input->post('siteShe');


      $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
      $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];
      $type = $this->input->post('typeShe');
      $area = $this->input->post('areaShe');	
     
    
      $data['She'] = $this->Shetraining_model->ViewShe($start,$end,$site,$area,$type);
       $this->load->view('Shetraining/InputSHE',$data);
		}else {
			redirect(base_url());
		}
	}

  public function pageUpdate($id){
    if ($this->session->userdata('Drilling')) {
        $data['main'] = "Shetraining";
        $data['Site'] = $this->Reference_model->getSite();
        $data['Table'] = $this->Shetraining_model->getShebyId($id);
        $data['id'] = $id;
        $this->load->view('Shetraining/UpdateShe',$data);
    }else {
      redirect(base_url());
    }
  }

  public function Update($id){
  if ($this->session->userdata('Drilling')) {

      $data['main'] = "Shetraining";

      $Date = $this->input->post('date');
      $Site = $this->input->post('site');
      $Area = $this->input->post('area');
      $Type = $this->input->post('type');
      $Person = $this->input->post('involveperson');
      $Description = $this->input->post('description');

        $data['Site'] = $this->Reference_model->getSite();
        $data['Location'] = $this->Reference_model->getLocation();
        $data['Rig'] = $this->Reference_model->getRig();


      $SHE = array(
          'date' => $Date,
          'site' => $Site,
          'area' => $Area,
          'type' => $Type,
          'person' => $Person,
          'description' => $Description,
          'usrid' => $this->session->userdata('usernameDrilling'),
          );


        $this->Shetraining_model->UpdateShe($SHE,$id);

        redirect('Shetraining/InputShe');

  }
  else{
    redirect(base_url());
  }
}


}
?>
