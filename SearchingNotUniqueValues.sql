SELECT id, COUNT(id) as count
FROM test_table
GROUP BY id
HAVING COUNT(id) > 1;