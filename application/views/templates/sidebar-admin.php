<div class="col-md-3 left_col sidebar_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a class="site_title"><img style="width: 29px; height: 29px; border-radius: 50%; margin-left: 10px" src="<?= base_url('build/img/'); ?>logo-posyandu-1.png" alt=""></i> <span>POSYANDU</span></a>
        </div>

        <div class="clearfix"></div>
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url('dashboard/admin') ?>"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Master Data</h3>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url('ibu/admin') ?>"><i class="fa fa-female"></i> Data Ibu</a>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url('anak/admin') ?>"><i class="fa fa-child"></i> Data Anak</a>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url('petugas') ?>"><i class="fa fa-users"></i> Data Petugas</a>
                    </li>
                </ul>
                <ul class="nav side-menu">
                    <li><a href="<?= base_url('user/index') ?>"><i class="fa fa-sticky-note"></i> Data Akun Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>