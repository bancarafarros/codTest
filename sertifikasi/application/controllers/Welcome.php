<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Welcome extends CI_Controller {

// 	public function index() {
// 		$data['perhitungan'] = $this->MKalkulator->tampil_data()->result();

// 		$this->load->view('VKalkulator', $data);
// 	}

// 	public function hitung() {
// 		$bil_pertama = $this->input->post("bil_pertama");
// 		$operator = $this->input->post("operator");
// 		$bil_kedua = $this->input->post("bil_kedua");
// 		$hasil = $this->input->post("hasil");

// 		var_dump($bil_pertama);

// 		if ($operator == "*") {
// 			$hasil = $bil_pertama * $bil_kedua;
		
// 		} elseif ($operator == "/") {
// 			$hasil = $bil_pertama / $bil_kedua;

// 		} elseif ($operator == "+") {
// 			$hasil = $bil_pertama + $bil_kedua;
		
// 		} elseif ($operator == "-") {
// 			$hasil = $bil_pertama - $bil_kedua;
		
// 		} elseif ($operator == "%") {
// 			$hasil = $bil_pertama % $bil_kedua;
// 		}

// 		$ArrInsert = array(
// 			'id' => $id,
// 			'bil_pertama' => $bil_pertama,
// 			'operator' => $operator,
// 			'bil_kedua' => $bil_kedua,
// 			'hasil' => $hasil
// 		);

// 		$this->db->insert('perhitungan', $ArrInsert);
// 		redirect(base_url('CKalkulator/index'));
// 	}
// }

?>