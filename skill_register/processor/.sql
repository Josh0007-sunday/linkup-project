----for the campus based form
CREATE TABLE `linkup`.`campusbased`
( `id` INT(200) NOT NULL AUTO_INCREMENT ,
 `campus` VARCHAR(200) NOT NULL ,
 `firstname` VARCHAR(200) NOT NULL ,
  `lastname` VARCHAR(200) NOT NULL ,
  `email` VARCHAR(200) NOT NULL ,
  `contact` INT(200) NOT NULL ,
  `suggest_campus` TEXT NOT NULL ,
  `skill` VARCHAR(200) NOT NULL , 
  `sub_skill` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id`)) ENGINE = InnoDB;

  CREATE TABLE `linkup`.`user_payment`
   ( `user_id` INT(200) NOT NULL ,
    `status` VARCHAR(200) NOT NULL , 
    `amount` INT(200) NOT NULL , 
    `trx_id` INT(200) NOT NULL , 
    `fullname` VARCHAR(200) NOT NULL ,
    `email` VARCHAR(200) NOT NULL ) ENGINE = InnoDB;
ALTER TABLE `user_payment` ADD `id` INT(200) NOT NULL FIRST;




CREATE TABLE `linkup`.`request_service` 
( `id` INT(200) NOT NULL AUTO_INCREMENT , 
`fname` VARCHAR(200) NOT NULL ,
 `lname` VARCHAR(200) NOT NULL ,
  `email` VARCHAR(200) NOT NULL , 
  `contact` INT(200) NOT NULL , 
  `suggest_campus` TEXT NOT NULL , 
  `skill` VARCHAR(200) NOT NULL , 
  `sub_skill` VARCHAR(200) NOT NULL ,
   PRIMARY KEY (`id`)) ENGINE = InnoDB;

   ALTER TABLE `request_service` ADD `campus` VARCHAR(200) NOT NULL AFTER `id`;