-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2016 at 10:47 PM
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
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `USER_ID` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `GENDER` char(1) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CONTACT_NUMBER` int(10) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `SUBSCRIPTION` varchar(3) NOT NULL DEFAULT 'NO',
  `CONTACT_MODE` varchar(5) NOT NULL DEFAULT 'TEXT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER_DETAILS`
--

INSERT INTO `USER_DETAILS` (`FIRST_NAME`, `LAST_NAME`, `USER_ID`, `EMAIL`, `PASSWORD`, `GENDER`, `ADDRESS`, `CONTACT_NUMBER`, `DATE_OF_BIRTH`, `SUBSCRIPTION`, `CONTACT_MODE`) VALUES
('Wyoming', 'Cervantes', 'Akeem', 'vel@felisadipiscingfringilla.e', '123456', 'M', '6276 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('May', 'Watson', 'Alana', 'sociis.natoque@diameu.com', '123456', 'M', '6309 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Lewis', 'Finley', 'Alec', 'faucibus@arcu.co.uk', '123456', 'M', '6292 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Camden', 'Shaffer', 'Amery', 'nec.tempus@ametlorem.co.uk', '123456', 'M', '6294 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Aidan', 'Powers', 'Amity', 'aliquet.magna@urna.org', '123456', 'M', '6272 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Alexander', 'Rodgers', 'Amos', 'elementum@blanditenimconsequat', '123456', 'M', '6279 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Garth', 'Leon', 'Anastasia', 'consectetuer@porttitoreros.net', '123456', 'F', '6260 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Idola', 'Weeks', 'Anthony', 'nec@necdiam.com', '123456', 'M', '6327 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Arden', 'Fuller', 'Beatrice', 'risus@fermentumrisus.com', '123456', 'M', '6278 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Jeanette', 'Barnett', 'Bethany', 'facilisis.non.bibendum@ametorc', '123456', 'F', '6334 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Rowan', 'Fields', 'Branden', 'tempor.erat.neque@mollisnec.ca', '123456', 'M', '6239 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Malik', 'Goodman', 'Brooke', 'nisl.Quisque.fringilla@Namacnu', '123456', 'M', '6286 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Jillian', 'Hammond', 'Cadman', 'aliquet.magna.a@odioa.net', '123456', 'F', '6332 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Delilah', 'Doyle', 'Carter', 'ullamcorper.magna.Sed@commodoa', '123456', 'M', '6246 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Hedwig', 'Key', 'Chandler', 'consequat.lectus.sit@ultricesm', '123456', 'M', '6313 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Brooke', 'Nicholson', 'Cheryl', 'tincidunt@sem.com', '123456', 'F', '6319 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Cameron', 'Ortiz', 'Christen', 'malesuada.vel@vitae.org', '123456', 'M', '6307 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Maxwell', 'Obrien', 'Clinton', 'luctus.vulputate.nisi@liberola', '123456', 'M', '6240 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Chandler', 'Dennis', 'Coby', 'dictum@ipsumcursusvestibulum.c', '123456', 'M', '6295 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Maryam', 'Garcia', 'Dacey', 'vehicula.et@lacus.org', '123456', 'M', '6314 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Cathleen', 'Mcintyre', 'Damon', 'consequat@loremvitae.ca', '123456', 'F', '6317 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Vanna', 'Hill', 'Daquan', 'lacus.Mauris.non@semmolestieso', '123456', 'F', '6263 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Uriel', 'Cantrell', 'Darrel', 'magna.tellus@Aliquamultrices.c', '123456', 'F', '6262 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Ramona', 'Macdonald', 'Deirdre', 'non@dolorvitaedolor.org', '123456', 'M', '6277 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Amos', 'Mcbride', 'Demetria', 'ipsum@aliquameuaccumsan.com', '123456', 'M', '6287 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Elizabeth', 'Payne', 'Denton', 'orci.quis.lectus@Crasloremlore', '123456', 'F', '6259 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Daniel', 'Burks', 'Doris', 'porttitor.vulputate.posuere@ni', '123456', 'M', '6282 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Moana', 'Patel', 'Ebony', 'et.rutrum.eu@Aeneaneget.org', '123456', 'M', '6270 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Vincent', 'Gutierrez', 'Elliott', 'dignissim.lacus@ornarefacilisi', '123456', 'F', '6258 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Murphy', 'Patrick', 'Emi', 'aptent.taciti@neque.net', '123456', 'M', '6281 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Uma', 'Boyle', 'Finn', 'lobortis@eratvitae.org', '123456', 'F', '6253 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Talon', 'Horton', 'Flavia', 'sit.amet@vitaediamProin.net', '123456', 'F', '6261 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Sacha', 'Gentry', 'Forrest', 'leo.Morbi@nec.org', '123456', 'M', '6242 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Gail', 'Wolfe', 'Giselle', 'nulla@tinciduntorci.ca', '123456', 'F', '6320 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Plato', 'Lara', 'Heidi', 'lectus.Nullam@blandit.com', '123456', 'M', '6269 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Hilel', 'Roach', 'Henry', 'vitae@Proin.edu', '123456', 'M', '6266 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Hakeem', 'Holland', 'Hilel', 'mus.Aenean@aliquetvel.ca', '123456', 'F', '6321 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Imelda', 'Parker', 'Hillary', 'magna.malesuada.vel@lobortis.e', '123456', 'M', '6284 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Ulric', 'Mendoza', 'Ifeoma', 'arcu@nisimagna.co.uk', '123456', 'F', '6250 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Malachi', 'Bates', 'Ina', 'purus.gravida@velitegestas.edu', '123456', 'F', '6264 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Palmer', 'Castillo', 'Ingrid', 'odio.auctor.vitae@ipsum.edu', '123456', 'M', '6280 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Dieter', 'Zamora', 'Jael', 'lectus.justo@arcu.org', '123456', 'M', '6305 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Suki', 'Travis', 'Jamal', 'venenatis.a.magna@quamPellente', '123456', 'M', '6265 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Gail', 'Butler', 'Jamalia', 'Morbi@tempusmauriserat.org', '123456', 'M', '6310 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Macaulay', 'Pace', 'Jarrod', 'consequat.lectus@euismodet.ca', '123456', 'M', '6243 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Deborah', 'Herrera', 'Jenna', 'a.arcu.Sed@nonnisi.net', '123456', 'M', '6247 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Yvette', 'Albert', 'Jolie', 'nisi.sem.semper@massaQuisquepo', '123456', 'M', '6326 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('H', 'K', 'k', 'k@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'on', 'TEXT'),
('H', 'K', 'k2', 'k2@gmail.com', '12345', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'on', 'on'),
('H', 'K', 'k3', 'k3@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'on', 'on'),
('H', 'K', 'k4', 'k4@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'NO', 'on'),
('H', 'K', 'k5', 'k5@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'YES', ''),
('H', 'K', 'k6', 'k6@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'YES', ''),
('H', 'K', 'k7', 'k7@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'YES', 'on'),
('H', 'K', 'k8', 'k8@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'YES', 'TEXT'),
('H', 'K', 'k9', 'k9@gmail.com', '', 'M', '123 k pkwy, san jose', 32561212, '1988-10-27', 'YES', 'EMAIL'),
('Nicole', 'Campos', 'Kaitlin', 'neque.sed@Donecconsectetuermau', '123456', 'F', '6337 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Nathan', 'Larsen', 'Kalia', 'nec@purus.ca', '123456', 'F', '6318 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Yoshi', 'Adkins', 'Kathleen', 'sed.pede@facilisis.net', '123456', 'M', '6296 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Uriah', 'Rodgers', 'Kato', 'vulputate@Ut.net', '123456', 'F', '6254 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Ulla', 'Bean', 'Kaye', 'Nulla@sitamet.co.uk', '123456', 'M', '6299 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Wyoming', 'Padilla', 'Keely', 'mauris.a.nunc@diamluctuslobort', '123456', 'F', '6252 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Ivor', 'Case', 'Kennedy', 'ipsum.Donec@Utnecurna.edu', '123456', 'M', '6297 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Kuame', 'Norris', 'Kermit', 'Curabitur.sed.tortor@ultricies', '123456', 'F', '6333 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Daryl', 'Williamson', 'Lacy', 'eget@molestietellus.ca', '123456', 'M', '6244 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Adara', 'Clark', 'Leila', 'ornare.elit.elit@anteipsumprim', '123456', 'M', '6290 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Alice', 'Baldwin', 'Madaline', 'Mauris.vestibulum.neque@ipsumc', '123456', 'M', '6316 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Kiayada', 'Mcmillan', 'Madison', 'Phasellus.dapibus@necimperdiet', '123456', 'F', '6255 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Dolan', 'Cline', 'Maggie', 'nec.ante.Maecenas@odio.ca', '123456', 'F', '6336 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Jessica', 'Moreno', 'Marcia', 'facilisis@purusaccumsaninterdu', '123456', 'M', '6302 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Rudyard', 'Webster', 'Maya', 'tempus@Suspendissealiquet.net', '123456', 'M', '6245 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Gloria', 'Gay', 'McKenzie', 'enim.condimentum@Proinvelarcu.', '123456', 'M', '6323 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Keely', 'Craig', 'Micah', 'enim.nisl.elementum@vestibulum', '123456', 'M', '6329 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Addison', 'Shields', 'Mollie', 'velit.justo.nec@nibh.co.uk', '123456', 'M', '6303 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Sacha', 'Sims', 'Nevada', 'leo.in.lobortis@esttemporbiben', '123456', 'M', '6289 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Molly', 'Woods', 'Nomlanga', 'lobortis.mauris.Suspendisse@Ma', '123456', 'M', '6291 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Isaiah', 'Richards', 'Odessa', 'mauris@aliquetvel.com', '123456', 'M', '6288 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Colorado', 'Salinas', 'Ora', 'Morbi.accumsan.laoreet@Utnecur', '123456', 'M', '6315 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Ila', 'Daugherty', 'Paula', 'Nullam.enim.Sed@adipiscingfrin', '123456', 'M', '6324 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Barry', 'Rivers', 'Phyllis', 'purus.accumsan@Quisque.co.uk', '123456', 'M', '6301 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Carissa', 'Morin', 'Piper', 'elit@acsemut.ca', '123456', 'F', '6251 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Pooja', 'Y', 'pooja', 'p@gmail.com', '123', 'F', '123 k pkwy, san jose', 2147483647, '2016-09-01', 'NO', 'TEXT'),
('Reuben', 'Moore', 'Porter', 'elit.pellentesque.a@nibhsit.co', '123456', 'F', '6257 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Ferdinand', 'Frederick', 'Portia', 'aliquet@tellusidnunc.edu', '123456', 'M', '6293 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Isaiah', 'Peters', 'Quon', 'Vestibulum.ante@egestasAliquam', '123456', 'M', '6325 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Elmo', 'Kelley', 'Sarah', 'sapien.Cras.dolor@nibhPhasellu', '123456', 'F', '6335 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Zane', 'Farmer', 'Sawyer', 'Morbi@ac.co.uk', '123456', 'M', '6268 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Charles', 'Bullock', 'Scott', 'ac.risus@Praesent.edu', '123456', 'M', '6274 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Stacy', 'Calderon', 'Sharon', 'litora.torquent@euultrices.net', '123456', 'F', '6256 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Graham', 'Cameron', 'Signe', 'tempor@Maurismolestie.co.uk', '123456', 'M', '6275 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Denton', 'Norman', 'Sigourney', 'ac.orci@inaliquet.co.uk', '123456', 'M', '6249 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Risa', 'Medina', 'Sloane', 'aliquet@Craseget.com', '123456', 'M', '6306 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Cleo', 'Lowe', 'Sopoline', 'netus.et.malesuada@tellusSuspe', '123456', 'M', '6330 In Rd', 12345678, '0000-00-00', '272', 'TEXT'),
('Axel', 'Odonnell', 'Steel', 'euismod.ac.fermentum@odiosempe', '123456', 'M', '6271 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Carl', 'Mcgee', 'Thane', 'a@facilisis.com', '123456', 'M', '6311 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Merrill', 'Holden', 'Thor', 'sagittis.placerat@tortorIntege', '123456', 'M', '6241 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('James', 'Bean', 'Tiger', 'nisi.Cum@tempor.ca', '123456', 'M', '6328 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Avram', 'Oneil', 'Tyrone', 'mi.enim.condimentum@nibh.edu', '123456', 'M', '6267 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('FIRST_NAME', 'LAST_NAME', 'USER_ID', 'EMAIL', 'PASSWORD', 'G', 'ADDRESS', 0, '0000-00-00', 'SUB', 'CONTA'),
('Xantha', 'Fox', 'Vernon', 'posuere.enim.nisl@at.co.uk', '123456', 'M', '6308 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Ciaran', 'Mccarthy', 'Wallace', 'facilisis.Suspendisse@Nullaeu.', '123456', 'M', '6273 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Kylee', 'Baird', 'Wayne', 'morbi.tristique@enimgravidasit', '123456', 'M', '6304 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT'),
('Jael', 'Perez', 'Wyatt', 'enim.commodo.hendrerit@ferment', '123456', 'M', '6238 In Rd', 12345678, '0000-00-00', 'YES', 'TEXT'),
('Nayda', 'Saunders', 'Yardley', 'eu@amet.com', '123456', 'M', '6283 In Rd', 12345678, '0000-00-00', 'NO', 'EMAIL'),
('Colorado', 'Kaufman', 'Zoe', 'dictum@Ut.edu', '123456', 'M', '6312 In Rd', 12345678, '0000-00-00', 'NO', 'TEXT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `USER_DETAILS`
--
ALTER TABLE `USER_DETAILS`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
