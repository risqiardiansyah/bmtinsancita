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
    <form action="{{ asset('admin/berita/tambah_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
      {{ csrf_field() }}
      <div class="row form-group">
        <label class="col-md-3">Judul berita/profil/layanan</label>
        <div class="col-md-6">
          <input type="text" name="judul_berita" class="form-control form-control-lg" placeholder="Judul berita/profil/layanan" required="required" value="{{ old('judul_berita') }}">
        </div>
      </div>
      
      <div class="row form-group">
        <label class="col-md-3">Status Publish</label>
        <div class="col-md-6">
          <select name="status_berita" class="form-control select2">
            <option value="Publish">Publikasikan</option>
            <option value="Draft">Simpan sebagai draft</option>}
          </select>
        </div>
      </div>
      
      <div class="row form-group">
        <label class="col-md-3">Jenis &amp; Kategori Berita</label>
        <div class="col-md-3">
          <select name="jenis_berita" class="form-control select2">
           <option value="Berita">Berita</option>
         </select>
       </div>
       <div class="col-md-3">
        <select name="id_kategori" class="form-control select2">
          @foreach($kategori as $kategori)
           <option value="<{{$kategori->id_kategori}}">{{$kategori->nama_kategori}}</option>
          @endforeach
       </select>
      </div>
      </div>
      
      <div class="row form-group">
        <label class="col-md-3">Upload gambar</label>
        <div class="col-md-6">
          <input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
          <small class="text-danger" style="font-weight: bold;">Gambar harus Ukuran 570 px in width heigt in 400</small>
        </div>
      </div>
      
      <div class="row form-group">
        <label class="col-md-3">Keywords dan Ringkasan<br>(untuk pencarian Google)</label>
        <div class="col-md-6">
          <textarea name="keywords" class="form-control" placeholder="Keywords (untuk pencarian Google)">{{ old('keywords') }}</textarea>
        </div>
      </div>
      
      <div class="row form-group">
        <label class="col-md-3">Isi berita</label> 
        <div class="col-md-9">
          <textarea name="isi" class="form-control konten" placeholder="Isi berita">{{ old('isi') }}</textarea>
        </div>
      </div>
      
      <div class="row form-group">
        <label class="col-md-3"></label>
        <div class="col-md-9">
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-success "><i class="fa fa-save"></i> Simpan Data</button>
            <input type="reset" name="reset" class="btn btn-info " value="Reset">
          </div>
        </div>
      </div>
      </form>
  </div>
</div>


