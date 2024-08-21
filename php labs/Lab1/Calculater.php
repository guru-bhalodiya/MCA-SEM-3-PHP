<?php
	$a=10;
	$b=4;
	// echo("Addition is :".$a+$b);
	// echo("\nSubtraction is :".$a-$b);
	// echo("\nMultiplication is :".$a*$b);
	// echo("\nDivision is :".$a/$b);
	// echo("\nModulo is :".$a%$b);

	$operator="+";
	switch($operator)
	{
		case "+":
			echo("Addition is :".$a+$b);
			break;
		case "-":
			echo("Subtraction is :".$a-$b);
			break;
		case "*":
			echo("Multiplication is :".$a*$b);
			break;
		case "/":
			echo("Division is :".$a/$b);
			break;
		default :
			echo("Invalid..!!");
				
	}
?>