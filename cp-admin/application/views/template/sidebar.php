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
            </div>
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">