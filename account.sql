-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table accounts.admissions
CREATE TABLE IF NOT EXISTS `admissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `semester_id` int(10) unsigned NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admissions_student_id_foreign` (`student_id`),
  KEY `admissions_semester_id_foreign` (`semester_id`),
  KEY `admissions_user_id_foreign` (`user_id`),
  CONSTRAINT `admissions_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  CONSTRAINT `admissions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `admissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.admissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `admissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admissions` ENABLE KEYS */;

-- Dumping structure for table accounts.fines
CREATE TABLE IF NOT EXISTS `fines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` int(10) unsigned NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fines_transaction_id_foreign` (`transaction_id`),
  CONSTRAINT `fines_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.fines: ~0 rows (approximately)
/*!40000 ALTER TABLE `fines` DISABLE KEYS */;
/*!40000 ALTER TABLE `fines` ENABLE KEYS */;

-- Dumping structure for table accounts.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.migrations: ~18 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_10_19_041745_create_technologies_table', 1),
	(4, '2019_10_19_041746_create_months_table', 1),
	(5, '2019_10_19_041903_create_sessions_table', 1),
	(6, '2019_10_19_041925_create_semesters_table', 1),
	(7, '2019_10_19_042249_create_waivers_table', 1),
	(8, '2019_10_19_042413_create_payment_schemas_table', 1),
	(9, '2019_10_19_042417_create_payment_children_table', 1),
	(10, '2019_10_19_042551_create_students_table', 1),
	(11, '2019_10_19_042750_create_admissions_table', 1),
	(12, '2019_10_19_042811_create_payables_table', 1),
	(13, '2019_10_20_090800_create_transactions_table', 1),
	(14, '2019_10_20_090838_create_fines_table', 1),
	(15, '2019_10_22_074057_create_tution_fees_table', 1),
	(16, '2019_10_24_085139_entrust_setup_tables', 1),
	(17, '2019_10_27_101027_create_student_waivers_table', 1),
	(18, '2019_11_03_083903_add_mobile_to_students', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table accounts.months
CREATE TABLE IF NOT EXISTS `months` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.months: ~0 rows (approximately)
/*!40000 ALTER TABLE `months` DISABLE KEYS */;
/*!40000 ALTER TABLE `months` ENABLE KEYS */;

-- Dumping structure for table accounts.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table accounts.payables
CREATE TABLE IF NOT EXISTS `payables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `technology_id` int(10) unsigned NOT NULL,
  `semester_id` int(10) unsigned NOT NULL,
  `paymentschema_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payables_student_id_foreign` (`student_id`),
  KEY `payables_technology_id_foreign` (`technology_id`),
  KEY `payables_semester_id_foreign` (`semester_id`),
  KEY `payables_paymentschema_id_foreign` (`paymentschema_id`),
  KEY `payables_user_id_foreign` (`user_id`),
  CONSTRAINT `payables_paymentschema_id_foreign` FOREIGN KEY (`paymentschema_id`) REFERENCES `payment_schemas` (`id`),
  CONSTRAINT `payables_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  CONSTRAINT `payables_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `payables_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`),
  CONSTRAINT `payables_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.payables: ~0 rows (approximately)
/*!40000 ALTER TABLE `payables` DISABLE KEYS */;
/*!40000 ALTER TABLE `payables` ENABLE KEYS */;

-- Dumping structure for table accounts.payment_children
CREATE TABLE IF NOT EXISTS `payment_children` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `payment_schema_id` int(10) unsigned NOT NULL,
  `value` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_children_payment_schema_id_foreign` (`payment_schema_id`),
  CONSTRAINT `payment_children_payment_schema_id_foreign` FOREIGN KEY (`payment_schema_id`) REFERENCES `payment_schemas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.payment_children: ~0 rows (approximately)
/*!40000 ALTER TABLE `payment_children` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_children` ENABLE KEYS */;

-- Dumping structure for table accounts.payment_schemas
CREATE TABLE IF NOT EXISTS `payment_schemas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.payment_schemas: ~26 rows (approximately)
/*!40000 ALTER TABLE `payment_schemas` DISABLE KEYS */;
INSERT INTO `payment_schemas` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
	(1, 'Admission Form Fee', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(2, 'Admission Fee', 13200, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(3, 'Exam Fee', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(4, 'Form fill Up', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(5, 'Supple Form fill Up', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(6, 'Pr actical', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(7, 'Extra Curricular Activities fee', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(8, 'In ternship', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(9, 'Dissertation', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(10, 'Industrial Tour Fee', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(11, 'Membership', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(12, 'Convocation', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(13, 'Short Course Fee', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(14, 'Certificate', 200, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(15, 'Transcript', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(16, 'Recommendation', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(17, 'Testimonial', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(18, 'Course complete Certificate', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(19, 'ID Re-issue', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(20, 'BRC Book Reading Competition', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(21, 'Registration Fee', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(22, 'Late Fee: Tution', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(23, 'Tution Fee', 1500, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(24, 'Semester', 9500, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(25, 'Form fill Up', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(26, 'Attendance', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05');
/*!40000 ALTER TABLE `payment_schemas` ENABLE KEYS */;

-- Dumping structure for table accounts.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table accounts.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.permission_role: ~0 rows (approximately)
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;

-- Dumping structure for table accounts.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'super-admin', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table accounts.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.role_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Dumping structure for table accounts.semesters
CREATE TABLE IF NOT EXISTS `semesters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.semesters: ~7 rows (approximately)
/*!40000 ALTER TABLE `semesters` DISABLE KEYS */;
INSERT INTO `semesters` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, '1st', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(2, '2nd', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(3, '3rd', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(4, '4th', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(5, '5th', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(6, '6th', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(7, '7th', '2019-11-12 11:43:05', '2019-11-12 11:43:05');
/*!40000 ALTER TABLE `semesters` ENABLE KEYS */;

-- Dumping structure for table accounts.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.sessions: ~7 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `session_year`, `created_at`, `updated_at`) VALUES
	(1, '2013-14', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(2, '2014-15', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(3, '2015-16', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(4, '2016-17', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(5, '2017-18', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(6, '2018-19', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(7, '2019-20', '2019-11-12 11:43:05', '2019-11-12 11:43:05');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table accounts.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` int(11) NOT NULL,
  `registration_no` int(11) DEFAULT NULL,
  `technology_id` int(10) unsigned NOT NULL,
  `session_id` int(10) unsigned NOT NULL,
  `semester_id` int(10) unsigned NOT NULL,
  `mobile_no` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_mobile_no_unique` (`mobile_no`),
  KEY `students_technology_id_foreign` (`technology_id`),
  KEY `students_session_id_foreign` (`session_id`),
  KEY `students_semester_id_foreign` (`semester_id`),
  KEY `students_user_id_foreign` (`user_id`),
  CONSTRAINT `students_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  CONSTRAINT `students_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`),
  CONSTRAINT `students_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`),
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.students: ~0 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`id`, `name`, `roll`, `registration_no`, `technology_id`, `session_id`, `semester_id`, `mobile_no`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'arman', 800378, 84715, 1, 1, 1, NULL, 1, 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Dumping structure for table accounts.student_waivers
CREATE TABLE IF NOT EXISTS `student_waivers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `waiver_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student_waivers_student_id_foreign` (`student_id`),
  KEY `student_waivers_waiver_id_foreign` (`waiver_id`),
  CONSTRAINT `student_waivers_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `student_waivers_waiver_id_foreign` FOREIGN KEY (`waiver_id`) REFERENCES `waivers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.student_waivers: ~0 rows (approximately)
/*!40000 ALTER TABLE `student_waivers` DISABLE KEYS */;
/*!40000 ALTER TABLE `student_waivers` ENABLE KEYS */;

-- Dumping structure for table accounts.technologies
CREATE TABLE IF NOT EXISTS `technologies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.technologies: ~11 rows (approximately)
/*!40000 ALTER TABLE `technologies` DISABLE KEYS */;
INSERT INTO `technologies` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
	(1, 687, 'Architecture & Interior Design', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(2, 666, 'Computer', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(3, 664, 'Civil', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(4, 667, 'Electrical', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(5, 19, 'Textile', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(6, 694, 'Telecomunication', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(7, 49, 'GDPM', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(8, 11, 'Tourism & Hospitality', '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(9, 123, 'hello', '2019-11-24 09:03:18', '2019-11-24 09:03:18'),
	(10, 123, 'hello', '2019-11-24 09:06:10', '2019-11-24 09:06:10'),
	(11, 123, 'hello', '2019-11-24 09:16:27', '2019-11-24 09:16:27');
/*!40000 ALTER TABLE `technologies` ENABLE KEYS */;

-- Dumping structure for table accounts.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `technology_id` int(10) unsigned NOT NULL,
  `semester_id` int(10) unsigned NOT NULL,
  `paymentschema_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_student_id_foreign` (`student_id`),
  KEY `transactions_technology_id_foreign` (`technology_id`),
  KEY `transactions_semester_id_foreign` (`semester_id`),
  KEY `transactions_paymentschema_id_foreign` (`paymentschema_id`),
  KEY `transactions_user_id_foreign` (`user_id`),
  CONSTRAINT `transactions_paymentschema_id_foreign` FOREIGN KEY (`paymentschema_id`) REFERENCES `payment_schemas` (`id`),
  CONSTRAINT `transactions_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`),
  CONSTRAINT `transactions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `transactions_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`),
  CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.transactions: ~0 rows (approximately)
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;

-- Dumping structure for table accounts.tution_fees
CREATE TABLE IF NOT EXISTS `tution_fees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` int(10) unsigned NOT NULL,
  `month` json DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tution_fees_transaction_id_foreign` (`transaction_id`),
  CONSTRAINT `tution_fees_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.tution_fees: ~0 rows (approximately)
/*!40000 ALTER TABLE `tution_fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `tution_fees` ENABLE KEYS */;

-- Dumping structure for table accounts.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'ad', 'ad@bsdi-bd.org', NULL, '$2y$10$ZtT50Z6Is7xxyukEg/Jl9ezu9THvuUM4/i//0NdPUO4bQ/r9RiyNW', NULL, '2019-11-12 11:41:42', '2019-11-12 11:41:42'),
	(2, 'AS8GrZqVSG', 'DVYHIdWwVi@gmail.com', NULL, '$2y$10$9PCLIyaZYW/Ec8.k9NxIq.7iyIRJngVBHhD30ERAvY.SW8KXonKf2', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table accounts.waivers
CREATE TABLE IF NOT EXISTS `waivers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table accounts.waivers: ~4 rows (approximately)
/*!40000 ALTER TABLE `waivers` DISABLE KEYS */;
INSERT INTO `waivers` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
	(1, 'jago foundation', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(2, 'Female', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(3, 'Shibling', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05'),
	(4, 'Others', 0, '2019-11-12 11:43:05', '2019-11-12 11:43:05');
/*!40000 ALTER TABLE `waivers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
