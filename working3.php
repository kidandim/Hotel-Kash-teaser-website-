
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
<!-- <form action="working.php" method="post"><br>
  Topic:<input type="text" name="topic"><br>
  Name:<input type="text" name="fname"><br>
  Attendence:<input type="text" name="attendence"><br>
  <input type="submit" name="submit">
</form> -->
<?php
        // if(isset($_POST['submit'])){
$conn = mysql_connect("localhost", "root", "");
if (!$conn){
  die("can not connect: ".mysql_error());
}
mysql_select_db("kashhoteldb",$conn);

if(isset($_POST['update'])){
$UpdateQuery = "UPDATE lecturres SET Topic='$_POST[topic]', Name='$_POST[name]', Attendance='$_POST[attendance]' WHERE Topic='$_POST[hidden]'";               
mysql_query($UpdateQuery, $conn);
};

if(isset($_POST['delete'])){
$DeleteQuery = "DELETE FROM lecturres WHERE Topic='$_POST[hidden]'";          
mysql_query($DeleteQuery, $con);
};

if(isset($_POST['add'])){
$AddQuery = "INSERT INTO lecturres (Topic, fname, Attendance) VALUES ('$_POST[utopic]','$_POST[uname]','$_POST[uattendance]')";         
mysql_query($AddQuery, $conn);
};



$sql = "SELECT * FROM lecturres";
$myData = mysql_query($sql,$conn);
echo "<table border=1>
<tr>
<th>Topic</th>
<th>Name</th>
<th>Attendance</th>
</tr>";
while($record = mysql_fetch_array($myData)){
echo "<form action=mydata5.php method=post>";
echo "<tr>";
echo "<td>" . "<input type=text name=topic value=" . $record['Topic'] . " </td>";
echo "<td>" . "<input type=text name=name value=" . $record['fname'] . " </td>";
echo "<td>" . "<input type=text name=attendance value=" . $record['Attendance'] . " </td>";
echo "<td>" . "<input type=hidden name=hidden value=" . $record['Topic'] . " </td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "<form action=working3.php method=post>";
echo "<tr>";
echo "<td><input type=text name=utopic></td>";
echo "<td><input type=text name=uname></td>";
echo "<td><input type=text name=uattendance></td>";
echo "<td>" . "<input type=submit name=add value=add" . " </td>";
echo "<td>" . "<input type=submit name=edit value=edit" . " </td>";
echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
echo "</form>";
echo "</table>";
mysql_close($conn);

?>
</fieldset><br>

    </div>
        </section>
      
<?php include "myphp/footer.php"; ?>
</body>
</html>

