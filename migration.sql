
ALTER TABLE `states` CHANGE `state` `state_name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `states` ADD `status` VARCHAR(10) NULL DEFAULT NULL AFTER `updated_at`;
ALTER TABLE `cities` ADD `status` VARCHAR(10) NULL DEFAULT NULL AFTER `upload_image`;
UPDATE `user_profile` SET `first_name` = 'Kavya' WHERE `user_profile`.`id` = 16;
UPDATE `user_profile` SET `email` = 'kavya@eudyoga.com' WHERE `user_profile`.`id` = 16;
UPDATE `user_profile` SET `password` = '$2y$10$g528hGLv0wwy/L5vN80HCe/6XVDpRatmun34qupxI5L/MY0LDSc22' WHERE `user_profile`.`id` = 16;

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


select a.id,company_id,job_skill_id,a.country_id,a.state_id,a.city_id,title,b.state_name,c.city from jobs a,states b,cities c where a.state_id=b.id and a.city_id=c.id limit 10;

