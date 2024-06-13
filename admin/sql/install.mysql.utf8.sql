CREATE TABLE IF NOT EXISTS `#__planets` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `asset_id` INT(10) UNSIGNED NOT NULL DEFAULT 0,
    `title` VARCHAR(255),
    `alias` VARCHAR(400),
    `description` MEDIUMTEXT,
    `published` TINYINT(4),
    `image` VARCHAR(1024),
    `params` MEDIUMTEXT,
    `ordering` INT(11),
    `access` INT(10) UNSIGNED,
    `created` DATETIME,
    `created_by` INT(10) UNSIGNED,
    `modified` DATETIME,
    `modified_by` INT(10) UNSIGNED,
    `publish_up` DATETIME,
    `publish_down` DATETIME,
    `hits` INT(10) UNSIGNED,
    `language` CHAR(7),
    `note` VARCHAR(255),
    PRIMARY KEY (`id`)
)
    ENGINE=InnoDB
    DEFAULT CHARSET=utf8mb4
    DEFAULT COLLATE=utf8mb4_unicode_ci;