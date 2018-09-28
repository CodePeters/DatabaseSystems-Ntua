create database Creds;
use Creds;
show tables;

create table credentials(
userid int not null AUTO_INCREMENT,
username varchar(15) not null,
password varchar(100) not null,
primary key(userid) );

insert into credentials values(1, 'George', 'c654d0a09166bdbc3632d006c92b09a09574666e');

commit;