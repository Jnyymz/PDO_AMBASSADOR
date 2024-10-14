CREATE TABLE Ambassadors(
   ambassadorID INT AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(50),
   lastname VARCHAR (50),
   email VARCHAR (50),
   phoneNum VARCHAR (50),
   country VARCHAR (50),
   program_enrolled VARCHAR (50),
   enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
