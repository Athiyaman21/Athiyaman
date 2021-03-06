CREATE TABLE `registration`.`stdtable` (
  `id` INT(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `std_id` INT(6) NOT NULL,
  `std_name` VARCHAR(20) NOT NULL,
  `std_age` INT(6) NOT NULL,
  `std_gender` VARCHAR(20) NOT NULL,
  `std_num` INT(20) NOT NULL,
  `std_street` VARCHAR(30) NOT NULL,
  `std_city` VARCHAR(20) NOT NULL,
  `std_country` VARCHAR(20) NOT NULL,
  `std_poastal` INT(10) NOT NULL,
  `std_dept` VARCHAR(20) NOT NULL,
  `std_semester` INT(6) NOT NULL,
  `std_major` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`));