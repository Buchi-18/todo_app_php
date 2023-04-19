CREATE TABLE todos(
  id INT NOT NULL AUTO_INCREMENT,
  is_done BOOL DEFAULT false,
  title TEXT,
  PRIMARY KEY (id)
);

INSERT INTO todos (title) VALUE ('aaa');
INSERT INTO todos (title, is_done) VALUE ('bbb', true);
INSERT INTO todos (title) VALUE ('ccc');

SELECT * FROM todos;