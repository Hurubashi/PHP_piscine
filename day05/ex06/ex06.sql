SELECT title, summary FROM db_mrybak.film WHERE LOWER(summary)  LIKE LOWER('%Vincent%') ORDER BY id_film ASC;