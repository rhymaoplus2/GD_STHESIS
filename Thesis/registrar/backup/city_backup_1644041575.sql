

CREATE TABLE `tblcity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO tblcity VALUES("1","Pasig");
INSERT INTO tblcity VALUES("2","Quezon");
INSERT INTO tblcity VALUES("3","Makati");
INSERT INTO tblcity VALUES("4","Taguig");

