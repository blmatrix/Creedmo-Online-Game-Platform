<?php
include_once APPPATH . "views/front/template/top.php";
?>
    <!-- container -->
    <div id="container" class="slotmain">
	
	<div id="promotion">
		<div class="sub_spot">
			<div class="sub_banner2">
			
				<div class="sub_spot_inr">
					<div class="sub_spot_left">
						<h1><?=$slot_title?></h1>
						<h2><?=$slot_sub_title?></h2>
					</div>
					<div class="sub_spot_right" style="background-image: url(<?=base_url('assets/') ?>/images/slide/<?=$slot_sub_img?>.png)"></div>				
				</div>
			
			</div>
		</div>
	</div>

        <!-- content -->
        <div id="content" class="slotmain">
            <div class="content_main_section">
                <!-- Column 160px -->
<?php
include_once APPPATH . "views/front/template/slot_side.php";
?>
                <!-- Column 840px -->
                <div class="column840px">
                    <!-- Slot List -->
                    <!-- main content -->
                <div id="game_list" class="jplist">

                    <!-- panel -->
                    <div class="jplist-panel panel-top">  
                        <!-- filter by title -->
                        <div class="text-filter-box">
                            <!--[if lt IE 10]>
                            <div class="jplist-label">Filter by Title:</div>
                            <![endif]-->
                            <input style ="margin-right:2px" id ='filter_text' data-path=".title" data-button="#title-search-button" type="text" value="" placeholder="Search" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter"/>
                            <button type="button" id="title-search-button">
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
                            <img src="<?=base_url('assets/')?>/images/ajax-loader.gif" alt="Loading..." title="Loading..." />
                        </div>
                    </div>
                    <!-- ajax content here -->   
                    <div id="list_content" class="jplist-grid-view"></div>

                    <!-- no result found -->
                    <div class="box jplist-no-results text-shadow align-center jplist-hidden">
                        <p>No results found</p>
                    </div>
					
                </div>
					<!-- //Slot List -->
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
        sel_cate : 'featured', 
        search_text : '',
        view : 'grid',
        paging : 1,
        perPage : 20,
        isPageRemained : true
    }
    var isScrollTop = false;
    var canScrollLoading = false;
    var isAjaxRequesting = false;
    var addType ="clear";
    var game_url = "<?= site_url("slot_main/game_list/")?>" + "/" + "<?= $g_vender?>?req_time="+ new Date().getTime(); 
       
    
    function setAddType(str){addType  = str;}
    function showLoader(){$('#preloader').show();}
    function hideLoader(){$('#preloader').hide();}
    function clearContent(){$('#list_content').html('');}
    
    function loadGames(){
        isAjaxRequesting = true;
        showLoader();
        $.ajax({
            type: "GET",
            url: game_url,
            data: param,
            dataType: "json",
            async: true,
            success: function (data) {
                 if (data.errorCode == 0){
                    param.paging =  data.page;
                    param.isPageRemained = false;
                    
                    if (addType != 'append'){
                        clearContent();
                    }
                    $('#list_content').append(data.data);
                    }
                    hideLoader();
                    isAjaxRequesting = false;
                  },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
        });
//         
        // $.getJSON(url,param, function(data){
            // if (data.errorCode == 0){
                // param.paging =  data.page;
                // param.isPageRemained = false;
                // if (addType != 'append'){
                    // clearContent();
                // }
                // $('#list_content').append(data.data);
            // }
            // hideLoader();
            // isAjaxRequesting = false;
        // });
    }
    
    function chageListStyle(){
        $('#list_content').removeClass('jplist-grid-view');
        $('#list_content').removeClass('jplist-list-view');
        var listCss ="jplist-" +  param.view + "-view";
        $('#list_content').addClass(listCss);    
    }
    
    function makeParam(cate, search,view,page){
        param.sel_cate = cate; 
        param.search_text = search; 
        param.view = view; 
        param.paging = page; 
    }
    
    function initParam(){
        param.sel_cate = 'featured'; 
        param.search_text = '';
        param.view = 'grid';
        param.paging = 0;
        param.perPage = 20;
        param.isPageRemained = true;
    } 

    $(document).ready(function(){loadGames();});
    $(window).scroll(function(){  
        if ($(window).scrollTop()  == $(document).height() - $(window).height()){ 
           //featured 카테고리 선택시 Scrolling Loading stop
           if (!canScrollLoading){
               return;
           }
           //현재 요청 진행중이면 Scrolling Loading stop
           if (isAjaxRequesting){
               return;
           }
           setAddType('append');
           loadGames();
        }  
    });  
</script>
<?php
    include_once APPPATH . "views/front/template/footer.php";
 ?>
