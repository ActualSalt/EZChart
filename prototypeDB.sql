/*Create schema */
CREATE SCHEMA `EZChart` ;

/*Create Table
	This table is temporary for the development
    Decompose later*/
CREATE TABLE `EZChart`.`Temp_form` (
  `Form_ID` VARCHAR(10) NOT NULL,
  `Charter_ID` VARCHAR(10) NOT NULL,
  `Patien_ID` VARCHAR(10) NOT NULL,
  `FName` VARCHAR(45) NULL,
  `LName` VARCHAR(45) NULL,
  `Height` INT NULL,
  `Weight` INT NULL,
  `Comment` VARCHAR(200) NULL,
  PRIMARY KEY (`Form_ID`));

/*Create employee table*/
CREATE TABLE `EZChart`.`Employee` (
  `EmployeeID` VARCHAR(10) NOT NULL,
  `Password` VARCHAR(20) NOT NULL,
  `Title` VARCHAR(45) NOT NULL,
  `Name` VARCHAR(45) NULL,
  PRIMARY KEY (`EmployeeID`));
  
  /*Popluate employee table with three different titles */
INSERT INTO `EZChart`.`Employee` (`EmployeeID`, `Password`, `Title`, `Name`) VALUES ('c0000', 'doctor', 'doc', 'Cero');
INSERT INTO `EZChart`.`Employee` (`EmployeeID`, `Password`, `Title`, `Name`) VALUES ('c0001', 'nurse', 'nur', 'Juan');
INSERT INTO `EZChart`.`Employee` (`EmployeeID`, `Password`, `Title`) VALUES ('c0002', 'cna', 'cna');

/*View the table */
SELECT * FROM EZChart.Temp_form;

/*Test input template
	Form_ID PK
    Charter_ID and Patient_ID NOT NULL*/
INSERT INTO `EZChart`.`Temp_form` 
	(`Form_ID`, `Charter_ID`, `Patien_ID`, `FName`, `LName`, `Height`, `Weight`, `Comment`)
	VALUES ('f0000', 'c0000', 'p0000', 'FirstTest', 'LastTest', '180', '180', 'Testing_comment_here');
