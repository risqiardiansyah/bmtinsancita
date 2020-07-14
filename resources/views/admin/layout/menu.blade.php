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
$testimoni          =  DB::table('testimoni')->orderBy('id','ASC')->get();
$pesan          =  DB::table('pesan')->orderBy('id','ASC')->get();
?>
<style>
    .scrollStyle {
        max-height: 200px;
        overflow-y: scroll;
    }
}

</style>
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
            <a href="{{ asset('/') }}" class="btn btn-sm" target="_blank">Website</a>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span
                            class="badge badge-danger badge-counter"><?php if($pendaftaran) { echo count($pendaftaran); }else{ echo 0; } ?></span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Terdapat <?php if($pendaftaran) { echo count($pendaftaran); }else{ echo 0; } ?> Pendaftaran
                            Baru
                        </h6>
                        <div class="scrollStyle" id="style-1">
                            <?php foreach($pendaftaran as $pendaftaran) { ?>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ asset('admin/pendaftaran/detail/'.$pendaftaran->id) }}">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                        src="{{asset('public/frontend/html')}}/img/icone-people.png" alt="">
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
                        </div>
                        <a class="dropdown-item text-center small text-gray-500"
                            href="{{ asset('admin/dasbor/pendaftaran') }}">Lihat semua Pendaftaran...</a>
                    </div>
                </li>

                <!-- Nav Item - Messages Testimoni -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-comment fa-fw"></i>
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
                        <div class="scrollStyle" id="style-1">
                            <?php foreach($testimoni as $testimoni) { ?>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ asset('admin/pendaftaran/detail/'.$testimoni->id) }}">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                        src="{{asset('public/frontend/html')}}/img/icone-people.png" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate"><?= $testimoni->nama_lengkap ?></div>
                                    <div class="small text-gray-500">
                                        <?= \Illuminate\Support\Str::limit(strip_tags($testimoni->nama_produk), 30, $end='...') ?>
                                    </div>
                                    <p>Komentar</p>
                                    <div class="medium text-gray-500" style="color: red; font-weight: bold;">
                                        <?= \Illuminate\Support\Str::limit(strip_tags($testimoni->message), 30, $end='...') ?>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <a class="dropdown-item text-center small text-gray-500"
                            href="{{ asset('admin/dasbor/testimoni') }}">Lihat semua Testimoni...</a>

                    </div>
                </li>

                <!-- Nav Item - Pesan Kontak -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span
                            class="badge badge-danger badge-counter"><?php if($pesan) { echo count($pesan); }else{ echo 0; } ?></span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Terdapat <?php if($pesan) { echo count($pesan); }else{ echo 0; } ?> Pesan Baru
                        </h6>
                        <div class="scrollStyle" id="style-1">
                            <?php foreach($pesan as $pesan) { ?>
                            <a class="dropdown-item d-flex align-items-center"
                                href="{{ asset('admin/pesan') }}">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle"
                                        src="{{asset('public/frontend/html')}}/img/icone-people.png" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">  {{$pesan->name}}</div>
                                    <div class="small text-gray-500">
                                      {{$pesan->email}}
                                    </div>
                                    <p>Komentar</p>
                                    <div class="medium text-gray-500" style="color: red; font-weight: bold;">
                                        <?= \Illuminate\Support\Str::limit(strip_tags($pesan->content), 30, $end='...') ?>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                        <a class="dropdown-item text-center small text-gray-500"
                            href="{{ asset('admin/pesan') }}">Lihat semua Testimoni...</a>

                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= Session()->get('nama'); ?>
                            (<?= Session()->get('akses_level'); ?>)</span>
                        <img class="img-profile rounded-circle" src="{{asset('public/frontend/html')}}/img/icone-people.png">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
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
