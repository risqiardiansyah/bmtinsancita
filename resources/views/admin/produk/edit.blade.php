<?php
// Validasi error

// Error upload
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Form open
?>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <p class="text-right">
            <a href="{{ asset('admin/produk') }}" class="btn btn-success btn-sm">
                <i class="fa fa-backward"></i> Kembali
            </a>
        </p>
        <form action="{{ asset('admin/produk/edit_proses') }}" method="post" enctype="multipart/form-data"
            accept-charset="utf-8">
            {{ csrf_field() }}
            <input type="hidden" name="id_produk" value="{{ $produk->id_produk }}">
            <div class="form-group row">
                <label class="col-sm-3 control-label text-right">Kategori &amp; Status Produk</label>
                <div class="col-sm-3">
                    <select name="id_kategori_produk" class="form-control">
                        <?php foreach($kategori_produk as $kategori_produk) { ?>
                        <option value="<?php echo $kategori_produk->id_kategori_produk ?>"
                            <?php if($kategori_produk->id_kategori_produk==$produk->id_kategori_produk) { echo 'selected'; }?>>
                            <?php echo $kategori_produk->nama_kategori_produk ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-3">
                    <select name="status_produk" class="form-control">
                        <option value="Publish">Publikasikan</option>
                        <option value="Draft" <?php if($produk->status_produk=='Draft') { echo 'selected'; }?>>Simpan
                            sebagai draft</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 control-label text-right">Nama &amp; Kode Produk <span
                        class="text-danger">*</span></label>
                <div class="col-sm-6">
                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" required
                        value="{{ $produk->nama_produk }}">
                    <small class="text-gray">Setiap awal kata gunakan huruf capital. Misal: <strong>Coklat
                            Nitrico</strong></small>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 control-label text-right">Deskripsi Produk</label>
                <div class="col-sm-9">
                    <textarea name="isi" id="isi" class="form-control konten"
                        placeholder="Deskripsi Produk">{{ $produk->isi }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 control-label text-right">Deskripsi Ringkas &amp; Keywords Produk (untuk
                    pencarian Google)</label>
                <div class="col-sm-4">
                    <textarea name="deskripsi" class="form-control"
                        placeholder="Deskripsi Produk">{{ $produk->deskripsi  }}</textarea>
                    <small class="text-gray">Penjelasan secara ringkas produk</small>
                </div>
                <div class="col-sm-4">
                    <textarea name="keywords" class="form-control"
                        placeholder="Keywords (untuk pencarian Google)">{{ $produk->keywords  }}</textarea>
                    <small class="text-gray">Gunakan koma sebagai pemisah, misal: <strong>web design, desain grafis,
                            produk web, produk android</strong></small>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 control-label text-right">Upload gambar</label>
                <div class="col-sm-9">
                    <input type="file" name="gambar" class="form-control" placeholder="Upload gambar" id="file">
                    <small class="text-danger" style="font-weight: bold;">Gambar harus Ukuran 570 px in width heigt in
                        400</small>
                    <div id="imagePreview"></div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 control-label text-right"></label>
                <div class="col-sm-9">
                    <div class="form-group btn-group pull-right">
                        <button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan
                            Data</button>
                        <input type="reset" name="reset" class="btn btn-info " value="Reset">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
