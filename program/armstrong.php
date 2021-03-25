<?php
/* an armstrong program*/
$num=407;
$total=0;
$x=$num;
while($x!=0)
{
	$rem=($x%10);
	$total=$total+$rem*$rem*$rem;
	$x=$x/10;
}
if($num==$total)
{
	echo "yes it is armstrong number";
}
	else
	{
		echo "No it is not armstrong number";
	}
?> 