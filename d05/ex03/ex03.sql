-- remember this format it will be useful
-- insert into picks talbe and fields
-- select picks things to get from FROM table
-- LIKE is a regex command 
-- % means 0+ of any character
INSERT INTO ft_table(`login`, `group`, `creation_date`)
SELECT `last_name`, 'other' AS `group`, `birthdate`
FROM `user_card`
WHERE (LENGTH(`last_name`) < 9) AND 
            (`last_name` LIKE '%a%')
ORDER BY `last_name` ASC
LIMIT 10;