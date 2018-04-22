<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InfinityController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    private $perPage = 5;

	public function index() {
		
		if(!empty($this->input->get("page"))){

			$start = ceil($this->input->get("page") * $this->perPage);
			$query = $this->db->limit($this->perPage, $start)->get("posts");
			$data['posts'] = $query->result();

			$result = $this->load->view('home/data', $data);

			echo json_encode($result);
		}else{

			$query = $this->db->limit($this->perPage, 0)->get("posts");

			$data['posts'] = $query->result();

			$this->load->view('template/header');
			$this->load->view('home/index', $data);
			$this->load->view('template/footer');

		}

	}
    
}
