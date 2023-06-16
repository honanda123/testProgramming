<h2 class="page-title mb-3">
    Data Penjualan
</h2>
<form id="formPenjualan" action="" method="POST">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Transaksi
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                            <li class="fa fa-id-card"></li>
                        </span>
                        <input type="text" class="form-control" placeholder="Kode Transaksi" name="kode_transaksi" id="kode_transaksi">
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                            <li class="fa fa-calendar"></li>
                        </span>
                        <input type="text" class="form-control" placeholder="Tanggal" name="tgl" id="tgl">
                    </div>
                    <div class="card-title">
                        Customer
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                            <li class="fa fa-id-card"></li>
                        </span>
                        <input type="text" class="form-control" placeholder="Kode" name="kode" id="kode" readonly>
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                            <li class="fa fa-user"></li>
                        </span>
                        <input type="text" class="form-control" placeholder="Nama" name="name" id="name" readonly>
                    </div>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                            <li class="fa fa-phone-square"></li>
                        </span>
                        <input type="text" class="form-control" placeholder="No Telepon" name="telp" id="telp" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-blue text-white avatar mr-3"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                            <path d="M12 3v3m0 12v3" />
                        </svg>
                    </span>
                    <div class="mr-3">
                        <h2 id="totalpenjualan">0</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md 12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Data Barang
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <li class="fa fa-barcode"></li>
                                </span>
                                <input type="text" class="form-control" placeholder="Kode Barang" name="kode_barang" id="kode_barang" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <li class="fa fa-bars"></li>
                                </span>
                                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" id="nama_barang" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <li class="fa fa-usd"></li>
                                </span>
                                <input type="text" class="form-control" style="text-align: right;" placeholder="Harga" name="harga" id="harga" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <li class="fa fa-ellipsis-v"></li>
                                </span>
                                <input type="text" class="form-control" placeholder="Qty" name="qty" id="qty">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-primary" id="tambahbarang">
                                <li class="fa fa-cart-plus" style="font-size: 1rem;"></li>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Qty</th>
                                    <th>Harga Bandroll</th>
                                    <th>Diskon(%)</th>
                                    <th>Diskon(Rp)</th>
                                    <th>Harga Diskon</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="8">Total Seluruh</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-3">
                        <button type="submit" class="btn btn-primary w-100"><i class="fa fa-send mr-2"> Simpan</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="modal modal-blur fade" id="t_customer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Customer</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-borderd" id="tbl_customer">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Customer</th>
                            <th>Nama Customer</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($customer as $c) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $c->kode; ?></td>
                                <td><?php echo $c->name; ?></td>
                                <td><?php echo $c->telp; ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info pilih" data-kodecust="<?php echo $c->kode; ?>" data-nama="<?php echo $c->name; ?>" data-telp="<?php echo $c->telp; ?>">
                                        Pilih
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="t_barang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Barang</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-borderd" id="tbl_barang">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($barang as $b) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $b->kode; ?></td>
                                <td><?php echo $b->nama; ?></td>
                                <td><?php echo $b->harga; ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info pilihbarang" data-kodebarang="<?php echo $b->kode; ?>" data-namabarang="<?php echo $b->nama; ?>" data-harga="<?php echo $b->harga; ?>">
                                        Pilih
                                    </a>

                                </td>
                            </tr>
                        <?php
                            $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr(document.getElementById('tgl'), {});
    });

    $("#formPenjualan").submit(function() {
        var kode_transaksi = $('#kode_transaksi').val();
        var tgl = $('#tgl').val();
        var Kode = $('#kode').val();

        if (kode_transaksi == "") {
            swal("Opps!", "Kode Transaksi Harus Diisi", "warning");
            return false;
        } else if (tgl == "") {
            swal("Opps!", "Tanggal Harus Diisi", "warning");
            return false;
        } else if (Kode == "") {
            swal("Opps!", "Customer Harus Diisi", "warning");
            return false;
        } else {
            return true;
        }


    });

    $("#kode").click(function() {
        $('#t_customer').modal("show");

    });
    $("#tbl_customer").DataTable();

    $(".pilih").click(function() {
        var kode = $(this).attr("data-kodecust");
        var name = $(this).attr("data-nama");
        var telp = $(this).attr("data-telp");
        $("#kode").val(kode);
        $("#name").val(name);
        $("#telp").val(telp);
        $('#t_customer').modal("hide");


    });

    $("#kode_barang").click(function() {
        $('#t_barang').modal("show");

    });

    $("#tbl_barang").DataTable();

    $(".pilihbarang").click(function() {
        var kode_barang = $(this).attr("data-kodebarang");
        var nama_barang = $(this).attr("data-namabarang");
        var harga = $(this).attr("data-harga");
        $("#kode_barang").val(kode_barang);
        $("#nama_barang").val(nama_barang);
        $("#harga").val(harga);
        $('#t_barang').modal("hide");
    });

    $("#tambahbarang").click(function() {
        var kode_transaksi = $('#kode_transaksi').val();
        var kode = $('#kode').val();
        var tgl = $('#tgl').val();
        var kode_barang = $('#kode_barang').val();
        var harga = $('#harga').val();
        var Qty = $('#qty').val();
        if (kode_barang == "") {
            swal("Opps!", "Kode Barang Harus Diisi", "warning");
            return false;
        } else if (qty == "") {
            swal("Opps!", "Kode Barang Harus Diisi", "warning");
            return false;

        } else {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>penjualan/simpanbarang'

            });
        }


    });
</script>