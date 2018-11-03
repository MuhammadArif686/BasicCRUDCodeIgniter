<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = $this->mymodel->GetMahasiswa();
		$this->load->view('table', array('data' => $data));
	}

	public function insert(){
		$res = $this->mymodel->InsertData('mahasiswa', array(
			"nim" => "15118484",
			"nama" => "Dony Prananda",
			"alamat" => "Kalasan",
		));

		if($res >= 1)
		{
			echo "<h1>Insert Data Berhasil</h1>";
		}
		else 
		{
			echo "<h1>Insert Data Gagal</h1>";
		}
	}

	public function delete()
	{
		$res = $this->mymodel->deleteData('mahasiswa', array('nim' => "15118484"));
		if($res >= 1)
		{
			echo "<h1>Delete data berhasil</h1>";
		} 
		else{
			echo "<h1>Delete Data Gagal</h1>";
		}
	}

	public function update()
	{
		$res = $this->mymodel->UpdateData('mahasiswa', array(
			"alamat" => "Kalasan, Yogyakarta",
		), array('nim' => "15118484"));

		if($res >= 1)
		{
			echo "<h1>Data Berhasil Diupdate</h1>";
		}
		else 
		{
			echo "<h1>Data Gagal Diupdate</h1>";
		}
	}

	public function panggil()
	{
		$data = $this->db->query("select * from mahasiswa")->result();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		foreach($data as $row)
		{
			echo "Nim " .$row->nim. "<br>";
			echo "Nama " .$row->nama. "<br>";
			echo "Alamat " .$row->alamat. "<hr>";
		}
	}

}
