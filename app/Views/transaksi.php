<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pay / </span>Transaksi</h4>

              <div class="row">
                <!-- Basic -->
                <form action="<?= base_url('home/keranjang') ?>" method="post">                
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Checkout</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                    <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11"><i class="bi bi-box" disabled value="<?= $dt->nama_barang ?>"></i></span>
                        <select class="form-control" name="keranjang">
                        <?php foreach ($dt as $table) {
                                            ?>
                                                <option value="<?= $table->nama_barang ?>">
                                                    <?= $table->nama_barang ?>
                                                </option>
                                            <?php } ?>
                        </option>
                       </select>
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11"><i class="bi bi-people-fill"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Pelanggan"
                          name="pelanggan"
                        />
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11"><i class="bi bi-eyedropper"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="total pesan"
                          name="total_pesan"
                        />
                      </div>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon11"><i class="bi bi-eyedropper"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="harga"
                          name="harga"
                          value="<?= $table->harga ?>"
                        />

                      </div>
                      <div>
                        <a>
                        <button class="btn btn-primary form-control" type="submit">
                            Submit
                        </button>
                        </a>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>

