<!-- ======= Hero Section ======= -->
<div class="inner-content">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-9">
            @foreach($beritas as $key => $value)
            <article class="blog-post-wrapper {{ $key == 0 ? "sticky" : "" }}">
                <header class="entry-header">
                    <div class="entry-meta">
                        <ul class="list-inline">
                            <li><span class="the-time"><a
                                        href="#">{{date('d-m-Y',strtotime($value->tanggal_publish))}}</a></span></li>
                        </ul>
                    </div><!-- /.entry-meta -->

                    <h2 class="entry-title"><a
                            href="{{ asset('berita/read/'.$value->slug_berita) }}">{{$value->judul_berita}}</a></h2>
                </header><!-- /.entry-header -->
                <div class="post-thumbnail">
                    <img src="{{ asset('public/upload/image/thumbs/'.$value->gambar) }}" class="img-responsive " alt="">
                </div><!-- /.post-thumbnail -->
                <div class="entry-content">
                    <p><?= \Illuminate\Support\Str::limit(strip_tags($value->isi), 350, $end='...') ?></p>
                </div><!-- /.entry-content -->

                <footer class="entry-footer">
                    <a href="{{ asset('berita/read/'.$value->slug_berita) }}" class="btn btn-primary"> Read More</a>
                </footer><!-- /.entry-footer -->
            </article>
            @endforeach
            <!-- pagination-wrap -->
            <nav class="pagination-wrap text-center">
                <ul class="pagination">
                    <li class="disabled"><a title="Previous"><i class="flaticon-arrowhead4"></i></a></li>
                    <li class="active"><a>1</a></li>
                    <li><a title="2" href="#">2</a></li>
                    <li><a title="3" href="#">3</a></li>
                    <li><a title="4" href="#">4</a></li>
                    <li><a title="Next" href="#"><i class="flaticon-arrow437"></i></a></li>
                </ul>
                <div class="counter"> Page 1 of 4</div>
            </nav>
            <!-- end pagination-wrap -->
        </div><!-- /.col-md-9 -->
    </div><!-- /.row -->
</div>
