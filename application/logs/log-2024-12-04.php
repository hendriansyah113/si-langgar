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
