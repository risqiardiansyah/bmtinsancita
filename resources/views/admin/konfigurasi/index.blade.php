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
                        <label>Company tagline/motto</label>
                        <input type="text" name="tagline" placeholder="Company tagline/motto"
                            value="<?= $site->tagline ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Website address</label>
                        <input type="url" name="website" placeholder="{{ asset('/') }}" value="<?= $site->website ?>"
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Official email</label>
                        <input type="email" name="email" placeholder="youremail@address.com" value="<?= $site->email ?>"
                            class="form-control" required>
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
                    <h3>Informasi Heading & Description Frontend</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Heading Our Service</label>
                                <input type="text" name="heading_donasi_1" placeholder="Heading Our Service" value="{{$site->link_1}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Heading Our Project</label>
                                <input type="text" name="heading_donasi_2" placeholder="Heading Our Project" value="{{$site->link_2}}"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Heading Testimoni</label>
                                <input type="text" name="desk_donasi_1" placeholder="Heading Testimoni" value="{{$site->isi_1}}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title Heading Tim Kami</label>
                                <input type="text" name="desk_donasi" placeholder="Heading Tim Kami" value="{{$site->isi_2}}"
                                    class="form-control" required>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label>Color Header Menu</label>
                        <input type="color" name="color" placeholder="Color Header Menu" value="{{$site->text_bawah_peta}}"
                            class="form-control" required>
                    </div>  --}}
                    <div class="form-group">
                        <label>Title Heading 2 Column</label>
                        <input type="text" name="link_bawah_peta" placeholder="Heading Official" value="{{$site->link_bawah_peta}}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Title Heading Berita</label>
                        <input type="text" name="heading_berita" placeholder="Heading Berita" value="{{$site->link_3}}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Description Berita</label>
                        <textarea name="desk_berita" rows="3" class="form-control"
                            placeholder="Description Berita">{{$site->isi_3}}</textarea>
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
                        <textarea name="metatext" rows="3" class="form-control"
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
