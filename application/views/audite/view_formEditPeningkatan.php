<?php
$id = $data->id ?? '';
$nama_pengaturan = $data->nama_pengaturan ?? '';
$tautan_penetapan = $data->tautan_penetapan ?? '';
$tautan_peningkatan = $data->tautan_peningkatan ?? '';
$tanggal_penetapan_baru = $data->tanggal_penetapan_baru ?? '';
?>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Edit Data Peningkatan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>audite/update_dataPeningkatan" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" value="<?= $id; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-bidang-pengaturan-standar">Nama Pengaturan</label>
                        <input type="text" id="nama-peraturan" class="form-control" name="f[nama_pengaturan]" value="<?= $nama_pengaturan; ?>">
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-penetapan">Tautan Penetapan</label>
                        <input type="text" id="tautan-penetapan" class="form-control" name="f[tautan_penetapan]" value="<?= $tautan_penetapan; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-peningkatan">Tautan Peningkatan</label>
                        <input type="text" id="tautan-peningkatan" class="form-control" name="f[tautan_peningkatan]" value="<?= $tautan_peningkatan; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                      <label class="form-label" for="tanggal_penetapan_baru">Tanggal Penetapan Baru</label>
                      <input type="text" id="tanggal_penetapan_baru" class="form-control flatpickr-basic flatpickr-input active" name="f[tanggal_penetapan_baru]" placeholder="<?= $tanggal_penetapan_baru; ?>" readonly="readonly" value="<?= $tanggal_penetapan_baru; ?>">
                    </div>
                </div> 

            </div>
            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
    </div>
    
</div>

<script>
$('#tanggal_penetapan_baru').flatpickr({
    altInput: true,
    dateFormat: "Y-m-d",
    allowInput: true,
    parseDate: (datestr, format) => {
        return moment(datestr, format, true).toDate();
    }
}); 
</script>