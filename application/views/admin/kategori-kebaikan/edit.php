<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
          <a href="<?php echo base_url('kategori-kebaikan') ?>" class="btn btn-xl btn-success" style="margin-bottom: 15px; float: right;"><i class="fa fa-arrow-left"></i> Kembali</a>
          <h3 class="mb-0"><?php echo $page ?></h3>
          <?php echo form_open('kategori-kebaikan/edit/'.$this->uri->segment('3').'') ?>  
            <div class="form-group">
                <label class="control-label">Nama Kebaikan</label>
                <textarea type="text" class="form-control" rows="5" placeholder="Nama Kebaikan" name="name" ><?php echo isset($tipe_kebaikan->nama_kebaikan) ? $tipe_kebaikan->nama_kebaikan : '' ?></textarea>
            </div>
            <div class="form-group">
                <label class="control-label">Point</label>
                <input type="number" class="form-control" placeholder="Masukkan Point" name="point" value="<?php echo isset($tipe_kebaikan->poin_kebaikan) ? $tipe_kebaikan->poin_kebaikan : '' ?>">
            </div>
            <div class="form-group text-right">
                <button class="btn btn-danger" type="reset"><i class="fa fa-undo"></i> Reset</button>
                <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
