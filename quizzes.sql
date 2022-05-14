CREATE TABLE quizzes (
    id int NOT NULL AUTO_INCREMENT,
    quiz_id int,
    question_id int,
    answer_id int,
    answer varchar(255),
    PRIMARY KEY (id)
);

-- Quiz 1 - Identifying tags and their structure --

-- What is a HTML tag?
INSERT INTO quizzes (quiz_id, question_id, answer_id) VALUES (1, 1, 1);

-- Which of these have the correct syntax for a 'h1' tag?
INSERT INTO quizzes (quiz_id, question_id, answer_id) VALUES (1, 2, 1);

-- Complete the syntax of the code given below
INSERT INTO quizzes (quiz_id, question_id, answer) VALUES (1, 3, "</p>");

-- Which of the following contain all the metadata for a webpage?
INSERT INTO quizzes (quiz_id, question_id, answer_id) VALUES (1, 4, 3);

-- Which of the following is the correct way to create a comment?
INSERT INTO quizzes (quiz_id, question_id, answer_id) VALUES (1, 5, 3);



-- Quiz 2 - Identifying and defining elements attributes within elements --

-- What is an attribute?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (2, 1, 2);

-- Which of the following define href in an a tag?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (2, 2, 3);

-- Complete the syntax of the following code
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (2, 3, "500");

-- What standard does an attribute follow?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (2, 4, 3);