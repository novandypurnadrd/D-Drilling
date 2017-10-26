<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Reference_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function updateProfile($data){
			$this->db->where('username', $this->session->userdata('usernameDBRC'));
			$this->db->update('user.account',$data);
		}

		function InputSite($data){
      	$this->db->insert('site',$data);
    	}

    	function getSite(){
    		$a="'";
			$view = $this->db->query('SELECT * FROM site');
	    	return $view->result();
			}

	function DeleteMultipleSite(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('site');

	}
}

	
		function InputRig($data){
      	$this->db->insert('rig',$data);
    	}

    	function getRig(){
    		$a="'";
			$view = $this->db->query('SELECT s.name as site, s.id, r.id,r.name, l.name as location FROM site s, rig r, location l WHERE s.id = r.site AND r.location = l.id');
	    	return $view->result();
			}

		function getRigbyId($id){
    		$a="'";
			$view = $this->db->query('SELECT s.name as site, s.id, r.id,r.name as rig, l.name as location FROM site s, rig r, location l WHERE r.id = ('.$a.$id.$a.') AND s.id = r.site AND r.location = l.id');
	    	return $view->result();
			}

		function getRigTes(){
			$view = $this->db->get('rig');
	    	return $view->result();
		}

		function getLocationTes(){
			$view = $this->db->get('location');
	    	return $view->result();
		}
		

		function DeleteMultipleRig(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('rig');

	}
}

		function InputLocation($data){
      	$this->db->insert('location',$data);
    	}

		function getLocation(){
    		$a="'";
			$view = $this->db->query('SELECT s.name as site, s.id, l.id,l.name,l.site as siteRef FROM site s, location l WHERE s.id = l.site');
	    	return $view->result();
			}

		function getLocationRef(){
      		$view = $this->db->get('location');
	    return $view->result();
		}

		function DeleteMultipleLocation(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('location');

	}
}

		 function UpdateRig($data, $id){
			$this->db->where('id', $id);
			$this->db->update('rig',$data);
		}

}

?>
