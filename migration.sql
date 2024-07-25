
ALTER TABLE `states` CHANGE `state` `state_name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `states` ADD `status` VARCHAR(10) NULL DEFAULT NULL AFTER `updated_at`;
ALTER TABLE `cities` ADD `status` VARCHAR(10) NULL DEFAULT NULL AFTER `upload_image`;
UPDATE `user_profile` SET `first_name` = 'Kavya' WHERE `user_profile`.`id` = 16;
UPDATE `user_profile` SET `email` = 'kavya@eudyoga.com' WHERE `user_profile`.`id` = 16;
UPDATE `user_profile` SET `password` = '$2y$10$g528hGLv0wwy/L5vN80HCe/6XVDpRatmun34qupxI5L/MY0LDSc22' WHERE `user_profile`.`id` = 16;
03/07/24
alter table cities drop city_id;
alter table states drop state_id;
alter table countries drop country_id;
alter table job_types drop job_type_id;
alter table job_titles drop job_title_id;
alter table job_skills drop job_skill_id;
alter table genders drop gender_id;
alter table career_levels drop career_level_id;
alter table salary_periods drop salary_period_id;
alter table functional_areas drop functional_area_id;


select a.id,company_id,job_skill_id,a.country_id,a.state_id,a.city_id,title,b.state_name,c.city,d.industry_id from jobs a,states b,cities c,companies d where a.state_id=b.id and a.city_id=c.id limit 10;

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1,
  `is_default` int(11) DEFAULT 0,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `sort_order` int(11) NOT NULL DEFAULT 9999,
  `lang` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'en',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB;

INSERT INTO `states` (`id`, `state_name`, `country_id`, `is_default`, `is_active`, `sort_order`, `lang`, `created_at`, `updated_at`, `status`) VALUES
(1, 'ANDHRA PRADESH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:43', NULL),
(2, 'ASSAM', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:28', NULL),
(3, 'ARUNACHAL PRADESH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:33', NULL),
(4, 'BIHAR', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:37', NULL),
(5, 'GUJRAT', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:40', NULL),
(6, 'HARYANA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:45', NULL),
(7, 'HIMACHAL PRADESH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:53', NULL),
(8, 'JAMMU & KASHMIR', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:58', NULL),
(9, 'KARNATAKA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:03', NULL),
(10, 'KERALA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:07', NULL),
(11, 'MADHYA PRADESH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:11', NULL),
(12, 'MAHARASHTRA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:15', NULL),
(13, 'MANIPUR', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:24', NULL),
(14, 'MEGHALAYA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:20', NULL),
(15, 'MIZORAM', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:28', NULL),
(16, 'NAGALAND', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:32', NULL),
(17, 'ORISSA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:37', NULL),
(18, 'PUNJAB', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:41', NULL),
(19, 'RAJASTHAN', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:45', NULL),
(20, 'SIKKIM', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:49', NULL),
(21, 'TAMIL NADU', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:52', NULL),
(22, 'TRIPURA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:00', NULL),
(23, 'UTTAR PRADESH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:08', NULL),
(24, 'WEST BENGAL', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:11', NULL),
(25, 'DELHI', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:10:16', NULL),
(26, 'GOA', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:48', NULL),
(27, 'PONDICHERY', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:54', NULL),
(28, 'LAKSHDWEEP', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:11:58', NULL),
(29, 'DAMAN & DIU', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:12:07', NULL),
(30, 'DADRA & NAGAR', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:12:16', NULL),
(31, 'CHANDIGARH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:12:21', NULL),
(32, 'ANDAMAN & NICOBAR', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:12:27', NULL),
(33, 'UTTARANCHAL', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:12:31', NULL),
(34, 'JHARKHAND', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:12:52', NULL),
(35, 'CHATTISGARH', 101, 0, 1, 9999, 'en', '2024-04-03 07:36:34', '2024-04-03 09:09:21', NULL);

alter table jobs add

ALTER TABLE `companies` CHANGE `state_id` `state_id` VARCHAR(100) NULL DEFAULT NULL;
ALTER TABLE `companies` CHANGE `country_id` `country_id` VARCHAR(100) NULL DEFAULT NULL;
ALTER TABLE `companies` CHANGE `city_id` `city_id` VARCHAR(100) NULL DEFAULT NULL;
ALTER TABLE `companies` CHANGE `ownership_type_id` `ownership_type_id` VARCHAR(100) NULL DEFAULT NULL;
ALTER TABLE `companies` CHANGE `industry_id` `industry_id` VARCHAR(100) NULL DEFAULT NULL;

ALTER TABLE `companies` CHANGE `package_start_date` `package_start_date` DATE NULL DEFAULT NULL;
ALTER TABLE `companies` CHANGE `package_end_date` `package_end_date` DATE NULL DEFAULT NULL;

alter table nationality drop nationality_id;
alter table marital_statuses drop marital_status_id;
alter table job_experiences drop job_experience_id;
alter table industries drop industry_id;

24/06/2024

ALTER TABLE `companies` ADD `hr_name` VARCHAR(50) NULL DEFAULT NULL AFTER `c_name`;

alter table cities drop state_id;
ALTER TABLE `cities` ADD `state_id` int(10) NULL DEFAULT NULL AFTER `id`;

alter table job_shifts drop job_shift_id;

10/07/2024
alter table companies modify country_id int DEFAULT 0;
alter table companies modify state_id int DEFAULT 0;
alter table companies modify city_id int DEFAULT 0;

