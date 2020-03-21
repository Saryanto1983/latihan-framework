<head> 
 <title>UTS Konversi Suhu</title> 
 </head> 
 <body> 
 <h2>Konversi Suhu</h2> 
 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET"> 
  Derajat: 
 <input type = "text" name = "degree" size=4> 
 <select name="scale"><option value="celcius">Celsius</option><option value="fahrenheit">Fahrenheit</option><option value="reamur">Reamur</option><option value="kelvin">Kelvin</option></select> 
 <br/> 
 <input type = "submit" name = "Konversi Suhu"/> 
 </form> 

<?php 

 //check for input
 if (array_key_exists('degree',$_GET)){
	$scale = $_GET['scale'];
	$degree = $_GET['degree'];
	$firstLength = strlen($_GET['degree']);
	
	//check that input is not NULL or NaN
	if(($firstLength > 0) && (is_numeric($_GET['degree'])))
		{
		if ($scale == "celcius") 
		{
			 print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$degree</td><td>Celcius</td></tr>"; 
			 $c_2_f = $degree*9/5+32; 
             print "<tr><td>$c_2_f</td><td>Fahrenheit</td></tr>";
             $c_2_r = $degree*4/5;
             print "<tr><td>$c_2_r</td><td>Reamur</td></tr>";
			 $c_2_k = $degree+273.15; 
			 print "<tr><td>$c_2_k </td><td>Kelvin</td></tr>"; 
		} 

		if ($scale == "fahrenheit") 
		{
             print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$degree</td><td>Fahrenheit</td></tr>"; 
			 $f_2_c = ($degree -32)*5/9; 
             print "<tr><td>$f_2_c</td><td>Celcius</td></tr>";
             $f_2_r = ($degree -32)*4/9;
             print "<tr><td>$f_2_r</td><td>Reamur</td></tr>"; 
			 $f_2_k = ($degree -32)*5/9+273.15; 
			 print "<tr><td>$f_2_k </td><td>Kelvin</td></tr>"; 
		} 
		 
		 if ($scale == "kelvin") 
		{
			 print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$degree</td><td>Kelvin</td></tr>";
             $k_2_c = $degree-273.15; 
			 print "<tr><td>$k_2_c </td><td>Celcius</td></tr>"; 
			 $k_2_f = ($degree - 273.15)*9/5+32; 
             print "<tr><td>$k_2_f</td><td>Fahrenheit</td></tr>"; 
             $k_2_r = ($degree -273.15)*4/5;
             print "<tr><td>$k_2_r</td><td>Reamur</td></tr>";
		} 
		 
		 if ($scale == "reamur") 
		{
			 print "<table border><tr><th colspan=2> Hasil Konversi</th></tr><tr><td>$degree</td><td>Reamur</td></tr>"; 
             $r_2_c = $degree*5/4; 
			 print "<tr><td>$r_2_c </td><td>Celcius</td></tr>";
             $r_2_f = $degree*9/4+32; 
			 print "<tr><td>$r_2_f</td><td>Fahrenheit</td></tr>"; 
			 $r_2_k = $degree*5/4+273.15; 
			 print "<tr><td>$r_2_k</td><td>Kelvin</td></tr></table>";
		} 
	 }
	 else
		//print an error message if input is NULL or NaN
		echo "<span style = \"color:red\">*Silahkan Masukan Suhu Yang Valid!</span>";
}

 ?> 