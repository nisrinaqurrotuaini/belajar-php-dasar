<?php
// Tipe Data Number (integer dan float)
$umur = 17; // integer
$tinggi_badan = 159; // float

// Tipe Data String
$nama = "Nisrina Qurrotu'aini";
$alamat = "Jatihurip";
$pekerjaan = "Magang";

// Tipe Data Boolean
$is_school = false; // Menyatakan apakah masih sekolah atau tidak
$punya_ktp = true; // Menyatakan apakah memiliki KTP atau tidak

// Output Data Diri
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Tinggi Badan: " . $tinggi_badan . " cm<br>";
echo "Alamat: " . $alamat . "<br>";
echo "Pekerjaan: " . $pekerjaan . "<br>";
echo "Status School: " . ($is_school ? "Masih Sekolah" : "Tidak Sekolah") . "<br>";
echo "Memiliki KTP: " . ($punya_ktp ? "Ya" : "Tidak") . "<br>";
