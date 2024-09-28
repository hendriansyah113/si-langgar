<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        </div>
      </div>
    </div>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="offset-md-2 col-md-8">
            <div class="card">  
                <div class="card-body">  
                    <?php 
                        $this->load->view('lib/validation_result'); 
                        $this->load->view('lib/result'); 
                    ?>
                    <a href="<?php echo base_url('kategori-kebaikan'); ?>" class="btn btn-xl btn-success mb-3 float-right">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <h3 class="mb-0"><?php echo $page; ?></h3>

                    <?php echo form_open(); ?>
                        <div class="form-group">
                            <label class="control-label">Nama Kebaikan</label>
                            <textarea class="form-control" rows="5" placeholder="Nama Kebaikan" name="name"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Poin</label>
                            <input type="number" class="form-control" placeholder="Poin" name="point">
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-danger" type="reset"><i class="fa fa-undo"></i> Reset</button>
                            <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Submit</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
