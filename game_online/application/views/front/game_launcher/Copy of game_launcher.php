<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/');?>/stylesheets/style.css" />
	</head>
	<body>
	    <!-- <frameset name ="game_frame" marginwidth='0' marginheight='0' scrolling='no'  width='100%' height='100%' frameborder="0" rows = "0,*">
	        <frame></frame>
	        <frame marginwidth='0' marginheight='0' scrolling='no'  width='100%' height='100%' frameborder="0" src ="<?= $game_url?>"></frame>
	    </frameset> -->
		<iframe style ="position: relative;" name ="game_frame" src="<?=$game_url?>" width="100%" height="100%" frameborder="0">
		</iframe>
	</body>
</html>