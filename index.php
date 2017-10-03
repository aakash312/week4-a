	<?php
	echo"<center> <h1> WEEK 4 ASSIGNMENT </h1> </center>";
	echo "<body style='background-color:#D3D3D3'>";
	echo  "Date-".date("m.d.y")."<br>";
	echo "<b>Attn: Prof. Keith Willams </b> <br>";
	echo "<b>TA: Ikjyot Singh Gujral </b><br>";
	echo '<br>';
	$date =  date('Y-m-d', time());
	echo "<b> 1. </b> The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	$ram;
	echo '<hr>';
	echo '<br>';

	class main 
	{
	public function REPLACE ($date)
	{	
	echo "<b>2.</b> Replacing - with / <br>";
	$ram = str_replace ("-","/","$date");
	echo $ram;
	echo '<br>';
	echo '<hr>';
	}
	public function COMPARE($data,$tar)
	{	
	echo " <b>3.</b> Comparing $data and $tar <br> ";
	$alpha=strcmp($data,$tar);
	if($alpha>0)
	{
	echo 'Future <br>';
	}
	elseif($alpha<0)
	{
	echo 'Past <br>';
	}
	else 
	{
	echo 'oops <br>';
	}
	echo '<hr>';
	}
	public function SEARCH($data) 
	{
	echo " <b>4.</b> Searching and printing <br> ";
	$arsenal = str_split($data);
	for ($imi=0; $imi < sizeof($arsenal); $imi++) {
	if($arsenal[$imi] == '/') {
	echo  $imi. " ";
	}
	}	
	echo '<hr>';
	}
	public function COUNT($data)
	{
	echo '<br>';
	echo "<b>5. </b> Words in $data:<br>";
	$words = explode("/",$data);
	echo "No of words " . sizeof($words);
	echo "<br>";
	echo "List of words:";
	echo "<br>";
	foreach ($words as $word)
	{
	echo $word . "<br>";
	}
	echo '<hr>';
        }
        public function LENGTH($data)
        {
        echo "<b>6.</b> The length of string $data is ";
        echo strlen($data);
        echo '<hr>'; 
        }
    
        public function ASCII ($data)
        {
        if (ord($data) );
        {
        echo '<br>';
        echo "<b> 7.</b> ASCII Value of string $data is :" . ord($data);
        }
        echo '<hr>';
        }

         public function LASTTWO($data)
        {
        echo '<br>';
        echo "<b>8. </b> Last two characters of $data :"  .substr ("$data",-2);
        echo '<hr>';
        }
        
	public function NINE($data)
	{		
	echo "<b>9.</b>";
	echo "The string is $data <br>";
	$beta= explode('/',$data);
	foreach($beta as $element)
	{
	echo $element;
	echo " ";
	}
	echo '<hr>';
	}
	public function LEAPYEAR($year)
	{
	echo "<b> 10.</b> Leap Year <b>(FOREACH LOOP WITH SWITCH CASE)</b>";
	echo "<br>";
	foreach ($year as $y )
	{
	switch((($y % 4) == 0) && ((($y % 100) != 0) || (($y % 400) == 0)))
	{
	case True:
	echo $y . " -------> Yes, A leap year.";
	break;
	default:
	echo $y . " -------> No,Not a leap year.";
	}
	echo "<br>";
	}
	echo "<br>";
	echo "Leap Year <b>(FOR LOOP)</b>";
	echo "<br>";
	for($i=0; $i< sizeof($year); $i++){
	switch((($year[$i] % 4) == 0) && ((($year[$i] % 100) != 0) || (($year[$i] % 400) == 0))){
	case True:
	echo $year[$i] . " -------> Yes, A leap year.";
	break; 
	default:
	echo $year[$i] . " -------> No,Not a leap year. ";
	}
	echo "<br>";
	}
	echo '<hr>';
	}
	}
	$object= new main();
	$data=str_replace ("-","/","$date");
	$object->REPLACE($date);
	$object->COMPARE($data,$tar);
	$object->SEARCH($data);
	$object->COUNT($data);
	$object->LENGTH($data);
	$object->ASCII($data);
	$object->LASTTWO($data);
	$object->NINE($data);
	$object->LEAPYEAR($year);
	?>
