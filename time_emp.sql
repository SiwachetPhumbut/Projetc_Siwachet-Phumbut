CREATE TABLE time_emp (
    id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_emp VARCHAR(200) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    uname VARCHAR(200) NOT NULL,
    time_in VARCHAR(100) NOT NULL,
    time_out VARCHAR(100) NOT NULL,
   	id_dep VARCHAR(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;