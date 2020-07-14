<div class="inner-content">
    <div class="row">
        <div class="kotak">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">{!! $title !!}</h1>
                    <hr>
                </div>
                <?php  
              if($produk) {
              foreach($produk as $produk) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 produk text-center">
                    <figure class="thumnail">
                        <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                            <img src="{{ asset('public/upload/image/'.$produk->gambar) }}"
                                alt="<?php  echo $produk->nama_produk ?>" class="img-fluid img-thumbnail">
                        </a>
                    </figure>
                    <div class="keterangan">
                        <h3>
                            <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                                <?= \Illuminate\Support\Str::limit(strip_tags($produk->nama_produk), 30, $end='...') ?> 
                            </a>
                        </h3>
                    </div>
                    <div class="link-produk">
                        <p>
                            <input type="hidden" name="quantity" id="<?=$produk->id_produk;?>" value="1"
                                class="quantity">
                            <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}"
                                class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
                        </p>
                    </div>
                </div>
                <?php }}else{ ?>
                <div class="col-md-12">
                    <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang
                        berbeda.</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div><!-- /.inner-content -->
