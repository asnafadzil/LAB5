<?php
//a) Put the statement in an HTML/PHP script.
$month = array('January', 'February', 'March', 'April', 'May', 'Jun', 'July', 
'August', 'September', 'October','November', 'December');

//b) Write a For loop that prints these months in order. Note that the months can be retrieved as  $month[0] ... $month[11]
for($i = 0; $i<=11; $i++)
{
    echo $month[$i]."<br>";
}
echo"</br>";
//2. a) In indexedArray.php, add a line to your code to sort the months in alphabetical order. You  may use built-in function for array to sort the data
sort($month);

//3. a) Also, in indexedArray.php, write a foreach loop that prints the value of the array. 
foreach($month as $key)
{
    echo $key."<br>";
}
?>