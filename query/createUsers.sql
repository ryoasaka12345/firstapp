USE `ci_firstapp`;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `first_name` varchar(50) DEFAULT NULL,
    `last_name` varchar(50) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL,
    PRIMARY KEY(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

/* Disallo other sessions to update the table */
LOCK TABLES `USERS` WRITE;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`)
VALUES
    (1, 'Mark', 'Otto', 'mark.otto@email.com'),
    (2, 'Jacob', 'Thornton', 'jacob.t@email.com'),
    (3, 'Larry', 'Bird', 'larry.bird@email.com');

UNLOCK TABLES;
