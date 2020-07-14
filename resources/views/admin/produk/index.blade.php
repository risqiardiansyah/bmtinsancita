<div class="row">

    <div class="col-md-6">
        <form action="{{ asset('admin/produk/cari') }}" method="get" accept-charset="utf-8">
            <br>
            <div class="input-group">
                <input type="text" name="keywords" class="form-control"
                    placeholder="Ketik kata kunci pencarian produk...."
                    value="<?php if(isset($_GET['keywords'])) { echo strip_tags($_GET['keywords']); } ?>" required>
                <span class="input-group-btn btn-flat">
                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
                    <a href="{{ asset('admin/produk/tambah') }}" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Baru</a>
                </span>
            </div>
        </form>
    </div>
    <div class="col-md-6 text-left">

    </div>
</div>

<div class="clearfix">
    <hr>
</div>
<form action="{{ asset('admin/produk/proses') }}" method="post" accept-charset="utf-8">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <div class="input-group">
                <select name="id_kategori_produk" class="form-control form-control-sm">
                    <?php foreach($kategori_produk as $kategori_produk) { ?>
                    <option value="<?php echo $kategori_produk->id_kategori_produk ?>">
                        <?php echo $kategori_produk->nama_kategori_produk ?></option>
                    <?php } ?>
                </select>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-info btn-sm btn-flat" name="update">Update</button>
                    <button class="btn btn-danger btn-sm" type="submit" name="hapus" onClick="check();">
                        <i class="fa fa-trash"></i>
                    </button>


                    <button class="btn btn-warning btn-sm" type="submit" name="draft" onClick="check();">
                        <i class="fa fa-times"></i> Draft
                    </button>

                    <button class="btn btn-primary btn-sm" type="submit" name="publish" onClick="check();">
                        <i class="fa fa-check"></i> Publish
                    </button>
                </span>
            </div>
        </div>

        <div class="col-md-8">
            <div class="btn-group">


                <?php if(isset($pagin)) { echo $pagin; } ?>

            </div>
        </div>
    </div>
    <div class="clearfix">
        <hr>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-info">
                            <th width="5%">
                                <div class="mailbox-controls">
                                    <!-- Check all button -->
                                    <button type="button" class="btn btn-info btn-sm checkbox-toggle"><i
                                            class="far fa-square"></i>
                                    </button>
                                </div>
                            </th>
                            <th width="8%">GAMBAR</th>
                            <th width="8%">NAMA CLIENT</th>
                            <th width="20%">NAMA</th>
                            <th width="15%">KATEGORI</th>
                            <th width="5%">STATUS</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i=1; foreach($produk as $produk) { ?>

                        <tr class="odd gradeX">
                            <td class="text-center">
                                <div class="icheck-primary">
                                    <input type="checkbox" name="id_produk[]" value="<?php echo $produk->id_produk ?>"
                                        id="check<?php echo $i ?>">
                                    <label for="check<?php echo $i ?>"></label>
                                </div>
                            </td>

                            <td><img src="{{ asset('public/upload/image/thumbs/'.$produk->gambar) }}"
                                    class="img img-responsive img-thumbnail" width="60"></td>
                            <td><?php echo $produk->client_name ?></td>

                            <td><a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" target="_blank">
                                    <?php echo $produk->nama_produk ?> <sup><i class="fa fa-search"></i></sup></a>
                                <small>
                                    <br>Kode produk: <?php echo $produk->kode_produk ?>
                                    <br>Urutan: <?php echo $produk->urutan ?>
                                </small>
                            </td>

                            <td><a href="{{ asset('admin/produk/kategori/'.$produk->id_kategori_produk) }}">
                                    <?php echo $produk->nama_kategori_produk ?></a>
                                <br><small><?php echo $produk->deskripsi ?></small></td>
                            <td><a href="{{ asset('admin/produk/status_produk/'.$produk->status_produk) }}">
                                    <?php echo $produk->status_produk ?></a></td>

                            <td>
                                <div class="btn-group">

                                    <a class="btn btn-info btn-sm"
                                        href="{{ asset('produk/detail/'.$produk->slug_produk) }}" target="_blank"><i
                                            class="fa fa-eye"></i></a>


                                    <a href="{{ asset('admin/produk/edit/'.$produk->id_produk) }}"
                                        class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                    <a href="{{ asset('admin/produk/delete/'.$produk->id_produk) }}"
                                        class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
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

<div class="clearfix">
    <hr>
</div>
<div class="pull-right"><?php if(isset($pagin)) { echo $pagin; } ?></div>
