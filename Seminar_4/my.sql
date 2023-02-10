
-- create
CREATE TABLE STUDENTS (
  Id INTEGER PRIMARY KEY NOT NULL,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO STUDENTS VALUES (0001, 'Иванов Иван Иванович', 30, 'Москва');
INSERT INTO STUDENTS VALUES (0002, 'Хабибов Шамиль', 40, 'Мадрид');
INSERT INTO STUDENTS VALUES (0003, 'Новикова Виктория', 25, 'Москва');
INSERT INTO STUDENTS VALUES (0004, 'Гущина Мария', 30, 'Иваново');
INSERT INTO STUDENTS VALUES (0005, 'Фиронова Ксения', 16, 'Москва');
INSERT INTO STUDENTS VALUES (0006, 'Бандуляк Андрей', 29, 'Вологда');
INSERT INTO STUDENTS VALUES (0007, 'Борщ Владимир', 34, 'Архангельск');
INSERT INTO STUDENTS VALUES (0008, 'Артемьев Никита', 30, 'Арзамас');
INSERT INTO STUDENTS VALUES (0009, 'Чистилин Максим', 29, 'Москва');
INSERT INTO STUDENTS VALUES (0010, 'Стельмащук Олег', 18, 'Москва');

-- fetch 
SELECT name FROM STUDENTS WHERE address = 'Москва' AND age >= 18 AND age < 30;
