DROP TABLE IF EXISTS `convidados`;
CREATE TABLE `convidados` (
  `idConvidados` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Noivo` tinyint(3) unsigned DEFAULT '0',
  `Parentesco` varchar(20) DEFAULT NULL,
  `Familia` tinyint(1) DEFAULT NULL,
  `Confirmado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idConvidados`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convidados`
--

/*!40000 ALTER TABLE `convidados` DISABLE KEYS */;
INSERT INTO `convidados` (`idConvidados`,`Nome`,`Noivo`,`Parentesco`,`Familia`,`Confirmado`) VALUES 
 (1,'Wasty',0,'Mãe do noivo',1,1),
 (2,'Simone',1,'Mãe',2,0),
 (3,'Marido de Mick',1,NULL,3,0),
 (4,'Filho de Mick',1,NULL,3,0),
 (5,'Jefter',1,'Padrasto',2,0),
 (6,'Paulo',0,'Pai',1,1),
 (7,'Leda',1,'Vó',NULL,0),
 (8,'Etelvino',1,'Vô',NULL,0),
 (9,'Luciano',1,'Imão',2,0),
 (10,'Robson',1,'Tio',NULL,0),
 (11,'Silas',1,'Tio',NULL,0),
 (12,'Rogério',1,'Tio',NULL,0),
 (13,'André',1,'Tio',NULL,0),
 (14,'Lala',1,'Tia',NULL,0),
 (15,'Filha',1,'',NULL,0),
 (16,'Nadja',1,'Tia',NULL,0),
 (17,'Janiele',1,'Prima',NULL,0),
 (18,'João',1,'Tio',NULL,0),
 (19,'Josi',1,'Tia',NULL,0),
 (20,'Clemilson',1,'Tio',NULL,0),
 (21,'Charlene',1,'Tia',NULL,0),
 (22,'Maurina',1,'Vó',NULL,0),
 (23,'Samara',1,'',NULL,0),
 (24,'Miguel ',1,'Samara',NULL,0),
 (25,'Robert',1,'Samara',NULL,0),
 (26,'Luiza',1,NULL,NULL,0),
 (27,'Eliot',1,NULL,NULL,0),
 (28,'Marcos',1,'Jáfia',NULL,0),
 (29,'Marcos',1,NULL,NULL,0),
 (30,'Adriana',1,'Faculdade',NULL,0),
 (31,'Deró',1,'Vó',NULL,0),
 (32,'Sr João',1,NULL,NULL,0),
 (33,'Si',1,NULL,NULL,0),
 (34,'Liane',1,NULL,NULL,0),
 (35,'Anderson',1,NULL,NULL,0),
 (36,'Filha de Si',1,'Si',NULL,0),
 (37,'Filho de Liane',1,'Liliane',NULL,0),
 (38,'Filha de Liane',1,'Liliane',NULL,0),
 (39,'Léia',1,'Tia',NULL,0),
 (40,'Paulinha',1,NULL,NULL,0),
 (41,'Geovan',1,'Paulinha',NULL,0),
 (42,'Raimundo',1,'Pai da noiva',NULL,0),
 (43,'Leide',1,'Tia',NULL,0),
 (44,'Pá',1,'Leide',NULL,0),
 (45,'Jefinho',1,'Leide',NULL,0),
 (46,'Érica',1,'Tia',NULL,0),
 (47,'Esposo Érica',1,'Érica',NULL,0),
 (48,'Carol',1,'Érica',NULL,0),
 (49,'Pê',1,'Érica',NULL,0),
 (50,'Selma',1,'Tia',NULL,0),
 (51,'Esposo tia selma',1,'Selma',NULL,0),
 (52,'Ruth',1,NULL,NULL,0),
 (53,'Wesdron',1,NULL,NULL,0),
 (54,'Sobrinho Wesdron',1,NULL,NULL,0),
 (55,'Esposo Ruth',1,NULL,NULL,0),
 (56,'Joelma',1,NULL,NULL,0),
 (57,'Lohane ',1,'Joelma',NULL,0),
 (58,'Esposo Leide',1,NULL,NULL,0),
 (59,'Pedro Leide',1,NULL,NULL,0),
 (60,'Carlinhos',0,'Tio',NULL,0),
 (61,'Irineu',0,'Avô',NULL,0),
 (62,'Maria',0,'Avó',NULL,0),
 (63,'Marisa',0,'Amigo',5,1),
 (64,'Jelton',0,'Amigo',5,1),
 (65,'Jelton Neto',0,'Amigo',5,1),
 (66,'Allan',0,'Amigo',6,1),
 (67,'Samanta',0,'Amigo',6,1),
 (69,'Juliana',1,NULL,NULL,0),
 (70,'Drica',1,NULL,NULL,0),
 (71,'Miqueias',0,NULL,NULL,0),
 (72,'Maiara',1,NULL,NULL,0),
 (73,'Antônia',1,NULL,NULL,0),
 (74,'Dony',1,'Miqueias',NULL,0),
 (75,'Nilson',1,NULL,NULL,0),
 (76,'Sorriso',1,'Tio',NULL,0),
 (77,'Josias',1,'Marido miqueias',NULL,0),
 (78,'Jai',1,'Tio',NULL,0),
 (79,'Mira',1,NULL,NULL,0),
 (80,'Esposo Mira',1,NULL,NULL,0);
/*!40000 ALTER TABLE `convidados` ENABLE KEYS */;


--
-- Definition of table `damadehonra`
--

DROP TABLE IF EXISTS `damadehonra`;
CREATE TABLE `damadehonra` (
  `idDamaDeHonra` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idDamaDeHonra`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damadehonra`
--

/*!40000 ALTER TABLE `damadehonra` DISABLE KEYS */;
INSERT INTO `damadehonra` (`idDamaDeHonra`,`Nome`) VALUES 
 (1,'Vó Leda'),
 (2,'Vó Adriele'),
 (3,'Vó Ícaro'),
 (4,'Vó Maurina');
/*!40000 ALTER TABLE `damadehonra` ENABLE KEYS */;


--
-- Definition of table `datahoralocal`
--

DROP TABLE IF EXISTS `datahoralocal`;
CREATE TABLE `datahoralocal` (
  `iddatahoralocal` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Data` datetime DEFAULT NULL,
  `Local` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iddatahoralocal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahoralocal`
--

/*!40000 ALTER TABLE `datahoralocal` DISABLE KEYS */;
INSERT INTO `datahoralocal` (`iddatahoralocal`,`Data`,`Local`) VALUES 
 (1,'2025-05-13 15:00:00','Sítio alegria');
/*!40000 ALTER TABLE `datahoralocal` ENABLE KEYS */;


--
-- Definition of table `especial`
--

DROP TABLE IF EXISTS `especial`;
CREATE TABLE `especial` (
  `idespecial` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Papel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idespecial`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `especial`
--

/*!40000 ALTER TABLE `especial` DISABLE KEYS */;
INSERT INTO `especial` (`idespecial`,`Nome`,`Papel`) VALUES 
 (1,'Florzinha','Porta aliança'),
 (2,'Miguel','Arca da aliança'),
 (3,'Talita','Florista'),
 (4,'Tayla','Noivinho'),
 (5,'Caleb','Noivinho');
/*!40000 ALTER TABLE `especial` ENABLE KEYS */;


--
-- Definition of table `gastos`
--

DROP TABLE IF EXISTS `gastos`;
CREATE TABLE `gastos` (
  `idGastos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Gastos` varchar(45) DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  PRIMARY KEY (`idGastos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gastos`
--

/*!40000 ALTER TABLE `gastos` DISABLE KEYS */;
INSERT INTO `gastos` (`idGastos`,`Gastos`,`Valor`) VALUES 
 (1,'Vestido Noiva',1200.12),
 (2,'Comida',2000);
/*!40000 ALTER TABLE `gastos` ENABLE KEYS */;


--
-- Definition of table `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE `mensagem` (
  `idmensagem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Mensagem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idmensagem`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mensagem`
--

/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` (`idmensagem`,`Nome`,`Mensagem`) VALUES 
 (1,'Icaro','teste muito bom, lorem ypsolum bla bla bla');
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;


--
-- Definition of table `padrinhos`
--

DROP TABLE IF EXISTS `padrinhos`;
CREATE TABLE `padrinhos` (
  `idPadrinhos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Noivo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idPadrinhos`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `padrinhos`
--

/*!40000 ALTER TABLE `padrinhos` DISABLE KEYS */;
INSERT INTO `padrinhos` (`idPadrinhos`,`Nome`,`Noivo`) VALUES 
 (1,'Adriele',1),
 (2,'Rogério',1),
 (3,'Valéria',1),
 (4,'Bruno',1),
 (5,'Luan',1),
 (6,'Isila',1),
 (7,'Luciano',1),
 (8,'Fernanda',1),
 (9,'Bia',1),
 (10,'Emerson',1),
 (11,'Thaynara',1),
 (12,'Gabriel',1),
 (13,'Adriana',1),
 (14,'Má',1),
 (15,'Jáfia',1),
 (16,'Wesdron',1);
/*!40000 ALTER TABLE `padrinhos` ENABLE KEYS */;


--
-- Definition of table `presentes`
--

DROP TABLE IF EXISTS `presentes`;
CREATE TABLE `presentes` (
  `idpresentes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Item` varchar(20) DEFAULT NULL,
  `Abençoador` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idpresentes`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentes`
--

/*!40000 ALTER TABLE `presentes` DISABLE KEYS */;
INSERT INTO `presentes` (`idpresentes`,`Item`,`Abençoador`) VALUES 
 (1,'Geladeira','Icaro e Tati'),
 (2,'Guarda-Roupa',NULL);
/*!40000 ALTER TABLE `presentes` ENABLE KEYS */;


--
-- Definition of table `programacao`
--

DROP TABLE IF EXISTS `programacao`;
CREATE TABLE `programacao` (
  `idProgramacao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Coisa` varchar(45) DEFAULT NULL,
  `Data` datetime DEFAULT NULL,
  `Feito` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`idProgramacao`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programacao`
--

/*!40000 ALTER TABLE `programacao` DISABLE KEYS */;
INSERT INTO `programacao` (`idProgramacao`,`Coisa`,`Data`,`Feito`) VALUES 
 (1,'Fazer lista de convidados','2024-09-18 00:00:00',0);
/*!40000 ALTER TABLE `programacao` ENABLE KEYS */;