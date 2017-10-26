<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Maintenance_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

	function GetUser($username, $password){
      $d = $this->db->get_where('user.account',array('username'=>$username, 'password'=>$password));
	    return $d->result();
		}

		function updateProfile($data){
			$this->db->where('username', $this->session->userdata('usernameDBRC'));
			$this->db->update('user.account',$data);
		}

		function insertImage($data){
			/*$this->db->where('user.username', $this->session->userdata('usernameGradeControl'));
			$this->db->update('user.picture', $data);*/

			$this->db->where('username', $this->session->userdata('usernameGradeControl'));
			$this->db->update('user.accont',$data);
       		return TRUE;

		}

		function InsertMaintenance($data){
      	$this->db->insert('maintenance',$data);
    	}

    		function ViewMaintenance($start,$end,$site,$rig){
			$a="'";

			$view = $this->db->query('SELECT m.id, m.datebreakdown, r.name as plantitem, l.name as location, m.compcodes, m.workorder, s.name as site, m.action,m.hmsustart,m.hmsuend,m.description,m.datebreakdown,m.downtimestart,m.downtimeend,m.totaldowntime,m.workcodes,m.delaycodes,m.delayhours,m.remarks,m.finishbreakdown,m.onprogress,m.waitingparts,m.manpower,m.outsiterepair,m.waitingtools,m.waitingdecision FROM site s, rig r, location l, maintenance m WHERE (m.datebreakdown) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND m.site=('.$a.$site.$a.') AND m.plantitem=('.$a.$rig.$a.') AND s.id = m.site AND l.id = m.location AND r.id = m.plantitem');
	    	return $view->result();
			}

		function DeleteMultipleMaintenance(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('maintenance');

	}
}

	}

?>
