create table if not exists users(
    id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name varchar(40) unique not null,
    email varchar(100) unique not null,
    gender varchar(1),
    mail_status Bool
);