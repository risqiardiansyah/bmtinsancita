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
            <a href="{{ asset('admin/berita') }}" class="btn btn-success btn-sm">
                <i class="fa fa-backward"></i> Kembali
            </a>
        </p>
        <form action="{{ asset('admin/berita/edit_proses') }}" method="post" enctype="multipart/form-data"
            accept-charset="utf-8">
            {{ csrf_field() }}
            <input type="hidden" name="id_berita" value="{{ $berita->id_berita }}">
            <div class="row form-group">
                <label class="col-md-3">Judul berita/profil/layanan</label>
                <div class="col-md-6">
                    <input type="text" name="judul_berita" class="form-control"
                        placeholder="Judul berita/profil/layanan" required="required"
                        value="<?php echo $berita->judul_berita ?>">
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3">Icon berita/profil/layanan</label>
                <div class="col-md-6">
                    <input type="text" name="icon" class="form-control" placeholder="Icon berita/profil/layanan"
                        value="<?php echo $berita->icon ?>">
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3">Status Publish</label>
                <div class="col-md-6">
                    <select name="status_berita" class="form-control select2">
                        <option value="Publish">Publikasikan</option>
                        <option value="Draft" <?php if($berita->status_berita=="Draft") { echo "selected"; } ?>>Simpan
                            sebagai draft</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3">Jenis &amp; Kategori Berita</label>
                <div class="col-md-3">
                    <select name="jenis_berita" class="form-control select2">
                        <option value="Berita">Berita</option>
                        <option value="Profil" <?php if($berita->jenis_berita=="Profil") { echo "selected"; } ?>>Profil
                        </option>
                        <option value="Layanan" <?php if($berita->jenis_berita=="Layanan") { echo "selected"; } ?>>
                            Layanan</option>
                        <option value="Keunggulan"
                            <?php if($berita->jenis_berita=="Keunggulan") { echo "selected"; } ?>>Keunggulan</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select name="id_kategori" class="form-control select2">
                        <?php foreach($kategori as $kategori) { ?>
                        <option value="<?php echo $kategori->id_kategori ?>"
                            <?php if($berita->id_kategori==$kategori->id_kategori) { echo "selected"; } ?>>
                            <?php echo $kategori->nama_kategori ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3">Upload gambar &amp; Urutan</label>
                <div class="col-md-3">
                    <input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
                </div>

                <div class="col-md-3">
                    <input type="number" name="urutan" class="form-control" placeholder="Urutan"
                        value="<?php echo $berita->urutan ?>">
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3">Keywords dan Ringkasan (untuk pencarian Google)</label>
                <div class="col-md-9">
                    <textarea name="keywords" class="form-control"
                        placeholder="Keywords (untuk pencarian Google)"><?php echo $berita->keywords ?></textarea>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3">Isi berita</label>
                <div class="col-md-9">
                    <textarea name="isi" class="form-control konten" placeholder="Isi berita"
                        placeholder="Isi berita"><?php echo $berita->isi ?></textarea>
                </div>
            </div>

            <div class="row form-group">
                <label class="col-md-3"></label>
                <div class="col-md-9">
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success ">
                            <i class="fa fa-save"></i> Simpan Data
                        </button>
                        <input type="reset" name="reset" class="btn btn-info " value="Reset">
                    </div>

                </div>

            </div>
        </form>
    </div>
</div>
