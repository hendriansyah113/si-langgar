<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-04 06:50:28 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\header.php 11
ERROR - 2024-12-04 06:50:28 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\header.php 30
ERROR - 2024-12-04 06:50:28 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\footer.php 9
ERROR - 2024-12-04 06:50:59 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\header.php 31
ERROR - 2024-12-04 06:50:59 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\footer.php 9
ERROR - 2024-12-04 06:51:14 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\footer.php 9
ERROR - 2024-12-04 06:51:38 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\footer.php 9
ERROR - 2024-12-04 06:51:55 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\auth\footer.php 9
ERROR - 2024-12-04 06:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 06:52:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 06:52:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 06:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 06:52:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 06:52:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 06:54:25 --> Query error: Unknown column 'tb_pelanggaran.type_id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.`id`, count(tb_pelanggaran.id) as total_pelanggaran, `tb_pelanggaran`.`type_id`, `tb_tipe_pelanggaran`.`violation_name`
FROM `tb_pelanggaran`
JOIN `tb_tipe_pelanggaran` ON `tb_pelanggaran`.`type_id` = `tb_tipe_pelanggaran`.`id`
GROUP BY `tb_pelanggaran`.`type_id`
ORDER BY `total_pelanggaran` DESC
 LIMIT 5
