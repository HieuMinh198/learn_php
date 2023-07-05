<?php
//Bài tập Tạo lớp Hình chữ nhật:
// Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
// Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật.
class Rectangle{
    protected $length;
    protected $width;
    public function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }
    public function calArea(){
        return $this->length * $this->width;
    }
    public function calPerimeter(){
        return ($this->length + $this->width)*2;
    }
}
$lengh = 12;
$width = 6;
$rectange = new Rectangle($lengh, $width);
echo "Bài 1: <br>Area is: ". $rectange->calArea(). "<br>";
echo "Perimeter is: ". $rectange->calPerimeter(). "<br><br><br>";

// Bài tập Tạo lớp Điểm 2D:
// Tạo một lớp Diem2D với các thuộc tính x và y.
// Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.

class Point2d{
    protected $x;
    protected $y;
    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function calDistance (){
        if($this->x >= $this->y){
            return $this->x - $this->y;
        }
        else{
            return $this->y - $this->x;
        }
    }
}
$x = 5;
$y = 10;
$point2d = new Point2d($x, $y);
echo "Bài 2 <br> Distance 2 points is: ". $point2d->calDistance(). "<br><br><br>";

// Bài tập Tạo lớp Mảng số nguyên:
// Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
// Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.

class Integer{
    protected $arrInt;
    public function __construct($arrInt){
        $this->arrInt =  $arrInt;
    }
    public function calTotal(){
        return array_sum($this->arrInt);
    }
    public function calMedium(){
        return (array_sum($this->arrInt))/count($this->arrInt);
    }
    public function findMax(){
        return max($this->arrInt);
    }
}
$arrInt = array(3,5,7,9,11,13);
$integer = new Integer($arrInt);
echo "Bài 3 <br>Array total is: ".$integer->calTotal(). "<br>";
echo "Array medium is: ".$integer->calMedium(). "<br>";
echo "Array max is: ".$integer->findMax(). "<br><br><br>";
?>