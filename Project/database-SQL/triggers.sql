--Den svhnoume Prescription
DELIMITER $$
create trigger Drug_Delete BEFORE DELETE ON Drug 
FOR EACH ROW BEGIN
 	DELETE FROM Sell WHERE Sell.DrugId = old.DrugId;
 	DELETE FROM Prescription WHERE Prescription.DrugId = old.DrugId;
END$$
DELIMITER ;

--PharmaceuticalCompany constraint
DELIMITER $$
create trigger PhC_Delete BEFORE DELETE ON PharmaceuticalCompany
FOR EACH ROW BEGIN
 	DELETE FROM Drug WHERE old.PharmaceuticalCompanyId = Drug.PharmaceuticalCompanyId; 
END$$
DELIMITER ;


DELETE FROM Sell WHERE Sell.DrugId = old.DrugId;

--kata th diagrafh giatrou diagrafoume ton antistoixo pelath pou parakoloutheitai apo auton to giatro
DELIMITER $$
create trigger  Doctor_Delete BEFORE DELETE ON Doctor
FOR EACH ROW BEGIN
 	DELETE FROM Patient WHERE old.DoctorId = Patient.DoctorId;
 	DELETE FROM Prescription WHERE old.DoctorId = Prescription.DoctorId;
END$$
DELIMITER ;

