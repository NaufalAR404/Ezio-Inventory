<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item disabled"> Data Kelola</a></div>
              <div class="breadcrumb-item active"><a href="<?= base_url('Admin/Produksi');?>">Produksi</a></div>
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
                                <label>Surat Perintah Kerja</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Tanggal</label>
                                <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                                </div>
                                
                                <div class="form-group col-md-5">
                                <label>PO Bahan Utama</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>PO Bahan Kombinasi (1 atau lebih PO Bahan)</label>
                                <input type="text" class="form-control datemask">
                                </div>
                               
                                <div class="form-group col-md-5">
                                <label>Jumlah Yards Bahan Utama</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Jumlah Yards Kombinasi</label>
                                <input type="text" class="form-control datemask">
                                </div>
                               
                                <div class="form-group col-md-5">
                                <label>Merk</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Model</label>
                                <input type="text" class="form-control datemask">
                                </div>

                                <div class="form-group col-md-5">
                                <label>Style</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Aksesoris Yang Dipakai</label>
                                <input type="text" class="form-control datemask">
                                </div>

                                <div class="form-group col-md-5">
                                <label>Tempat Cutting</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Jumlah Hasil Cutting</label>
                                <input type="text" class="form-control datemask">
                                </div>

                                <div class="form-group col-md-5">
                                <label>Tempat Produksi</label>
                                <input type="text" class="form-control" autocomplete="">
                                </div>
                                
                                <div class="form-group col-md-5 offset-md-1">
                                <label>Ongkos CMT</label>
                                <input type="text" class="form-control datemask">
                                </div>

                                <div class="form-group col-md-12">
                                <label>Keterangan Lain</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="col-lg-2">
                                    <div class="row justify-content-between">
                                        <a href="<?= base_url('Admin/Produksi');?>" class="btn btn-light">cancel</a>
                                        <a href="" class="btn btn-success">Tambah</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <!-- <div class="row">
              <div class="col-12 col-md-6 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Data Produksi</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                            <div class="form-group">
                            <label>Surat Perintah Kerja</label>
                            <input type="text" class="form-control" autocomplete="">
                            </div>//////

                            <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                            </div>//////

                            <div class="form-group">
                            <label>PO Bahan Utama</label>
                            <input type="text" class="form-control" autocomplete="" placeholder="ASDF-GHIJ-KLMN-OPQR"> 
                            </div>

                            <div class="form-group">
                            <label>PO Bahan Kombinasi (1 atau lebih PO Bahan)</label>
                            <input type="text" class="form-control" autocomplete="">
                            </div>

                            <div class="form-group">
                            <label>Jumlah Yards Bahan Utama</label>
                            <input type="text" class="form-control" autocomplete="">
                            </div>

                            <div class="form-group">
                            <label>Jumlah Yards Kombinasi</label>
                            <input type="text" class="form-control purchase-code">
                            </div>

                            <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control invoice-input">
                            </div>
                        
                            <div class="form-group">
                            <label>Model</label>
                            <input type="text" class="form-control invoice-input">
                            </div>
                        </div>
                        
                            <div class="form-group">
                            <label>Style</label>
                            <input type="text" class="form-control invoice-input">
                            </div>

                            <div class="form-group">
                            <label>Aksesoris Yang Dipakai</label>
                            <input type="text" class="form-control invoice-input">
                            </div>
                    
                    
                            <div class="form-group">
                            <label>Tempat Cutting</label>
                            <input type="text" class="form-control invoice-input">
                            </div>

                            <div class="form-group">
                            <label>Jumlah Hasil Cutting</label>
                            <input type="text" class="form-control invoice-input">
                            </div>

                            <div class="form-group">
                            <label>Tempat Produksi</label>
                            <input type="text" class="form-control invoice-input">
                            </div>

                            <div class="form-group">
                            <label>Ongkos CMT</label>
                            <input type="text" class="form-control invoice-input">
                            </div>
                        
                            <div class="form-group">
                            <label>Keterangan Lain</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                    
                        <div class="col-lg-3">
                        <div class="row justify-content-between">
                            <a href="<?= base_url('Admin/Produksi');?>" class="btn btn-light">cancel</a>
                            <a href="" class="btn btn-success">Tambah</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
               
              </div> -->
            </div>
          </div>
        </section>
      </div>