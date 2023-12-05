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
        <h4 class="modal-title" id="addModalLabel">Edit Data Penetapan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>admin/update_dataPelaksanaan" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" value="<?= $id; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-pelaksanaan">Nama Pelaksanaan</label>
                        <input type="text" id="nama-pelaksanaan" class="form-control" name="f[nama_dok_pelaksanaan]" placeholder="Nama Pelaksanaan" value="<?= $nama_dok_pelaksanaan; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="jenis-pelaksanaan">Jenis Pelaksanaan</label>
                        <select class="form-select" id="basicSelect" name="f[jenis_dok_pelaksanaan]">
                            <option Value="#">===Pilih===</option>    
                            <option Value="Pendidikan" <?php if($jenis_dok_pelaksanaan == "Pendidikan") echo 'selected="selected"' ?? ''; ?>>Pendidikan</option>
                            <option value="Penelitian" <?php if($jenis_dok_pelaksanaan == "Penelitian") echo 'selected="selected"' ?? ''; ?>>Penelitian</option>
                            <option value="Pengabdian" <?php if($jenis_dok_pelaksanaan == "Pengabdian") echo 'selected="selected"' ?? ''; ?>>Pengabdian</option>
                        </select>
                        <!-- <input type="text" id="jenis-pelaksanaan" class="form-control" name="f[jenis_dok_pelaksanaan]" placeholder="Jenis Pelaksanaan" value="<?= $jenis_dok_pelaksanaan; ?>"> -->
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan">Tautan</label>
                        <input type="text" id="tautan" class="form-control" name="f[tautan]" placeholder="Tautan" value="<?= $tautan; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label" for="tanggal_ditetapkan">Tanggal Ditetapkan</label>
                    <input type="text" id="tanggal_ditetapkan" class="form-control flatpickr-basic flatpickr-input active" name="f[tanggal_ditetapkan]" placeholder="<?= $tanggal_ditetapkan; ?>" readonly="readonly" value="<?= $tanggal_ditetapkan; ?>" >
                </div> 
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama_file">Nama File</label>
                        <input type="file" class="form-control" name="nama_file">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary float-end">Edit</button>
        </form>
    </div>
    
</div>

<script>
$('#tanggal_ditetapkan').flatpickr({
    altInput: true,
    dateFormat: "Y-m-d",
    allowInput: true,
    parseDate: (datestr, format) => {
        return moment(datestr, format, true).toDate();
    }
});
</script>