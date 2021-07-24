CREATE TABLE Users (
                       id MEDIUMINT NOT NULL AUTO_INCREMENT,
                       f_name CHAR(30) NOT NULL,
                       l_name CHAR(30) NOT NULL,
                       email CHAR(40) NOT NULL,
                       password CHAR(150) NOT NULL,
                       PRIMARY KEY (id)
);