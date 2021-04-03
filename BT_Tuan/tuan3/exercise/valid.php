	<form >
		<p>
			<label for="user">username</label>
			<input type="text" name="user" id="user">
			<span><?php echo $user ?></span>
</p>
		<p>
		<label for="email">email</label>
		<input type="text" name="email" id="email">
		<span><?php echo $email ?></span>
		</p>
		<p>
		<label for="phone">phone</label>
		<input type="text" name="phone" id="phone">
		<span><?php echo $phone ?></span>

		</p>
		<button type="submit" name="submit" value="submit">submit</button>
	</form>

<?php 
$user = $_POST["user"];
$phone = $_POST["phone"];
$email = $_POST["email"];


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $email = "is a email";
} else {
  $email = "not is a email";
}

if (preg_match('/[^0-9]/', '', $phone)) {
  $phone = "is a phone number";
} else {
  $phone = "not is a phone number";
}

if (preg_match('/[^a-zA-Z]/', '', $phone)) {
  $user = "valid";
} else {
  $phone = "invalid";
}

