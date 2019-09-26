<html>
 <head>
  <title>PHP Functions</title>
 </head>
 <body>
 
<?php function todaysDate()
{
	$mydate=getdate(date("U"));
	return date('l F, d Y');	//Should format the output as Monday January 1, 2016
}
?>


<p>Today is: <?php echo todaysDate(); ?></p>
 
 
  </body>
</html>
