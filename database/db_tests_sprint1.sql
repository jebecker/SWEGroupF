-- Some initial insertions of sample data.
-- Test relational queries across multiple tables with sample data.

-- 2015/04/06 - Unable to implement test queries due to database.SQL being incompatible with schema currently installed to database.

-- This file will be implemented during sprint2 once database structure is better understood.

-- DO NOT EXECUTE, queries do not function.
-- Based on outdated database.SQL reference.


INSERT INTO master.users (sso_id, id, user_type, name, regDate) 
	VALUES ('apcvzb', DEFAULT, 'student', 'Andrew Craighead', DEFAULT);
INSERT INTO master.courses (course_id, courseName, TA_PLA_limit)
	VALUES (DEFAULT, 'CS4320', 2);
INSERT INTO master.section (sectionNum, course_id, sso_id)
	VALUES (1, 1, 'apcvzb');

