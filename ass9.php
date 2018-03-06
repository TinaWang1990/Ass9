<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
//1.
class Point {
	public $x;
	public $y;

	function __construct($x,$y){
		$this->x=$x;
		$this->y=$y;
	}
	public function moveTo($x,$y){
		$a=0;
		$b=0;
		$a+=$x;
		$b+=$y;
	}
	public function distance(){
		$p=sqrt(pow($this->x, 2)+pow(($this->y),2));
		
		return $p;
	}
 
}

$pointA= new Point(2,3);
echo $pointA->distance();

//2.
$a = 1111;
$a=(string)$a;
if(strlen($a)%3 == 0){
	$n=strlen($a);
}else{
	$j=3-strlen($a)%3;
	$n=$j+strlen($a);

}
$sum=null;
$a=str_pad($a,$n,"0",STR_PAD_LEFT);

$arr=str_split($a);
print_r( $arr);
for($i=0;$i<$n;$i+=3){
	$t=$i+1;
	$h=$i+2;
 $x=$arr[$i]*4+$arr[$t]*2+$arr[$h];
 $sum.=strval($x);
}
echo $sum;



//3.

function jiecheng($n){
	if($n==1){
		return 1;
	}else if($n==2){
		return 2;
	}else{
		return jiecheng($n-1)*$n;
	}
}

echo jiecheng(3);


4.//ass abc it dosent work
function reverse($nmb){
	$str=$nmb;
	$new_string=strrev($str);
	return $new_string;
}
echo reverse(23453);

?>


</body>
</html>