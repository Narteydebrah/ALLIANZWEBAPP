-- drop database INSURANCEZ;

CREATE database INSURANCEZ;
USE INSURANCEZ;

CREATE TABLE Person (
  fname VARCHAR(50) NOT NULL,
  -- phone_number varchar(12) NOT NULL UNIQUE,--
  email VARCHAR(50) UNIQUE CHECK (email LIKE '%@%'),
  PersonID INT,
  pswd VARCHAR(25) NOT NULL,
  PRIMARY KEY (PersonID)
  
);





CREATE TABLE Agent (
  fname VARCHAR(50) NOT NULL,
  -- phone_number varchar(12) NOT NULL UNIQUE,--
  email VARCHAR(50) UNIQUE CHECK (email LIKE '%@%'),
  AgentID INT,
  pswd VARCHAR(25) NOT NULL
  -- FOREIGN KEY (PersonID) REFERENCES Person (PersonID)
  
  
);

 









 

-- CREATE TABLE Office (
--   officecontact VARCHAR(12) NOT NULL UNIQUE,
--   DEPARTMENT VARCHAR(20) NOT NULL,
--   employeeID INT,
--   
--   FOREIGN KEY (employeeID) REFERENCES Employee (employeeID)
-- );

CREATE TABLE registers (
 fname VARCHAR (20),
 email VARCHAR(50) UNIQUE CHECK (email LIKE '%@%'),
 PersonID INT,
 nkin VARCHAR (20),
 cnumber INT,
 ptype VARCHAR (30),
 nclaims INT,
 
 
 FOREIGN KEY (PersonID) REFERENCES Person (PersonID)

);
 

-- CREATE TABLE Payment (
--   transactionID INT,
--   payment_method VARCHAR(20) NOT NULL,
--   monthly_premium_paid ENUM ('YES','NO'),
--   ClientID INT,
--   
--   FOREIGN KEY(ClientID) REFERENCES Clients(ClientID)

-- );

INSERT INTO Agent (fname, email, AgentID, pswd)
VALUES('George','george.debrah@ashesi.edu.gh',256,'Al1as1aa');







