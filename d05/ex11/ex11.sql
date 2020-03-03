SELECT UPPER(`last_name`) AS 'last_name', `first_name`, `price`
FROM `member`
INNER JOIN `subscription` 
    ON `member`.`id_sub` = `subscription`.`id_sub`
INNER JOIN `user_card`
    ON `member`.`id_user_card` = `user_card`.`id_user`
WHERE `price` > 42
ORDER BY `last_name` ASC, `first_name` ASC;