DROP TABLE IF EXISTS `convidados`;
CREATE TABLE `convidados` (
  `idConvidados` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(20) DEFAULT NULL,
  `Noivo` tinyint(3) unsigned DEFAULT '0',
  `Parentesco` varchar(20) DEFAULT NULL,
  `Familia` tinyint(1) DEFAULT NULL,
  `Confirmado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idConvidados`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convidados`
--

/*!40000 ALTER TABLE `convidados` DISABLE KEYS */;
INSERT INTO `convidados` (`idConvidados`,`Nome`,`Noivo`,`Parentesco`,`Familia`,`Confirmado`) VALUES 
 (114,'Wasty Santos Aurich',0,'Mãe do Noivo',1,1),
 (116,'Paulo Sérgio Aurich',0,'Pai do Noivo',1,1),
 (117,'Irineu Aurich',0,'Avô do noivo',1,0),
 (118,'Marisa',0,'Colega de trabalho',2,0),
 (119,'Jelton',0,'Marisa',2,0),
 (120,'Jelton Neto',0,'Marisa',2,0),
 (121,'Pedro Henrique',0,'Amigo',3,0),
 (122,'Martha',0,'Amigo',3,0),
 (123,'Angelo',0,'Primo',4,0),
 (124,'Moça Angelo',0,'Angelo',4,0),
 (125,'Stefany',0,'Prima',4,0),
 (126,'Daniel',0,'Colega de trabalho',5,0),
 (127,'Sabrina',0,'Daniel',5,0),
 (128,'Leonardo Rufino',0,'Colega de trabalho',6,0),
 (129,'Yuri',0,'Colega de trabalho',7,0),
 (130,'Clovis',0,'Colega de trabalho',8,0),
 (131,'Namorada Clovis',0,'Clovis',8,0),
 (132,'Luciano',0,'Chefe',9,0),
 (133,'Carina',0,'Chefe',9,0),
 (134,'Jairo',0,'Colega de trabalho',10,0),
 (135,'Esposa Jairo',0,'Jairo',10,0),
 (136,'Cifer',0,'Amigo',11,0),
 (137,'Marta',0,'Tia',12,0),
 (138,'Osana',0,'Tia',NULL,0),
 (139,'Carol',0,'Prima',NULL,0),
 (140,'Noemia',0,'Tia',NULL,0),
 (141,'Rogério',0,'Tio',NULL,0),
 (142,'Richard',0,'Primo',NULL,0),
 (143,'Ingrid',0,'Primo',NULL,0),
 (144,'Telma',0,'Tia',NULL,0),
 (145,'Gildete',0,'Tia',NULL,0),
 (146,'Daiane',0,NULL,NULL,0),
 (147,'Marcio',0,NULL,NULL,0),
 (148,'Jamile',0,NULL,NULL,0),
 (149,'Jam',0,NULL,NULL,0),
 (150,'Drica',1,NULL,NULL,0),
 (151,'Carla',1,NULL,NULL,0),
 (152,'Carol',1,NULL,NULL,0),
 (153,'Simone',1,'Mãe da Noiva',NULL,0),
 (154,'Jefter',1,'Padrasto da Noiva',NULL,0),
 (155,'Etelvino',1,'Vô',NULL,0),
 (156,'Robson',1,'Tio',NULL,0),
 (157,'Silas',1,'Tio',NULL,0),
 (158,'Rogério ',1,'Tio',NULL,0),
 (159,'André',1,'Tio',NULL,0),
 (160,'Lala',1,'Esposa tio',NULL,0),
 (161,'Filha tio',1,NULL,NULL,0),
 (162,'Nadja',1,'Tia',NULL,0),
 (163,'Juliana',1,NULL,NULL,0),
 (164,'Janiele',1,NULL,NULL,0),
 (165,'Joao',1,NULL,NULL,0),
 (166,'Josi',1,NULL,NULL,0),
 (167,'Camila',1,NULL,NULL,0),
 (168,'Marcio',1,NULL,NULL,0),
 (169,'Sr João',1,NULL,NULL,0),
 (170,'Si',1,NULL,NULL,0),
 (171,'Liane',1,NULL,NULL,0),
 (172,'Filho Liane',1,NULL,NULL,0),
 (173,'Filho de Liane',1,NULL,NULL,0),
 (174,'Filha de Si',1,NULL,NULL,0),
 (175,'Raimundo',1,'Pai da Noiva',NULL,0),
 (176,'Antônia',1,'Chefe',NULL,0),
 (177,'Nilson',1,'Chefe',NULL,0),
 (178,'Erica',1,'Tia',NULL,0),
 (179,'Carol Erica',1,'Erica',NULL,0),
 (180,'Pê',1,'Erica',NULL,0),
 (181,'Tia Selma',1,NULL,NULL,0),
 (182,'Esposo tia selma',1,NULL,NULL,0),
 (183,'Joelma',1,NULL,NULL,0),
 (184,'Lohane',1,'Joelma',NULL,0),
 (185,'Esposo Leide',1,NULL,NULL,0),
 (186,'Pedro Leide',1,NULL,NULL,0),
 (187,'Levi tia',1,NULL,NULL,0),
 (188,'Crisiele',1,NULL,NULL,0),
 (189,'Crislane',1,NULL,NULL,0),
 (190,'Anisia',1,NULL,NULL,0),
 (191,'Wesron',1,NULL,NULL,0),
 (192,'Paixão',1,NULL,NULL,0),
 (193,'Reinaldo',1,NULL,NULL,0),
 (194,'Dayse',1,NULL,NULL,0),
 (195,'Thiago',1,NULL,NULL,0),
 (196,'Bianca',1,NULL,NULL,0),
 (197,'Davi',1,NULL,NULL,0),
 (198,'Bianca',1,NULL,NULL,0),
 (199,'Cleomildo',1,NULL,NULL,0),
 (200,'Vania',1,NULL,NULL,0),
 (201,'Cida',1,NULL,NULL,0),
 (202,'Familia Cida',1,NULL,NULL,0),
 (203,'Marcio',1,NULL,NULL,0),
 (204,'Marilia',1,NULL,NULL,0),
 (205,'Rhuan',1,NULL,NULL,0),
 (206,'Camila',1,NULL,NULL,0),
 (207,'Miqueias',1,NULL,NULL,0),
 (208,'Josias',1,NULL,NULL,0),
 (209,'Dhone',1,NULL,NULL,0),
 (210,'Rosa',1,NULL,NULL,0),
 (211,'Zé Carlos',1,NULL,NULL,0),
 (212,'Luis',1,NULL,NULL,0),
 (214,'Marisa',0,'Colega de trabalho',2,0);
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
 (1,'2025-05-10 15:00:00','EunaFlora');
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
  `Meio pagamento` varchar(45) DEFAULT NULL,
  `pagante` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idGastos`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gastos`
--

/*!40000 ALTER TABLE `gastos` DISABLE KEYS */;
INSERT INTO `gastos` (`idGastos`,`Gastos`,`Valor`,`Meio pagamento`,`pagante`) VALUES 
 (1,'Roupa (Vestido noiva)',2000,'',2),
 (2,'Entrada (14 cento à 35)',490,NULL,1),
 (3,'Fotografo',1800,NULL,1),
 (4,'Ornamentação',5500,NULL,1),
 (5,'Bolo',490,NULL,2),
 (7,'Roupa (Noivo)',500,NULL,1),
 (8,'Madrinha/Padrinho',400,NULL,2),
 (9,'Espaço',1500,NULL,1),
 (10,'Comida Principal (Massa)',2000,'2000',1),
 (11,'Drink',200,'Alelo',2),
 (12,'Lembrancinha',0,NULL,2),
 (13,'Bebidas',300,NULL,2),
 (14,'Cozinheiro / Garçon',1800,NULL,1),
 (17,'Doces',925,NULL,1),
 (18,'Foto (pilar)',1800,NULL,2),
 (23,'Juliana Cerimônia',200,NULL,3),
 (24,'Allan Som',200,NULL,1),
 (25,'Parquinho',250,NULL,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mensagem`
--

/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` (`idmensagem`,`Nome`,`Mensagem`) VALUES 
 (1,'Icaro','teste muito bom, lorem ypsolum bla bla bla'),
 (2,'icaro','oh seu cara legal'),
 (3,'Allan ','Parabéns pelo casal. ');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `padrinhos`
--

/*!40000 ALTER TABLE `padrinhos` DISABLE KEYS */;
INSERT INTO `padrinhos` (`idPadrinhos`,`Nome`,`Noivo`) VALUES 
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
 (16,'Wesdron',1),
 (17,'Raul',0),
 (18,'Ana Clara',0),
 (19,'Allan',0),
 (20,'Samanta',0),
 (21,'Pedro Henrique',0),
 (22,'Marta',0),
 (23,'Thiago',0),
 (24,'Pati',0);
/*!40000 ALTER TABLE `padrinhos` ENABLE KEYS */;


--
-- Definition of table `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
CREATE TABLE `pagamento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idGastos` int(10) unsigned DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `Data` date DEFAULT NULL,
  `FormaPagamento` varchar(45) DEFAULT NULL,
  `Mostra` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagamento`
--

/*!40000 ALTER TABLE `pagamento` DISABLE KEYS */;
INSERT INTO `pagamento` (`id`,`idGastos`,`Valor`,`Data`,`FormaPagamento`,`Mostra`) VALUES 
 (1,4,2000,'2024-12-20','PIX',1),
 (2,4,2000,'2025-01-20','PIX',1),
 (3,4,375,'2025-02-09','Cartão 1/4',1),
 (4,4,375,'2025-03-09','Cartão 2/4',1),
 (5,4,375,'2025-04-09','Cartão 3/4',1),
 (6,4,375,'2025-05-09','Cartão 4/4',1),
 (7,10,300,'2024-11-02','Alelo',1),
 (8,10,300,'2024-12-02','Alelo',1),
 (9,10,300,'2025-01-02','Alelo',1),
 (10,10,300,'2025-02-02','Alelo',1),
 (11,10,300,'2025-03-02','Alelo',1),
 (12,10,300,'2025-04-02','Alelo',1),
 (13,10,300,'2025-05-02','Alelo',1),
 (14,14,450,'2025-02-09','Cartão 1/4',1),
 (15,14,450,'2025-03-09','Cartão 2/4',1),
 (16,14,450,'2025-04-09','Cartão 3/4',1),
 (17,14,450,'2025-05-09','Cartão 4/4',1),
 (18,3,325,'2025-02-09','Cartão 1/4',1),
 (19,3,325,'2025-03-09','Cartão 2/4',1),
 (20,3,325,'2025-04-09','Cartão 3/4',1),
 (21,3,325,'2025-05-09','Cartão 4/4',1),
 (22,17,462.5,'2025-02-10','PIX',1),
 (23,17,462.5,'2025-05-05','PIX',1);
/*!40000 ALTER TABLE `pagamento` ENABLE KEYS */;


--
-- Definition of table `presentes`
--

DROP TABLE IF EXISTS `presentes`;
CREATE TABLE `presentes` (
  `idPresentes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Item` varchar(45) NOT NULL,
  `grupo` varchar(45) NOT NULL,
  `ganhamos` varchar(45) NOT NULL,
  PRIMARY KEY (`idPresentes`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentes`
--

/*!40000 ALTER TABLE `presentes` DISABLE KEYS */;
INSERT INTO `presentes` (`idPresentes`,`Item`,`grupo`,`ganhamos`) VALUES 
 (1,'Jogo de talheres','Cozinha','0'),
 (2,'Jogo de cama','Quarto','0'),
 (3,'Armário','Móveis','0'),
 (4,'Lixeira P','Cozinha','0'),
 (5,'Faqueiro p','Cozinha','1');
/*!40000 ALTER TABLE `presentes` ENABLE KEYS */;


--
-- Definition of table `presentesold`
--

DROP TABLE IF EXISTS `presentesold`;
CREATE TABLE `presentesold` (
  `idpresentes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Item` varchar(40) DEFAULT NULL,
  `Abençoador` varchar(20) DEFAULT NULL,
  `Imagem` varchar(45) DEFAULT NULL,
  `Visivel` tinyint(3) unsigned DEFAULT '1',
  PRIMARY KEY (`idpresentes`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentesold`
--

/*!40000 ALTER TABLE `presentesold` DISABLE KEYS */;
INSERT INTO `presentesold` (`idpresentes`,`Item`,`Abençoador`,`Imagem`,`Visivel`) VALUES 
 (1,'Geladeira','Icaro e Tati','geladeira.png',1),
 (2,'Guarda-Roupa',NULL,'guardaroupa.png',1),
 (3,'AirFryer','Icaro e Tati','airfryer.jpg',1),
 (4,'Sofá',NULL,'sofa.png',1),
 (5,'Armário',NULL,'armario.png',1),
 (6,'Máquina de lavar',NULL,'maquinadelavar.png',1),
 (7,'Fogão',NULL,'fogao.png',1),
 (8,'Microondas','Icaro e Tati','microondas.png',1),
 (9,'Ralador 4 Faces Quadrado Black','Icaro e Tati','ralador.png',1),
 (10,'Bandeja retangular de MDF','Icaro e Tati','bandeja.png',1),
 (11,'Capacho de fibra','Icaro e Tati','capacho.jpg',1),
 (12,'Centro de mesa de cristal','Icaro e Tati','centrodemesa.png',1),
 (13,'Centro de mesa de cristal (redondo)','Icaro e Tati','centrodemesaredondo.png',1),
 (14,'Cj 4 Xicaras de cafe de cristal','Icaro e Tati','xicarapassarinho.png',1),
 (15,'Colher de arroz de silocone','a','colherdearrozsilocone.png',1),
 (16,'Concha terrina','a','concha.png',1),
 (17,'Espátula pão duro de silicone preto','a','espatula.png',1),
 (18,'Espátula Inox para fritura','a','espatulafritura.png',1),
 (19,'Espelho oval decorativo','a','espelhooval.png',1),
 (20,'Fervedor','a','fervedor.png',1),
 (21,'Jogo de facas',NULL,'jogodefaca.png',1),
 (22,'Frigideira de indução','a','frigideirainducao.png',1),
 (23,'Fruteira 3 andares','a','fruteira.png',1),
 (24,'Garrafa Térmica Lyor Ballon','a','garrafacafe.png',1),
 (25,'Jogo de 6 copos altos','a','jg6copos.png',1);
/*!40000 ALTER TABLE `presentesold` ENABLE KEYS */;


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programacao`
--

/*!40000 ALTER TABLE `programacao` DISABLE KEYS */;
INSERT INTO `programacao` (`idProgramacao`,`Coisa`,`Data`,`Feito`) VALUES 
 (1,'Fazer lista de convidados','2024-09-18 00:00:00',0),
 (2,'Separar pagamentos',NULL,1),
 (3,'Refazer lista de convidados',NULL,0);
/*!40000 ALTER TABLE `programacao` ENABLE KEYS */;