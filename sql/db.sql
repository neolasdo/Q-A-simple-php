CREATE TABLE IF NOT EXISTS role
(
	id int primary key not null auto_increment,
	name varchar(100)
	
);

CREATE TABLE IF NOT EXISTS users
(
	id int primary key not null auto_increment,
	full_name varchar(100) comment 'Tên hiển thị khi đăng nhập thành công',
	username varchar(50) unique comment 'Tên tài khoản đăng nhập',
	email varchar(50) unique comment 'Email có thể dùng đăng nhập đăng nhập',
	password varchar(64) comment 'Mật khẩu đăng nhập',
	role_id int
);

CREATE TABLE IF NOT EXISTS questions
(
	id int primary key not null auto_increment,
	content text,
	user_id int
);

CREATE TABLE IF NOT EXISTS answers
(
	id int primary key not null auto_increment,
	user_id int,
	question_id int,
	content text
);


ALTER TABLE users
ADD foreign key fk_role_id (role_id) references role(id);

ALTER TABLE questions
ADD foreign key fk_user_question_id (user_id) references users(id);

ALTER TABLE answers
ADD foreign key fk_user_answer_id (user_id) references users(id);

ALTER TABLE answers
ADD foreign key fk_question_answer_id (question_id) references questions(id);