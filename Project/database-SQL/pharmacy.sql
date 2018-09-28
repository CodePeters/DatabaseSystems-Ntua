create database DrugStore;
use DrugStore;
show tables;

create table Doctor(
DoctorId int not null AUTO_INCREMENT,
FirstName varchar(15) not null,
LastName varchar(15) not null,
Speciality varchar(20),
ExperienceYears int check(ExperienceYears>=0),
primary key(DoctorId) );
	
create table Patient(
PatientId int not null AUTO_INCREMENT ,
FirstName varchar(15) not null,
LastName varchar(15) not null,
Town varchar(20) not null,
StreetName varchar(20) ,
Number int  check(Number>0),
PostalCode int check(PostalCode>0),
Age int check(Age>0),
DoctorId int not null,
foreign key(DoctorId) references Doctor(DoctorId),
primary key(PatientId) );

create table Pharmacy(
PharmacyId int not null AUTO_INCREMENT,
Name varchar(15) not null,
Town varchar(20) not null,
StreetName varchar(20) not null,
Number int  not null check(Number>0),
PostalCode int not null check(PostalCode>0),
PhoneNumber bigint not null check(PhoneNumber between 1000000000 AND 9999999999),
primary key(PharmacyId) );	

	
create table PharmaceuticalCompany(
PharmaceuticalCompanyId int not null AUTO_INCREMENT,
Name varchar(15) not null,
PhoneNumber bigint not null check(PhoneNumber between 1000000000 AND 9999999999),
primary key(PharmaceuticalCompanyId) );
	
create table Drug(
DrugId int not null AUTO_INCREMENT,
Name varchar(15) not null,
Formula varchar(15),
PharmaceuticalCompanyId int not null,
foreign key(PharmaceuticalCompanyId) references PharmaceuticalCompany(PharmaceuticalCompanyId) ON DELETE CASCADE ON UPDATE CASCADE,
primary key(DrugId) );

create table Prescription(
PatientId int not null,
DoctorId int not null,
DrugId int not null,
Date date not null,
Quantity int not null check(Quantity>0),
foreign key(PatientId) references Patient(PatientId) ON DELETE CASCADE ON UPDATE CASCADE,
foreign key(DoctorId) references Doctor(DoctorId),
foreign key(DrugId) references Drug(DrugId) ,
constraint presc_key primary key(PatientId,DoctorId,DrugId) );

create table Sell(
PharmacyId int not null,
DrugId int not null,
Price int check(Price>0),
foreign key(PharmacyId) references Pharmacy(PharmacyId) ON DELETE CASCADE ON UPDATE CASCADE,
foreign key(DrugId) references Drug(DrugId) ,
constraint sl_key primary key(PharmacyId,DrugId) );

create table Contract(
PharmacyId int not null,
PharmaceuticalCompanyId int not null,
StartDate date not null,
EndDate date not null,
Text varchar(20),
Supervisor varchar(15),
foreign key(PharmacyId) references Pharmacy(PharmacyId) ON DELETE CASCADE ON UPDATE CASCADE,
foreign key(PharmaceuticalCompanyId) references PharmaceuticalCompany(PharmaceuticalCompanyId) ON DELETE CASCADE ON UPDATE CASCADE,
constraint cntr_key primary key(PharmacyId,PharmaceuticalCompanyId) ,
constraint DatesCompatibility check(EndDate>StartDate));

commit;