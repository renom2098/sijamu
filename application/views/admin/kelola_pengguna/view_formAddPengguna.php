<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title" id="addModalLabel">Add Data Pengguna</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <form class="form form-vertical" action="<?= base_url(); ?>admin/insert_dataPengguna" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="f[username]" placeholder="Username">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="password">Password</label>
                        <input type="text" id="password" class="form-control" name="f[password]" placeholder="Password">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-1">
                        <label class="form-label" for="nama-lengkap">Nama Lengkap</label>
                        <input type="text" id="nama-lengkap" class="form-control" name="f[nama_lengkap]" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="col-12">
                  <div class="mb-1">
                    <label for="horizontal-level-input" class="col-sm-3 col-form-label">Level</label>
                    <?php
                        $options = array('' => '===Pilih Level===',);
                        foreach ($level->result() as $lv) {
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
                        $options = array('' => '===Pilih Jenis===',);
                        foreach ($jenis->result() as $js) {
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
                

            </div>
            <button type="submit" class="btn btn-primary float-end">Add</button>
        </form>
    </div>
    
</div>