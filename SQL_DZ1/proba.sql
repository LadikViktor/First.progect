-- вывод всей таблицы
SELECT *
FROM payroll;

-- вывод определенных столбцов(выведет только FIO и Salary)
SELECT FIO, Salary
FROM payroll;

--where(выбрать всех у кого зарплата больше 100 рублей)
SELECT *
FROM payroll
Where Salary>100;

-- Операторы сравнения(<,>,<=,>=,<>) <>(знак не  равенства), найти у кого зп не равна 100 рублей
SELECT *
FROM payroll
Where Salary<>100;

-- Логические операторы AND(и),OR(или), NOT(отрицание)
SELECT *
FROM payroll
Where Salary >=120 AND Salary <= 150;

-- Найти тех у кого зп больше 100 рублей и работает в отделе разработки
SELECT *
FROM payroll
Where Salary >100 AND Department ='Разработчик';

-- Найти тех у кого зп не менее 100 рублей
SELECT *
FROM payroll
Where NOT Salary <100;

-- Упорядочение таблицы(сортировка ASC по умолчанию) Order by
SELECT *
FROM payroll
Order by Salary;

-- Упорядочение таблицы(сортировка) Order by, ASC- от меньшего к большему, DESC- от большего к меньшему
SELECT *
FROM payroll
Order by Salary DESC;

-- Отсортировать по депортаментам в алфавиктном порядке и по зп в порядке убывания
SELECT *FROM payroll
Order by Department ASC,
Salary DESC;

-- Формирование вывода запроса AS(как), название столбцов таблицы записать по русски
SELECT
    Number AS 'Номер', FIO AS 'ФИО', Salary AS 'Зарплата', Department AS 'Депортамент'
FROM payroll;

--Посчитать налоги для каждого работника  
SELECT FIO AS 'ФИО', Department AS 'Депортамент', Salary * 0.13 AS 'Налоги'
FROM payroll;

--Зарпата на руки после вычета налогов
SELECT FIO AS 'ФИО', Department AS 'Депортамент', Salary - Salary * 0.13 AS 'Остаток'
FROM payroll;
