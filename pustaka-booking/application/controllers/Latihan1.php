<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
       echo "Selamat Datang.. selmat belajar Web programming";
       //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
         $this->load->model('Model_latihan1');
         $hasil = $this->Modeltihan1->jumlah($n1, $n2);
         echo "Hasil Penjumlahan dari". $n1 . " + ". $n2 ." = "
.$hasil;
    }
}