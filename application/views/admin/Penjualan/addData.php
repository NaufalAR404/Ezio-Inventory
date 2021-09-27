<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item disabled"> Data Barang</a></div>
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin/Penjualan');?>">Penjualan</a></div>
              <div class="breadcrumb-item active"><a href="#">Tambah Data</a></div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah data</h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-md-5">
                                <label>Tanggal</label>
                                <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Merk</label>
                                <input type="text" class="form-control datemask">
                                </div>
                                
                                <div class="form-group col-md-5">
                                <label>Style</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Model</label>
                                <input type="text" class="form-control datemask">
                                </div>
                               
                                <div class="form-group col-md-5">
                                <label>Jumlah</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Customer</label>
                                <input type="text" class="form-control datemask">
                                </div>
                               
                                <div class="form-group col-md-5">
                                <label>Harga</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Jumlah</label>
                                <input type="text" class="form-control datemask">
                                </div>

                                <div class="form-group col-md-5">
                                <label>Discount</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Total</label>
                                <input type="text" class="form-control datemask">
                                </div>

                                <div class="form-group col-md-5">
                                <label>Pembayaran</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>

                                <div class="form-group col-md-12">
                                <label>Keterangan Lain</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="col-lg-2">
                                    <div class="row justify-content-between">
                                        <a href="<?= base_url('Admin/Penjualan');?>" class="btn btn-light">cancel</a>
                                        <a href="" class="btn btn-success">Tambah</a>
                                    </div>
                                </div>

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