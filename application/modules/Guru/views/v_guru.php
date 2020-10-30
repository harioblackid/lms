<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Data guru</div>
                <div class="card-tools">
                    <button class="btn btn-primary" onclick="pilihform('tambah')" data-toggle="modal" data-target="#tambahguru"><i class="fas fa-fw fa-plus"></i> Tambah</button>
                    <button class="btn btn-success" data-toggle="modal" data-target="#modalimport"><i class="fas fa-fw fa-upload"></i> Import Excel</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm" id="tableguru" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP Guru</th>
                                <th>Nama guru</th>
                                <th>No HP</th>
                                <th>Walas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id='targetguru'>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<div class="modal fade" id="modalimport" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA GURU</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                    <form method="post" id="import_form" enctype="multipart/form-data">
                        <p><label>Pilih file Excel xls | xlsx</label><br>
                            <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                        <br />
                        <input type="submit" name="import" value="Import" class="btn btn-info" />
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahguru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id='form-modal'>
                <div class="modal-body">
                    <input type="hidden" name='id' id="id" class="form-control" placeholder="">
                    <div class="form-group">
                        <label for="nip">NIP Guru</label>
                        <input type="text" name='nip' id="nip" class="form-control" placeholder="">
                        <small id="helpnip" class="text-danger"></small>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama guru</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="">
                        <small id="helpnama" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="">
                        <small id="helppassword" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Wali Kelas</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option value="">Bukan Walas</option>
                            <?php foreach ($kelas as $kelas) { ?>
                                <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['id_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kelas">Mata Pelajaran Utama</label>
                        <select class="form-control" name="mapel" id="mapel">
                            <option value="">Pilih Mapel</option>
                            <?php foreach ($mapel as $mapel) { ?>
                                <option value="<?= $mapel['id_mapel'] ?>"><?= $mapel['nama_mapel'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id='btn-submit' class="btn btn-primary">Save changes</button>
                    <button id='btn-edit' class="btn btn-primary" display='none'>Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function notify(pesan) {
        toastr.success(pesan);
    }

    function pilihform(x) {
        if (x == 'tambah') {
            $('#btn-submit').show();
            $('#btn-submit').prop('disabled', false);
            $('#btn-edit').hide();
            $('#btn-edit').prop('disabled', true);
            $("[name='nip']").val('');
            $("[name='nama']").val('');
            $("[name='password']").val('');
            $("[name='kelas']").val('');
            $("[name='mapel']").val('');
        } else {
            $('#btn-submit').prop('disabled', true);
            $('#btn-submit').hide();
            $('#btn-edit').show();
            $('#btn-edit').prop('disabled', false);

        }
    }
    $("#btn-submit").click(function(e) {
        e.preventDefault();
        var nip = $("[name='nip']").val();
        var nama = $("[name='nama']").val();
        var password = $("[name='password']").val();
        var kelas = $("[name='kelas']").val();
        var kelas = $("[name='mapel']").val();
        $.ajax({
            type: 'POST',
            url: "<?= base_url('Guru/tambahdata') ?>",
            data: {
                'nama': nama,
                'nip': nip,
                'password': password,
                'kelas': kelas,
                'mapel': mapel
            },
            datatype: 'json',
            success: function(data) {
                data = JSON.parse(data);
                console.log(data);
                if (data == 'sukses') {
                    $(".alert-danger").css('display', 'none');
                    $('#tambahguru').modal('hide');
                    $('#tableguru').DataTable().ajax.reload();
                    iziToast.success({
                        title: 'Horee!',
                        message: 'Berhasil Ditambah',
                        position: 'topRight'
                    });
                } else {
                    $("#helpnama").html(data.nama);
                    $("#helpnip").html(data.nip);
                    $("#helppassword").html(data.pass);
                    iziToast.error({
                        title: 'Maaf!',
                        message: 'Update Gagal',
                        position: 'topCenter'
                    });
                }

            }
        })
    });
    //tombol edit modal
    $("#btn-edit").click(function(e) {
        e.preventDefault();
        var id = $("[name='id']").val();
        var nip = $("[name='nip']").val();
        var nama = $("[name='nama']").val();
        var password = $("[name='password']").val();
        var kelas = $("[name='kelas']").val();
        var mapel = $("[name='mapel']").val();
        $.ajax({
            type: 'POST',
            url: "<?= base_url('Guru/editdata') ?>",
            data: {
                'id': id,
                'nama': nama,
                'nip': nip,
                'password': password,
                'kelas': kelas,
                'mapel': mapel
            },
            success: function(data) {
                data = JSON.parse(data);
                console.log(data);
                if (data == 'sukses') {
                    $(".alert-danger").css('display', 'none');
                    $('#tambahguru').modal('hide');
                    $('#tableguru').DataTable().ajax.reload();
                    $("[name='nama']").val('');
                    iziToast.success({
                        title: 'Horee!',
                        message: 'Update Berhasil',
                        position: 'topRight'
                    });
                } else if (data == 'gagal') {
                    iziToast.error({
                        title: 'Horee!',
                        message: 'Update Gagal',
                        position: 'topCenter'
                    });
                } else {
                    $("#helpnama").html(data.nama);
                    $("#helpnip").html(data.nip);
                    $("#helppassword").html(data.pass);
                }
            }
        })
    });
    // Delete Records
    $('#tableguru').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        Swal.fire({
            title: 'Apa anda yakin?',
            text: "akan menghapus data ini!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo base_url(); ?>Guru/hapusdata",
                    method: "POST",
                    dataType: 'json',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        if (data == 'ok') {
                            $('#tableguru').DataTable().ajax.reload();
                            iziToast.success({
                                title: 'Hemm!',
                                message: 'Berhasil Dihapus',
                                position: 'topRight'
                            });
                        }
                    }
                });
            }
        })

    });
    //**end**
    // AMBIL ID data table
    $('#tableguru').on('click', '.edit', function() {
        var id = $(this).data('id');
        console.log(id);
        pilihform();
        $('#tambahguru').modal('show');
        $.ajax({
            url: "<?php echo base_url(); ?>Guru/ambilid",
            method: "POST",
            dataType: 'json',
            data: {
                id: id
            },
            success: function(data) {
                $("[name='id']").val(data[0].id_guru);
                $("[name='nip']").val(data[0].nip);
                $("[name='nama']").val(data[0].nama);
                $("[name='kelas']").val(data[0].walas);

            }
        });

    });
    $('#import_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>Guru/import_guru",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#file').val('');
                $('#modalimport').modal('hide');
                notify('data berhasil diimport');
                $('#tableguru').DataTable().ajax.reload();
            }
        })
    });
</script>
<script>
    var save_method; //for save method string
    var table;

    $(document).ready(function() {
        //data table load setting
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        var table = $("#tableguru").dataTable({
            initComplete: function() {
                var api = this.api();
                $('#data-table_filter input')
                    .off('.DT')
                    .on('input.DT', function() {
                        api.search(this.value).draw();
                    });
            },
            oLanguage: {
                sProcessing: '<p style="color: green"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></p><span class="sr-only">Loading…</span>',

            },
            bprocessing: true,
            bserverSide: true,
            ajax: {
                "url": "<?php echo base_url('Guru/get_idt_guru') ?>",
                "type": "POST"
            },
            columns: [{
                    "data": null,
                    "width": 10
                },
                {
                    "data": "nip",
                    "width": 100
                },
                {
                    "data": "nama"

                },
                {
                    "data": "no_hp",
                    "width": 10
                },
                {
                    "data": "walas",
                    "width": 10
                },
                {
                    "data": "action",
                    "width": 100
                }
            ],
            order: [
                [2, 'desc']
            ],

            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }

        });


    });
</script>