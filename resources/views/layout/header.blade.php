<?php
use Illuminate\Support\Facades\DB;
    use App\Nav_model;
    $site                 = DB::table('konfigurasi')->first();
    // Produk
    $myproduk             = new Nav_model();
    $nav_kategori_produk  = $myproduk->nav_produk();
    // Nav profil
    $myprofil             = new Nav_model();
    $nav_profil           = $myproduk->nav_profil();
?>
<!-- ======= Header ======= -->
<header>
    <nav class="navbar navbar-default navbar-fixed-top" style="background: rgba(42, 179, 4, 0.8);" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- offcanvas-trigger-effects -->
                <a style="width: 195px; margin-left: 20px" href=""><img style="width: 60px;"
                        src="{{ asset('public/upload/image/'.$site->logo) }}" alt="{!! $site->namaweb !!}"></a>
                <span class="text-uppercase " style="color: white;font-size: small;font-weight: bold;">{!!
                    $site->namaweb !!}</span>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php if($aktif == 'nameweb'){echo " active";} ?>"><a href="{{ asset('/') }}">Home</a>
                    </li>
                    <li class="<?php if($aktif == 'read'){echo " active";} ?>"><a href="#profile">Tentang Kami</a>
                    </li>
                    <li class="dropdown <?php if($aktif == 'produk'){echo " active";} ?>"><a
                            href="{{ asset('produk') }}">Produk <b class="caret"></b></a>
                        <!-- submenu-wrapper -->
                        <div class="submenu-wrapper submenu-wrapper-topbottom">
                            <div class="submenu-inner  submenu-inner-topbottom">
                                <ul class="dropdown-menu">
                                    @foreach($nav_kategori_produk as $nkp)
                                    <li><a
                                            href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}"><?=$nkp->nama_kategori_produk ?></a>
                                    </li>
                                    @endforeach
                                    <li><a href="#">
                                            <hr style="margin: 0; padding: 0;"></a></li>
                                    <li><a href="{{ asset('produk') }}">Semua Produk</a></li>
                                </ul>
                            </div><!-- /.submenu-inner -->
                        </div> <!-- /.submenu-wrapper -->
                    </li>
                    <li class="<?php if($aktif == 'video'){echo " active";} ?>"><a
                            href="{{ asset('video') }}">Program</a></li>
                    <li class="<?php if($aktif == 'laporan'){echo " active";} ?>"><a
                            href="{{ asset('download') }}">Laporan</a></li>
                    <li class="<?php if($aktif == 'kontak'){echo " active";} ?>"><a
                            href="{{ asset('kontak') }}">Kontak</a></li>
                    <li class="language active" style="margin-right: inherit;"><a href="javascript:;" id="Indonesia"
                            onclick="translateLanguage(this.id);">
                            <img src="{{asset('public/upload/image/flag/indonesia.png')}}" alt="" width="30px"
                                height="30px" /></a> </li>
                    <li class="language " style="margin-right: inherit;"><a href="javascript:;" id="Chinese"
                            onclick="translateLanguage(this.id);">
                            <img src="{{asset('public/upload/image/flag/china.png')}}" alt="" width="30px" height="30px" /></a>
                    </li>
                    <li class="language " style="margin-right: inherit;"><a href="javascript:;" id="English"
                            onclick="translateLanguage(this.id);">
                            <img src="{{asset('public/upload/image/flag/uk.png')}}" alt="" width="30px" height="30px" /></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!-- End Header -->
<!-- ======= Hero Section ======= -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($slider as $key => $value)
        <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : "" }}>
        </li>
        @endforeach
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($slider as $key => $slider)
        <div class="item {{ $key == 0 ? "active" : "" }}">
            <img src="{{ asset('public/upload/image/slider/'.$slider->gambar) }}" alt="<?= $slider->judul_galeri ?>">
            <!-- Static Header -->
            <div class="header-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h2>
                        <span><?= $slider->judul_galeri ?></span>
                    </h2>
                    <h4 style="color: white;margin-right: 238px;margin-left: 238px;">
                        <?= \Illuminate\Support\Str::limit(strip_tags($slider->isi), 500, $end='...') ?></h4>
                    <br>
                    <div class="">
                        <a class="btn btn-theme btn-sm btn-min-block" href="<?= $slider->website ?>">Read More</a></div>
                </div>
            </div><!-- /header-text -->
        </div>
        @endforeach
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div><!-- Carousel END -->
