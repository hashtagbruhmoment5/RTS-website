CREATE TABLE logdata (
  UserID INT,
  FirstName VARCHAR(100),
  Email VARCHAR(255),
  Date DATE,
  TimeStarted TIME,
  TimeEnded TIME,
  Activity VARCHAR(255),
  PRIMARY KEY (User ID, Date, TimeStarted)
);