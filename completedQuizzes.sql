CREATE TABLE completed_quizzes (
    id int NOT NULL AUTO_INCREMENT,
    user_id int,
    quiz_id int,
    category_id int,
    score varchar(255),
    PRIMARY KEY (id)
);