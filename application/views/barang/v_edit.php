<form action="<?php echo base_url() ?>barang/ubahbarang" class="formBarang" method="POST">
    <div class="form-group mb-3">
        <input type="hidden" class="form-control" name="id" placeholder="Input placeholder" readonly>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Kode Barang</label>
        <input type="text" value="<?php echo $barang['kode']; ?>" class="form-control" name="kode" placeholder="Input placeholder" readonly>
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" value="<?php echo $barang['nama']; ?>" class=" form-control" name="nama" placeholder="Input placeholder">
    </div>
    <div class="form-group mb-3">
        <label class="form-label">Harga</label>
        <input type="text" value="<?php echo $barang['harga']; ?>" class=" form-control" name="harga" placeholder="Input placeholder">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">Ubah</button>
    </div>

</form>

<script>
    $(function() {
        $('.formBarang').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                kode: {
                    message: 'Kode Barang Harus Diisi !',
                    validators: {
                        notEmpty: {
                            message: 'Kode Barang Harus Diisi !'
                        }
                    }
                },
                nama: {
                    message: 'Nama Barang Tidak Valid!',
                    validators: {
                        notEmpty: {
                            message: 'Nama Barang Tidak Valid!'
                        }
                    }
                },
                harga: {
                    message: 'Harga Barang Tidak Valid!',
                    validators: {
                        notEmpty: {
                            message: 'Harga Barang Tidak Valid!'
                        }
                    }
                },
            }
        });
    });
</script>