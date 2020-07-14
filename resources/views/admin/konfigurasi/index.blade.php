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
        <form action="{{ asset('admin/konfigurasi/proses') }}" method="post" accept-charset="utf-8">
            {{ csrf_field() }}

            <div class="row">
                <input type="hidden" name="id_konfigurasi" value="<?= $site->id_konfigurasi ?>">

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Summary of the company</label>
                        <textarea name="tentang" rows="3" class="form-control konten" id="isi"
                            placeholder="Summary of the company"><?= $site->tentang ?></textarea>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Web Description</label>
                        <textarea name="deskripsi" rows="3" class="form-control"
                            placeholder="Web Description"><?= $site->deskripsi ?></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3>Basic information:</h3>
                    <hr>
                    <div class="form-group">
                        <label>Jam Operasional</label>
                        <input type="text" name="jam_operasional" placeholder="Masukan Jam Operasional"
                            value="<?= $site->jam_operasional ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Company name</label>
                        <input type="text" name="namaweb" placeholder="Nama organisasi/perusahaan"
                            value="<?= $site->namaweb ?>" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Singkat</label>
                        <input type="text" name="nama_singkat" placeholder="Nama singkat organisasi/perusahaan"
                            value="<?= $site->nama_singkat ?>" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Singkatan</label>
                        <input type="text" name="singkatan" placeholder="ABC" value="<?= $site->singkatan ?>"
                            required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Company tagline/motto</label>
                        <input type="text" name="tagline" placeholder="Company tagline/motto"
                            value="<?= $site->tagline ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Company tagline/motto 2</label>
                        <input type="text" name="tagline2" placeholder="Company tagline/motto 2"
                            value="<?= $site->tagline2 ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Website address</label>
                        <input type="url" name="website" placeholder="{{ asset('/') }}"
                            value="<?= $site->website ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Official email</label>
                        <input type="email" name="email" placeholder="youremail@address.com"
                            value="<?= $site->email ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Registrasion &amp; Order email</label>
                        <input type="email" name="email_cadangan" placeholder="youremail@address.com"
                            value="<?= $site->email_cadangan ?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="alamat" rows="3" class="form-control"
                            placeholder="Alamat perusahaan/organisasi"><?= $site->alamat ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" name="telepon" placeholder="021-000000" value="<?= $site->telepon ?>"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" name="fax" placeholder="021-000000" value="<?= $site->fax ?>"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Mobile / Celluler</label>
                        <input type="text" name="hp" placeholder="021-000000" value="<?= $site->hp ?>"
                            class="form-control">
                    </div>

                    <h3>Social network</h3>
                    <hr>

                    <div class="form-group">
                        <label>URL Facebook <i class="fa fa-facebook"></i></label>
                        <input type="text" name="facebook" placeholder="http://facebook.com/namakamu"
                            value="<?= $site->facebook ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Facebook <i class="fa fa-facebook"></i></label>
                        <input type="text" name="nama_facebook" placeholder="<?= $site->namaweb ?>"
                            value="<?= $site->nama_facebook ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>URL Twitter <i class="fa fa-twitter"></i></label>
                        <input type="text" name="twitter" placeholder="http://twitter.com/namakamu"
                            value="<?= $site->twitter ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Twitter <i class="fa fa-facebook"></i></label>
                        <input type="text" name="nama_twitter" placeholder="Nama akun twitter"
                            value="<?= $site->nama_twitter ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>URL Instagram <i class="fa fa-instagram"></i></label>
                        <input type="text" name="instagram" placeholder="http://instagram.com/namakamu"
                            value="<?= $site->instagram ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nama Instagram <i class="fa fa-facebook"></i></label>
                        <input type="text" name="nama_instagram" placeholder="Nama akun instagram"
                            value="<?= $site->nama_instagram ?>" class="form-control">
                    </div>

                </div>

                <div class="col-md-6">
                    <h3>Cara Pemesanan Produk</h3>
                    <hr>
                    <div class="form-group">
                        <label>Pilih Cara Pemesanan Produk</label>
                        <select name="cara_pesan" class="form-control">
                            <option value="Formulir Pemesanan">Formulir Pemesanan</option>
                            <option value="Keranjang Belanja"
                                <?php if($site->cara_pesan=='Keranjang Belanja') { echo 'selected'; } ?>>Keranjang
                                Belanja</option>
                        </select>
                    </div>

                    <h3>Text di bawah peta dan link downloadnya</h3>
                    <hr>
                    <div class="form-group">
                        <label>Text bawah peta</label>
                        <input type="text" name="text_bawah_peta" placeholder="Text bawah peta"
                            value="<?= $site->text_bawah_peta ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Link text di bawah peta <i class="fa fa-link"></i></label>
                        <input type="text" name="link_bawah_peta" placeholder="Link text di bawah peta"
                            value="<?= $site->link_bawah_peta ?>" class="form-control">
                    </div>

                    <h3>Modul SEO (Search Engine Optimization)</h3>
                    <hr>
                    <div class="form-group">
                        <label>Keywords (Keyword search for Google, Bing, etc)</label>
                        <textarea name="keywords" rows="3" class="form-control"
                            placeholder="Kata kunci / keywords"><?= $site->keywords ?></textarea>
                    </div>

                    <div class="form-group">
                        <label>Metatext</label>
                        <textarea name="metatext" rows="5" class="form-control"
                            placeholder="Kode metatext"><?= $site->metatext ?></textarea>
                    </div>

                    <h3>Google Map</h3>
                    <hr>
                    <div class="form-group">
                        <label>Google Map</label>
                        <textarea name="google_map" rows="5" class="form-control"
                            placeholder="Kode dari Google Map"><?= $site->google_map ?></textarea>
                    </div>

                    <div class="form-group map">
                        <style type="text/css" media="screen">
                            iframe {
                                width: 100%;
                                max-height: 200px;
                            }

                        </style>
                        <?= $site->google_map ?>

                        <hr>
                        <div class="form-group btn-group">
                            <input type="submit" name="submit" value="Save Configuration" class="btn btn-success ">
                            <input type="reset" name="reset" value="Reset" class="btn btn-primary ">
                        </div>
                    </div>
                </div>


            </div>
        </form>
    </div>
</div>
