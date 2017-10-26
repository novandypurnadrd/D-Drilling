<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Finding_model extends CI_Model {

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

		function InsertFinding($data){
      	$this->db->insert('finding',$data);
    	}

    		function ViewFinding($start,$end,$site){
			$a="'";

			$view = $this->db->query('SELECT f.id, f.date, f.findingfrom, f.observer, f.findingdetails, f.procedurespreferences, s.name as site, f.personinvolved,f.accountability,f.bywho,f.bywhen,f.recommendationaction,f.completedate,f.status,f.location,f.type,f.class,f.riskrank FROM site s, finding f WHERE (f.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND f.site=('.$a.$site.$a.') AND s.id = f.site');
	    	return $view->result();
			}

		function DeleteMultipleFinding(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('finding');

	}
}

		function getFinding(){
      		$view = $this->db->get('finding');
	    return $view->result();
		}

			function getFindingCountOpenAll(){
			$a="'";
			$status = "Open";
			$view = $this->db->query('SELECT * FROM finding WHERE status ='.$a.$status.$a);
			return $view->num_rows();
		}

		function getFindingCountCloseAll(){
			$a="'";
			$status = "Close";
			$view = $this->db->query('SELECT * FROM finding WHERE status ='.$a.$status.$a);
			return $view->num_rows();
		}

		function getBehaviourAll(){
			$a="'";
			$class = "Substandard Behavior";
			$view = $this->db->query('SELECT * FROM finding WHERE class ='.$a.$class.$a);
			return $view->num_rows();
		}

		function getActionAll(){
			$a="'";
			$class = "Substandard Condition";
			$view = $this->db->query('SELECT * FROM finding WHERE class ='.$a.$class.$a);
			return $view->num_rows();
		}

		function getHighAll(){
			$a="'";
			$riskrank = "High";
			$view = $this->db->query('SELECT * FROM finding WHERE riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getSignificantAll(){
			$a="'";
			$riskrank = "Significant";
			$view = $this->db->query('SELECT * FROM finding WHERE riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getModerateAll(){
			$a="'";
			$riskrank = "Moderate";
			$view = $this->db->query('SELECT * FROM finding WHERE riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getLowAll(){
			$a="'";
			$riskrank = "Low";
			$view = $this->db->query('SELECT * FROM finding WHERE riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getLokasiAll(){
			$a="'";
			$view = $this->db->query('SELECT location FROM finding order by id, date DESC');
			return $view->result();
		}

		function getLokasiDistinctAll(){
			$a="'";
			$view = $this->db->query('SELECT distinct location FROM finding order by id, date DESC');
			return $view->result();
		}

		function getJenisBahayaAll(){
			$a="'";
			$view = $this->db->query('SELECT type FROM finding order by id, date DESC');
			return $view->result();
		}

		function getJenisBahayaDistinctAll(){
			$a="'";
			$view = $this->db->query('SELECT distinct type FROM finding order by id, date DESC');
			return $view->result();
		}

		function getFindingCountOpen($start,$end,$site){
			$a="'";
			$status = "Open";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND status ='.$a.$status.$a);
			return $view->num_rows();
		}

		function getFindingCountClose($start,$end,$site){
			$a="'";
			$status = "Close";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND status ='.$a.$status.$a);
			return $view->num_rows();
		}

		function getBehaviour($start,$end,$site){
			$a="'";
			$class = "Substandard Behavior";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND class ='.$a.$class.$a);
			return $view->num_rows();
		}

		function getAction($start,$end,$site){
			$a="'";
			$class = "Substandard Condition";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND class ='.$a.$class.$a);
			return $view->num_rows();
		}

		function getHigh($start,$end,$site){
			$a="'";
			$riskrank = "High";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getSignificant($start,$end,$site){
			$a="'";
			$riskrank = "Significant";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getModerate($start,$end,$site){
			$a="'";
			$riskrank = "Moderate";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getLow($start,$end,$site){
			$a="'";
			$riskrank = "Low";
			$view = $this->db->query('SELECT * FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') AND riskrank ='.$a.$riskrank.$a);
			return $view->num_rows();
		}

		function getLokasi($start,$end,$site){
			$a="'";
			$view = $this->db->query('SELECT location FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') order by id, date DESC');
			return $view->result();
		}

		function getLokasiDistinct($start,$end,$site){
			$a="'";
			$view = $this->db->query('SELECT distinct location FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') order by id, date DESC');
			return $view->result();
		}

		function getJenisBahaya($start,$end,$site){
			$a="'";
			$view = $this->db->query('SELECT type FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') order by id, date DESC');
			return $view->result();
		}

		function getJenisBahayaDistinct($start,$end,$site){
			$a="'";
			$view = $this->db->query('SELECT distinct type FROM finding WHERE date between ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND site= ('.$a.$site.$a.') order by id, date DESC');
			return $view->result();
		}

		function getFindingbyId($id){
    		$a="'";
			$view = $this->db->query('SELECT * FROM finding WHERE id = '.$a.$id.$a);
	    	return $view->result();
			}


		function UpdateFinding($data, $id){
			$this->db->where('id', $id);
			$this->db->update('finding',$data);
		}

	}

?>
