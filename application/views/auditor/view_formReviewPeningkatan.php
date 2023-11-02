<?php
$id = $data->id ?? '';
$nama_pengaturan = $data->nama_pengaturan ?? '';
$tautan_penetapan = $data->tautan_penetapan ?? '';
$tautan_peningkatan = $data->tautan_peningkatan ?? '';
$tanggal_penetapan_baru = $data->tanggal_penetapan_baru ?? '';
?>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Details Data Peningkatan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Nama Pengaturan : </label>
                        <br>
                        <span><?= $nama_pengaturan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Tanggal Penetapan Baru : </label>
                        <br>
                        <span><?= $tanggal_penetapan_baru; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_penetapan ?>" class="btn btn-info">Tautan Penetapan</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_peningkatan ?>" class="btn btn-info">Tautan Peningkatan</a>
                    </div>
                </div>

            </div>
    </div>
    
</div>