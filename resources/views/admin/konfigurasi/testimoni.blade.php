@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<p>
    @include('admin/konfigurasi/addtestimoni')
</p>
<form action="{{ asset('admin/testimoni/proses_multi') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
    <div class="row">
        <div class="col-md-12">
            <div class="btn-group">
                <button class="btn btn-danger " type="submit" name="hapus" onClick="check();">
                    <i class="fas fa-trash-alt"></i>
                </button>
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#Tambah">
                    <i class="fa fa-plus"></i> Tambah Baru
                </button>
            </div>
        </div>
    </div>
    <div class="clearfix"><hr></div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th width="15%">FOTO</th>
                            <th width="10%">JABATAN</th>
                            <th width="10%">KETERANGAN</th>
                            <th width="10%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach($testi as $value)
                        <tr>
                            <td class="text-center">
                                <div class="icheck-primary">
                                    <input type="checkbox" class="icheckbox_flat-blue " name="id[]"
                                        value="<?= $value->id ?>">
                                    <label for="check<?= $loop->iteration ?>"></label>
                                </div>
                            </td>
                            <td>
                                <?php if($value->foto != "") { ?>
                                <img src="{{ asset('public/upload/image/galeri/'.$value->foto) }}" width="60"
                                    class="img img-responsive">
                                <?php }else{ echo 'Tidak ada'; } ?>
                            </td>                            
                            <td><?= $value->pekerjaan ?></td>
                            <td><?= $value->message ?></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#Edit{{$value->id}}">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <a href="{{ asset('admin/testimoni/delete/'.$value->id) }}"
                                        class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i> Hapus</a>
                                </div>
                                @include('admin/konfigurasi/edittestimoni')
                            </td>
                            
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>