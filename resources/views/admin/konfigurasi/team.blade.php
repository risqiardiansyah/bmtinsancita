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
    @include('admin/konfigurasi/tambahteam')
</p>
<form action="{{ asset('admin/konfigurasi/prosesteam') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="row">

        <div class="col-md-12">
            <div class="btn-group">
                <button class="btn btn-danger" type="submit" name="hapus" onClick="check();">
                    <i class="fa fa-trash"></i>
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
                            <th width="25%">NAMA </th>
                            <th width="10%">JABATAN</th>
                            <th width="10%">TELP</th>
                            <th width="10%">FACEBOOK</th>
                            <th width="10%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach($team as $value) { ?>

                        <tr>
                            <td class="text-center">
                                <div class="icheck-primary">
                                    <input type="checkbox" class="icheckbox_flat-blue " name="id[]"
                                        value="<?php echo $value->id ?>" id="check<?php echo $i ?>">
                                    <label for="check<?php echo $i ?>"></label>
                                </div>
                            </td>
                            <td>
                                <?php if($value->foto != "") { ?>
                                <img src="{{ asset('public/upload/image/thumbs/'.$value->foto) }}" width="60"
                                    class="img img-responsive">
                                <?php }else{ echo 'Tidak ada'; } ?>
                            </td>                            
                            <td><?= $value->nama_lengkap ?></td>
                            <td><?= $value->jabatan ?></td>
                            <td><?= $value->telp ?></td>
                            <td><?= $value->facebook ?></td>

                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#Edit<?php echo $value->id ?>">
                                        <i class="fa fa-edit"></i> Edit
                                    </button>
                                    <a href="{{ asset('admin/team/delete/'.$value->id) }}"
                                        class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i> Hapus</a>
                                </div>
                            </td>
                            
                        </tr>

                        <?php $i++; } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</form>
