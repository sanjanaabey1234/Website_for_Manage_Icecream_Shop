<html>
<head>
</head>
<body>
<h1><u>Ice Cream Order Form</u></h1>
<form name="form1" method="POST" action="">

Your Name<input type="text" name="na">
Which falvour(s) would you like?
<input type="checkbox" name="VANILA">VANILA
<input type="checkbox" name="CHOCOLATE">CHOCOLATE
<input type="checkbox" name="STRAWBERRY">STRAWBERRY

number of cones:<input type="text" name="cones">

sprinkles:<input type="radio" name="radio">YES
<input type="radio" name="radio">NO

collect from store:<select name="store">
<option value="o1">Liberty Avenue</option>
<option value="o2">Circle Square</option>
<option value="o3">Angel Road</option>
</select>

<input type="reset" value="cancel" name="cancel">
<input type="submit" value="submit" name="Order">

</form>

<?php
if(isset($_POST["Order"]))
{
$name=$_REQUEST("na");
$nocone=$_REQUEST["cones"];
$store=$_REQUEST["store"];

echo "customer name: $name <br>";
echo "Store Location: $store <br>";

if(isset($_REQUEST["VANILA"]))
{
if(isset($sprinkles=$_REQUEST["radio"])==yes)
{
$total=100*$nocone+50;
echo "total is: $total <br>";

}
else
{
$total=100*$nocone;
echo "total is: $total <br>";

}
}
?>

</body>
</html>


