<html>
    <head>
        <script type="text/javascript" src="http://cache.download.banner.luckystar88.com/integrationjs.php"></script>
    </head>
    <body>
        <form id="loginform">
            <input type="hidden" value ="<?=$player_name?>" name ="username">
            <br>
            <input type="hidden" value ="<?= $user_password?>" name ="password">
        </form>
        
         <script type="text/javascript">
            
            game_id ="<?=$game_id?>";
            iapiSetCallout('Login', calloutLogin);
            iapiSetCallout('Logout', calloutLogout);

            function login(realMode) {
                console.log('username  : ' + document.getElementById("loginform").username.value.toUpperCase());
                console.log('password  : ' + document.getElementById("loginform").password.value);
                iapiLogin(document.getElementById("loginform").username.value.toUpperCase(), document.getElementById("loginform").password.value, realMode, "en");
            }

            function logout(allSessions, realMode) {
                iapiLogout(allSessions, realMode);
            }

            function calloutLogin(response) {
                if (response.errorCode) {
                    console.log(dump(response));
                    alert("Login failed, " + response);
                } else {
                    window.location =  location.href = 'http://cache.download.banner.luckystar88.com/casinoclient.html?language=en&game='+game_id;
                }
            }

            function calloutLogout(response) {
                if (response.errorCode) {
                    alert("Logout failed, " + response.errorCode);
                } else {
                    alert("Logout OK");
                }
            }
            
            function dump(arr, level) {
                var dumped_text = "";
                if (!level)
                    level = 0;

                //The padding given at the beginning of the line.
                var level_padding = "";
                for (var j = 0; j < level + 1; j++)
                    level_padding += "    ";

                if ( typeof (arr) == 'object') {//Array/Hashes/Objects
                    for (var item in arr) {
                        var value = arr[item];

                        if ( typeof (value) == 'object') {//If it is an array,
                            dumped_text += level_padding + "'" + item + "' ...\n";
                            dumped_text += dump(value, level + 1);
                        } else {
                            dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
                        }
                    }
                } else {//Stings/Chars/Numbers etc.
                    dumped_text = "===>" + arr + "<===(" + typeof (arr) + ")";
                }
                return dumped_text;
            }
             
            login(1);
        </script>
    </body>
</html>
