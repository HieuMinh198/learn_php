<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
//1
function checkChan($so){
    $check = $so % 2;
    return $check;
}
if(checkChan(10) == 0){
    echo "Là số chẵn nhé <br>";
}
else{
    echo "Là số lẻ nhé <br>";
}

//2

function tinhTong($n){
    $s = 0;
    for($i = 1; $i <= $n; $i++)
        $s = $s + $i;
        return $s;
}
echo " Tổng là: ".tinhTong(3)."<br>";

//3
function bangCuuChuong(){
    for($i = 1; $i<=10; $i++){
        for($j = 1; $j <= 10; $j++){
            echo $i." * ".$j."<br>";
        }
    }
}
bangCuuChuong();

//4
function checkChuoi($chuoi, $kyTu){
    $check = strpos($chuoi, $kyTu);
    return $check;
}
if(checkChuoi('hieu','l') != ''){
    echo "Có ký tự nhé! <br>";
}
else{
    echo "Không có nhé! <br>";
}
//5












//3 Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function bangCuuChuong1(){ //Khai báo hàm Cho em viết tạm tiếng Việt đi anh :( ) Em chưa gg dịch :(
    for($i = 1; $i <=10; $i++){ //Khai báo vòng lặp i chạy từ 1 đến 10 và j chạy từ 1 đến 10
        for($j = 1; $j<=10; $j++){
            echo $i."x".$j."<br>"; // In ra bảng cửu chương x  Em xuống dòng // in ra bảng cửu chương mà? có phải in ra kết quả đâu à ok đợi em sửa :v -_- Không ai nhận xét dc phải tính điểm cho em chứ
        }
    }
}
bangCuuChuong1();

//4 Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function checkChuoi1($chuoi, $kyTu){  //Bài này em làm rồi chắc em đặt tên giống nên lỗi
    $check = strpos($chuoi, $kyTu);
    return $check;
}
if(checkChuoi1('hieu','m') != ''){ // ok ạ
    echo "Có";
}
else{
    echo "Không";
} // Vâng ạ. Em đang trả về vị trí ký tự ấy anh rồi check rỗng
?>
</body>
</html>

