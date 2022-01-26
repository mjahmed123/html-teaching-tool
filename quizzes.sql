CREATE TABLE quizzes (
    id int NOT NULL AUTO_INCREMENT,
    quiz_id int,
    question_id int,
    answer_id int,
    answer varchar(255),
    PRIMARY KEY (id)
);

-- What is a HTML tag?
INSERT INTO quizzes (quiz_id, question_id, answer_id) VALUES (1, 1, 1);

-- Which of these have the correct syntax for a 'h1' tag?
INSERT INTO quizzes (quiz_id, question_id, answer_id) VALUES (1, 2, 1);

-- Complete the syntax of the code given below
INSERT INTO quizzes (quiz_id, question_id, answer) VALUES (1, 3, "</p>");