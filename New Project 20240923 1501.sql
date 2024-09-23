DROP TABLE IF EXISTS `convidados`;
CREATE TABLE `convidados` (
  `idConvidados` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Noivo` tinyint(3) unsigned DEFAULT '0',
  `Parentesco` varchar(20) DEFAULT NULL,
  `Familia` tinyint(1) DEFAULT NULL,
  `Confirmado` tinyint(1) unsigned zerofill DEFAULT '0',
  PRIMARY KEY (`idConvidados`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convidados`
--

/*!40000 ALTER TABLE `convidados` DISABLE KEYS */;
INSERT INTO `convidados` (`idConvidados`,`Nome`,`Noivo`,`Parentesco`,`Familia`,`Confirmado`) VALUES 
 (1,'Wasty',0,'Mãe',1,1),
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
 (28,'Jáfia',1,NULL,NULL,0),
 (29,'Marcos',1,NULL,NULL,0),
 (30,'Adriana',1,'Faculdade',NULL,0),
 (31,'Deró',1,'Vó',NULL,0),
 (32,'Sr João',1,NULL,NULL,0),
 (33,'Si',1,NULL,NULL,0),
 (34,'Liliane',1,NULL,NULL,0),
 (35,'Anderson',1,NULL,NULL,0),
 (36,'Filha de Si',1,'Si',NULL,0),
 (37,'Filho de Liliane',1,'Liliane',NULL,0),
 (38,'Filha de Liliane',1,'Liliane',NULL,0),
 (39,'Léia',1,'Tia',NULL,0),
 (40,'Paulinha',1,NULL,NULL,0),
 (41,'Geovan',1,'Paulinha',NULL,0),
 (42,'Raimundo',1,'Pai',NULL,0),
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
 (62,'Maria',0,'Avó',NULL,0);
/*!40000 ALTER TABLE `convidados` ENABLE KEYS */;


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
-- Definition of table `padrinhos`
--

DROP TABLE IF EXISTS `padrinhos`;
CREATE TABLE `padrinhos` (
  `idPadrinhos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPadrinhos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `padrinhos`
--

/*!40000 ALTER TABLE `padrinhos` DISABLE KEYS */;
INSERT INTO `padrinhos` (`idPadrinhos`,`Nome`) VALUES 
 (1,'Adriele'),
 (2,'Rogério'),
 (3,'Teste 1'),
 (4,'Goku');
/*!40000 ALTER TABLE `padrinhos` ENABLE KEYS */;


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