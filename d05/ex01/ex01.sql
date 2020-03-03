-- not null forces the field to not accept null
-- the default sets a default value if none given
-- the grave character is used to escape sql reserved words
-- to use mysql db_yinzhang < ex01.sql
CREATE TABLE IF NOT EXISTS ft_table (
    `id` INT NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(255) NOT NULL DEFAULT 'toto',
    `group` ENUM('staff', 'student', 'other') NOT NULL,
    `creation_date` DATE NOT NULL,
    PRIMARY KEY(id)
);