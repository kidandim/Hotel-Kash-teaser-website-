
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
        <div id="login">
      <fieldset>
        <legend>Login</legend>
      <form action="process_signin.php" method="post">
          Email:<br><input type="email" name="email" value="" required="required"><br><br>

        Password:<br><input type="password" name="phone" value="" required="required"><br><br>
        Enter a date before 1980-01-01:
        <input type="date" name="bday" max="1979-12-31"><br>
        Enter a date after 2000-01-01:
        <input type="date" name="bday" min="2000-01-02"><br>
        <input type="submit" value="submit">
      </fieldset>
    </div>

        </div>
        <div>
        <h2>Executive Rooms </h2>
        <p>Our Executive Suites offer a tastefully designed living room area with two wall to wall sliding doors giving you the chance to enjoy the expansive view of Kampala and hotel gardens. Ideal for our corporate and/or entertaining guests; the additional living room space provides a quiet and private area to hold meetings, entertain or simply unwind.</p>        
        </div>
        <div>
        <h2>Club Rooms </h2> 
        <p>Our lub Rooms Suites offer a tastefully designed living room area with two wall to wall sliding doors giving you the chance to enjoy the expansive view of Kampala and hotel gardens. Ideal for our corporate and/or entertaining guests; the additional living room space provides a quiet and private area to hold meetings, entertain or simply unwind.</p>       
        </div>
        <div>
        <h2>Diplomatic suit </h2>   
        <p>Our Diplomatic Suites offer a tastefully designed living room area with two wall to wall sliding doors giving you the chance to enjoy the expansive view of Kampala and hotel gardens. Ideal for our corporate and/or entertaining guests; the additional living room space provides a quiet and private area to hold meetings, entertain or simply unwind.</p>     
        </div>
        </section>
      
<?php include "myphp/footer.php"; ?>
</body>
</html>
