 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Data Pembelian Bahan</h1>
          </div>
          <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-12">
                        <h4 class="title-form">Form</h4>
                      </div>

                      <div class="col-md-12">
                        <h3 class="sub-title-form">Form Input Pembelian Bahan</h3>
                      </div>
                    </div>
                    <hr>  
                  </div>
                  <div class="card-body">
                      <p>
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Tambah Data
                        </button>
                      </p>
                    <div class="collapse" id="collapseExample">
                     <div class="row">
                      <div class="form-group col-md-5">
                      <label>Kode Faktur</label>
                      <input type="text" class="form-control" autocomplete="">
                      </div>
                      
                      <div class="form-group col-md-5 offset-md-1">
                      <label>Nama Supplier</label>
                      <input type="text" class="form-control" autocomplete="">
                      </div>
                      
                      <div class="form-group col-md-5">
                      <label>Tanggal</label>
                      <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                      </div>
                      
                      <div class="form-group col-md-5 offset-md-1">
                      <label>PO Bahan</label>
                      <input type="text" class="form-control" autocomplete="">
                      </div>
                      
                      <div class="form-group col-md-5">
                      <label>Jenis Bahan</label>
                      <input type="text" class="form-control" autocomplete="">
                      </div>
                      
                      <div class="form-group col-md-5 offset-md-1">
                      <label>Kode Bahan</label>
                      <input type="text" class="form-control" autocomplete="">
                      </div>
                    
                      <div class="form-group col-md-5">
                      <label>QTY</label>
                      <input type="text" class="form-control" autocomplete="">
                      </div>
                      
                      <div class="form-group col-md-5 offset-md-1">
                      <label>Harga</label>
                      <input type="text" class="form-control" autocomplete="" placeholder="Rp">
                      </div>

                      <div class="form-group col-md-6">
                        <label>Keterangan Lain</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                        <a href="" class="btn btn-success">Submit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!--  -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Pembelian Bahan</h4>
                    <div class="card-header-action">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <table class="table table-striped">
                      <tr>
                        <th>Tanggal</th>
                        <th>Supplier</th>
                        <th>No. Faktur</th>
                        <th>No. PO</th>
                        <th>Jenis Bahan</th>
                        <th>Kode Bahan</th>
                        <th>QTY</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td><a href="#">INV-87239</a></td>
                        <td class="font-weight-600">Kusnadi</td>
                        <td class="font-weight-600">Hurior Kemeja</td>
                        <td class="font-weight-600">5.000 pcs</td>
                        <td class="font-weight-600">Rp 48.000.000</td>
                        <td class="font-weight-600">5.000 pcs</td>
                        <td class="font-weight-600">Rp 48.000.000</td>
                        <td><div class="badge badge-warning">Unpaid</div></td>
                        <td>July 19, 2018</td>
                        <td>
                          <a href="<?= base_url('PembelianBahan/detail');?>" class="btn btn-primary">Detail</a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <!-- <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                        <li class="page-item disabled">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>

              </div>
            </div>
          </div>
        </section>
      </div>