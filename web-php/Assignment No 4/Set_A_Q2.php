<html>
<form action="A4SA2.php"method="post">
<i>Square :</i><br><br>
Enter Side Value : <input type="number" name="a"><br><br>
<i>triangle :</i><br><br>
Enter Base Value : <input type="number" name="a1"><br><br>
Enter Height Value :<input type="number" name="b1"><br><br>
<i>Rectangle :</i><br><br>
Enter Width Value : <input type="number" name="a2"><br><br>
Enter Height Value :<input type="number" name="b2"><br><br>
<i>Circle :</i><br><br>
Enter Radius Value : <input type="number" name="a3"><br><br>
<br><br>
<input type="radio" name="opt" value="t">Triangle<br><br>
<input type="radio" name="opt" value="s">Square<br><br>
<input type="radio" name="opt" value="r">Rectangle<br><br>
<input type="radio" name="opt" value="c">Circle<br><br>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
class shape 
{

}
class square extends shape
{

    public function areas($e)
	{
		$area=$e*$e;
		echo "Area of square is : ".$area;
	}		
}class  triangle extends shape
{

    public function areat($e,$h)
	{
		$area= 0.5*$e*$h;
		echo "Area of triangle is : ".$area;
	}		
}class rectangle extends shape
{

    public function arear($e,$f)
	{
		$area=$e*$f;
		echo "Area of Rectangle is : ".$area;
	}		
}class circle extends shape
{

    public function areac($e)
	{
		$pie=3.14;
		$area=$pie*$e*$e;
		echo "Area of Circle is : ".$area;
	}		
}
$o=$_POST['opt'];
if($o=='s')
{
	$a=$_POST['a'];
	$objs=new square;
	$objs->areas($a);
}
if($o=='t')
{
	$a=$_POST['a1'];
	$b=$_POST['b1'];
	$objs=new triangle;
	$objs->areat($a,$b);
}
if($o=='r')
{
	$a=$_POST['a2'];
	$b=$_POST['b2'];
	$objs=new rectangle;
	$objs->arear($a,$b);
}
if($o=='c')
{
	$a=$_POST['a3'];
	$objs=new circle;
	$objs->areac($a);
}


?>
