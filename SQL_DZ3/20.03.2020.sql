-- Найти всех сотрудников у которых в фамилии вторая буква "о"
Select
    Name
from people
where
  name like '_о%';
-- Найти всех, у кого последние две буквы в фамилии ов
Select
    Name
from people
where
  name like '%ов';
-- Group by - при группировке все записи в таблице разбиваются на группы
-- с одинаковым значением в том поле, по которому производится группировка.
-- В выводе запроса могут использоваться только те поля, по которым производится группировка
-- по остальным полям могут выводиться их групповые характеристики: минимум,
-- максимум, среднее и т.д.
SELECT
    Department,
    avg(Salary)
FROM people
Group by
  Department;