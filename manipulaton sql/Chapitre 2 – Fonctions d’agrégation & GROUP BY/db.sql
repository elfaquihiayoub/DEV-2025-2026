SELECT id_utilisateur, COUNT(*) AS nb_articles
FROM article
GROUP BY id_utilisateur
HAVING COUNT(*)=2
;
SELECT  MAX(date_publication) AS last_pub FROM article;