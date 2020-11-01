<!-- Begin Page Content -->


<div class="card-body">
    <form enctype="multipart/form-data" id="fupForm">
        <div class="form-group row">
            <label for="sekolah" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="<?= $guru['nip'] ?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="sekolah" class="col-sm-2 col-form-label">Nama Guru</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $guru['nama'] ?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-10">
                <input class="form-control" name="nohp" id="nohp" rows="3" value="<?= $guru['no_hp'] ?>" required />
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Ganti Password</label>
            <div class="col-sm-10">
                <input class="form-control" name="password" id="password" rows="3" placeholder="Kosongkan jika tidak ingin rubah password" />
            </div>
        </div>
        <div class="form-group row">
            <label for="mapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-10">
                
                <select name="mapel" id="mapel" class="form-control">
                <option selected="" disabled="">-- Pilih Mapel --</option>
                    <?php 
                    
                    foreach ($mapel as $data) {
                        $selected = ($data->id_mapel == $guru['mapel']) ? 'selected' : '';
                        echo '<option value=' . $data->id_mapel . ' ' . $selected . '>' . $data->nama_mapel . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" id="alamat" rows="3"><?= $guru['alamat'] ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="foto" class="col-sm-2 col-form-label">Foto Profil</label>
            <?php if(empty($guru['foto'])) : ?>
                <div class="col-sm-3">
                    <img src="<?= base_url('assets/img/no-image.png'); ?>" alt="..." class="img-thumbnail">
                </div>
            <?php else : ?>
            <div class="col-sm-3">
                <img src="<?= base_url('assets/img/profil/') . $guru['foto'] ?>" alt="..." class="img-thumbnail">
            </div>
            <?php endif; ?>
            
            <div class="col-sm-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name='file' id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" id='btn-submit' class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
<script type='text/javascript'>
    function notify(pesan) {
        toastr.success(pesan);
    }
    $(document).ready(function(e) {
        $("#fupForm").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('Setting/editprofilguru') ?>',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false, 


                success: function(data) {
                    data = JSON.parse(data);
                    console.log(data);
                    if (data == 'sukses') {
                        location.reload();

                    }
                    else{
                        location.reload();
                    }
                }
            })
        });
    });
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>