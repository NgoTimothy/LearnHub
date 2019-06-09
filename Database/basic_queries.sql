/*Queries entire database */
select *
from user, study_set, class;

/*Adds a new user */
INSERT INTO Learnhub.user(username, email, userPassword, userRole)
VALUES ('laknoll', 'laknoll@iastate.edu', 'qwerty1234', 'student');

/*Searches for a user */
SELECT username, email, userRole
FROM Learnhub.user
WHERE username = 'laknoll';

/*Creates teacher view */
CREATE VIEW Teachers AS
SELECT username, email, userRole
FROM Learnhub.user
WHERE userRole = 'teacher';

/*Creates Student view */
CREATE VIEW Students AS
SELECT username, email, userRole
FROM Learnhub.user
WHERE userRole = 'student';

/*Edits Student View */
CREATE OR REPLACE VIEW Students AS
SELECT username, email, userRole
FROM Learnhub.user
WHERE userRole = 'student';

/*Edits Teacher view */
CREATE OR REPLACE VIEW Teachers AS
SELECT username, email, userRole
FROM Learnhub.user
WHERE userRole = 'teacher';

/*Finds all Foreign Keys */
SELECT * 
FROM Sys.Objects 
WHERE Type='f';

/*Finds all Primary Keys */
SELECT * 
FROM Sys.Objects 
WHERE Type='PK';

/*Deletes a user with no role */
DELETE
FROM Learnhub.user 
WHERE userRole = NULL;

/*Retrieves the number of rows from user*/
SELECT COUNT(*)
FROM Learnhub.user;







