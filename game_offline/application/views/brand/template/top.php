<!doctype html>

<html class="fixed header-dark sidebar-left-sm">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">

        <title>파트너 정산 페이지</title>
        <meta name="keywords" content="파트너정산페이지" />
        <meta name="description" content="파트너정산페이지">
        <meta name="author" content="aaa.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/brand'); ?>/vendor/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="<?=base_url('assets/brand'); ?>/vendor/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="<?=base_url('assets/brand'); ?>/vendor/magnific-popup/magnific-popup.css" />        
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/brand'); ?>/stylesheets/theme.css" />
        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/brand'); ?>/stylesheets/skins/default.css" />
        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/brand'); ?>/stylesheets/theme-custom.css">		
        <!-- Head Libs -->
        <script src="<?=base_url('assets/brand'); ?>/vendor/jquery/jquery.js"></script>
        <script src="<?=base_url('assets/brand'); ?>/vendor/modernizr/modernizr.js"></script>
        <script src="<?=base_url('assets/brand'); ?>/baofa.js"></script>  
        <script src="<?=base_url('assets/');?>/js/jquery.number.min.js"></script>
         <script type="text/javascript" src="<?=base_url('assets/'); ?>/vendor/jsdelivr/moment.min.js"></script>
        <script>
            function openModal(url) {
                $('div.modal').removeData('bs.modal');
                $('div.modal').find('.modal-content').empty();
                $('div.modal').modal({
                    remote : url
                });
            }
            
            function alertAndclearElement(m,el){
                alert(m);
                el.val('');
                el.focus();
            }
            
            function trim(str){
                 return str.replace(/(^\s*)|(\s*$)/gi, "");
            }
            
            
        </script>       

    </head>
    <body>
        <section class="body">
            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="<?= site_url('brand'); ?>" class="logo">
                        <img src="<?=base_url('assets/brand'); ?>/images/baofa8-logo.png" height="52" alt="BaoFa Affiliate" />
						<span>파트너 정산</span>
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
<?php if ($login_status):?>            
                <!-- start: search & user box -->
                <div class="header-right">
           
                    <ul class="notifications callnum">
                        <li>
                            <i class="fa fa-phone-square"></i> +<?= $user -> phone_code?> <?= $user -> user_phone?><br>언제든 문의 주세요!!<!--  <i class="fa fa-qq"></i> (<?= $user -> im_type?>) <?= $user -> im_id?> -->
                        </li>
                    </ul>
                    <span class="separator"></span>

                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="<?=base_url('assets/brand'); ?>/images/gentleman.jpg" class="img-circle" />
                            </figure>
                            <div class="profile-info">
                                <span class="name"><?= $user -> user_id?></span>
                                <span class="role">추천인 파트너</span>
                            </div>
                            <i class="fa custom-caret"></i>
                        </a>
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                
                                    <a href ="<?= site_url('brand/settings/manager_setting'); ?>" role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Set Manage</a>
                                </li> 
                                <li>
                                    <a href ="<?= site_url('brand/adminauth/logout'); ?>" role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
<?php endif;?>                
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
