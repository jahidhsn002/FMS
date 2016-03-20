<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drug extends CI_Controller {

	public function index(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$data['querys'] = $this->Md_drug->show();
		$this->load->view('drug/table',$data);
	}
	
	public function trash(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$alert = $this->Md_drug->trash();
		if($alert == true){
			$data['alert_success'] = 'Successfully Deleted';
		}else{
			$data['alert_eror'] = 'Do not able to delete';
		}
		$data['querys'] = $this->Md_drug->show();
		$this->load->view('drug/table',$data);
	}
	
	public function edit(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		
		$data['invoice'] = null;
		$data['name'] = null;
		$data['group'] = null;
		$data['power'] = null;
		$data['retail_price'] = null;
		$data['sale_price'] = null;
		
		$this->form_validation->set_rules('invoice', 'Invoice', 'max_length[30]');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha_numeric_spaces|max_length[50]');
		$this->form_validation->set_rules('group', 'Group', 'alpha_numeric_spaces|max_length[150]');
		$this->form_validation->set_rules('power', 'Power', 'max_length[30]');
		$this->form_validation->set_rules('retail_price', 'Retail Price', 'numeric|max_length[20]');
		$this->form_validation->set_rules('sale_price', 'Sale Price', 'required|max_length[20]');
		
		if ($this->form_validation->run() == FALSE){
			
			$data['alert_eror'] = validation_errors();
			if($this->Md_drug->check() != null){
				$fields = $this->Md_drug->check();
				foreach($fields as $field){
					$data['invoice'] = $field->invoice;
					$data['name'] = $field->name;
					$data['group'] = $field->group;
					$data['power'] = $field->power;
					$data['retail_price'] = $field->retail_price;
					$data['sale_price'] = $field->sale_price;
				}
			}
            $this->load->view('drug/edit',$data);
        }else{
			$this->Md_drug->add();
			$data['alert_success'] = 'Successfully Added';
			if($this->Md_drug->check() != null){
				$fields = $this->Md_drug->check();
				foreach($fields as $field){
					$data['invoice'] = $field->invoice;
					$data['name'] = $field->name;
					$data['group'] = $field->group;
					$data['power'] = $field->power;
					$data['retail_price'] = $field->retail_price;
					$data['sale_price'] = $field->sale_price;
				}
			}
            $this->load->view('drug/edit',$data);
        }
	}
	
}