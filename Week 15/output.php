
<html>
<head>
<title></title>
</head>

<body>

<?php
class Person
	{
		protected $name,$age,$role;
		public function __construct($pname,$page,$prole){
			$this->name = $pname;
			$this->age  = $page;
			$this->role = $prole;
		}
		public function getRole(){
			return $this->role;
		}
		public function getNameCell(){
			return "<td width='128'> Name: <dd>" . $this->name . "</dd></td>";
		}
		public function getAgeCell(){
			return "<td width='128'> Age: <dd>" . $this->age . "</dd></td>";
		}
		public function getImageCell($imgName){
			return "<td align='center' width='128'><img src='images/" . $imgName . ".png' width='128' height='128'></td>";
		}
	}

	//------------- Declarations -------------------------------------------//
	$_parent   = $_GET['parent'];
	$_children = $_GET['children'];
	$img = array("Grape","Colored_Blue","Colored_Green","Colored_Orange","Colored_Pink","Colored_Red");
	$famNum = 0;
	
	//------------- Split parents ------------------------------------------//
	$parent = explode(";",$_parent);
	
	if (count($parent) != 2){
		die ("You should have only 2 parents!");
	}
	else{
	foreach ($parent as $value){
		$tmp = explode(",",$value);
		$family[$famNum++] = new Person($tmp[0],$tmp[1],"parent");
	}

	
	//------------- Split children ------------------------------------------//
	//	write the code here to split children
	$children=explode(";",$_children);
	if($children[0] =='')
	{
			die ("You should have at least 1 child");
	}
	else{
		foreach($children as $value)
		{
			$tmp = explode(",",$value);
		//	print_r($tmp);
			$family[$famNum++] = new Person($tmp[0],$tmp[1],"children");
		}

?>


<h1>Parent</h1>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <?php
	//-------------- Show family member number ------------------------------//
		echo "<h2>Total member is $famNum </h2>";
		for($j=0;$j<2;++$j) 
			echo $family[$j]->getNameCell();
	?>
  </tr>
  <tr>
    <!--
		write the code here
		-->
		<?php
		for($j=0; $j<2; ++$j)
		echo $family[$j]->getAgeCell();
		?>
  </tr>
  <tr>
    <!--
		write the code here
	-->
	<?php
	for($j=0 ;$j<2; ++$j)
	echo $family[$j]->getImageCell($img[$j]);
	?>
  </tr>
</table>
<h1>Children</h1>
<table border="1" cellspacing="0" cellpadding="0">
  <tr>
    <!--
		write the code here
	-->
	<?php
	for($j=2;$j<$famNum;++$j) 
		echo $family[$j]->getNameCell();
	?>
  </tr>
  <tr>
    <!--	write the code here-->
	<?php
	for($j=2;$j<$famNum;++$j) 
		echo $family[$j]->getAgeCell();
	?>
  </tr>
  <tr>
    <!--
		write the code here
	-->
	<?php
	for($j=2;$j<$famNum;++$j) 
		echo $family[$j]->getImageCell($img[rand(0,5)]);		
	}
}
	?>
  </tr>
</table>

</body>
</html>