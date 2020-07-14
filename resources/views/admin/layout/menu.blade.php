<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
$nav_pemesanan        = DB::table('pemesanan')
            ->join('produk', 'produk.id_produk', '=', 'pemesanan.id_produk','LEFT')
            ->select('pemesanan.*', 'produk.nama_produk', 'produk.harga_jual','produk.gambar')
            ->where('pemesanan.status_pemesanan','Menunggu')
            ->orderBy('id_produk','DESC')
            ->get();
$pendaftaran        =  DB::table('pendaftaran')->orderBy('id','ASC')->get();
$testimoni          =  DB::table('testimoni')->orderBy('id','ASC')->skip(0)->take(3)->get();
?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <a href="{{ asset('admin/dasbor') }}" class="btn btn-sm"><i class="fa fa-tachometer-alt"></i> Dasbor</a>
            <a href="{{ asset('/') }}" class="btn btn-sm" target="_blank"><i class="fa fa-home"></i> Halaman Website</a>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"> Pendaftaran Baru </i>
                        <!-- Counter - Messages -->
                        <span
                            class="badge badge-danger badge-counter"><?php if($pendaftaran) { echo count($pendaftaran); }else{ echo 0; } ?></span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Terdapat <?php if($pendaftaran) { echo count($pendaftaran); }else{ echo 0; } ?> Pendaftaran
                            Baru
                        </h6>
                        <?php foreach($pendaftaran as $pendaftaran) { ?>
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{ asset('admin/pendaftaran/detail/'.$pendaftaran->id) }}">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('public/frontend/html')}}/img/icone-people.png" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate"><?= $pendaftaran->nama_lengkap ?></div>
                                <div class="small text-gray-500"><i class="fab fa-whatsapp"></i>
                                    <?= $pendaftaran->no_whatsapp ?></div>
                                <div class="small text-gray-500"><i class="fa fa-book"></i>
                                    <?= $pendaftaran->nomer_induk ?> </div>
                            </div>
                        </a>

                        <?php } ?>
                        <a class="dropdown-item text-center small text-gray-500"
                            href="{{ asset('admin/dasbor/pendaftaran') }}">Lihat semua Pendaftaran...</a>
                    </div>
                </li>

                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Testimoni Baru
                        <!-- Counter - Messages -->
                        <span
                            class="badge badge-danger badge-counter"><?php if($testimoni) { echo count($testimoni); }else{ echo 0; } ?></span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Terdapat <?php if($testimoni) { echo count($testimoni); }else{ echo 0; } ?> Testimoni Baru
                        </h6>
                        <?php foreach($testimoni as $testimoni) { ?>
                        <a class="dropdown-item d-flex align-items-center"
                            href="{{ asset('admin/pendaftaran/detail/'.$testimoni->id) }}">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="{{asset('public/frontend/html')}}/img/icone-people.png" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate"><?= $testimoni->nama_lengkap ?></div>
                                <div class="small text-gray-500">
                                    <?= \Illuminate\Support\Str::limit(strip_tags($testimoni->nama_produk), 30, $end='...') ?>
                                </div>
                                <p>Komentar</p>
                                <div class="small text-gray-500">
                                    <?= \Illuminate\Support\Str::limit(strip_tags($testimoni->message), 30, $end='...') ?>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                        <a class="dropdown-item text-center small text-gray-500"
                            href="{{ asset('admin/dasbor/testimoni') }}">Lihat semua Testimoni...</a>

                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= Session()->get('nama'); ?>
                            (<?= Session()->get('akses_level'); ?>)</span>
                        <img class="img-profile rounded-circle"
                            src="http://localhost/nitrico/assets/upload/user/thumbs/testimonials-1.jpg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Update Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Setting Website
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">{{ $title }}</h1>
