<?php

//zodat ik het niet steeds hoef op te zoeken
//Modelleren = 'Gijsbregs';
//DigitaleVaardigheden = 'Pielage';
//Computertekenen = 'Berg';
//Database = 'Wetering';
//HardwareAO = 'Saebu';
//HTMLCSS = 'Wetering';
//Javascript = 'Remco';
//ASP = 'Gijsbregs';
//Usability = 'Gijsbregs';
//PHP = 'Saebu';
//Nederlands = 'van de Ende';
//Engels = 'Mitrovic';
//Rekenen = 'Wetering';
//Burgerschap = 'Visser';



$courseName = 'PHP';
//vak namen
//$courseName2 = 'DigitaleVaardigheden';
//$courseName3 = 'Computertekenen';
//$courseName4 = 'Database';
//$courseName5 = 'HardwareAO';
//$courseName6 = 'HTMLCSS';
//$courseName7 = 'Javascript';
//$courseName8 = 'ASP';
//$courseName9 = 'Usability';
//$courseName10 = 'PHP';
//$courseName11 = 'Nederlands';
//$courseName12 = 'Engels';
//$courseName13 = 'Rekenen';
//$courseName14 = 'Burgerschap';

//docenten voor de bepaalde vakken
//$teacherName2 = 'Pielage';
//$teacherName3 = 'Berg';
//$teacherName4 = 'Wetering';
//$teacherName5 = 'Remco';
//$teacherName6 = 'Saebu';
//$teacherName7 = 'Ende';
//$teacherName8 = 'Mitrovic';
//$teacherName9 = 'Visser';

switch ($courseName) {
    case "Modelleren":
        $teacherName = "Gijsbrechts";
        break;

    case "DigitaleVaardigheden":
        $teacherName = 'Pielage';
        break;
    case "Computertekenen":
        $teacherName = 'Berg';
        break;
    case "Database":
        $teacherName = 'Wetering';
        break;
    case "HardwareAO":
        $teacherName = 'Saebu';
        break;
    case "HTMLCSS":
        $teacherName = 'Wetering';
        break;
    case "Javascript":
        $teacherName = 'Remco';
        break;
    case "ASP":
        $teacherName = 'Gijsbrechts';
        break;
    case "Usability":
        $teacherName = "Gijsbrechts";
        break;
    case "PHP":
        $teacherName = 'Saebu';
        break;
    case "Nederlands":
        $teacherName = 'van de Ende';
        break;
    case "Engels":
        $teacherName = 'Mitrovic' ;
        break;
    case "Rekenen":
        $teacherName = 'Wetering';
        break;
    case "Burgerschap":
        $teacherName = 'Visser';
        break;
}
