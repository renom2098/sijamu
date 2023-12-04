<?php
$id = $data->id ?? '';
$username = $data->username ?? '';
$password = $data->password ?? '';
$nama_lengkap = $data->nama_lengkap ?? '';
$level = $data->level ?? '';
$fakultas = $data->fakultas ?? '';
$prodi = $data->prodi ?? '';
$jenis = $data->jenis ?? '';
?>

<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="editModalLabel">Edit Data Pengguna</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>admin/update_dataPengguna" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" value="<?= $id; ?>">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="f[username]" placeholder="Username" value="<?= $username; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="password">Password</label>
                        <input type="text" id="password" class="form-control" name="f[password]" placeholder="Password" value="<?= $password; ?>">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-lengkap">Nama Lengkap</label>
                        <input type="text" id="nama-lengkap" class="form-control" name="f[nama_lengkap]" placeholder="Nama Lengkap" value="<?= $nama_lengkap; ?>">
                    </div>
                </div>
                <div class="col-12">
                  <div class="mb-1">
                    <label for="horizontal-level-input" class="col-sm-3 col-form-label">Level</label>
                    <?php
                        $options = array('' => '===Pilih Level===',);
                        foreach ($data_level->result() as $lv) {
                            $options[$lv->id] = $lv->nama_level;
                        }

                        $attr = array('class' => 'form-select', 'id' => 'horizontal-level-input', 'required' => 'required');
                        echo form_dropdown('f[level]', $options, $level, $attr);
                        unset($options);
                        unset($attr);
                    ?>
                  </div>
                </div>

                <div class="col-12">
                  <div class="mb-1">
                    <label for="horizontal-jenis-input" class="col-sm-3 col-form-label">Jenis</label>
                    <?php
                        $options = array('' => '===Pilih jenis===',);
                        foreach ($data_jenis->result() as $js) {
                            $options[$js->id] = $js->nama_jenis;
                        }

                        $attr = array('class' => 'form-select', 'id' => 'horizontal-jenis-input', 'required' => 'required');
                        echo form_dropdown('f[jenis]', $options, $jenis, $attr);
                        unset($options);
                        unset($attr);
                    ?>
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
                

            </div>
            <button type="submit" class="btn btn-primary float-end">Add</button>
        </form>
    </div>
    
</div>