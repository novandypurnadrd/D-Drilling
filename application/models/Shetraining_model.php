<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Shetraining_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}
			

			function getSite(){
    		$a="'";
			$view = $this->db->query('SELECT * FROM site');
	    	return $view->result();
			}

			function getRig(){
    		$a="'";
			$view = $this->db->query('SELECT * FROM rig');
	    	return $view->result();
			}

		function InsertSHE($data){
      	$this->db->insert('she',$data);
    	}

    	function InsertTraining($data){
      	$this->db->insert('training',$data);
    	}


    	function ViewShe($start,$end,$site,$area,$type){
			$a="'";

			if($site == "All" && $area == "All" && $type == "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else if ($site != "All" && $area == "All" && $type == "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.site=('.$a.$site.$a.') AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else if ($site == "All" && $area != "All" && $type == "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.area=('.$a.$area.$a.') AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else if ($site == "All" && $area == "All" && $type != "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.type = ('.$a.$type.$a.')  AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else if ($site != "All" && $area != "All" && $type == "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.site=('.$a.$site.$a.') AND she.area=('.$a.$area.$a.') AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else if ($site != "All" && $area == "All" && $type != "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.site=('.$a.$site.$a.') AND she.type = ('.$a.$type.$a.')  AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else if ($site == "All" && $area != "All" && $type != "All"){
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.site=('.$a.$site.$a.') AND she.type = ('.$a.$type.$a.')  AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT she.id, she.date, she.area, she.type, she.person, she.description, s.name as site FROM site s, she she WHERE (she.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND she.site=('.$a.$site.$a.') AND she.area=('.$a.$area.$a.') AND she.type = ('.$a.$type.$a.')  AND s.id = she.site Order by (she.date) DESC');
	    	return $view->result();
			}

			
			}

			function ViewTraining($start,$end){
			$a="'";

			$view = $this->db->query('SELECT * FROM training WHERE (date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') Order by date DESC');
	    	return $view->result();
			}

	
			

		function DeleteMultipleSHE(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('she');

	}
}

		function DeleteMultipleTraining(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('training');

	}
}

	function getTrainingbyId($id){
    		$a="'";
			$view = $this->db->query('SELECT * FROM training WHERE id = '.$a.$id.$a);
	    	return $view->result();
			}

	function getShebyId($id){
    		$a="'";
			$view = $this->db->query('SELECT * FROM she WHERE id = '.$a.$id.$a);
	    	return $view->result();
			}

	function UpdateTraining($data, $id){
			$this->db->where('id', $id);
			$this->db->update('training',$data);
		}

	function UpdateShe($data, $id){
			$this->db->where('id', $id);
			$this->db->update('she',$data);
		}

	}

?>
