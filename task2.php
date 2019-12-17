SELECT d.name
FROM astrio_test.worker w
LEFT JOIN astrio_test.department d ON w.department_id = d.id
GROUP BY w.department_id
HAVING COUNT(*) >= 5;

SELECT name, GROUP_CONCAT(w.id)
FROM `worker` w
JOIN department d ON w.department_id = d.id
GROUP BY department_id;



