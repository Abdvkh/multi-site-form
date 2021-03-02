create database `lead`;

use lead;

create table if not exists `leads`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(64),
    `number` VARCHAR(15),
    `referer` TEXT,
    PRIMARY KEY (`id`)
);

