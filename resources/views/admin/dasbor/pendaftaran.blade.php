<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-info">
                        <th width="5%">NO</th>
                        <th width="10%">TANGGAL DAFTAR</th>
                        <th width="10%">NOMER INDUK</th>
                        <th width="10%">NAMA LENGKAP</th>
                        <th width="20%">NO KTP</th>
                        <th width="20%">NO WHATSAPP</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($pendaftaran as $value)
                    <td class="text-center">
                        {{$loop->iteration}}
                    </td>

                    <td> {{$value->created_at}}</td>
                    <td>{{$value->nomer_induk}} </td>
                    <td>{{$value->nama_lengkap}} </td>
                    <td>{{$value->no_ktp}} </td>
                    <td>{{$value->no_whatsapp}} </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ asset('admin/dasbor/delete/'.$value->id) }}"
                                class="btn btn-danger btn-sm  delete-link">
                                <i class="fa fa-trash"></i></a>
                        </div>

                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </table>
        </div>
    </div>
</div>
