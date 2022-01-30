<?php
  require_once __DIR__ . '/vendor/autoload.php';

  $client = new MongoDB\Client(
    'mongodb+srv://group6:Group6@careelance.fyoln.mongodb.net/careelance?retryWrites=true&w=majority');

	class dispJob{
		
		function __construct(){
			$this->db = (new MongoDB\Client('mongodb+srv://group6:Group6@careelance.fyoln.mongodb.net/careelance?retryWrites=true&w=majority'))->careelance->job;
		}
		
		public function fetchData(){
			return $this->db->find();
		}
	
	}
?>