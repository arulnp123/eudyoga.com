
ALTER TABLE `states` CHANGE `state` `state_name` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE `states` ADD `status` VARCHAR(10) NULL DEFAULT NULL AFTER `updated_at`;
ALTER TABLE `cities` ADD `status` VARCHAR(10) NULL DEFAULT NULL AFTER `upload_image`;
UPDATE `user_profile` SET `first_name` = 'Kavya' WHERE `user_profile`.`id` = 16;
UPDATE `user_profile` SET `email` = 'kavya@eudyoga.com' WHERE `user_profile`.`id` = 16;
UPDATE `user_profile` SET `password` = '$2y$10$g528hGLv0wwy/L5vN80HCe/6XVDpRatmun34qupxI5L/MY0LDSc22' WHERE `user_profile`.`id` = 16;

