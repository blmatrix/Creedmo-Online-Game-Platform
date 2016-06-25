 var ptGameWinCount = 0;
		    var mgGameWinCount = 0;
		    function loginAlert(){alert('You need to be logged in our web site !')}
		    function openWindowAlert(m){ alert(m)}
		    function launchGame(vender,game_code,game_type,sessionId,reserved ){
		        var url;
		        var title = vender == 'mg' ? "MG_Games_" + new Date().getTime() : 'PT_Games_'+ new Date().getTime();
		        var option = 'width=1024,height=768,menubar=no,scrollbars=no,toolbar=no,location=no,directories=no,resizable=no';
		        var url ="<?= site_url('game_launcher/launch')?>" + "/" + vender + "/" + game_code + "/"+ game_type + "?session_id="+ sessionId; 
                if (vender == 'mg'){
                    mgGameWinCount++;
                }else if (vender == 'pt'){
                    //pt 게임의 경우 1개의 게임만 가능 
                    if (ptGameWinCount > 0) 
                    {   
                        alert('You can launch only 1 PT game');
                        return false;
                    }else {
                        ptGameWinCount++;
                    }
                }
                var g_vender = vender;
		        var win = window.open(url,title,option);
		        
		        //크롬 unload 이벤트 -> beforeunload event
		        if (win.addEventListener) {
                    win.addEventListener('beforeunload', function(){
                       if (vender == 'mg'){
                            mgGameWinCount--;
                       }else if (vender == 'pt'){
                            ptGameWinCount--;
                       }
                       updateMoneyAfterClose(g_vender);
                    }, false);
                }
                
                //IE 계열 unload 이벤트
                else if (win.attachEvent) {
                    win.attachEvent('onunload', function(){
                       if (vender == 'mg'){
                            mgGameWinCount--;
                       }else if (vender == 'pt'){
                            ptGameWinCount--;
                       }
                       updateMoneyAfterClose(g_vender);
                    });
                }
		    }
		    
		    // 게임창을 닫은 후, 해당 게임머니를 업데이트한다
		    function updateMoneyAfterClose(vender){
		        if (vender == 'mg'){
                        mgGameWinCount--;
                    }else if (vender == 'pt'){
                        ptGameWinCount--;
                    }
                    startAnim(vender);
                    updateGameMoney(vender);    
		    }
		    
		    var mgTimer,ptTimer,timer;
		    //탑 템플릿의 게임 머니 업데이트 
            function updateGameMoney(vender){
                var url ='<?= site_url()?>/ajax/update_game_money/' + vender + '?req_time='+ new Date().getTime();
                var param ={};
                var targetElement = "#"+ vender + "_casino_balance";
                $.ajax({
                    type: "GET",
                    url: url,
                    data: "{}",
                    dataType: "json",
                    async: true,
                    success: function (response) {
                        if (response.errorCode == '0'){
                            $(targetElement).html(response.data.game_money);    
                        }else {
                            $(targetElement).html(response.message);    
                        }
                        stopAnim(vender);
                        $(targetElement).show();
                    }
                    ,
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert(textStatus);
                    }
                });
            }
            
		    function startAnim(vender){
		        var targetElement = "#"+ vender + "_casino_balance";
		        if (vender =='mg'){
		            mgTimer  = setInterval(function(){
                        $(targetElement).toggle();
                     }, 600);      
		        }else {
		             ptTimer  = setInterval(function(){
                        $(targetElement).toggle();
                     }, 600);  
		        }
		    }
		    
		    function stopAnim(vender){
		        if (vender == 'mg'){
		          clearInterval(mgTimer);
		        }else {
		          clearInterval(ptTimer);
		        }
		    }
		    
		    $(document).ready(function(){
		        if ($('#PushMessagingContainer').length > 0) {
    		        $('#PushMessagingContainer').slideDown('slow',function(){
    		          $('#close_noti').click(function(){
                        //$('#PushMessagingContainer').slideUp('fast');
                        var noti_param = {'target_notice_alert': "<?= !empty($notice_alert) ? $notice_alert -> board_no:''?> ", 'noti_state':1}
                        var url = '<?=site_url('ajax/notice_alert_confirm')?>';
                        $.post(url,noti_param, function(data){
                            if (data.errorCode == '0'){
                                $('#PushMessagingContainer').hide();                                
                            }else {
                                alert(data.message);
                            }
                        },'json');
                      });    
    		        });
		        }
		    });