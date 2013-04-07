<?php
	// Account information variables
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$question = $_POST["question"];
	$answer = $_POST["answer"];
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
	
	//echo count($array);
	
	for($i = 0; $i < count($array); $i++) {
		if($array[$i] === "on") {
			$array[$i] = "true";
		}else{
			$array[$i] = "false";
		}
		//echo "Array[".$i."] = ".$array[$i]."<br>";
	}
	
	// Create connection
	$con = mysqli_connect("sql.njit.edu", "djm28_proj", "6l28pgnN", "djm28_proj");
	
	// Check connection
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo $username . "<br>";
		echo $password . "<br>";
		echo $email . "<br>";
		echo $question . "<br>";
		echo $answer . "<br>";
		for($i = 0; $i < count($array); $i++) {
			echo $array[$i] . "<br>";
		}
		
		
		mysqli_query($con, "INSERT INTO synergy_web_services (
			username,
			password,
			email,
			security_question,
			security_answer,
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
			wordpress
		) VALUES (
			'$username',
			'$password',
			'$email',
			'$question',
			'$answer',
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
			'$array[45]'
		)");
	}
	
?>