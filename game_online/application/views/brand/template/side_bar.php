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

									<li class ='<?= echoSelectedClassIfRequestMatches('about_us') ?>'>
                                        <a href="<?= site_url('brand/index/about_us');?>">
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                            <span>About us</span>
                                        </a>
                                    </li>
									<li class ='<?= echoSelectedClassIfRequestMatches('commissions') ?>'>
                                        <a href="<?= site_url('brand/index/commissions');?>">
                                            <i class="fa fa-th-large" aria-hidden="true"></i>
                                            <span>Commissions</span>
                                        </a>
                                    </li>
									<li class ='<?= echoSelectedClassIfRequestMatches('support') ?>'>
                                        <a href="<?= site_url('brand/index/support');?>">
                                            <i class="fa fa-support" aria-hidden="true"></i>
                                            <span>Support</span>
                                        </a>
                                    </li>
									<?php if ($login_status):?>
									<li class ='<?= echoSelectedClassIfRequestMatches('tool') ?>'>
                                        <a href="<?= site_url('brand/reports/tool');?>">
                                            <i class="fa fa-laptop text-danger" aria-hidden="true"></i>
                                            <span class="text-warning ">Marketing Tools</span>
                                        </a>
                                    </li>

                                    <li class="nav-parent <?= selectedMatchArray(array('agent_detail','statistical_records','agent_commission_record','settle_account'))?>">
                                        <a>
                                            <i class="fa fa-bar-chart text-danger" aria-hidden="true"></i>
                                            <span class="text-warning ">Affiliate Reports</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li class ="<?= echoSelectedClassIfRequestMatches('agent_detail') ?>">
                                                <a href="<?= site_url('brand/reports/agent_detail');?>">
                                                     Detail Record
                                                </a>
                                            </li>
											<li class ="<?= echoSelectedClassIfRequestMatches('statistical_records') ?>">
                                                <a href="<?= site_url('brand/reports/statistical_records');?>">
                                                     Statistical Records
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
									
									<li class ='<?= echoSelectedClassIfRequestMatches('request_payment') ?>'>
                                        <a href="<?= site_url('brand/reports/request_payment');?>">
                                            <i class="fa fa-money text-danger" aria-hidden="true"></i>
                                            <span class="text-warning ">Request Payment</span>
                                        </a>
                                    </li>
                                    <?php endif;?>
									
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
                                        <li><a href="https://tegbo.totalegame.net/en/Account/Login" target="_blank">Microgaming</a></li>
                                        <li><a href="https://admin.globaladminpt.com/" target="_blank">Playtech</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                
                    </div>
                </aside>
                <!-- end: sidebar -->