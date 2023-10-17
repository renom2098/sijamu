<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Add Data Penetapan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>admin/insert_dataPenetapan" method="post">
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
                    <div class="mb-1">
                        <label class="form-label" for="nama_file">Nama File</label>
                        <input type="text" id="nama_file" class="form-control" name="f[nama_file]" placeholder="Nama Peraturan">
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary flaot-end">Add</button>
        </form>
    </div>
    
</div>