-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2016 at 11:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ONLINESHOPPING`
--

-- --------------------------------------------------------

--
-- Table structure for table `USER_DETAILS`
--

CREATE TABLE `USER_DETAILS` (
  `FIRST_NAME` varchar(9) DEFAULT NULL,
  `LAST_NAME` varchar(10) DEFAULT NULL,
  `USER_ID` varchar(9) DEFAULT NULL,
  `EMAIL` varchar(53) DEFAULT NULL,
  `PASSWORD` int(6) DEFAULT NULL,
  `GENDER` varchar(1) DEFAULT NULL,
  `ADDRESS` varchar(10) DEFAULT NULL,
  `CONTACT_NUMBER` int(8) DEFAULT NULL,
  `DATE_OF_BIRTH` varchar(10) DEFAULT NULL,
  `SUBSCRIPTION` varchar(4) DEFAULT NULL,
  `CONTACT_MODE` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USER_DETAILS`
--

INSERT INTO `USER_DETAILS` (`FIRST_NAME`, `LAST_NAME`, `USER_ID`, `EMAIL`, `PASSWORD`, `GENDER`, `ADDRESS`, `CONTACT_NUMBER`, `DATE_OF_BIRTH`, `SUBSCRIPTION`, `CONTACT_MODE`) VALUES
('Jael', 'Perez', 'Wyatt', 'enim.commodo.hendrerit@fermentum.net', 123456, 'M', '6238 In Rd', 12345678, '1990-02-03', 'YES', 'TEXT'),
('Rowan', 'Fields', 'Branden', 'tempor.erat.neque@mollisnec.ca', 123456, 'M', '6239 In Rd', 12345678, '10-13-1988', 'YES', 'TEXT'),
('Maxwell', 'Obrien', 'Clinton', 'luctus.vulputate.nisi@liberolacusvarius.com', 123456, 'M', '6240 In Rd', 12345678, '10-14-1988', 'YES', 'TEXT'),
('Merrill', 'Holden', 'Thor', 'sagittis.placerat@tortorInteger.org', 123456, 'M', '6241 In Rd', 12345678, '10-15-1988', 'YES', 'TEXT'),
('Sacha', 'Gentry', 'Forrest', 'leo.Morbi@nec.org', 123456, 'M', '6242 In Rd', 12345678, '10-16-1988', 'YES', 'TEXT'),
('Macaulay', 'Pace', 'Jarrod', 'consequat.lectus@euismodet.ca', 123456, 'M', '6243 In Rd', 12345678, '10-17-1988', 'YES', 'TEXT'),
('Daryl', 'Williamson', 'Lacy', 'eget@molestietellus.ca', 123456, 'M', '6244 In Rd', 12345678, '10-18-1988', 'YES', 'TEXT'),
('Rudyard', 'Webster', 'Maya', 'tempus@Suspendissealiquet.net', 123456, 'M', '6245 In Rd', 12345678, '10-19-1988', 'YES', 'TEXT'),
('Delilah', 'Doyle', 'Carter', 'ullamcorper.magna.Sed@commodoatlibero.com', 123456, 'M', '6246 In Rd', 12345678, '10-20-1988', 'YES', 'TEXT'),
('Deborah', 'Herrera', 'Jenna', 'a.arcu.Sed@nonnisi.net', 123456, 'M', '6247 In Rd', 12345678, '10-21-1988', 'YES', 'TEXT'),
('Sandra', 'Robbins', 'Zoe', 'et.magnis@elementumat.edu', 123456, 'M', '6248 In Rd', 12345678, '10-22-1988', 'YES', 'TEXT'),
('Denton', 'Norman', 'Sigourney', 'ac.orci@inaliquet.co.uk', 123456, 'M', '6249 In Rd', 12345678, '10-23-1988', 'NO', 'TEXT'),
('Ulric', 'Mendoza', 'Ifeoma', 'arcu@nisimagna.co.uk', 123456, 'F', '6250 In Rd', 12345678, '10-24-1988', 'NO', 'TEXT'),
('Carissa', 'Morin', 'Piper', 'elit@acsemut.ca', 123456, 'F', '6251 In Rd', 12345678, '10-25-1988', 'NO', 'TEXT'),
('Wyoming', 'Padilla', 'Keely', 'mauris.a.nunc@diamluctuslobortis.com', 123456, 'F', '6252 In Rd', 12345678, '10-26-1988', 'NO', 'TEXT'),
('Uma', 'Boyle', 'Finn', 'lobortis@eratvitae.org', 123456, 'F', '6253 In Rd', 12345678, '10-27-1988', 'NO', 'TEXT'),
('Uriah', 'Rodgers', 'Kato', 'vulputate@Ut.net', 123456, 'F', '6254 In Rd', 12345678, '10-28-1988', 'NO', 'TEXT'),
('Kiayada', 'Mcmillan', 'Madison', 'Phasellus.dapibus@necimperdiet.co.uk', 123456, 'F', '6255 In Rd', 12345678, '10-29-1988', 'NO', 'EMAIL'),
('Stacy', 'Calderon', 'Sharon', 'litora.torquent@euultrices.net', 123456, 'F', '6256 In Rd', 12345678, '10-30-1988', 'NO', 'EMAIL'),
('Reuben', 'Moore', 'Porter', 'elit.pellentesque.a@nibhsit.co.uk', 123456, 'F', '6257 In Rd', 12345678, '10-31-1988', 'NO', 'EMAIL'),
('Vincent', 'Gutierrez', 'Elliott', 'dignissim.lacus@ornarefacilisiseget.com', 123456, 'F', '6258 In Rd', 12345678, '11-1-1988', 'NO', 'EMAIL'),
('Elizabeth', 'Payne', 'Denton', 'orci.quis.lectus@Crasloremlorem.co.uk', 123456, 'F', '6259 In Rd', 12345678, '11-2-1988', 'NO', 'EMAIL'),
('Garth', 'Leon', 'Anastasia', 'consectetuer@porttitoreros.net', 123456, 'F', '6260 In Rd', 12345678, '11-3-1988', 'NO', 'EMAIL'),
('Talon', 'Horton', 'Flavia', 'sit.amet@vitaediamProin.net', 123456, 'F', '6261 In Rd', 12345678, '11-4-1988', 'NO', 'EMAIL'),
('Uriel', 'Cantrell', 'Darrel', 'magna.tellus@Aliquamultrices.co.uk', 123456, 'F', '6262 In Rd', 12345678, '11-5-1988', 'NO', 'EMAIL'),
('Vanna', 'Hill', 'Daquan', 'lacus.Mauris.non@semmolestiesodales.ca', 123456, 'F', '6263 In Rd', 12345678, '11-6-1988', 'NO', 'EMAIL'),
('Malachi', 'Bates', 'Ina', 'purus.gravida@velitegestas.edu', 123456, 'F', '6264 In Rd', 12345678, '11-7-1988', 'NO', 'EMAIL'),
('Suki', 'Travis', 'Jamal', 'venenatis.a.magna@quamPellentesque.ca', 123456, 'M', '6265 In Rd', 12345678, '11-8-1988', 'NO', 'EMAIL'),
('Hilel', 'Roach', 'Henry', 'vitae@Proin.edu', 123456, 'M', '6266 In Rd', 12345678, '11-9-1988', 'NO', 'EMAIL'),
('Avram', 'Oneil', 'Tyrone', 'mi.enim.condimentum@nibh.edu', 123456, 'M', '6267 In Rd', 12345678, '11-10-1988', 'NO', 'EMAIL'),
('Zane', 'Farmer', 'Sawyer', 'Morbi@ac.co.uk', 123456, 'M', '6268 In Rd', 12345678, '11-11-1988', 'NO', 'EMAIL'),
('Plato', 'Lara', 'Heidi', 'lectus.Nullam@blandit.com', 123456, 'M', '6269 In Rd', 12345678, '11-12-1988', 'NO', 'EMAIL'),
('Moana', 'Patel', 'Ebony', 'et.rutrum.eu@Aeneaneget.org', 123456, 'M', '6270 In Rd', 12345678, '11-13-1988', 'NO', 'EMAIL'),
('Axel', 'Odonnell', 'Steel', 'euismod.ac.fermentum@odiosempercursus.ca', 123456, 'M', '6271 In Rd', 12345678, '11-14-1988', 'NO', 'EMAIL'),
('Aidan', 'Powers', 'Amity', 'aliquet.magna@urna.org', 123456, 'M', '6272 In Rd', 12345678, '11-15-1988', 'NO', 'EMAIL'),
('Ciaran', 'Mccarthy', 'Wallace', 'facilisis.Suspendisse@Nullaeu.ca', 123456, 'M', '6273 In Rd', 12345678, '11-16-1988', 'NO', 'EMAIL'),
('Charles', 'Bullock', 'Scott', 'ac.risus@Praesent.edu', 123456, 'M', '6274 In Rd', 12345678, '11-17-1988', 'NO', 'EMAIL'),
('Graham', 'Cameron', 'Signe', 'tempor@Maurismolestie.co.uk', 123456, 'M', '6275 In Rd', 12345678, '11-18-1988', 'NO', 'EMAIL'),
('Wyoming', 'Cervantes', 'Akeem', 'vel@felisadipiscingfringilla.edu', 123456, 'M', '6276 In Rd', 12345678, '11-19-1988', 'NO', 'EMAIL'),
('Ramona', 'Macdonald', 'Deirdre', 'non@dolorvitaedolor.org', 123456, 'M', '6277 In Rd', 12345678, '11-20-1988', 'NO', 'EMAIL'),
('Arden', 'Fuller', 'Beatrice', 'risus@fermentumrisus.com', 123456, 'M', '6278 In Rd', 12345678, '11-21-1988', 'NO', 'EMAIL'),
('Alexander', 'Rodgers', 'Amos', 'elementum@blanditenimconsequat.co.uk', 123456, 'M', '6279 In Rd', 12345678, '11-22-1988', 'NO', 'EMAIL'),
('Palmer', 'Castillo', 'Ingrid', 'odio.auctor.vitae@ipsum.edu', 123456, 'M', '6280 In Rd', 12345678, '11-23-1988', 'NO', 'EMAIL'),
('Murphy', 'Patrick', 'Emi', 'aptent.taciti@neque.net', 123456, 'M', '6281 In Rd', 12345678, '11-24-1988', 'NO', 'EMAIL'),
('Daniel', 'Burks', 'Doris', 'porttitor.vulputate.posuere@nislelementum.net', 123456, 'M', '6282 In Rd', 12345678, '11-25-1988', 'NO', 'EMAIL'),
('Nayda', 'Saunders', 'Yardley', 'eu@amet.com', 123456, 'M', '6283 In Rd', 12345678, '11-26-1988', 'NO', 'EMAIL'),
('Imelda', 'Parker', 'Hillary', 'magna.malesuada.vel@lobortis.edu', 123456, 'M', '6284 In Rd', 12345678, '11-27-1988', 'NO', 'EMAIL'),
('Shana', 'Fletcher', 'Jael', 'eget.tincidunt@pede.org', 123456, 'M', '6285 In Rd', 12345678, '11-28-1988', 'NO', 'EMAIL'),
('Malik', 'Goodman', 'Brooke', 'nisl.Quisque.fringilla@Namacnulla.org', 123456, 'M', '6286 In Rd', 12345678, '11-29-1988', 'NO', 'EMAIL'),
('Amos', 'Mcbride', 'Demetria', 'ipsum@aliquameuaccumsan.com', 123456, 'M', '6287 In Rd', 12345678, '11-30-1988', 'NO', 'EMAIL'),
('Isaiah', 'Richards', 'Odessa', 'mauris@aliquetvel.com', 123456, 'M', '6288 In Rd', 12345678, '12-1-1988', 'NO', 'EMAIL'),
('Sacha', 'Sims', 'Nevada', 'leo.in.lobortis@esttemporbibendum.ca', 123456, 'M', '6289 In Rd', 12345678, '12-2-1988', 'NO', 'EMAIL'),
('Adara', 'Clark', 'Leila', 'ornare.elit.elit@anteipsumprimis.net', 123456, 'M', '6290 In Rd', 12345678, '12-3-1988', 'NO', 'EMAIL'),
('Molly', 'Woods', 'Nomlanga', 'lobortis.mauris.Suspendisse@Maecenasiaculisaliquet.ca', 123456, 'M', '6291 In Rd', 12345678, '12-4-1988', 'NO', 'EMAIL'),
('Lewis', 'Finley', 'Alec', 'faucibus@arcu.co.uk', 123456, 'M', '6292 In Rd', 12345678, '12-5-1988', 'NO', 'EMAIL'),
('Ferdinand', 'Frederick', 'Portia', 'aliquet@tellusidnunc.edu', 123456, 'M', '6293 In Rd', 12345678, '12-6-1988', 'NO', 'EMAIL'),
('Camden', 'Shaffer', 'Amery', 'nec.tempus@ametlorem.co.uk', 123456, 'M', '6294 In Rd', 12345678, '12-7-1988', 'NO', 'EMAIL'),
('Chandler', 'Dennis', 'Coby', 'dictum@ipsumcursusvestibulum.co.uk', 123456, 'M', '6295 In Rd', 12345678, '12-8-1988', 'NO', 'TEXT'),
('Yoshi', 'Adkins', 'Kathleen', 'sed.pede@facilisis.net', 123456, 'M', '6296 In Rd', 12345678, '12-9-1988', 'NO', 'TEXT'),
('Ivor', 'Case', 'Kennedy', 'ipsum.Donec@Utnecurna.edu', 123456, 'M', '6297 In Rd', 12345678, '12-10-1988', 'NO', 'TEXT'),
('Gregory', 'Shannon', 'Kermit', 'lacus.Quisque.imperdiet@Incondimentum.ca', 123456, 'M', '6298 In Rd', 12345678, '12-11-1988', 'NO', 'TEXT'),
('Ulla', 'Bean', 'Kaye', 'Nulla@sitamet.co.uk', 123456, 'M', '6299 In Rd', 12345678, '12-12-1988', 'NO', 'TEXT'),
('Hammett', 'Atkinson', 'McKenzie', 'netus.et@justonecante.com', 123456, 'M', '6300 In Rd', 12345678, '12-13-1988', 'NO', 'TEXT'),
('Barry', 'Rivers', 'Phyllis', 'purus.accumsan@Quisque.co.uk', 123456, 'M', '6301 In Rd', 12345678, '12-14-1988', 'NO', 'TEXT'),
('Jessica', 'Moreno', 'Marcia', 'facilisis@purusaccumsaninterdum.ca', 123456, 'M', '6302 In Rd', 12345678, '12-15-1988', 'NO', 'TEXT'),
('Addison', 'Shields', 'Mollie', 'velit.justo.nec@nibh.co.uk', 123456, 'M', '6303 In Rd', 12345678, '12-16-1988', 'NO', 'TEXT'),
('Kylee', 'Baird', 'Wayne', 'morbi.tristique@enimgravidasit.co.uk', 123456, 'M', '6304 In Rd', 12345678, '12-17-1988', 'NO', 'TEXT'),
('Dieter', 'Zamora', 'Jael', 'lectus.justo@arcu.org', 123456, 'M', '6305 In Rd', 12345678, '12-18-1988', 'NO', 'TEXT'),
('Risa', 'Medina', 'Sloane', 'aliquet@Craseget.com', 123456, 'M', '6306 In Rd', 12345678, '12-19-1988', 'NO', 'TEXT'),
('Cameron', 'Ortiz', 'Christen', 'malesuada.vel@vitae.org', 123456, 'M', '6307 In Rd', 12345678, '12-20-1988', 'NO', 'TEXT'),
('Xantha', 'Fox', 'Vernon', 'posuere.enim.nisl@at.co.uk', 123456, 'M', '6308 In Rd', 12345678, '12-21-1988', 'NO', 'TEXT'),
('May', 'Watson', 'Alana', 'sociis.natoque@diameu.com', 123456, 'M', '6309 In Rd', 12345678, '12-22-1988', 'NO', 'TEXT'),
('Gail', 'Butler', 'Jamalia', 'Morbi@tempusmauriserat.org', 123456, 'M', '6310 In Rd', 12345678, '12-23-1988', 'NO', 'TEXT'),
('Carl', 'Mcgee', 'Thane', 'a@facilisis.com', 123456, 'M', '6311 In Rd', 12345678, '12-24-1988', 'NO', 'TEXT'),
('Colorado', 'Kaufman', 'Zoe', 'dictum@Ut.edu', 123456, 'M', '6312 In Rd', 12345678, '12-25-1988', 'NO', 'TEXT'),
('Hedwig', 'Key', 'Chandler', 'consequat.lectus.sit@ultricesmauris.co.uk', 123456, 'M', '6313 In Rd', 12345678, '12-26-1988', 'NO', 'TEXT'),
('Maryam', 'Garcia', 'Dacey', 'vehicula.et@lacus.org', 123456, 'M', '6314 In Rd', 12345678, '12-27-1988', 'NO', 'TEXT'),
('Colorado', 'Salinas', 'Ora', 'Morbi.accumsan.laoreet@Utnecurna.co.uk', 123456, 'M', '6315 In Rd', 12345678, '12-28-1988', 'NO', 'TEXT'),
('Alice', 'Baldwin', 'Madaline', 'Mauris.vestibulum.neque@ipsumcursusvestibulum.net', 123456, 'M', '6316 In Rd', 12345678, '12-29-1988', 'NO', 'TEXT'),
('Cathleen', 'Mcintyre', 'Damon', 'consequat@loremvitae.ca', 123456, 'F', '6317 In Rd', 12345678, '12-30-1988', 'NO', 'TEXT'),
('Nathan', 'Larsen', 'Kalia', 'nec@purus.ca', 123456, 'F', '6318 In Rd', 12345678, '12-31-1988', 'NO', 'TEXT'),
('Brooke', 'Nicholson', 'Cheryl', 'tincidunt@sem.com', 123456, 'F', '6319 In Rd', 12345678, '1-1-1989', 'NO', 'TEXT'),
('Gail', 'Wolfe', 'Giselle', 'nulla@tinciduntorci.ca', 123456, 'F', '6320 In Rd', 12345678, '1-2-1989', 'NO', 'TEXT'),
('Hakeem', 'Holland', 'Hilel', 'mus.Aenean@aliquetvel.ca', 123456, 'F', '6321 In Rd', 12345678, '1-3-1989', 'NO', 'TEXT'),
('Ivan', 'Lewis', 'Quon', 'lorem.semper.auctor@Pellentesqueutipsum.ca', 123456, 'F', '6322 In Rd', 12345678, '1-4-1989', 'NO', 'TEXT'),
('Gloria', 'Gay', 'McKenzie', 'enim.condimentum@Proinvelarcu.org', 123456, 'M', '6323 In Rd', 12345678, '1-5-1989', 'NO', 'TEXT'),
('Ila', 'Daugherty', 'Paula', 'Nullam.enim.Sed@adipiscingfringillaporttitor.net', 123456, 'M', '6324 In Rd', 12345678, '1-6-1989', 'NO', 'TEXT'),
('Isaiah', 'Peters', 'Quon', 'Vestibulum.ante@egestasAliquamnec.edu', 123456, 'M', '6325 In Rd', 12345678, '1-7-1989', 'NO', 'TEXT'),
('Yvette', 'Albert', 'Jolie', 'nisi.sem.semper@massaQuisqueporttitor.co.uk', 123456, 'M', '6326 In Rd', 12345678, '1-8-1989', 'NO', 'TEXT'),
('Idola', 'Weeks', 'Anthony', 'nec@necdiam.com', 123456, 'M', '6327 In Rd', 12345678, '1-9-1989', 'NO', 'TEXT'),
('James', 'Bean', 'Tiger', 'nisi.Cum@tempor.ca', 123456, 'M', '6328 In Rd', 12345678, '1-10-1989', 'YES', 'TEXT'),
('Keely', 'Craig', 'Micah', 'enim.nisl.elementum@vestibulumloremsit.ca', 123456, 'M', '6329 In Rd', 12345678, '1-11-1989', '2723', 'TEXT'),
('Cleo', 'Lowe', 'Sopoline', 'netus.et.malesuada@tellusSuspendissesed.ca', 123456, 'M', '6330 In Rd', 12345678, '1-12-1989', '2723', 'TEXT'),
('Kai', 'Lloyd', 'Cadman', 'sem.molestie@Quisquenonummyipsum.edu', 123456, 'M', '6331 In Rd', 12345678, '1-13-1989', '2723', 'TEXT'),
('Jillian', 'Hammond', 'Cadman', 'aliquet.magna.a@odioa.net', 123456, 'F', '6332 In Rd', 12345678, '1-14-1989', '2723', 'TEXT'),
('Kuame', 'Norris', 'Kermit', 'Curabitur.sed.tortor@ultricies.org', 123456, 'F', '6333 In Rd', 12345678, '1-15-1989', '2723', 'TEXT'),
('Jeanette', 'Barnett', 'Bethany', 'facilisis.non.bibendum@ametorci.org', 123456, 'F', '6334 In Rd', 12345678, '1-16-1989', '2723', 'TEXT'),
('Elmo', 'Kelley', 'Sarah', 'sapien.Cras.dolor@nibhPhasellus.net', 123456, 'F', '6335 In Rd', 12345678, '1-17-1989', '2723', 'TEXT'),
('Dolan', 'Cline', 'Maggie', 'nec.ante.Maecenas@odio.ca', 123456, 'F', '6336 In Rd', 12345678, '1-18-1989', '2723', 'TEXT'),
('Nicole', 'Campos', 'Kaitlin', 'neque.sed@Donecconsectetuermauris.net', 123456, 'F', '6337 In Rd', 12345678, '1-19-1989', '2723', 'TEXT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
