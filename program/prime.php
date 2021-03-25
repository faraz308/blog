<?php
$number = 100;
for ($i=2;$i<=$number;$i++)
{
	$isPrime = true;
	for($j =2;$j<=($i/2);$j++)
	{
		if($i % $j==0)
		{
			$isPrime = false;
	    }
	}
  if($isPrime == true)
  {
	echo $i." ";
  }
}
?>