<?php
$spaminator = "green";
$error = false;
if (!!$_POST['email']) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$budget = $_POST['budget'];
	$timeframe = $_POST['timeframe'];
	$subject = "You got mail!";
	$message = $_POST['message'];
	$headers = "From: " . strip_tags($email) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
	$headers .= "CC: emily@wearecharette.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	$spaminator = strtolower($_POST['spaminator']);
	
	if ($spaminator !== 'green') {
		$error = true;
	}
	if (!$error) {
		$msg = "email: " . $name . "<br />email address: " . $email . "<br />budget: " . $budget . "<br />timeframe: " . $timeframe . "<br />message: " . $message;
		$response = mail('hello@wearecharette.com', $subject, $msg, $headers);
		if (!$response) {
			echo "<p>Oh man (insert facepalm), the darn internet is a pain in the !*?, try calling us :)  415-298-2706</p>";
		}
		else {
			echo "<p>Can't wait to get in touch, we will get back with you soon! If we don't, give us a ring at 415-298-2706.</p>";
		}
	}
}

?>
<form name="contactform" method="post" action="studio#contact">
    <div class="row">
        <div class="six columns">
            <input class="u-full-width" type="text" name="name" placeholder="Name" required <?php
            	if ($name) {
								echo 'value="'.$name.'"';
							}
            ?>>
        </div>
        <div class="six columns">
            <input class="u-full-width" type="email" name="email" placeholder="Email" required <?php
            	if ($email) {
								echo 'value="'.$email.'"';
							}
            ?>>
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            <select class="u-full-width" name="budget" required>
                <option value="" disabled selected>Budget</option>
                <option value="Less than $1000">Less than $1000</option>
                <option value="$1,000 - $5,000">$1,000 - $5,000</option>
                <option value="$5,000 - $15,000">$5,000 - $15,000</option>
                <option value="Over $15,000">Over $15,000</option>
                <option value="Just Want to Talk">Just Want to Talk</option>
            </select>
        </div>
        <div class="six columns">
            <select class="u-full-width" name="timeframe" required>
                <option value="" disabled selected>Timeframe</option>
                <option value="Less than 6 Weeks">Less than 6 Weeks</option>
                <option value="6 Weeks - 3 Months">6 Weeks - 3 Months</option>
                <option value="3 Months - 6 Months">3 Months - 6 Months</option>
                <option value="Need a Pro in our Corner">Need a Pro in our Corner</option>
                <option value="Just Want to Talk">Just Want to Talk</option>
            </select>
        </div>
    </div>
    <textarea name="message" class="u-full-width" placeholder="Tell us about your project. This will help us determine how we can work together." required><?php
    	if ($message) {
				echo $message;
			}
    ?></textarea>
    <textarea name="spaminator" class="u-full-width" placeholder="Color spaminator says, tell us: Yellow + Blue = (pink or green)" required></textarea>
<?php
	if ($spaminator !== 'green') {
		echo "<p>Come on you got this, what color rhymes with queen?  Ok it's green just write <strong>green</strong>.</p>";
	}
?>
    <input class="button-primary large" type="submit" value="Send">
</form>
