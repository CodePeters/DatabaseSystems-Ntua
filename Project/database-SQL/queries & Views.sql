--1st Query: Doctor Name per Patient
select Patient.LastName, Patient.FirstName, Doctor.LastName, Doctor.FirstName
from Patient, Doctor
where Patient.DoctorId = Doctor.DoctorId  

--2nd Query: Drugs per Patient (group by patient id)
select Patient.PatientId, Patient.LastName, Patient.FirstName, Drug.Name 
from  Patient, Drug, Prescription
where Patient.PatientId = Prescription.PatientId AND Drug.DrugId = Prescription.DrugId
order by Patient.PatientId

--3rd Query: Companies per Pharmacy
select Pharmacy.PharmacyId, Pharmacy.Name, PharmaceuticalCompany.Name
from  Pharmacy, Contract, PharmaceuticalCompany
where Pharmacy.PharmacyId = Contract.PharmacyId AND Contract.PharmaceuticalCompanyId = PharmaceuticalCompany.PharmaceuticalCompanyId AND Contract.EndDate <??????? '20180101' 
order by Pharmacy.PharmacyId

--4th Query: Doctors with more than x years of  experience

select *
from Doctor
where Doctor.ExperienceYears > 'x'
order by Doctor.ExperienceYears desc


--5th Query: Pharmacies in a given city
select *
from  v1
where v1.Town = 'x'

--6th Query: Percentage of Doctors per speciality (pathologist)
select Count(Doctor.DoctorId) * 100 / ( select Count(Doctor.DoctorId) from Doctor) as Speciality_Percentage
from Doctor  
where Doctor.speciality = 'x'

--7th Query: drug, value, town and we wanna find in which pharmacies of the town given, the drug given costs less than the value given

select v1.PharmacyId, v1.PharmacyName
from v1,Sell,Drug
where (v1.Town = 'x') AND (Sell.DrugId = Drug.DrugId) AND (Drug.Name = 'y') AND (v1.PharmacyId = Sell.PharmacyId) AND (Sell.Price < 'z')  


--8th Query: Pharmacies with average prices of drugs less than the average  prices among all pharmacies

select *
from v2
group by v2.PharmacyId 
having v2.Average_Price < (select avg(v2.Average_Price)
                         from v2)

--9th Query:farmaka pou exoun syntagografhthei apo toul ena giatro 

select Drug.name
from Drug
where Drug.DrugId  in  (select Drug.DrugId
                        from Drug, Prescription
                        where Drug.DrugId= Prescription.DrugId)      


--10th Query: giatroi me thn pelateia tous se fthinousa seira

select Doctor.DoctorId, Doctor.LastName, Doctor.FirstName, count(Patient.PatientId) as Patients
from Doctor, Patient
where (Doctor.DoctorId= Patient.DoctorId)
group by Doctor.DoctorId
order by count(Patient.PatientId) desc


--view for pharmacies located in a given city

create view  v1(Town,PharmacyId,PharmacyName) as
     (select Pharmacy.Town,Pharmacy.PharmacyId, Pharmacy.Name
      from Pharmacy
      order by Pharmacy.Town)
         
--pharmacy and average drugPrice

create view v2(PharmacyId, PharmacyName, Average_Price) as
      (select Pharmacy.PharmacyId, Pharmacy.Name, avg(Sell.Price)
       from Sell, Pharmacy
       where Pharmacy.PharmacyId=Sell.PharmacyId
       group by Pharmacy.PharmacyId
       order by avg(Sell.Price) desc )
