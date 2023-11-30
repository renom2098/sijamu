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
        <h4 class="modal-title" id="addModalLabel">Edit Data Pengendalian</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>audite/update_dataPengendalian" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" value="<?= $id; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-bidang-pengaturan-standar">Nama Bidang Pengaturan Standar</label>
                        <input type="text" id="nama-peraturan" class="form-control" name="f[nama_bidang_pengaturan_standar]" value="<?= $nama_bidang_pengaturan_standar ?>">
                    </div>
                </div>

                <div class="divider divider-primary">
                    <div class="divider-text">Rapat Tinjauan Manajemen</div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-pelaksanaan-rtm">Tautan Pelaksanaan RTM</label>
                        <input type="text" id="tautan-pelaksanaan-rtm" class="form-control" name="f[tautan_pelaksanaan_rtm]" value="<?= $tautan_pelaksanaan_rtm ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-bukti-pelaksanaan-rtm">Tautan Bukti Pelaksanaan RTM</label>
                        <input type="text" id="tautan-bukti-pelaksanaan-rtm" class="form-control" name="f[tautan_bukti_pelaksanaan_rtm]" value="<?= $tautan_bukti_pelaksanaan_rtm ?>">
                    </div>
                </div>

                <div class="divider divider-primary">
                    <div class="divider-text">Rencana Tindak Lanjut</div>
                </div>
                
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-pelaksanaan-rtl">Tautan Pelaksanaan RTL</label>
                        <input type="text" id="tautan-pelaksanaan-rtl" class="form-control" name="f[tautan_pelaksanaan_rtl]" value="<?= $tautan_pelaksanaan_rtl ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-bukti-pelaksanaan-rtl">Tautan Bukti Pelaksanaan RTL</label>
                        <input type="text" id="tautan-bukti-pelaksanaan-rtl" class="form-control" name="f[tautan_bukti_pelaksanaan_rtl]" value="<?= $tautan_bukti_pelaksanaan_rtl ?>">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
    </div>
    
</div>