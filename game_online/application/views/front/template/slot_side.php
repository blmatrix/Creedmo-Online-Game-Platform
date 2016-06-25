				<div class="column160px">
					<div class="sticky">
						<div class="Sub_category">
							<ul>
<?php if (count($cate_rows) > 0):?>							    
								<li class="cate nav_active" data-target="featured">
									<a>Featured <span class="pull-right1 label"><?= $feature_game_count?></span></a>
								</li>
    <?php foreach($cate_rows as $cate):?>
                                <li  class="cate" data-target="<?=$cate -> game_category1_no?>">
                                    <a> <?=$cate -> game_category1_name?> <span class="pull-right1 label"><?= $cate -> game_count?></span> </a>
                                </li>
    <?php endforeach;?>								
							</ul>
<?php endif;?>
						</div>
						<div style="padding:15px 0 0 4px">
							<a onclick ="<?=  generate_click_event(VENDER_MG,'MPPlayboy',GAME_TYPE_LIVE,$session_id);?>"><img src="<?=base_url('assets/') ?>/images/slide/150_playboy_live.jpg" alt="MG Playboy Live" /></a>
						</div>
					</div>
				</div>
				<script>
					$(document).ready(function(){
						$('.cate').click(function(e){
		                    $('.cate').removeClass('nav_active');
		                    $(this).addClass('nav_active');
		                    
		                    var position = $('#scroll_target').offset(); 
                            $('html,body').animate({ scrollTop : position.top }, 0); 
		                    
		                    cate = $(this).attr('data-target');
		                    if (cate == 'featured'){canScrollLoading = false;
		                    }else {canScrollLoading = true;}
		                    setAddType('clear');
		                    $('#filter_text').val('');
		                    makeParam(cate,'','grid',1);
		                    loadGames();   
						});
						
						$('#filter_text').keydown(function(event){
						    if(event.keyCode == 13){
                                $('#title-search-button').trigger('click');
                            }
						});
						
						$('#title-search-button').click(function(){
						    var search_text = $('#filter_text').val();
						    if (search_text == '' && search_text.length < 1) {
						        alert('검색어를 입력해주세요');
						        return false;
						    }
						    canScrollLoading = false;
						    param.search_text = search_text;
						    
						    $('#filter_text').val('')
                            loadGames();  
						});
						
						$('.jplist-view').click(function(){
						    var addCss = $(this).attr('data-type');
                            $('#list_content').removeClass('jplist-grid-view');
                            $('#list_content').removeClass('jplist-list-view');
                            $('#list_content').addClass(addCss);
						});   
					});
				</script>