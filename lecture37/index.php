<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Properties - Book</h2>
	<ul>
		<?php 
		include "task.php";

		$reflectionClass = new ReflectionClass('Book');
		$properties = $reflectionClass->getProperties(ReflectionProperty::IS_PRIVATE);

		foreach ($properties as $property) {
		    echo "<p>" . $property->getName() . "</p>";
		}
		?>
	</ul>

	<h2>Methods - Book</h2>
	<ul>
		<?php 
		$methods = $reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC);

		foreach ($methods as $method) {
		    echo "<p>" . $method->getName() . "</p>";
		}
		?>
	</ul>

	<h2>Methods - Library</h2>
	<ul>
		<?php 
		$reflectionClass = new ReflectionClass('Library');
		$methods = $reflectionClass->getMethods();

		foreach ($methods as $method) {
		    echo "<p>" . $method->getName() . "</p>";
		}
		?>
	</ul>

<h2>Proparie - Library</h2>
	<ul>
		<?php
		$properties = $reflectionClass->getProperties(ReflectionProperty::IS_PRIVATE);

		foreach ($properties as $property) {
		    echo "<p>" . $property->getName() . "</p>";
		}
		?>
	</ul>
</html>
