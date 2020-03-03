SELECT REVERSE(regexp_replace(`phone_number`, '^0', '')) AS 'rebmunenohp'
FROM `distrib`
WHERE `phone_number` LIKE '05%';