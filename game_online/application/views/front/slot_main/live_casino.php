<?php
include_once APPPATH . "views/front/template/top.php";
?>
<!-- container -->
<div id="container" class="slotmain">
	<div id="promotion">
		<div class="sub_spot">
			<div class="sub_banner">

				<div class="sub_spot_inr">
					<div class="sub_spot_left">
						<h1>LIVE DEALER GAME</h1>
						<h2>Baccarat | Roulette | Black Jack | Sic Bo | Holdem</h2>
					</div>
					<div class="sub_spot_right" style="background-image: url(<?=base_url('assets/') ?>/images/slide/live_spot_img.png)"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="content" class="slotmain">
		<div class="content_main_section">
			<!-- Column 160px -->
			<?php
                include_once APPPATH . "views/front/template/live_side.php";
            ?>
			<!-- Column 840px -->
			<div class="column840px">
				<div id="game_list" class="jplist">
					<div class="jplist-panel panel-top">
						<!-- filter by title -->
						<div class="text-filter-box">
							<!--[if lt IE 10]>
							<div class="jplist-label">Filter by Title:</div>
							<![endif]-->
							<input style ="margin-right:2px;" id ='filter_text' data-path=".title" data-button="#title-search-button" type="text" value="" placeholder="Search" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter"/>
							<button style ="margin-right:2px;"  type="button" id="title-search-button">
								<i class="flaticon-magnifyingglass"></i>
							</button>
						</div>
						<!-- views -->
						<div class="jplist-views" data-control-type="views" data-control-name="views" data-control-action="views" data-default="jplist-grid-view">
							<button type="button" class="jplist-view jplist-grid-view" data-list ="grid"  data-type="jplist-grid-view"></button>
							<button type="button" class="jplist-view jplist-list-view" data-list ="list" data-type="jplist-list-view"></button>
						</div>
						<!-- preloader for data sources -->
						<div id ="preloader">
							<img src="<?=base_url('assets/') ?>/images/ajax-loader.gif" alt="Loading..." title="Loading..." />
						</div>
					</div>

					<div id ="list_content" class="jplist-grid-view"></div>
					
				</div>
			</div>
			<!-- //Column 840px -->
		</div>
		<!-- //content_main_section -->
	</div>
	<!-- //content -->
</div>
<!-- //container -->
<script>
    var param = {
        sel_cate : '6', 
        search_text : '',
        view : 'grid'
        //paging : 1,
        //perPage : 20,
        //isPageRemained : true
    }
    var isAjaxRequesting = false;
    var addType ="clear";
    var url = "<?= site_url("slot_main/live_game_list")?>";
    
	function showLoader(){$('#preloader').show();}
    function hideLoader(){$('#preloader').hide();}
	function clearContent(){$('#list_content').html('');}
	function loadGames() {
		isAjaxRequesting = true;
		showLoader();
		$.getJSON(url, param, function(data) {
			if (data.errorCode == 0) {
				if (addType != 'append') {
					clearContent();
				}
				$('#list_content').append(data.data);
			}
			hideLoader();
			isAjaxRequesting = false;
		});
	}

	$(document).ready(function() {
	    $('.jplist-view').click(function(){
            var addCss = $(this).attr('data-type');
            $('#list_content').removeClass('jplist-grid-view');
            $('#list_content').removeClass('jplist-list-view');
            $('#list_content').addClass(addCss);
        });
          
        $('#filter_text').keydown(function(event){
            if(event.keyCode == 13){ $('#title-search-button').trigger('click');}
        });
        
        $('#title-search-button').click(function(){
            if (isAjaxRequesting){ return false; }
            var search_text = $('#filter_text').val();
            if (search_text == '' && search_text.length < 1) {
                alert('검색어를 입력해주세요');
                return false;
            }
            param.search_text = search_text;
            $('#filter_text').val('')
            loadGames();  
        });
		loadGames();
	}); 
</script>
<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
