<?php
include 'temp\header.html'; 
include 'database.php';
echo "<div id='table'>
<table align='center'>
<tr> 
	<td>Train Number</td> 
	<td>Time Start From Station</td>
	<td>Time Arrive To  Destniton</td>
</tr>

";

if($_POST['form']!=$_POST['to'])
{
	$from=$_POST['form'];
	$to=$_POST['to'];
	$class=$_POST['class'];
	if($class==0)
	{
$q1="SELECT * From  $from ";
$q2="SELECT * From  $to ";
$allfrom=getrows($q1,array());
$allto=getrows($q2,array());
echo '<h1 dir=rtl> عدد القطارات '.count($allto).'</h1>';
for($i=0;$i<count($allto);$i++)
{

	$asd=$allto[$i][2];
$asd=$asd[0]+rand(2,9);

echo "<tr><td>".$allto[$i][0]."</td>"; 

echo "<td>".$allto[$i][2]."</td>";	
echo "<td>".$asd.substr($allto[$i][2], -3)."</td></tr>";	
}
	}
	else
{

$q1="SELECT * From  $from where class=? ";
$q2="SELECT * From  $to where class=?";
$allfrom=getrows($q1,array($class));
$allto=getrows($q2,array($class));
echo '<h1 dir=rtl> عدد القطارات '.count($allto).'</h1>';
if(count($allto)<count($allfrom))
$length=count($allto);
elseif(count($allto)>count($allfrom))
$length=count($allfrom);
else
$length=count($allfrom);
$resultfrom=array();
$resultto=array();
for ($i=0; $i <$length ; $i++) 
{ 
$fromid=$allfrom[$i][0];
$toid=$allto[$i][0];
if($fromid==$toid)
{
	$GLOBALS['resultfrom'][$i]=$allfrom[$i];
	$GLOBALS['resultto'][$i]=$allto[$i];
}
}
for($i=0;$i<$length;$i++)
{

	$asd=$resultfrom[$i][2];
$asd=$asd[0]+rand(2,9);

echo "<tr><td>".$resultfrom[$i][0]."</td>"; 

echo "<td>".$resultfrom[$i][2]."</td>";	
echo "<td>".$asd.substr($resultfrom[$i][2], -3)."</td></tr>";	
}
}
echo "</table>";
}
else
{
	echo '<h1 dir="rtl">يجب ان تكون محطه الذهاب مختلفه عن محطه الوصول </h1>';
}



	?>

<?php
include 'temp\footer.html';

?>