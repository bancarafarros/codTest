<?php

// class CKalkulator3 extends CI_Controller {

		
// 	/**
// 	 * index
// 	 *
// 	 * @return void
// 	 */
// 	public function index() {
// 		$data['perhitungan'] = $this->MKalkulator->tampil_data()->result();

// 		$this->load->view('VKalkulator', $data);
// 	}

// 	public function kalkulator2() {
// 		$data['perhitungan'] = $this->MKalkulator->tampil_data()->result();

// 		$this->load->view('VKalkulator2', $data);
// 	}
	
// 	/**
// 	 * hitung
// 	 *
// 	 * @return void
// 	 */
// 	public function hitung() {
// 		$bil_pertama = $this->input->post("bil_pertama");
// 		$operator = $this->input->post("operator");
// 		$bil_kedua = $this->input->post("bil_kedua");
// 		$hasil = $this->input->post("hasil");

// 		if ($operator == "/" && $bil_kedua == 0) {
// 			$this->session->set_flashdata('message',
// 			'<strong>Pembagian 0 tidak bisa dilakukan</strong>');
// 			redirect(base_url('CKalkulator/index'));
// 		}

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

// 		// var_dump($hasil);

// 		$ArrInsert = array(
// 			'id' => $id,
// 			'bil_pertama' => $bil_pertama,
// 			'operator' => $operator,
// 			'bil_kedua' => $bil_kedua,
// 			'hasil' => $hasil
// 		);
// 		// var_dump($ArrInsert);

// 		$this->db->insert('perhitungan', $ArrInsert);
// 		redirect(base_url('CKalkulator/index'));
// 	}
// }

?>