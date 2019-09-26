<html>
 <head>
  <title>PHP Functions</title>
 </head>
 <body>
 
<?php function todaysDate()
{
	$mydate=getdate(date("U"));
	return date('m/d/Y');
}

function internationalDate()
{
	$mydate=getdate(date("U"));
	return date('d/m/Y'); 
}

function stringVariable(){
	$schoolVariable="DMACC";
	echo strlen($schoolVariable);
	echo "<br>";
	echo trim($schoolVariable);
	echo "<br>";
	echo strtolower($schoolVariable);
}

function forNumber(){
	$theNumber = 1234567890;
	echo number_format($theNumber);
}
	
function usCurrency(){
	$currency = 123456;
	printf("$%01.2f", $currency);
}

?>

<h1>PHP Functions Assignment</h1>
<h4>Create a function that will accept a date input and format it into mm/dd/yyyy format.</h4>
<p><?php echo todaysDate(); ?></p>

<h4>Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates.</h4>
<p><?php echo internationalDate(); ?></p>

<h4>Create a function that will accept a string input.  It will do the following things to the string:</h4>

<li>Display the number of characters in the string</li>
<li>Trim any leading or trailing whitespace</li>
<li>Display the string as all lowercase characters</li>
<li>Will display whether or not the string contains "DMACC" either upper or lowercase</li>
<p>The number of words in my string are:<?php echo stringVariable(); ?></p>

<h4>Create a function that will accept a number and display it as a formatted number.   Use 1234567890 for your testing.</h4>
<p><?php echo forNumber();?></p>

<h4>Create a function that will accept a number and display it as US currency.  Use 123456 for your testing.</h4>
<p><?php echo usCurrency();?></p>
 
 
  </body>
</html>
