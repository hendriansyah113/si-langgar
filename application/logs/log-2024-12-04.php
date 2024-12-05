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
ERROR - 2024-12-04 08:52:49 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 111
ERROR - 2024-12-04 08:52:55 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 111
ERROR - 2024-12-04 08:53:49 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 08:53:59 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 08:56:34 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 08:58:27 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 08:58:50 --> Severity: error --> Exception: Call to undefined method stdClass::num_rows() C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 08:59:21 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 09:00:48 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:36:29 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kebaikan`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_kebaikan`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_kebaikan`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_kebaikan`.`class_id`
JOIN `tb_tipe_kebaikan` ON `tb_tipe_kebaikan`.`id` = `tb_kebaikan`.`type_id`
JOIN `tb_siswa` ON `tb_siswa`.`id` = `tb_kebaikan`.`student_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 11:36:35 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:41:04 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:41:08 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:41:32 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:41:36 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:41:53 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:41:57 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:49:45 --> Severity: Notice --> Undefined variable: data_kategori_kebaikan C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:49:45 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 116
ERROR - 2024-12-04 11:50:08 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\si-langgar\application\controllers\Kategori_kebaikan.php 117
ERROR - 2024-12-04 11:55:25 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kebaikan`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_kebaikan`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_kebaikan`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_kebaikan`.`class_id`
JOIN `tb_tipe_kebaikan` ON `tb_tipe_kebaikan`.`id` = `tb_kebaikan`.`type_id`
JOIN `tb_siswa` ON `tb_siswa`.`id` = `tb_kebaikan`.`student_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 11:57:39 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kebaikan`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_kebaikan`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_kebaikan`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_kebaikan`.`class_id`
JOIN `tb_tipe_kebaikan` ON `tb_tipe_kebaikan`.`id` = `tb_kebaikan`.`type_id`
JOIN `tb_siswa` ON `tb_siswa`.`id` = `tb_kebaikan`.`student_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 11:58:41 --> Query error: Unknown column 'tb_guru.id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kebaikan`
JOIN `tb_guru` ON `tb_guru`.`id` = `tb_kebaikan`.`teacher_id`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_kebaikan`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_kebaikan`.`class_id`
JOIN `tb_tipe_kebaikan` ON `tb_tipe_kebaikan`.`id` = `tb_kebaikan`.`type_id`
JOIN `tb_siswa` ON `tb_siswa`.`id` = `tb_kebaikan`.`student_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 11:59:41 --> Query error: Unknown column 'tb_kebaikan.type_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kebaikan`
JOIN `tb_guru` ON `tb_guru`.`nik` = `tb_kebaikan`.`nik`
JOIN `tb_wali` ON `tb_wali`.`id` = `tb_kebaikan`.`wali_id`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_kebaikan`.`class_id`
JOIN `tb_tipe_kebaikan` ON `tb_tipe_kebaikan`.`id` = `tb_kebaikan`.`type_id`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 12:00:02 --> Query error: Unknown column 'tb_siswa.id' in 'field list' - Invalid query: SELECT `tb_kebaikan`.*, `tb_siswa`.`id` as `kebaikan_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`wali_name`, `tipe_kebaikan`.`nama_kebaikan`
FROM `tb_kebaikan`
LEFT JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_kebaikan`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_kebaikan`.`wali_id`
LEFT JOIN `tb_tipe_kebaikan` `tipe_kebaikan` ON `tipe_kebaikan`.`id` = `tb_kebaikan`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_kebaikan`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 12:00:16 --> Query error: Unknown column 'kelas.wali_name' in 'field list' - Invalid query: SELECT `tb_kebaikan`.*, `tb_siswa`.`nisn` as `kebaikan_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`wali_name`, `tipe_kebaikan`.`nama_kebaikan`
FROM `tb_kebaikan`
LEFT JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_kebaikan`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_kebaikan`.`wali_id`
LEFT JOIN `tb_tipe_kebaikan` `tipe_kebaikan` ON `tipe_kebaikan`.`id` = `tb_kebaikan`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_kebaikan`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 12:00:28 --> Query error: Unknown column 'guru.id' in 'on clause' - Invalid query: SELECT `tb_kebaikan`.*, `tb_siswa`.`nisn` as `kebaikan_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_kebaikan`.`nama_kebaikan`
FROM `tb_kebaikan`
LEFT JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`id` = `tb_kebaikan`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_kebaikan`.`wali_id`
LEFT JOIN `tb_tipe_kebaikan` `tipe_kebaikan` ON `tipe_kebaikan`.`id` = `tb_kebaikan`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_kebaikan`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 12:00:39 --> Query error: Unknown column 'tb_kebaikan.teacher_id' in 'on clause' - Invalid query: SELECT `tb_kebaikan`.*, `tb_siswa`.`nisn` as `kebaikan_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_kebaikan`.`nama_kebaikan`
FROM `tb_kebaikan`
LEFT JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`nik` = `tb_kebaikan`.`teacher_id`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_kebaikan`.`wali_id`
LEFT JOIN `tb_tipe_kebaikan` `tipe_kebaikan` ON `tipe_kebaikan`.`id` = `tb_kebaikan`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_kebaikan`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 47
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 57
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 61
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 47
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 57
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 61
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 47
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 57
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 61
ERROR - 2024-12-04 12:01:17 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 47
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 57
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 61
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 47
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 57
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 61
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 47
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 56
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 57
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$point C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 61
ERROR - 2024-12-04 12:02:23 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 51
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 65
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 51
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 65
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined variable: poin C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 51
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 65
ERROR - 2024-12-04 12:02:59 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 65
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 65
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 60
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 62
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 65
ERROR - 2024-12-04 12:03:20 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:03:55 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:03:55 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 12:03:55 --> Severity: Notice --> Undefined property: stdClass::$reported_on C:\xampp\htdocs\si-langgar\application\views\admin\list-kebaikan.php 68
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:31:34 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:32:53 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\add.php 51
ERROR - 2024-12-04 15:33:28 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `tb_guru`
WHERE `id` = '43215678'
ERROR - 2024-12-04 15:34:45 --> Severity: Notice --> Trying to access array offset on value of type null C:\xampp\htdocs\si-langgar\application\controllers\Kebaikan.php 109
ERROR - 2024-12-04 15:34:45 --> Query error: Column 'wali_id' cannot be null - Invalid query: INSERT INTO `tb_kebaikan` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES ('4151', '3', '43215678', NULL, '1', 'baik', '25', '2024-12-04')
ERROR - 2024-12-04 15:35:49 --> Query error: Cannot add or update a child row: a foreign key constraint fails (`si_langgar`.`tb_kebaikan`, CONSTRAINT `fk_tb_kebaikan` FOREIGN KEY (`id`) REFERENCES `tb_tipe_kebaikan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: INSERT INTO `tb_kebaikan` (`nisn`, `class_id`, `nik`, `wali_id`, `tipe_id`, `catatan`, `poin`, `tanggal_lapor`) VALUES ('7611', '4', '43215678', '8', '3', 'm', '20', '2024-12-04')
ERROR - 2024-12-04 15:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:38:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:38:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:38:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 15:38:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:38:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 36
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$student_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 44
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 44
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$teacher_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 50
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 50
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 51
ERROR - 2024-12-04 15:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 51
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 59
ERROR - 2024-12-04 15:39:21 --> Severity: Notice --> Undefined property: stdClass::$note C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 67
ERROR - 2024-12-04 15:40:30 --> Severity: Notice --> Undefined property: stdClass::$student_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 47
ERROR - 2024-12-04 15:40:30 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:40:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:40:30 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 64
ERROR - 2024-12-04 15:40:49 --> Severity: Notice --> Undefined property: stdClass::$student_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 47
ERROR - 2024-12-04 15:40:49 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:40:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:40:49 --> Severity: Notice --> Undefined property: stdClass::$type_id C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 64
ERROR - 2024-12-04 15:41:11 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:41:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:41:16 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `tb_guru`
WHERE `id` = '87654321'
ERROR - 2024-12-04 15:42:26 --> Severity: Notice --> Undefined variable: guru C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:42:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\si-langgar\application\views\admin\kebaikan\edit.php 56
ERROR - 2024-12-04 15:43:15 --> Query error: Unknown column 'id' in 'order clause' - Invalid query: SELECT *
FROM `tb_guru`
WHERE `nik` LIKE '%%' ESCAPE '!'
ORDER BY `id` ASC
 LIMIT 20
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 45
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 48
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 45
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 48
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 45
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 48
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 45
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 48
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 45
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 48
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 45
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 48
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 63
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 74
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 77
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 82
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 63
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 74
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 77
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 82
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 63
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 74
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 77
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 82
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 63
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 74
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 77
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 82
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 63
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 74
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 77
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 82
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 63
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 74
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 77
ERROR - 2024-12-04 15:47:24 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 82
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 51
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 54
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 51
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 54
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 51
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 54
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 51
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 54
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 51
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 54
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 51
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 54
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 69
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 90
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 69
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 90
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 69
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 90
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 69
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 90
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 69
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 90
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 69
ERROR - 2024-12-04 15:47:52 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 90
ERROR - 2024-12-04 15:49:02 --> Query error: Unknown column 'teacher_name' in 'field list' - Invalid query: INSERT INTO `tb_guru` (`nik`, `teacher_name`, `subject`) VALUES ('112123', 'yosef', 'matematika')
ERROR - 2024-12-04 15:50:20 --> Query error: Unknown column 'subject' in 'field list' - Invalid query: INSERT INTO `tb_guru` (`nik`, `nama_guru`, `subject`) VALUES ('112123', 'yosef', 'matematika')
ERROR - 2024-12-04 15:50:26 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:50:26 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:50:26 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:50:26 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:50:26 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:50:26 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\list-guru.php 49
ERROR - 2024-12-04 15:50:59 --> Query error: Unknown column 'subject' in 'field list' - Invalid query: INSERT INTO `tb_guru` (`nik`, `nama_guru`, `subject`) VALUES ('112123', 'yosef', 'matematika')
ERROR - 2024-12-04 17:24:00 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `tb_guru`
WHERE `id` = '112123'
ERROR - 2024-12-04 17:24:29 --> Severity: Notice --> Undefined property: Guru::$nisn C:\xampp\htdocs\si-langgar\system\core\Model.php 73
ERROR - 2024-12-04 17:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '= '112123'' at line 3 - Invalid query: SELECT *
FROM `tb_guru`
WHERE  = '112123'
ERROR - 2024-12-04 17:25:00 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\guru\edit.php 24
ERROR - 2024-12-04 17:25:00 --> Severity: Notice --> Undefined property: stdClass::$subject C:\xampp\htdocs\si-langgar\application\views\admin\guru\edit.php 28
ERROR - 2024-12-04 17:25:40 --> Query error: Unknown column 'class_name' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kelas`
WHERE `class_name` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 17:25:50 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: UPDATE `tb_guru` SET `nik` = '334242', `teacher_name` = 'yosef', `subject` = 'matematika'
WHERE `id` = '112123'
ERROR - 2024-12-04 17:26:29 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: UPDATE `tb_guru` SET `nik` = '334242', `nama_guru` = 'yosef', `mata_pelajaran` = 'matematika'
WHERE `id` = '112123'
ERROR - 2024-12-04 17:27:51 --> Query error: Duplicate entry '334242' for key 'PRIMARY' - Invalid query: UPDATE `tb_guru` SET `nik` = '334242', `nama_guru` = 'yosef', `mata_pelajaran` = 'matematika'
WHERE `nik` = '112123'
ERROR - 2024-12-04 17:28:44 --> Query error: Unknown column 'teacher_id' in 'where clause' - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE `teacher_id` = '112123'
ERROR - 2024-12-04 17:29:22 --> Query error: Unknown column 'teacher_id' in 'where clause' - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE `teacher_id` = '112123'
ERROR - 2024-12-04 17:30:22 --> Query error: Unknown column 'teacher_id' in 'where clause' - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE `teacher_id` = '112123'
ERROR - 2024-12-04 17:31:09 --> Query error: Unknown column 'teacher_id' in 'where clause' - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE `teacher_id` IS NULL
ERROR - 2024-12-04 17:32:28 --> Severity: Notice --> Undefined property: Guru::$id_pelanggaran C:\xampp\htdocs\si-langgar\system\core\Model.php 73
ERROR - 2024-12-04 17:32:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE  IS NULL
ERROR - 2024-12-04 17:33:13 --> Severity: Notice --> Undefined property: Guru::$id_pelanggaran C:\xampp\htdocs\si-langgar\system\core\Model.php 73
ERROR - 2024-12-04 17:33:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE  IS NULL
ERROR - 2024-12-04 17:33:40 --> Severity: Notice --> Undefined property: Guru::$id_pelanggaran C:\xampp\htdocs\si-langgar\system\core\Model.php 73
ERROR - 2024-12-04 17:33:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE  IS NULL
ERROR - 2024-12-04 17:34:20 --> Severity: Notice --> Undefined property: Guru::$id_pelanggaran C:\xampp\htdocs\si-langgar\system\core\Model.php 73
ERROR - 2024-12-04 17:34:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT *
FROM `tb_pelanggaran`
WHERE  IS NULL
ERROR - 2024-12-04 17:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:35:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:35:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:37:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:37:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:37:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:37:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:37:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:39:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:39:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 17:39:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:39:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 17:39:19 --> Query error: Unknown column 'class_name' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kelas`
WHERE `class_name` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:13:22 --> Query error: Unknown column 'class_name' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kelas`
WHERE `class_name` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:14:02 --> Query error: Unknown column 'class_name' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_kelas`
WHERE `class_name` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 44
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 45
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 46
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 44
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 45
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 46
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 44
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 45
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 46
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 44
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 45
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 46
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 44
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 45
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 46
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 44
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 45
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 46
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 74
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 77
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 74
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 77
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 74
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 77
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 74
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 77
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 74
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 77
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 74
ERROR - 2024-12-04 18:14:35 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-kelas.php 77
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:16:23 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\add.php 36
ERROR - 2024-12-04 18:17:30 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\controllers\Kelas.php 84
ERROR - 2024-12-04 18:17:30 --> Query error: Unknown column 'wali_name' in 'field list' - Invalid query: INSERT INTO `tb_kelas` (`wali_name`, `nama_kelas`, `sub_class`, `total_students`) VALUES (NULL, 'XII - Busana', 'XI', '10')
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 29
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$wali_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 34
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$id C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$teacher_name C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:18:50 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 43
ERROR - 2024-12-04 18:19:36 --> Severity: Notice --> Undefined property: stdClass::$nik C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 36
ERROR - 2024-12-04 18:19:36 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 46
ERROR - 2024-12-04 18:19:54 --> Severity: Notice --> Undefined property: stdClass::$total_students C:\xampp\htdocs\si-langgar\application\views\admin\kelas\edit.php 46
ERROR - 2024-12-04 18:20:10 --> Severity: Notice --> Trying to get property 'teacher_name' of non-object C:\xampp\htdocs\si-langgar\application\controllers\Kelas.php 139
ERROR - 2024-12-04 18:20:10 --> Query error: Unknown column 'wali_name' in 'field list' - Invalid query: UPDATE `tb_kelas` SET `wali_name` = NULL, `nama_kelas` = 'XII - Mesin', `sub_class` = 'XII', `total_students` = '10'
WHERE `id` = '8'
ERROR - 2024-12-04 18:20:38 --> Severity: Notice --> Trying to get property 'nama_guru' of non-object C:\xampp\htdocs\si-langgar\application\controllers\Kelas.php 139
ERROR - 2024-12-04 18:21:08 --> Query error: Cannot delete or update a parent row: a foreign key constraint fails (`si_langgar`.`tb_pelanggaran`, CONSTRAINT `fk_tb_pelanggaran_kelas` FOREIGN KEY (`class_id`) REFERENCES `tb_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) - Invalid query: DELETE FROM `tb_kelas`
WHERE `id` = '8'
ERROR - 2024-12-04 18:22:30 --> Query error: Unknown column 'kelas.nama_wali' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`nik` = `tb_pelanggaran`.`nik`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 18:22:40 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:22:47 --> Query error: Unknown column 'kelas.nama_wali' in 'field list' - Invalid query: SELECT `tb_kebaikan`.*, `tb_siswa`.`nisn` as `kebaikan_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_kebaikan`.`nama_kebaikan`
FROM `tb_kebaikan`
LEFT JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`nik` = `tb_kebaikan`.`nik`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_kebaikan`.`wali_id`
LEFT JOIN `tb_tipe_kebaikan` `tipe_kebaikan` ON `tipe_kebaikan`.`id` = `tb_kebaikan`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_kebaikan`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 18:23:11 --> Query error: Unknown column 'kelas.nama_wali' in 'field list' - Invalid query: SELECT `tb_pelanggaran`.*, `tb_siswa`.`nisn` as `violation_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_pelanggaran`.`nama_pelanggaran`
FROM `tb_pelanggaran`
JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_pelanggaran`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`nik` = `tb_pelanggaran`.`nik`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_pelanggaran`.`wali_id`
LEFT JOIN `tb_tipe_pelanggaran` `tipe_pelanggaran` ON `tipe_pelanggaran`.`id` = `tb_pelanggaran`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_pelanggaran`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 18:24:01 --> Query error: Unknown column 'kelas.nama_wali' in 'field list' - Invalid query: SELECT `tb_kebaikan`.*, `tb_siswa`.`nisn` as `kebaikan_id`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `guru`.`nama_guru`, `wali`.`nama_wali`, `kelas`.`nama_wali`, `tipe_kebaikan`.`nama_kebaikan`
FROM `tb_kebaikan`
LEFT JOIN `tb_siswa` ON `tb_siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_siswa` `siswa` ON `siswa`.`nisn` = `tb_kebaikan`.`nisn`
LEFT JOIN `tb_kelas` `kelas` ON `siswa`.`class_id` = `kelas`.`id`
LEFT JOIN `tb_guru` `guru` ON `guru`.`nik` = `tb_kebaikan`.`nik`
LEFT JOIN `tb_wali` `wali` ON `wali`.`id` = `tb_kebaikan`.`wali_id`
LEFT JOIN `tb_tipe_kebaikan` `tipe_kebaikan` ON `tipe_kebaikan`.`id` = `tb_kebaikan`.`tipe_id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_kebaikan`.`id` DESC
 LIMIT 20
ERROR - 2024-12-04 18:24:21 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:26:36 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:27:37 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:27:50 --> Severity: Compile Error --> Cannot redeclare Siswa_model::$nisn C:\xampp\htdocs\si-langgar\application\models\Siswa_model.php 18
ERROR - 2024-12-04 18:28:09 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:28:43 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:34:12 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:34:59 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:35:56 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:36:12 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:42:03 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`nisn` ASC
 LIMIT 20
ERROR - 2024-12-04 18:43:00 --> Severity: error --> Exception: Call to undefined method Siswa_model::TotalDataSiswa() C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 20
ERROR - 2024-12-04 18:43:25 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:43:44 --> Severity: Notice --> Undefined index: total_rows C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 23
ERROR - 2024-12-04 18:43:44 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`nisn` ASC
 LIMIT 20
ERROR - 2024-12-04 18:44:35 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:44:51 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:45:04 --> Severity: error --> Exception: Call to undefined method Siswa_model::TotalDataSiswa() C:\xampp\htdocs\si-langgar\application\controllers\Siswa.php 20
ERROR - 2024-12-04 18:45:27 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:49:20 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`nisn` ASC
 LIMIT 20
ERROR - 2024-12-04 18:51:44 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa` `s`
JOIN `tb_kelas` `k` ON `k`.`id` = `s`.`class_id`
JOIN `tb_wali` `w` ON `w`.`nisn` = `s`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `s`.`nisn` ASC
 LIMIT 20
ERROR - 2024-12-04 18:52:33 --> Severity: error --> Exception: Call to a member function result() on array C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 44
ERROR - 2024-12-04 18:52:45 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:53:53 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:55:15 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:55:52 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`nisn` ASC
 LIMIT 20
ERROR - 2024-12-04 18:56:22 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:56:27 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:56:36 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:56:47 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:57:33 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 18:59:53 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:00:09 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:01:11 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:01:38 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`id` ASC
 LIMIT 20
ERROR - 2024-12-04 19:01:54 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`id` ASC
 LIMIT 20
ERROR - 2024-12-04 19:02:04 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`id` ASC
 LIMIT 20
ERROR - 2024-12-04 19:02:10 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`id` ASC
 LIMIT 20
ERROR - 2024-12-04 19:02:22 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 44
ERROR - 2024-12-04 19:02:44 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:02:45 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:02:52 --> Severity: error --> Exception: Call to a member function result() on null C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 44
ERROR - 2024-12-04 19:03:10 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 52
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 52
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 52
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 52
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 52
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 83
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 83
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 83
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 83
ERROR - 2024-12-04 19:03:35 --> Severity: Notice --> Undefined property: stdClass::$full_name C:\xampp\htdocs\si-langgar\application\views\admin\list-pengguna.php 83
ERROR - 2024-12-04 19:03:39 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:04:56 --> Query error: Unknown column 'tb_wali.student_id' in 'on clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`student_id` = `tb_siswa`.`id`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ERROR - 2024-12-04 19:05:23 --> Query error: Column 'nisn' in where clause is ambiguous - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`id` ASC
 LIMIT 20
ERROR - 2024-12-04 19:05:52 --> Query error: Unknown column 'tb_siswa.id' in 'order clause' - Invalid query: SELECT *
FROM `tb_siswa`
JOIN `tb_kelas` ON `tb_kelas`.`id` = `tb_siswa`.`class_id`
JOIN `tb_wali` ON `tb_wali`.`nisn` = `tb_siswa`.`nisn`
WHERE `tb_siswa`.`nisn` LIKE '%%' ESCAPE '!'
ORDER BY `tb_siswa`.`id` ASC
 LIMIT 20
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 47
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$class_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 48
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$address C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 49
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$parent_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 50
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 81
ERROR - 2024-12-04 19:06:07 --> Severity: Notice --> Undefined property: stdClass::$std_name C:\xampp\htdocs\si-langgar\application\views\admin\list-siswa.php 82
ERROR - 2024-12-04 19:08:12 --> Query error: Unknown column 'address' in 'field list' - Invalid query: INSERT INTO `tb_siswa` (`nisn`, `nama_siswa`, `class_id`, `address`, `phone_number`) VALUES ('999999', 'kjkk', '5', 'imimj', '88888888888')
ERROR - 2024-12-04 19:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:10:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:10:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:10:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:10:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:11:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:11:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:11:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:11:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:11:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:11:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:12:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:12:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:12:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:12:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:20:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:20:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:24:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:04 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:24:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:24:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:24:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:26:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:26:20 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:26:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:26:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:26:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:26:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:29:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:29:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:29:39 --> Query error: Duplicate entry '2147483647' for key 'PRIMARY' - Invalid query: INSERT INTO `tb_siswa` (`nisn`, `nama_siswa`, `class_id`, `alamat`, `nomor_hp`) VALUES ('9999999992', 'jakjs', '1', 'r', '082254098080')
ERROR - 2024-12-04 19:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:29:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:29:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:29:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:29:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:30:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:30:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:32:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:32:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:33:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:33:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:34:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:34:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:34:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:34:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:36:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:36:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:36:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:36:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:42:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:42:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:42:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:42:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-04 19:42:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-04 19:42:58 --> 404 Page Not Found: Assets/js
