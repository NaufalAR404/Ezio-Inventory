<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item disabled"> Data Barang</a></div>
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin/barangKeluar');?>">Barang Keluar</a></div>
              <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Data Barang Keluar</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label>Tanggal</label>
                      <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                    </div>

                    <div class="form-group">
                      <label>Merk</label>
                      <input type="text" class="form-control" autocomplete="">
                    </div>

                    <div class="form-group">
                      <label>Style</label>
                      <input type="text" class="form-control" autocomplete="">
                    </div>

                    <div class="form-group">
                      <label>Model</label>
                      <input type="text" class="form-control purchase-code" placeholder="ASDF-GHIJ-KLMN-OPQR">
                    </div>

                    <div class="form-group">
                      <label>Jumlah</label>
                      <input type="text" class="form-control invoice-input">
                    </div>
                   
                    <div class="form-group">
                      <label>Customer</label>
                      <input type="text" class="form-control invoice-input">
                    </div>

                    <div class="form-group">
                      <label>Keterangan Lain</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    
                    <div class="col-lg-3">
                        <div class="row justify-content-between">
                            <a href="<?= base_url('Admin/barangKeluar');?>" class="btn btn-light">cancel</a>
                            <a href="" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
               
              </div>
            </div>
          </div>
        </section>
      </div>