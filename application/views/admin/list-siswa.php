<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
</div>
</div>
</div>
<div class="container-fluid mt--7">
<div class="row">
<!-- Table -->
<div class="col-md-12">
  <div class="card">  
    <div class="card-body">  
      <?php $this->load->view('lib/validation_result'); ?>
      <?php $this->load->view('lib/result'); ?>
      <?php if (!$is_kepala_sekolah): ?>
        <a href="<?php echo base_url() ?>siswa/tambah" class="btn btn-xl btn-success" style="margin-bottom: 15px; float: right;"><i class="fa fa-plus-square"></i> Tambah Siswa</a>
      <?php endif; ?>
      <h3 class="mb-0">Seluruh Siswa</h3>
      <form method="get" action="<?php echo base_url() ?>siswa/index">
        <div class="col-lg-12">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari NISN Siswa..." name="search">
              <div class="input-group-append">
                <button class="btn btn-primary waves-effect waves-light" type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="table-responsive">
        <table id="dataTable" class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th>NISN</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Alamat</th>
              <th>Wali Murid</th>
              <?php if (!$is_kepala_sekolah): ?>
                <th>Opsi</th>
              <?php endif; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list->result() as $row): ?>
              <tr>
                <td><?php echo $row->nisn ?></td>
                <td><?php echo $row->std_name ?></td>
                <td><?php echo $row->class_name ?></td>
                <td><?php echo $row->address ?></td>
                <td><?php echo $row->parent_name ?></td>
                <td align="center">
                  <?php if (!$is_kepala_sekolah): ?>
                    <a href="<?php echo base_url() ?>siswa/edit/<?php echo $row->id ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus<?php echo $row->id ?>"><i class="fas fa-trash-alt text-white"></i> Hapus</button>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php echo $pagination ?> <small>Total Data : <?php echo $total_rows ?></small>
    </div>
  </div>
</div>
<button class="btn btn-secondary mt-3" onclick="printTable()"><i class="fas fa-print"></i> Cetak Data</button>
</div>

<?php foreach($list->result() as $row): ?>  
<div class="modal fade" id="modal_hapus<?php echo $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel"><i class="fa fa-trash-alt"></i> Hapus Data</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form-horizontal" method="post" action="<?php echo base_url()?>siswa/hapus">
        <div class="modal-body">
          <span>Anda yakin mau menghapus data dari <b><?php echo $row->std_name ?></b> ??</span>
          <p class="small">1.Semua data yang berhubungan dengan <b><?php echo $row->std_name ?></b> ikut terhapus</p>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="id" value="<?php echo $row->id ?>">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
          <button class="btn btn-danger">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<script>
    function printTable() {
        var printContents = document.getElementById('dataTable').outerHTML;
        var originalContents = document.body.innerHTML;
        
        // Adding a title above the table with text centered
        var printHeader = '<h1 style="text-align: center;">DATA SEMUA SISWA SMA NEGERI 1 KUALA PAMBUANG</h1><br>';
        
        // Creating a print-friendly element without the Action column
        var printContent = '<div>' + printHeader + '<table class="table table-flush">' + 
                           '<thead class="thead-light"><tr>' +
                           '<th>NISN</th><th>Nama</th><th>Kelas</th><th>Alamat</th>' +
                           '<th>Wali Murid</th></tr></thead><tbody>';

        // Fetching data from the original table excluding the Action column
        var rows = document.querySelectorAll('#dataTable tbody tr');
        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td');
            printContent += '<tr>';
            for (var i = 0; i < cells.length - 1; i++) { // -1 to skip the last cell (Action)
                printContent += '<td>' + cells[i].innerHTML + '</td>';
            }
            printContent += '</tr>';
        });
        
        printContent += '</tbody></table></div>';

        // Replace body content with the table to be printed
        document.body.innerHTML = printContent;

        // Print the page
        window.print();

        // Restore original content after printing
        document.body.innerHTML = originalContents;
    }
</script>
