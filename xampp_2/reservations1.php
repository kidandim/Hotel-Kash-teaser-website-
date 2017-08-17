
<?php
  include"myphp/head.php";
  include "myphp/header.php";
  include "myphp/nav.php";
?>
<body>

      <aside></aside>
      <section>

        <h1>Reservations</h1>
      <p>Please use the form below to place a Reservation. Use the calendar provided to select the number of days you wish to reserve.</p>

        <fieldset>
          <legend>Please SignUp</legend>
        <form action="dev.php" method="post">
          First Name:(required)<br>
          <input type="text" name="name" id="fName" required="required"><br><br>
          Last Name:(required)<br>
          <input type="text" name="name" id="lName" required="required"><br><br>
          Gender:<br>
          Male:<input type="radio" name="male"><br>
          Female:<input type="radio" name="female"><br><br>
          Email:<br><input type="text" name="email" value="" required="required"><br><br>
          Nationality:<br>
          <select name="nationality" required="required">
            <option value=" ">---select---</option>
            <option value="Africa">African</option>
            <option value="Europe">European</option>
            <option value="America">American</option>
            <option value="Asia">Asian</option>
          </select>
          <br><br>
          Phone:<br><input type="text" name="phone" value="" required="required"><br><br>
          <input type="submit" value="submit">
      </fieldset>
      <fieldset>
        <legend>Login</legend>
      <form>
          Email:<br><input type="email" name="email" value="" required="required"><br><br>

        Password:<br><input type="password" name="phone" value="" required="required"><br><br>
        Enter a date before 1980-01-01:
        <input type="date" name="bday" max="1979-12-31"><br>
        Enter a date after 2000-01-01:
        <input type="date" name="bday" min="2000-01-02"><br>
        <input type="submit" value="submit">
      </fieldset>
      </section>
<?php include "myphp/footer.php"; ?>
</body>
</html>

<section>

  <h1>Reservations</h1>
<p>Please use the form below to place a Reservation. Use the calendar provided to select the number of days you wish to reserve.</p>

  <fieldset>
    <legend>Please SignUp</legend>
  <form action="dev.php" method="post">
    First Name:(required)<br>
    <input type="text" name="name" id="fName" required="required"><br><br>
    Last Name:(required)<br>
    <input type="text" name="name" id="lName" required="required"><br><br>
    Gender:<br>
    Male:<input type="radio" name="male"><br>
    Female:<input type="radio" name="female"><br><br>
    Email:<br><input type="text" name="email" value="" required="required"><br><br>
    Nationality:<br>
    <select name="nationality" required="required">
      <option value=" ">---select---</option>
      <option value="Africa">African</option>
      <option value="Europe">European</option>
      <option value="America">American</option>
      <option value="Asia">Asian</option>
    </select>
    <br><br>
    Phone:<br><input type="text" name="phone" value="" required="required"><br><br>
    <input type="submit" value="submit">
</fieldset>
<fieldset>
  <legend>Login</legend>
<form>
    Email:<br><input type="email" name="email" value="" required="required"><br><br>

  Password:<br><input type="password" name="phone" value="" required="required"><br><br>
  Enter a date before 1980-01-01:
  <input type="date" name="bday" max="1979-12-31"><br>
  Enter a date after 2000-01-01:
  <input type="date" name="bday" min="2000-01-02"><br>
  <input type="submit" value="submit">
</fieldset>
</section>
<article>
<div id="rows">

  <h3>ONLINE REVIEWS</h3>
  <hr>
  <ul>
    <li><a href="">Pearl Guide</a></li>
    <li><a href="">Trip Advisor</a></li>
    <li><a href="">Great Lakes Safari</a></li>
    <li><a href="">Great Lakes Safari</a></li>
  </ul>

    <h3>SEND US</h3>
    <hr>
    <p>
      We hope you had a memorable stay at Kash? Send us your holiday snaps for our blog.<br>
<a href="">Email us</a>
    </p>
<br>
      <h3>CONNECT WITH US</h3>
      <hr>

        <img src="social/facebook-icon.png" alt="fb.social_media" style= "width: 30px; height: 30px; border: 0;">
        <br><img src="social/twitter-icon.png" alt="tw.social_media" style= "width: 30px; height: 30px;">
        <br><img src="social/youtube-icon.png" alt="yt.social_media" style= "width: 30px; height: 30px;">


      <br>
            <h3>CONTACT US</h3>
            <hr>
            <ul>
              <li><a href="">Pearl Guide</a></li>
              <li><a href="">Trip Advisor</a></li>
              <li><a href="">Great Lakes Safari</a></li>
            </ul>
    </div>
  </article>
<footer>
  &copy; 2015 <a href="">mmdev.com</a>
</footer>

</div>






    </body>
  </html>
