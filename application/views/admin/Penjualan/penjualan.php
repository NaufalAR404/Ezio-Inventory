 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Data Penjualan</h1>
          </div>
          <div class="row">
              <div class="col-md-2 mb-3">
                <a href="<?= base_url('Admin/addPenjualan');?>" class="btn btn-primary tambah-data">Tambah Data</a>
              </div>
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-header">
                    <h4>Penjualan</h4>
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
                        <th>Merk</th>
                        <th>Style</th>
                        <th>Model</th>
                        <th>Jumlah</th>
                        <th>Customer</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>Pembayaran</th>
                        <th>Keterangan Lain</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td><a href="#">INV-87239</a></td>
                        <td class="font-weight-600">Kusnadi</td>
                        <td class="font-weight-600">Hurior Kemeja</td>
                        <td class="font-weight-600">5.000 pcs</td>
                        <td class="font-weight-600">Rp 48.000.000</td>
                        <td class="font-weight-600">Hurior Kemeja</td>
                        <td class="font-weight-600">5.000 pcs</td>
                        <td class="font-weight-600">Rp 48.000.000</td>
                        <td class="font-weight-600">Hurior Kemeja</td>
                        <td class="font-weight-600">Rp 48.000.000</td>
                        <td><div class="badge badge-warning">Unpaid</div></td>
                        <td>July 19, 2018</td>
                        <td>
                          <a href="#" class="btn btn-primary">Detail</a>
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