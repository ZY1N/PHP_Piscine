SELECT COUNT(*) AS 'nb_suscs', FLOOR(AVG(`price`)) AS 'av_susc', SUM(MOD(`duration_sub`, 42)) AS 'ft'
FROM `subscription` ;