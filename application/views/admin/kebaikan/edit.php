<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
</div>
</div>
</div>
<div class="container-fluid mt--7">
    <div class="row">
        <!-- Table -->
        <div class="offset-md-2 col-md-8">
            <div class="card">
                <div class="card-body">
                    <?php $this->load->view('lib/validation_result'); ?>
                    <?php $this->load->view('lib/result'); ?>
                    <a href="<?php echo base_url('dashboard/kebaikan') ?>" class="btn btn-xl btn-success"
                        style="margin-bottom: 15px; float: right;"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <h3 class="mb-0"><?php echo $page ?></h3>
                    <?php echo form_open('kebaikan/edit/' . $this->uri->segment('3') . '') ?>
                    <?php
          $sub_class = db_query('tb_kelas', array('id' => $kebaikan->class_id));
          ?>
                    <div class="form-group">
                        <div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="col-form-label">Kategori Kelas</label>
                                    <select class="form-control" name="sub_kelas" id="sub_kelas">
                                        <option value="<?php echo $sub_class['rows']['sub_class'] ?>" selected>
                                            <?php echo $sub_class['rows']['sub_class'] ?></option>
                                        <option value="X">10</option>
                                        <option value="XI">11</option>
                                        <option value="XII">12</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label">Kelas</label>
                                    <select class="form-control" name="kelas" id="kelas">
                                        <option value="<?php echo $kebaikan->class_id ?>" selected>
                                            <?php echo $kebaikan->nama_kelas ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Siswa</label>
                            <select name="siswa" class="form-control select2" id="siswa">
                                <option value="<?php echo $kebaikan->nisn ?>" selected>
                                    <?php echo $kebaikan->nama_siswa ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Di Nilai Oleh</label>
                            <select name="pelapor" class="form-control select2">
                                <option value="<?php echo $kebaikan->nik ?>" selected><?php echo $kebaikan->nama_guru ?>
                                </option>
                                <?php foreach ($guru as $row) : ?>
                                <option value="<?php echo $row->nik ?>"><?php echo $row->nama_guru ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kategori Kebaikan</label>
                            <select name="kategori" class="form-control select2">
                                <option value="<?php echo $kebaikan->tipe_id ?>" selected>
                                    <?php echo $kebaikan->nama_kebaikan ?></option>
                                <?php foreach ($kategori as $row) : ?>
                                <option value="<?php echo $row->id ?>"><?php echo $row->nama_kebaikan ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Catatan</label>
                            <textarea type="text" class="form-control" rows="5" placeholder="Catatan"
                                name="catatan"><?php echo $kebaikan->catatan ?></textarea>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-danger" type="reset"><i class="fa fa-undo"></i> Reset</button>
                            <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Simpan
                                Data</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#sub_kelas').change(function() {
            var sub_kelas = $('#sub_kelas').val();
            $.ajax({
                method: "POST",
                data: {
                    'sub_kelas': sub_kelas
                },
                url: "<?php echo base_url() ?>siswa/ajax-list-kelas",
                dataType: "html",
                success: function(data) {
                    $('#kelas').html(data);
                }
            });
        });
        $('#kelas').change(function() {
            var kelas = $('#kelas').val();
            $.ajax({
                method: "POST",
                data: {
                    'kelas': kelas
                },
                url: "<?php echo base_url() ?>siswa/ajax-list-siswa",
                dataType: "html",
                success: function(data) {
                    $('#siswa').html(data);
                }
            });
        });
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('.select2').select2();
        $('.selectguru').select2();
    });
    </script>