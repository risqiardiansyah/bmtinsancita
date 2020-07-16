<!-- ======= Hero Section ======= -->
<div class="inner-content">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-9">
            @foreach($mypaginate as $key => $value)
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
                    <p class="text-center">
                        {{ $mypaginate->links() }}
                    </p>
                </ul>
            </nav>
            <!-- end pagination-wrap -->
        </div><!-- /.col-md-9 -->
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="sidebar-wrapper">
                 <aside class="widget widget_search">
                    <form role="search" method="get" class="search-form" action="getPost">
                        <label class="sr-only">Search for:</label>
                        <input type="search" class="form-control" placeholder="Search" value="" name="s" title="Search for:">
                        <button type="submit" class="search-submit" value=""><i class="fa fa-search"></i></button>
                    </form>
                </aside>


                <aside class=" widget widget_recent_entries">
                    <div class="sidebar-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class=""><a href="#recent-post" data-toggle="tab">Recent Post</a></li>
                            <li class="active"><a href="#most-read" data-toggle="tab">Most Read</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="recent-post">
                                <ul class="tab-recent-post">
                                    <li><a href="#">Primex is one of the noteable html5 templates in 2015</a></li>

                                    <li><a href="#">Image synergistically fabricate covalent expertise</a></li>

                                    <li><a href="#">Primex- the trendy addition for winter</a></li>
                                </ul>
                            </div> <!-- /recent post tab -->

                            <div class="tab-pane fade active in" id="most-read">
                                <ul class="tab-most-read">
                                    <li><a href="#">Image synergistically fabricate covalent</a></li>
                                    <li><a href="#">Primex responsive html5 template</a></li>
                                    <li><a href="#">Morbi aliquam pellentesque neque tibulum</a></li>
                                </ul>
                            </div><!-- /most read tab -->
                        </div>
                    </div><!-- /tab-wrap -->
                </aside>


                <aside class="widget widget_categories">
                    <h2 class="widget-title">Categories</h2>	
                    <ul>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Style</a></li>
                        <li><a href="#">My Events</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Uncategorized</a></li>
                    </ul>
                </aside>

            </div><!-- /.sidebar-wrapper -->
        </div><!-- /.col-md-3 -->
    </div><!-- /.row -->
</div>
