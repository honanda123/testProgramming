

<h2 class="page-title">
    Master Data Customer
</h2>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="#" class="btn btn-info mb-3" id="tambah">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Tambah Data</a>
                <div class="mb-3">
                    <?php echo $this->session->flashdata('msg');; ?>
                </div>
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
                                    <a href="#" data-kode="<?php echo $c->kode; ?>" class="btn btn-sm btn-success edit">
                                        <li class="fa fa-pencil"></li>
                                    </a>
                                    <a href="#" data-href="<?php echo base_url(); ?>customer/hapuscustomer/<?php echo $c->kode ?>" class="btn btn-sm btn-danger hapus">
                                        <li class="fa fa-trash"></li>

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

<!-- Modal Tambah customer -->
<div class="modal modal-blur fade" id="t_customer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Customer</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadforminputcustomer"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="e_customer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Customer</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="loadformeditcustomer"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="h_customer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title">Anda Yakin Akan Menghapus Data Ini?</div>
                <div>Jika menghapus data, maka anda akan kehilangan data ini .</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                <a href="#" id="hapuscustomer" class="btn btn-danger">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#tambah").click(function() {
            $("#t_customer").modal("show");
            $("#loadforminputcustomer").load("<?php echo base_url(); ?>Customer/inputcustomer");
        });
        $(".edit").click(function() {
            var kode = $(this).attr("data-kode");
            $("#e_customer").modal("show");
            $("#loadformeditcustomer").load("<?php echo base_url(); ?>Customer/editcustomer/" + kode);



        });
        $(".hapus").click(function() {
            var href = $(this).attr("data-href");
            $("#h_customer").modal("show");
            $("#hapuscustomer").attr("href", href)

        });

        $('#tbl_customer').DataTable();


    });
</script>