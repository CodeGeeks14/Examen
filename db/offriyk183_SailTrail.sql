-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 11 sep 2017 om 10:03
-- Serverversie: 10.2.7-MariaDB
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offriyk183_SailTrail`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Categorie`
--

CREATE TABLE `Categorie` (
  `idCategorie` int(11) NOT NULL,
  `Categorie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Categorie`
--

INSERT INTO `Categorie` (`idCategorie`, `Categorie`) VALUES
(1, 'Stoom'),
(2, 'Diesel'),
(3, 'Elektrisch'),
(4, 'transport wagon'),
(5, 'personen wagon'),
(6, 'Actie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `CategorieProduct`
--

CREATE TABLE `CategorieProduct` (
  `idProduct` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `CategorieProduct`
--

INSERT INTO `CategorieProduct` (`idProduct`, `idCategorie`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(20, 2),
(21, 2),
(22, 3),
(23, 4),
(24, 6),
(25, 6),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 5),
(43, 5),
(44, 5),
(45, 5),
(46, 5),
(47, 2),
(47, 6),
(48, 2),
(48, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Gebruiker`
--

CREATE TABLE `Gebruiker` (
  `idGebruiker` int(11) NOT NULL,
  `Voornaam` varchar(45) NOT NULL,
  `Tussenvoegsel` varchar(45) NOT NULL,
  `Achternaam` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Straat` varchar(45) NOT NULL,
  `Huisnummer` int(45) NOT NULL,
  `Woonplaats` varchar(45) NOT NULL,
  `Postcode` varchar(45) NOT NULL,
  `Rekeningnummer` varchar(45) NOT NULL,
  `ActievatieDatum` date NOT NULL,
  `Activation` tinyint(1) NOT NULL,
  `activationKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Gebruiker`
--

INSERT INTO `Gebruiker` (`idGebruiker`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Email`, `Straat`, `Huisnummer`, `Woonplaats`, `Postcode`, `Rekeningnummer`, `ActievatieDatum`, `Activation`, `activationKey`) VALUES
(59, 'Olaf', '', 'Smid', 'olafsmid@hotmail.com', 'Zwanenwater', 19, 'Amstelveen', '1187LB', 'NL44INGB0009632492', '2017-08-19', 1, 11),
(60, 'Olaf', '', 'Smid', 'testmailforo@gmail.com', 'Zwanenwater', 19, 'Amstelveen', '1187LB', 'NL44ING', '2017-08-19', 1, 24523);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Items`
--

CREATE TABLE `Items` (
  `idItems` int(11) NOT NULL DEFAULT 0,
  `idProduct` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Items`
--

INSERT INTO `Items` (`idItems`, `idProduct`, `Status`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0),
(4, 4, 0),
(5, 5, 0),
(6, 6, 0),
(7, 7, 0),
(8, 8, 0),
(9, 9, 0),
(10, 10, 0),
(11, 11, 0),
(12, 12, 0),
(13, 13, 0),
(14, 14, 0),
(15, 15, 0),
(16, 16, 0),
(17, 17, 0),
(20, 20, 0),
(21, 21, 0),
(22, 22, 0),
(23, 23, 0),
(24, 24, 0),
(25, 25, 0),
(26, 26, 0),
(27, 27, 0),
(28, 28, 0),
(29, 29, 0),
(30, 30, 0),
(31, 31, 0),
(32, 32, 0),
(33, 33, 0),
(34, 34, 0),
(35, 35, 0),
(36, 36, 0),
(37, 37, 0),
(38, 38, 0),
(39, 39, 0),
(40, 40, 0),
(41, 41, 0),
(42, 42, 0),
(43, 43, 0),
(44, 44, 0),
(45, 45, 0),
(46, 46, 0),
(47, 47, 0),
(48, 48, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Model`
--

CREATE TABLE `Model` (
  `idModel` int(11) NOT NULL,
  `Model` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Model`
--

INSERT INTO `Model` (`idModel`, `Model`) VALUES
(1, 'Locomotive'),
(2, 'Wagon');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ModelProduct`
--

CREATE TABLE `ModelProduct` (
  `idProduct` int(11) NOT NULL,
  `idModel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ModelProduct`
--

INSERT INTO `ModelProduct` (`idProduct`, `idModel`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 2),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Order`
--

CREATE TABLE `Order` (
  `idOrder` int(11) NOT NULL,
  `idGebruiker` int(11) NOT NULL,
  `OrderDatum` date NOT NULL,
  `oPrijs` float NOT NULL,
  `Opmerking` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Order`
--

INSERT INTO `Order` (`idOrder`, `idGebruiker`, `OrderDatum`, `oPrijs`, `Opmerking`) VALUES
(9, 59, '2017-09-08', 450, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `OrderRegel`
--

CREATE TABLE `OrderRegel` (
  `idOrderRegel` int(11) NOT NULL,
  `idOrder` int(11) DEFAULT NULL,
  `Items` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `OrderRegel`
--

INSERT INTO `OrderRegel` (`idOrderRegel`, `idOrder`, `Items`) VALUES
(12, 9, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Product`
--

CREATE TABLE `Product` (
  `idProduct` int(11) NOT NULL,
  `ProductNaam` varchar(100) NOT NULL,
  `Prijs` varchar(45) NOT NULL,
  `ProductCode` varchar(45) NOT NULL,
  `Omschrijving` varchar(10000) NOT NULL,
  `image` varchar(45) NOT NULL,
  `Actieprijs` varchar(45) NOT NULL,
  `ActieDatum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Product`
--

INSERT INTO `Product` (`idProduct`, `ProductNaam`, `Prijs`, `ProductCode`, `Omschrijving`, `image`, `Actieprijs`, `ActieDatum`) VALUES
(1, 'Class 24 Steam Locomotive with a Tender', '250', '36246', '<b>Prototype:</b> German Federal Railroad (DB) class 24 steam passenger locomotive with a tender. Standard design locomotive with Witte smoke deflectors. The locomotive looks as it did at the start of the Sixties.<br><br> <b>Model:</b> The locomotive has an mfx digital decoder and extensive sound functions. It also has a special motor in the boiler. 3 axles powered. Traction tires. The boiler is constructed of metal. The locomotive comes with a factory-installed 72270 smoke unit. The triple headlights change over with the direction of travel. They and the built-in smoke unit will work in conventional operation and can be controlled digitally. Maintenance-free, warm white LEDs are used for the lighting. There is a close coupling with a guide mechanism between the locomotive and the tender. There is a close coupler with an NEM pocket and a guide mechanism on the rear of the tender. There is a close coupler in an NEM pocket on the front of the locomotive. Length over the buffers 19.4 cm / 7-5/8".<br><br>  <b>Highlights</b><br><br>  <li>Authentic weathering.</li> <li>Locomotive comes with a collector\'s display case and a certificate of authenticity.</li> <li>Factory-installed smoke unit.</li>', 'Product/class24.jpg', '', '0000-00-00'),
(2, 'Class 050 Steam Freight Locomotive with a Cabin Tender', '450', '37836', '<b>Prototype:</b> German Federal Railroad (DB) class 050 steam freight locomotive with a cabin tender. Witte smoke deflectors, 4 boiler domes, shortened running boards, DB Reflex glass lamps, and inductive magnets. Locomotive road number 050 045-4. The locomotive looks as it did around 1970.<br><br>\r\n\r\n<b>Model:</b>The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive and tender are constructed mostly of metal. A 7226 smoke unit can be installed in the locomotive. The triple headlights change over with the direction of travel. They and the smoke unit that can be installed in the locomotive will work in conventional operation and can be controlled digitally. The cab lighting and the cabin lighting in the tender cabin can be controlled separately in digital operation. Maintenance-free warm white LEDs are used for the lighting. There is a figure in the tender cabin of a train conductor, installed at the factory. There is a close coupling with a guide mechanism between the locomotive and tender. The rear of the tender and the front of the locomotive have close couplers with NEM pockets and guide mechanisms. The minimum radius for operation is 360 mm / 14-3/16". Figures of a locomotive engineer and a fireman as well as protective piston sleeves and brake hoses are included. Length over the buffers 26.5 cm / 10-7/16".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Cab lighting digitally controlled.</li>\r\n<li>Lighting in the tender cabin digitally controlled.</li>\r\n<li>Figures of a locomotive engineer and a fireman included.</li>\r\n<li>Train conductor in the tender cabin.</li>\r\n<li>Especially finely detailed metal construction.</li>\r\n<li>Partially open bar frame and many separately applied details.</li>\r\n<li>High-efficiency propulsion with a flywheel, mounted in the boiler.</li>\r\n<li>mfx+ World of Operation decoder and extensive operational and sound functions included.</li>', 'Product/class050.jpg', '', '0000-00-00'),
(3, 'Class 24 Steam Locomotive with a Tender', '199', '36244', '<b>Prototype:</b> German Federal Railroad (DB) class 24 steam passenger locomotive with a tender. Standard design locomotive with Wagner smoke deflectors. Locomotive road number 24 044. The locomotive looks as it did around 1957.<br><br>\r\n\r\n<b>Model:</b> The locomotive has an mfx digital decoder and extensive sound functions. It also has a special motor in the boiler. 3 axles powered. Traction tires. The boiler is constructed of metal. The locomotive comes with a factory installed 72270 smoke unit. The triple headlights change over with the direction of travel. They and the built-in smoke unit will work in conventional operation and can be controlled digitally. Maintenance-free, warm white LEDs are used for the lighting. There is a close coupling with a guide mechanism between the locomotive and the tender. There is a close coupler with an NEM pocket and a guide mechanism on the rear of the tender. There is a close coupler in an NEM pocket on the front of the locomotive. Length over the buffers 19.4 cm / 7-5/8".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Locomotive includes an mfx decoder and a variety of sound functions.</li>\r\n<li>Detailed, affordable beginner\'s model with extensive features.</li>\r\n<li>Factory-installed smoke unit.</li>', 'Product/class24+.jpg', '', '0000-00-00'),
(4, 'Class 58.10-21 Freight Steam Locomotive', '430', '37587', '<b>Prototype:</b> German State Railroad (DRG) class 58.10-21 (former Prussian G 12) freight steam locomotive. With Reichsbahn lanterns and a type 3T 20 tender. Road number 58 1880. The locomotive looks as it did around 1936.\n<br><br>\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive and tender are constructed mostly of metal. There is a smoke unit contact and a 7226 smoke generator kit can be installed in the locomotive. The dual headlights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. Maintenance-free warm white LEDs are used for the lighting. There is a permanent close coupling with a guide mechanism between the locomotive and tender. There is a close coupler with an NEM coupler pocket and guide mechanism on the front of the locomotive. There is an NEM coupler pocket and guide mechanism with a Telex coupler on the rear of the tender. The locomotive has many separately applied details such as piping and sand pipes. It also has cab lighting. Piston rod protection sleeves and brake hoses are included. Length over the buffers 21.2 cm / 8-3/8".<br><br>\n\n<b>Highlights</b><br><br>\n\n<li>Especially finely detailed metal construction.</li>\n<li>Partially open bar frame.</li>\n<li>mfx+ digital decoder and extensive operating and sound functions included.</li>\n<li>Warm white LEDs for lighting.</li>\n<li>A smoke generator can be installed in the locomotive.</li>', 'Product/class58.jpg', '', '0000-00-00'),
(5, 'Class 01.5 Steam Express Locomotive with a Tender', '500', '39207', '<b>Prototype:</b> Class 01.5 steam express locomotive with a coal tender. GDR German State Railroad (DR/GDR) "Reko" version as it currently looks as a museum locomotive for the Zollernbahn Railroad Enthusiasts (EFZ), Rottweil, Germany. Includes spoked wheels, type 2´2´T34 standard design coal tender, special design Witte smoke deflectors for the class 01.5, continuous dome streamlining, and inductive magnets on both sides. Road number 01 519. The locomotive looks as it currently does in 2016.<br><br>\n\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 3 axles powered. Traction tires. The locomotive and tender are constructed mostly of metal. The 7226 smoke unit can be installed in the locomotive. The triple headlights change over with the direction of travel. They and the smoke unit that can be installed in the locomotive will work in conventional operation and can be controlled digitally. The cab lights can also be controlled digitally. Maintenance-free warm white LEDs are used for the lighting. There is a close coupling with a guide mechanism between the locomotive and tender. There is a close coupler with an NEM pocket and a guide mechanism on the tender. The minimum radius for operation is 360 mm / 14-3/16". Protective sleeves for the piston rods and brake hoses are included as detail parts. Length over the buffers 28.2 cm / 11-1/8". A small brochure on the history of road number 01 519 and its restoration is also included.<br><br>\n\n<b>Highlights</b><br><br>\n\n<li>Version as a museum locomotive for the Zollernbahn Railroad Enthusiasts (EFZ), Rottweil, Germany.</li>\n<li>Continuous dome streamlining, partially open bar frame, and many separately applied details.</li>\n<li>mfx+ World of Operation decoder and extensive operation and sound functions included.</li>\n<li>For still more operating enjoyment in the Märklin "World of Operation".</li>', 'Product/class85.jpg', '', '0000-00-00'),
(6, 'Class 694 Steam Tank Locomotive', '350', '37179', 'Prototype: Austrian Federal Railways (Ã–BB) class 694 (former class 94.5) freight tank locomotive. The locomotive looks as it did in the Fifties.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions such as replenishing water, coal, and sand. It has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive is constructed mostly of metal. A 72270 smoke generator can be installed in the locomotive. The dual headlights change over with the direction of travel. They and the smoke generator that can be installed in the locomotive will work in conventional operation and can be controlled digitally. Maintenance-free warm white LEDs are used for the lighting. Protective piston rod sleeves and brake hoses are included. Length over the buffers 14.6 cm / 5-3/4".  Highlights  World of Operation mfx+ digital decoder and extensive operation and sound functions included. For still more operating enjoyment in the MÃ¤rklin "World of ', 'Product/class694.jpg', '', '0000-00-00'),
(7, 'Class 94.5 Steam Tank Locomotive', '350', '37168', 'Prototype: German State Railroad Company (DRG) class 94.5-17 (former T 16.1) freight tank locomotive. Without a bell, with a feed water heater on the top of the boiler, with a rounded cab roof, smokebox door with a central locking device, and with older design buffers. Locomotive road number 94 1036. The locomotive looks as it did around 1931.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions such as replenishing water, coal, and sand. It has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive is constructed mostly of metal. A 72270 smoke generator can be installed in the locomotive. The dual headlights change over with the direction of travel. They and the smoke generator that can be installed in the locomotive will work in conventional operation and can be controlled digitally. Maintenance-free warm white LEDs are used for the lighting. Protective piston rod sleeves and brake hoses are included. Length over the buffers 14.6 cm / 5-3/4".  Highlights  World of Operation mfx+ digital decoder and extensive operation and sound functions included. For still more operating enjoyment in the MÃ¤rklin "World of Operation".', 'Product/class94.5.jpg', '', '0000-00-00'),
(8, 'Class 42 Heavy Steam Freight Locomotive with a Tub-Style Tender', '450', '39042', 'Prototype: German Federal Railroad (DB) class 42 heavy steam freight locomotive, with a type 2Â´2Â´T30 tub-style tender. Black/red basic paint scheme. With Witte standard version smoke deflectors, pilot truck with solid wheels, both lower headlights on the front of the locomotive built into the cylinder block. No smokebox access step below the smokebox door. Locomotive road number 42 1417. The locomotive looks as it did around 1950.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive and the tub-style tender are constructed mostly of metal. A 7226 smoke unit can be installed in the locomotive. The double headlights change over with the direction of travel. They and the smoke unit that can be installed in the locomotive will work in conventional operation and can be controlled digitally. The cab lighting can be controlled in digital operation. Maintenance-free warm white LEDs are used for the lighting. There is a close coupling with a guide mechanism between the locomotive and tender. The rear of the tender and the front of the locomotive have close couplers with NEM pockets and guide mechanisms. The minimum radius for operation is 360 mm / 14-3/16". Protective piston sleeves, brake hoses, and imitation prototype couplers are included. Length over the buffers 26.4 cm / 10-3/8".  Highlights  Completely new tooling. Especially finely detailed metal construction. mfx+ World of Operation digital decoder and a variety of operation and sound functions included. Partially open bar frame with mostly open view between the frame and the boiler. High-efficiency propulsion with a flywheel, mounted in the boiler.', 'Product/class42.jpg', '', '0000-00-00'),
(9, 'Class 42 Heavy Steam Freight Locomotive with a Tub-Style Tender', '390', '39043', 'Prototype: German Federal Railroad (DB) class 42 heavy steam freight locomotive, with a type 2Â´2Â´T30 tub-style tender. Black/red basic paint scheme. With Witte standard version smoke deflectors, pilot truck with solid wheels, both lower headlights on the front of the locomotive built into the cylinder block. No smokebox access step below the smokebox door. Locomotive road number 42 555. The locomotive looks as it did around 1950.  Model: The locomotive has an mfx digital decoder. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive and the tub-style tender are constructed mostly of metal. A 7226 smoke unit can be installed in the locomotive. The double headlights change over with the direction of travel. They and the smoke unit that can be installed in the locomotive will work in conventional operation and can be controlled digitally. The cab lighting can be controlled in digital operation. Maintenance-free warm white LEDs are used for the lighting. There is a close coupling with a guide mechanism between the locomotive and tender. The rear of the tender and the front of the locomotive have close couplers with NEM pockets and guide mechanisms. The minimum radius for operation is 360 mm / 14-3/16". Protective piston sleeves, brake hoses, and imitation prototype couplers are included. Length over the buffers 26.4 cm / 10-3/8".  Highlights  Completely new tooling. Especially finely detailed metal construction. mfx digital decoder, headlight changeover, cab lighting, and a smoke unit contact included and controllable in digital operation. Partially open bar frame with mostly open view between the frame and the boiler. High-efficiency propulsion with a flywheel, mounted in the boiler. Different road number from that for 39042.', 'Product/class42.1.jpg', '', '0000-00-00'),
(10, 'American Freight Steam Locomotive with an Oil Tender', '730', '39911', 'Prototype: Union Pacific Railroad (UP) heavy American freight steam locomotive from the former class 3900 "Challenger", in the converted version with an oil tender. Locomotive version with road number 3706 (former coal-fired locomotive, road number 3943). The locomotive looks as it did in the Fifties.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions. Different operation sounds such as oil and water being replenished or the sounds of opening and closing the sliding windows and the ventilation hatch on the cab can be controlled digitally. The locomotive also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 6 axles powered. Traction tires. The locomotive has an articulated frame enabling it to negotiate sharp curves. It also has Boxpok driving wheels. The headlight, backup light on the tender, and the number board and marker lights are maintenance-free, warm white LEDs. 2 smoke generators (7226) can be installed in the locomotive; the contacts for them are on constantly. The headlight, backup light on the tender, and the contact for the smoke unit will work in conventional operation and can be controlled digitally. The cab lighting and the number board and marker lights can be controlled separately in digital operation. There is a powerful speaker in the tender. An imitation coupler in a standard pocket can be mounted on the pilot at the front of the locomotive. There is a close coupling with a guide mechanism between the locomotive and tender. Steam lines on the front group of driving wheels are mounted to swing out and back with the cylinders. The locomotive has separately applied metal grab irons. There are many separately applied details. Figures of a locomotive engineer and fireman for the engineers cab are included. Length over the couplers 42.5 cm / 16-3/4". The locomotive comes in a wooden case.  Highlights  Completely new tooling, constructed mostly of metal. Many separately applied details. Striking smoke deflectors. mfx+ digital decoder and a wide variety of operation and sound functions included. For still more operating enjoyment in the MÃ¤rklin "World of Operation".', 'Product/america-freight.jpg', '', '0000-00-00'),
(11, 'Class 05 Streamlined Steam Locomotive with a Tender', '550', '39054', 'Prototype: German State Railroad (DRB) class 05 streamlined express steam locomotive. Version with powdered coal firing and the engineers cab at the front. Deep black basic paint scheme with a white decorative stripe. Road number 05 003. Locomotive 14.555 in the delivery book for the Borsig Locomotive Works, Hennigsdorf, Germany.  Model: The locomotive has the new mfx+ digital decoder and extensive sound functions. Powdered coal being moved with a compressor (Operating Sounds 1) can be activated by means of the function button. The locomotive has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 3 axles powered. Traction tires. The locomotive and tender are constructed mostly of metal. Minimum radius for operation is 360 mm / 14-3/16". Cutouts in the side streamlining for smaller track curves can be filled in with add-on fill pieces. The dual headlights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. A third headlight as a headlight for oncoming trains can be controlled separately in digital operation. The engineers cab lighting can be controlled separately in digital operation. Maintenance-free, warm white LEDs are used for the lighting. The locomotive and tender have numerous, separately applied grab irons. A 7226 smoke generator can be installed on the locomotive. There is a permanent close coupling between the locomotive and tender. Length over the buffers 31.0 cm / 12-1/4". A suitable collectors case made of wood and glass is included, and there is a relief of the characteristic Borsig gate of the Borsig Locomotive Works on the back wall of the case. An engraved metal plate including the factory number is mounted on the base of the display case. A high quality excerpt from the delivery book is included.  Highlights  "Borsig Edition 5". Locomotive and tender constructed mostly of metal. mfx+ digital decoder included, for even more operating enjoyment. Locomotive includes extensive operating and sound functions. A suitable collectors case with a relief for each model of the edition. Excerpt from the Borsig delivery book included.', 'Product/class05.jpg', '', '0000-00-00'),
(12, 'Class 01.5 Steam Express Locomotive with a Tender', '500', '39207', 'Prototype: Class 01.5 steam express locomotive with a coal tender. GDR German State Railroad (DR/GDR) "Reko" version as it currently looks as a museum locomotive for the Zollernbahn Railroad Enthusiasts (EFZ), Rottweil, Germany. Includes spoked wheels, type 2Â´2Â´T34 standard design coal tender, special design Witte smoke deflectors for the class 01.5, continuous dome streamlining, and inductive magnets on both sides. Road number 01 519. The locomotive looks as it currently does in 2016.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 3 axles powered. Traction tires. The locomotive and tender are constructed mostly of metal. The 7226 smoke unit can be installed in the locomotive. The triple headlights change over with the direction of travel. They and the smoke unit that can be installed in the locomotive will work in conventional operation and can be controlled digitally. The cab lights can also be controlled digitally. Maintenance-free warm white LEDs are used for the lighting. There is a close coupling with a guide mechanism between the locomotive and tender. There is a close coupler with an NEM pocket and a guide mechanism on the tender. The minimum radius for operation is 360 mm / 14-3/16". Protective sleeves for the piston rods and brake hoses are included as detail parts. Length over the buffers 28.2 cm / 11-1/8". A small brochure on the history of road number 01 519 and its restoration is also included.  Highlights  Version as a museum locomotive for the Zollernbahn Railroad Enthusiasts (EFZ), Rottweil, Germany. Continuous dome streamlining, partially open bar frame, and many separately applied details. mfx+ World of Operation decoder and extensive operation and sound functions included. For still more operating enjoyment in the MÃ¤rklin "World of Operation".', 'Product/class01.5.jpg', '', '0000-00-00'),
(13, '"Mikado" Steam Locomotive with a Tender', '430', '37935', 'Prototype: Atchison, Topeka & Santa Fe Railway (A.T. & S.F.) "Light Mikado" 2-8-2 design fast freight locomotive.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions. It also has a controlled, powerful motor. 4 axles powered. Traction tires. A 72270 smoke generator can be installed in the locomotive. The headlight and the smoke generator contact will work in conventional operation and can be controlled digitally. Maintenance-free LEDs are used for the lighting. The locomotive has steam locomotive sounds synchronized with the speed, a whistle sound, bell sound, and acceleration and braking delay that can be controlled digitally. A non-working knuckle coupler is mounted on the pilot of the locomotive. There is a close coupling between the locomotive and tender. The locomotive has separately applied metal grab irons. It also has many separately applied details. A figure of a locomotive engineer and a fireman are included with the locomotive. The locomotive is authentically weathered. Minimum radius for operation is 360 mm / 14-3/16". Length over the couplers 29 cm / 11-7/16".  Highlights  mfx+ digital decoder. Extensive sound functions. Improved locomotive/tender spacing. Authentic weathering.', 'Product/mikado.jpg', '', '0000-00-00'),
(14, 'Class T 18 Tank Locomotive', '300', '37079', 'Prototype: WÃ¼rttemberg State Railways (W.St.E.) class T 18 tank locomotive. The locomotive looks as it did around 1920.  Model: The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion. 3 axles powered. Traction tires. The dual headlights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The locomotive has numerous separately applied details. Length over the buffers 16.9 cm / 6-5/8".  Highlights  mfx+ digital decoder. Extensive sound functions.', 'Product/t18.jpg', '', '0000-00-00'),
(15, 'Class 688 Tank Locomotive', '230', '36864', 'Prototype: Austrian Federal Railways (Ã–BB) class 688. The locomotive looks as it did in Era III around 1953.  Model: The locomotive has an mfx digital decoder. It has a miniature motor in the boiler. 2 axles powered. Traction tires. The dual headlights change over with the direction of power, will work in conventional operation, and can be controlled digitally. The interior boiler is constructed of metal. The locomotive has numerous separately applied handrails and grab irons. The boiler details and other details are finely modelled. Length over the buffers 8 cm / 3-1/8".', 'Product/class688.jpg', '', '0000-00-00'),
(16, 'Class 064 Tank Locomotive', '330', '39648', '<b>Prototype:</b> German Federal Railroad (DB) class 064 steam locomotive. Version with welded water tanks. Without inductive magnet. Locomotive road number 064 136-5. The locomotive looks as it did around 1973.<br><br>  <b>Model:</b> The locomotive has a new mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion. 3 axles powered. Traction tires. A 72270 smoke unit can be installed in the locomotive. The triple headlights change over with the direction of travel. They and the smoke unit contact will work in conventional operation and can be controlled digitally. Maintenance-free, warm white LEDs are used for the lighting. Brake hose detail parts and piston rod protection sleeves are included. Length over the buffers 14.3 cm / 5-5/8". <br><br> <b>Highlights:</b>  <li>mfx+ World of Operation digital decoder and a wide variety of operation and sound functions included.</li> <li>For still more operating enjoyment in the MÃ¤rklin "World of Operation".</li>', 'Product/class64.jpg', '', '0000-00-00'),
(17, 'Class 57.5 Steam Freight Locomotive with a Tender.', '480', '39554', 'Prototype: Class 57.5 (former Bavarian class G 5/5) heavy steam freight locomotive with a type 2Â´2 T21,8 tender. Class version from the third production series. German Federal Railroad (DB) black/red basic paint scheme. Road number 57 565. The locomotive looks as it did around 1949.  Model: The locomotive has a new mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion with a flywheel, mounted in the boiler. 5 axles powered. Traction tires. The locomotive and tender are constructed chiefly of metal. A 72270 smoke unit can be installed in the locomotive. The dual headlights change over with the direction of travel. They and the smoke unit that can be installed in the locomotive will work in conventional operation and can be controlled digitally. Maintenance-free, warm white LEDs are used for the lighting. There is an adjustable coupling with a guide mechanism between the locomotive and tender. The front of the locomotive and the rear of the tender has an NEM pocket, a close coupler, and a guide mechanism. The minimum radius for operation is 360 mm / 14-3/16". Piston rod protection sleeves and brake hoses are included. Length over the buffers 23.5 cm / 9-1/4".  Highlights  New locomotive road number. mfx+ digital decoder and extensive operation and sound functions included. For still more operating enjoyment in the MÃ¤rklin "World of Operation". The most powerful locomotive with five driving axles of all German provincial railroad locomotives.', 'Product/class57.5.jpg', '', '0000-00-00'),
(20, 'Class V 90 Diesel Locomotive', '299', '37909', '<b>Prototype:</b><br> German Federal Railroad (DB) class V 90 heavy switch engine. Crimson basic paint scheme. Original version without hand rails on the sides. The locomotive looks as it did around 1967.<br>  <b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion, centrally mounted. 4 axles powered through cardan shafts. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The headlights on Locomotive End 2 and 1 can be turned off separately in digital operation. If the headlights at both ends of the locomotive are turned off, then the "double A" light function is on at both ends. Maintenance-free, warm white LEDs are used for the lighting. The engineers cab has interior details in relief. The locomotive has separately applied metal grab irons and railings. Additional steps can be installed under the engineers cab for larger radius curves. Length over the buffers 16.4 cm / 6-7/16".<br><br>  <b>Highlights</b>  <li>mfx+ digital decoder.</li> <li>Extensive sound functions.</li> <li>Model constructed mostly of metal.</li> <li>Telex couplers for remote-controlled uncoupling from cars.</li>', 'Product/classv90.jpg', '', '0000-00-00'),
(21, 'Class 233 Diesel Locomotive', '280', '36431', '<b>Prototype:</b> DB Maintenance Network, Track Construction Group, class 233 "Tiger" heavy diesel locomotive. The locomotive looks as it currently does in real life.<br><br>  <b>Model:</b> The locomotive is constructed of metal and has an mfx digital decoder and extensive sound functions. It also models exhaust gas emission with a Piezo fogger that can be controlled digitally in three steps. 4 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. Maintenance-free, warm white and red LEDs are used for the lighting. Length over the buffers 23.9 cm / 9-3/8".  <br><br><b>Highlights</b>  <li>First time for this locomotive with a digitally controlled cold steam based smoke unit.</li> <li>Locomotive includes a DCC/mfx decoder.</li>', 'Product/class233.jpg', '', '0000-00-00'),
(22, 'Class 120.1 Electric Locomotive', '330', '37527', '<b>Prototype:</b> German Railroad, Inc. (DB AG) class 120.1 fast general-purpose locomotive. Regular production version. Road number 120 127-6. The locomotive looks as it did starting at the end of 2014. <br><br> <b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion. 4 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. Maintenance-free warm white and red LEDs are used for the lighting. The cab lighting can be controlled separately in digital operation. The cabs have interior details. The locomotive has close couplers in standard pockets with a guide mechanism. It also has separately applied metal grab irons. Length over the buffers 22.1 cm / 8-11/16". <br><br> <b>Highlights</b> <br> <li>Centrally mounted motor, 4 axles powered.</li> <li>Close couplers in standard pockets with a guide mechanism.</li> <li>mfx+ digital decoder.</li>', 'Product/class120.1.jpg', '', '0000-00-00'),
(23, 'Dampfschneeschleuder der Bauart Henschel', '250', 'M49966', '<b>Vorbild: </b>Dampfschneeschleuder der Bauart Henschel der Deutschen Bundesbahn (DB). Mit Tender 2`2`T 26 ohne Abdeckplatten auf dem Tender. Betriebszustand um 1970.<br><br>  <b>Modell:</b> Mit Digital-Decoder, angetriebenes rotierendes Schleuderrad und Zusatzfunktionen. Aufbau aus Metall. Angesetzte HandlÃ¤ufe. Detaillierte Nachbildung des Schleudervorbaus. Bewegliche SeitenflÃ¼gel und Leitschaufeln. Arbeitsscheinwerfer und Spitzensignal beleuchtet, digital schaltbar. SerienmÃ¤ÃŸig eingebauter Raucheinsatz. Im konventionellen Betrieb ist der Arbeitsscheinwerfer und das Schleuderrad sowie die Rauchsatzansteuerung funktionsfÃ¤hig. Diese Funktionen sowie das Spitzensignal und das DampfmaschinengerÃ¤usch sind mit der Control Unit 6021 digital schaltbar. LÃ¤nge geschlossen 24,2 cm.<br><br>  <b>Highlights</b>  <br><br><li>Digitales Funktionsmodell mit Licht- und Soundfunktionen.</li><li> Rotation des Schleuderrades. SerienmÃ¤ÃŸig eingebauter Raucheinsatz.</li>', 'Product/57040.jpg', '', '0000-00-00'),
(24, 'TEE Diesel-Triebzug VT 11.5', '1200', 'M37603', '<b>Vorbild:</b> TEE Diesel-Triebzug Baureihe VT 11.5 als 7-teilige Einheit der Deutschen Bundesbahn (DB). 1 Triebkopf Pw4ü, 1 Abteilwagen A4ü, 1 Großraumwagen A4y, 1 Abteilwagen mit Speise-/Barraum AR4y, 1 Mittelwagen mit Küche/Speiseraum AR4y, 1 Abteilwagen A4ü, 1 Triebkopf Pw4ü. Vorbildbezogene Zugreihung der Ursprungsausführung von 1957.<br><br>\r\n\r\n<b>Modell:</b> 7-teilige Zuggarnitur. Triebkopf- und Mittelwagen-Aufbauten mit 24 Karat Feingold beschichtet. Mit Digital-Decoder mfx+ und umfangreichen Geräuschfunktionen. Jeder Triebkopf mit geregeltem Hochleistungsantrieb. Je Triebkopf ein Drehgestell auf beiden Achsen angetrieben. Haftreifen. Mittelwagen mit serienmäßig eingebauter Innenbeleuchtung. Fahrtrichtungsabhängig wechselndes Dreilicht-Spitzensignal, 2 rote Schlusslichter und Innenbeleuchtung konventionell in Betrieb, digital schaltbar. Beleuchtung mit wartungsfreien warmweißen und roten Leuchtdioden (LED). Fahrtrichtungsabhängige Stromversorgung über den jeweils vorderen Triebkopf. Mehrpolige stromführende Spezialkupplungen und dicht schließende Übergangsblenden mit Kulissenführungen zwischen den Fahrzeugen. An den Enden Nachbildung der abgedeckten Scharfenberg-Kupplung (ohne Funktion). Der Triebzug wird in einer exklusiven Verpackung mit Echtheitszertifikat ausgeliefert. Triebzug und Echtheitszertifikat sind durchnummeriert. Zuglänge über Kupplungen 151 cm.<br><br>\r\n\r\n<b>Highlights</b><br><Br>\r\n\r\n<li>Triebkopf- und Mittelwagen-Aufbauten mit 24 Karat Feingold beschichtet.</li>\r\n<li>Weltweit streng limitiert auf 1.500 Triebzüge.</li>\r\n<li>Jeder Triebzug ist durchnummeriert.</li>\r\n<li>Dazu passend durchnummeriertes Echtheitszertifikat.</li>\r\n<li>Exklusive Verpackung.</li>\r\n<li>Schwere Metallausführung.</li>\r\n<li>Mit Spielewelt Digital-Decoder mfx+ und umfangreichen Geräusch-Funktionen.</li>\r\n<li>Serienmäßig eingebaute Innenbeleuchtung mit warmweißen Leuchtdioden (LED).</li>', 'Product/triebzug.jpg', '2400', '2017-08-22'),
(25, 'Aussichtstriebwagen BR 491', '175', 'M37584', '<b>Vorbild:</b> Elektrischer Aussichtstriebwagen Baureihe 491 "Gläserner Zug" der Deutschen Bundesbahn (DB). Farbgebung cremeweiß/enzianblau. Stirnseitig mit Doppellampen unten. Ansaugöffnungen für die Belüftung und Makrofone auf dem Dach. 1 Scheren-Stromabnehmer und 1 Einholm-Stromabnehmer jeweils mit Doppel-Schleifstück. Triebwagen-Betriebsnummer 491 001-4. Betriebszustand um 1986.<br><br>\r\n\r\n<b>Modell:</b> Mit Digital-Decoder mfx+ und umfangreichen Geräuschfunktionen. Über die Funktionstasten kann eine zeitgenössische Begrüßungsansage sowie die Ansage eines Etappenziels, eines Zusatzhinweises für die Reisenden und des Endbahnhofes (Zugdurchsagen) ausgelöst werden. Geregelter Hochleistungsantrieb. 2 Achsen in einem Drehgestell angetrieben. Haftreifen. Eingebaute Inneneinrichtung. Der Triebwagen ist serienmäßig mit einer Triebwagenführerfigur und zahlreichen Fahrgästen bestückt. Serienmäßig eingebaute Innenbeleuchtung. Fahrtrichtungsabhängig wechselndes Dreilicht-Spitzensignal und 2 rote Schlusslichter konventionell in Betrieb, digital schaltbar. Beleuchtung mit wartungsfreien warmweißen und roten Leuchtdioden (LED). Innenbeleuchtung kann als digitale Zusatzfunktion gedimmt werden. Drehgestelle mit vorbildgerecht unterschiedlich langen Radständen. Eingesetzte Panorama-Fenster. Ansaugöffnungen für die Belüftung und Makrofone auf dem Dach. Ausführung mit 1 Scheren-Stromabnehmer und 1 Einholm-Stromabnehmer jeweils mit Doppel-Schleifstück. Länge über Puffer 23,7 cm.<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Mit Spielewelt mfx+ Digital-Decoder, für noch mehr Spielfreude in der Märklin "Spielewelt".</li>\r\n<li>Spezielle Zusatzansagen wie Begrüßung und verschiedene Zugdurchsagen digital schaltbar.</li>\r\n<li>Serienmäßig eingebaute Innenbeleuchtung.</li>\r\n<li>Triebwagenführerfigur und zahlreiche weitere Fahrgäste serienmäßig eingesetzt.</li>\r\n<li>Mit aufgedrucktem Zuglaufschild "Reisen und Schauen mit dem Gläsernen Zug".</li>', 'Product/br491.jpg', '350', '2017-08-22'),
(26, 'Class 80 Diesel Locomotive', '270', 'M37696', '<b>Prototype:</b> Belgian State Railways (SNCB/NMBS) class 8000 switch engine. Diesel hydraulic drive with a jackshaft.<br><Br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion. 3 axles and a jackshaft powered. Traction tires. The dual headlights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The locomotive has Telex couplers front and rear that can be controlled separately. The handrails on the ends of the locomotive are constructed of metal. Length over the buffers 12 cm / 4-3/4".\r\n<br><Br>\r\n<b>Highlights</b><br><Br>\r\n\r\n<li>mfx+ digital decoder.</li>\r\n<li>Telex couplers.</li>\r\n<li>Controllable switching light.</li>\r\n', 'Product/class80.jpg', '', '0000-00-00'),
(27, 'Class 232 Diesel Locomotive', '230', 'M36430', '<b>Prototype:</b> Class 232 "Ludmilla" painted and lettered for Raildox GmbH & Co. KG, Erfurt, Germany. Road number 232 103-2. The locomotive looks as it did around 2015.<br><br>\r\n\r\n<b>Model:</b> The locomotive has an mfx digital decoder and extensive sound functions. 4 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of power, will work in conventional operation, and can be controlled digitally. Warm white and red LEDs are used for the lighting. Length over the buffers 23.9 cm / 9-3/8".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Locomotive includes an mfx decoder and a variety of sound functions.</li>\r\n<li>Detailed, affordable diesel locomotive with extensive features.</i>', 'Product/class232.jpg', '', '0000-00-00'),
(28, 'V 188 Heavy Double Diesel Locomotive', '430', 'M37285', '<b>Prototype:</b> German Federal Railroad (DB) class V 188 heavy double diesel electric locomotive. Version in a crimson basic paint scheme. Road number V 188 002 a/b. The locomotive looks as it did around 1964.<br><br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion. Both locomotives have a motor. 4 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The headlights at Locomotive End 2 and 1 can be turned off separately in digital operation. Maintenance-free warm white and red LEDs are used for the lighting. The two locomotives are permanently coupled together. Length over the buffers 25.8 cm / 10-1/8".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Double locomotive includes 2 motors.</li>\r\n<li>Realistic diesel locomotive sound.</li>\r\n<li>Authentic weathering.</li>\r\n<li>Presentation board included.</li>\r\n<li>Locomotive engineer figure in Cab 1.</li>\r\n<li>mfx+ digital decoder and extensive operating and sound functions included.</li>\r\n<li>For even more operating enjoyment in the Märklin "World of Operation".</li>', 'Product/class188.jpg', '', '0000-00-00'),
(29, 'F7 Diesel Electric Locomotive', '480', 'M39621', '<b>Prototype:</b> General Motors EMD class F7 painted and lettered for Great Northern Railway (GN). Double unit consisting of two A units. Road numbers 309-A and 309-C. Reddish orange and black green paint scheme.<br><br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled, high-efficiency propulsion in both A units. 2 axles powered in each A unit. Traction tires. The headlights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The lighted number boards and the classification lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. Maintenance-free, warm white LEDs are used for the lighting. The cabs have interior details. The locomotive has separately applied metal grab irons. There is a permanent drawbar between the locomotive units. Snowplows are included. Length over the couplers approximately 35 cm / 13-3/4".<br><br>\r\n\r\n<b>Highlights</b>\r\n\r\n<li>mfx+ digital decoder.</li>\r\n<li>Warm white LEDs for lighting.</li>\r\n<li>Lighted number boards and classification lights.</li>\r\n<li>Cabs with interior details.</li>', 'Product/F7.jpg', '', '0000-00-00'),
(30, 'Alco PA-1 Diesel Locomotive', '550', 'M39617', '<b>Prototype:</b> USA Pennsylvania Railroad (PRR) double unit Alco class PA-1 heavy diesel locomotive. Road numbers 5752A and 5753A. The locomotives look as they did around 1954.<br><Br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. 1 controlled high-efficiency propulsion unit in each A unit. Two axles powered in each locomotive. Traction tires. The headlights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The locomotive has lighted number boards on the sides. Maintenance-free warm white LEDs are used for the lighting. There are close couplers in standard coupler pockets at both ends; they can be replaced with imitation American couplers or pilot skirting. Imitation couplers and skirting are included. Minimum radius for operation 360 mm / 14-3/16". Length over the couplers approximately 47.2 cm / 18-9/16".\r\n<br><Br>\r\n<b>Highlights</b><br><Br>\r\n\r\n<li>Double locomotive constructed of metal.</li>\r\n<li>A heavy unit with impressive pulling power.</li>\r\n<li>Two synchronized high-efficiency propulsion systems.</li>\r\n<li>mfx+ decoder.</li>', 'Product/alco.jpg', '', '0000-00-00'),
(31, 'Class Re 460 Electric Locomotive', '330', 'M39465', '<b>Prototype:</b> Swiss Federal Railways (SBB/CFF/FFS) class Re 460 fast general-purpose locomotive with advertising for Chiquita bananas. Road number: 460 029-2. The locomotive looks as it did starting in 2015.<br><br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It also has controlled high-efficiency propulsion, centrally mounted. 4 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. The headlights at Locomotive Ends 2 and 1 can be turned off separately in digital operation. The locomotive has long-distance headlights that can be controlled digitally. You can change between the Swiss headlight / marker light code and the white/red headlight / marker light code. Maintenance-free warm white and red LEDs are used for the lighting. The locomotive has new, intricate single-arm pantographs. It also has separately applied metal grab irons. The cabs have interior details. Length over the buffers 21.3 cm / 8-3/8".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>New, intricate single-arm pantographs.</li>\r\n<li>Centrally mounted motor included. All four axles powered.</li>\r\n<li>Cab lighting.</li>\r\n<li>European and Swiss headlight / marker light code.</li>\r\n<li>mfx+ digital decoder.</li>', 'Product/class460.jpg', '', '0000-00-00'),
(32, 'Class 185 Electric Locomotive', '220', 'M36632', '<b>Prototype:</b> Class 185 electric locomotive. Alpha Trains NV/SA Antwerp is the owner of the locomotive, leased to CFL Cargo Germany, Inc. The locomotive looks as it currently does in real life.<br><br>\r\n\r\n<b>Model:</b> The locomotive has an mfx digital decoder and extensive sound functions. It has a special motor, centrally mounted. 4 axles powered by means of cardan shafts. Traction tires. The locomotive has triple headlights and dual red marker lights that will work in conventional operation and that can be controlled digitally. The headlights at Locomotive End 2 and 1 can be turned off separately in digital operation. When the headlights at both ends are turned off, then the "Double \'A\' Light" function is on at both ends. Maintenance-free warm white and red LEDs are used for the lighting. There are 2 mechanically working pantographs (no power pickup from catenary). Length over the buffers 21.7 cm / 8-1/2".<br><Br>\r\n\r\n<b>Highlights</b><br><Br>\r\n\r\n<li>A variety of light and sound functions included on the locomotive.</li>\r\n<li>mfx decoder included.</li>\r\n<li>Warm white and red LEDs for lighting.</li>\r\n<li>Metal body for the locomotive.</li>\r\n', 'Product/class185.jpg', '', '0000-00-00'),
(33, 'Class 111 Electric Locomotive', '330', 'M37314', '<b>Prototype:</b> German Federal Railroad (DB) class 111 general-purpose electric locomotive. Original version. Road number 111 014-7. The locomotive looks as it did in 1975.<br><Br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. It has controlled high-efficiency propulsion. Two axles powered. Traction tires. The locomotive has triple headlights and dual red marker lights that will work in conventional operation and that can be controlled digitally. The headlights at Locomotive End 2 and 1 can be turned off separately in digital operation. When the headlights at both ends are turned off, then the "Double \'A\' Light" function is on at both ends. The cab lighting can also be controlled digitally. Maintenance-free warm white and red LEDs are used for the lighting. The locomotive has a mechanism for raising and lowering both pantographs in digital operation. Length over the buffers 19.1 cm / 7-1/2".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Mechanism for raising and lowering both pantographs.</li>\r\n<li>Cab lighting.</li>\r\n<li>World of Operation mfx+ decoder.</li>', 'Product/class111.jpg', '', '0000-00-00'),
(34, 'Class 1200 Electric Locomotive', '330', 'M37129', '<b>Prototype:</b> Dutch EETC class 1200 heavy general-purpose locomotive. Road number 1251. The locomotive looks as it did between 2012 and 2015.<br><Br>\r\n\r\n<b>Model:</b> The locomotive has an mfx+ digital decoder and extensive sound functions. The decoder supports the formats mfx/DCC/MM. The locomotive also has controlled high-efficiency propulsion. 4 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. Maintenance-free warm white and red LEDs are used for the lighting. The locomotive has separately applied metal grab irons. Brake hoses can be mounted on the buffer beam. Length over the buffers approximately 20.8 cm / 8-3/16".<br><Br>\r\n\r\n<b>Highlights</b><br><Br>\r\n\r\n<li>mfx+ digital decoder included.</li>\r\n<li>Extensive sound functions included.</li>', 'Product/class1200.jpg', '', '0000-00-00'),
(35, 'Class 187.0 Electric Locomotive', '230', 'M36631', '<b>Prototype:</b> Railpool, Inc. class 187.0 electric locomotive (TRAXX AC 3 LM), leased to BLS, Inc., Cargo Business Area. Built by Bombardier as a regular production locomotive from the TRAXX 3 type program.<br><Br>\r\n\r\n<b>Model:</b> This electric locomotive is constructed of metal and has an mfx digital decoder and extensive sound functions. It has a special motor, centrally mounted. 4 axles powered by means of cardan shafts. Traction tires. The locomotive has triple headlights and dual red marker lights that will work in conventional operation and that can be controlled digitally. The headlights at Locomotive End 2 and 1 can be turned off separately in digital operation. When the headlights at both ends are turned off, then the "Double \'A\' Light" function is on at both ends. Warm white and red LEDs are used for the lighting. There are 4 mechanically working pantographs (no power pickup from catenary). Prototypical modelling of the Last Mile equipment. Length over the buffers 21.7 cm / 8-1/2".<br><Br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Completely new tooling for the modern Bombardier TRAXX 3 electric locomotive.</li>\r\n<li>A built-in mfx decoder and a variety of sound functions included on the locomotive.</li>\r\n<li>Version with imitation flex panels on the side wall of the locomotive.</li>\r\n<li>Design differences due to the Last Mile equipment are modelled on the locomotive.</li>\r\n<li>Detailed, affordable beginner\'s model with extensive features.</li>', 'Product/class187.jpg', '', '0000-00-00'),
(36, 'Class 193 Electric Locomotive', '220', 'M36194', '<b>Prototype:</b> Mitsui Rail Capital Europe electric locomotive, road number 91 80 6193 876-0. Built by Siemens as a regular production locomotive from the Vectron type program.<br><Br>\r\n\r\n<b>Model:</b> The electric locomotive is constructed of metal, has an mfx digital decoder, and extensive sound functions. It also has a special motor, centrally mounted. 4 axles powered be means of cardan shafts. Traction tires. The locomotive has triple headlights and dual red marker lights that will work in conventional operation and that can be controlled digitally. The headlights at Locomotive End 2 and 1 can be turned off separately in digital operation. When the headlights at both ends are turned off, then the "Double \'A\' Light" function is on at both ends. Warm white and red LEDs are used for the lighting. 2 mechanically working (not connected for catenary power) pantographs. Length over the buffers 21.8 cm / 8-9/16".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Both locomotive sides imprinted differently from each other.</li>\r\n<li>Locomotive includes a built-in mfx decoder and a variety of sound functions.</li>\r\n<li>Detailed, affordable beginner\'s model with extensive features.</li>', 'Product/class193.jpg', '', '0000-00-00');
INSERT INTO `Product` (`idProduct`, `ProductNaam`, `Prijs`, `ProductCode`, `Omschrijving`, `image`, `Actieprijs`, `ActieDatum`) VALUES
(37, 'Heavy-Duty Flat Car with a Load of Coils', '50', 'M48656', '<b>Prototype:</b> European Rail Rent (ERR) type Sgmmns 4505 heavy-duty flat car, Duisburg, registered in Germany. The car looks as it currently does in real life.<br><Br>\r\n\r\n<b>Model:</b> The load surface is constructed of metal. The car has many separately applied details. Three (3) coils in load frames are included as a load. Length over the buffers 16.3 cm / 6-7/16".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>New tooling for the modern type Sgmmns heavy-duty flat car.</li>\r\n<li>Ideal car for unit trains.</li>', 'Product/duty.jpg', '', '0000-00-00'),
(38, 'Type Sgnss Container Transport Car', '60', 'M47057', '<b>Prototype:</b> Type Sgnss four-axle container transport car for combined load service. Privately owned car painted and lettered for the firm Touax, registered in Germany. Loaded with a 40-foot box container. The car looks as it did around 2014.<br><Br>\r\n\r\n<b>Model:</b> The car has type Y 25 trucks. The prototypically partially open flat car floor is constructed of metal with striking fish belly style side sills. The car has a hand wheel for setting brakes from the car floor. The car is loaded with a removable 40-foot box container. Length over the buffers 22.7 cm / 8-15/16". DC wheel set E700580.', 'Product/maersk.jpg', '', '0000-00-00'),
(39, 'Type Saadkms 690 "Rollende LandstraÃŸe"', '70', 'M47424', '<b>Prototype: </b>Type Saadkms 690 special car with 8 small wheel sets for transporting entire truck rigs. Car painted and lettered for Railion Deutschland AG. The car looks as it did around 2005.<br><br>\r\n\r\n<b>Model:</b> This is the end car with hinged and removable buffer beams and adapters for standard close couplers. Chock blocks for trucks are included. Length over the buffers 23.2 cm / 9-1/8". DC wheel set E432950.', 'Product/benzinger.jpg', '', '0000-00-00'),
(40, 'MÃ¤rklin Magazin Annual Car in H0 for 2017', '35', 'M48517', '<b>Prototype:</b> Type F-z 120 (former Ommi 51) two-axle dump car. Privately owned car painted and lettered for the Märklin Magazin, Göppingen, Germany, used on the German Federal Railroad (DB). Hand brake and brakeman\'s platform included, rail clamps included. The car looks as it did around 1990.<br><br>\r\n\r\n<b>Model:</b> The car is detailed with a partially open frame, separately applied rail clamps, and separately applied dump hoppers. The car also has a separately applied brakeman\'s platform. Length over the buffers 10.4 cm / 4-1/8". DC wheel set E700580.', 'Product/magazin.jpg', '', '0000-00-00'),
(41, 'Pressurized Gas Tank Car', '38', 'M46462', '<b>Prototype:</b> Pressurized gas tank car, used on the German Federal Railroad (DB), privately owned car painted and lettered for VTG United Tank Farm and Transportation, Inc., Hamburg, Germany.\r\n<br><br>\r\n<b>Model:</b> The car has a detailed, partially open frame. The side sills are "U" profile shapes with cable hooks. The trucks are type Minden-Dorstfeld. The tank has a heat shield. The brakeman\'s platform is separately applied. Length over the buffers 14.6 cm / 5-3/4". DC wheel set E700580.', 'Product/gas.jpg', '', '0000-00-00'),
(42, 'Type 273 Half Baggage Car', '58', 'M43952', '<b>Prototype:</b> German Federal Railroad (DB) half baggage car, 2nd class with a baggage area, type BDüms 273, UIC-X design. The car looks as it did around 1975.<br><br>\r\n\r\n<b>Model:</b> The car has a chrome oxide green paint scheme, as the car looked starting in 1963. The running gear is prototypically detailed with a reproduction of brake shoes and generator drive. The car has unlighted red marker light inserts on the ends. The 7319 current-conducting couplings or the 72021 operating current-conducting couplers as well as an interior lighting kit (73400/73401) and the 73406 pickup shoe can be installed on the car. The minimum radius for operation is 360 mm / 14-3/16". A decal set is included. Length over the buffers approximately 28.2 cm / 11-1/8". DC wheel set E700580.', 'Product/type273.jpg', '', '0000-00-00'),
(43, 'Bi-Level Cab Control Car', '90', 'M43576', '<b>Prototype:</b> Swiss Federal Railways (SBB/CFF/FFS) type DPZplus Bt, 2nd class, painted and lettered for the Zürich S-Bahn. The car looks as it currently does in real life.<br><br>\r\n\r\n<b>Model:</b> The car has a detailed buffer beam with separately applied streamlining. The train destination sign is lighted. The cab has interior details. Current-conducting 7319 plug-in coupling drawbars or 72020/72021 close couplers that can be uncoupled can be installed on the car. Length over the buffers 27.3 cm / 10-3/4". When operated control car first, triple headlights shine. When operated control car last, dual red marker lights shine.', 'Product/bilevel.jpg', '', '0000-00-00'),
(44, '"metronom" Bi-Level Add-On Car', '85', 'M43572', '<b>Prototype:</b> Bi-level intermediate car, 2nd class, in the current paint and lettering for the metronom Railroad Company LLC, Uelzen, Germany. The car looks as it currently does in real life.\r\n<br><br>\r\n<b>Model:</b> The car has factory-installed warm white LED interior lighting and current-conducting couplers that can be uncoupled. The interior lighting only functions in conjunction with the "metronom" bi-level commuter train, item number 26611. Length over the buffers 26.8 cm / 10-9/16".\r\n<br><br>\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Factory-installed LED interior lighting.</li>\r\n<li>Current-conducting couplers that can be uncoupled.</li>', 'Product/metronom.jpg', '', '0000-00-00'),
(45, 'Intercity Express Train Cab Control Car, 2nd Class', '75', 'M40503', '<b>Prototype:</b> German Railroad, Inc. (DB AG) type Bimdzf 271.0 Intercity cab control car, 2nd class with an engineer\'s cab for shuttle train operations.<br><br>\r\n\r\n<b>Model:</b> The engineer\'s cab has interior details. The car has a detailed buffer beam. It has a separately applied front cowling. The 7319 current-conducting coupling or the 72020/72021 operating current-conducting coupler can be installed on this car by inserting it in the coupler pocket. Length over the buffers 27.5 cm / 10-13/16". When operated control car first, triple white headlights shine on the cab control car. When operated control car last, dual red marker lights shine on the cab control car.', 'Product/intercity.jpg', '', '0000-00-00'),
(46, 'Eurofima Passenger Car', '55', 'M43340', '<b>Prototype:</b> Swiss Federal Railways (SBB/CFF/FFS) Eurofima design type Am compartment car, 1st class. The car looks as it did around 1979.<br><br>\r\n\r\n<b>Model:</b> The minimum radius for operation is 360 mm / 14-3/16". The underbody is specific to the car. The car has Fiat design type Y0270 S trucks without lateral motion shock absorbers and without magnetic rail brakes. The 7319 current-conducting couplings or the 72020/72021 current-conducting couplers, the 73400/73401 lighting kits (2 each per car), the 73406 pickup shoe, and the 73407 marker light kit can be installed in the car. A set of decals with car routes is included. Length over the buffers approximately 28.2 cm / 11-1/8". DC wheel set E700580.<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>New tooling.</li>', 'Product/eurofirm.jpg', '', '0000-00-00'),
(47, 'LINT 27 Diesel Rail Car', '199', 'M36641', '<b>Prototype:</b> Hessian State Railroad, Inc. (HLB) LINT 27 diesel powered commuter rail car.<br><br>\r\n\r\n<b>Model:</b> The powered rail car has controlled high-efficiency, an mfx digital decoder, and extensive sound functions. 2 axles powered. Traction tires. The triple headlights and dual red marker lights change over with the direction of travel, will work in conventional operation, and can be controlled digitally. Warm white and red LEDs are used for the lighting. There are train destination signs at the ends that are lighted prototypically with yellow LEDs. Both ends of the train have a representation of the center buffer coupler. The train has tinted windows and low-level entries. Total length 28.8 cm / 11-3/8".<br><br>\r\n\r\n<b>Highlights</b><br><br>\r\n\r\n<li>Completely new tooling for the LINT 27.</li>\r\n<li>Powered rail car with built-in mfx decoder and a wide variety of sound functions.</li>\r\n<li>Detailed, affordable beginner\'s model with extensive features.</li>', 'Product/lint27.jpg', '400', '0000-00-00'),
(48, 'Commuter Powered Rail Car', '230', 'M41731', '<b>Prototype:</b> German Railroad, Inc. (DB AG) class 648.2 (LINT 41) diesel powered commuter rail car. Current version with low platform steps. Used in the service area of Braunschweig – Harz – Göttingen.<br><br>\r\n\r\n<b>Model:</b> This is an unpowered dummy unit with a permanently mounted 5-pin coupling on one end of the powered rail car, for extending the motorized diesel powered rail car, item number 37718, to a 2-part or 3-part unit. An additional 5-pin coupling for plugging into the motorized unit is included. There are triple headlights and dual red maker lights only at the non-coupled end of the dummy unit, and they change over with the direction of travel. The coupled end of the dummy unit does not have lighted headlights. The rail car has factory-installed interior lights. The headlights and the interior lighting are maintenance-free, warm white LEDs. The destination displays are prototypically correct with yellow LEDs. The headlights, interior lights, destination displays, and dual red marker lights will work in conventional operation and can be controlled digitally from the motorized unit. The running gear and the body are well detailed and there is a clear view through the windows. The rail car has interior details, and a closed diaphragm and a guide mechanism on the Jakobs truck between the two halves of the unit. Center buffer couplers are represented at the ends of the powered rail car. Total length 48.1 cm / 18-15/16".\r\n\r\n', 'Product/commuter.jpg', '430', '0000-00-00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Rol`
--

CREATE TABLE `Rol` (
  `Rol` varchar(45) NOT NULL,
  `Omschrijving` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Rol`
--

INSERT INTO `Rol` (`Rol`, `Omschrijving`) VALUES
('Admin', 'Admin van de site'),
('Beheerder', 'Beheerder van de site'),
('Klant', 'Geregistreerde op de website');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `RolPerGebruiker`
--

CREATE TABLE `RolPerGebruiker` (
  `idGebruiker` int(11) NOT NULL,
  `Rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `RolPerGebruiker`
--

INSERT INTO `RolPerGebruiker` (`idGebruiker`, `Rol`) VALUES
(59, 'Admin'),
(60, 'Admin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Wachtwoord`
--

CREATE TABLE `Wachtwoord` (
  `idGebruiker` int(11) NOT NULL,
  `Wachtwoord` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `Wachtwoord`
--

INSERT INTO `Wachtwoord` (`idGebruiker`, `Wachtwoord`) VALUES
(59, 'smiedje'),
(60, 'niks');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Wensen`
--

CREATE TABLE `Wensen` (
  `idWensen` int(11) NOT NULL,
  `Gebruiker` int(11) NOT NULL,
  `Product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexen voor tabel `CategorieProduct`
--
ALTER TABLE `CategorieProduct`
  ADD PRIMARY KEY (`idProduct`,`idCategorie`),
  ADD KEY `FK_Categorie_idx` (`idCategorie`);

--
-- Indexen voor tabel `Gebruiker`
--
ALTER TABLE `Gebruiker`
  ADD PRIMARY KEY (`idGebruiker`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexen voor tabel `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`idItems`),
  ADD KEY `FK_Product_idProduct` (`idProduct`);

--
-- Indexen voor tabel `Model`
--
ALTER TABLE `Model`
  ADD PRIMARY KEY (`idModel`);

--
-- Indexen voor tabel `ModelProduct`
--
ALTER TABLE `ModelProduct`
  ADD PRIMARY KEY (`idProduct`,`idModel`),
  ADD KEY `FK_Model_idx` (`idModel`);

--
-- Indexen voor tabel `Order`
--
ALTER TABLE `Order`
  ADD PRIMARY KEY (`idOrder`),
  ADD KEY `FK_Gebruiker_idx` (`idGebruiker`);

--
-- Indexen voor tabel `OrderRegel`
--
ALTER TABLE `OrderRegel`
  ADD PRIMARY KEY (`idOrderRegel`),
  ADD KEY `FK_Items_idx` (`Items`),
  ADD KEY `FK_Order` (`idOrder`);

--
-- Indexen voor tabel `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`idProduct`),
  ADD UNIQUE KEY `idProduct_UNIQUE` (`idProduct`);

--
-- Indexen voor tabel `Rol`
--
ALTER TABLE `Rol`
  ADD PRIMARY KEY (`Rol`);

--
-- Indexen voor tabel `RolPerGebruiker`
--
ALTER TABLE `RolPerGebruiker`
  ADD PRIMARY KEY (`idGebruiker`,`Rol`),
  ADD KEY `FK_Rol_idx` (`Rol`);

--
-- Indexen voor tabel `Wachtwoord`
--
ALTER TABLE `Wachtwoord`
  ADD PRIMARY KEY (`idGebruiker`);

--
-- Indexen voor tabel `Wensen`
--
ALTER TABLE `Wensen`
  ADD PRIMARY KEY (`Gebruiker`,`Product`),
  ADD KEY `idWensen` (`idWensen`),
  ADD KEY `Product` (`Product`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Gebruiker`
--
ALTER TABLE `Gebruiker`
  MODIFY `idGebruiker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT voor een tabel `Order`
--
ALTER TABLE `Order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `OrderRegel`
--
ALTER TABLE `OrderRegel`
  MODIFY `idOrderRegel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT voor een tabel `Wensen`
--
ALTER TABLE `Wensen`
  MODIFY `idWensen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `CategorieProduct`
--
ALTER TABLE `CategorieProduct`
  ADD CONSTRAINT `FK_Categorie` FOREIGN KEY (`idCategorie`) REFERENCES `Categorie` (`idCategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Product_Categorie` FOREIGN KEY (`idProduct`) REFERENCES `Product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `Items`
--
ALTER TABLE `Items`
  ADD CONSTRAINT `FK_Product_idProduct` FOREIGN KEY (`idProduct`) REFERENCES `Product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `ModelProduct`
--
ALTER TABLE `ModelProduct`
  ADD CONSTRAINT `FK_Model` FOREIGN KEY (`idModel`) REFERENCES `Model` (`idModel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Product_Model` FOREIGN KEY (`idProduct`) REFERENCES `Product` (`idProduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `Order`
--
ALTER TABLE `Order`
  ADD CONSTRAINT `FK_Gebruiker_Order` FOREIGN KEY (`idGebruiker`) REFERENCES `Gebruiker` (`idGebruiker`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `OrderRegel`
--
ALTER TABLE `OrderRegel`
  ADD CONSTRAINT `FK_Items` FOREIGN KEY (`Items`) REFERENCES `Items` (`idItems`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Order` FOREIGN KEY (`idOrder`) REFERENCES `Order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `RolPerGebruiker`
--
ALTER TABLE `RolPerGebruiker`
  ADD CONSTRAINT `FK_Gebruiker` FOREIGN KEY (`idGebruiker`) REFERENCES `Gebruiker` (`idGebruiker`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Rol` FOREIGN KEY (`Rol`) REFERENCES `Rol` (`Rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `Wachtwoord`
--
ALTER TABLE `Wachtwoord`
  ADD CONSTRAINT `FK_Wachtwoord` FOREIGN KEY (`idGebruiker`) REFERENCES `Gebruiker` (`idGebruiker`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `Wensen`
--
ALTER TABLE `Wensen`
  ADD CONSTRAINT `Wensen_ibfk_1` FOREIGN KEY (`Product`) REFERENCES `Product` (`idProduct`),
  ADD CONSTRAINT `Wensen_ibfk_2` FOREIGN KEY (`Gebruiker`) REFERENCES `Gebruiker` (`idGebruiker`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
