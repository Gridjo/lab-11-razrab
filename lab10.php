<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="GET">
 <p>Введите х: <input type="text" name="x" /></p>
 <p>или введите abc:</p>
 <input type="text" name="a" /></p>
 <input type="text" name="b" /></p>
 <input type="text" name="c" /></p>
 <p><input type="submit" /></p>
</form>
<?php

/**
 * 
 */
class ClassName
{
	public $x;
	public	$y = 0;
	function __construct($x,$a,$b,$c)
	{
		$this->x=$x;
		$this->a=$a;
		$this->b=$b;
		$this->c=$c;
		
	}
	function first(){
		if($this->x<=3)
		{	
			$y = ($this->x**2)-(3*$this->x)+9;
			echo $y;
		}
		if ($this->x>3)
		{	
			$y = ($this->x**3)+6;
			echo $y;
		}
		
	}
	function second(){
		$y = ($this->a*$this->b)+$this->c;
		echo $y;
	}
}

if($_GET['x']!=NULL)
{	
	$tt = new ClassName($_GET['x'],0,0,0);
	$tt->first();
}
if ($_GET['x']!=NULL){
	$a = (int)$_GET['a'];
	$b = (int)$_GET['b'];
	$c = (int)$_GET['c'];
	$tt = new ClassName(0,$a,$b,$c);
	$tt->second();
}



?>
</body>
</html>