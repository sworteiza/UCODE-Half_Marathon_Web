SELECT *
FROM(
    SELECT t.name, COUNT(teams.hero_id) as count, t.id
    FROM(
            SELECT *
            FROM(
                SELECT *
                FROM(
                    SELECT *
                    FROM heroes
                    WHERE NOT race='human'
                ) AS r
                WHERE r.name LIKE '%a%'
            ) as s
            WHERE s.class_role='tankman' OR s.class_role='healer'
    ) as t
    JOIN teams
    ON teams.hero_id = t.id
    GROUP BY t.id 
) as w
WHERE id = (SELECT MIN(w.id)
    FROM(
    SELECT t.name, COUNT(teams.hero_id) as count, t.id
    FROM(
            SELECT *
            FROM(
                SELECT *
                FROM(
                    SELECT *
                    FROM heroes
                    WHERE NOT race='human'
                ) AS r
                WHERE r.name LIKE '%a%'
            ) as s
            WHERE s.class_role='tankman' OR s.class_role='healer'
    ) as t
    JOIN teams
    ON teams.hero_id = t.id
    GROUP BY t.id 
) as w
)






