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
ERROR - 2024-12-04 06:56:44 --> Query error: Unknown column 'tb_pelanggaran.type_id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.`id`, count(tb_pelanggaran.id) as total_pelanggaran, `tb_pelanggaran`.`type_id`, `tb_tipe_pelanggaran`.`violation_name`
FROM `tb_pelanggaran`
JOIN `tb_tipe_pelanggaran` ON `tb_pelanggaran`.`type_id` = `tb_tipe_pelanggaran`.`id`
GROUP BY `tb_pelanggaran`.`type_id`
ORDER BY `total_pelanggaran` DESC
 LIMIT 5
ERROR - 2024-12-04 06:57:07 --> Query error: Unknown column 'tb_tipe_pelanggaran.violation_name' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.`id`, count(tb_pelanggaran.id) as total_pelanggaran, `tb_pelanggaran`.`tipe_id`, `tb_tipe_pelanggaran`.`violation_name`
FROM `tb_pelanggaran`
JOIN `tb_tipe_pelanggaran` ON `tb_pelanggaran`.`tipe_id` = `tb_tipe_pelanggaran`.`id`
GROUP BY `tb_pelanggaran`.`tipe_id`
ORDER BY `total_pelanggaran` DESC
 LIMIT 5
ERROR - 2024-12-04 06:57:22 --> Query error: Unknown column 'tb_pelanggaran.point' in 'field list' - Invalid query: SELECT SUM(tb_pelanggaran.point) as total_poin, count(tb_pelanggaran.id) as total_pelanggaran, `tb_pelanggaran`.`tipe_id`, `tb_siswa`.`std_name`, `tb_siswa`.`nisn`
FROM `tb_pelanggaran`
LEFT JOIN `tb_siswa` ON `tb_pelanggaran`.`student_id` = `tb_siswa`.`id`
GROUP BY `tb_pelanggaran`.`student_id`
ORDER BY `total_poin` DESC
 LIMIT 5
ERROR - 2024-12-04 06:57:38 --> Query error: Unknown column 'tb_siswa.std_name' in 'field list' - Invalid query: SELECT SUM(tb_pelanggaran.poin) as total_poin, count(tb_pelanggaran.id) as total_pelanggaran, `tb_pelanggaran`.`tipe_id`, `tb_siswa`.`std_name`, `tb_siswa`.`nisn`
FROM `tb_pelanggaran`
LEFT JOIN `tb_siswa` ON `tb_pelanggaran`.`student_id` = `tb_siswa`.`id`
GROUP BY `tb_pelanggaran`.`student_id`
ORDER BY `total_poin` DESC
 LIMIT 5
ERROR - 2024-12-04 06:57:49 --> Query error: Unknown column 'tb_pelanggaran.student_id' in 'on clause' - Invalid query: SELECT SUM(tb_pelanggaran.poin) as total_poin, count(tb_pelanggaran.id) as total_pelanggaran, `tb_pelanggaran`.`tipe_id`, `tb_siswa`.`nama_siswa`, `tb_siswa`.`nisn`
FROM `tb_pelanggaran`
LEFT JOIN `tb_siswa` ON `tb_pelanggaran`.`student_id` = `tb_siswa`.`id`
GROUP BY `tb_pelanggaran`.`student_id`
ORDER BY `total_poin` DESC
 LIMIT 5
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 9
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 66
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 198
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:58:12 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 9
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 66
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 198
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:37 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 9
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 66
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 198
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 06:59:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 10
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 69
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 07:00:03 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 141
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 10
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 69
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:33 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\controllers\Admin.php 82
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 10
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 69
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\search.php 39
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 42
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 45
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined variable: total_poin C:\xampp\htdocs\si-langgar\application\views\search.php 49
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 73
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 77
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 78
ERROR - 2024-12-04 07:00:36 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 10
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 69
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:00:44 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\dashboard.php 114
ERROR - 2024-12-04 07:01:04 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 10
ERROR - 2024-12-04 07:01:04 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 69
ERROR - 2024-12-04 07:01:38 --> Severity: Notice --> Undefined property: stdClass::$school_name C:\xampp\htdocs\si-langgar\application\views\lib\header_admin.php 69
ERROR - 2024-12-04 07:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:01:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:01:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:02:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:02:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\controllers\Admin.php 82
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\search.php 39
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 42
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 45
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined variable: total_poin C:\xampp\htdocs\si-langgar\application\views\search.php 49
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 73
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 77
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 78
ERROR - 2024-12-04 07:03:43 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:04:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:04:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\controllers\Admin.php 87
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\search.php 39
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 42
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 45
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 73
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 77
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 78
ERROR - 2024-12-04 07:06:43 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\controllers\Admin.php 87
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\search.php 39
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 42
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 45
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined variable: total_poin C:\xampp\htdocs\si-langgar\application\views\search.php 49
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 73
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 77
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 78
ERROR - 2024-12-04 07:06:51 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:07:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\search.php 39
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 42
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 45
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 73
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 77
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 78
ERROR - 2024-12-04 07:07:22 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:07:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\search.php 39
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 42
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 45
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 73
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 77
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 78
ERROR - 2024-12-04 07:07:36 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:07:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:07:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:53 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\search.php 44
ERROR - 2024-12-04 07:07:53 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\search.php 47
ERROR - 2024-12-04 07:07:53 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 75
ERROR - 2024-12-04 07:07:53 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:07:53 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 80
ERROR - 2024-12-04 07:07:53 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 81
ERROR - 2024-12-04 07:07:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:07:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:08:12 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\search.php 75
ERROR - 2024-12-04 07:08:12 --> Severity: Notice --> Trying to get property 'violation_name' of non-object C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:08:12 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 80
ERROR - 2024-12-04 07:08:12 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 81
ERROR - 2024-12-04 07:08:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:08:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:08:30 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:08:30 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 80
ERROR - 2024-12-04 07:08:30 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 81
ERROR - 2024-12-04 07:08:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 07:08:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 07:11:47 --> Severity: Notice --> Undefined property: stdClass::$nama_pelanggaaran C:\xampp\htdocs\si-langgar\application\views\search.php 79
ERROR - 2024-12-04 07:11:47 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 80
ERROR - 2024-12-04 07:11:47 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 81
ERROR - 2024-12-04 07:11:54 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\search.php 80
ERROR - 2024-12-04 07:11:54 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\search.php 81
ERROR - 2024-12-04 07:13:14 --> Query error: Unknown column 'violation_name' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_tipe_pelanggaran`
WHERE `violation_name` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 46
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 47
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:13:42 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 75
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 50
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:20 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\list-kategori-pelanggaran.php 84
ERROR - 2024-12-04 07:14:58 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\kategori-pelanggaran\edit.php 20
ERROR - 2024-12-04 07:14:58 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\kategori-pelanggaran\edit.php 24
ERROR - 2024-12-04 07:15:27 --> Severity: Notice --> Undefined property: stdClass::$get_point C:\xampp\htdocs\si-langgar\application\views\admin\kategori-pelanggaran\edit.php 27
ERROR - 2024-12-04 07:15:56 --> Query error: Unknown column 'get_point' in 'field list' - Invalid query: UPDATE `tb_tipe_pelanggaran` SET `nama_pelanggaran` = 'Buang Sampah Sembarangan', `get_point` = '4'
WHERE `id` = '8'
ERROR - 2024-12-04 07:18:11 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:18:53 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:19:26 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:19:49 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:20:13 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:20:54 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:20:57 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:23:25 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_pelanggaran`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_pelanggaran`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_pelanggaran`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_pelanggaran`.`class_id`
JOIN `tb_tipe_pelanggaran` ON `tb_tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 07:25:24 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`id` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:26:10 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:26:12 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:33:12 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:34:58 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:39:03 --> Severity: error --> Exception: Class 'CI_DB_driver' not found C:\xampp\htdocs\si-langgar\system\database\DB_query_builder.php 52
ERROR - 2024-12-04 07:39:37 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:44:22 --> Severity: Notice --> Undefined index: total_rows C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 23
ERROR - 2024-12-04 07:44:22 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:46:36 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:47:58 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:48:31 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:50:15 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:50:41 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:51:09 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`id` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 07:56:21 --> Query error: Unknown column 'kelas.class_name' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`class_name`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 08:01:01 --> Query error: Unknown column 'guru.teacher_name' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`teacher_name`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 08:01:14 --> Query error: Unknown column 'wali.parent_name' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`parent_name`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 08:01:23 --> Query error: Unknown column 'kelas.wali_name' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`wali_name`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 08:02:12 --> Query error: Unknown column 'guru.id' in 'on clause' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_pelanggaran`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:02:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:00 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 47
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 56
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 57
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 59
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 61
ERROR - 2024-12-04 08:03:48 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 51
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:04:27 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 60
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 62
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 64
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 65
ERROR - 2024-12-04 08:09:07 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:09:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-pelanggaran.php 68
ERROR - 2024-12-04 08:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:11:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:11:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:11:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:11:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:12:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 290
ERROR - 2024-12-04 08:12:48 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 290
ERROR - 2024-12-04 08:12:51 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:12:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:12:51 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:12:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:12:51 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:12:51 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 290
ERROR - 2024-12-04 08:12:55 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 290
ERROR - 2024-12-04 08:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:13:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:13:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:13:04 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 290
ERROR - 2024-12-04 08:13:04 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 290
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:13:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:13:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:13:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:50 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:50 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:50 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:53 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:13:53 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 314
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:14:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:14:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:28 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:15:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:15:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 51
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:16:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 60
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 52
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 52
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 52
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 52
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 52
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 52
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:17 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:19:39 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\add.php 61
ERROR - 2024-12-04 08:20:21 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 101
ERROR - 2024-12-04 08:20:21 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 104
ERROR - 2024-12-04 08:20:21 --> Query error: Unknown column 'note' in 'field list' - Invalid query: INSERT INTO `tb_pelanggaran` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `note`, `poin`, `reported_on`) VALUES ('2147483647', '4', '334242', NULL, '4', 'yang bener', NULL, '2024-12-04')
ERROR - 2024-12-04 08:22:33 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 101
ERROR - 2024-12-04 08:22:33 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 104
ERROR - 2024-12-04 08:22:33 --> Query error: Column 'wali_id' cannot be null - Invalid query: INSERT INTO `tb_pelanggaran` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES ('1254', '1', '334242', NULL, '1', 'bagus', NULL, '2024-12-04')
ERROR - 2024-12-04 08:25:58 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 101
ERROR - 2024-12-04 08:25:58 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 104
ERROR - 2024-12-04 08:25:58 --> Query error: Column 'wali_id' cannot be null - Invalid query: INSERT INTO `tb_pelanggaran` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES ('1254', '1', '334242', NULL, '1', 'bagus', NULL, '2024-12-04')
ERROR - 2024-12-04 08:26:13 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 101
ERROR - 2024-12-04 08:26:13 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 104
ERROR - 2024-12-04 08:26:13 --> Query error: Column 'wali_id' cannot be null - Invalid query: INSERT INTO `tb_pelanggaran` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES ('3556', '4', '12345678', NULL, '1', 'k', NULL, '2024-12-04')
ERROR - 2024-12-04 08:32:34 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 104
ERROR - 2024-12-04 08:32:34 --> Query error: Column 'poin' cannot be null - Invalid query: INSERT INTO `tb_pelanggaran` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES ('3556', '4', '334242', '4', '2', 'mm', NULL, '2024-12-04')
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 33
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 34
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 39
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 39
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 41
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 43
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 47
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 47
ERROR - 2024-12-04 08:36:04 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 53
ERROR - 2024-12-04 08:36:04 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:36:04 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:36:04 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:36:04 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 33
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 34
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 39
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 39
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 41
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 43
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 47
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 47
ERROR - 2024-12-04 08:37:36 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 53
ERROR - 2024-12-04 08:37:36 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:37:36 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:37:36 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:37:36 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:19 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 38
ERROR - 2024-12-04 08:38:19 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 44
ERROR - 2024-12-04 08:38:19 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 47
ERROR - 2024-12-04 08:38:19 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 49
ERROR - 2024-12-04 08:38:19 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:19 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:19 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:19 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:37 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 47
ERROR - 2024-12-04 08:38:37 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\print.php 49
ERROR - 2024-12-04 08:38:37 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:37 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:37 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:37 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:55 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:55 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:55 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:38:55 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 39
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$student_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 47
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 48
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$teacher_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 54
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 55
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:39:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 64
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 65
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:11 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$student_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 47
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 48
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 54
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 55
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:39:40 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 64
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 65
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:39:40 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 54
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 55
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 64
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 65
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:04 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 64
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 65
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$violation_name C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 67
ERROR - 2024-12-04 08:40:22 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:40:34 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:34 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 64
ERROR - 2024-12-04 08:40:34 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:40:46 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:40:46 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 64
ERROR - 2024-12-04 08:40:46 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:41:28 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:41:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:41:28 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 74
ERROR - 2024-12-04 08:41:39 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:41:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:42:02 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 181
ERROR - 2024-12-04 08:42:02 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 184
ERROR - 2024-12-04 08:42:02 --> Query error: Unknown column 'note' in 'field list' - Invalid query: UPDATE `tb_pelanggaran` SET `nisn` = '6272', `class_id` = '3', `nik` = '12345678', `wali_id` = NULL, `tipe_id` = '2', `note` = '..', `poin` = NULL, `reported_on` = '2024-12-04 08:42:02'
WHERE `nisn` = '25'
ERROR - 2024-12-04 08:42:50 --> Severity: Notice --> Undefined index: get_point C:\xampp\htdocs\si-langgar\application\controllers\Pelanggaran.php 184
ERROR - 2024-12-04 08:42:50 --> Query error: Unknown column 'note' in 'field list' - Invalid query: UPDATE `tb_pelanggaran` SET `nisn` = '6272', `class_id` = '3', `nik` = '12345678', `wali_id` = '7', `tipe_id` = '2', `note` = '..', `poin` = NULL, `reported_on` = '2024-12-04 08:42:50'
WHERE `nisn` = '25'
ERROR - 2024-12-04 08:44:21 --> Query error: Unknown column 'note' in 'field list' - Invalid query: UPDATE `tb_pelanggaran` SET `nisn` = '6272', `class_id` = '3', `nik` = '12345678', `wali_id` = '7', `tipe_id` = '2', `note` = '..', `poin` = '25', `reported_on` = '2024-12-04 08:44:21'
WHERE `nisn` = '25'
ERROR - 2024-12-04 08:44:32 --> Query error: Unknown column 'note' in 'field list' - Invalid query: UPDATE `tb_pelanggaran` SET `nisn` = '6272', `class_id` = '3', `nik` = '12345678', `wali_id` = '7', `tipe_id` = '2', `note` = '..', `poin` = '25', `tanggal_lapor` = '2024-12-04 08:44:32'
WHERE `nisn` = '25'
ERROR - 2024-12-04 08:45:26 --> Query error: Unknown column 'note' in 'field list' - Invalid query: UPDATE `tb_pelanggaran` SET `nisn` = '6272', `class_id` = '3', `nik` = '12345678', `wali_id` = '7', `tipe_id` = '2', `note` = '..', `poin` = '25', `tanggal_lapor` = '2024-12-04 08:45:26'
WHERE `nisn` = '25'
ERROR - 2024-12-04 08:45:49 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:45:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:46:05 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:46:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:46:15 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:46:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:47:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:47:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:47:23 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:47:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:47:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:47:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:47:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:48:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:23 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:48:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 08:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 08:50:55 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:50:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\pelanggaran\edit.php 56
ERROR - 2024-12-04 08:51:21 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:51:21 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:51:21 --> 404 Page Not Found: Assets/admin
ERROR - 2024-12-04 08:51:21 --> 404 Page Not Found: Assets/admin
