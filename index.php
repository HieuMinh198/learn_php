<?php 

//Đếm ký tự chuỗi
function demKyTuChuoi ($chuoi){
    echo 'Chuỗi có ', strlen($chuoi), ' ký tự ';
}

demKyTuChuoi("Hieu dep trai");

//Đến số từ trong 1 chuỗi
function demSoTuTrongChuoi ($chuoi){
    echo 'Chuỗi có ', str_word_count($chuoi), ' từ <br>';
}

demSoTuTrongChuoi ("Hieu dep trai");

//Đảo ngược chuỗi
function daoNguocChuoi ($chuoi){
    echo 'Chuỗi ban đầu: ', $chuoi, ' - ';
    echo 'Sau khi đảo: ', strrev($chuoi), '<br>';
}

daoNguocChuoi ("Hieu dep trai");

//Tìm kiếm chuỗi con trong 1 chuỗi
function timKiemChuoiCon($chuoi, $kyTu){
    $pos = strpos($chuoi, $kyTu);
    return $pos;
}
if (timKiemChuoiCon("hieu","h") !=''){
    echo " Có tìm thấy nhé <br>";
}
else{
    echo " Không thấy <br>";
}

//7
function chuyenChuoiVietThuong($chuoi){
    echo strtoupper($chuoi);
}
chuyenChuoiVietThuong("hieu <br>");

//8
function chuyenChuoiVietHoa($chuoi){
    echo strtolower($chuoi);
}
chuyenChuoiVietHoa("HIEU <br>");

//9
function chuyenChuoiInHoaChuDauTien($chuoi){
    echo ucwords($chuoi);
}
chuyenChuoiInHoaChuDauTien("hieu <br>");

//10
function boKhoangTrang($chuoi){
    echo trim($chuoi);
}
boKhoangTrang(" Hieu  <br>");

//11
function loaiBoKyTuDau($chuoi) {
    echo ltrim($chuoi, $chuoi[0]);
}

loaiBoKyTuDau("Anh");

//13 Tách chuỗi thành mảng
function tachchuoi($kyTu, $chuoi){
    $arr = explode($kyTu, $chuoi);
    return $arr;
}

print_r (tachchuoi(" ",'Hieu dep trai'));
?>