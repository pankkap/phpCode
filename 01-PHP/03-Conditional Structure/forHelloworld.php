<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
<?php  
for($row=1;$row<=4;$row++)  
{  
	echo "<tr>";  
	for($column=1;$column<=4;$column++)  
	{
		$total=$row+$column;
		if($total%2==0)
		{  
			echo "<td  style=''align='center' height=75px width=30px>"."Hello"."</td>";  
		}  
		else  
		{  
			echo "<td  align='center' height=75px width=30px>"."World"."</td>";  
		}  
	}  
	echo "</tr>";  
}  
?>  
</table>