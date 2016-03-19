<?php

	class Md_supplier extends CI_Model {

        public $id;
        public $invoice;
        public $name;
		public $company;
		public $phone;
		public $email;
		public $address;

        public function __construct(){
            parent::__construct();
        }

        public function show(){
            $query = $this->db->get('supplier');
            return $query->result();
        }

        public function add(){
			$this->invoice = $_POST['invoice'];
			$this->name = $_POST['name'];
			$this->company = $_POST['company'];
			$this->phone = $_POST['phone'];
			$this->email = $_POST['email'];
			$this->address = $_POST['address'];
			if($this->check() != null){
				$this->id = $this->uri->segment(3);
				$this->db->where('id', $this->uri->segment(3));
				$this->db->update('supplier', $this);
			}else{
				$this->db->insert('supplier', $this);
			}
        }
		
		public function trash(){
            if($this->check() != null){
				$this->db->where('id', $this->uri->segment(3));
				$this->db->delete('supplier');
				return true;
			}
            return false;
        }
		
		public function check(){
			if(preg_match("/^[0-9]*$/", $this->uri->segment(3))){
				$this->db->where('id', $this->uri->segment(3));
				$query = $this->db->get('supplier');
				return $query->result();
			}
			return null;
        }

	}