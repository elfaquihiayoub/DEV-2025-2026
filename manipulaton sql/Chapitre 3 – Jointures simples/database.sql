SELECT article.titre, utilisateur.nom,article.date_publication,article.id_category
FROM article
INNER JOIN utilisateur
ON article.id_article=utilisateur.id_utilisateur
;

SELECT article.titre, utilisateur.nom,article.date_publication,article.id_category
FROM article
LEFT JOIN utilisateur
ON article.id_article=utilisateur.id_utilisateur
WHERE article.id_category=1;