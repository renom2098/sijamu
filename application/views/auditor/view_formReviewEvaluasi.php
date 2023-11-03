<?php
$id = $data->id ?? '';
$nama_dok_evaluasi = $data->nama_dok_evaluasi ?? '';
$jenis_dok_evaluasi = $data->jenis_dok_evaluasi ?? '';
$tanggal_ditetapkan = $data->tanggal_ditetapkan ?? '';
$nama_file = $data->nama_file ?? '';
$prodi = $data->prodi ?? '';
$fakultas = $data->fakultas ?? '';
$tautan_excel = $data->tautan_excel ?? '';
?>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Details Data Evaluasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Nama Evaluasi : </label>
                        <br>
                        <span><?= $nama_dok_evaluasi; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Jenis Evaluasi : </label>
                        <br>
                        <span><?= $jenis_dok_evaluasi; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label">Tanggal Penetapan Evaluasi : </label>
                        <br>
                        <span><?= $tanggal_ditetapkan; ?></span>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <a href="<?= $tautan_excel ?>" class="btn btn-info">Tautan Excel</a>
                    </div>
                </div>

            </div>
    </div>
    
</div>