<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <div class="pcoded-navigatio-lavel">Navigation</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["dashboard"])[0]; ?>">
                        <a href="<?= base_url('dashboard') ?>">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["users"])[0]; ?>">
                        <a href="<?= base_url('users') ?>">
                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                            <span class="pcoded-mtext">Users</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["plans"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                            <span class="pcoded-mtext">Plans</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["index"])[0]; ?>">
                                <a href="<?= base_url('plans/index') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Plans</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["task"])[0]; ?>">
                                <a href="<?= base_url('plans/task') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Tasks</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["deposit"])[0]; ?>">
                        <a href="<?= base_url('deposit') ?>">
                            <span class="pcoded-micon"><i class="fa fa-upload"></i></span>
                            <span class="pcoded-mtext">Deposit</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu <?= menu(1,["withdraw"])[2]; ?>">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="fa fa-download"></i></span>
                            <span class="pcoded-mtext">Withdraw</span>
                        </a>   
                        <ul class="pcoded-submenu">
                            <li class="<?= menu(2,["pending"])[0]; ?>">
                                <a href="<?= base_url('withdraw/pending') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Pending</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["approve"])[0]; ?>">
                                <a href="<?= base_url('withdraw/approve') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Approved</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["success"])[0]; ?>">
                                <a href="<?= base_url('withdraw/success') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Success</span>
                                </a>
                            </li>
                            <li class="<?= menu(2,["reject"])[0]; ?>">
                                <a href="<?= base_url('withdraw/reject') ?>">
                                    <span class="pcoded-micon"><i class="fa fa-list"></i></span>
                                    <span class="pcoded-mtext">Rejected</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(1,["setting"])[0]; ?>">
                        <a href="<?= base_url('setting') ?>">
                            <span class="pcoded-micon"><i class="fa fa-gear fa-spin"></i></span>
                            <span class="pcoded-mtext">Setting</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li>
                        <a href="<?= base_url('login/logout') ?>">
                            <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                            <span class="pcoded-mtext">Logout</span>
                        </a>
                    </li>
                </ul>
                <div class="pcoded-navigatio-lavel">CMS</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(2,["slider"])[0]; ?>">
                        <a href="<?= base_url('cms/slider') ?>">
                            <span class="pcoded-micon"><i class="fa fa-picture-o"></i></span>
                            <span class="pcoded-mtext">Slider</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(2,["popup"])[0]; ?>">
                        <a href="<?= base_url('cms/popup') ?>">
                            <span class="pcoded-micon"><i class="fa fa-window-maximize"></i></span>
                            <span class="pcoded-mtext">Popup</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(2,["message_center"])[0]; ?>">
                        <a href="<?= base_url('cms/message_center') ?>">
                            <span class="pcoded-micon"><i class="fa fa-bell"></i></span>
                            <span class="pcoded-mtext">Message Center</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(2,["pages"])[0]; ?>">
                        <a href="<?= base_url('cms/pages') ?>">
                            <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                            <span class="pcoded-mtext">Pages</span>
                        </a>
                    </li>
                </ul>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="<?= menu(2,["tutorials"])[0]; ?>">
                        <a href="<?= base_url('cms/tutorials') ?>">
                            <span class="pcoded-micon"><i class="fa fa-info"></i></span>
                            <span class="pcoded-mtext">Tutorials</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">