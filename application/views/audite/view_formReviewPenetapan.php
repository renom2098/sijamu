<?php
$id = $data->id ?? '';
$nama_peraturan = $data->nama_peraturan ?? '';
$jenis_peraturan = $data->jenis_peraturan ?? '';
$tanggal_ditetapkan = $data->tanggal_ditetapkan ?? '';
$nama_file = $data->nama_file ?? '';
$tautan = $data->tautan ?? '';
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
                        <label class="form-label">Nama Penetapan : </label>
                        <br>
                        <span><?= $nama_peraturan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Jenis Peetapan : </label>
                        <br>
                        <span><?= $jenis_peraturan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Tanggal ditetapkan Penetapan : </label>
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