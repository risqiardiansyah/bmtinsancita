<section class="intro-wrapper" id="profile">
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
                    <label for>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="{{old('nama_lengkap')}}"
                        placeholder="Nama lengkap" onkeypress="return hanyaHuruf(this);" maxlength="255" required>
                </div>
                <div class="form-group">
                    <label for>Nomor KTP </label>
                    <input type="tel" name="no_ktp" class="form-control" value placeholder="Nomor Kartu Tanda Penduduk"
                        onkeypress="return hanyaAngka(this);" minlength="16" maxlength="16" required
                        value="{{old('no_ktp')}}">
                </div>
                <div class="form-group">
                    <label for>Nomor KK</label>
                    <input type="text" name="no_kk" class="form-control" onkeypress="return hanyaAngka(this);"
                        placeholder="Nomor Kartu Keluarga" required minlength="16" maxlength="16"
                        value="{{old('no_kk')}}">
                </div>
                <div class="form-group">
                    <label for>Nomor Whatsapp </label>
                    <input type="tel" name="no_whatsapp" class="form-control" value placeholder="Nomor WA yang aktif"
                        onkeypress="return hanyaAngka(this);" value="{{old('no_whatsapp')}}" minlength="10"
                        maxlength="13" required>
                </div>
                <div class="form-group">
                    <label for>Pekerjaan</label>
                    <input type="tel" name="pekerjaan" class="form-control" value="{{old('pekerjaan')}}"
                        placeholder="Pekerjaan" required>
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
                <div class="form-group action">
                    <input type="submit" class="btn btn-primary" title="Mengirim data ke admin" value="Submit" />
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
    <h2 class="section-title wow fadeInDown">{{$site->link_2}}</h2>
    @forelse ($produks as $produk)
    <ul class="row">
        <div id="project-kami-slider" class="owl-carousel">
            <li class="col-md-10 col-sm-6">
                <div class="news-card">
                    <a href="#" class="news-card__card-link"></a>
                    <img src="{{ asset('public/upload/image/produk/'.$produk->gambar) }}" alt="{{$produk->nama_produk}}"
                        class="news-card__image">
                    <div class="news-card__text-wrapper">
                        <h2 class="news-card__title">{{$produk->nama_produk}}</h2>
                        <div class="news-card__post-date">{!! $produk->tanggal_post!!}</div>
                        <div class="news-card__details-wrapper">
                            <p class="news-card__excerpt"><?= nl2br($produk->deskripsi) ?></p>
                        </div>
                    </div>
                </div>
            </li>
        </div>
    </ul>
    @empty
    <p>Produk Tidak Ada</p>
    @endforelse
</section>

<!-- Our Berita-->
<section class="probootstrap-section">
    <div class="text-center section-heading fadeIn probootstrap-animated" data-animate-effect="fadeIn">
        <h2>{{$site->link_3}}</h2>
        <p class="lead"></p>
    </div>
</section>
<div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
    <!-- Wrapper for slides -->
    @forelse ($berita as $key => $value)
    <div class="carousel-inner">
        <div class="item {{ $key == 0 ? "active" : "" }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3"><img src="{{ asset('public/upload/image/berita/'.$value->gambar) }}"
                            alt="<?=$value->judul_berita ?>" class="img-responsive"></div>
                    <div class="col-md-9">
                        <h2><a href="{{ asset('berita/read/'.$value->slug_berita) }}"><?=$value->judul_berita ?></a>
                        </h2>
                        <p><?= \Illuminate\Support\Str::limit(strip_tags($value->isi), 500, $end='...') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Item -->
    </div>
    <!-- End Carousel Inner -->
    <div class="controls">
        <ul class="nav">
            <li data-target="#custom_carousel" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : "" }}><a
                    href="{{ asset('berita/read/'.$value->slug_berita) }}"><img style="width: 50px"
                        src="{{ asset('public/upload/image/berita/'.$value->gambar) }} "><small>{{ $value->judul_berita}}</small></a>
            </li>
        </ul>
    </div>
    @empty
    <p class="text-center" style="margin: 10px;">Berita dan Agenda Tidak Ada</p>
    @endforelse
</div>
<!-- Our Berita-->

<!-- Our Testimoni-->
<section class="testimonial-wrapper">
    <h2 class="section-title wow fadeInDown">Testimoni Member</h2>
    @forelse ($testimoni as $value)
    <div id="testimonial-slider" class="owl-carousel">
        <div class="testimonial">
            <div class="pic">
                <img src="{{ asset('public/upload/image/galeri/'.$value->foto) }}">
            </div>
            <p class="description">
                {!! $value->message!!} -
                <?= \Illuminate\Support\Str::limit(strip_tags($value->nama_produk), 20, $end='...') ?>
            </p>
            <h3 class="title">{!! $value->nama_lengkap!!}</h3>
            <small class="post">- {!! $value->pekerjaan!!}</small>
        </div>
    </div>
    @empty
    <p>Testimoni Tidak Ada</p>
    @endforelse
    <!-- /.carousel -->
</section><!-- /.testimonial-wrapper -->
<!-- Our 2 column-->
<section class="probootstrap-section">
    <div class="text-center section-heading fadeIn probootstrap-animated" data-animate-effect="fadeIn">
        <h2>{{$site->link_bawah_peta}}</h2>
        <p class="lead"></p>
    </div>
</section>
<div class="row" style="margin-top: -20px;">
    <div class="col-xs-12 col-sm-6">
        <div class="box">
            <!-- .gallery-slider -->
            <div class="gallery-slider">
                <!-- __images -->
                <div class="gallery-slider__images">
                    <div>
                        <!-- .item -->
                        @foreach($sliderGaleri as $value )
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('public/upload/image/galeri/'.$value->gambar) }}"
                                    alt="{{$value->judul_galeri}}"></div>
                        </div>
                        @endforeach
                        <!-- /.item -->
                    </div>
                    <button class="prev-arrow slick-arrow">
                        <svg xmlns="" viewBox="0 0 1280 1792">
                            <path fill="#fff"
                                d="M1171 301L640 832l531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19L173 877q-19-19-19-45t19-45L915 45q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z" />
                        </svg>
                    </button>
                    <button class="next-arrow slick-arrow">
                        <svg xmlns="" viewBox="0 0 1280 1792">
                            <path fill="#fff"
                                d="M1107 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L275 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z" />
                        </svg>
                    </button>
                </div>
                <!-- /__images -->

                <!-- __thumbnails -->
                <div class="gallery-slider__thumbnails">
                    <div>
                        <!-- .item -->
                        @foreach($sliderGaleri as $value)
                        <div class="item">
                            <div class="img-fill"><img src="{{ asset('public/upload/image/galeri/'.$value->gambar) }}"
                                    alt="{{$value->judul_galeri}}"></div>
                        </div>
                        @endforeach
                        <!-- /.item -->
                    </div>

                    <button class="prev-arrow slick-arrow">
                        <svg xmlns="" viewBox="0 0 1280 1792">
                            <path fill="#fff"
                                d="M1171 301L640 832l531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19L173 877q-19-19-19-45t19-45L915 45q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z" />
                        </svg>
                    </button>
                    <button class="next-arrow slick-arrow">
                        <svg xmlns="" viewBox="0 0 1280 1792">
                            <path fill="#fff"
                                d="M1107 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L275 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z" />
                        </svg>
                    </button>
                </div>
                <!-- /__thumbnails -->
            </div>
            <!-- /.gallery-slider -->
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="box">
            @foreach ($video as $item)
            <iframe id="vid_frame" src="http://youtube.com/embed/{{$item->video}}" width="700" height="390"
                frameborder="0"></iframe>
            @endforeach
        </div>
    </div>

</div>
<!-- Our Trusted by-->
<section class="trusted-client-wrapper">
    <h2 class="section-title wow fadeInDown">We are Trusted by</h2>
    <section class="customer-logos slider">
        @foreach($sliderPerusahaan as $key => $value)
        <div class="slide"><img src="{{ asset('public/upload/image/galeri/'.$value->gambar) }}"
                alt="{{$value->judul_galeri}}"></div>
        @endforeach
    </section>
</section>
