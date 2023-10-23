<?php
$id = $data->id ?? '';
$nama_bidang_pengaturan_standar = $data->nama_bidang_pengaturan_standar ?? '';
$tautan_pelaksanaan_rtm = $data->tautan_pelaksanaan_rtm ?? '';
$tautan_bukti_pelaksanaan_rtm = $data->tautan_bukti_pelaksanaan_rtm ?? '';
$tautan_pelaksanaan_rtl = $data->tautan_pelaksanaan_rtl ?? '';
$tautan_bukti_pelaksanaan_rtl = $data->tautan_bukti_pelaksanaan_rtl ?? '';
?>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Details Data Penetapan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Nama Bidang Pengaturan Standar : </label>
                        <br>
                        <span><?= $nama_bidang_pengaturan_standar; ?></span>
                    </div>
                </div>
                <hr class="invoice-spacing">
                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_pelaksanaan_rtm ?>" class="btn btn-info">Tautan Pelaksanaan RTM</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_bukti_pelaksanaan_rtm ?>" class="btn btn-info">Tautan Bukti Pelaksanaan RTM</a>
                    </div>
                </div>
                <hr class="invoice-spacing">
                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_pelaksanaan_rtl ?>" class="btn btn-primary">Tautan Pelaksanaan RTL</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_bukti_pelaksanaan_rtl ?>" class="btn btn-primary">Tautan Bukti Pelaksanaan RTL</a>
                    </div>
                </div>
            </div>
    </div>
    
</div>