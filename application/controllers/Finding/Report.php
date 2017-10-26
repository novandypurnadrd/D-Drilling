<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	public function Report(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('Shetraining_model');
		$this->load->model('Reference_model');
    $this->load->model('Maintenance_model');
    $this->load->model('Finding_model');
		$this->load->library('session');
	}

	public function Index(){
		if ($this->session->userdata('Drilling')) {
				$data['main'] = "Finding";

				$data['Site'] = $this->Reference_model->getSite();
			
				    $data['dateInformationStart'] = "";
       			$data['dateInformationEnd'] = "";
        		$data['siteInformation'] = "";

            $start ="";
            $end="";
            $site="";

        		$data['Open'] = $this->Finding_model->getFindingCountOpenAll();
        		$data['Close'] = $this->Finding_model->getFindingCountCloseAll();

        		$data['Behaviour'] = $this->Finding_model->getBehaviourAll();
        		$data['Condition'] = $this->Finding_model->getActionAll();

        		$data['High'] = $this->Finding_model->getHighAll();
        		$data['Significant'] = $this->Finding_model->getSignificantAll();
        		$data['Moderate'] = $this->Finding_model->getModerateAll();
        		$data['Low'] = $this->Finding_model->getLowAll();

        		$data['LokasiBahayaDistinct'] = $this->Finding_model->getLokasiDistinctAll();
            $data['LokasiBahaya'] = $this->Finding_model->getLokasiAll();

            $data['JenisBahayaDistinct'] = $this->Finding_model->getJenisBahayaDistinctAll();
            $data['JenisBahaya'] = $this->Finding_model->getJenisBahayaAll();

       			
		        $this->load->view('Finding/Report',$data);
    }else {
			redirect(base_url());
    }
	}

    public function Filter(){
   if ($this->session->userdata('Drilling')) {
        $data['main'] = "Finding";

        $data['Site'] = $this->Reference_model->getSite();
      
            $data['dateInformationStart'] = $this->input->post('start');
            $data['dateInformationEnd'] = $this->input->post('end');
            $data['siteInformation'] = $this->input->post('site');

            $startdate =$this->input->post('start');
            $finishdate=$this->input->post('end');
            $site=$this->input->post('site');

             $start = explode('/',$startdate)[2].'-'.explode('/',$startdate)[0].'-'.explode('/',$startdate)[1];
            $end = explode('/',$finishdate)[2].'-'.explode('/',$finishdate)[0].'-'.explode('/',$finishdate)[1];

            

            $data['Open'] = $this->Finding_model->getFindingCountOpen($start,$end,$site);
            $data['Close'] = $this->Finding_model->getFindingCountClose($start,$end,$site);

            $data['Behaviour'] = $this->Finding_model->getBehaviour($start,$end,$site);
            $data['Condition'] = $this->Finding_model->getAction($start,$end,$site);

            $data['High'] = $this->Finding_model->getHigh($start,$end,$site);
            $data['Significant'] = $this->Finding_model->getSignificant($start,$end,$site);
            $data['Moderate'] = $this->Finding_model->getModerate($start,$end,$site);
            $data['Low'] = $this->Finding_model->getLow($start,$end,$site);

            $data['LokasiBahayaDistinct'] = $this->Finding_model->getLokasiDistinct($start,$end,$site);
            $data['LokasiBahaya'] = $this->Finding_model->getLokasi($start,$end,$site);

            $data['JenisBahayaDistinct'] = $this->Finding_model->getJenisBahayaDistinct($start,$end,$site);
            $data['JenisBahaya'] = $this->Finding_model->getJenisBahaya($start,$end,$site);

            
            $this->load->view('Finding/Report',$data);
    }else {
      redirect(base_url());
    }
  }

	


}
?>
