<?php

class MKalkulator extends CI_Model {
        
    /**
     * tampil_data
     *
     * @return void
     */
    public function tampil_data() {
        // Membuat koneksi dengan database sekaligus mengambil data pada tabel perhitungan
        return $this->db->get('perhitungan');
    }
    
    /**
     * tampilHasil
     *
     * @return void
     */
    public function tampilHasil() {
        // Membuat query untuk melakukan koneksi dengan database tabel perhitungan
        // sekaligus mengambil value terakhir pada kolom hasil
        $query = $this->db->order_by('hasil', 'desc')->limit(1)->get('perhitungan');
        $result = $query->row_array();
        $hasil = $result['hasil'];
        return $hasil;
    }
}

?>