

CREATE TABLE `cr` (
  `id` int(11) NOT NULL,
  `crname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cr VALUES("1","CLARISSA Y. HONCADA");
INSERT INTO cr VALUES("1","CLARISSA Y. HONCADA");



CREATE TABLE `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `ts` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `adviser` varchar(255) NOT NULL,
  `quarter` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sy` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=576 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO grade VALUES("43","3"," E-Tech","96","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("44","4"," E-Tech","96","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("45","5"," E-Tech","96","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("46","6"," E-Tech","92","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("47","7"," E-Tech","81","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("48","8"," E-Tech","92","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("49","9"," E-Tech","86","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("50","10"," E-Tech","83","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("51","11"," E-Tech","85","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("52","12"," E-Tech","93","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","First","First","2022 - 2023");
INSERT INTO grade VALUES("53","13"," E-Tech","93","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("54","14"," E-Tech","95","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("55","15"," E-Tech","93","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("56","16"," E-Tech","81","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("57","17"," E-Tech","88","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("58","18"," E-Tech","89","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("59","19"," E-Tech","94","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("60","20"," E-Tech","82","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("61","21"," E-Tech","82","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("62","22"," E-Tech","86","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("63","23"," E-Tech","98","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("64","24"," E-Tech","92","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("65","25"," E-Tech","90","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("66","26"," E-Tech","98","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("67","27"," E-Tech","74","FAILED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("68","28"," E-Tech","86","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("69","29"," E-Tech","80","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("70","30"," E-Tech","84","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("71","31"," E-Tech","78","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("72","32"," E-Tech","93","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("73","33"," E-Tech","87","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("74","34"," E-Tech","85","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("75","35"," E-Tech","94","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("76","36"," E-Tech","92","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("77","37"," E-Tech","84","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("78","38"," E-Tech","87","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("79","39"," E-Tech","87","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("80","40"," E-Tech","93","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("81","41"," E-Tech","76","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("82","42"," E-Tech","85","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("83","43"," E-Tech","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("84","3"," General Mathematics","86","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("85","4"," General Mathematics","85","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("86","5"," General Mathematics","85","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("87","6"," General Mathematics","82","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("88","7"," General Mathematics","86","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("89","8"," General Mathematics","88","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("90","9"," General Mathematics","87","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("91","10"," General Mathematics","89","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("92","11"," General Mathematics","89","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("93","12"," General Mathematics","85","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","First","First","2022 - 2023");
INSERT INTO grade VALUES("94","13"," General Mathematics","89","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("95","14"," General Mathematics","83","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("96","15"," General Mathematics","86","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("97","16"," General Mathematics","81","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("98","17"," General Mathematics","89","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("99","18"," General Mathematics","84","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("100","19"," General Mathematics","80","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("101","20"," General Mathematics","77","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("102","21"," General Mathematics","81","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("103","22"," General Mathematics","86","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("104","23"," General Mathematics","79","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("105","24"," General Mathematics","88","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("106","25"," General Mathematics","84","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("107","26"," General Mathematics","80","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("108","27"," General Mathematics","84","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("109","28"," General Mathematics","91","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("110","29"," General Mathematics","90","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("111","30"," General Mathematics","86","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("112","31"," General Mathematics","79","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("113","32"," General Mathematics","88","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("114","33"," General Mathematics","92","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("115","34"," General Mathematics","91","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("116","35"," General Mathematics","93","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("117","36"," General Mathematics","78","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("118","37"," General Mathematics","87","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("119","38"," General Mathematics","82","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("120","39"," General Mathematics","89","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("121","40"," General Mathematics","81","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("122","41"," General Mathematics","84","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("123","42"," General Mathematics","81","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("124","43"," General Mathematics","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("125","3"," E-Tech","95","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("126","4"," E-Tech","89","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("127","5"," E-Tech","86","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("128","6"," E-Tech","79","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("129","7"," E-Tech","97","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("130","8"," E-Tech","91","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("131","9"," E-Tech","91","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("132","10"," E-Tech","91","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("133","11"," E-Tech","76","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("134","12"," E-Tech","92","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Second","First","2022 - 2023");
INSERT INTO grade VALUES("135","13"," E-Tech","79","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("136","14"," E-Tech","78","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("137","15"," E-Tech","98","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("138","16"," E-Tech","89","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("139","17"," E-Tech","89","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("140","18"," E-Tech","90","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("141","19"," E-Tech","98","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("142","20"," E-Tech","93","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("143","21"," E-Tech","93","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("144","22"," E-Tech","91","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("145","23"," E-Tech","96","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("146","24"," E-Tech","82","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("147","25"," E-Tech","95","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("148","26"," E-Tech","87","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("149","27"," E-Tech","96","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("150","28"," E-Tech","88","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("151","29"," E-Tech","82","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("152","30"," E-Tech","98","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("153","31"," E-Tech","76","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("154","32"," E-Tech","90","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("155","33"," E-Tech","89","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("156","34"," E-Tech","94","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("157","35"," E-Tech","90","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("158","36"," E-Tech","95","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("159","37"," E-Tech","91","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("160","38"," E-Tech","92","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("161","39"," E-Tech","97","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("162","40"," E-Tech","88","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("163","41"," E-Tech","87","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("164","42"," E-Tech","91","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("165","43"," E-Tech","84","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("166","3"," Oral Communication","86","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("167","4"," Oral Communication","85","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("168","5"," Oral Communication","86","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("169","6"," Oral Communication","88","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("170","7"," Oral Communication","90","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("171","8"," Oral Communication","90","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("172","9"," Oral Communication","91","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("173","10"," Oral Communication","80","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("174","11"," Oral Communication","89","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("175","12"," Oral Communication","90","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Nashiva Ampuan","Lilac","","11","Blezza Faith Licera","First","First","2022 - 2023");
INSERT INTO grade VALUES("176","13"," Oral Communication","90","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("177","14"," Oral Communication","87","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("178","15"," Oral Communication","88","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("179","16"," Oral Communication","93","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("180","17"," Oral Communication","85","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("181","18"," Oral Communication","89","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("182","19"," Oral Communication","90","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("183","20"," Oral Communication","95","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("184","21"," Oral Communication","91","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("185","22"," Oral Communication","82","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("186","23"," Oral Communication","89","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("187","24"," Oral Communication","87","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("188","25"," Oral Communication","87","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("189","26"," Oral Communication","90","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("190","27"," Oral Communication","90","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("191","28"," Oral Communication","87","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("192","29"," Oral Communication","84","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("193","30"," Oral Communication","89","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("194","31"," Oral Communication","90","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("195","32"," Oral Communication","88","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("196","33"," Oral Communication","87","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("197","34"," Oral Communication","85","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("198","35"," Oral Communication","90","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("199","36"," Oral Communication","93","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("200","37"," Oral Communication","87","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("201","38"," Oral Communication","86","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("202","39"," Oral Communication","86","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("203","40"," Oral Communication","90","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("204","41"," Oral Communication","85","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("205","42"," Oral Communication","93","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("206","43"," Oral Communication","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Nashiva Ampuan","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("207","3"," 21st Century Literature from the Philippines and the World","94","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("208","4"," 21st Century Literature from the Philippines and the World","65","FAILED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("209","5"," 21st Century Literature from the Philippines and the World","96","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("210","6"," 21st Century Literature from the Philippines and the World","64","FAILED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("211","7"," 21st Century Literature from the Philippines and the World","90","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("212","8"," 21st Century Literature from the Philippines and the World","96","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("213","9"," 21st Century Literature from the Philippines and the World","96","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("214","10"," 21st Century Literature from the Philippines and the World","97","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("215","11"," 21st Century Literature from the Philippines and the World","89","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("216","12"," 21st Century Literature from the Philippines and the World","97","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","First","First","2022 - 2023");
INSERT INTO grade VALUES("217","13"," 21st Century Literature from the Philippines and the World","97","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("218","14"," 21st Century Literature from the Philippines and the World","95","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("219","15"," 21st Century Literature from the Philippines and the World","81","PASSED","Allera, Nicole L.","Nicole","L","Allera","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("220","16"," 21st Century Literature from the Philippines and the World","96","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("221","17"," 21st Century Literature from the Philippines and the World","95","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Male");
INSERT INTO grade VALUES("222","18"," 21st Century Literature from the Philippines and the World","86","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("223","19"," 21st Century Literature from the Philippines and the World","97","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("224","20"," 21st Century Literature from the Philippines and the World","95","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("225","21"," 21st Century Literature from the Philippines and the World","96","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("226","22"," 21st Century Literature from the Philippines and the World","96","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("227","23"," 21st Century Literature from the Philippines and the World","98","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("228","24"," 21st Century Literature from the Philippines and the World","94","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("229","25"," 21st Century Literature from the Philippines and the World","96","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("230","26"," 21st Century Literature from the Philippines and the World","97","PASSED","Etor, Dimples C.","Dimples","C","Etor","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("231","27"," 21st Century Literature from the Philippines and the World","99","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("232","28"," 21st Century Literature from the Philippines and the World","95","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("233","29"," 21st Century Literature from the Philippines and the World","76","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("234","30"," 21st Century Literature from the Philippines and the World","97","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("235","31"," 21st Century Literature from the Philippines and the World","95","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("236","32"," 21st Century Literature from the Philippines and the World","98","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("237","33"," 21st Century Literature from the Philippines and the World","90","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("238","34"," 21st Century Literature from the Philippines and the World","96","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("239","35"," 21st Century Literature from the Philippines and the World","93","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("240","36"," 21st Century Literature from the Philippines and the World","97","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("241","37"," 21st Century Literature from the Philippines and the World","88","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("242","38"," 21st Century Literature from the Philippines and the World","98","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("243","39"," 21st Century Literature from the Philippines and the World","96","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("244","40"," 21st Century Literature from the Philippines and the World","94","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("245","41"," 21st Century Literature from the Philippines and the World","96","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("246","42"," 21st Century Literature from the Philippines and the World","99","PASSED","Tejano, Christine May","Christine May","T","Tejano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("247","43"," 21st Century Literature from the Philippines and the World","96","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("248","3"," 21st Century Literature from the Philippines and the World","94","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("249","4"," 21st Century Literature from the Philippines and the World","65","FAILED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("250","5"," 21st Century Literature from the Philippines and the World","96","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("251","6"," 21st Century Literature from the Philippines and the World","64","FAILED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("252","7"," 21st Century Literature from the Philippines and the World","90","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("253","8"," 21st Century Literature from the Philippines and the World","96","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("254","9"," 21st Century Literature from the Philippines and the World","96","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("255","10"," 21st Century Literature from the Philippines and the World","97","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("256","11"," 21st Century Literature from the Philippines and the World","89","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("257","12"," 21st Century Literature from the Philippines and the World","97","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Second","First","2022 - 2023");
INSERT INTO grade VALUES("258","13"," 21st Century Literature from the Philippines and the World","97","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("259","14"," 21st Century Literature from the Philippines and the World","95","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("260","15"," 21st Century Literature from the Philippines and the World","81","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("261","16"," 21st Century Literature from the Philippines and the World","96","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("262","17"," 21st Century Literature from the Philippines and the World","95","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("263","18"," 21st Century Literature from the Philippines and the World","86","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("264","19"," 21st Century Literature from the Philippines and the World","97","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("265","20"," 21st Century Literature from the Philippines and the World","95","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("266","21"," 21st Century Literature from the Philippines and the World","96","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("267","22"," 21st Century Literature from the Philippines and the World","96","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("268","23"," 21st Century Literature from the Philippines and the World","98","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("269","24"," 21st Century Literature from the Philippines and the World","94","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("270","25"," 21st Century Literature from the Philippines and the World","96","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("271","26"," 21st Century Literature from the Philippines and the World","97","PASSED","Etor, Dimples C.","Dimples","C","Etor","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("272","27"," 21st Century Literature from the Philippines and the World","99","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("273","28"," 21st Century Literature from the Philippines and the World","95","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("274","29"," 21st Century Literature from the Philippines and the World","76","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("275","30"," 21st Century Literature from the Philippines and the World","97","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("276","31"," 21st Century Literature from the Philippines and the World","95","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("277","32"," 21st Century Literature from the Philippines and the World","98","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("278","33"," 21st Century Literature from the Philippines and the World","90","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("279","34"," 21st Century Literature from the Philippines and the World","96","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("280","35"," 21st Century Literature from the Philippines and the World","93","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("281","36"," 21st Century Literature from the Philippines and the World","97","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("282","37"," 21st Century Literature from the Philippines and the World","88","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("283","38"," 21st Century Literature from the Philippines and the World","98","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("284","39"," 21st Century Literature from the Philippines and the World","96","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("285","40"," 21st Century Literature from the Philippines and the World","94","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("286","41"," 21st Century Literature from the Philippines and the World","96","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("287","42"," 21st Century Literature from the Philippines and the World","99","PASSED","Tejano, Christine May","Christine May","T","Tejano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("288","43"," 21st Century Literature from the Philippines and the World","96","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("289","3"," Physical Education","95","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("290","4"," Physical Education","96","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("291","5"," Physical Education","89","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("292","6"," Physical Education","98","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("293","7"," Physical Education","97","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("294","8"," Physical Education","86","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("295","9"," Physical Education","81","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("296","10"," Physical Education","86","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("297","11"," Physical Education","92","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("298","12"," Physical Education","90","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","First","First","2022 - 2023");
INSERT INTO grade VALUES("299","13"," Physical Education","87","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("300","14"," Physical Education","89","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("301","15"," Physical Education","84","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("302","16"," Physical Education","88","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("303","17"," Physical Education","89","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("304","18"," Physical Education","85","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("305","19"," Physical Education","87","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("306","20"," Physical Education","84","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("307","21"," Physical Education","93","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("308","22"," Physical Education","88","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("309","23"," Physical Education","90","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("310","24"," Physical Education","92","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("311","25"," Physical Education","91","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("312","26"," Physical Education","87","PASSED","Etor, Dimples C.","Dimples","C","Etor","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("313","27"," Physical Education","93","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("314","28"," Physical Education","88","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("315","29"," Physical Education","90","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("316","30"," Physical Education","84","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("317","31"," Physical Education","86","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("318","32"," Physical Education","86","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("319","33"," Physical Education","84","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("320","34"," Physical Education","85","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("321","35"," Physical Education","85","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("322","36"," Physical Education","93","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("323","37"," Physical Education","90","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("324","38"," Physical Education","96","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("325","39"," Physical Education","90","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("326","40"," Physical Education","86","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("327","41"," Physical Education","86","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","Female");
INSERT INTO grade VALUES("328","42"," Physical Education","89","PASSED","Tejano, Christine May","Christine May","T","Tejano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("329","43"," Physical Education","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","First","First","2022 - 2023");
INSERT INTO grade VALUES("330","3"," Physical Education","90","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("331","4"," Physical Education","91","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("332","5"," Physical Education","87","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("333","6"," Physical Education","88","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("334","7"," Physical Education","91","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("335","8"," Physical Education","89","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("336","9"," Physical Education","85","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("337","10"," Physical Education","86","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("338","11"," Physical Education","91","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("339","12"," Physical Education","92","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Second","First","2022 - 2023");
INSERT INTO grade VALUES("340","13"," Physical Education","86","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("341","14"," Physical Education","90","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("342","15"," Physical Education","89","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("343","16"," Physical Education","90","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("344","17"," Physical Education","87","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("345","18"," Physical Education","90","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("346","19"," Physical Education","87","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("347","20"," Physical Education","88","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("348","21"," Physical Education","90","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("349","22"," Physical Education","91","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("350","23"," Physical Education","91","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("351","24"," Physical Education","94","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("352","25"," Physical Education","91","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("353","26"," Physical Education","90","PASSED","Etor, Dimples C.","Dimples","C","Etor","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("354","27"," Physical Education","96","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("355","28"," Physical Education","89","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("356","29"," Physical Education","89","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("357","30"," Physical Education","87","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("358","31"," Physical Education","89","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("359","32"," Physical Education","91","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("360","33"," Physical Education","87","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("361","34"," Physical Education","89","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("362","35"," Physical Education","90","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("363","36"," Physical Education","91","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("364","37"," Physical Education","90","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("365","38"," Physical Education","92","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("366","39"," Physical Education","91","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("367","40"," Physical Education","89","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("368","41"," Physical Education","88","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","Female");
INSERT INTO grade VALUES("369","42"," Physical Education","90","PASSED","Tejano, Christine May","Christine May","T","Tejano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("370","43"," Physical Education","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Second","First","2022 - 2023");
INSERT INTO grade VALUES("371","3"," Physical Education","90","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("372","4"," Physical Education","92","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("373","5"," Physical Education","90","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("374","6"," Physical Education","87","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("375","7"," Physical Education","89","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("376","8"," Physical Education","89","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("377","9"," Physical Education","86","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("378","10"," Physical Education","90","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("379","11"," Physical Education","90","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("380","12"," Physical Education","91","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("381","13"," Physical Education","92","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("382","14"," Physical Education","90","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("383","15"," Physical Education","89","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("384","16"," Physical Education","89","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("385","17"," Physical Education","89","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("386","18"," Physical Education","90","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("387","19"," Physical Education","91","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("388","20"," Physical Education","95","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("389","21"," Physical Education","93","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("390","22"," Physical Education","93","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("391","23"," Physical Education","89","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("392","24"," Physical Education","91","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("393","25"," Physical Education","92","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("394","26"," Physical Education","89","PASSED","Etor, Dimples C.","Dimples","C","Etor","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("395","27"," Physical Education","90","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("396","28"," Physical Education","91","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("397","29"," Physical Education","89","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("398","30"," Physical Education","90","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("399","31"," Physical Education","90","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("400","32"," Physical Education","89","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("401","33"," Physical Education","91","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("402","34"," Physical Education","90","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("403","35"," Physical Education","89","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("404","36"," Physical Education","90","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("405","37"," Physical Education","90","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("406","38"," Physical Education","90","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("407","39"," Physical Education","90","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("408","40"," Physical Education","90","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("409","41"," Physical Education","90","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("410","42"," Physical Education","89","PASSED","Tejano, Christine May","Christine May","T","Tejano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("411","43"," Physical Education","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("412","3"," Physical Education","91","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("413","4"," Physical Education","93","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("414","5"," Physical Education","90","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("415","6"," Physical Education","90","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("416","7"," Physical Education","89","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("417","8"," Physical Education","91","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("418","9"," Physical Education","89","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("419","10"," Physical Education","89","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("420","11"," Physical Education","92","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("421","12"," Physical Education","91","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("422","13"," Physical Education","93","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("423","14"," Physical Education","91","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("424","15"," Physical Education","92","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("425","16"," Physical Education","92","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("426","17"," Physical Education","91","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("427","18"," Physical Education","89","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("428","19"," Physical Education","89","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("429","20"," Physical Education","90","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("430","21"," Physical Education","90","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("431","22"," Physical Education","91","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("432","23"," Physical Education","93","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("433","24"," Physical Education","95","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("434","25"," Physical Education","93","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("435","26"," Physical Education","95","PASSED","Etor, Dimples C.","Dimples","C","Etor","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("436","27"," Physical Education","93","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("437","28"," Physical Education","92","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("438","29"," Physical Education","90","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("439","30"," Physical Education","90","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("440","31"," Physical Education","92","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("441","32"," Physical Education","92","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("442","33"," Physical Education","91","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("443","34"," Physical Education","91","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("444","35"," Physical Education","93","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("445","36"," Physical Education","92","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("446","37"," Physical Education","91","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("447","38"," Physical Education","94","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("448","39"," Physical Education","90","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("449","40"," Physical Education","93","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("450","41"," Physical Education","94","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("451","42"," Physical Education","93","PASSED","Tejano, Christine May","Christine May","T","Tejano","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("452","43"," Physical Education","94","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("453","3"," E-Tech","88","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("454","4"," E-Tech","87","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("455","5"," E-Tech","85","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("456","6"," E-Tech","88","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("457","7"," E-Tech","89","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("458","8"," E-Tech","88","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("459","9"," E-Tech","88","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("460","10"," E-Tech","89","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("461","11"," E-Tech","89","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("462","12"," E-Tech","89","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("463","13"," E-Tech","89","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("464","14"," E-Tech","90","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("465","15"," E-Tech","88","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("466","16"," E-Tech","87","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("467","17"," E-Tech","88","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("468","18"," E-Tech","88","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("469","19"," E-Tech","84","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("470","20"," E-Tech","90","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("471","21"," E-Tech","91","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("472","22"," E-Tech","88","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("473","23"," E-Tech","86","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("474","24"," E-Tech","89","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("475","25"," E-Tech","89","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("476","26"," E-Tech","90","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("477","27"," E-Tech","90","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("478","28"," E-Tech","87","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("479","29"," E-Tech","88","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("480","30"," E-Tech","86","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("481","31"," E-Tech","90","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("482","32"," E-Tech","92","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("483","33"," E-Tech","88","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("484","34"," E-Tech","90","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("485","35"," E-Tech","84","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("486","36"," E-Tech","88","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("487","37"," E-Tech","92","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("488","38"," E-Tech","87","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("489","39"," E-Tech","90","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("490","40"," E-Tech","92","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("491","41"," E-Tech","89","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("492","42"," E-Tech","89","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("493","43"," E-Tech","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("494","3"," E-Tech","90","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("495","4"," E-Tech","89","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("496","5"," E-Tech","91","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("497","6"," E-Tech","89","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("498","7"," E-Tech","90","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("499","8"," E-Tech","89","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("500","9"," E-Tech","88","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("501","10"," E-Tech","89","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("502","11"," E-Tech","89","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("503","12"," E-Tech","90","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("504","13"," E-Tech","91","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("505","14"," E-Tech","89","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("506","15"," E-Tech","91","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("507","16"," E-Tech","89","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("508","17"," E-Tech","91","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("509","18"," E-Tech","90","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("510","19"," E-Tech","91","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("511","20"," E-Tech","90","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("512","21"," E-Tech","89","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("513","22"," E-Tech","87","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("514","23"," E-Tech","90","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("515","24"," E-Tech","90","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("516","25"," E-Tech","89","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("517","26"," E-Tech","90","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("518","27"," E-Tech","90","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("519","28"," E-Tech","93","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("520","29"," E-Tech","92","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("521","30"," E-Tech","88","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("522","31"," E-Tech","90","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("523","32"," E-Tech","89","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("524","33"," E-Tech","91","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("525","34"," E-Tech","91","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("526","35"," E-Tech","92","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("527","36"," E-Tech","90","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("528","37"," E-Tech","88","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("529","38"," E-Tech","87","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("530","39"," E-Tech","90","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("531","40"," E-Tech","91","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("532","41"," E-Tech","91","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("533","42"," E-Tech","92","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","2022 - 2023");
INSERT INTO grade VALUES("534","43"," E-Tech","91","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Fourth","Second","Female");
INSERT INTO grade VALUES("535","3"," General Mathematics","88","PASSED","Closas, Andre Sebastien","Andre Sebastien","V","Closas","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("536","4"," General Mathematics","89","PASSED","Gabutan, Hyuan Sebastian F.","Hyuan Sebastian","F","Gabutan","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("537","5"," General Mathematics","90","PASSED","Macarambon, Mohammad Nasief S.","Mohammad Nasief","S","Macarambon","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("538","6"," General Mathematics","90","PASSED","Mariveles, Jazz Jhoren F.","Jazz","Jhoren F.","Mariveles","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("539","7"," General Mathematics","89","PASSED","Montecillo, Christian Cleopas V.","Christian Cleopas","V","Montecillo","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("540","8"," General Mathematics","88","PASSED","Orias, Jan Deirdre B.","Jan Deirdre","B","Orias","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("541","9"," General Mathematics","89","PASSED","Tanael, Renz Theron T.","Renz Theron","T","Tanael","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("542","10"," General Mathematics","88","PASSED","Usman, Abdul Hadiy M.","Abdul Hadiy","M","Usman","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("543","11"," General Mathematics","91","PASSED","Absin, Maire Gleam L.","Maire Gleam","L","Absin","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("544","12"," General Mathematics","90","PASSED","Alad-Ad, Wp. El Jane","Wp. El Jane","Wp","Alad- Ad","Male","Glitz Wyn Sobisol","Lilac","","11","Blezza Faith Licera","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("545","13"," General Mathematics","90","PASSED","Alberto, Krissha Noreen M.","krissha Noreen","M","Alberto","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("546","14"," General Mathematics","90","PASSED","Aliser, Chelsy Claire A.","Chelsy Claire","A","Aliser","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("547","15"," General Mathematics","90","PASSED","Allera, Nicole L.","Nicole","L","Allera","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("548","16"," General Mathematics","89","PASSED","Arandoque, Charlyn A.","Charlyn","A","Arandoque","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("549","17"," General Mathematics","89","PASSED","Avenido, Trixie May P.","Trixie May","P","Avenido","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("550","18"," General Mathematics","90","PASSED","Bongcawil, Abegail May D.","Abegail May","D","Bongcawil","Male","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("551","19"," General Mathematics","89","PASSED","Borongan, Mez Khenny D.","Mez Khenny","D","Borongan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("552","20"," General Mathematics","91","PASSED","Cabigquez, Keonna Lo D.","Keonna Lo","D","Cabigquez","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("553","21"," General Mathematics","90","PASSED","Del Rosario, Alexandra Sophia C.","Alexandra Sophia","C","Del Rosario","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("554","22"," General Mathematics","91","PASSED","Deromol, Ella Mae R.","Ella Mae","R","Deromol","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("555","23"," General Mathematics","88","PASSED","Duhaylungsod, Jea Valerie C.","Jea Valerie","C","Duhaylungsod","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("556","24"," General Mathematics","89","PASSED","Dumalag, Sophia Mae C.","Sophia Mae","C","Dumalag","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("557","25"," General Mathematics","89","PASSED","Duran, Alyssa Mae O.","Alyssa Mae","O","Duran","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("558","26"," General Mathematics","90","PASSED","Etor, Dimples C.","Dimples","C","Etor","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("559","27"," General Mathematics","86","PASSED","Fuderanan, Nina Amor A.","Nina Amor","A","Fuderanan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("560","28"," General Mathematics","89","PASSED","Lapinig, Kristina Faye L.","Kristina Faye","L","Lapinig","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("561","29"," General Mathematics","90","PASSED","Magsayo, Nicoletter R.","Nicoletter","R","Magsayo","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("562","30"," General Mathematics","90","PASSED","Mehila, Alya Norshein S.","Alya Norshein","S","Mehila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("563","31"," General Mathematics","90","PASSED","Moquiala, Kemgee Azalea E.","Kemgee Azalea","E","Moquiala","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("564","32"," General Mathematics","90","PASSED","Oguis, Cylaine O.","Cylaine","o","Oguis","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("565","33"," General Mathematics","89","PASSED","Pacquiao, Kimpril Jean S.","Kimpril Jean","S","Pacquiao","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("566","34"," General Mathematics","90","PASSED","Paghasian, Ella Marie C.","Ella Marie","C","Paghasian","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("567","35"," General Mathematics","90","PASSED","Pano, Van Lorraine S.","Van Lorraine","S","Pano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("568","36"," General Mathematics","89","PASSED","Patria, Jazmien S.","Jazmien","S","Patria","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("569","37"," General Mathematics","91","PASSED","Paunillan, Gwyneth Chyle L.","Gwyneth Chyle","L","Paunillan","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("570","38"," General Mathematics","92","PASSED","Quijano, Dyna B.","Dyna","B","Quijano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("571","39"," General Mathematics","90","PASSED","Ranes, Anray Los L.","Anray Los","L","Ranes","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("572","40"," General Mathematics","88","PASSED","Sanguila, Jehanne M.","Jehanne","M","Sanguila","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("573","41"," General Mathematics","91","PASSED","Sinco, Hilary Jane T.","Hilary Jane","T","Sinco","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");
INSERT INTO grade VALUES("574","42"," General Mathematics","92","PASSED","Tejano, Christine May","Christine May","T","Tejano","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","2022 - 2023");
INSERT INTO grade VALUES("575","43"," General Mathematics","90","PASSED","Tingal, Tifanny Mae M.","Tifanny Mae","M","Tingal","Female","Glitz Wyn Sobisol","Lilac","","11","Glitz Wyn Sobisol","Third","Second","Female");



CREATE TABLE `number` (
  `grade` int(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `principal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `p2name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO principal VALUES("1","Karen Gay P. Dy, PhD","Karen Gay P. Dy, PhD");



CREATE TABLE `schoolyear` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO schoolyear VALUES("1","2022-2023");



CREATE TABLE `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `adviser` varchar(255) NOT NULL,
  `t1` varchar(255) NOT NULL,
  `t2` varchar(255) NOT NULL,
  `t3` varchar(255) NOT NULL,
  `t4` varchar(255) NOT NULL,
  `t5` varchar(255) NOT NULL,
  `t6` varchar(255) NOT NULL,
  `t7` varchar(255) NOT NULL,
  `t8` varchar(255) NOT NULL,
  `t9` varchar(255) NOT NULL,
  `t10` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO section VALUES("2","Lilac","11","admin","Veldin Talorete","","Glitz Wyn Sobisol","Nashiva Ampuan","Lida Albaran","Normia Mangansan","","Dhena Sabdula","","");
INSERT INTO section VALUES("3","Rose","12","","Veldin Talorete","","","","Glitz Wyn Sobisol","","","","","");
INSERT INTO section VALUES("4","Tearose","7","","Aisah M. Paulo","","yawa","Glitz Wyn Sobisol","","","","","","");
INSERT INTO section VALUES("67","Iris","11","","Glitz Wyn Sobisol","","","","","","","","","");
INSERT INTO section VALUES("68","Saturn","7","","","","","","","","","","","");
INSERT INTO section VALUES("69","Venus","7","","","","","","","","","","","");
INSERT INTO section VALUES("70","Sapphire","8","","","Glitz Wyn Sobisol","","","","","","","","");
INSERT INTO section VALUES("71","Ruby","8","","","","","","","","","","","");
INSERT INTO section VALUES("72","Gold","9","","","","","","","","","","","");
INSERT INTO section VALUES("73","Diamond","9","","","","","","","","","","","");
INSERT INTO section VALUES("74","Einstein","10","","","","","","","","","","","");
INSERT INTO section VALUES("75","Newton","10","","","","","","","","","","","");
INSERT INTO section VALUES("76","Kepler","10","","","","","","","","","","","");
INSERT INTO section VALUES("77","Tea Rose","11","","","","","","","","","","","");
INSERT INTO section VALUES("78","Tulip","11","","","","","","","","","","","");
INSERT INTO section VALUES("79","Daisy","11","","","","","","","","","","","");
INSERT INTO section VALUES("80","Scorpio","12","","","","","","","","","","","");
INSERT INTO section VALUES("81","Capricorn","12","","","","","","","","","","","");
INSERT INTO section VALUES("82","Taurus","12","","","","","","","","","","","");
INSERT INTO section VALUES("83","Gemini","12","","","","Glitz Wyn Sobisol","","","","","","","");
INSERT INTO section VALUES("84","Leo","12","","","","","","","","","","","");



CREATE TABLE `students` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idnumber` varchar(255) NOT NULL,
  `lrnnumber` varchar(255) CHARACTER SET utf16 COLLATE utf16_general_ci NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `suffix` varchar(3) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthplace` varchar(250) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `parent` varchar(250) NOT NULL,
  `adviser_id` varchar(255) NOT NULL,
  `syear` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `trackstrand` varchar(255) NOT NULL,
  `subjectteacher1` varchar(255) NOT NULL,
  `subjectteacher2` varchar(255) NOT NULL,
  `subjectteacher3` varchar(255) NOT NULL,
  `subjectteacher4` varchar(255) NOT NULL,
  `subjectteacher5` varchar(255) NOT NULL,
  `subjectteacher6` varchar(255) NOT NULL,
  `subjectteacher7` varchar(255) NOT NULL,
  `subjectteacher8` varchar(255) NOT NULL,
  `subjectteacher9` varchar(255) NOT NULL,
  `subjectteacher10` varchar(255) NOT NULL,
  `subt2` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `subject6` varchar(255) NOT NULL,
  `subject7` varchar(255) NOT NULL,
  `subject8` varchar(255) NOT NULL,
  `subject9` varchar(255) NOT NULL,
  `subject10` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`firstname`,`fullname`,`lastname`) USING BTREE,
  KEY `bm` (`syear`),
  KEY `jjds` (`adviser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18446744073709551615 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO students VALUES("1","1","1","John Keats","P","Alforque","Alforque, John Keats P.","","Male","Lanao del Norte","","0","","","Blezza Faith Licera","2022 - 2023","11","Iris","","Glitz Wyn Sobisol","","","","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Pre-Calculus","General Chemistry 1");
INSERT INTO students VALUES("2","2","2","Josh Riel","E","Araula","Araula, Josh Riel E.","","Male","Lanao del Norte","","0","","","Blezza Faith Licera","2022 - 2023","11","Iris","","Glitz Wyn Sobisol","","","","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Pre-Calculus","General Chemistry 1");
INSERT INTO students VALUES("3","3","3","Andre Sebastien","V","Closas","Closas, Andre Sebastien","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("4","4","4","Hyuan Sebastian","F","Gabutan","Gabutan, Hyuan Sebastian F.","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("5","5","5","Mohammad Nasief","S","Macarambon","Macarambon, Mohammad Nasief S.","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("6","6","6","Jazz","Jhoren F.","Mariveles","Mariveles, Jazz Jhoren F.","","Male","Lanao del Norte","2005-04-14","18","Lanao del Norte","Mother","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("7","7","7","Christian Cleopas","V","Montecillo","Montecillo, Christian Cleopas V.","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("8","8","8","Jan Deirdre","B","Orias","Orias, Jan Deirdre B.","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("9","9","9","Renz Theron","T","Tanael","Tanael, Renz Theron T.","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("10","10","10","Abdul Hadiy","M","Usman","Usman, Abdul Hadiy M.","","Male","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("11","11","11","Maire Gleam","L","Absin","Absin, Maire Gleam L.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("12","12","12","Wp. El Jane","Wp","Alad- Ad","Alad-Ad, Wp. El Jane","","Female","Lanao del Norte","","0","","","Blezza Faith Licera","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("13","13","13","krissha Noreen","M","Alberto","Alberto, Krissha Noreen M.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("14","14","14","Chelsy Claire","A","Aliser","Aliser, Chelsy Claire A.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("15","15","15","Nicole","L","Allera","Allera, Nicole L.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("16","16","16","Charlyn","A","Arandoque","Arandoque, Charlyn A.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("17","17","17","Trixie May","P","Avenido","Avenido, Trixie May P.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("18","18","18","Abegail May","D","Bongcawil","Bongcawil, Abegail May D.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("19","19","19","Mez Khenny","D","Borongan","Borongan, Mez Khenny D.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("20","20","20","Keonna Lo","D","Cabigquez","Cabigquez, Keonna Lo D.","","Female","Lanao del Norte","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("21","21","21","Alexandra Sophia","C","Del Rosario","Del Rosario, Alexandra Sophia C.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("22","22","22","Ella Mae","R","Deromol","Deromol, Ella Mae R.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("23","23","23","Jea Valerie","C","Duhaylungsod","Duhaylungsod, Jea Valerie C.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("24","24","24","Sophia Mae","C","Dumalag","Dumalag, Sophia Mae C.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("25","25","25","Alyssa Mae","O","Duran","Duran, Alyssa Mae O.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("26","26","26","Dimples","C","Etor","Etor, Dimples C.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("27","27","27","Nina Amor","A","Fuderanan","Fuderanan, Nina Amor A.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("28","28","28","Kristina Faye","L","Lapinig","Lapinig, Kristina Faye L.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("29","29","29","Nicoletter","R","Magsayo","Magsayo, Nicoletter R.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("30","30","30","Alya Norshein","S","Mehila","Mehila, Alya Norshein S.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("31","31","31","Kemgee Azalea","E","Moquiala","Moquiala, Kemgee Azalea E.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("32","32","32","Cylaine","o","Oguis","Oguis, Cylaine O.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("33","33","33","Kimpril Jean","S","Pacquiao","Pacquiao, Kimpril Jean S.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("34","34","34","Ella Marie","C","Paghasian","Paghasian, Ella Marie C.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("35","35","35","Van Lorraine","S","Pano","Pano, Van Lorraine S.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("36","36","36","Jazmien","S","Patria","Patria, Jazmien S.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("37","37","37","Gwyneth Chyle","L","Paunillan","Paunillan, Gwyneth Chyle L.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("38","38","38","Dyna","B","Quijano","Quijano, Dyna B.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("39","39","39","Anray Los","L","Ranes","Ranes, Anray Los L.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("40","40","40","Jehanne","M","Sanguila","Sanguila, Jehanne M.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("41","41","41","Hilary Jane","T","Sinco","Sinco, Hilary Jane T.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("42","42","42","Christine May","T","Tejano","Tejano, Christine May","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");
INSERT INTO students VALUES("43","43","43","Tifanny Mae","M","Tingal","Tingal, Tifanny Mae M.","","Female","","","0","","","Glitz Wyn Sobisol","2022 - 2023","11","Lilac","","","","Glitz Wyn Sobisol","Nashiva Ampuan","","","","","","","","Oral Communication","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","General Mathematics","Earth Science","21st Century Literature from the Philippines and the World","Physical Education","Values and Self","E-Tech","Organization and Management","Business Mathematics");



CREATE TABLE `sub_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjectname` varchar(255) NOT NULL,
  `studentname` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `subjects` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `teacher1` varchar(255) NOT NULL,
  `teacher2` varchar(255) NOT NULL,
  `teacher3` varchar(255) NOT NULL,
  `teacher4` varchar(255) NOT NULL,
  `teacher5` varchar(255) NOT NULL,
  `teacher6` varchar(255) NOT NULL,
  `teacher7` varchar(255) NOT NULL,
  `teacher8` varchar(255) NOT NULL,
  `teacher9` varchar(255) NOT NULL,
  `teacher10` varchar(255) NOT NULL,
  `subjectgrouphead` varchar(255) NOT NULL,
  `subjectgrouphead2` varchar(255) NOT NULL,
  `subjectgrouphead3` varchar(255) NOT NULL,
  `subjectgrouphead4` varchar(255) NOT NULL,
  `subjectgrouphead5` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `section2` varchar(255) NOT NULL,
  `section3` varchar(255) NOT NULL,
  `section4` varchar(255) NOT NULL,
  `section5` varchar(255) NOT NULL,
  `section6` varchar(10) NOT NULL,
  `section7` varchar(10) NOT NULL,
  `section8` varchar(10) NOT NULL,
  `section9` varchar(10) NOT NULL,
  `section10` varchar(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `bn` (`subjectgrouphead`),
  KEY `s` (`teacher1`)
) ENGINE=InnoDB AUTO_INCREMENT=612412470 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO subjects VALUES("0","Values and Self","","","","","","","","","","","","","","","","","","","","","","","","","","12");
INSERT INTO subjects VALUES("11","E-Tech","","","","","","","","","","","","","","","","Lilac","","","Lilac","Lilac","","","","","","13");
INSERT INTO subjects VALUES("12","FILIPINO","Glitz Wyn Sobisol","","","","","Glitz Wyn Sobisol","","","","","teacher","","","","","Lilac","Rose","","","","","","","","","14");
INSERT INTO subjects VALUES("13","MATH","","","","","","","","","","","admin","","","","","Lilac","","","","","","","","","","15");
INSERT INTO subjects VALUES("88","DISS","","","","","","","","","","","","","","","","","","","","","","","","","","16");
INSERT INTO subjects VALUES("0","21st Century Literature from the Philippines and the World","","","","","","","","","","","","","","","","","","","","","","","","","","123");
INSERT INTO subjects VALUES("0","Business Mathematics","","","","","","","","","","","","","","","","","","","","","","","","","","2333");
INSERT INTO subjects VALUES("0","General Mathematics","","","","","","","","","","","","","","","","","","","","","","","","","","51422");
INSERT INTO subjects VALUES("0","Earth Science","","","","","","","","","","","","","","","","","","","","","","","","","","314141");
INSERT INTO subjects VALUES("0","General Chemistry 1","","","","","","","","","","","","","","","","","","","","","","","","","","44112421");
INSERT INTO subjects VALUES("0","Komunikasyon at Pananaliksik sa Wika at","","","","","","","","","","","","","","","","","","","","","","","","","","612412412");
INSERT INTO subjects VALUES("0","Testing","","","","","","","","","","","","","","","","","","","","","","","","","","612412413");
INSERT INTO subjects VALUES("0","Testing","","","","","","","","","","","","","","","","","","","","","","","","","","612412414");
INSERT INTO subjects VALUES("0","Oral Communication","","","","","","","","","","","","","","","","","","","","","","","","","","612412415");
INSERT INTO subjects VALUES("0","Physical Education","","","","","","","","","","","","","","","","","","","","","","","","","","612412416");
INSERT INTO subjects VALUES("0","Pre-Calculus","","","","","","","","","","","","","","","","","","","","","","","","","","612412417");
INSERT INTO subjects VALUES("0","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","","","","","","","","","","","","","","","","","","","","","","","","","","612412418");
INSERT INTO subjects VALUES("0","Organization and Management","","","","","","","","","","","","","","","","","","","","","","","","","","612412419");
INSERT INTO subjects VALUES("0","AP","","","","","","","","","","","","","","","","","","","","","","","","","","612412420");
INSERT INTO subjects VALUES("0","ESP","","","","","","","","","","","","","","","","","","","","","","","","","","612412421");
INSERT INTO subjects VALUES("0","SCIENCE","","","","","","","","","","","","","","","","","","","","","","","","","","612412422");
INSERT INTO subjects VALUES("0","Reading &amp; Writing","","","","","","","","","","","","","","","","","","","","","","","","","","612412423");
INSERT INTO subjects VALUES("0","Pagbasa at Pagsusuri sa Iba&#039;t ibang teksto","","","","","","","","","","","","","","","","","","","","","","","","","","612412424");
INSERT INTO subjects VALUES("0","Statistics &amp; Probability","","","","","","","","","","","","","","","","","","","","","","","","","","612412425");
INSERT INTO subjects VALUES("0","Disaster Readiness &amp; Risk Reduction","","","","","","","","","","","","","","","","","","","","","","","","","","612412426");
INSERT INTO subjects VALUES("0","Introduction to Philosophy of the Human Persons","","","","","","","","","","","","","","","","","","","","","","","","","","612412427");
INSERT INTO subjects VALUES("0","Values and Family","","","","","","","","","","","","","","","","","","","","","","","","","","612412428");
INSERT INTO subjects VALUES("0","Practical Research","","","","","","","","","","","","","","","","","","","","","","","","","","612412429");
INSERT INTO subjects VALUES("0","Creative  writing/Malikhaing pagsulat","","","","","","","","","","","","","","","","","","","","","","","","","","612412430");
INSERT INTO subjects VALUES("0","Discipline on Applied Social Science","","","","","","","","","","","","","","","","","","","","","","","","","","612412431");
INSERT INTO subjects VALUES("0","Principle of Marketing","","","","","","","","","","","","","","","","","","","","","","","","","","612412432");
INSERT INTO subjects VALUES("0","Fundamental of ABM","","","","","","","","","","","","","","","","","","","","","","","","","","612412433");
INSERT INTO subjects VALUES("0","Computer System Servicing","","","","","","","","","","","","","","","","","","","","","","","","","","612412434");
INSERT INTO subjects VALUES("0","BPP","","","","","","","","","","","","","","","","","","","","","","","","","","612412435");
INSERT INTO subjects VALUES("0","EIM","","","","","","","","","","","","","","","","","","","","","","","","","","612412436");
INSERT INTO subjects VALUES("0","Automotive","","","","","","","","","","","","","","","","","","","","","","","","","","612412437");
INSERT INTO subjects VALUES("0","Media &amp; Information Literacy","","","","","","","","","","","","","","","","","","","","","","","","","","612412438");
INSERT INTO subjects VALUES("0","Contemporary Arts from the region &amp; the world","","","","","","","","","","","","","","","","","","","","","","","","","","612412439");
INSERT INTO subjects VALUES("0","Inquiries, Investigation &amp; Immersion","","","","","","","","","","","","","","","","","","","","","","","","","","612412440");
INSERT INTO subjects VALUES("0","Entrepreneurship","","","","","","","","","","","","","","","","","","","","","","","","","","612412441");
INSERT INTO subjects VALUES("0","Filipino sa Piling larangan","","","","","","","","","","","","","","","","","","","","","","","","","","612412442");
INSERT INTO subjects VALUES("0","General Biology 2","","","","","","","","","","","","","","","","","","","","","","","","","","612412443");
INSERT INTO subjects VALUES("0","General Physics 2","","","","","","","","","","","","","","","","","","","","","","","","","","612412444");
INSERT INTO subjects VALUES("0","Capstone Project","","","","","","","","","","","","","","","","","","","","","","","","","","612412445");
INSERT INTO subjects VALUES("0","Community Engagement","","","","","","","","","","","","","","","","","","","","","","","","","","612412446");
INSERT INTO subjects VALUES("0","Culmination Program","","","","","","","","","","","","","","","","","","","","","","","","","","612412447");
INSERT INTO subjects VALUES("0","KPWKP","","","","","","","","","","","","","","","","","","","","","","","","","","612412448");
INSERT INTO subjects VALUES("0","TCLPW","","","","","","","","","","","","","","","","","","","","","","","","","","612412449");
INSERT INTO subjects VALUES("0","Creative Writing","","","","","","","","","","","","","","","","","","","","","","","","","","612412450");
INSERT INTO subjects VALUES("0","Physical Education 2","","","","","","","","","","","","","","","","","","","","","","","","","","612412451");
INSERT INTO subjects VALUES("0","Physical Science","","","","","","","","","","","","","","","","","","","","","","","","","","612412452");
INSERT INTO subjects VALUES("0","PPITTP","","","","","","","","","","","","","","","","","","","","","","","","","","612412453");
INSERT INTO subjects VALUES("0","Creative Nonfiction","","","","","","","","","","","","","","","","","","","","","","","","","","612412454");
INSERT INTO subjects VALUES("0","EAP","","","","","","","","","","","","","","","","","","","","","","","","","","612412455");
INSERT INTO subjects VALUES("0","Personal Development","","","","","","","","","","","","","","","","","","","","","","","","","","612412456");
INSERT INTO subjects VALUES("0","Physical Education 3","","","","","","","","","","","","","","","","","","","","","","","","","","612412457");
INSERT INTO subjects VALUES("0","Practical Research 2","","","","","","","","","","","","","","","","","","","","","","","","","","612412458");
INSERT INTO subjects VALUES("0","TNTCT21stC","","","","","","","","","","","","","","","","","","","","","","","","","","612412459");
INSERT INTO subjects VALUES("0","UCSP","","","","","","","","","","","","","","","","","","","","","","","","","","612412460");
INSERT INTO subjects VALUES("0","CESC","","","","","","","","","","","","","","","","","","","","","","","","","","612412461");
INSERT INTO subjects VALUES("0","CPAR","","","","","","","","","","","","","","","","","","","","","","","","","","612412462");
INSERT INTO subjects VALUES("0","FPL","","","","","","","","","","","","","","","","","","","","","","","","","","612412463");
INSERT INTO subjects VALUES("0","III","","","","","","","","","","","","","","","","","","","","","","","","","","612412464");
INSERT INTO subjects VALUES("0","MIL","","","","","","","","","","","","","","","","","","","","","","","","","","612412465");
INSERT INTO subjects VALUES("0","Physical Education 4","","","","","","","","","","","","","","","","","","","","","","","","","","612412466");
INSERT INTO subjects VALUES("0","WI/R/CA/CA","","","","","","","","","","","","","","","","","","","","","","","","","","612412467");
INSERT INTO subjects VALUES("0","Araling Panlipunan","","","","","","","","","","","","","","","","","","","","","","","","","","612412468");
INSERT INTO subjects VALUES("0","HTML","","","","","","","","","","","","","","","","","","","","","","","","","","612412469");



CREATE TABLE `teacher` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `advisory` int(11) NOT NULL,
  `st1` varchar(255) NOT NULL,
  `st2` varchar(255) NOT NULL,
  `st3` varchar(255) NOT NULL,
  `st4` varchar(255) NOT NULL,
  `st5` varchar(255) NOT NULL,
  `st6` varchar(255) NOT NULL,
  `st7` varchar(255) NOT NULL,
  `st8` varchar(255) NOT NULL,
  `st9` varchar(255) NOT NULL,
  `st10` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`username`),
  KEY `test` (`name`),
  KEY `one` (`advisory`),
  KEY `teacher` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO teacher VALUES("admin","admin","21232f297a57a5a743894a0e4a801fc3
","Reyris Milmao","1","ENGLISH","","","","","","","","","");
INSERT INTO teacher VALUES("yawa","yawa","21232f297a57a5a743894a0e4a801fc3","yawa","0","","","","","","","","","","");



CREATE TABLE `trackstrand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO trackstrand VALUES("1","TVL-ICT");



CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `advisory` varchar(255) NOT NULL,
  `subjectid` int(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `role2` varchar(255) NOT NULL,
  `role3` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL,
  `sub5` varchar(255) NOT NULL,
  `sub6` varchar(255) NOT NULL,
  `sub7` varchar(255) NOT NULL,
  `sub8` varchar(255) NOT NULL,
  `sub9` varchar(255) NOT NULL,
  `sub10` varchar(255) NOT NULL,
  `st1` varchar(255) NOT NULL,
  `sgh1` varchar(255) NOT NULL,
  `sgh2` varchar(255) NOT NULL,
  `sgh3` varchar(255) NOT NULL,
  `sgh4` varchar(255) NOT NULL,
  `sgh5` varchar(255) NOT NULL,
  `sec1` varchar(255) NOT NULL,
  `sec2` varchar(255) NOT NULL,
  `sec3` varchar(255) NOT NULL,
  `sec4` varchar(255) NOT NULL,
  `sec5` varchar(255) NOT NULL,
  `sec6` varchar(255) NOT NULL,
  `sec7` varchar(255) NOT NULL,
  `sec8` varchar(255) NOT NULL,
  `sec9` varchar(255) NOT NULL,
  `sec10` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `xp` int(11) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`username`),
  KEY `advisory` (`advisory`)
) ENGINE=InnoDB AUTO_INCREMENT=135236 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO users VALUES("123","Nor-Asia Dimatanday","Nor-Asia Dimatanday","Nor-Asia Dimatanday","","0","adviser","subject teacher","registrar staff","E-Tech","General Mathematics","21st Century Literature from the Philippines and the World","Physical Education","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","Oral Communication","Business Mathematics","Organization and Management","Values and Self","Earth Science","","","","","","","Lilac","Sapphire","Gemini","Tearose","","","","","","","1","0","2022-2023");
INSERT INTO users VALUES("134","Normia Mangansan","Normia Mangansan","Normia Mangansan","","0","adviser","subject teacher","registrar staff","E-Tech","General Mathematics","21st Century Literature from the Philippines and the World","Physical Education","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","Oral Communication","Business Mathematics","Organization and Management","Values and Self","Earth Science","","","","","","","Lilac","Sapphire","Gemini","Tearose","","","","","","","1","0","2022-2023");
INSERT INTO users VALUES("1423","Norissa Cabug","Norissa Cabug","Norissa Cabug","","0","adviser","subject teacher","registrar staff","E-Tech","General Mathematics","21st Century Literature from the Philippines and the World","Physical Education","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","Oral Communication","Business Mathematics","Organization and Management","Values and Self","Earth Science","","","","","","","Lilac","Sapphire","Gemini","Tearose","","","","","","","1","0","2022-2023");
INSERT INTO users VALUES("1432","Rahimah Mackno","Rahimah Mackno","Rahimah Mackno","","0","adviser","subject teacher","registrar staff","E-Tech","General Mathematics","21st Century Literature from the Philippines and the World","Physical Education","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","Oral Communication","Business Mathematics","Organization and Management","Values and Self","Earth Science","","","","","","","Lilac","Sapphire","Gemini","Tearose","","","","","","","1","0","2022-2023");
INSERT INTO users VALUES("3423","Reggie Baguio","Reggie Baguio","Reggie Baguio","","0","adviser","subject teacher","registrar staff","E-Tech","General Mathematics","21st Century Literature from the Philippines and the World","Physical Education","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","Oral Communication","Business Mathematics","Organization and Management","Values and Self","Earth Science","","","","","","","Lilac","Sapphire","Gemini","Tearose","","","","","","","1","0","2022-2023");
INSERT INTO users VALUES("12234","Omar Cauntongan","Omar Cauntongan","Omar Cauntongan","","0","adviser","subject teacher","registrar staff","E-Tech","General Mathematics","21st Century Literature from the Philippines and the World","Physical Education","Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino","Oral Communication","Business Mathematics","Organization and Management","Values and Self","Earth Science","","","","","","","Lilac","Sapphire","Gemini","Tearose","","","","","","","1","0","2022-2023");



CREATE TABLE `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `syear` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO year VALUES("1","2022-2023");
INSERT INTO year VALUES("2","2020-2021");

