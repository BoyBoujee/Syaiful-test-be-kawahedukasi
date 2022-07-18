$data = array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);

$check = (int)readline('Masukkan angka: ');

if($check==1){
    echo $data[1], $data[3];
}else if($check<0){
    echo "Tidak bisa di validasi sistem";
}