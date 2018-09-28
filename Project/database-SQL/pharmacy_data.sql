-- Doctor values
insert into Doctor values(1, 'Jill', 'Clark', 'Cardiologist', 20);
insert into Doctor values(2, 'Kevin', 'Jones', 'Cardiologist', 5);	
insert into Doctor values(22, 'Susan', 'Young', 'Pathologist', 24);
insert into Doctor values(23, 'Jim', 'Brook', 'Pathologist', 2);
insert into Doctor values(28, 'Donald', 'Knuth', 'Pathologist', 13);
insert into Doctor values(10, 'George', 'House', 'Pathologist', 8);	
insert into Doctor values(11, 'Sheldon', 'Davis', 'Gynaecologist', 25);
insert into Doctor values(17, 'Kevin', 'Hodge', 'Gynaecologist', 17);
insert into Doctor values(99, 'Hue', 'Jackman', 'Rheumatologist', 10);
insert into Doctor values(89, 'Ian', 'Higgins', 'Rheumatologist', 12);
insert into Doctor values(7, 'Manuel', 'Copeland', 'Pediatrician', 33);
insert into Doctor values(5, 'Peter', 'Gosling', 'Pediatrician', 3);    
insert into Doctor values(77, 'Mathew', 'Higgins', 'Anesthesiologists‎', 9);
insert into Doctor values(8, 'Allan', 'Turing', ' Surgeons‎', 27);
insert into Doctor values(3, 'John', 'Skywalker', 'Dermatologists‎', 2);	

-- Patient values
insert into Patient values(13, 'George', 'Peters', 'Athens', 'Hughes Mission', 23, 10010, 33, 10);
insert into Patient values(14, 'Patrick', 'Lindsey', 'Athens', 'South Wayne', 5, 10072, 8, 7);
insert into Patient values(15, 'Spencer', 'Santos', 'Athens', 'Boyer Street', 7, 10087, 77, 1);
insert into Patient values(16, 'Walter', 'West', 'Thessaloniki', 'Gardner Port', 90, 10025, 45, 99);
insert into Patient values(17, 'Justin', 'Haley', 'Thessaloniki', 'East Dean', 10, 10013, 37 ,22);
insert into Patient values(18, 'Rebecca', 'Vasquez', 'Lamia', 'Hughes', 25, 10010, 39,11);
insert into Patient values(19, 'Bob', 'Jones', 'Volos', 'North Wayne', 45, 10072, 15, 5);
insert into Patient values(20, 'Nick', 'Santos', 'Kriti', 'Boulevard', 37, 10087, 7, 8);
insert into Patient values(21, 'Kevin', 'Rhoads', 'Athens', 'Gardner ', 92, 10025, 49, 89);
insert into Patient values(22, 'Morgan', 'Brooks', 'Karpenisi', 'Kritis', 19, 10013, 12 ,23);
insert into Patient values(23, 'Rebecca', 'Vasquez', 'Patra', 'Hughes Mission', 27, 10010, 83,2);
insert into Patient values(24, 'Jim', 'Anderson', 'Patra', 'Wayne', 25, 10072, 81, 77);
insert into Patient values(25, 'Maria', 'Papadaki', 'Rhode', 'Boyer Street', 17, 10087, 37,17);
insert into Patient values(26, 'John', 'Aldrich', 'Xanthi', 'Kousidi', 99, 10025, 40, 28);
insert into Patient values(27, 'Nick', 'Higgins', 'Athens', 'Mesogion', 17, 10013, 32 ,3);

-- PharmaceuticalCompany values
insert into PharmaceuticalCompany values(44, 'Carlson and Sons', 4788437521);
insert into PharmaceuticalCompany values(19, 'Powell', 3491645945);
insert into PharmaceuticalCompany values(73, 'Woods-Stuart', 8355408118);
insert into PharmaceuticalCompany values(27, 'AstraZeneca', 5135249164);
insert into PharmaceuticalCompany values(93, 'Bean-Cook', 6718243450);
insert into PharmaceuticalCompany values(47, 'Novo Nordisk', 4788437521);
insert into PharmaceuticalCompany values(17, 'Vianex', 3491645945);
insert into PharmaceuticalCompany values(71, 'Brystol-Myers', 8355408118);
insert into PharmaceuticalCompany values(32, 'Bayers', 5135249164);
insert into PharmaceuticalCompany values(13, 'Novartis', 6718243450);
insert into PharmaceuticalCompany values(51, 'Phizer', 4788437521);
insert into PharmaceuticalCompany values(12, 'Sanofi', 3491645945);
insert into PharmaceuticalCompany values(75, 'Lilly', 8355408118);
insert into PharmaceuticalCompany values(16, 'Actavis', 5135249164);
insert into PharmaceuticalCompany values(81, 'Baxter', 6718243450);

-- Pharmacy values
insert into Pharmacy values(3, 'Knapp', 'Athens', 'Melissaland', 55, 10072, 2104567210);
insert into Pharmacy values(10,'Reed', 'Athens', 'Port Alan', 23, 10025, 2102314235);
insert into Pharmacy values(4, 'Ellis', 'Athens', 'Danielston Street', 11, 10010, 2103725125);
insert into Pharmacy values(20,'Lewis-health', 'Thessaloniki', 'Cole Street', 19, 10013, 2892887956);
insert into Pharmacy values(8, 'Dawson', 'Thessaloniki', 'Stravenue', 77, 10087, 9821445202);
insert into Pharmacy values(7, 'Lamia-Health', 'Lamia', 'Melissaland', 50, 36172, 2231057987);
insert into Pharmacy values(5, 'George-Health', 'Lamia', 'Port Alan', 62, 35225, 2231021314);
insert into Pharmacy values(1, 'Get-Healthy', 'Lamia', 'Danielston Street', 117, 36010, 2231024256);
insert into Pharmacy values(14,'Huey-Pharmacy', 'Patra', 'Cole Street', 20, 36013, 2610141567);
insert into Pharmacy values(25,'Andersons', 'Patra', 'Stravenue', 35, 35088, 2610131457);
insert into Pharmacy values(31,'Peters', 'Karpenisi', 'Melissaland', 65, 32082, 2237025341);
insert into Pharmacy values(11,'Pauls-Pharmacy', 'Xanthi', 'Port Alan', 12, 22027, 2541012345);
insert into Pharmacy values(17,'Smith-Pharmacy', 'Kriti', 'Danielston Street', 71, 33015, 2821034578);
insert into Pharmacy values(9, 'Newhealth', 'Rhode', 'Cole Street', 85, 21015, 2241087956);
insert into Pharmacy values(15,'JonsonHealth', 'Volos', 'Stravenue', 21, 36807, 2421045202);	

-- Drug values
insert into Drug values(2, 'Depon', 'depon', 19);
insert into Drug values(3, 'Ponstan', 'ponstan', 19);
insert into Drug values(40, 'Xozal', 'cortizone', 19);
insert into Drug values(50, 'Zoloft', 'ceftazidime', 19);	
insert into Drug values(11, 'Brufen', 'ibuprofen', 93);
insert into Drug values(65, 'Tramadol', 'chlorhexidine', 93);
insert into Drug values(70, 'Xanax', 'Adrenaline', 93);
insert into Drug values(15, 'Propoven', 'ipropoven', 93);
insert into Drug values(7, 'Ativan', 'azithromycin', 44);
insert into Drug values(29, 'Naproxen', 'Biphasic', 44);
insert into Drug values(6, 'Lumaren', 'ranitidine', 44);	
insert into Drug values(55, 'Metformin', 'cefuroxime', 27);
insert into Drug values(42, 'Medrol', 'cortizone', 27);
insert into Drug values(23, 'Augmentin', 'amoxicillin', 73);	
insert into Drug values(12, 'Lyrica', 'follitropin', 73);		

-- Prescription values
insert into Prescription values(15, 1, 42, '2016-09-18', 5);
insert into Prescription values(16, 99, 6, '2015-12-25', 2);
insert into Prescription values(17, 22, 11, '2014-02-15', 10);
insert into Prescription values(14, 7, 2, '2015-06-18', 2);
insert into Prescription values(13, 10, 23, '2015-05-06', 7);
insert into Prescription values(13, 10, 11, '2016-05-06', 9);
insert into Prescription values(20, 2, 3, '2015-09-18', 2);
insert into Prescription values(19, 23, 40, '2015-12-25', 15);
insert into Prescription values(18, 28, 50, '2017-02-15', 13);
insert into Prescription values(22, 11, 65, '2015-06-18', 7);
insert into Prescription values(18, 17, 70, '2013-05-06', 9);
insert into Prescription values(21, 17, 50, '2009-05-06', 1);
insert into Prescription values(23, 89, 15, '2002-09-18', 50.2);
insert into Prescription values(25, 5, 7, '2011-12-25', 25.5);
insert into Prescription values(23, 77, 29, '2017-02-15', 100.3);
insert into Prescription values(24, 8, 55, '2012-06-18', 225.47);
insert into Prescription values(26, 3, 12, '2008-05-06', 70.9);
insert into Prescription values(27, 3, 29, '2005-05-06', 70.9);	

-- Sell values
insert into Sell values(20, 7, 5);
insert into Sell values(8, 2, 3);
insert into Sell values(4, 11, 17);
insert into Sell values(10, 6, 82);
insert into Sell values(3, 55, 25);
insert into Sell values(7, 70, 12);
insert into Sell values(5, 40, 15);
insert into Sell values(8, 12, 2);
insert into Sell values(1, 3, 9);
insert into Sell values(14, 29, 12);
insert into Sell values(25, 23, 22);
insert into Sell values(31, 65, 13);
insert into Sell values(17, 42, 23);
insert into Sell values(11, 2, 18);
insert into Sell values(9, 11, 14);
insert into Sell values(15, 3, 16);
insert into Sell values(10, 50, 21);
insert into Sell values(3, 15, 15);	
	
-- Contract values
insert into Contract values(20, 19, '2015-05-10', '2020-09-15', 'SUBMITTED','George');
insert into Contract values(4, 27, '2008-11-08', '2018-02-26', 'SUBMITTED', 'Manolis');
insert into Contract values(10, 73, '2016-02-21', '2019-05-24','SUBMITTED', 'Chris');
insert into Contract values(8, 44, '2008-10-14', '2023-12-07', 'SUBMITTED', 'John');
insert into Contract values(3, 93, '2009-09-13', '2017-08-07', 'SUBMITTED', 'Nick');
insert into Contract values(7, 47, '2015-05-10', '2020-09-15', 'SUBMITTED','George');
insert into Contract values(1, 71, '2011-11-08', '2022-02-26', 'SUBMITTED', 'Bill');
insert into Contract values(25, 13, '2012-02-21', '2019-05-24','SUBMITTED', 'Jim');
insert into Contract values(11, 12, '2015-10-14', '2018-12-07', 'SUBMITTED', 'John');
insert into Contract values(9, 16, '2013-09-13', '2019-08-07', 'SUBMITTED', 'Nick');
insert into Contract values(5, 17, '2015-05-10', '2020-09-15', 'SUBMITTED','George');
insert into Contract values(14, 32, '2014-11-08', '2022-02-26', 'SUBMITTED', 'Bob');
insert into Contract values(31, 51, '2017-02-21', '2019-05-24','SUBMITTED', 'Alex');
insert into Contract values(17, 75, '2013-10-14', '2018-12-07', 'SUBMITTED', 'John');
insert into Contract values(15, 81, '2014-09-13', '2017-08-07', 'SUBMITTED', 'Chris');


commit;

