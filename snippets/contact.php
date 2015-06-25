<?php
$error = false;
if (!!$_POST['email']) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$budget = $_POST['budget'];
	$timeframe = $_POST['timeframe'];
	$subject = "You got mail!";
	$msg = $_POST['message'];
	$spaminator = strtolower($_POST['spaminator']);
	
	if ($spaminator !== 'green') {
		$error = true;
	}
	if (!$error) {
		$msg = "email: " . $name . "<br />email address: " . $email . "<br />budget: " . $budget . "<br />timeframe: " . $timeframe . "message: <br />" . $msg;
		$response = mail('jeffrey@wearecharette.com',$subject,$msg);
		if (!$response) {
			echo "<p>Oh man (insert facepalm), the darn internet is a pain in the !*?, try calling us :)  415-298-2707</p>";
		}
	}
}

?>
<form name="contactform" method="post" action="studio#contact">
    <div class="row">
        <div class="six columns">
            <input class="u-full-width" type="text" name="name" placeholder="Name" required>
        </div>
        <div class="six columns">
            <input class="u-full-width" type="email" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            <select class="u-full-width" name="budget" required>
                <option value="" disabled selected>Budget</option>
                <option value="1">Less than $1000</option>
                <option value="2">$1,000 - $5,000</option>
                <option value="3">$5,000 - $15,000</option>
                <option value="4">Over $15,000</option>
                <option value="5">just want to talk</option>
            </select>
        </div>
        <div class="six columns">
            <select class="u-full-width" name="timeframe" required>
                <option value="" disabled selected>Timeframe</option>
                <option value="1">Less than 6 Weeks</option>
                <option value="2">6 Weeks - 3 Months</option>
                <option value="3">3 Months - 6 Months</option>
                <option value="4">need a pro in our corner</option>
                <option value="5">just want to talk</option>
            </select>
        </div>
    </div>
    <textarea name="message" class="u-full-width" placeholder="Tell us about your project. This will help us determine how we can work together." required></textarea>
    <textarea name="spaminator" class="u-full-width" placeholder="Color spaminator says, tell us: Yellow + Blue = (pink or green)" required></textarea>
<?php
	if ($spaminator !== 'green') {
		echo "<p>Come on you got this, what color rhymes with queen?  Ok it's green just write <strong>green</strong>.</p>";
	}
?>
    <input class="button-primary large" type="submit" value="Send">
</form>
