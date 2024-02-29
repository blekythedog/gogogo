<div class="container" style="padding-top : 20px;">
<div class="card">
                <h5 class="card-header">Data Keranjang</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Keranjang</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php 
                        $no = 1;
                        foreach ($dt as $table)
                        { ?>
                      <tr>
                        <td> 
                            <strong><?php echo $no++; ?></strong>
                        </td>
                        <td>
                            <?= $table->pelanggan ?>
                        </td>
                        <td>
                            <?= $table->keranjang ?>
                        </td>
                        <td>
                        <?= $table->harga ?>
                        </td>
                        <td>
                        <?= $table->tanggal ?>
                        </td>
                        </tr>
                        <?php } ?>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div style="padding-top : 20px;">
              <a href="<?= base_url('home/dashboard') ?>">
                            <button class="btn btn-primary">
                               submit
                            </button>
                           </a>
                        </div>
</div>