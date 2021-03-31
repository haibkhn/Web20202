<html>
  <head><title> Receiving Input </title></head>
  <body>
    <font size=5>Thanh you: Got your input</font>
    <?php
      $email = $_GET["email"];
      $contact = $_GET["contact"];
      print("<br>Your email address is $email");
      print("<br>Contact is $contact");
    ?>
  </body>
</html>