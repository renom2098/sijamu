<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Add Data Penetapan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>auditor/insert_dataPenetapan" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-peraturan">Nama Peraturan</label>
                        <input type="text" id="nama-peraturan" class="form-control" name="f[nama_peraturan]" placeholder="Nama Peraturan">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="jenis-peraturan">Jenis Peraturan</label>
                        <input type="text" id="jenis-peraturan" class="form-control" name="f[jenis_peraturan]" placeholder="Jenis Peraturan">
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label" for="tanggal_ditetapkan">Tanggal Ditetapkan</label>
                    <input type="date" id="tanggal_ditetapkan" class="form-control flatpickr-basic flatpickr-input active" name="f[tanggal_ditetapkan]" placeholder="YYYY-MM-DD" readonly="readonly">
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan">Tautan File</label>
                        <input type="text" id="tautan" class="form-control" name="f[tautan]" placeholder="Link Tautan">
                    </div>
                </div> 
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama_file">Nama File</label>
                        <input type="file" class="form-control" name="nama_file">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary float-end">Add</button>
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