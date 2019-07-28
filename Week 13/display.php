<?php
$con=mysqli_connect("localhost","root","sunat1998","student");
// Check connection
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM personal_info");

echo "<table border='1'>
<h1>Student List</h1>
<tr>
<th>StudentID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>BirthDate</th>
<th>Mobilephone</th>
<th>Age</th>
</tr>";

while($row = $result->fetch_assoc())
{
    $age = date("Y")-substr($row['Birthdate'],0,4);
echo "<tr>";
echo "<td>" . $row['StudentID'] . "</td>";
echo "<td>". $row['Firstname'] ."</td>";
echo "<td>". $row['Lastname'] ."</td>";
echo "<td>" .$row['Birthdate']."</td>";
echo "<td>" .$row['Mobilephone']."</td>";
echo "<td>" .$age. "</td>";
 
echo "</tr>";
$total=$total+$age;

// $sum = $timezone +$age;

}
echo "</table>";
echo "<br>";
echo "Total value of age of all student is ";
print $total  ;



mysqli_close($con);


?>