SELECT UPPER(db_mrybak.user_card.last_name) AS 'NAME', db_mrybak.user_card.first_name, db_mrybak.subscription.price
FROM db_mrybak.user_card INNER JOIN db_mrybak.member ON db_mrybak.user_card.id_user=db_mrybak.member.id_user_card
INNER JOIN db_mrybak.subscription ON db_mrybak.member.id_sub=db_mrybak.subscription.id_sub
WHERE db_mrybak.subscription.price > 42 ORDER BY last_name ASC, first_name ASC;