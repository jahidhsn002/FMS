<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function index(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$data['querys'] = $this->Md_supplier->show();
		$this->load->view('supplier/table',$data);
	}
	
	public function trash(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$alert = $this->Md_supplier->trash();
		if($alert == true){
			$data['alert_success'] = 'Successfully Deleted';
		}else{
			$data['alert_eror'] = 'Do not able to delete';
		}
		$data['querys'] = $this->Md_supplier->show();
		$this->load->view('supplier/table',$data);
	}
	
	public function edit(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		
		$data['invoice'] = null;
		$data['name'] = null;
		$data['company'] = null;
		$data['phone'] = null;
		$data['email'] = null;
		$data['address'] = null;
		
		$this->form_validation->set_rules('invoice', 'Invoice', 'max_length[30]');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces|max_length[50]');
		$this->form_validation->set_rules('company', 'Company', 'alpha_numeric_spaces|max_length[50]');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric|max_length[50]');
		$this->form_validation->set_rules('email', 'Email', 'email|max_length[50]');
		$this->form_validation->set_rules('address', 'Address', 'max_length[250]');
		
		if ($this->form_validation->run() == FALSE){
			
			$data['alert_eror'] = validation_errors();
			if($this->Md_supplier->check() != null){
				$fields = $this->Md_supplier->check();
				foreach($fields as $field){
					$data['invoice'] = $field->invoice;
					$data['name'] = $field->name;
					$data['company'] = $field->company;
					$data['phone'] = $field->phone;
					$data['email'] = $field->email;
					$data['address'] = $field->address;
				}
			}
            $this->load->view('supplier/edit',$data);
        }else{
			$this->Md_supplier->add();
			$data['alert_success'] = 'Successfully Added';
			if($this->Md_supplier->check() != null){
				$fields = $this->Md_supplier->check();
				foreach($fields as $field){
					$data['invoice'] = $field->invoice;
					$data['name'] = $field->name;
					$data['company'] = $field->company;
					$data['phone'] = $field->phone;
					$data['email'] = $field->email;
					$data['address'] = $field->address;
				}
			}
            $this->load->view('supplier/edit',$data);
        }
	}
	
}