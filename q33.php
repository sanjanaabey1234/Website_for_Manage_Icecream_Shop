<html>
<head>
</head>
<body>
<h1><u>Ice Cream Order Form</u></h1>
<form name="form1" method="POST" action="">

Your Name<input type="text" name="na"><br>
Which falvour(s) would you like?
<input type="checkbox" name="VANILA">VANILA
<input type="checkbox" name="CHOCOLATE">CHOCOLATE
<input type="checkbox" name="STRAWBERRY">STRAWBERRY<br>

number of cones:<input type="text" name="cones"><br>

sprinkles:<input type="radio" name="radio" value="yes">YES
<input type="radio" name="radio" value="no">NO
<br>

collect from store:<select name="store">
<option value="Liberty Avenue">Liberty Avenue</option>
<option value="Circle Square">Circle Square</option>
<option value="Angel Road">Angel Road</option>
</select>
<br>

<input type="reset" value="cancel" name="cancel">
<input type="submit" value="submit" name="Order">

</form>

<?php
if(isset($_POST["Order"]))
{
$na=$_REQUEST["na"];
$nocone=$_REQUEST["cones"];
$store=$_REQUEST["store"];
$sprinkles=$_REQUEST["radio"];

echo "customer name: $na<br>";
echo "Store Location: $store <br>";

if(isset($_REQUEST["VANILA"]))
{
if($sprinkles=="yes")
{
$total=(100*$nocone)+50;
echo "total is: $total <br>";

}
else
{
$total=100*$nocone;
echo "total is: $total <br>";

}
}

else if(isset($_REQUEST["CHOCOLATE"]))
{
if($sprinkles=="yes")
{
$total=(120*$nocone)+50;
echo "total is: $total <br>";

}
else
{
$total=120*$nocone;
echo "total is: $total <br>";

}
}

else if(isset($_REQUEST["STRAWBERRY"]))
{
if($sprinkles=="yes")
{
$total=(110*$nocone)+50;
echo "total is: $total <br>";

}
else
{
$total=110*$nocone;
echo "total is: $total <br>";

}
}

}
?>

</body>
</html>