<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
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
                    <a href="<?php echo base_url() ?>pelanggaran/tambah" class="btn btn-xl btn-success"
                        style="margin-bottom: 15px; float: right;"><i class="fa fa-plus-square"></i> Input
                        Pelanggaran</a>
                    <?php endif; ?>
                    <h3 class="mb-0"><?php echo $page ?></h3>
                    <form method="get" action="<?php echo base_url() ?>pelanggaran/index">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari NISN Siswa..."
                                        name="search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>NISN</th>
                                    <th>Dilaporkan oleh</th>
                                    <th>Wali Murid</th>
                                    <th>Tipe Pelanggaran</th>
                                    <th>Catatan</th>
                                    <th>Poin Yang Didapatkan</th>
                                    <th>Tanggal Pelanggaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($list->result() as $row) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><strong><?php echo $row->std_name ?></strong> (<?php echo $row->class_name ?>)
                                    </td>
                                    <td><?php echo $row->teacher_name ?></td>
                                    <td><?php echo $row->parent_name ?></td>
                                    <td><?php echo $row->violation_name ?></td>
                                    <td><?php echo $row->note ?></td>
                                    <td class="text-center"><span
                                            class="badge badge-pill badge-warning"><?php echo $row->poin ?></span></td>
                                    <td><?php echo $row->reported_on ?>
                                    <td align="center">
                                        <?php if (!$is_kepala_sekolah): ?>
                                        <a href="<?php echo base_url() ?>Pelanggaran/edit/<?php echo $row->id ?>"
                                            class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#modal_hapus<?php echo $row->id ?>"><i
                                                class="fas fa-trash-alt text-white"></i></a>
                                        <?php endif; ?>
                                        <a href="<?php echo base_url() ?>pelanggaran/print-pelanggaran/<?php echo $row->id ?>"
                                            class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <?php echo $pagination ?> <small>Total Data : <?php echo $total_rows ?></small>
            </div>
            <button class="btn btn-secondary mt-3" onclick="printTable()"><i class="fas fa-print"></i> Cetak
                Data</button>
        </div>
    </div>

    <script>
    function printTable() {
        var printContents = document.getElementById('dataTable').outerHTML;
        var originalContents = document.body.innerHTML;

        // Menambahkan judul di atas tabel dengan teks di tengah
        var printHeader = '<h1 style="text-align: center;">Data Semua Siswa yang Melakukan Pelanggaran</h1><br>';

        // Membuat elemen untuk mencetak tanpa kolom Aksi
        var printContent = '<div>' + printHeader + '<table class="table table-flush">' +
            '<thead class="thead-light"><tr>' +
            '<th>No</th><th>Nama Siswa</th><th>Dinilai oleh</th><th>Wali Kelas</th>' +
            '<th>Tipe Kebaikan</th><th>Catatan</th><th>Poin Yang Didapatkan</th>' +
            '<th>Tanggal Penilaian</th></tr></thead><tbody>';

        // Mengambil data dari tabel asli tanpa kolom Aksi
        var rows = document.querySelectorAll('#dataTable tbody tr');
        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td');
            printContent += '<tr>';
            for (var i = 0; i < cells.length - 1; i++) { // -1 to skip the last cell (Aksi)
                printContent += '<td>' + cells[i].innerHTML + '</td>';
            }
            printContent += '</tr>';
        });

        printContent += '</tbody></table></div>';

        // Ganti konten body dengan tabel yang akan dicetak
        document.body.innerHTML = printContent;

        // Cetak halaman
        window.print();

        // Kembalikan konten asli setelah mencetak
        document.body.innerHTML = originalContents;
    }
    </script>