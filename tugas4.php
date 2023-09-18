<?php

// <!-- mengenkripsi dari karakter awal menjadi enkripsi tipe md5 -->
$encryption = "admin";
echo "<p>Enkripsi md5 dari string 'admin' : " . md5($encryption) . "<p>";


// Memisahkan string dengan pemisah tertentu dan dijadikan array

$data = "Affan,Naafiul,Bagus,Okan,Odan,Alfa";
$ppls  = explode(',', $data);

echo "Mahasiswa Pertama : " . $ppls[0] . "<br>";
echo "Mahasiswa Kedua : " . $ppls[1] . '<br>';

// Menggabungkan array dengan separator yang sudah di set dan menjadi sebuah string 
$data = array('Affan', 'Naafiul', 'Bagus', 'Bagus', 'Okan', 'Odan', 'Alfa');

echo "Mahasiswa di PPLS 1A ada 6 yaitu : " . join(', ', $data) . '<br>';

// Membuat variable menggunakan string yang kemudian di parsing menjadi sebuah array yang akan dimasukkan kedalam sebuah variable 
parse_str("nama=affansyah&kelas=PPLS-1A", $params);

echo "Saya " . $params['nama'] ." dari Kelas " . $params['kelas'] . '<br>';

// Mengeksekusi karakter special agar tidak terbaca seperti html code 
$string = "Ini <b>Bold Text</b><br>";

echo "Tanpa htmlspecialchars : " . $string;
echo "Dengan htmlspecialchars : " . htmlspecialchars($string);


// Mengulang kata-kata yang diberikan sebanyak yang di inputkan pada parameter kedua
echo '<br>' . str_repeat("Solid! ", 3);


// memberikan format kepada nomor 
$harga = 1650000;

echo "<br>Harga VGA GTX 1050 TI ialah Rp. " . number_format($harga, 0, ',', '.');

$password = "123456";
$repassword = "123454";

// Untuk membandingkan apakah string pertama dan string kedua itu sama 
echo "<br>Apakah password sudah sama?<br>";
if (strcmp($password, $repassword) === 0) {
    echo "Password dan Re-Password sama";
} else {
    echo "Password dan Re-Password tidak sama";
}

// Menghapus slash dalam sebuah string 
$string = "rumah\,kantor\,\ataupun lainnya";
echo "<br>tanpa stripslashes : $string";
echo "<br>dengan stripslashes : " . stripslashes($string); 


// Mengambil pencarian dalam string dengan pencarian string untuk menentukan awal index 
$string = "Ambil kamu atau dia";

echo "<br>Aku Pilih " . stristr($string, 'dia');

 ?>
