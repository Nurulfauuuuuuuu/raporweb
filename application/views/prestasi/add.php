<div class="container-fluid">

    <div class="card">
        <div class="card-header">
            <i class="fas fa-book-open mr-3"></i>Form Tambah Data Prestasi Siswa
        </div>
        <div class="card-body">
            <div class="form-group">
                <form action="" method="post">

                <label for="level">kelas</label>
                <select class="form-control" id="kelas" name="kelas">
                    <option value="">--Pilih kelas--</option>
                    <?php foreach($kelas as $data) : ?>
                        <option value="<?= $data->id_kelas ?>"><?= $data->kelas?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('level', '<div class="text-danger small ml-3">', '</div>') ?>
                </div>
                <div class="form-group">
                <label for="mapel">Tahun Ajaran</label>
                <select class="form-control" id="tahun" name="tahun">
                    <option value="">--Pilih Tahun Ajaran--</option>
                    <?php foreach ($tahun as $kl) : ?>
                        <option value="<?php echo $kl->nama ?>"><?= $kl->nama ?></option>
                    <?php endforeach; ?>
                </select>
                <?php echo form_error('mapel', '<div class="text-danger small ml-3">', '</div>') ?>
            </div>
                <button type="submit" class="btn btn-info">Simpan</button>
                <button type="reset" class="btn btn-danger ml-1">Reset</button>
            </form>

            <div class="kd-copy invisible">
                <div class="input-group control-group mt-2">
                    <input type="text" name="kd[]" class="form-control" id="komp_dasar_add" placeholder="Masukan Kompetensi Dasar">
                    <div class="input-group-btn">
                        <button class="btn btn-danger remove-kd" type="button"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<script>
    $(document).ready(function() {
        $(".add-kd").click(function() {
            var html = $(".kd-copy").html();
            $(".after-add-kd").after(html);
        });
        $("body").on("click", ".remove-kd", function() {
            $(this).parents(".control-group").remove();
        });

        $('#tahun').on('click', function(){
            var id_kelas = $('#kelas').val();
            var tahun = $('#tahun').val();

            console.log(id_kelas);
            console.log(tahun);

            // $.ajax({
            //     url: 'admin/prestasi/get',
            //     type: 'json',
            //     method: 'post',
            //     data : {
            //         id_kelas : id_kelas,
            //         tahun : tahun
            //     }
            //     success : function(data) {
            //         console.log(data);
            //     }
            // })
        })
    });
</script>