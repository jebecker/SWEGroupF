DROP SCHEMA IF EXISTS master CASCADE;

CREATE SCHEMA master;

SET search_path TO master;

-- Table: master.user
-- Columns:
--    sso_id          	- Acts as a user name.
--    id 				-  the id of the user.
--    user-type          - Identifies the role of the user, which is critical in determining their level of access.
--    name 			- Full name of the user.
--    regDate  			- The time when an account is first created. Set automatically by a default value.
CREATE TYPE ROLE AS ENUM ('student', 'instructor', 'admin');
CREATE TABLE user (
	sso_id	VARCHAR(6) PRIMARY KEY,
	id 	INTEGER NOT NULL,
	user_type ROLE NOT NULL,
	name 	VARCHAR(30) NOT NULL,
	regDate	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Table: master.authentication
-- Columns:
--    sso_id      - The user name tied to authentication info. References user.
--    password_hash - The hash of the user's password + salt. Expected to be SHA1.
--    salt          - The salt to use. Expected to be a SHA1 hash of a random input.
CREATE TABLE authentication (
	sso_id 			VARCHAR(6) PRIMARY KEY,
	password_hash 	CHAR(40) NOT NULL,
	salt 			CHAR(40) NOT NULL,
	FOREIGN KEY (sso_id) REFERENCES user(sso_id)
);

-- Table: master.course
-- Columns:
--    course_id      	- An id to uniquely identify the course.
--    courseName 	- The name of the course.
-- 	TA_PLA_limit 	- The maximum number of TA's/PLA's that can be assigned to a course.
CREATE TABLE course (
	course_id	INT PRIMARY KEY,
	courseName 		VARCHAR(30) NOT NULL,
	TA_PLA_limit		INTEGER
);

-- Table: master.section
-- Columns:
--    sectionNum  - The section number of the course.
--    course_id	- Identifies the course the section is a part of. References course.
--    sso_id 		- The sso_id of the instructor teaching the course. References user.
CREATE TABLE section (
	sectionNum 	INTEGER,
	course_id		INTEGER NOT NULL,
	sso_id 		VARCHAR(6) NOT NULL,
	PRIMARY KEY (sectionNum, course_id),
	FOREIGN KEY (course_id) REFERENCES course(course_id),
	FOREIGN KEY (sso_id) REFERENCES user(sso_id)
);

-- Table: master.application
-- Columns:
--	app_id	- The unique id assigned to each application. Set by a sequence.
--	sso_id	- The sso_id of the student who submitted the application.
--	TA_PLA	- Determines if the applicant is applying to be a TA (0) or PLA (1)
--	name		- Full name of the applicant.
--	id			- Student id of the applicant.
--	gpa		- Grade point average of the applicant.
--	PLA_info	-  Filled out by undergraduates who are applying to be a PLA; ex. CS BA jr.
--	MS_PHD 	- Indicates whether the graduate applicant is studying for a masters or PHD.
--	advisorName	- The name of the applicant's advisor.
--	phoneNum	- The phone number of the applicant.
--	email	- The email of the applicant.
-- 	gradDate	- The expected graduation date of the applicant.
--	coursesTeaching	- Courses in which the student is currently a TA or PLA.
--	coursesTaught 	- Past courses in which  the student was a TA or PLA.
--	coursesAndGrades	- The courses for which the student is applying for and grades received in those courses.
--	otherWork	- Other places the applicant currently works at.
--	speakScore	- The score on the applicant received on the SPEAK test; international students only.
--	semLastSpeak 	- The semester in which the applicant last took the SPEAK test; international students only.
--	GATO_status	- 1 if the student has met the GATO requirement, 0 if they will attend in Aug/Jan if selected.
--	ONITA_status	- 1 if the student has met the ONITA requirement, 0 if they will attend in Aug/Jan if selected; international students only.
--	eSig	- The signature of  the applicant.
--	eDate - The date corresponding to the signature.
--	submissionDate	- The time upon which the application was submitted; Set automatically by a default value.
CREATE TYPE gradStatus AS ENUM ('MS', 'PHD');
CREATE TABLE application (
	app_id	SERIAL PRIMARY KEY,
	sso_id	VARCHAR(6) NOT NULL,
	TA_PLA	BOOLEAN NOT NULL,
	name	VARCHAR(30) NOT NULL,
	id	INTEGER NOT NULL,
	gpa	FLOAT NOT NULL,
	PLA_info	VARCHAR(30),
	MS_PHD	gradStatus,
	advisorName	VARCHAR(30) NOT NULL,
	phoneNum	INTEGER NOT NULL,
	email	VARCHAR(30) NOT NULL,
	gradDate	VARCHAR(30) NOT NULL,
	coursesTeaching VARCHAR(50),
	courseTaught	VARCHAR(50),
	coursesAndGrades	VARCHAR(100) NOT NULL,
	otherWork		VARCHAR(50),
	speakScore	INTEGER,
	semLastSpeak	VARCHAR(30),
	GATO_status BOOLEAN NOT NULL,
	ONITA_status BOOLEAN,
	eSig	VARCHAR(30) NOT NULL,
	eDate	VARCHAR(30) NOT NULL,
	submissionDate	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (sso_id) REFERENCES user(sso_id)
);

-- Table: master.comment
-- Columns:
--	comment_id	- A unique ID for each comment. Set by a sequence.
--	sso_id 	- The sso_id of the instructor who made the comment. References user.
--	app_id	- The ID of the application which the comment is attached to. References application.
--	date		- The time at which the comment was created. Set automatically by a default value.
CREATE TABLE comment (
	comment_id	SERIAL PRIMARY KEY,
	sso_id	VARCHAR(6) NOT NULL,
	app_id	SERIAL NOT NULL,
	date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (sso_id) REFERENCES user(sso_id),
	FOREIGN KEY (app_id) REFERENCES application(app_id)
);

-- Table: master.log
-- Columns:
--    log_id     - A unique ID for the log entry. Set by a sequence.
--    sso_id   - The user whose action generated this log entry. References user.
--    ip_address - The IP address of the user at the time the log was entered.
--    log_date   - The date of the log entry. Set automatically by a default value.
--    action     - What the user did to generate a log entry (i.e., "logged in").
CREATE TABLE log (
	log_id  	SERIAL PRIMARY KEY,
	sso_id 		VARCHAR(30) NOT NULL,
	ip_address 	VARCHAR(15) NOT NULL,
	log_date 	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	action 		VARCHAR(50) NOT NULL,
	FOREIGN KEY (sso_id) REFERENCES user(sso_id)
);