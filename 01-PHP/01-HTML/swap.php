<?php 
extract($_POST);
var_dump($_POST);

if(isset($swap))
{
	//first number
	$x=$fn;
	//second number
	$y=$sn;
	
	//third is blank
	$z=0;
	
	//now put x's values in $z
	$z=$x;
	
	//and Y's values into $x
	$x=$y;
	
	//again store $z in $y
	$y=$z;
	
	
	//Print the reversed Values
	echo "<p align='center'>Now First numebr is : ". $x ."<br/>";
	echo "and Second number is : ". $y."</p>";
}
?>

<form method="post">
<table align="center">
	<tr>
		<td>Enter First number</td>
		<td><input type="text" name="fn"/></td>
	</tr>
	<tr>
		<td>Enter Second number</td>
		<td><input type="text" name="sn"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<input type="submit" value="Swap Numbers" name="swap"/></td>
	</tr>
</table>
</form>