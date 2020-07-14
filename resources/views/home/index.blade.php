<section class="intro-wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <h2 class="wow fadeInDown">Welcome to <span style="color: darkred;">{!! $site->namaweb !!}</span></h2>
            {!! $site->tentang!!}
        </div>
        <div class="col-lg-6 col-md-6" style="background: whitesmoke; border-radius: 6px; padding-top: 10px!important;">
            <form action="{{ asset('proses_pendaftaran') }}" method="post" enctype="multipart/form-data">
                <h2 class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Formulir
                    Registrasi Anggota
                </h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(session("msg"))
                <div class="alert alert-success">{!! session("msg") !!}</div>
                @endif
                @csrf
                @method("post")
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{old('nama_lengkap')}}"
                        placeholder="Nama lengkap" onkeypress="return hanyaHuruf(this);" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label for="">Nomor KTP </label>
                    <input type="tel" name="no_ktp" class="form-control" value=""
                        placeholder="Nomor Kartu Tanda Penduduk" onkeypress="return hanyaAngka(this);" minlength="16"
                        maxlength="16" required="" value="{{old('no_ktp')}}">
                </div>
                <div class="form-group">
                    <label for="">Nomor KK</label>
                    <input type="text" name="no_kk" class="form-control" onkeypress="return hanyaAngka(this);"
                        placeholder="Nomor Kartu Keluarga" required="" minlength="16" maxlength="16"
                        value="{{old('no_kk')}}">
                </div>
                <div class="form-group">
                    <label for="">Nomor Whatsapp </label>
                    <input type="tel" name="no_whatsapp" class="form-control" value="" placeholder="Nomor WA yang aktif"
                        onkeypress="return hanyaAngka(this);" value="{{old('no_whatsapp')}}" minlength="10"
                        maxlength="13" required="">
                </div>
                <div class="form-group">
                    <label for="">Pekerjaan</label>
                    <input type="tel" name="pekerjaan" class="form-control" value="{{old('pekerjaan')}}"
                        placeholder="Pekerjaan" required="">
                </div>
                <div class="form-group">
                    <span class="text-danger">*Pastikan semua inputan diisi dengan benar,
                        sebelum menekan tombol submit.</span>
                </div>
                <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block"></span>
                                <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                            @endif
                        </div>
                        
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" title="Mengirim data ke admin">Submit</button>
                    <button type="reset" class="btn btn-danger" title="Menghapus semua isi form">Reset</button>
                </div>
            </form>
        </div>
    </div><!-- /.row -->
</section><!-- /.intro-wrapper -->

<!-- Our Service-->
<section class="service-wrapper">
    <h2 class="section-title wow fadeInDown">Our Services</h2>
    <div class="row">
        <div class="col-md-6 wow fadeInRight">
            <div class="media">
                <a class="media-left" href="#">
                    <span class="icon bg1 {!! $site->setting_logo_service_1 !!}"></span>
                </a>
                <div class="media-body">
                    <h3 class="media-heading"><a href="#">{!! $site->setting_title_service_1 !!}</a></h3>
                    {!! $site->setting_service_1 !!}
                </div> <!-- /.media-body -->
            </div> <!-- /.media -->
        </div> <!-- /.col-md-6 -->

        <div class="col-md-6 wow fadeInRight">
            <div class="media">
                <a class="media-left" href="#">
                    <span class="icon bg2 {!! $site->setting_logo_service_2 !!}"></span>
                </a>
                <div class="media-body">
                    <h3 class="media-heading"><a href="#">{!! $site->setting_title_service_2 !!}</a></h3>
                    {!! $site->setting_service_2 !!}
                </div> <!-- /.media-body -->
            </div> <!-- /.media -->
        </div> <!-- /.col-md-6 -->

        <div class="col-md-6 wow fadeInRight">
            <div class="media">
                <a class="media-left" href="#">
                    <span class="icon bg3 {!! $site->setting_logo_service_3 !!}"></span>
                </a>
                <div class="media-body">
                    <h3 class="media-heading"><a href="#">{!! $site->setting_title_service_3 !!}</a></h3>
                    {!! $site->setting_service_2 !!}
                </div> <!-- /.media-body -->
            </div> <!-- /.media -->
        </div> <!-- /.col-md-6 -->

        <div class="col-md-6 wow fadeInRight">
            <div class="media">
                <a class="media-left" href="#">
                    <span class="icon bg4 {!! $site->setting_logo_service_4 !!}"></span>
                </a>
                <div class="media-body">
                    <h3 class="media-heading"><a href="#">{!! $site->setting_title_service_4 !!}</a></h3>
                    {!! $site->setting_service_4 !!}
                </div> <!-- /.media-body -->
            </div> <!-- /.media -->
        </div> <!-- /.col-md-6 -->
    </div> <!-- /.row -->
</section>
<!-- End Our Service-->

<!-- Our Project-->
<section class="handover-wrapper">
    <h2 class="section-title wow fadeInDown">Our Project</h2>
    <ul class="row">
        <div id="project-kami-slider" class="owl-carousel">
            @foreach($produks as $produk)
            <li class="col-md-10 col-sm-6">
                <div class="example-2 card">
                    <div class="wrapper"
                        style="background: url('{{ asset('public/upload/image/'.$produk->gambar) }}') center/cover no-repeat; ">
                        <div class="header">
                            <div class="date">
                                {!! $produk->tanggal_post!!}
                            </div>

                        </div>
                        <div class="data">
                            <div class="content">
                                <h3 class="title"><a
                                        href="{{ asset('produk/detail/'.$produk->slug_produk) }}"><?php  echo $produk->nama_produk ?></a>
                                </h3>
                                <p class="text"><?= nl2br($produk->deskripsi) ?></p>
                                <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" class="button">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </div>
    </ul>
</section>

<!-- Our Berita-->
<section class="probootstrap-section">
    <div class="text-center section-heading fadeIn probootstrap-animated" data-animate-effect="fadeIn">
        <h2>BERITA DAN AGENDA</h2>
        <p class="lead">Sed a repudiandae impedit voluptate nam Deleniti dignissimos perspiciatis nostrum porro
            nesciunt</p>
    </div>
</section>
<div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($berita as $key => $value)
        <div class="item {{ $key == 0 ? "active" : "" }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"><img src="{{ asset('public/upload/image/thumbs/'.$value->gambar) }}"
                            alt="<?=$value->judul_berita ?>" class="img-responsive"></div>
                    <div class="col-md-9">
                        <h2><a href="{{ asset('berita/read/'.$value->slug_berita) }}"><?=$value->judul_berita ?></a>
                        </h2>
                        <p><?= \Illuminate\Support\Str::limit(strip_tags($value->isi), 500, $end='...') ?></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Item -->
    </div>
    <!-- End Carousel Inner -->
    <div class="controls">
        <ul class="nav">
            @foreach($berita as $key => $value)
            <li data-target="#custom_carousel" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : "" }}><a
                    href="{{ asset('berita/read/'.$value->slug_berita) }}"><img style="width: 50px"
                        src="{{ asset('public/upload/image/thumbs/'.$value->gambar) }} "><small>{{ $value->judul_berita}}</small></a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- Our Berita-->

<!-- Our Testimoni-->
<section class="testimonial-wrapper">
    <h2 class="section-title wow fadeInDown">Testimoni Member</h2>
    <div id="testimonial-slider" class="owl-carousel">
        @foreach($testimoni as $value)
        <div class="testimonial">
            <div class="pic">
                <img src="{{asset('public/frontend/html')}}/img/icone-people.png">
            </div>
            <p class="description">
                {!! $value->message!!} - <?= \Illuminate\Support\Str::limit(strip_tags($value->nama_produk), 20, $end='...') ?>
            </p>
            <h3 class="title">{!! $value->nama_lengkap!!}</h3>
            <small class="post">- {!! $value->pekerjaan!!}</small>
        </div>
        @endforeach
    </div>
    <!-- /.carousel -->
</section><!-- /.testimonial-wrapper -->

<!-- Our Tim-->
<section class="team-kami-wrapper padding-lg">
    <h2 class="section-title wow fadeInDown">Tim Kami</h2>
    <ul class="row">
        <div id="team-kami-slider" class="owl-carousel">
            @foreach($teams as $value)
            <li class="col-md-12 ">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="{{ asset('public/upload/image/thumbs/'.$value->foto) }}" class="img-responsive"
                            alt="{!! $value->nama_lengkap!!}">
                    </figure>
                    <h3><a href="#">{!! $value->nama_lengkap!!}</a></h3>
                    <p>{!! $value->jabatan!!}</p>
                    <ul class="follow-us clearfix">
                        <li><a href="https://facebook.com/{!! $value->facebook!!}"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="tel:{!! $value->telp!!}"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </li>
            @endforeach
        </div>
    </ul>

    <!-- /.carousel -->
</section><!-- /.team-kami-wrapper -->
<!-- Our Trusted by-->
<section class="trusted-client-wrapper">
    <h2 class="section-title wow fadeInDown">We are Trusted by</h2>
    <div id="carousel-trusted-generic" class="carousel slide" data-ride="carousel">
        <!--Indicators -->
        @foreach($sliderPerusahaan as $key => $value)
        <ol class="carousel-indicators">
            <li data-target="#ccarousel-trusted-generic"
            data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : "" }}></li>
        </ol>
        @endforeach
        <!--Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($sliderPerusahaan as $key => $value)
            <div class="item {{ $key == 0 ? "active" : "" }}">
                <img src="{{ asset('public/upload/image/'.$value->gambar) }}"
                    alt="<?= $value->judul_galeri ?>">
            </div>
            @endforeach
        </div><!-- Carousel END -->
</section>
