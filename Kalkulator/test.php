<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulator punktów</title>
	<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body>
   
<?php ini_set( 'display_errors', 'off' ); 
    
    $swiadectwo=$_POST['swiadectwo'];
	$polski=$_POST['polski'];
	$matematyka=$_POST['matematyka'];
	$geografia=$_POST['geografia'];
	$informatyka=$_POST['informatyka'];
	$jezykObcy=$_POST['jezykObcy'];
	$fizyka=$_POST['fizyka'];
	$egzaminPolski=$_POST['egzaminPolski'];
	$egzaminMatematyka=$_POST['egzaminMatematyka'];
	$egzaminJezykObcy=$_POST['egzaminJezykObcy'];
	$wolontariat=$_POST['wolontariat'];
    $t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t5=$_POST['t5'];
	$t6=$_POST['t6'];
	$t7=$_POST['t7'];
	$t8=$_POST['t8'];
	$t9=$_POST['t9'];
	$t10=$_POST['t10'];
	$t11=$_POST['t11'];
	$t12=$_POST['t12'];
	$t13=$_POST['t13'];
	$t14=$_POST['t14'];
	$t15=$_POST['t15'];
	$t16=$_POST['t16'];
	$t17=$_POST['t17'];
	$t18=$_POST['t18'];
	$z1=$_POST['z1'];
	$z2=$_POST['z2'];
	$z3=$_POST['z3'];
	$z4=$_POST['z4'];
	
	$a=$t1+$t2+$t3+$t4+$t5+$t6+$t7+$t8+$t9+$t10+$t11+$t12+$t13+$t14+$t15+$t16+$t17+$t18+$z1+$z2+$z3+$z4;
	$b=$wolontariat+$swiadectwo+$polski+$matematyka+$geografia+$informatyka+$jezykObcy+$fizyka;
    
    if($a>18)
	    {
		    echo 18+$b+ $egzaminPolski*0.35+$egzaminMatematyka*0.35+$egzaminJezykObcy*0.3;
	    }
	    elseif($S<18)
	        {
		        echo $a+$b+ $egzaminPolski*0.35+$egzaminMatematyka*0.35+$egzaminJezykObcy*0.3;
	        }
?>

</body>
</html>