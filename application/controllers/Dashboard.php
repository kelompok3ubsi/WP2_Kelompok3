<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['user_m', 'item_m', 'supplier_m', 'customer_m', 'sale_m']);
	}

	public function index()
	{
		$data = [
			'product' => 0,
			'item' => 0,
			'supplier' => 0,
			'user' => 0,
			'customer' => 0
		];
		try {
			
			$data['product'] = $this->sale_m->sale_detail()->result();
			$data['product'] = !empty($data['product']) ? $data['product'] : 0;

			$data['item'] = $this->item_m->get()->result();
			$data['item'] = !empty($data['item']) ? $data['item'] : 0;

			$data['supplier'] = $this->supplier_m->get()->result();
			$data['supplier'] = !empty($data['supplier']) ? $data['supplier'] : 0;

			$data['user'] = $this->user_m->list()->result();
			$data['user'] = !empty($data['user']) ? $data['user'] : 0;

			$data['customer'] = $this->customer_m->get()->result();
			$data['customer'] = !empty($data['customer']) ? $data['customer'] : 0;

		} catch (\Throwable $th) {
			//throw $th;
		}
			// var_dump($data); die;

		$this->template->load('template', 'dashboard', $data);
	}
}