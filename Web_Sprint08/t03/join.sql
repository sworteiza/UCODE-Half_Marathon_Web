SELECT heroes.name, teams.name
FROM heroes
LEFT JOIN teams ON heroes.id = teams.hero_id;  


SELECT heroes.name, powers.name
FROM heroes
RIGHT JOIN powers ON  heroes.id = powers.hero_id;

SELECT heroes.name, powers.name, teams.name
FROM heroes
INNER JOIN powers ON heroes.id = powers.hero_id
INNER JOIN teams ON powers.hero_id = teams.hero_id;


