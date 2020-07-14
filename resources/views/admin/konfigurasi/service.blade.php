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
        <form action="{{ asset('admin/konfigurasi/proses_our_service') }}" method="post" accept-charset="utf-8">
            {{ csrf_field() }}

            <div class="row">
                <input type="hidden" name="id_konfigurasi" value="<?= $site->id_konfigurasi ?>">
                <div class="col-md-6">
                    <!-- Global business -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Title Global business</label>
                            <input type="text" name="setting_title_service_1" placeholder="Title Global business"
                                value="<?= $site->setting_title_service_1 ?>" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Global business</label>
                            <textarea name="setting_service_1" rows="3" class="form-control konten" id="isi"
                                placeholder="Global business"><?= $site->setting_service_1 ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Icon Global business</label>
                            <input type="text" name="setting_logo_service_1" class="form-control"
                                placeholder="Icon Global business" value="{{ $site->setting_logo_service_1 }}" required>
                            <small class="text-success">Icon menggunakan Fontawesome. Kunjungi <a
                                    href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a></small>

                        </div>
                    </div>
                    <!-- Pro Services & Advice -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Title Pro Services & Advice</label>
                            <input type="text" name="setting_title_service_2" placeholder="Title Pro Services & Advice"
                                value="<?= $site->setting_title_service_2 ?>" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pro Services & Advice</label>
                            <textarea name="setting_service_2" rows="3" class="form-control konten" id="isi"
                                placeholder="Pro Services & Advice"><?= $site->setting_service_2 ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Icon Pro Services & Advice</label>
                            <input type="text" name="setting_logo_service_2" class="form-control"
                                placeholder="Icon Pro Services & Advice" value="{{ $site->setting_logo_service_2}}" required>
                            <small class="text-success">Icon menggunakan Fontawesome. Kunjungi <a
                                    href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Fast online support -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Title Fast online support</label>
                            <input type="text" name="setting_title_service_3" placeholder="Title Fast online support"
                                value="<?= $site->setting_title_service_3 ?>" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Fast online support</label>
                            <textarea name="setting_service_3" rows="3" class="form-control konten" id="isi"
                                placeholder="Fast online support"><?= $site->setting_service_3 ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Icon Fast online support</label>
                            <input type="text" name="setting_logo_service_3" class="form-control"
                                placeholder="Icon Fast online support" value="{{ $site->setting_logo_service_3 }}" required>
                            <small class="text-success">Icon menggunakan Fontawesome. Kunjungi <a
                                    href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a></small>
                        </div>
                    </div>
                    <!-- Fresh business ideas -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Title Fresh business ideas</label>
                            <input type="text" name="setting_title_service_4" placeholder="Title Fresh business ideas"
                                value="<?= $site->setting_title_service_4 ?>" required class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Fresh business ideas</label>
                            <textarea name="setting_service_4" rows="3" class="form-control konten" id="isi"
                                placeholder="Fresh business ideas"><?= $site->setting_service_4 ?></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Icon Fresh business ideas</label>
                            <input type="text" name="setting_logo_service_4" class="form-control"
                                placeholder="Icon Fresh business ideas" value="{{ $site->setting_logo_service_4 }}" required>
                            <small class="text-success">Icon menggunakan Fontawesome. Kunjungi <a
                                    href="https://fontawesome.com/" target="_blank">https://fontawesome.com/</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group btn-group">
                <input type="submit" name="submit" value="Save Configuration" class="btn btn-success ">
                <input type="reset" name="reset" value="Reset" class="btn btn-primary ">
            </div>
        </form>
    </div>
</div>
