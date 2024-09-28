<html>
<head>
<title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png">
  <!-- Bootstrap Core Css -->
  <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom Css -->
  <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
</head>
<body onload="window.print()">
<div class="col-xs-12">
  <div style="text-align:justify; margin-top: 20px">
    <img src="<?php echo base_url(); ?>assets/img/logo.png" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;"/>
    <p style="text-align: center; line-height: 15px">
      <span style="font-size: 20px;"><strong>SMA NEGERI I KUALA PEMBUANG</strong></span><br/>
      <span style="font-size: 12px">Jl. Budi Utomo Telp. 081250165649 Kec. Seruyan Hilir 74212</span><br/>
      <span style="font-size: 12px">Website : sman1kp.sch.id dan Email : sman1kp@yahoo.com</span>
    </p>
  </div>
  <img src="<?php echo base_url(); ?>assets/img/logotut.png" style="width: 78px; height: 80px; float: right; margin: -90px 8px 4px 0; clear: both;"/>
  <div style="clear:both"></div><br/>
  <hr style="border: 2px groove #000000;margin-top: -2px; width:100%"/>
  <hr style="border: 1px groove #000000; margin-top: -19px; width:100%"/>
</div>
<div class="col-xs-12" style="text-align: center;">
  <p><strong>SURAT PERINGATAN</strong></p><br>
</div>
<div class="col-xs-12" style="text-align: justify;">
<p>Kuala Pambuang, <?php echo date('d F Y'); ?></p>
  <p>Nomor: 001/SP/SMA1S/VI/2024</p>
  <p><b>Perihal: Surat Peringatan Pelanggaran Disiplin</b></p>
  <p>Kepada Yth.,<br>Orang Tua/Wali dari<br>
    Nama Siswa: <?php echo $pelanggaran->std_name ?><br>
    Kelas: <?php echo $pelanggaran->class_name ?><br>
    Di tempat</p>

  <p>Dengan hormat,</p>

  <p>Bersama surat ini, kami sampaikan bahwa siswa atas nama <?php echo $pelanggaran->std_name ?> dari kelas <?php echo $pelanggaran->class_name ?> telah melakukan pelanggaran disiplin di sekolah yang mengakibatkan pemberian poin pelanggaran. Berdasarkan catatan kami, berikut adalah rincian pelanggaran yang dilakukan:</p>

  <p>Pelanggaran: <?php echo $pelanggaran->violation_name ?><br>
  
  Poin pelanggaran: <?php echo $pelanggaran->point ?></p>

  <p>Pelanggaran ini merupakan pelanggaran terhadap aturan dan tata tertib yang telah ditetapkan oleh sekolah. Kami sangat menyesalkan kejadian ini dan berharap agar kejadian serupa tidak terulang kembali.</p>

  <p>Sehubungan dengan hal tersebut, kami memberikan peringatan kepada <?php echo $pelanggaran->std_name ?> dan berharap agar segera memperbaiki perilakunya. Kami juga mengharapkan kerja sama dari pihak orang tua/wali untuk membimbing dan mengingatkan <?php echo $pelanggaran->std_name ?> agar dapat lebih mematuhi aturan dan tata tertib sekolah.</p>

  <p>Adapun sanksi yang diberikan berdasarkan pelanggaran ini adalah sebagai berikut:</p>



  <p>Kami berharap surat peringatan ini dapat menjadi perhatian serius bagi <?php echo $pelanggaran->std_name ?> dan orang tua/wali, sehingga dapat menciptakan lingkungan belajar yang lebih baik dan kondusif di sekolah.</p>

  <p>Demikian surat peringatan ini kami sampaikan. Atas perhatian dan kerjasamanya, kami ucapkan terima kasih.</p>

  <p style="text-align: right;">Hormat kami,</p><br><br><br>

  <p style="text-align: right;">Suriansyah S.Pd</p>

</div>

  <!-- Jquery Core Js -->
  <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core Js -->
  <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>
