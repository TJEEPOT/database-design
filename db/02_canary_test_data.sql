INSERT INTO member (firstName, lastName, grade) VALUES('Andy','Zannof','j');
INSERT INTO member (firstName, lastName, grade) VALUES('Barry','Young','j');
INSERT INTO member (firstName, lastName, grade) VALUES('Callum','Xen','j');
INSERT INTO member (firstName, lastName, grade) VALUES('Dennis','White','j');
INSERT INTO member (firstName, lastName, grade) VALUES('Edward','Vickers','j');
INSERT INTO member (firstName, lastName, grade) VALUES('Fred','Unwin','s');
INSERT INTO member (firstName, lastName, grade) VALUES('George','Tate','s');
INSERT INTO member (firstName, lastName, grade) VALUES('Howard','Smith','s');
INSERT INTO member (firstName, lastName, grade) VALUES('Ian','Rogers','s');
INSERT INTO member (firstName, lastName, grade) VALUES('Jacob','Palmer','s');

INSERT INTO series (seriesName, seriesYear) VALUES('Norfolk Juniors',2017);
INSERT INTO series (seriesName, seriesYear) VALUES('Norfolk Seniors',2017);
INSERT INTO series (seriesName, seriesYear) VALUES('Norfolk Juniors',2018);
INSERT INTO series (seriesName, seriesYear) VALUES('Norfolk Seniors',2018);

INSERT INTO race (seriesID, raceName, raceDate) VALUES(1, 'Norwich 5k','2017-11-20'); 
INSERT INTO race (seriesID, raceName, raceDate) VALUES(1, 'Norwich 10k','2017-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(1,'Bungay 5k','2017-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(1,'Bungay 10k','2017-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(2, 'Norwich 5k','2017-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(2, 'Norwich 10k','2017-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(2,'Bungay 5k','2017-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(2,'Bungay 10k','2017-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(3, 'Norwich 5k','2018-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(3, 'Norwich 10k','2018-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(3,'Bungay 5k','2018-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(3,'Bungay 10k','2018-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(4, 'Norwich 5k','2018-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(4, 'Norwich 10k','2018-11-20');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(4,'Bungay 5k','2018-04-14');
INSERT INTO race (seriesID, raceName, raceDate) VALUES(4,'Bungay 10k','2018-04-14');

INSERT INTO competitor (memberID, raceID, position) VALUES(1,1,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,2,2);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,3,4);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,4,6);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,9,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,10,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,11,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(1,12,Null);

INSERT INTO competitor (memberID, raceID, position) VALUES(2,1,1);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,2,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,3,7);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,4,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,9,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,10,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,11,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(2,12,Null);

INSERT INTO competitor (memberID, raceID, position) VALUES(3,1,1);
INSERT INTO competitor (memberID, raceID, position) VALUES(3,2,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(3,3,7);
INSERT INTO competitor (memberID, raceID, position) VALUES(3,4,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(3,9,Null);
INSERT INTO competitor (memberID, raceID, position) VALUES(3,10,Null);

INSERT INTO competitor (memberID, raceID, position) VALUES(6,5,1);
INSERT INTO competitor (memberID, raceID, position) VALUES(6,6,2);
INSERT INTO competitor (memberID, raceID, position) VALUES(6,7,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(6,8,4);

INSERT INTO competitor (memberID, raceID, position) VALUES(7,5,2);
INSERT INTO competitor (memberID, raceID, position) VALUES(7,6,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(7,7,4);
INSERT INTO competitor (memberID, raceID, position) VALUES(7,8,1);

INSERT INTO competitor (memberID, raceID, position) VALUES(8,5,3);
INSERT INTO competitor (memberID, raceID, position) VALUES(8,6,4);
INSERT INTO competitor (memberID, raceID, position) VALUES(8,7,1);
INSERT INTO competitor (memberID, raceID, position) VALUES(8,8,2);

INSERT INTO competitor (memberID, raceID, position) VALUES(9,5,4);
INSERT INTO competitor (memberID, raceID, position) VALUES(9,6,1);
INSERT INTO competitor (memberID, raceID, position) VALUES(9,7,2);
INSERT INTO competitor (memberID, raceID, position) VALUES(9,8,3);

INSERT INTO course (courseName, courseLevel) VALUES('Beginners',1);
INSERT INTO course (courseName, courseLevel) VALUES('Intermediate',2);
INSERT INTO course (courseName, courseLevel) VALUES('Advanced',3);

INSERT INTO enrolment (memberID, courseID) VALUES(1,1);
INSERT INTO enrolment (memberID, courseID) VALUES(2,1);
INSERT INTO enrolment (memberID, courseID) VALUES(3,1);
INSERT INTO enrolment (memberID, courseID) VALUES(4,2);
INSERT INTO enrolment (memberID, courseID) VALUES(5,2);
INSERT INTO enrolment (memberID, courseID) VALUES(6,2);
INSERT INTO enrolment (memberID, courseID) VALUES(7,2);
INSERT INTO enrolment (memberID, courseID) VALUES(8,3);
INSERT INTO enrolment (memberID, courseID) VALUES(9,3);