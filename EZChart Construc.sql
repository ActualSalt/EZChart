

//Create Patient table 
CREATE TABLE `EZChart`.`Patient` ( `E_ID` VARCHAR(10) NOT NULL , `P_ID` VARCHAR(10) NOT NULL , `Charter` VARCHAR(10) NOT NULL , `FName` VARCHAR(20) NOT NULL , `LName` VARCHAR(20) NOT NULL , `DOB` VARCHAR(10) NOT NULL , `Sex` VARCHAR(10) NOT NULL , `Height` FLOAT NOT NULL , `Weight` FLOAT NOT NULL , `Pic` VARCHAR(50) NOT NULL , `RoomNumber` VARCHAR(10) NOT NULL , `SSN` INT(9) NOT NULL , `Insurance` VARCHAR(30) NOT NULL , `TimeStamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`E_ID`)) ENGINE = InnoDB;

//Create Form table
CREATE TABLE `EZChart`.`Form` ( `F_ID` VARCHAR(10) NOT NULL , `Patient_ID` VARCHAR(10) NOT NULL , `BloodPressure` VARCHAR(10) NOT NULL , `Weight` FLOAT NOT NULL , `Breakfast` BOOLEAN NOT NULL , `Lunch` BOOLEAN NOT NULL , `Dinner` BOOLEAN NOT NULL , `FoodNote` TEXT NOT NULL , `Charter` VARCHAR(10) NOT NULL , `Comment` TEXT NOT NULL , `TimeStampe` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;

//Create Employee table
CREATE TABLE `EZChart`.`Employee` ( `E_ID` VARCHAR(10) NOT NULL , `Password` VARCHAR(20) NOT NULL , `FName` VARCHAR(20) NOT NULL , `LName` VARCHAR(20) NOT NULL , `Title` VARCHAR(10) NOT NULL , PRIMARY KEY (`E_ID`)) ENGINE = InnoDB;

//Populate Employee table 
INSERT INTO `Employee` (`E_ID`, `Password`, `FName`, `LName`, `Title`) VALUES ('xXSlayerXx', 'Password', 'Juan', 'Tu', 'Doctor'), ('RNGesus', 'Password', 'Triss', 'Fore', 'Nurse'), ('CNANews', 'Password', 'Shibe', 'Fittz', 'CNA')