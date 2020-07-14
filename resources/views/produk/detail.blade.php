<div class="inner-content">
    <div class="row">
        <div class="col-md-7">
            <div class="portfolio-content">
                <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" class="img-responsive"
                    alt="{!! $produk->nama_produk!!}">
                {!! $produk->isi !!}
            </div> <!-- /.portfolio-content -->
        </div> <!-- /.col-md-7 -->

        <div class="col-md-5">
            <div class="portfolio-info">
                <p><span class="title">Project Name:</span> {!! $produk->nama_produk!!}</p>
                <p><span class="title">Client:</span>
                    @if($produk->client_name != null)
                    {!! $produk->client_name!!}
                    @else
                    Belum diset
                    @endif
                </p>
                <span class="block-title">Kutipan Semangat :</span>
                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam
                    lacus. Fusce condimentum eleifenda f enim eugiat. At vero eos et accusamus et iusto odio dignissimos
                    ducimus qui blanditiis.</blockquote>

                <div class="project-live-link">
                    <p class="text-left">
                        <a href="{{ asset('produk') }}" class="btn btn-success btn-sm"><i class="fa fa-file-pdf"></i>
                            Produk Lainnya</a>
                        <a href="{{ asset('produk/cetak/'.$produk->slug_produk) }}" class="btn btn-warning btn-sm"
                            target="_blank"><i class="fa fa-file-pdf"></i> Cetak</a>
                    </p>
                </div> <!-- /.project-live-link -->
                <section class="comments-wrapper">
                    <h4>Berikan Testimoni !</h4>
                    <hr>
                    <form action="{{ asset('produk/proses_testimoni') }}" method="POST">
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
                            <label for="exampleInputName2">Name Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{!! $produk->nama_produk!!}"
                                   readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName2">Name (required)</label>
                            <input type="text" class="form-control" id="exampleInputName2"
                                   placeholder="Nama Lengkap" name="nama_lengkap" onkeypress="return hanyaHuruf(this);" required value="{{old('nama_lengkap')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">E-mail (required, but will not
                                display)</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail2"
                                   placeholder="Email" required  value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="">Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required
                            value="{{old('pekerjaan')}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputMessage">Berikan Komentar</label>
                            <textarea class="form-control" rows="4" id="exampleInputMessage"
                                      placeholder="Komentar" name="message" value="{{old('message')}}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </section>
            </div> <!-- /.portfolio-info -->
        </div> <!-- /.col-md-5 -->
    </div> <!-- /.row -->
    <br>
    <hr>

    <div class="related-project">
        <?php  if($produk_all) { ?>
        <h2>Related Project <?=$kategori_produk->nama_kategori_produk ?> lainnya</h2>

        <div class="related-work-carousel">
            <?php  }
            if($produk_all) {
            foreach($produk_all as $produk) { ?>
            <div class="item">
                <div class="single-portfolio">
                    <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" alt="{!! $produk->nama_produk!!}">
                    <div class="portfolio-links">
                        <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}"><i class="fa fa-link"></i></a>
                    </div><!-- /.links -->
                </div><!-- /.single-portfolio -->
            </div>
            <?php }} ?>
        </div>
    </div>

</div><!-- /.inner-content -->
