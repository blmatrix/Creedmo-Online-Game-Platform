<html>
	<head>
		<script src="//code.jquery.com/jquery-latest.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/'); ?>/stylesheets/style.css" />
		<style type="text/css">
			.myFrame {
				background-color: red;
				float: right;
				clear: both;
			}
		</style>
		<script>
			$(function() {
				var game_frame = $('<iframe class="game_frame" width="100%" height="100%" frameborder="0"></iframe>');
			    game_frame.appendTo('body');
			    game_frame.attr('src','<?=$game_url?>');
			    game_frame.reload();
			});
		</script>
	</head>
	<body>
		<!-- <iframe  name ="game_frame" src="<?=$game_url ?>" width="100%" height="100%" frameborder="0"></iframe> -->
	</body>
</html>