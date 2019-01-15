<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class payment_settings extends MX_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(get_class($this).'_model', 'model');
		permission_view(true);
		if(hashcheck()){
			redirect(PATH);
		}
	}

	public function index(){
		$data = array(
			"result" => $this->model->get("*", PAYMENT)
		);
		$this->template->title(l('Payment settings'));
		$this->template->build('index', $data);
	}

	public function ajax_update(){
		$id = (int)post("id");

		if(post("paypal_email") == ""){
			ms(array(
				"st"    => "error",
				"label" => "bg-red",
				"txt"   => l('Paypal email is required')
			));
		}

		if(post("currency") == ""){
			ms(array(
				"st"    => "error",
				"label" => "bg-red",
				"txt"   => l('Currency is required')
			));
		}

		$data = array(
			"paypal_email" => post("paypal_email"),
			"sandbox"      => (int)post("sandbox"),
			"currency"     => post("currency")
		);

		$this->db->update(PAYMENT, $data, array("id" => $id));

		ms(array(
			"st"    => "success",
			"label" => "bg-light-green",
			"txt"   => l('Update successfully')
		));
	}
}