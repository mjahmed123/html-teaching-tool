-- Create users table
CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    username varchar(30) NOT NULL,
    password varchar(60) NOT NUll,
    PRIMARY KEY (id)
 );

-- Create completed quizzes table
CREATE TABLE completed_quizzes (
    id int NOT NULL AUTO_INCREMENT,
    user_id int,
    quiz_id int,
    category_id int,
    score varchar(255),
    PRIMARY KEY (id)
);

-- Create quizzes table
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



-- Quiz 3 - Defining style types, selectors and properties --

-- What are styles?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (3, 1, 1);

-- What are the different types of styling?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (3, 2, 3);

-- Complete the syntax of the following code
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (3, 3, 'stylesheet');

-- In which tag should the above link tag be placed in between to link an external css file?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (3, 4, 2);

-- Which of the following best describes inline styling?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (3, 5, 3);

-- Which of the following best describes internal styling?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (3, 6, 2);

-- Which of the following best describes external styling?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (3, 7, 1);

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (3, 8, 'green');



-- Quiz 4 - Identifying forms, their attributes and elements --

-- What is a form in HTML?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (4, 1, 1);

-- Which of the following is one of the many input elements contained in any form?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (4, 2, 1);

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (4, 3, 'text');

-- Which of these best describe a radio button?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (4, 4, 2);

-- Which of these best describe checkboxes?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (4, 5, 3);

-- Which of these best describe a textbox?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (4, 6, 1);

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (4, 7, 'complete');



-- Quiz 5 - Identifying types of media and how to use them --

-- What is multimedia?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (5, 1, 3);

-- Which of the following is one of the many types of multimedia?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (5, 2, 2);

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (5, 3, '600');

-- Which of the following best describes a <video> tag?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (5, 4, 3);

-- Which of the following best describes a <iframe> tag?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (5, 5, 1);

-- Which of the following best describes a <audio> tag?
INSERT INTO quizzes(quiz_id, question_id, answer_id) VALUES (5, 6, 2);

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (5, 7, 'autoplay');

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (5, 8, 'controls');

-- Complete the syntax of the following code:
INSERT INTO quizzes(quiz_id, question_id, answer) VALUES (5, 9, 'loop');