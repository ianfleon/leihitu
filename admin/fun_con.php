<?php
require 'koneksi.php';

// Method Upload Gambar Ke Server
function uploadGambar($gambar)
{

	$nama_gambar = $gambar["name"];
	$temp_gambar = $gambar["tmp_name"];
	$tipe_gambar = $gambar["type"];
	$ukuran_gambar = $gambar["size"];

	$ekstensi_gambar = explode(".", $nama_gambar);
	$ekstensi_gambar_baru = end($ekstensi_gambar);

	// $nama_gambar_baru = uniqid() . '.' . $ekstensi_gambar_baru;
	$nama_gambar_baru = $nama_gambar;

	$upImg = move_uploaded_file($temp_gambar, '../img/' . $nama_gambar_baru);

	return $nama_gambar_baru;

}

// Method Tambah Galeri
function tambahGaleri($data_galeri)
{
	global $konek;

	$deskripsi = $data_galeri["deskripsi"];

	$gambar = $_FILES["gambar"];

	$gambar_baru = uploadGambar($gambar);

	// Mysqli Query
	$query = "INSERT INTO galeri_tb VALUES ('', '$gambar_baru', '$deskripsi')";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

// Method tambahTempat
function tambahTempat($data_tempat)
{
	global $konek;

	$nama = $data_tempat["nama"];
	$deskripsi = $data_tempat["deskripsi"];
	$map_link = $data_tempat["map_link"];
	$kategori = $data_tempat["kategori"];
	
	$gambar = uploadGambar($_FILES["gambar"]);

	// Mysqli Query
	$query = "INSERT INTO tempat_tb VALUES ('', '$nama', '$gambar', '$deskripsi', '$map_link', '$kategori')";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);


}

// Method editTempat
function editTempat($data_tempat)
{
	global $konek;

	$id = $data_tempat["id"];
	$nama = $data_tempat["nama"];
	$deskripsi = $data_tempat["deskripsi"];
	$map_link = $data_tempat["map_link"];
	$kategori = $data_tempat["kategori"];
	$gambar_lama = $data_tempat["gambar_lama"];
	$gambar = "";
	$gambar_baru = uploadGambar($_FILES["gambar"]);

	if(empty($gambar_baru)) {
		$gambar = $gambar_lama;
	} else {
		$gambar = $gambar_baru;
	}

	// Mysqli Query
	$query = "UPDATE tempat_tb SET nama_tempat = '$nama', gambar_tempat = '$gambar', deskripsi_tempat = '$deskripsi', link_map = '$map_link', kategori = '$kategori' WHERE id_tempat = '$id'";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);


}

