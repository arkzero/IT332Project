<?php

// Account information variables
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$question1 = $_POST["question1"];
$answer1 = $_POST["answer1"];
$question2 = $_POST["question2"];
$answer2 = $_POST["answer2"];
$question3 = $_POST["question3"];
$answer3 = $_POST["answer3"];
$creditCard = $_POST["creditCard"];

// Web service variables
$amazon = $_POST["amazon"];
$aol = $_POST["aol"];
$apple = $_POST["apple"];
$battlenet = $_POST["battlenet"];
$bebo = $_POST["bebe"];
$blogspot = $_POST["blogspot"];
$classmatesDotCom = $_POST["classmatesDotCom"];
$comcast = $_POST["comcast"];
$deviantArt = $_POST["deviantArt"];
$delicious = $_POST["delicious"];
$digg = $_POST["digg"];
$ebay = $_POST["ebay"];
$facebook = $_POST["facebook"];
$flickr = $_POST["flickr"];
$flixster = $_POST["flixster"];
$foursquare = $_POST["foursquare"];
$gaiaOnline = $_POST["gaiaOnline"];
$google = $_POST["google"];
$hotmail = $_POST["hotmail"];
$instagram = $_POST["instagram"];
$imgur = $_POST["imgur"];
$lastFm = $_POST["lastFm"];
$leagueOfLegends = $_POST["leagueOfLegends"];
$linkedIn = $_POST["linkedIn"];
$liveJournal = $_POST["liveJournal"];
$microsoft = $_POST["microsoft"];
$myLife = $_POST["myLife"];
$myspace = $_POST["myspace"];
$newegg = $_POST["newegg"];
$newsvine = $_POST["newsvine"];
$optimim = $_POST["optimim"];
$origin = $_POST["origin"];
$paypal = $_POST["paypal"];
$planetside = $_POST["planetside"];
$playstation = $_POST["playstation"];
$reddit = $_POST["reddit"];
$secondLife = $_POST["secondLife"];
$steam = $_POST["steam"];
$stumbleUpon = $_POST["stumbleUpon"];
$tumblr = $_POST["tumblr"];
$twitter = $_POST["twitter"];
$yahoo = $_POST["yahoo"];
$youTube = $_POST["youTube"];
$worldOfWarcraft = $_POST["worldOfWarcraft"];
$wordpress = $_POST["wordpress"];

$count = 0;

$nameError = FALSE;
$emailError = FALSE;
$questionError = FALSE;

$str = "";

$array = array(
	$creditCard,
	$amazon,
	$aol,
	$apple,
	$battlenet,
	$bebo,
	$blogspot,
	$classmatesDotCom,
	$comcast,
	$deviantArt,
	$delicious,
	$digg,
	$ebay,
	$facebook,
	$flickr,
	$flixster,
	$foursquare,
	$gaiaOnline,
	$google,
	$hotmail,
	$instagram,
	$imgur,
	$lastFm,
	$leagueOfLegends,
	$linkedIn,
	$liveJournal,
	$microsoft,
	$myLife,
	$myspace,
	$newegg,
	$newsvine,
	$optimim,
	$origin,
	$paypal,
	$planetside,
	$playstation,
	$reddit,
	$secondLife,
	$steam,
	$stumbleUpon,
	$tumblr,
	$twitter,
	$yahoo,
	$youTube,
	$worldOfWarcraft,
	$wordpress
);

for($i = 0; $i < count($array); $i++) {
	if($array[$i] === "on") {
		$array[$i] = "true";
		$count++;
	}else{
		$array[$i] = "false";
	}
}
$str = $str . 
		'<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta charset="utf-8" />
				
				<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
				Remove this if you use the .htaccess -->
				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
				
				<title>Synergy - Home</title>
						
				<link rel = "stylesheet" href = "main.css" />
				
				<!-- JavaScript Libraries -->
				<script type="text/javascript" src="js/libs/jquery.js"></script>
				
				<!-- Actual JavaScript -->
	    		<script type="text/javascript" src="js/home.js"> </script>
	    		
				<meta name="description" content="" />
				<meta name="author" content="Bryan" />
				
				<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
				<link rel="shortcut icon" href="/favicon.ico" />
				<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
			</head>
			<body>
				<div class = "page" id = "registration_php">
				<div id = "header">
					<h1>Synergy</h1>
					<h3>Synergize Your Life</h3>
				</div>';


// Create connection
$con = mysqli_connect("sql.njit.edu", "djm28_proj", "6l28pgnN", "djm28_proj");

// Check connection
if (mysqli_connect_errno($con)) {
	$str = $str .
		'<div id = "registration_info" class = "textArea">
			<p>
				Registration error!<br>
				-Failed to connect to database!<br>
				<br>Please try again.
			</p>
			<a href="" class="button">
				<div>Back</div>
			</a>
			<br>
			<a href="" class="button">
				<div>Home</div>
			</a>
		</div>
		</body>
		</html>';
		
} else {
	
	$accounts = mysqli_query($con,"SELECT username,email FROM synergy_web_services");
	
	while($row = mysqli_fetch_array($accounts)) {
		if($username == $row['username']) {
			$nameError = TRUE;
		}
		if($email == $row['email']) {
			$emailError = TRUE;
		}
	}
	
	if(($question1 == $question2) || ($question2 == $question3) || ($question3 == $question1)) {
		$questionError = TRUE;
	}
	
	if(($nameError == TRUE) || ($emailError == TRUE) || ($questionError == TRUE)) {
		$str = $str .
			'<div id = "registration_info" class = "textArea">
				<p>
					Registration Error!<br>';
		if($nameError == TRUE) {
			$str =  $str . '-That username already exists in our database!<br>';
		}
		if($emailError == TRUE) {
			$str = $str . '-That email account already exists in our database!<br>';
		}
		if($questionError == TRUE) {
			$str = $str . '-You must choose three <b>different</b> security questions!<br>';
		}
		$str = $str . '<br>Please try again.
					</p>
					<a href="" class="button">
						<div>Back</div>
					</a>
					<br>
					<a href="" class="button">
						<div>Home</div>
					</a>
				</div>
				</body>
				</html>';
		
	} else {
		$str = $str .
				'<div id = "registration_info" class = "textArea">
					<p>
						Registration Successful!<br>
						We are currently processing your request.<br>
						<br>You may now log in with your account information.
					</p>
					<a href="" class="button">
						<div>Log In</div>
					</a>
					<br>
					<a href="" class="button">
						<div>Home</div>
					</a>
				</div>
				</body>
				</html>';
		
		mysqli_query($con, "INSERT INTO synergy_web_services (
			username,
			password,
			email,
			question1,
			answer1,
			question2,
			answer2,
			question3,
			answer3,
			credit_card,
			amazon,
			aol,
			apple,
			battlenet,
			bebo,
			blogspot,
			classmates_dot_com,
			comcast,
			delicious,
			deviantart,
			digg,
			ebay,
			facebook,
			flickr,
			flixster,
			foursquare,
			gaia_online,
			google,
			hotmail,
			instagram,
			imgur,
			lastfm,
			league_of_legends,
			linkedin,
			livejournal,
			microsoft,
			mylife,
			myspace,
			newegg,
			newsvine,
			optimum,
			origin,
			paypal,
			planetside,
			playstation,
			reddit,
			second_life,
			steam,
			stumbleupon,
			tumblr,
			twitter,
			yahoo,
			youtube,
			world_of_warcraft,
			wordpress,
			num_services
		) VALUES (
			'$username',
			'$password',
			'$email',
			'$question1',
			'$answer1',
			'$question2',
			'$answer2',
			'$question3',
			'$answer3',
			'$array[0]',
			'$array[1]',
			'$array[2]',
			'$array[3]',
			'$array[4]',
			'$array[5]',
			'$array[6]',
			'$array[7]',
			'$array[8]',
			'$array[9]',
			'$array[10]',
			'$array[11]',
			'$array[12]',
			'$array[13]',
			'$array[14]',
			'$array[15]',
			'$array[16]',
			'$array[17]',
			'$array[18]',
			'$array[19]',
			'$array[20]',
			'$array[21]',
			'$array[22]',
			'$array[23]',
			'$array[24]',
			'$array[25]',
			'$array[26]',
			'$array[27]',
			'$array[28]',
			'$array[29]',
			'$array[30]',
			'$array[31]',
			'$array[32]',
			'$array[33]',
			'$array[34]',
			'$array[35]',
			'$array[36]',
			'$array[37]',
			'$array[38]',
			'$array[39]',
			'$array[40]',
			'$array[41]',
			'$array[42]',
			'$array[43]',
			'$array[44]',
			'$array[45]',
			'$count'
		)");
	}
}

echo $str;

?>				