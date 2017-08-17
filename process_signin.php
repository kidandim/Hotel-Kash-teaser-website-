

<?php
  include"myphp/head.php";
  include "myphp/header.php";
  include "myphp/nav.php";
?>
<body>

      <aside></aside>
      <section>
        <div id="sidebar">
           <h1>this is my side bar</h1>

        <p>Rimpscom Company Limited was founded in April,2010.
        We build computer systems, find solutions and provide services to businesses and individuals.
        We build affordable, easy to use systems suitable for the Africa situation; poor or no internet,
        very few resources and scarce technical expertise to operate the systems.

        We are the largest computer firm in Western Uganda and have served very many clients with different IT needs.
        We are your preferred IT partner in Uganda.</p>
        </div>
        <div id="sugnup">
        <h1>Reservations</h1>
      <p>Please use the form below to place a Reservation. Use the calendar provided to select the number of days you wish to reserve.</p>

        <fieldset>
          <legend>Please SignUp</legend>

<?php

$con = mysql_connect("localhost", "root", "");
if (!$con) {
  die("Can not Connect: " .mysql_error());
}
mysql_select_db("kashhoteldb",$con);
$sqlx = "Select * FROM guest";
$myData = mysql_query($sqlx, $con);
echo "<table border= 1px >
<tr>
<th>Number</ht>
<th>First Name</ht>
<th>Last Name</ht>
<th>Gender</ht>
<th>Email</ht>
<th>Nationality</ht>
<th>Phone Number</ht>
</tr>";

while ($record = mysql_fetch_array($myData)) 
{
  echo "<tr>";
  echo "<td>" . $record['idguest'] ."</td>";
  echo "<td>" . $record['fname'] ."</td>";
  echo "<td>" . $record['lname'] ."</td>";
  echo "<td>" . $record['gender'] ."</td>";
  echo "<td>" . $record['email'] ."</td>";
  echo "<td>" . $record['nationality'] ."</td>";
  echo "<td>" . $record['phone'] ."</td>";
  echo "</tr>"; 
  }
  echo "</table>";

?>
</fieldset><br>

    </div>
        </section>
      
<?php include "myphp/footer.php"; ?>
</body>
</html>

