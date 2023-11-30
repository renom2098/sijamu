<?php
$id = $data->id ?? '';
$nama_dok_pelaksanaan = $data->nama_dok_pelaksanaan ?? '';
$jenis_dok_pelaksanaan = $data->jenis_dok_pelaksanaan ?? '';
$tanggal_ditetapkan = $data->tanggal_ditetapkan ?? '';
$nama_file = $data->nama_file ?? '';
$tautan = $data->tautan ?? '';
?>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Details Data Pelaksanaan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Nama Pelaksanaan : </label>
                        <br>
                        <span><?= $nama_dok_pelaksanaan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Jenis Peetapan : </label>
                        <br>
                        <span><?= $jenis_dok_pelaksanaan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Tanggal ditetapkan Pelaksanaan : </label>
                        <br>
                        <span><?= $tanggal_ditetapkan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan ?>" class="btn btn-info">Tautan</a>
                    </div>
                </div>

            </div>
    </div>
    
</div>