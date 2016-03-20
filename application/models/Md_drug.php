<?php

	class Md_drug extends CI_Model {

        public $id;
        public $invoice;
        public $name;
		public $group;
		public $power;
		public $retail_price;
		public $sale_price;

        public function __construct(){
            parent::__construct();
        }

        public function show(){
            $query = $this->db->get('drug');
            return $query->result();
        }

        public function add(){
			$this->invoice = $_POST['invoice'];
			$this->name = $_POST['name'];
			$this->group = $_POST['group'];
			$this->power = $_POST['power'];
			$this->retail_price = $_POST['retail_price'];
			$this->sale_price = $_POST['sale_price'];
			if($this->check() != null){
				$this->id = $this->uri->segment(3);
				$this->db->where('id', $this->uri->segment(3));
				$this->db->update('drug', $this);
			}else{
				$this->db->insert('drug', $this);
			}
        }
		
		public function trash(){
            if($this->check() != null){
				$this->db->where('id', $this->uri->segment(3));
				$this->db->delete('drug');
				return true;
			}
            return false;
        }
		
		public function check(){
			if(preg_match("/^[0-9]*$/", $this->uri->segment(3))){
				$this->db->where('id', $this->uri->segment(3));
				$query = $this->db->get('drug');
				return $query->result();
			}
			return null;
        }

	}