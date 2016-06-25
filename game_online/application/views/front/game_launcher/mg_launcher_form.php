<html>
	<head></head>
	<body>
		<form id="mg_launcher_form" name ="mg_launcher_form" action="<?= $action ?>" method="POST">
			<input type="hidden" value ="<?= $game_code ?>" name ="gameid">
			<input type="hidden" value ="<?= $mg_game_id ?>" name ="sEXT1">
			<input type="hidden" value ="<?= $mg_password ?>" name ="sEXT2">
			<input type="hidden" value ="<?= $lang_code ?>" name ="ul">
		</form>
		<script type="text/javascript">
            document.mg_launcher_form.submit();
        </script>
	</body>
</html>
