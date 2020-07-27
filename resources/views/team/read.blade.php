<div class="inner-content">
    <div class="row">
        <div class="col-xs-12 col-md-9 col-sm-8">
            <article class="blog-post-wrapper single-article">
                <header class="entry-header">
                    <div class="entry-meta">
                    </div><!-- /.entry-meta -->
  
                    <h2 class="entry-title"><a href="{{asset('team')}}">{!!$title!!}</a></h2>
                </header><!-- /.entry-header -->
  
                <div class="post-thumbnail">
                  <img src="{{ asset('public/upload/image/team/'.$team->foto) }}" class="img-responsive " alt="<?=$team->nama_lengkap ?>">
                </div><!-- /.post-thumbnail -->
  
                <div class="entry-content">
                <p>{!! $team->deskripsi!!}</p>
                </div><!-- /.entry-content -->
            </article>
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
                                 
                                </ul>
                            </div><!-- /most read tab -->
                        </div>
                    </div><!-- /tab-wrap -->
                </aside>
            </div><!-- /.sidebar-wrapper -->
        </div><!-- /.col-md-3 -->
    </div><!-- /.row -->
  </div><!-- /.inner-content -->