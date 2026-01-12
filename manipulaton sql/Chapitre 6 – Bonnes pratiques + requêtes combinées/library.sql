-- SCRIPT POUR AJOUTER LES DONNER DE NOUVEAUX PERSONELL
START TRANSACTION;
-- adding the personell data
INSERT INTO PERSONELL (Nom, email, tel, motDePasse, ChefID) VALUES
('Admin', 'admin@mail.com', '0600000000', 'admin123', NULL),
('Supervisor', 'supervisor@mail.com', '0600000001', 'super123', 1),
('Staff One', 'staff1@mail.com', '0600000002', 'staff123', 2),
('Staff Two', 'staff2@mail.com', '0600000003', 'staff123', 2),
('Staff Three', 'staff3@mail.com', '0600000004', 'staff123', 2);
-- editing the ouvrage anne publication where id=1
UPDATE Ouvrage
SET AneePublication = 1990
WHERE OuvrageID=1;

ROLLBACK;
-- cancel all the changes if an ereur found!!!
