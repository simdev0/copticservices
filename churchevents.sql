DROP TABLE IF EXISTS adelaideyouth;
DROP TABLE IF EXISTS event;
DROP TABLE IF EXISTS verse;



CREATE TABLE verse(
	currentDate VARCHAR(10) NOT NULL, 
	verse VARCHAR(500) NOT NULL,
	
	PRIMARY KEY (currentDate)
);

CREATE TABLE adelaideyouth(
	serviceID VARCHAR (3) NOT NULL,
	serviceState VARCHAR(3) NOT NULL,
	serviceName VARCHAR(50) NOT NULL,
	PRIMARY KEY (serviceID)
);

CREATE TABLE adelaideyouthevents(
	serviceID VARCHAR(3) NOT NULL,
	eventDate VARCHAR(10) NOT NULL, 
	eventName VARCHAR(50) NOT NULL,
	eventDesc VARCHAR(500) NOT NULL,	
	
	PRIMARY KEY (eventDate, eventName, serviceID),
	FOREIGN KEY (serviceID) REFERENCES adelaideyouth(serviceID)
);