use dc1_grp1_jwd;

SELECT 
	id,
    titre,
    image,
    nb_likes,
    date_creation,
    date_format(date_creation, '%e %M %Y' ) AS 'date_creation_format'
FROM photo 
ORDER BY date_creation DESC 
LIMIT 6;

SELECT 
	id,
	content,
    date_creation,
    date_format(date_creation, '%e %M %Y' ) AS 'date_creation_format'
FROM commentaire
WHERE photo_id = 1;