-- MySQL dump 10.13  Distrib 5.5.60, for Win64 (AMD64)
--
-- Host: localhost    Database: prodep
-- ------------------------------------------------------
-- Server version	5.5.60-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_nombre` varchar(50) DEFAULT NULL,
  `adm_correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1,'lic. alejandra durán tovilla','aleduran@uv.mx'),(2,'l.a.e. solveig hernández nieto','solhernandez@uv.mx'),(3,'l.a.e. edgar pérez fuentes','edperez@uv.mx'),(4,'lic. rafael gonzález delgado','rafaelgonzalez@uv.mx'),(5,'lic. gabriela maria austria pineda','gaustria@uv.mx'),(6,'ruiz ramon deysi edith','deruiz@uv.mx'),(7,'lc bulfrano orea hernández','borea@uv.mx'),(8,'mtra. nelly del carmen rodríguez pérez','nelrodriguez@uv.mx'),(9,'francisco  lendechy león','flendechy@uv.mx'),(10,'ing. maría del rosario cabrera lara','rcabrera@uv.mx'),(11,'lic. vanessa verónica medina muñoz','vmedina@uv.mx'),(12,'lic. héctor antonio murrieta rivera','hmurrieta@uv.mx'),(13,'lic. omar elias sarmiento quezada','osarmiento@uv.mx'),(14,'c.p. alfredo grande roy','agrande@uv.mx'),(15,'lic. patricia contreras pérez','patcontreras@uv.mx'),(16,'l.r.i. josé ángel garcía ronzón','angelgarcia1@uv.mx'),(17,'l.a.e. maximiliano ornelas reyes','mornelas@uv.mx'),(18,'c.p. rubicelia martínez hernández','rumartinez@uv.mx'),(19,'lic. erika nathalie aguilar acevedo','eriaguilar@uv.mx'),(20,'lic. cándida yazmín gómez candanedo','cangomez@uv.mx'),(21,'lic. jesús tedy guerrero','jetedy@uv.mx'),(22,'lae. adriana aburto núñez','adaburto@uv.mx'),(23,'c.p. isaura santa hernández martínez','ihernandez@uv.mx'),(24,'lic. samantha sofía ferez ramos','sferez@uv.mx'),(25,'c.p. flor haydee gutierrez bermudes','flgutierrez@uv.mx'),(26,'c.p. germán vázquez hernández','gvazquez@uv.mx'),(27,'castañeda rosas alma delia','alcastaneda@uv.mx'),(28,'c.p. obdulia carreto caraza','ocarreto@uv.mx'),(29,'lae. hernán hernández rivera','herhernandez@uv.mx'),(30,'lic. diana cortez hernández','dcortez@uv.mx'),(31,'c.p. silvia croda lagunes','scroda@uv.mx'),(32,'l.r.i. tania iveth ramírez velázquez','taramirez@uv.mx'),(33,'mtra. analidia luján gutiérrez','alujan@uv.mx'),(34,'vargas prieto gladys','glvargas@uv.mx'),(35,'mtra. teresa vianey sánchez lara','tesanchez@uv.mx'),(36,'c.p. martha cabrera jiménez','macabrera@uv.mx'),(37,'lic. ana elena hernández ponce','elehernandez@uv.mx'),(38,'mtra. laura arellano pratz','larellano@uv.mx'),(39,'sácnite fabiola valera velasco','savalera@uv.mx'),(40,'beatriz suárez rivera','bsuarez@uv.mx'),(41,'lae francisco salazar pimentel','fsalazar@uv.mx'),(42,'lae yadira sarmiento mora','ysarmiento@uv.mx'),(43,'mca. verónica martínez ramos','vermartinez@uv.mx'),(44,'m.v.z. victor hugo garcía sánchez','vgarcia@uv.mx'),(45,'mtra. irma josefina jácome sánchez','ijacome@uv.mx'),(46,'c. ana edith méndez ramírez','anamendez@uv.mx'),(47,'lic. manuel adan rodriguez rivera','manrodriguez@uv.mx'),(48,'lic. maría guadalupe robles campos','grobles@uv.mx'),(49,'c.p. anais b. arango garcía','anarango@uv.mx'),(50,'lic. miguel ángel salazar rodríguez','jabello@uv.mx'),(51,'liliana lópez montiel','lillopez@uv.mx'),(52,'mtro. josé rafael mejía olivo','rafmejia@uv.mx'),(53,'cp angelina molina','angmolina@uv.mx'),(54,'lc norma mendoza lópez','nmendoza@uv.mx'),(55,'lic. marco antonio aguirre cortez','antaguirre@uv.mx'),(56,'c.p. maría del carmen valdez juárez','cvaldez@uv.mx'),(57,'l.a. barbara maría lópez ríos','balopez@uv.mx'),(58,'lic. rosalía petrone san filippo','rpetrone@uv.mx'),(59,'c.p. gloria esther ortiz guzmán','glortiz@uv.mx'),(60,'mtra. nayeli rodríguez pimentel','narodriguez@uv.mx'),(61,'c.p. angélica tapia vázquez','isp@uv.mx. '),(62,'reyes lopez leticia','lreyes@uv.mx'),(63,'rodriguez diaz manuel alejandro','alejandrorodriguez@uv.mx');
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areaeducativa`
--

DROP TABLE IF EXISTS `areaeducativa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areaeducativa` (
  `are_id` int(11) NOT NULL AUTO_INCREMENT,
  `are_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`are_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areaeducativa`
--

LOCK TABLES `areaeducativa` WRITE;
/*!40000 ALTER TABLE `areaeducativa` DISABLE KEYS */;
INSERT INTO `areaeducativa` VALUES (1,'Artes'),(2,'Biológico agropecuaria'),(3,'Ciencias de la salud'),(4,'Económico administrativa'),(5,'Humanidades'),(6,'Técnica'),(7,'UVI');
/*!40000 ALTER TABLE `areaeducativa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `becario`
--

DROP TABLE IF EXISTS `becario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `becario` (
  `bec_id` int(11) NOT NULL AUTO_INCREMENT,
  `bec_nombre` varchar(70) DEFAULT NULL,
  `bec_fechaInscripcion` varchar(70) DEFAULT NULL,
  `bec_correo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`bec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `becario`
--

LOCK TABLES `becario` WRITE;
/*!40000 ALTER TABLE `becario` DISABLE KEYS */;
INSERT INTO `becario` VALUES (1,'mario lopezz hdz','2012-12-12','mario@uv.mx');
/*!40000 ALTER TABLE `becario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convocatoria`
--

DROP TABLE IF EXISTS `convocatoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convocatoria` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_nombre` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convocatoria`
--

LOCK TABLES `convocatoria` WRITE;
/*!40000 ALTER TABLE `convocatoria` DISABLE KEYS */;
INSERT INTO `convocatoria` VALUES (1,'apoyos para estudios de posgrado de alta calidad'),(2,'apoyo a la reincorporación de exbecarios promep'),(3,'apoyo a la incorporación de nptc'),(4,'apoyo a profesores con perfil deseable'),(5,'reconocimiento a perfil deseable y apoyo');
/*!40000 ALTER TABLE `convocatoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinatario`
--

DROP TABLE IF EXISTS `destinatario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinatario` (
  `des_id` int(11) NOT NULL AUTO_INCREMENT,
  `des_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`des_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinatario`
--

LOCK TABLES `destinatario` WRITE;
/*!40000 ALTER TABLE `destinatario` DISABLE KEYS */;
INSERT INTO `destinatario` VALUES (1,'gabriel morales diaz'),(2,'graciela hernandez sanchez');
/*!40000 ALTER TABLE `destinatario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `director` (
  `dir_id` int(11) NOT NULL AUTO_INCREMENT,
  `dir_nombre` varchar(50) DEFAULT NULL,
  `dir_correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`dir_id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `director`
--

LOCK TABLES `director` WRITE;
/*!40000 ALTER TABLE `director` DISABLE KEYS */;
INSERT INTO `director` VALUES (1,'dra. lourdes budar jiménez','lbudar@uv.mx'),(2,'dra. clara luz parra uscanga','cparra@uv.mx'),(3,'dra. ma teresa de la luz sainz barajas','tsainz@uv.mx'),(4,'dra. leidy margarita lópez castro,','leilopez@uv.mx'),(5,'mtra. carmen báez velázquez','cabaez@uv.mx'),(6,'dr. otto raúl leyva ovalle','oleyva@uv.mx'),(7,'dr. pablo samuel luna lozano','paluna@uv.mx'),(8,'dra. maribel domínguez basurto','madominguez@uv.mx'),(9,'dr. eduardo castillo gonzález','educastillo@uv.mx'),(10,'mtro. miguel ángel cruz treviño','migcruz@uv.mx'),(11,'dr. enrique a. morales gonzález','emorales@uv.mx'),(12,'ing. hugo i. noble pérez','hnoble@uv.mx'),(13,'mtro. cecilio juárez osorio','cjuarez@uv.mx'),(14,'m.e. gabriela pucheta xolo2','gapucheta@uv.mx'),(15,'mtra. maría antonia aguilar pérez','antoaguilar@uv.mx'),(16,'m.c.c. carlos alberto ochoa rivera','cochoa@uv.mx'),(17,'mtra.  maria esperanza conzatti hernández','econzatti@uv.mx'),(18,'ma. gabriela nachón garcía','gnachon@uv.mx'),(19,'mtra. edalid álvarez velázquez','edalvarez@uv.mx'),(20,'dr. julio cesar viñas dozal','jvinas@uv.mx'),(21,'mtro. miguel sosa ruíz','msosa@uv.mx'),(22,'dr. darío f. hernández gonzález','darhernandez@uv.mx'),(23,'dr. jorge manzo denes','jmanzo@uv.mx'),(24,'m. c. miguel ángel rojas hernández','mrojas@uv.mx'),(25,'mtro. nerio gonzález morales.','nergonzalez@uv.mx'),(26,'dr. jorge alberto vélez enríquez','jvelez@uv.mx'),(27,'dr. arturo bocardo valle','abocardo@uv.mx'),(28,'dr. arturo serrano solis','arserrano@uv.mx'),(29,'m.c. luis alberto sánchez bazán','luisasanchez@uv.mx'),(30,'mtro. gabriel zarate flores','gzarate@uv.mx'),(31,'dr. alejandro de la fuente alonso','adelafuente@uv.mx'),(32,'dra. maribel vázquez hernández','marivazquez@uv.mx'),(33,'dr. eduardo rivadeneyra domínguez','edrivadeneyra@uv.mx'),(34,'dr. juan antonio castañeda felgueroso','acastaneda@uv.mx'),(35,'dr. juan carlos ortega guerrero','juaortega@uv.mx'),(36,'dra. maría eugenia senties santos','esenties@uv.mx'),(37,'dra. martha patricia domínguez chenge','martdominguez@uv.mx'),(38,'dra. ahtziri e. molina roldán','ahmolina@uv.mx'),(39,'dra. maría de los ángeles morales sosa','amorales@uv.mx'),(40,'m.i.a. martín augusto pérez panes','augperez@uv.mx'),(41,'mtra. julieta varanasi gonzález garcía','juligonzalez@uv.mx'),(42,'dra. maura ordoñez valenzuela','mordonez@uv.mx'),(43,'mtro. evaristo hernández quiroz','evahernandez@uv.mx'),(44,'mtro. juan grapain contreras','jgrapain@uv.mx'),(45,'m.a. andrea francisca ortiz muñoz','fortiz@uv.mx'),(46,'r. ángel fernández arriola','afernandez@uv.mx'),(47,'dr. jerónimo ricárdez jiménez','jricardez@uv.mx'),(48,'dra. irma liliana domínguez cañedo','irdominguez@uv.mx'),(49,'dr. jorge genaro vicente martínez','jvicente@uv.mx'),(50,'mtro. antonio iván sánchez huerta','antonsanchez@uv.mx'),(51,'m.c.  nayib bechara acar martínez','nacar@uv.mx'),(52,'mtra. irma josefina jácome sánchez','ijacome@uv.mx'),(53,'dr. pedro gutiérrez  aguilar','pgutierrez@uv.mx'),(54,'ra. clementina barrera bernal','cbarrera@uv.mx'),(55,'dr. andrés rivera fernández','arivera@uv.mx'),(56,'dra. rosy lorena laurencio meza','rlaurencio@uv.mx'),(57,'dr. javier bello pineda','jabello@uv.mx'),(58,'dra. gloria elena sánchez cruz','gcruz@uv.mxg'),(59,'dr. juan carlos noa carrazana','jnoa@uv.mx'),(60,'dr. jorge e.  morales mávil','jormorales@uv.mxj'),(61,'dra. shantal meseguer galván','smeseguer@uv.mx'),(62,'lic. francisco velázquez sarmiento','frvelazquez@uv.mx'),(63,'dr. alfonso alexander aguilera','aalexander@uv.mx'),(64,'dra. rosaura citlalli lópez binnqüist','cilopez@uv.mx'),(65,'mtra. iracema ramos aguilar','irramos@uv.mx'),(66,'m. en c. alvar gonzález christen','agonzalez@uv.mx'),(67,'mtra. celia cristina contreras asturias','celcontreras@uv.mx'),(68,'msp. edit rodríguez romero','edrodriguez@uv'),(69,'dra. sandra luz gonzález herrera','sgonzalez@uv.mx'),(70,'dra. ma. estela montes carmona','emontes@uv.mx'),(71,'dr. juan rodrigo laguna camacho','jlaguna@uv.mx'),(72,'joaquín romero ricavar','joaquromero@uv.mx'),(73,'dr. carlos flores pérez','carlflores@uv.mx');
/*!40000 ALTER TABLE `director` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docente` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_numeroPersonal` int(11) DEFAULT NULL,
  `doc_nombre` varchar(50) DEFAULT NULL,
  `doc_correo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` VALUES (1,36196,'zarate betancourt eva','evzarate@uv.mx'),(2,18392,'zapien uscanga antonio de jesus','azapien@uv.mx'),(3,30433,'zapata lara helena del carmen','hzapata@uv.mx'),(4,26303,'villar sanchez patricia margarita','pvillar@uv.mx'),(5,3004,'vez lopez enrique','evez@uv.mx'),(6,16056,'verdejo lara rafael antonio','rverdejo@uv.mx'),(7,45163,'vazquez aguirre jorge luis','jorgevazquez02@uv.mx'),(8,15084,'varela cardoso miguel','mvarela@uv.mx'),(9,23787,'valenzuela orozco aura guadalupe','avalenzuela@uv.mx'),(10,41781,'torres sandoval imelda','imtorres@uv.mx'),(11,15794,'tello andrade adriana fabiola','ftello@uv.mx'),(12,19864,'solorzano hernandez rodolfo','rsolorzano@uv.mx'),(13,28249,'simbron barrera judith','jsimbron@uv.mx'),(14,44844,'silva ortega mariana','marsilva@uv.mx'),(15,14487,'silva aguilar oscar fernando','ossilva@uv.mx'),(16,6089,'sarmiento vega salvador ernesto','ssarmiento@uv.mx'),(17,40614,'santiago mijangos alma delia','alsantiago@uv.mx'),(18,43658,'sanchez alvarez guadalupe','guadalusanchez@uv.mx'),(19,41306,'sanchez garcia angel juan','angesanchez@uv.mx'),(20,41380,'salazar mendoza javier','jasalazar@uv.mx'),(21,30080,'salas garcia betzaida','besalas@uv.mx'),(22,12986,'salas benitez lazaro','lsalas@uv.mx'),(23,31375,'saiz calderon gomez manuel','msaizcalderon@uv.mx'),(24,30872,'ruz saldivar carlos','caruz@uv.mx'),(25,24738,'romero leon daniel arturo','daromero@uv.mx'),(26,27376,'rojas duran fausto','frojas@uv.mx'),(27,19203,'rodriguez flores carlos','carodriguez@uv.mx'),(28,32501,'roa gonzalez sheilla del carmen','sheillaroa@uv.mx'),(29,32084,'rivera krakowska octavio enrique','ocrivera@uv.mx'),(30,25547,'ricaño herrera francisco','fricano@uv.mx'),(31,19430,'rendon hernandez rogelio javier','rrendon@uv.mx'),(32,31669,'raya cruz blanca esther','braya@uv.mx'),(33,5354,'ramirez herrera daniel julian','daramirez@uv.mx'),(34,9092,'ramirez gonzalez luis david','dramirez@uv.mx'),(35,35463,'perez pastenes hugo','huperez@uv.mx'),(36,36118,'perez estrada laura celia','laperez@uv.mx'),(37,32502,'peñaflor fentanes estela','epenaflor@uv.mx'),(38,41868,'pech canche juan manuel','jmpech@uv.mx'),(39,27315,'pascual pineda luz alicia','lpascual@uv.mx'),(40,37675,'pascual mathey luz irene','lupascual@uv.mx'),(41,35435,'ortiz cruz fabiola','faortiz@uv.mx'),(42,25683,'ortega guerrero juan carlos','juaortega@uv.mx'),(43,44362,'ordaz hernandez monica berenice','mordaz@uv.mx'),(44,4077,'noriega riande francisco de jesus','fnoriega@uv.mx'),(45,30609,'nava vite rafael','rafnava@uv.mx'),(46,25554,'nahum lajud prisca','pnahum@uv.mx'),(47,33803,'molina roldan ahtziri erendira','ahmolina@uv.mx'),(48,23117,'molina hernandez jorge alberto','jmolina@uv.mx'),(49,39925,'martinez guevara gerson omar','germartinez@uv.mx'),(50,37430,'martinez sanchez cesar enrique','cesamartinez@uv.mx'),(51,39754,'martinez cabrera rosa arisbe','rosamartinez02@uv.mx'),(52,2060,'marquez montero sabino','smarquez@uv.mx'),(53,27661,'madrigal chavero erika paulina','emadrigal@uv.mx'),(54,19886,'lunagomez reyes roberto','rlunagomez@uv.mx'),(55,30602,'lopez gonzalez aime','ailopez@uv.mx'),(56,42403,'lopez gonzalez rocio','rociolopez@uv.mx'),(57,13419,'leal ortiz simon','sleal@uv.mx'),(58,30576,'lara ochoa ismael','ismlara@uv.mx'),(59,32396,'herrera melo jose arturo','arherrera@uv.mx'),(60,15759,'hernandez quiroz evaristo','evahernandez@uv.mx'),(61,10016,'hernandez ojeda humberto','huhernandez@uv.mx'),(62,7391,'hernandez lopez maria elvia','elvhernandez@uv.mx'),(63,37937,'hernandez contreras mariano azzur','marianohernandez@uv.mx'),(64,27436,'herbert vargas miguel angel allen','mherbert@uv.mx'),(65,7146,'gutierrez bonilla rosa ela','rosagutierrez@uv.mx'),(66,4296,'guiot vazquez maria isabel','iguiot@uv.mx'),(67,18603,'guillen ramirez susana anabel','sguillen@uv.mx'),(68,27785,'grappin navarro silvia ivette','sgrappin@uv.mx'),(69,19789,'gonzalez palmeros neli','negonzalez@uv.mx'),(70,15845,'gonzalez rosas monica karina','mogonzalez@uv.mx'),(71,19049,'gogeascoechea trejo maria del carmen','cgogeascoechea@uv.mx'),(72,25250,'gidi blanchet claudia elisa','cgidi@uv.mx'),(73,31317,'garcia valenzuela veronica','vegarcia@uv.mx'),(74,34422,'galindo monfil alma rosa','almgalindo@uv.mx'),(75,38551,'galan mendez frixia','fgalan@uv.mx'),(76,40944,'flores primo argel','argflores@uv.mx'),(77,15660,'flores badillo herlinda','hflores@uv.mx'),(78,19904,'figueroa vazquez lizette teresa','tfigueroa@uv.mx'),(79,13821,'fernandez figueroa jose antonio','antfernandez@uv.mx'),(80,19306,'fernandez arrazola zoila luz de los angeles','zfernandez@uv.mx'),(81,33725,'fernandez gomez imelda','imfernandez@uv.mx'),(82,15352,'enriquez corona rocio','renriquez@uv.mx'),(83,26104,'elorza martinez oralia','oelorza@uv.mx'),(84,25274,'diaz morales karina','kdiaz@uv.mx'),(85,24801,'diaz martinez jose vicente','vicdiaz@uv.mx'),(86,6110,'cruz juarez alma de los angeles','acruz@uv.mx'),(87,15048,'cruz capitaine roberto','robcruz@uv.mx'),(88,15307,'croche belin rene','rcroche@uv.mx'),(89,29442,'cortes sol albertina','alcortes@uv.mx'),(90,10898,'cocotle ronzon yolanda','ycocotle@uv.mx'),(91,25566,'chiquito contreras roberto gregorio','rchiquito@uv.mx'),(92,28852,'castillo morales marisol','maricastillo@uv.mx'),(93,22640,'carmona diaz gustavo','gcarmona@uv.mx'),(94,36402,'canales abarca adriana','acanales@uv.mx'),(95,36529,'camarillo montero jesus antonio','jcamarillo@uv.mx'),(96,20727,'bonilla hernandez nora maria','nbonilla@uv.mx'),(97,43736,'berdon carrasco victor hugo','viberdon@uv.mx'),(98,32721,'bello pineda javier','jabello@uv.mx'),(99,42477,'baronnet bruno jean james','bbaronnet@uv.mx '),(100,31436,'badillo guzman jessica','jebadillo@uv.mx'),(101,38269,'arteaga vazquez mario alberto','maarteaga@uv.mx'),(102,33105,'arenzano altaif jesus antonio','jarenzano@uv.mx'),(103,27928,'alvarado olivarez mayvi','malvarado@uv.mx'),(104,37705,'altamirano vasquez margarita','maaltamirano@uv.mx'),(105,7760,'aldana franco rosario','raldana@uv.mx'),(106,35357,'alarcon zapata marco antonio','maralarcon@uv.mx'),(107,31692,'ahuja aguirre concepcion del carmen','cahuja@uv.mx'),(108,14804,'vazquez montano miriam laura','mivazquez@uv.mx'),(109,24714,'suarez dominguez emilio alfonso','emisuarez@uv.mx'),(110,36744,'rao vijendra dinesh','vrao@uv.mx'),(111,44009,'portillo velez rogelio de jesus','rportillo@uv.mx'),(112,35482,'perroni ventura yareni','yperroni@uv.mx'),(113,34171,'perez staples diana folger','diperez@uv.mx  '),(114,35478,'morales zarate epifanio','epmorales@uv.mx'),(115,39440,'mondragon vasquez karina','kmondragon@uv.mx'),(116,34261,'mac swiney gonzalez maria cristina','cmacswiney@uv.mx'),(117,35016,'lopez acosta juan carlos','carlolopez@uv.mx'),(118,32643,'kromer thorsten','tkromer@uv.mx'),(119,32457,'huerta gonzalez sara','sahuerta@uv.mx'),(120,13734,'hernandez suarez jesus','jeshernandez@uv.mx'),(121,39436,'hernandez escobedo quetzalcoatl cruz','qhernandez@uv.mx'),(122,30559,'diaz fleischer francisco','fradiaz@uv.mx'),(123,40939,'cruz cruz carlos alberto','calcruz@uv.mx'),(124,19244,'canales rubio miguel','mcanales@uv.mx'),(125,43111,'baena hurtado martha lucia','mbaena@uv.mx'),(126,83,'alvarez montero jose lorenzo','lalvarez@uv.mx'),(127,45468,'serna lagunes ricardo','rserna@uv.mx'),(128,29883,'sangabriel conde wendy','wsangabriel@uv.mx'),(129,41474,'sanchez menendez juan emilio','jsanchez@uv.mx'),(130,46568,'rosas santiago francisco javier','frrosas@uv.mx'),(131,23173,'rechy ramirez ericka janet','erechy@uv.mx'),(132,47333,'pinos rodriguez juan manuel','jpinos@uv.mx'),(133,36757,'ortiz chacha christian soledad','chortiz@uv.mx'),(134,28650,'ocharan hernandez jorge octavio','jocharan@uv.mx'),(135,22619,'naval avila celina','cnaval@uv.mx'),(136,39604,'montane jimenez luis gerardo','lmontane@uv.mx'),(137,21068,'mendez ortiz jesus roberto','jmendez@uv.mx'),(138,43895,'lopez huerta francisco','frlopez@uv.mx'),(139,17585,'lagunes merino omar','olagunes@uv.mx'),(140,45200,'jordan garza adan guillermo','ajordan@uv.mx'),(141,43161,'herrera covarrubias deissy','deherrera@uv.mx'),(142,41133,'chagoya fuentes jorge luis','jochagoya@uv.mx'),(143,32192,'castillo hernandez estela','estelcastillo@uv.mx'),(144,48542,'canul chan michel de la cruz','mcanul@uv.mx'),(145,34390,'barradas hernandez jose eriban','erbarradas@uv.mx'),(146,44633,'andres meza pablo','pandres@uv.mx'),(147,47463,'allende molar raul','raallende@uv.mx'),(148,47737,'aguilar justo marving omar','marvaguilar@uv.mx'),(149,37686,'villagran villegas luz yazmin','yvillagran@uv.mx'),(150,34511,'suarez franco jose luis','jsuarez@uv.mx'),(151,34771,'landa rivera ruth angelica','rulanda@uv.mx'),(152,23353,'velasco ramirez maria luisa','lvelasco@uv.mx'),(153,36811,'lopez lara rocio','rociolopez02@uv.mx'),(154,44397,'infante pacheco victor eduardo','vinfante@uv.mx');
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_nombre` varchar(70) DEFAULT NULL,
  `doc_estado` tinyint(1) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `registroconvocatoria` (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (1,'cartaPresentacion',0,16),(2,'actaNacimiento',0,16),(3,'cartaCompromiso',0,16),(4,'constanciaEstudios',0,16),(5,'credenciaElector',1,16),(6,'curp',1,16),(7,'numeroCuenta',0,16),(8,'rfc',1,16),(9,'cartaPresentacion',1,17),(10,'actaNacimiento',0,17),(11,'cartaCompromiso',0,17),(12,'constanciaEstudios',0,17),(13,'credenciaElector',0,17),(14,'curp',0,17),(15,'numeroCuenta',1,17),(16,'rfc',0,17),(17,'cartaPresentacion',1,18),(18,'actaNacimiento',1,18),(19,'cartaCompromiso',1,18),(20,'constanciaEstudios',1,18),(21,'credenciaElector',1,18),(22,'curp',1,18),(23,'numeroCuenta',1,18),(24,'rfc',1,18);
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidadeducativa`
--

DROP TABLE IF EXISTS `entidadeducativa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidadeducativa` (
  `ent_id` int(11) NOT NULL AUTO_INCREMENT,
  `ent_nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidadeducativa`
--

LOCK TABLES `entidadeducativa` WRITE;
/*!40000 ALTER TABLE `entidadeducativa` DISABLE KEYS */;
INSERT INTO `entidadeducativa` VALUES (1,'centro de est., creacion y doc. de las artes'),(2,'centro de idiomas'),(3,'centro de idiomas y de autoacceso'),(4,'centro de inv. en inteligencia artificial'),(5,'centro de investigación e innovación en educación superior'),(6,'centro de investigaciones cerebrales'),(7,'centro de investigaciones tropicales'),(8,'coordinacion academica reg. de enseñanza abierta'),(9,'dir. gral. del area acad. de ciencias de la salud'),(10,'escuela de enfermeria'),(11,'escuela para estudiantes extranjeros'),(12,'facultad de administracion'),(13,'facultad de bioanalisis'),(14,'facultad de biologia'),(15,'facultad de ciencias administrativas y sociales'),(16,'facultad de ciencias agricolas'),(17,'facultad de ciencias biologicas y agropecuarias'),(18,'facultad de ciencias biologico agropecuarias'),(19,'facultad de ciencias quimicas'),(20,'facultad de ciencias y tec. de la comunicacion'),(21,'facultad de contaduria'),(22,'facultad de contaduria y administracion'),(23,'facultad de derecho'),(24,'facultad de economia'),(25,'facultad de enfermeria'),(26,'facultad de estadistica e informatica'),(27,'facultad de idiomas'),(28,'facultad de ing. electronica y comunicaciones'),(29,'facultad de ingenieria mecanica electrica'),(30,'facultad de ingenieria'),(31,'facultad de ingenieria civil'),(32,'facultad de ingenieria mecanica y electrica'),(33,'facultad de medicina'),(34,'facultad de instrumentacion electronica'),(35,'facultad de odontologia'),(36,'facultad de medicina veterinaria y zootecnia'),(37,'facultad de musica'),(38,'facultad de pedagogia'),(39,'facultad de quimica farmaceutica biologica'),(40,'facultad de psicologia'),(41,'ingenieria en sistemas de produccion agropecuaria'),(42,'facultad de trabajo social'),(43,'facultad de teatro'),(44,'instituto de biotecnologia y ecologia aplicada'),(45,'inst.de cs. marinas y pesquerias de la uv'),(46,'instituto de ciencias de la salud'),(47,'instituto de antropologia'),(48,'instituto de ingenieria'),(49,'instituto de investigaciones biologicas'),(50,'instituto de invest. y estudios sup. eco. y soc.'),(51,'instituto de investigaciones lingüistico lit.'),(52,'instituto de investigaciones juridicas'),(53,'instituto de investigaciones en educacion'),(54,'instituto de salud publica'),(55,'instituto de investigaciones psicologicas'),(56,'instituto de neuroetologia'),(57,'universidad veracruzana intercultural'),(58,'museo de antropologia'),(59,'unidad de serv. de apoyo resol.analitica (sara)');
/*!40000 ALTER TABLE `entidadeducativa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oficio`
--

DROP TABLE IF EXISTS `oficio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oficio` (
  `ofi_id` int(11) NOT NULL AUTO_INCREMENT,
  `ofi_numeroOficio` int(11) DEFAULT NULL,
  `ofi_anoConvocatoria` date DEFAULT NULL,
  `ofi_folioProdep` varchar(70) DEFAULT NULL,
  `ofi_asunto` text,
  `ofi_monto` varchar(40) DEFAULT NULL,
  `ofi_fechaEnvio` date DEFAULT NULL,
  `ofi_fechaRespuesta` date DEFAULT NULL,
  `ofi_aprobado` tinyint(1) DEFAULT NULL,
  `des_id` int(11) DEFAULT NULL,
  `con_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ofi_id`),
  KEY `des_id` (`des_id`),
  KEY `con_id` (`con_id`),
  KEY `pro_id` (`pro_id`),
  CONSTRAINT `oficio_ibfk_1` FOREIGN KEY (`des_id`) REFERENCES `destinatario` (`des_id`),
  CONSTRAINT `oficio_ibfk_2` FOREIGN KEY (`con_id`) REFERENCES `convocatoria` (`con_id`),
  CONSTRAINT `oficio_ibfk_3` FOREIGN KEY (`pro_id`) REFERENCES `proyecto` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oficio`
--

LOCK TABLES `oficio` WRITE;
/*!40000 ALTER TABLE `oficio` DISABLE KEYS */;
INSERT INTO `oficio` VALUES (1,666,'2019-08-30','667','nada','668','2019-08-30','2019-09-29',1,1,5,1),(2,98765,'2019-09-17','98','hola mundo','2000','2019-09-23',NULL,NULL,2,1,1);
/*!40000 ALTER TABLE `oficio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_nombre` varchar(50) DEFAULT NULL,
  `per_correo` varchar(50) DEFAULT NULL,
  `per_rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'Mario Hurtado López','marioolopez21@gmail.com','coordinador'),(2,'Alba Leydi Teobal','ateobal@uv.mx','coordinador'),(3,'Annette Gutierrez','anngutierrez@uv.mx','coordinador'),(4,'borrar','borrar@uv.mx','coordinador'),(5,'qw','qw@uv.mx','coordinador'),(6,'qw','qw@uv.mx','coordinador'),(7,'qw','qw@uv.mx','coordinador'),(8,'qw','qw@uv.mx','coordinador'),(9,'a','a@uv.mx','coordinador');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyecto` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_claveProgramtica` varchar(50) DEFAULT NULL,
  `pro_folioProdep` varchar(50) DEFAULT NULL,
  `pro_oficioAutorizacion` varchar(50) DEFAULT NULL,
  `pro_inicioApoyo` date DEFAULT NULL,
  `pro_finApoyo` date DEFAULT NULL,
  `pro_estado` tinyint(1) DEFAULT NULL,
  `pro_numeroDependencia` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `adm_id` int(11) DEFAULT NULL,
  `dir_id` int(11) DEFAULT NULL,
  `ent_id` int(11) DEFAULT NULL,
  `per_id` int(11) DEFAULT NULL,
  `are_id` int(11) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL,
  `con_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `doc_id` (`doc_id`),
  KEY `adm_id` (`adm_id`),
  KEY `dir_id` (`dir_id`),
  KEY `ent_id` (`ent_id`),
  KEY `per_id` (`per_id`),
  KEY `are_id` (`are_id`),
  KEY `reg_id` (`reg_id`),
  KEY `con_id` (`con_id`),
  CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `docente` (`doc_id`),
  CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`adm_id`) REFERENCES `administrador` (`adm_id`),
  CONSTRAINT `proyecto_ibfk_3` FOREIGN KEY (`dir_id`) REFERENCES `director` (`dir_id`),
  CONSTRAINT `proyecto_ibfk_4` FOREIGN KEY (`ent_id`) REFERENCES `entidadeducativa` (`ent_id`),
  CONSTRAINT `proyecto_ibfk_5` FOREIGN KEY (`per_id`) REFERENCES `personal` (`per_id`),
  CONSTRAINT `proyecto_ibfk_6` FOREIGN KEY (`are_id`) REFERENCES `areaeducativa` (`are_id`),
  CONSTRAINT `proyecto_ibfk_7` FOREIGN KEY (`reg_id`) REFERENCES `region` (`reg_id`),
  CONSTRAINT `proyecto_ibfk_8` FOREIGN KEY (`con_id`) REFERENCES `convocatoria` (`con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyecto`
--

LOCK TABLES `proyecto` WRITE;
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT INTO `proyecto` VALUES (1,'9001-2012','30deso0091s','1234-56','2019-08-08','2019-08-04',0,2147483647,63,49,13,5,1,6,3,4);
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (1,'Xalapa'),(2,'Veracruz'),(3,'Poza Rica - Tuxpan'),(4,'Orizaba - Cordoba'),(5,'coatzacoalcos - Minatitlan');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registroconvocatoria`
--

DROP TABLE IF EXISTS `registroconvocatoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registroconvocatoria` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_anoConvocatoria` date DEFAULT NULL,
  `reg_estado` tinyint(1) DEFAULT NULL,
  `reg_fechaVoBo` date DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `bec_id` int(11) DEFAULT NULL,
  `reg_fechaInicioBecario` date DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  KEY `pro_id` (`pro_id`),
  KEY `bec_id` (`bec_id`),
  CONSTRAINT `registroconvocatoria_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `proyecto` (`pro_id`),
  CONSTRAINT `registroconvocatoria_ibfk_2` FOREIGN KEY (`bec_id`) REFERENCES `becario` (`bec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registroconvocatoria`
--

LOCK TABLES `registroconvocatoria` WRITE;
/*!40000 ALTER TABLE `registroconvocatoria` DISABLE KEYS */;
INSERT INTO `registroconvocatoria` VALUES (1,'2019-09-04',1,'2019-09-11',1,1,'2019-09-11'),(2,'2019-09-04',1,'2019-09-11',1,1,'2019-09-11'),(3,'2019-09-04',1,'2019-09-11',1,1,'2019-09-11'),(6,'2019-09-03',0,'2019-09-02',1,1,'2019-09-12'),(7,'2019-09-03',1,'2019-09-02',1,1,'2019-09-12'),(8,'2019-09-03',1,'2019-09-02',1,1,'2019-09-12'),(9,'2019-09-11',1,'2019-09-16',1,1,'2019-10-01'),(10,'2019-09-24',1,'2019-09-04',1,1,'2019-09-16'),(11,'2019-09-18',1,'2019-09-17',1,1,'2019-09-11'),(12,'2019-09-18',1,'2019-09-17',1,1,'2019-09-11'),(13,'2019-09-02',1,'2019-09-11',1,1,'2019-09-19'),(14,'2019-09-18',1,'2019-09-06',1,1,'2012-12-12'),(15,'2019-09-02',1,'2019-09-11',1,1,'2019-09-18'),(16,'2019-09-03',1,'2019-09-10',1,1,'2019-09-09'),(17,'2019-09-23',1,'2019-10-07',1,1,'2019-09-30'),(18,'2019-09-01',1,'2019-09-01',1,1,'2019-09-01');
/*!40000 ALTER TABLE `registroconvocatoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(70) DEFAULT NULL,
  `usu_contrasena` varchar(70) DEFAULT NULL,
  `per_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `per_id` (`per_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`per_id`) REFERENCES `personal` (`per_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'marioLpz','nemesis97',1),(2,'ateobal','teobal11',2),(3,'anngutierrez','189191213',3),(4,'borrame','borrame',4),(5,'qw','qw',5),(6,'qw','qw',5),(7,'qw','qw',5),(8,'qw','qw',5),(9,'a','a',9);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-11  0:48:57
