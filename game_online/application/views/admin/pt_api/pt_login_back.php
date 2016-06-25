
<script type="text/javascript" src="http://cache.download.banner.luckystar88.com/integrationjs.php"></script>
<script type="text/javascript">
    var game_id = "<?= $game_id ?>";
	var player_name ="<?= $player_name ?>";
	var password ="<?= $user_password ?>";

	iapiSetCallout('Login', calloutLogin);
	iapiSetCallout('Logout', calloutLogout);

	function login(realMode) {
    	iapiLogin(player_name.toUpperCase(), password, realMode, "en");
	}

	function logout(allSessions, realMode) {
	   iapiLogout(allSessions, realMode);
	}

	function calloutLogin(response) {
    	if (response.errorCode) {
        	console.log(dump(response));
        	alert("Login failed, " + response);
    	} else {
    	    alert("login success");
    	    location.href = 'http://cache.download.banner.luckystar88.com/casinoclient.html?language=en&game='+game_id;
    	}
	}

	function calloutLogout(response) {
    	if (response.errorCode) {
    	   alert("Logout failed, " + response.errorCode);
    	} else {
    	   alert("Logout OK");
    	}
	}
    login(1);
</script>


