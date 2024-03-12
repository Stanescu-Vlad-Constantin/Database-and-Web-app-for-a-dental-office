/*#############################################################*/
/*        PARTEA 1 - STERGEREA SI RECREAREA BAZEI DE DATE      */

DROP DATABASE cabinetStomatologicDB;
CREATE DATABASE cabinetStomatologicDB;
USE cabinetStomatologicDB;

/*#############################################################*/




/*#############################################################*/
/*                  PARTEA 2 - CREAREA TABELELOR              */

CREATE TABLE tblMedici(
	idMedic SMALLINT(2) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
	numeMedic VARCHAR(100) NOT NULL,
	cnpMedic CHAR(13) UNIQUE NOT NULL,
	nrTelefonMedic VARCHAR(15) NOT NULL,
	adresaMailMedic VARCHAR(50),
	dataAngajare DATE
);

CREATE TABLE tblServicii(
	idServiciu SMALLINT(2) ZEROFILL PRIMARY KEY,
	denumireServiciu VARCHAR(150) NOT NULL UNIQUE,
	durataServiciu VARCHAR(50),
	tarifServiciu SMALLINT(4) NOT NULL
);

CREATE TABLE tblTratament(
	idTratament SMALLINT(2) ZEROFILL PRIMARY KEY,
	denumireMedicament VARCHAR(50),
	dozaRecomandata VARCHAR(50),
	detalii VARCHAR(150)
);

CREATE TABLE tblPacienti(
	idPacient SMALLINT(5) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
	numePacient VARCHAR(100) NOT NULL,
	nrTelefonPacient VARCHAR(15) NOT NULL,
	adresaMailPacient VARCHAR(50),
	cnpPacient CHAR(13) UNIQUE NOT NULL,
	codTratament SMALLINT(2) ZEROFILL,
	CONSTRAINT fk_tratament FOREIGN KEY(codTratament)
		REFERENCES tblTratament(idTratament) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE tblProgramari(
	idProgramare SMALLINT(3) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
	dataProgramare DATE NOT NULL,
	oraProgramare TIME NOT NULL,
	tipServiciu SMALLINT(2) ZEROFILL,
	medicAles SMALLINT(2) ZEROFILL,
	codPacient SMALLINT(3) ZEROFILL,
	CONSTRAINT fk_serviciuAles FOREIGN KEY(tipServiciu)
		REFERENCES tblServicii(idServiciu) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_medicAles FOREIGN KEY(medicAles)
		REFERENCES tblMedici(idMedic) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT fk_pacient FOREIGN KEY(codPacient)
		REFERENCES tblPacienti(idPacient) ON DELETE CASCADE ON UPDATE CASCADE
);





/*#############################################################*/




/*#############################################################*/
/*         PARTEA 3 - INSERAREA INREGISTRARILOR IN TABELE      */

INSERT INTO tblMedici VALUES(1, "Iordache Maria", "2920703290020", "0727224347", "dr_maria_iordache@gmail.com", "2018-11-04");
INSERT INTO tblMedici VALUES(2, "Butnaru Mihaela", "2880322341187", "0733045855", "butnaru_mihaela03@gmail.com", "2010-07-27");
INSERT INTO tblMedici VALUES(3, "Bucsa Horia", "1750625431221", "0727568481", "horiabucsa2002@yahoo.com", "2004-06-26");
INSERT INTO tblMedici VALUES(4, "Ciobanu Gheorghe", "1801213221234", "0268318886", "ciobanugigi@yahoo.com", "2009-03-11");
INSERT INTO tblMedici VALUES(5, "Serban Gabriela", "2831017532127", "0723620866", "dr.serbangabriela@yahoo.com", "2011-04-21");
INSERT INTO tblMedici VALUES(6, "Barbu Gloria Cristina", "2900101293488", "0729822566", "b231267gloria@yahoo.com", "2015-12-10");
INSERT INTO tblMedici VALUES(7, "Florea Claudia Cristina", "2950526387719", "0741908559", "dr.claudiaflorea@yahoo.com", "2022-09-01");
INSERT INTO tblMedici VALUES(8, "Ionescu Anca Maria", "2881111651248", "0760257337", "contact@smiledentalspa.ro", "2014-11-20");
INSERT INTO tblMedici VALUES(9, "Elencu Elena", "2701206448912", "0721391103", "cabinet@luxurydentestet.ro", "1997-05-09");
INSERT INTO tblMedici VALUES(10, "Ionescu Roxana", "2920219671139", "0746425113", "ionescuroxana@yahoo.com", "2019-03-29");

INSERT INTO tblServicii VALUES(1, "Consultatie", "10 minute", 100);
INSERT INTO tblServicii VALUES(2, "Consultatie urgenta", "15 minute", 120);
INSERT INTO tblServicii VALUES(3, "Incizie abces", "20 minute", 150);
INSERT INTO tblServicii VALUES(4, "Albire Dentara Enlighten", "30 minute", 1200);
INSERT INTO tblServicii VALUES(5, "Cimentare inel molar", "20 minute", 80);
INSERT INTO tblServicii VALUES(6, "Gutiera", "30 minute", 200);
INSERT INTO tblServicii VALUES(7, "Extractie monoradicular", "30 minute", 150);
INSERT INTO tblServicii VALUES(8, "Extractie pluriradicular", "1 ora", 250);
INSERT INTO tblServicii VALUES(9, "Extractie molar de minte total erupt", "1 ora si 30 de minute", 300);
INSERT INTO tblServicii VALUES(10, "Extractie molar de minte semiinclus", "1 ora si 15 minute", 350);
INSERT INTO tblServicii VALUES(11, "Extractie molar de minte/canin inclus", "1 ora si 30 minute", 450);
INSERT INTO tblServicii VALUES(12, "Extractie rest radicular", "1 ora", 200);
INSERT INTO tblServicii VALUES(13, "Reparatie proteza", "1 ora", 150);
INSERT INTO tblServicii VALUES(14, "Pachet   Detartraj Complet: Detartraj + Periaj + Airflow", "1 ora", 149);
INSERT INTO tblServicii VALUES(15, "Pachet PRO: Detartraj + Periaj + Airflow + Albire cu Gutiere", "1 ora si 30 minute", 490);
INSERT INTO tblServicii VALUES(16, "Aparat dentar fix metalic", "2 ore", 990);
INSERT INTO tblServicii VALUES(17, "Aparat dentar safir", "2 ore", 2000);
INSERT INTO tblServicii VALUES(18, "Aparat autoligaturant metalic", "2 ore", 2000);
INSERT INTO tblServicii VALUES(19, "Aparat autoligaturant fizionomic", "2 ore", 2500);
INSERT INTO tblServicii VALUES(20, "Recolare bracket metalic", "15 minute", 35);
INSERT INTO tblServicii VALUES(21, "Recolare bracket safir", "15 minute", 50);
INSERT INTO tblServicii VALUES(22, "Recolare bracket DAMON Q", "20 minute", 75);
INSERT INTO tblServicii VALUES(23, "Recolare bracket DAMON CLEAR", "20 minute", 100);
INSERT INTO tblServicii VALUES(24, "Scut lingual", "45 minute", 300);
INSERT INTO tblServicii VALUES(25, "Gutiera de corectie", "30 minute", 250);




INSERT INTO tblTratament VALUES(1, "Amoxicilina", "1000 mg", "se administreaza o data la 12h");
INSERT INTO tblTratament VALUES(2, "Eritromicina", "250-500 mg", "se administreaza o data la 6h");
INSERT INTO tblTratament VALUES(3, "Metronidazol", "500-750 mg", "se administreaza o data la 8h");
INSERT INTO tblTratament VALUES(4, "Ketoprofen", "200 mg", "se administreaza o data la 24h");
INSERT INTO tblTratament VALUES(5, "Nimensulida", "200 mg", "se administreaza o data la 24h, maxim 15 zile");
INSERT INTO tblTratament VALUES(6, "Dexketoprofen", "75 mg", "se administreaza o data la 24h");
INSERT INTO tblTratament VALUES(7, "Arcoxia", "120 mg", "se administreaza o data la 24h");
INSERT INTO tblTratament VALUES(8, "Celecoxib", "400 mg", "se administreaza o data la 24h");
INSERT INTO tblTratament VALUES(9, "Naproxen sodic", "660 mg", "se administreaza o data la 24h");
INSERT INTO tblTratament VALUES(10, "Cefuroxim", "1 g", "se administreaza o data la 24h");



INSERT INTO tblPacienti VALUES(1, "Dumitrache Florentina", "0722172398", NULL, "2750202697204", NULL);
INSERT INTO tblPacienti VALUES(2, "Stanescu Vlad", "0728393444", "vlads2009@yahoo.com", "5010727102830", 4);
INSERT INTO tblPacienti VALUES(3, "Popescu Mircea", "0733928467", "popmircea12@gmail.com", "1980226928733", 7);
INSERT INTO tblPacienti VALUES(4, "Gheorghe Andrei", "0733467823", NULL, "1900609123209", 2);
INSERT INTO tblPacienti VALUES(5, "Ursache Corneliu", "0787172404", NULL, "1891105697340", NULL);
INSERT INTO tblPacienti VALUES(6, "Alexandru Teodor", "0722398333", "alexteo22@yahoo.ro", "5010202302288", NULL);
INSERT INTO tblPacienti VALUES(7, "Stroe Elena", "0747567425", "elenas2@gmail.com", "2800421321876", 10);
INSERT INTO tblPacienti VALUES(8, "Chiriac Manuela", "0734768221", NULL, "2960101689290", NULL);
INSERT INTO tblPacienti VALUES(9, "Cazacu Adina Maria", "0743118765", NULL, "6011115742204", 1);
INSERT INTO tblPacienti VALUES(10, "Popa Daniel", "0732390711", "danipopa99@yahoo.com", "1990727103820", 1);
INSERT INTO tblPacienti VALUES(11, "Vaduva Mihaela", "0787354766", NULL, "2980112387202", NULL);
INSERT INTO tblPacienti VALUES(12, "Marian Vlad", "0765788203", "marianv32@gmail.com", "1880522303494", 9);
INSERT INTO tblPacienti VALUES(13, "Cristian Andrei", "0767800634", NULL, "5010726103644", 3);
INSERT INTO tblPacienti VALUES(14, "Cora Adrian", "0744390712", NULL, "1780505460230", NULL);
INSERT INTO tblPacienti VALUES(15, "Dumitrache Laurentiu", "0721733908", "laur1289@yahoo.com", "1930828012288", NULL);
INSERT INTO tblPacienti VALUES(16, "Scarlatescu George", "0746802103", NULL, "1690321103880", 6);
INSERT INTO tblPacienti VALUES(17, "Ivan Horatiu", "0722911002", "ivanh12@yahoo.ro", "5010902202697", 5);
INSERT INTO tblPacienti VALUES(18, "Florescu Robert", "0766771210", NULL, "1990110390103", NULL);
INSERT INTO tblPacienti VALUES(19, "Caroli Dragos", "0732882300", NULL, "1910902221298", 8);
INSERT INTO tblPacienti VALUES(20, "Lascu Paul", "0735876102", "paullascu95@gmail.com", "1791118693211", 10);



INSERT INTO tblProgramari VALUES(1, "2023-12-09", "12:30", 14, 4, 1);
INSERT INTO tblProgramari VALUES(2, "2023-12-09", "13:30", 2, 1, 4);
INSERT INTO tblProgramari VALUES(3, "2023-12-17", "10:45", 5, 7, 3);
INSERT INTO tblProgramari VALUES(4, "2024-02-01", "08:30", 25, 10, 7);
INSERT INTO tblProgramari VALUES(5, "2024-01-29", "11:20", 20, 2, 9);
INSERT INTO tblProgramari VALUES(6, "2024-03-01", "09:45", 17, 7, 6);
INSERT INTO tblProgramari VALUES(7, "2023-12-17", "13:15", 7, 8, 11);
INSERT INTO tblProgramari VALUES(8, "2024-01-11", "10:30", 9, 5, 8);
INSERT INTO tblProgramari VALUES(9, "2024-01-11", "12:00", 15, 5, 12);
INSERT INTO tblProgramari VALUES(10, "2024-02-27", "15:00", 8, 2, 9);
INSERT INTO tblProgramari VALUES(11, "2024-01-11", "14:20", 14, 4, 10);
INSERT INTO tblProgramari VALUES(12, "2024-01-19", "09:00", 24, 3, 11);
INSERT INTO tblProgramari VALUES(13, "2024-01-11", "11:20", 21, 9, 13);
INSERT INTO tblProgramari VALUES(14, "2023-12-21", "13:30", 14, 10, 14);
INSERT INTO tblProgramari VALUES(15, "2024-04-10", "08:00", 19, 2, 17);
INSERT INTO tblProgramari VALUES(16, "2024-03-13", "12:00", 2, 1, 16);
INSERT INTO tblProgramari VALUES(17, "2024-02-07", "14:45", 23, 10, 7);
INSERT INTO tblProgramari VALUES(18, "2023-12-11", "11:30", 3, 3, 18);
INSERT INTO tblProgramari VALUES(19, "2024-04-10", "09:00", 18, 6, 20);
INSERT INTO tblProgramari VALUES(20, "2024-01-15", "15:30", 1, 1, 19);



/*#############################################################*/



/*#############################################################*/
/*  PARTEA 4 - VIZUALIZAREA STUCTURII BD SI A INREGISTRARILOR  */

DESCRIBE tblMedici;
DESCRIBE tblServicii;
DESCRIBE tblTratament;
DESCRIBE tblPacienti;
DESCRIBE tblProgramari;


SELECT * FROM tblMedici;
SELECT * FROM tblServicii;
SELECT * FROM tblTratament;
SELECT * FROM tblPacienti;
SELECT * FROM tblProgramari;


/*#############################################################*/
