<head>
	<title>Unit Converter</title>
	<style type="text/css">
		h1 { color:  red ; }
		h2 { font-family: Times New Roman; color: blue ; }
		p { font-family: Ariel; color: green}
		input[type=submit] {
  			background-color: #4CAF50; /* Green */
  			border: none;
  			color: white;
  			padding: 20px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 12px;
  			margin: 4px 2px;
  			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Unit Converter</h1>
<?php

	if ((isset($_POST['original_unit'])) && (isset($_POST['value'])) && (isset($_POST['target_unit'])))
      	{
		$original_unit = filter_var( $_POST['original_unit'], FILTER_SANITIZE_STRING);
		$value = filter_var( $_POST['value'], FILTER_SANITIZE_STRING);
		$target_unit = filter_var( $_POST['target_unit'], FILTER_SANITIZE_STRING);

		echo "<p>The original value is " . $value . " " . $original_unit . "</p>" ;
	
		if ($original_unit == "inch") {
			if ($target_unit == "centimeter") {
				$target_value = $value * 2.54 ;
			} else if ($target_unit == "meter") {
				$target_value = $value * 2.54 / 100 ;
			} else if ($target_unit == "kilometer") {
				$target_value = $value * 2.54 / 1000 ;
			}
		}		
	
		if ($original_unit == "feet") {
			if ($target_unit == "centimeter") {
				$target_value = $value * 30.48 ;
			} else if ($target_unit == "meter") {
				$target_value = $value * 30.48 / 100 ;
			} else if ($target_unit == "kilometer") {
				$target_value = $value * 30.48 / 1000 ;
			}
		}		
	
		if ($original_unit == "mile") {
			if ($target_unit == "centimeter") {
				$target_value = $value * 160934 ;
			} else if ($target_unit == "meter") {
				$target_value = $value * 1609.34  ;
			} else if ($target_unit == "kilometer") {
				$target_value = $value * 1.60934 ;
			}
		}		
		
		echo "<p style='color: darkblue ;'>The target value is " . $target_value . " " . $target_unit . "</p>" ;
	}
	else
	{
      		print "<p>Missing or invalid parameters. Please go back to the lab.html page to
      		enter valid information.<br />";
      		print "<a href='UnitConvertion.html'>Unit Converter Page</a>";
	}
	
	if ((isset($_POST['starting_weight'])) && (isset($_POST['value1'])) && (isset($_POST['target_change'])))
      	{
		$starting_weight = filter_var( $_POST['starting_weight'], FILTER_SANITIZE_STRING);
		$value1 = filter_var( $_POST['value1'], FILTER_SANITIZE_STRING);
		$target_change = filter_var( $_POST['target_change'], FILTER_SANITIZE_STRING);

		echo "<p>The original value is " . $value1 . " " . $starting_weight . "</p>" ;
	
		if ($starting_weight == "Ounces") {
			if ($target_change == "grams") {
				$target_value1 = $value1 * 28.35 ;
			} else if ($target_change == "kilograms") {
				$target_value1 = $value1 / .028 ;
			} 
		}		
	
		if ($starting_weight == "Pound") {
			if ($target_change == "grams") {
				$target_value1 = $value1 * 453.6 ;
			} else if ($target_change == "kilograms") {
				$target_value1 = $value1 / .454;
			} 
		}				
		
		echo "<p style='color: darkblue ;'>The target value is " . $target_value1 . " " . $target_change . "</p>" ;
	}
	else
	{
      		print "<p>Missing or invalid parameters. Please go back to the lab.html page to
      		enter valid information.<br />";
      		print "<a href='UnitConvertion.html'>Unit Converter Page</a>";
	}
	
	
	if ((isset($_POST['starting'])) && (isset($_POST['value2'])) && (isset($_POST['target_diff'])))
      	{
		$starting = filter_var( $_POST['starting'], FILTER_SANITIZE_STRING);
		$value2 = filter_var( $_POST['value2'], FILTER_SANITIZE_STRING);
		$target_diff = filter_var( $_POST['target_diff'], FILTER_SANITIZE_STRING);

		echo "<p>The original value is " . $value2 . " " . $starting . "</p>" ;
	
		if ($starting == "Fluid Ounces") {
			if ($target_diff == "liters") {
				$target_value2 = $value2 /0.0295735;
			} 
		}		
	
		if ($starting == "Pint") {
			if ($target_diff == "liters") {
				$target_value2 = $value2 / .473176 ;
			} 
		}
		
		if ($starting == "Quart") {
			if ($target_diff == "liters") {
				$target_value2 = $value2 / .946353 ;
			} 
		}
		
		if ($starting == "Gallon") {
			if ($target_diff == "liters") {
				$target_value2 = $value2 * 3.78541 ;
			} 
		}
		
		echo "<p style='color: darkblue ;'>The target value is " . $target_value2 . " " . $target_diff . "</p>" ;
	}
	else
	{
      		print "<p>Missing or invalid parameters. Please go back to the lab.html page to
      		enter valid information.<br />";
      		print "<a href='UnitConvertion.html'>Unit Converter Page</a>";
	}
?>
	</body>
