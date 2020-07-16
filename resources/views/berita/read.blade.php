<div class="inner-content">
  <div class="row">
      <div class="col-xs-12 col-md-9 col-sm-8">
          <article class="blog-post-wrapper single-article">
              <header class="entry-header">
                  <div class="entry-meta">
                  </div><!-- /.entry-meta -->

                  <h2 class="entry-title"><a href="{{asset('berita')}}">{!!$title!!}</a></h2>
              </header><!-- /.entry-header -->

              <div class="post-thumbnail">
                <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" class="img-responsive " alt="<?=$berita->judul_berita ?>">
              </div><!-- /.post-thumbnail -->

              <div class="entry-content">
              <p>{!! $berita->isi!!}</p>
              </div><!-- /.entry-content -->
          </article>
          <div class="col-lg-3 col-md-3 col-sm-12 mb-4 produk text-center">
            <figure class="thumnail">
              <a href="{{ asset('berita/read/'.$berita->slug_berita) }}">
                <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="<?=$berita->judul_berita ?>" class="img-fluid img-thumbnail">
              </a>
            </figure>
            <div class="keterangan">
                <h3>
                  <a href="{{ asset('berita/read/'.$berita->slug_berita) }}">
                    <?=$berita->judul_berita ?>
                  </a>
                </h3>
            </div>
            <div class="link-produk">
              <p>
                <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
              </p>
          </div>
      </div>
      </div><!-- /.col-md-9 -->

      <div class="col-xs-12 col-md-3 col-sm-4">
          <div class="sidebar-wrapper">

              <aside class="widget widget_search">
                  <form role="search" method="get" class="search-form" action="getpost">
                      <label class="sr-only">Search for:</label>
                      <input type="search" class="form-control" placeholder="Search" value=""
                             name="s" title="Search for:">
                      <button type="submit" class="search-submit" value=""><i
                          class="fa fa-search"></i></button>
                  </form>
              </aside>

              <aside class=" widget widget_recent_entries">
                  <div class="sidebar-tab">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs nav-justified">
                          <li class=""><a href="#recent-post" data-toggle="tab">Recent
                              Post</a></li>
                          <li class="active"><a href="#most-read" data-toggle="tab">Most
                              Read</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                          <div class="tab-pane fade active in" id="most-read">
                              <ul class="tab-most-read">
                                @foreach($berita_all as $value)
                                <li><a href="{{ asset('berita/read/'.$value->slug_berita) }}">{{$value->judul_berita}}</a></li>
                                @endforeach
                              </ul>
                          </div><!-- /most read tab -->
                      </div>
                  </div><!-- /tab-wrap -->
              </aside>
          </div><!-- /.sidebar-wrapper -->
      </div><!-- /.col-md-3 -->
  </div><!-- /.row -->
</div><!-- /.inner-content -->