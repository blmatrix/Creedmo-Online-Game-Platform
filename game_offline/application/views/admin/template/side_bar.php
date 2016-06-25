    <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Navigation  
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li class ='<?= echoSelectedClassIfRequestMatches('index') ?>'>
                                        <a href="<?= site_url('admin/index/index');?>">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>관리자메인</span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-parent <?= selectedMatchArray(array('manage_setting','game_list','event','manager_setting','affiliate_banner','1', '2','count'))?>">
                                        <a>
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                            <span>Setting</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li class ='<?= echoSelectedClassIfRequestMatches('manage_setting') ?>'>
                                                   <a href ="<?= site_url('admin/settings/manage_setting');?>">
                                                     메니지먼트 셋팅
                                                </a>
                                            </li>
                                            <li class ='<?= echoSelectedClassIfRequestMatches('game_list') ?>'>
                                                <a href ="<?= site_url('admin/settings/game_list');?>">
                                                     슬롯 게임 리스트
                                                </a>
                                            </li>
                                            <!-- <li class="nav-active">
                                                <a href="notice.html">
                                                     Notifications
                                                </a>
                                            </li> -->
                                            <li class ='<?= echoSelectedClassIfRequestMatches('event') ?>'>
                                                <a href ="<?= site_url('admin/settings/event');?>">
                                                     Event
                                                </a>
                                            </li>
                                            <li class ='<?= echoSelectedClassIfRequestMatches('manager_setting') ?>' >
                                                <a href ="<?= site_url('admin/settings/manager_setting');?>">
                                                     운영 메니저 관리
                                                </a>
                                            </li>
                                             <!-- <li class ='<?= echoSelectedClassIfRequestMatches('affiliate_banner') ?>' >
                                                <a href ="<?= site_url('admin/settings/affiliate_banner');?>">
                                                     추천인 배너
                                                </a>
                                            </li> -->
                                            <li class ='<?= echoSelectedClassIfRequestMatches('1')?>'>
                                                   <a href ="<?= site_url('admin/boards/board_list');?>/1">
                                                     유저페이지 점검 관리 메세지
                                                </a>
                                            </li>
                                            
                                            <!-- <li class ='<?= echoSelectedClassIfRequestMatches('2')?>'>
                                                   <a href ="<?= site_url('admin/boards/board_list');?>/2">
                                                     Admin Board
                                                </a>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <li class="nav-parent <?= selectedMatchArray(array('members','coupon','member_lock','member_view'))?>">
                                        <a>
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                            <span>회원</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li class ='<?= echoSelectedClassIfRequestMatches('members') ?>'>
                                                <a href="<?= site_url('admin/member/members');?>">
                                                     회원 리스트
                                                </a>
                                            </li>
                                            <li class ='<?= echoSelectedClassIfRequestMatches('coupon') ?>'>
                                                <a href="<?= site_url('admin/member/coupon');?>">
                                                     쿠폰 생성 및 관리
                                                </a>
                                            </li>
                                            <li class = '<?= echoSelectedClassIfRequestMatches('member_lock') ?>'>
                                                <a href="<?= site_url('admin/member/member_lock');?>">
                                                     잠긴 회원 리스트
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class ='<?= echoSelectedClassIfRequestMatches('deposit_list') ?>'>
                                        <a href="<?= site_url('admin/deposits/deposit_list');?>">
                                            <span id ="s_deposit" class="pull-right label <?= $deposit_request_count > 0 ? 'label-danger':'label-primary'?>"><?= $confirm_deposit_count?></span>
                                            <i class="fa fa-bank" aria-hidden="true"></i>
                                            <span>입금 신청 내역 </span>
                                        </a>
                                    </li>
                                    <li class ='<?= echoSelectedClassIfRequestMatches('withdraw_list') ?>'>
                                        <a  href="<?= site_url('admin/withdraws/withdraw_list');?>">
                                            <span id ="s_withdraw" class="pull-right label <?= $withdraw_request_count > 0 ? 'label-danger':'label-primary'?>"><?= $confirm_withdraw_count?></span>
                                            <i class="fa fa-money" aria-hidden="true"></i>
                                            <span>출금 신청 내역  </span>
                                        </a>
                                    </li>
                                    <li class = '<?= echoSelectedClassIfRequestMatches('transfer_record') ?>'>
                                        <a href="<?= site_url('admin/transfer/transfer_record');?>">
                                            <span class="pull-right label label-primary"><?= $tranfer_count?></span>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>게임칩 이동 내역 </span>
                                        </a>
                                    </li>
                                    
                                     <li class = '<?= echoSelectedClassIfRequestMatches('game_play_update_history') ?>'>
                                        <a href="<?= site_url('admin/update_history/game_play_update_history');?>">
                                            <span class="pull-right label label-primary">1</span>
                                            <i class="fa fa-rocket" aria-hidden="true"></i>
                                            <span>게임플레이 API 히스토리 </span>
                                        </a>
                                    </li>
                                    
                                    <li class="nav-parent <?= selectedMatchArray(array('profit_report','credit_transfer'))?>">
                                        <a>
                                            <i class="fa fa-bar-chart-o" aria-hidden="true"></i>
                                            <span>재정 리포트</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li class = '<?= echoSelectedClassIfRequestMatches('profit_report') ?>'>
                                                <a href="<?= site_url('admin/financial/profit_report');?>">
                                                     일별 수익 리포트
                                                </a>
                                            </li>
                                            <li class ='<?= echoSelectedClassIfRequestMatches('credit_transfer') ?>'>
                                                <a href="<?= site_url('admin/financial/credit_transfer');?>">
                                                     회원별 수익 리포트
                                                </a>
                                            </li>
                                            <!--<li>
                                                <a href="casino-profit-report.html">
                                                     Casino Profit Report
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cashier-report.html">
                                                     Game Cashier Report
                                                </a>
                                            </li>-->
                                        </ul>
                                    </li>
                                    <li class="nav-parent <?= selectedMatchArray(array('agents','agent_commission_record','agents_list'))?>">
                                        <a>
                                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                                            <span>파트너 리포트</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li class ="<?= echoSelectedClassIfRequestMatches('agents') ?>">
                                                <a href="<?= site_url('admin/affiliate/agents');?>">
                                                     주별 파트너 수익 내역 </br> (실시간)
                                                </a>
                                            </li>
											<li class ="<?= echoSelectedClassIfRequestMatches('agents_list') ?>">
                                                <a href="<?= site_url('admin/affiliate/agents_list');?>">
                                                     파트너 리스트
                                                </a>
                                            </li>
                                             <li class ="<?= echoSelectedClassIfRequestMatches('agent_commission_record') ?>">
                                                <a href="<?= site_url('admin/affiliate/agent_commission_record');?>">
                                                     확정된 파트너 정산 내역 </br> (주별 수익금 내역)
                                                </a>
                                            </li>
                                          
                                            <!--<li>
                                                <a href="settle-report.html">
                                                     Settlement Report
                                                </a>
                                            </li>-->
                                        </ul>
                                    </li>
									<li class = '<?= echoSelectedClassIfRequestMatches('settle_account') ?>'>
                                        <a href="<?= site_url('admin/affiliate/settle_account');?>">
                                            <span class="pull-right label label-primary">2</span>
                                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                                            <span>파트너 정산 신청 내역</span>
                                        </a>
                                    </li>
                                    <li class="nav-parent <?= selectedMatchArray(array('game_stats','average_profile_visit'))?>">
                                        <a>
                                            <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                            <span>통계</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li class ="<?= echoSelectedClassIfRequestMatches('game_stats') ?>">
                                                <a href="<?= site_url('admin/statistics/game_stats');?>">
                                                     유저 게임 플레이 내역
                                                </a>
                                            </li>
                                            
                                            <li class ="<?= echoSelectedClassIfRequestMatches('average_profile_visit') ?>">
                                                <a href="<?= site_url('admin/statistics/average_profile_visit');?>">
                                                     유저 웹사이트 통계
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url()?>/piwik" target="_blank">
                                                     유저 통계 디테일
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <hr class="separator" />
                            <div class="sidebar-widget widget-tasks">
                                <div class="widget-header">
                                    <h6>Game Admin</h6>
                                    <div class="widget-toggle">+</div>
                                </div>
                                <div class="widget-content">
                                    <ul class="list-unstyled m-none">
                                        <li><a href="https://tegbo.totalegame.net/en/Account/Login" target="_blank">MG Game Admin</a> </li>
                                        <li><a href="https://admin.globaladminpt.com/" target="_blank">PT Game Admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </aside>
                <!-- end: sidebar -->