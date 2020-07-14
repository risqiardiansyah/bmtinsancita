<div class="alert alert-info">
    Hai <strong>{{ Session()->get('nama') }}</strong>, Selamat datang di Halaman Dashboard Administrator
  </div>
  <hr>
  <div class="row">
  <!-- Earnings (Monthly) Card Example -->
              <div class="col-lg-6 col-6">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendaftaran Baru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=number_format($count_pendaftaran) ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-6">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Testimoni Baru</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=number_format($count_testimoni) ?></div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-comment fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </div>
  <div class="clearfix"></div>
  <hr>
  <h4>Berikut data Pendaftaran Anggota Baru</h4>
  <hr>
  @include('admin/dasbor/dasborpendaftaran')