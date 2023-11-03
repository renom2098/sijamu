<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Add Data Evaluasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>admin/insert_dataEvaluasi" method="post" enctype="multipart/form-data">
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
                  <div class="mb-1">
                    <label for="horizontal-fakultas-input" class="col-sm-3 col-form-label">Fakultas</label>
                    <?php
                        $options = array('' => '===Pilih Fakultas===',);
                        foreach ($fakultas->result() as $fk) {
                            $options[$fk->id] = $fk->nama_fakultas;
                        }

                        $attr = array('class' => 'form-select', 'id' => 'horizontal-fakultas-input', 'required' => 'required');
                        echo form_dropdown('f[fakultas]', $options, $fakultas, $attr);
                        unset($options);
                        unset($attr);
                    ?>
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-1">
                    <label for="horizontal-prodi-input" class="col-sm-3 col-form-label">Prodi</label>
                    <?php
                        $options = array('' => '===Pilih Prodi===',);
                        foreach ($prodi->result() as $pr) {
                            $options[$pr->id] = $pr->nama_prodi;
                        }

                        $attr = array('class' => 'form-select', 'id' => 'horizontal-prodi-input', 'required' => 'required');
                        echo form_dropdown('f[prodi]', $options, $prodi, $attr);
                        unset($options);
                        unset($attr);
                    ?>
                  </div>
                </div>

                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="tautan-excel">Tautan Excel</label>
                        <input type="text" id="tautan-excel" class="form-control" name="f[tautan_excel]" placeholder="Tautan Excel">
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