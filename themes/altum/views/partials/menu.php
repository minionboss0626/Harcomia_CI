<?php defined('ALTUMCODE') || die()?>

<nav id="navbar" class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark mb-6">
    <div class="container">
        <a class="navbar-brand" href="<?=url()?>" data-light-value="<?=settings()->main->logo_light != '' ? \Altum\Uploads::get_full_url('logo_light') . settings()->main->logo_light : settings()->main->title?>" data-light-class="<?=settings()->main->logo_light != '' ? 'img-fluid navbar-logo' : ''?>" data-dark-value="<?=settings()->main->logo_dark != '' ? \Altum\Uploads::get_full_url('logo_dark') . settings()->main->logo_dark : settings()->main->title?>" data-dark-class="<?=settings()->main->logo_dark != '' ? 'img-fluid navbar-logo' : ''?>">
            <?php if (settings()->main->{'logo_' . \Altum\ThemeStyle::get()} != ''): ?>
                <img src="<?=\Altum\Uploads::get_full_url('logo_' . \Altum\ThemeStyle::get()) . settings()->main->{'logo_' . \Altum\ThemeStyle::get()}?>" class="img-fluid navbar-logo" alt="<?=l('global.accessibility.logo_alt')?>" />
            <?php else: ?>
                <span class="logo">
                    <img src="https://www.harcomia.com/dash-v2/assets/images/logo-sm.png" height="24" />
                    <span class="logo-text"> <?=settings()->main->title?> </span>
                </span>
            <?php endif?>
        </a>

        <button class="btn navbar-custom-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#main_navbar" aria-
        ="main_navbar" aria-expanded="false" aria-label="<?=l('global.accessibility.toggle_navigation')?>">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="main_navbar">
            <ul class="navbar-nav">

                <!-- <?php foreach ($data->pages as $data): ?>
                    <li class="nav-item"><a class="nav-link" href="<?=$data->url?>" target="<?=$data->target?>"><?=$data->title?></a></li>
                <?php endforeach?>

                <?php if (settings()->links->biolinks_is_enabled && settings()->links->directory_is_enabled): ?>
                    <li class="nav-item"><a class="nav-link" href="<?=url('directory')?>"><?=l('directory.menu')?></a></li>
                <?php endif?>

                <?php if (settings()->tools->is_enabled && settings()->tools->access == 'everyone'): ?>
                    <li class="nav-item"><a class="nav-link" href="<?=url('tools')?>"><?=l('tools.menu')?></a></li>
                <?php endif?> -->


                <?php if (\Altum\Authentication::check()): ?>

                    <li class="nav-item dropdown"> 
                        <a class="nav-link"  data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"> 
                            <img id="header-lang-img" src="https://www.harcomia.com/dash-v2/assets/images/flags/us.jpg" alt="Header Language" height="16"> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-2 px-4">
                            <div class="mb-2">
                                <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                    <img src="https://www.harcomia.com/dash-v2/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle ml-2">English</span>
                                </a>
                            </div>
                            <div class="mb-2">
                                <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                    <img src="https://www.harcomia.com/dash-v2/assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle ml-2">Spanish</span>
                                </a>
                            </div>
                            <div class="mb-2">
                                <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                    <img src="https://www.harcomia.com/dash-v2/assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle ml-2">Germany</span>
                                </a>
                            </div>
                            <div class="mb-2">
                                <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                    <img src="https://www.harcomia.com/dash-v2/assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle ml-2">Italian</span>
                                </a>
                            </div>
                            <div class="">
                                <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                    <img src="https://www.harcomia.com/dash-v2/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                    <span class="align-middle ml-2">Russian</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown"> 
                        <a class="nav-link" href="javascript:;"> 
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon icon-lg layout-mode-dark"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="d-none" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun icon-lg layout-mode-light"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg> -->
                            <button type="button" id="switch_theme_style" class="btn btn-link text-decoration-none p-0" data-toggle="tooltip" title="<?= sprintf(l('global.theme_style'), (\Altum\ThemeStyle::get() == 'light' ? l('global.theme_style_dark') : l('global.theme_style_light'))) ?>" data-title-theme-style-light="<?= sprintf(l('global.theme_style'), l('global.theme_style_light')) ?>" data-title-theme-style-dark="<?= sprintf(l('global.theme_style'), l('global.theme_style_dark')) ?>">
                                <span style="color: white" data-theme-style="light" class="<?= \Altum\ThemeStyle::get() == 'light' ? null : 'd-none' ?>"><i class="far fa-fw fa-lg fa-sun mr-1"></i> </span>
                                <span style="color: white" data-theme-style="dark" class="<?= \Altum\ThemeStyle::get() == 'dark' ? null : 'd-none' ?>"><i class="far fa-fw fa-lg fa-moon mr-1"></i> </span>
                            </button>
                            <?php include_view(THEME_PATH . 'views/partials/theme_style_js.php') ?>
                        </a>

                    </li>
                    
                    <li class="nav-item dropdown"> 
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid icon-lg"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-2 px-4">
                            <div class="d-flex grid-row">
                                <div class="col-4 p-3">
                                    <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                        <div class="text-center">
                                            <i class="fab fa-github fa-lg m-2"></i>
                                            <span>GitHub</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4 p-3">
                                    <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                        <div class="text-center">
                                            <i class="fab fa-bitbucket fa-lg m-2"></i>
                                            <span>Bitbucket</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4 p-3">
                                    <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                        <div class="text-center">
                                            <i class="fab fa-dribbble fa-lg m-2"></i>
                                            <span>Dribbble</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex grid-row">
                                <div class="col-4 p-3">
                                    <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                        <div class="text-center">
                                            <i class="fab fa-dropbox fa-lg m-2"></i>
                                            <span>Dropbox</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4 p-3">
                                    <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                        <div class="text-center">
                                            <i class="fab fa-dropbox fa-lg m-2"></i>
                                            <span>Chimp</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-4 p-3">
                                    <a class="dropdown-icon-item text-decoration-none" href="javascript:;">
                                        <div class="text-center">
                                            <i class="fab fa-slack fa-lg m-2"></i>
                                            <span>Slack</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown"> 
                        <a class="nav-link"  data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-lg"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                            <span class="badge bg-danger rounded-pill">5</span> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right notifications">
                            <div class="d-flex justify-content-between p-2 px-4">
                                <h6> Notifications </h6>
                                <small><u>Unread(3)</u></small>
                            </div>
                            <div class="notify-contents">
                                <div class="d-flex p-2 px-3">
                                    <img src="<?=get_gravatar($this->user->email, 80, 'identicon')?>" class="rounded-circle mr-1" loading="lazy" width="32" height="32"/>
                                    <div class="ml-3">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <span><i class="far fa-clock"></i> 1 hours ago</span>
                                    </div>
                                </div>
                                <div class="d-flex p-2 px-3">
                                    <img src="<?=get_gravatar($this->user->email, 80, 'identicon')?>" class="rounded-circle mr-1" loading="lazy" width="32" height="32"/>
                                    <div class="ml-3">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <span><i class="far fa-clock"></i> 1 hours ago</span>
                                    </div>
                                </div>
                                <div class="d-flex p-2 px-3">
                                    <img src="<?=get_gravatar($this->user->email, 80, 'identicon')?>" class="rounded-circle mr-1" loading="lazy" width="32" height="32"/>
                                    <div class="ml-3">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <span><i class="far fa-clock"></i> 1 hours ago</span>
                                    </div>
                                </div>
                                <div class="d-flex p-2 px-3">
                                    <img src="<?=get_gravatar($this->user->email, 80, 'identicon')?>" class="rounded-circle mr-1" loading="lazy" width="32" height="32"/>
                                    <div class="ml-3">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <span><i class="far fa-clock"></i> 1 hours ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-2 px-4 text-center border-top">
                                <a class="text-decoration-none text-center text-primary view-more">
                                    <i class="fas fa-arrow-alt-circle-right mr-2"></i>
                                    <span>View More..</span>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                            <img src="<?=get_gravatar($this->user->email, 80, 'identicon')?>" class="navbar-avatar mr-1" loading="lazy" />
                            <!-- https://www.harcomia.com/dash-v2/assets/images/users/avatar-1.jpg -->
                            <?=$this->user->name?> <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <?php if (!\Altum\Teams::is_delegated()): ?>
                                <?php if (\Altum\Authentication::is_admin()): ?>
                                    <a class="dropdown-item" href="<?=url('admin')?>"><i class="fa fa-fw fa-sm fa-fingerprint mr-2"></i> <?=l('global.menu.admin')?></a>
                                    <div class="dropdown-divider"></div>
                                <?php endif?>
                            <?php endif?>

                            <?php if (!\Altum\Teams::is_delegated()): ?>
                                <a class="dropdown-item" href="<?=url('account')?>"><i class="fa fa-fw fa-sm fa-wrench mr-2"></i> <?=l('account.profile')?></a>

                                <a class="dropdown-item" href="<?=url('account-plan')?>"><i class="fa fa-fw fa-sm fa-lock mr-2"></i> <?=l('account.lock_screen')?></a>

                                <?php if (settings()->payment->is_enabled): ?>
                                    <a class="dropdown-item" href="<?=url('account-payments')?>"><i class="fa fa-fw fa-sm fa-dollar-sign mr-2"></i> <?=l('account_payments.menu')?></a>

                                    <?php if (\Altum\Plugin::is_active('affiliate') && settings()->affiliate->is_enabled): ?>
                                        <a class="dropdown-item" href="<?=url('referrals')?>"><i class="fa fa-fw fa-sm fa-wallet mr-2"></i> <?=l('referrals.menu')?></a>
                                    <?php endif?>
                                <?php endif?>

                                <?php if (\Altum\Plugin::is_active('teams')): ?>
                                    <a class="dropdown-item" href="<?=url('teams-system')?>"><i class="fa fa-fw fa-sm fa-user-shield mr-2"></i> <?=l('teams_system.menu')?></a>
                                <?php endif?>
                            <?php endif?>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?=url('logout')?>"><i class="fa fa-fw fa-sm fa-sign-out-alt mr-2"></i> <?=l('global.menu.logout')?></a>
                        </div>
                    </li>

                <?php else: ?>

                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-sm btn-outline-primary" href="<?=url('login')?>"><i class="fa fa-fw fa-sm fa-sign-in-alt"></i> <?=l('login.menu')?></a>
                    </li>

                    <?php if (settings()->users->register_is_enabled): ?>
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-sm btn-primary" href="<?=url('register')?>"><i class="fa fa-fw fa-sm fa-plus"></i> <?=l('register.menu')?></a>
                        </li>
                    <?php endif?>

                <?php endif?>

            </ul>
        </div>
    </div>
</nav>

<script>
  let language = "en";

  

</script>
