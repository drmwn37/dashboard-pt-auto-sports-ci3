<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['metodePembayaran'] = $this->modelAutoSports->get_data('metode_pembayaran')->result();
		$data['dataPembayaran'] = $this->modelAutoSports->get_data('data_pembayaran')->result();
		// Jumlah Penerimaan Setiap Metode Pembayarab
		$data['cash'] = $this->modelAutoSports->get_MP('metode_pembayaran', 'data_pembayaran', 'Cash');
		$data['cashAdminColl'] = $this->modelAutoSports->get_MP('metode_pembayaran', 'data_pembayaran', 'Cash Admin Coll');
		$data['atmPayment'] = $this->modelAutoSports->get_MP('metode_pembayaran', 'data_pembayaran', 'ATM PAYMENT');
		$data['thirdParty'] = $this->modelAutoSports->get_MP('metode_pembayaran', 'data_pembayaran', 'Third Party Cash Payment');
		$data['transfer'] = $this->modelAutoSports->get_MP('metode_pembayaran', 'data_pembayaran', 'Transfer');

		$data['title'] = "PT. Auto Sports | Dashboard";
		$data['contentTitle'] = "Dashboard";

		$this->load->view('dashboard', $data);
	}
}
