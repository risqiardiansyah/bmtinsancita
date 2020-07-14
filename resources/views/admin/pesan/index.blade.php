<form action="{{ asset('admin/pesan/proses') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-info">
                            <th width="5%"><button class="btn btn-danger" type="submit" name="hapus" onClick="check();">
                                    <i class="fa fa-trash"></i>
                                </button> </th>
                            <th width="10%">Tanggal Kirim</th>
                            <th width="20%">Nama</th>
                            <th width="20%">NO HP</th>
                            <th width="20%">Email</th>
                            <th width="20%">Subjek</th>
                            <th width="20%">Konten</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach($pesan as $value) { ?>

                        <td class="text-center">
                            <div class="icheck-primary">
                                <input type="checkbox" class="icheckbox_flat-blue " name="id[]"
                                    value="<?= $value->id ?>" id="check<?= $i ?>">
                                <label for="check<?= $i ?>"></label>
                            </div>
                        </td>
                        <td><?= $value->created_at ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->phone ?></td>
                        <td><?= $value->email ?></td>
                        <td><?= $value->subject ?></td>
                        <td><?= $value->content ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ url('tel:'.$value->phone) }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-phone"></i></a>

                                <a href="{{ asset('mailto:'.$value->email) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-envelope-open-text"></i></a>
                            </div>

                        </td>
                        </tr>

                        <?php $i++; } ?>

                    </tbody>
                </table>
                </table>
            </div>
        </div>
    </div>
</form>
