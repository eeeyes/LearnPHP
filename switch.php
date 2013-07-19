<?php
	$destination = "Tokoy";
	echo "Traveling to $destination <br/>";

	switch($destination)
	{
		case "Las Vegas":
			echo "bring extra $500";
			break;
		case "Amsterdam":
			echo "Bring an open mind";
			break;	
		case "Tokoy":
			echo "bring lots of money";
			break;
		default:
			echo "bring more underwear";
			break;
	}
?>
