<div class="modal fade" id="Edit{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel">Edit data?</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{ asset('admin/team/proses') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $value->id }}">
				<div class="form-group row">
					<label class="col-sm-3 control-label text-right">Nama lengkap</label>
					<div class="col-sm-9">
						<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama lengkap"value="{{$value->nama_lengkap}}" required>
					</div>
                </div>
                
                <div class="form-group row">
					<label class="col-sm-3 control-label text-right">Jabatan</label>
					<div class="col-sm-9">
						<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$value->jabatan}}"required>
					</div>
                </div>
                
                <div class="form-group row">
					<label class="col-sm-3 control-label text-right">Telp</label>
					<div class="col-sm-9">
						<input type="text" name="telp" class="form-control" placeholder="Telp"  onkeypress="return hanyaAngka(this);" value="{{$value->telp}}" minlength="10"
                        maxlength="13" required>
					</div>
                </div>

                <div class="form-group row">
					<label class="col-sm-3 control-label text-right">Facebook</label>
					<div class="col-sm-9">
						<input type="text" name="facebook" class="form-control" placeholder="Facebook"   value="{{$value->facebook}}"  required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 control-label text-right">Upload foto profil</label>
					<div class="col-sm-9">
                        <input type="file" name="foto" class="form-control" id="file" placeholder="Upload Foto" >
                        <div id="imagePreview"></div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 control-label text-right"></label>
					<div class="col-sm-9">
						<div class="form-group pull-right btn-group">
							<input type="submit" name="submit" class="btn btn-primary " value="Simpan Data">
							<input type="reset" name="reset" class="btn btn-success " value="Reset">
							<button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				</form>

			</div>
		</div>
	</div>
</div>
<style>
    #imagePreview {
        width: 150px;
        height: 150px;
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }

</style>
<script type="text/javascript">
    $(function () {
        $("#file").on("change", function () {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
        return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () { // set image data as background of div
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
            }
        });
    });

</script>