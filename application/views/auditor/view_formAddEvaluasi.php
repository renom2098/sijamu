<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Add Data Evaluasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>auditor/insert_dataEvaluasi" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-evaluasi">Nama Evaluasi</label>
                        <input type="text" id="nama-evaluasi" class="form-control" name="f[nama_dok_evaluasi]" placeholder="Nama Evaluasi">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="jenis-evaluasi">Jenis Evaluasi</label>
                        <input type="text" id="jenis-evaluasi" class="form-control" name="f[jenis_dok_evaluasi]" placeholder="Jenis Evaluasi">
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label" for="tanggal_ditetapkan">Tanggal Ditetapkan</label>
                    <input type="date" id="tanggal_ditetapkan" class="form-control flatpickr-basic flatpickr-input active" name="f[tanggal_ditetapkan]" placeholder="YYYY-MM-DD" readonly="readonly">
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