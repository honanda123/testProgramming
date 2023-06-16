<form action="<?php echo base_url() ?>customer/simpancustomer" class="formCostumer" method="POST">
    <div class="form-group mb-3">
        <input type="hidden" class="form-control" name="id" placeholder="Input placeholder">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Kode Customer</label>
        <input type="text" class="form-control" name="kode" placeholder="Input placeholder">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Customer</label>
        <input type="text" class="form-control" name="name" placeholder="Input placeholder">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">No Telepon</label>
        <input type="text" class="form-control" name="telp" placeholder="Input placeholder">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">Simpan</button>
    </div>

</form>

<script>
    $(function() {
        $('.formCostumer').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                kode: {
                    message: 'Kode Costumer Harus Diisi !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Costumer Harus Diisi !'
                        }
                    }
                },
                name: {
                    message: 'Nama Costumer Tidak Valid!',
                    validators: {
                        notEmpty: {
                            message: 'Nama Costumer Tidak Valid!'
                        }
                    }
                },
                telp: {
                    message: 'Harga Costumer Tidak Valid!',
                    validators: {
                        notEmpty: {
                            message: 'Nomor Telepon Tidak Valid!'
                        }
                    }
                },
            }
        });
    });
</script>