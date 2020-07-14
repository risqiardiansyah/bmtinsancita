<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-info">
                        <th width="10%">TANGGAL DAFTAR</th>
                        <th width="10%">NOMER INDUK</th>
                        <th width="10%">NAMA LENGKAP</th>
                        <th width="20%">NO KTP</th>
                        <th width="20%">NO WHATSAPP</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i=1; foreach($pendaftaran as $value) { ?>
                    <td><?=$value->created_at ?></td>
                    <td><?=$value->nomer_induk ?></td>
                    <td><?=$value->nama_lengkap ?></td>
                    <td><?=$value->no_ktp ?></td>
                    <td><?=$value->no_whatsapp ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ url('tel:'.$value->no_whatsapp) }}" class="btn btn-primary"><i
                                    class="fa fa-phone"></i></a>
                        </div>

                    </td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
            </table>
        </div>
    </div>
</div>
