CREATE TABLE Register (
  UserID INT AUTO_INCREMENT KEY,
  FirstName VARCHAR(100),
  LastName VARCHAR(100),
  Email VARCHAR(255),
  Password VARCHAR(100),
  Phone INT(10)
);


INSERT INTO Register(FirstName, LastName, Email, Password, Phone) VALUES ('Guna', 'Sen','guna.sen.2007@gmail.com','Lolol','2012109415');
SELECT * FROM Register;