SELECT s.name, s.point
FROM(
        SELECT *
    FROM(
        SELECT hero_id as hero, SUM(points) AS point
        FROM powers
        GROUP BY hero_id
    ) AS a
    LEFT JOIN  heroes
    ON heroes.id = a.hero
    WHERE a.point=(SELECT MAX(point) AS powerful
    FROM(
        SELECT hero_id as hero, SUM(points) AS point
        FROM powers
        GROUP BY hero_id
    ) AS res)
) as s;

SELECT s.name, s.point
FROM(
        SELECT *
    FROM(
        SELECT hero_id as hero, SUM(points) AS point
        FROM powers
        WHERE type='defense'
        GROUP BY hero_id
    ) AS a
    LEFT JOIN  heroes
    ON heroes.id = a.hero
    WHERE a.point=(SELECT MIN(point) AS powerful
    FROM(
        SELECT hero_id as hero, SUM(points) AS point
        FROM powers
        WHERE type='defense'
        GROUP BY hero_id
    ) AS res)
) as s;

SELECT l.name, l.point
FROM(
    SELECT *
    FROM(
        SELECT hero_id as hero, SUM(points) AS point
        FROM powers
        GROUP BY hero_id
    ) AS a
    LEFT JOIN  heroes
    ON heroes.id = a.hero
    ORDER BY a.point DESC
) as l;

SELECT *
FROM(
    SELECT r.name, SUM(r.points) AS total
    FROM(
        SELECT teams.hero_id, teams.name, powers.points
        FROM teams
        INNER JOIN powers
        ON teams.hero_id = powers.hero_id
    ) AS r
    GROUP BY r.name
) AS lef
ORDER BY lef.total;


    








