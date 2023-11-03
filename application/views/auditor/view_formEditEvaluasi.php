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
        <h4 class="modal-title" id="addModalLabel">Edit Data Penetapan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>auditor/update_dataEvaluasi" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" value="<?= $id; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-evaluasi">Nama Evaluasi</label>
                        <input type="text" id="nama-evaluasi" class="form-control" name="f[nama_dok_evaluasi]" placeholder="Nama Evaluasi" value="<?= $nama_dok_evaluasi; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="jenis-evaluasi">Jenis Evaluasi</label>
                        <input type="text" id="jenis-evaluasi" class="form-control" name="f[jenis_dok_evaluasi]" placeholder="Jenis Evaluasi" value="<?= $jenis_dok_evaluasi; ?>">
                    </div>
                </div>

                <div class="col-12">
                  <div class="mb-1">
                    <label for="horizontal-fakultas-input" class="col-sm-3 col-form-label">Fakultas</label>
                    <?php
                        $options = array('' => '===Pilih Fakultas===',);
                        foreach ($data_fakultas->result() as $fk) {
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
                        foreach ($data_prodi->result() as $pr) {
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
                        <input type="text" id="tautan-excel" class="form-control" name="f[tautan_excel]" placeholder="Tautan Excel" value="<?= $tautan_excel; ?>">
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