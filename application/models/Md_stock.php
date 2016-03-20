<?php

	class Md_stock extends CI_Model {

        public $id;
        public $drug_name;
		public $quantity;

        public function __construct(){
            parent::__construct();
        }

        public function show(){
            $query = $this->db->get('stock');
            return $query->result();
        }

        public function add(){
			$this->drug_name = $_POST['drug_name'];
			$this->quantity = $_POST['quantity'];
			$this->id = $_POST['id'];
			$this->db->insert('stock', $this);
        }
		
		public function trash(){
            if($this->check() != null){
				$this->db->where('id', $this->uri->segment(3));
				$this->db->delete('stock');
				return true;
			}
            return false;
        }
		
		public function check(){
			if(preg_match("/^[0-9]*$/", $this->uri->segment(3))){
				$this->db->where('id', $this->uri->segment(3));
				$query = $this->db->get('stock');
				return $query->result();
			}
			return null;
        }

	}