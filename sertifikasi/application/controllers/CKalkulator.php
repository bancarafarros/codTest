<?php

class CKalkulator extends CI_Controller {

	/**
	 * index
	 *
	 * @return void
	 */
	public function index() {
		// Menampilkan data yang sebelumnya dimuat di model bersama dengan file view sebagai tampilan kalkulator
		$data['perhitungan'] = $this->MKalkulator->tampil_data()->result();
		$data['tampilHasil'] = $this->MKalkulator->tampilHasil();

		$this->load->view('VKalkulator', $data);
	}
	
	/**
	 * hitung
	 *
	 * @return void
	 */
	public function hitung() {
		// Menangkap input dari form kalkulator
		$bil_pertama = $this->input->post("bil_pertama");
		$operator = $this->input->post("operator");
		$bil_kedua = $this->input->post("bil_kedua");
		$hasil = $this->input->post("hasil");

		// Handle ketika melakukan pembagian dengan 0 
		if ($operator == "/" && $bil_kedua == 0) {
			$this->session->set_flashdata('message',
			'<strong>Pembagian 0 tidak bisa dilakukan</strong>');
			redirect(base_url('CKalkulator/index'));
		}

		// Terdiri dari proses perhitungan sederhana yang meliputi perkalian, pembagian, penjumlahan, pengurangan, serta modulus
		if ($operator == "*") {
			$hasil = $bil_pertama * $bil_kedua;
		
		} elseif ($operator == "/") {
			$hasil = $bil_pertama / $bil_kedua;

		} elseif ($operator == "+") {
			$hasil = $bil_pertama + $bil_kedua;
		
		} elseif ($operator == "-") {
			$hasil = $bil_pertama - $bil_kedua;
		
		} elseif ($operator == "%") {
			$hasil = $bil_pertama % $bil_kedua;
		}

		// Menampung input dari form kalkulator ke dalam sebuah array
		$ArrInsert = array(
			'id' => $id,
			'bil_pertama' => $bil_pertama,
			'operator' => $operator,
			'bil_kedua' => $bil_kedua,
			'hasil' => $hasil
		);

		// Perintah untuk memasukkan semua input dari view kalkulator ke database tabel perhitungan
		$this->db->insert('perhitungan', $ArrInsert);
		redirect(base_url('CKalkulator/index'));
	}
}

?>