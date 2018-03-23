USE dc1_grp2_jwd;

SELECT
	id,
    titre,
    img,
    date_creation,
    DATE_FORMAT(date_creation, '%e %M %Y') AS 'date_creation_format',
    nb_likes
FROM photo
ORDER BY date_creation DESC
LIMIT 3;

SELECT
	id,
    titre,
    img,
    date_creation,
    DATE_FORMAT(date_creation, '%e %M %Y') AS 'date_creation_format',
    nb_likes,
    description
FROM photo
WHERE id = 2;