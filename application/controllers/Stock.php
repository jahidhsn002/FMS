<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function index(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$data['querys'] = $this->Md_stock->show();
		$this->load->view('stock/table',$data);
	}
	
	public function low(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$data['querys'] = $this->Md_stock->show();
		$this->load->view('stock/low_table',$data);
	}
	
	public function trash(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$alert = $this->Md_stock->trash();
		if($alert == true){
			$data['alert_success'] = 'Successfully Deleted';
		}else{
			$data['alert_eror'] = 'Do not able to delete';
		}
		$data['querys'] = $this->Md_stock->show();
		$this->load->view('stock/table',$data);
	}
	
	public function find(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		$data['querys'] = $this->Md_drug->show();
		$this->load->view('stock/find',$data);
	}
	
	public function edit(){
		$data['alert_eror'] = null;
		$data['alert_success'] = null;
		
		$data['id'] = null;
		$data['drug_name'] = null;
		
		$this->form_validation->set_rules('id', 'Drug ID', 'required|numeric|max_length[15]');
		$this->form_validation->set_rules('drug_name', 'Drug Name', 'required|alpha_numeric_spaces|max_length[50]');
		$this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric|max_length[15]');
		
		if ($this->form_validation->run() == FALSE){
			
			$data['alert_eror'] = validation_errors();
			if($this->Md_stock->check() == null){
				if($this->Md_drug->check() == null){
					$data['alert_eror'] = 'Drug not found';
				}else{
					$fields = $this->Md_drug->check();
					foreach($fields as $field){
						$data['id'] = $field->id;
						$data['drug_name'] = $field->name;
					}
				}
			}else{
				$data['alert_eror'] = 'Stock added to this product';
			}
            $this->load->view('stock/edit',$data);
			
        }else{
			$data['alert_eror'] = validation_errors();
			if($this->Md_stock->check() == null){
				if($this->Md_drug->check() == null){
					$data['alert_eror'] = 'Drug not found';
				}else{
					$this->Md_stock->add();
					$data['alert_success'] = 'Successfully Added';
				}
			}else{
				$data['alert_eror'] = 'Stock added to this product';
			}
            $this->load->view('stock/edit',$data);
        }
	}
	
}