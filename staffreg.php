<?php
  include"myphp/head.php";
  include "myphp/header.php";
  include "myphp/nav.php";
?>
<body>


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
        
        <h1>Reservations</h1>
      <p>Please use the form below to place a Reservation. Use the calendar provided to select the number of days you wish to reserve.</p>

        <div>
      <fieldset>
        <legend>Staff Registration</legend>
      <form action="staff_reg.php" method="post">
          First Name:(required)<br>
          <input type="text" name="fname" id="fname" required="required" value="kidandi"><br><br>
          Last Name:(required)<br>
          <input type="text" name="lname" id="lname" required="required" value="michael"><br><br>
          Gender:<br>
          Male:<input type="radio" value="M" name="gender"><br>
          Female:<input type="radio" value="F" name="gender"><br><br>
          Role:<br><input type="text" name="role" value="receptionist" required="required"><br><br>
          <input type="submit" value="submit">
        </form>
      </fieldset>
    </div> 
      </section>
<?php include "myphp/footer.php"; ?>
</body>
</html>
