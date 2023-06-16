<form action="<?php echo base_url() ?>customer/ubahcustomer" class="formCustomer" method="POST">
    <div class="form-group mb-3">
        <input type="hidden" class="form-control" name="id" placeholder="Input placeholder" readonly>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Kode Customer</label>
        <!-- isset($row["user_name"]) -->
        <input type="text" value="<?php echo $customer['kode']; ?>" class="form-control" name="kode" placeholder="Input placeholder" readonly>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Customer</label>
        <input type="text" value="<?php echo $customer['name']; ?>" class=" form-control" name="name" placeholder="Input placeholder">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">No Telp</label>
        <input type="text" value="<?php echo $customer['telp']; ?>" class=" form-control" name="telp" placeholder="Input placeholder">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">Ubah</button>
    </div>

</form>

<script>
    $(function() {
        $('.formCustomer').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                kode: {
                    message: 'Kode Customer Harus Diisi !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Customer Harus Diisi !'
                        }
                    }
                },
                nama: {
                    message: 'Nama Customer Tidak Valid!',
                    validators: {
                        notEmpty: {
                            message: 'Nama Customer Tidak Valid!'
                        }
                    }
                },
                telp: {
                    message: 'telp Customer Tidak Valid!',
                    validators: {
                        notEmpty: {
                            message: 'telp Customer Tidak Valid!'
                        }
                    }
                },
            }
        });
    });
</script>