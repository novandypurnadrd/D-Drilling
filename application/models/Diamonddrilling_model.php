<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Diamonddrilling_model extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();
		}


		function InputManpower($data){
      	$this->db->insert('manpower',$data);
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
			$view = $this->db->query('SELECT s.name as site, s.id, r.id,r.name FROM site s, rig r WHERE s.id = r.site');
	    	return $view->result();
			}

		function DeleteMultipleRig(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('rig');

	}
}
		function DeleteMultipleManpower(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('manpower');

	}
}

	function DeleteMultipleConsumable(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('consumable');

	}
}

	function DeleteMultipleActivity(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('detailactivity');

	}
}

	function DeleteMultipleDownhole(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('downhole');

	}
}

	function DeleteMultipleSurvey(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('survey');

	}
}

		function DeleteMultipleDetails(){
		$delete = $this->input->post('msg');
		for ($i=0; $i < count($delete) ; $i++) { 
				$this->db->where('id', $delete[$i]);
				$this->db->delete('detailsdrilling');

	}
}

	function InputConsumable($data){
      	$this->db->insert('consumable',$data);
    	}

    function InputDownhole($data){
      	$this->db->insert('downhole',$data);
    	}

      function InputDetailActivity($data){
      	$this->db->insert('detailactivity',$data);
    	}

    	 function InputSurvey($data){
      	$this->db->insert('survey',$data);
    	}

    	 function InputDetails($data){
      	$this->db->insert('detailsdrilling',$data);
    	}


    	function getActivity(){
    		$a="'";
			$view = $this->db->query('SELECT * FROM activity');
	    	return $view->result();
			}

		function getSubactivity(){
    		$a="'";
			$view = $this->db->query('SELECT * FROM subactivity');
	    	return $view->result();
			}

		function getSubsubactivity(){
    		$a="'";
			$view = $this->db->query('SELECT * FROM subsubactivity');
	    	return $view->result();
			}


		function ViewManpower($start,$end,$site,$location,$rig,$status){
			$a="'";

			if($site == "all" && $location == "all" ){
				$view = $this->db->query('SELECT m.id, m.date, s.name as site, m.shift, l.name as location, r.name as rig, m.position, m.name, m.hoursfrom, m.hoursto, m.comment FROM site s, rig r, location l, manpower m WHERE (m.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND m.status = ('.$a.$status.$a.') AND s.id = m.site AND r.id = m.rig AND l.id = m.location');
	    	return $view->result();
			}
			else if($site == "all" && $location != "all"){
				$view = $this->db->query('SELECT m.id, m.date, s.name as site, m.shift, l.name as location, r.name as rig, m.position, m.name, m.hoursfrom, m.hoursto, m.comment FROM site s, rig r, location l, manpower m WHERE (m.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND m.location=('.$a.$location.$a.') AND m.rig = ('.$a.$rig.$a.') AND m.status = ('.$a.$status.$a.') AND s.id = m.site AND r.id = m.rig AND l.id = m.location');
	    	return $view->result();
			}
			else if ($site != "all" && $location == "all"){
				$view = $this->db->query('SELECT m.id, m.date, s.name as site, m.shift, l.name as location, r.name as rig, m.position, m.name, m.hoursfrom, m.hoursto, m.comment FROM site s, rig r, location l, manpower m WHERE (m.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND m.site=('.$a.$site.$a.') AND m.rig = ('.$a.$rig.$a.') AND m.status = ('.$a.$status.$a.') AND s.id = m.site AND r.id = m.rig AND l.id = m.location');
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT m.id, m.date, s.name as site, m.shift, l.name as location, r.name as rig, m.position, m.name, m.hoursfrom, m.hoursto, m.comment FROM site s, rig r, location l, manpower m WHERE (m.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND m.site=('.$a.$site.$a.') AND m.location=('.$a.$location.$a.') AND m.rig = ('.$a.$rig.$a.') AND m.status = ('.$a.$status.$a.') AND s.id = m.site AND r.id = m.rig AND l.id = m.location');
	    	return $view->result();
			}

				
			}

			function ViewConsumable($start,$end,$site,$location,$rig,$status){
			$a="'";

			if($site == "all" && $location=="all"){
				$view = $this->db->query('SELECT c.id, c.date, c.consumable, c.comment, c.quantity, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, consumable c WHERE (c.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND c.rig = ('.$a.$rig.$a.') AND c.status = ('.$a.$status.$a.') AND s.id = c.site AND r.id = c.rig AND l.id = c.location');
	    	return $view->result();
			}
			else if($site == "all" && $location != "all"){
				$view = $this->db->query('SELECT c.id, c.date, c.consumable, c.comment, c.quantity, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, consumable c WHERE (c.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND c.location =('.$a.$location.$a.') AND c.rig = ('.$a.$rig.$a.') AND c.status = ('.$a.$status.$a.') AND s.id = c.site AND r.id = c.rig AND l.id = c.location');
	    	return $view->result();
			}
			else if($site != "all" && $location == "all"){
				$view = $this->db->query('SELECT c.id, c.date, c.consumable, c.comment, c.quantity, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, consumable c WHERE (c.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND c.site=('.$a.$site.$a.') AND c.rig = ('.$a.$rig.$a.') AND c.status = ('.$a.$status.$a.') AND s.id = c.site AND r.id = c.rig AND l.id = c.location');
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT c.id, c.date, c.consumable, c.comment, c.quantity, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, consumable c WHERE (c.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND c.site=('.$a.$site.$a.') AND c.location =('.$a.$location.$a.') AND c.rig = ('.$a.$rig.$a.') AND c.status = ('.$a.$status.$a.') AND s.id = c.site AND r.id = c.rig AND l.id = c.location');
	    	return $view->result();
			}
			
			}

			function ViewActivity($start,$end,$site,$location,$rig,$status){
			$a="'";

			if($site == "all" && $location == "all"){
				$view = $this->db->query('SELECT a.id, a.date, ac.activity, sa.subactivity, ssa.subsubactivity, a.comment, a.hours, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailactivity a, activity ac, subactivity sa, subsubactivity ssa WHERE (a.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND a.rig = ('.$a.$rig.$a.') AND a.status = ('.$a.$status.$a.') AND s.id = a.site AND r.id = a.rig AND l.id = a.location AND ac.id = a.activity AND sa.id = a.subactivity AND ssa.id = a.subsubactivity' );
	    	return $view->result();
			}
			else if($site == "all" && $location != "all"){
				$view = $this->db->query('SELECT a.id, a.date, ac.activity, sa.subactivity, ssa.subsubactivity, a.comment, a.hours, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailactivity a, activity ac, subactivity sa, subsubactivity ssa WHERE (a.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND a.location =('.$a.$location.$a.') AND a.rig = ('.$a.$rig.$a.') AND a.status = ('.$a.$status.$a.') AND s.id = a.site AND r.id = a.rig AND l.id = a.location AND ac.id = a.activity AND sa.id = a.subactivity AND ssa.id = a.subsubactivity' );
	    	return $view->result();
			}
			else if($site != "all" && $location == "all" ){
				$view = $this->db->query('SELECT a.id, a.date, ac.activity, sa.subactivity, ssa.subsubactivity, a.comment, a.hours, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailactivity a, activity ac, subactivity sa, subsubactivity ssa WHERE (a.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND a.site=('.$a.$site.$a.') AND a.rig = ('.$a.$rig.$a.') AND a.status = ('.$a.$status.$a.') AND s.id = a.site AND r.id = a.rig AND l.id = a.location AND ac.id = a.activity AND sa.id = a.subactivity AND ssa.id = a.subsubactivity' );
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT a.id, a.date, ac.activity, sa.subactivity, ssa.subsubactivity, a.comment, a.hours, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailactivity a, activity ac, subactivity sa, subsubactivity ssa WHERE (a.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND a.site=('.$a.$site.$a.') AND a.location =('.$a.$location.$a.') AND a.rig = ('.$a.$rig.$a.') AND a.status = ('.$a.$status.$a.') AND s.id = a.site AND r.id = a.rig AND l.id = a.location AND ac.id = a.activity AND sa.id = a.subactivity AND ssa.id = a.subsubactivity' );
	    	return $view->result();
			}
			
			}

			function ViewDownhole($start,$end,$site,$location,$rig,$status){
			$a="'";

			if($site == "all" && $location == "all"){
				$view = $this->db->query('SELECT d.id, d.date, d.description, d.type, d.series, d.quantity, d.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, downhole d WHERE (d.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND d.rig = ('.$a.$rig.$a.') AND d.status = ('.$a.$status.$a.') AND s.id = d.site AND r.id = d.rig AND l.id = d.location');
	    	return $view->result();
			}
			else if($site == "all" && $location != "all"){
				$view = $this->db->query('SELECT d.id, d.date, d.description, d.type, d.series, d.quantity, d.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, downhole d WHERE (d.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND d.location =('.$a.$location.$a.') AND d.rig = ('.$a.$rig.$a.') AND d.status = ('.$a.$status.$a.') AND s.id = d.site AND r.id = d.rig AND l.id = d.location');
	    	return $view->result();
			}
			else if($site != "all" && $location == "all"){
				$view = $this->db->query('SELECT d.id, d.date, d.description, d.type, d.series, d.quantity, d.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, downhole d WHERE (d.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND d.site=('.$a.$site.$a.') AND d.rig = ('.$a.$rig.$a.') AND d.status = ('.$a.$status.$a.') AND s.id = d.site AND r.id = d.rig AND l.id = d.location');
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT d.id, d.date, d.description, d.type, d.series, d.quantity, d.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, downhole d WHERE (d.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND d.site=('.$a.$site.$a.') AND d.location =('.$a.$location.$a.') AND d.rig = ('.$a.$rig.$a.') AND d.status = ('.$a.$status.$a.') AND s.id = d.site AND r.id = d.rig AND l.id = d.location');
	    	return $view->result();
			}
			
			}

			function ViewSurvey($start,$end,$site,$location,$rig,$status){
			$a="'";

			if($site == "all" && $location == "all"){
				$view = $this->db->query('SELECT su.id, su.date, su.hole, su.depth, su.dip, su.azimuth, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, survey su WHERE (su.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND su.rig = ('.$a.$rig.$a.') AND su.status = ('.$a.$status.$a.') AND s.id = su.site AND r.id = su.rig AND l.id = su.location');
	    	return $view->result();
			}
			else if ($site == "all" && $location != "all"){
				$view = $this->db->query('SELECT su.id, su.date, su.hole, su.depth, su.dip, su.azimuth, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, survey su WHERE (su.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND su.location =('.$a.$location.$a.') AND su.rig = ('.$a.$rig.$a.') AND su.status = ('.$a.$status.$a.') AND s.id = su.site AND r.id = su.rig AND l.id = su.location');
	    	return $view->result();
			}
			else if ($site != "all" && $location == "all"){
				$view = $this->db->query('SELECT su.id, su.date, su.hole, su.depth, su.dip, su.azimuth, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, survey su WHERE (su.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND su.site=('.$a.$site.$a.') AND su.rig = ('.$a.$rig.$a.') AND su.status = ('.$a.$status.$a.') AND s.id = su.site AND r.id = su.rig AND l.id = su.location');
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT su.id, su.date, su.hole, su.depth, su.dip, su.azimuth, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, survey su WHERE (su.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND su.site=('.$a.$site.$a.') AND su.location =('.$a.$location.$a.') AND su.rig = ('.$a.$rig.$a.') AND su.status = ('.$a.$status.$a.') AND s.id = su.site AND r.id = su.rig AND l.id = su.location');
	    	return $view->result();
			}
			
			}
		
			function ViewDrilling($start,$end,$site,$location,$rig,$status){
			$a="'";

			if($site == "all" && $location == "all"){
				$view = $this->db->query('SELECT dd.id, dd.date,dd.shift, dd.hole, dd.from, dd.to, dd.total,dd.recovery,dd.hours,dd.hoursto,dd.bit,dd.series,dd.size,dd.angle,dd.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailsdrilling dd WHERE (dd.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND dd.rig = ('.$a.$rig.$a.') AND s.id = dd.site AND r.id = dd.rig AND l.id = dd.location');
	    	return $view->result();
			}
			else if($site == "all" && $location != "all"){
				$view = $this->db->query('SELECT dd.id, dd.date,dd.shift, dd.hole, dd.from, dd.to, dd.total,dd.recovery,dd.hours,dd.hoursto,dd.bit,dd.series,dd.size,dd.angle,dd.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailsdrilling dd WHERE (dd.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND dd.location =('.$a.$location.$a.') AND dd.rig = ('.$a.$rig.$a.') AND s.id = dd.site AND r.id = dd.rig AND l.id = dd.location');
	    	return $view->result();
			}
			else if($site != "all" && $location == "all"){
				$view = $this->db->query('SELECT dd.id, dd.date,dd.shift, dd.hole, dd.from, dd.to, dd.total,dd.recovery,dd.hours,dd.hoursto,dd.bit,dd.series,dd.size,dd.angle,dd.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailsdrilling dd WHERE (dd.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND dd.site=('.$a.$site.$a.') AND dd.rig = ('.$a.$rig.$a.') AND s.id = dd.site AND r.id = dd.rig AND l.id = dd.location');
	    	return $view->result();
			}
			else{
				$view = $this->db->query('SELECT dd.id, dd.date,dd.shift, dd.hole, dd.from, dd.to, dd.total,dd.recovery,dd.hours,dd.hoursto,dd.bit,dd.series,dd.size,dd.angle,dd.comment, s.name as site, l.name as location, r.name as rig FROM site s, rig r, location l, detailsdrilling dd WHERE (dd.date) BETWEEN ('.$a.$start.$a.') AND ('.$a.$end.$a.') AND dd.site=('.$a.$site.$a.') AND dd.location =('.$a.$location.$a.') AND dd.rig = ('.$a.$rig.$a.') AND s.id = dd.site AND r.id = dd.rig AND l.id = dd.location');
	    	return $view->result();
			}
			
			}
		
}

?>
