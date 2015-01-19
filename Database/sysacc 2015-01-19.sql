-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2015 a las 22:29:48
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sysacc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accidente`
--

CREATE TABLE IF NOT EXISTS `accidente` (
`ACC_CORREL` int(10) unsigned NOT NULL,
  `PLA_CORREL` int(10) unsigned DEFAULT NULL,
  `CAR_CORREL` int(10) unsigned DEFAULT NULL,
  `ACC_INCIDENTE` enum('TRABAJO','TRAYECTO') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_DESCRIPCION` text COLLATE utf8_spanish_ci,
  `ACC_SITIO` text COLLATE utf8_spanish_ci,
  `ACC_FECHA` date DEFAULT NULL,
  `ACC_HORA` time DEFAULT NULL,
  `ACC_PARAFECT` enum('Cabeza','Cuello','Espalda','Extremidades Inferiores','Extremidades Superiores','Tronco','Todo el Cuerpo, Multiples Partes') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_RUT` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_TIPO` enum('Conmocion y lesiones Internas','Dislocaciones, esguinces y torceduras','Envenenamientos e infecciones','Fractura de Huesos','Heridas y Lesiones superficiales','Otro tipo de lesion / lesion desconocida') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_AGENTE` enum('Maquinarias y equipos','Herramientas con o sin Motor','Materiales que se trasladan','Materiales que se proyectan','Otros materiales u objetos','Humos, gases, o vapores en el aire','Superficies de trabajo al mismo nivel','Zonas de tránsito','Vehículos para transporte de personas','Vehículos para transporte de materiales','Otros agentes') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_ACCION` enum('Operar sin acreditación / Autorización','No señalizar o asegurar','Operar a una velocidad inadecuada','Poner fuera de servicio los dispositivos de seguridad','Usar equipo defectuoso','Usar el equipo incorrecto','No usar equipo de protección personal','Cargar productos incorrectamente','No cumplir procedimientos o normas establecidas','Levantar en forma incorrecta','Adoptar una posición o postura incorrecta','Efectuar mantención con el equipo funcionando','No estar atento','Trabajar bajo influencia de alcohol - drogas','Maniobras incorrectas al conducir','Transitar por áreas restringidas','Exceso de confianza','Otras') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_COND` enum('Resguardos o protección inadecuada','Falta de protecciones','Herramientas y/o  materiales en mal estado','Vehículos y/o máquinaria en mal estado','Herramientas y/o  materiales inadecuados','Vehículos y/o máquinaria inadecuada','Congestión de recursos (Equipos y/o personas)','Sistema de alarmas inadecuados','Peligros de incendios o explosiones','Orden y/o aseo deficiente','Exposición: gases, polvos, humos, vapores.','Ruido excesivo','Falla mecánica en vehículo / maquinaria / equipo','Iluminación y/o ventilación inadecuada','Infraestructura defectuosa','Falta de Equipos de Protección Personal','Condiciones ambientales adversas (viento, lluvia, etc.)','Otras: Visibilidad inadecuada','Otras: Superficie resbaladiza','Otras: Alto nivel de desecho en faena','Otras: Desprendimiento de piedras') COLLATE utf8_spanish_ci DEFAULT NULL,
  `ACC_CONSEC` enum('Accidente Con Tiempo Perdido','Accidente Sin Tiempo Perdido','Accidente Fatal') COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accidente`
--

INSERT INTO `accidente` (`ACC_CORREL`, `PLA_CORREL`, `CAR_CORREL`, `ACC_INCIDENTE`, `ACC_DESCRIPCION`, `ACC_SITIO`, `ACC_FECHA`, `ACC_HORA`, `ACC_PARAFECT`, `ACC_RUT`, `ACC_TIPO`, `ACC_AGENTE`, `ACC_ACCION`, `ACC_COND`, `ACC_CONSEC`) VALUES
(1, 8, 1, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`ARE_CORREL` int(10) unsigned NOT NULL,
  `ARE_NOMBRE` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `ARE_TIPO` enum('INDUSTRIAL','FORESTAL') COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`ARE_CORREL`, `ARE_NOMBRE`, `ARE_TIPO`) VALUES
(1, 'Propios', 'FORESTAL'),
(2, 'Caminos', 'FORESTAL'),
(3, 'Cosechas', 'FORESTAL'),
(4, 'Silvicola', 'FORESTAL'),
(5, 'Transporte', 'FORESTAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
`CAR_CORREL` int(10) unsigned NOT NULL,
  `ARE_CORREL` int(10) unsigned NOT NULL,
  `CAR_NOMBRE` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`CAR_CORREL`, `ARE_CORREL`, `CAR_NOMBRE`) VALUES
(1, 1, 'Supervisor'),
(2, 1, 'Administrativo'),
(3, 1, 'Guardabosque'),
(4, 1, 'Otros'),
(5, 2, 'Jornalero Caminos'),
(6, 2, 'Conductor Camion Algibe'),
(7, 2, 'Conductor Camion Tolva (Ripio)'),
(8, 2, 'Operador Maquinaria'),
(9, 2, 'Conductor Vehiculo Menor'),
(10, 2, 'Otros'),
(11, 3, 'Motosierrista de Volteo'),
(12, 3, 'Hachero Bosque (Desrramador)'),
(13, 3, 'Motosierrista de Trozado'),
(14, 3, 'Motosierrista de Desrame'),
(15, 3, 'Operador Skidder'),
(16, 3, 'Operador otra Maquina'),
(17, 3, 'Arrumador'),
(18, 3, 'Mecanico'),
(19, 3, 'Estroberos Torres'),
(20, 3, 'Estroberos Skidder'),
(21, 3, 'Despachador'),
(22, 3, 'Calibrador'),
(23, 3, 'Jefe Cancha'),
(24, 3, 'Hachero Cancha (Despicador)'),
(25, 3, 'Motosierrista Cancha'),
(26, 3, 'Ayudante Motosierrista Cancha'),
(27, 3, 'Capataz'),
(28, 3, 'Conductor Transporte Personal'),
(29, 3, 'Operador Torre'),
(30, 3, 'Otros'),
(31, 4, 'Podador'),
(32, 4, 'Viverista'),
(33, 4, 'Roce Manual'),
(34, 4, 'Plantador'),
(35, 4, 'Aplicador Quimicos'),
(36, 4, 'Brigadista'),
(37, 4, 'Motosierrista Brigada'),
(38, 4, 'Motosierrista Silvicola'),
(39, 4, 'Capataz'),
(40, 4, 'Conductor Transporte Personal'),
(41, 4, 'Trabajador Manual'),
(42, 4, 'Otros'),
(43, 5, 'Conductor'),
(44, 5, 'Operador Grua'),
(45, 5, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
`COM_CORREL` int(10) unsigned NOT NULL,
  `REG_CORREL` int(10) unsigned DEFAULT NULL,
  `COM_NOMBRE` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=412 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`COM_CORREL`, `REG_CORREL`, `COM_NOMBRE`) VALUES
(1, 10, 'ACHAO'),
(2, 5, 'ALGARROBO'),
(3, 13, 'ALHUE'),
(4, 8, 'ALTO BIOBIO'),
(5, 3, 'ALTO DEL CARMEN'),
(6, 1, 'ALTO HOSPICIO'),
(7, 10, 'ANCUD'),
(8, 4, 'ANDACOLLO'),
(9, 9, 'ANGOL'),
(10, 10, 'ANIHUE'),
(11, 12, 'ANTARTICA'),
(12, 2, 'ANTOFAGASTA'),
(13, 8, 'ANTUCO'),
(14, 8, 'ARAUCO'),
(15, 15, 'ARICA'),
(16, 10, 'AUCAR'),
(17, 11, 'BALMACEDA'),
(18, 10, 'BRAUMAN'),
(19, 13, 'BUIN'),
(20, 8, 'BULNES'),
(21, 10, 'BUTACHAUQUES'),
(22, 11, 'C MANCILLA'),
(23, 5, 'CABILDO'),
(24, 8, 'CABRERO'),
(25, 9, 'CAJON'),
(26, 2, 'CALAMA'),
(27, 10, 'CALBUCO'),
(28, 3, 'CALDERA'),
(29, 5, 'CALERA'),
(30, 13, 'CALERA DE TANGO'),
(31, 5, 'CALLE LARGA'),
(32, 15, 'CAMARONES'),
(33, 1, 'CAMINA'),
(34, 8, 'CAMPANARIO'),
(35, 4, 'CANELA'),
(36, 8, 'CANETE'),
(37, 9, 'CARAHUE'),
(38, 5, 'CARTAGENA'),
(39, 5, 'CASABLANCA'),
(40, 10, 'CASTRO'),
(41, 5, 'CATEMU'),
(42, 7, 'CAUQUENES'),
(43, 13, 'CERRILLOS'),
(44, 13, 'CERRO NAVIA'),
(45, 12, 'CERRO SOMBRERO'),
(46, 10, 'CHACAO'),
(47, 10, 'CHAITEN'),
(48, 10, 'CHALLAGUE'),
(49, 3, 'CHANARAL'),
(50, 7, 'CHANCO'),
(51, 10, 'CHENIAO'),
(52, 6, 'CHEPICA'),
(53, 9, 'CHERQUENCO'),
(54, 8, 'CHIGUAYANTE'),
(55, 11, 'CHILE CHICO'),
(56, 8, 'CHILLAN'),
(57, 8, 'CHILLAN VIEJO'),
(58, 6, 'CHIMBARONGO'),
(59, 9, 'CHOLCHOL'),
(60, 10, 'CHONCHI'),
(61, 2, 'CHUQUICAMATA'),
(62, 11, 'CISNES'),
(63, 8, 'COBQUECURA'),
(64, 10, 'COCHAMO'),
(65, 11, 'COCHRANE'),
(66, 6, 'CODEGUA'),
(67, 8, 'COELEMU'),
(68, 8, 'COIHUE'),
(69, 8, 'COIHUECO'),
(70, 6, 'COINCO'),
(71, 7, 'COLBUN'),
(72, 1, 'COLCHANE'),
(73, 13, 'COLINA'),
(74, 9, 'COLLIPULLI'),
(75, 6, 'COLTAUCO'),
(76, 4, 'COMBARBALA'),
(77, 8, 'CONCEPCION'),
(78, 13, 'CONCHALI'),
(79, 5, 'CONCON'),
(80, 7, 'CONSTITUCION'),
(81, 10, 'CONTAO'),
(82, 8, 'CONTULMO'),
(83, 3, 'COPIAPO'),
(84, 4, 'COQUIMBO'),
(85, 8, 'CORONEL'),
(86, 14, 'CORRAL'),
(87, 11, 'COYHAIQUE'),
(88, 9, 'CUNCO'),
(89, 9, 'CURACAUTIN'),
(90, 13, 'CURACAVI'),
(91, 10, 'CURACO DE VELEZ'),
(92, 8, 'CURANILAHUE'),
(93, 9, 'CURARREHUE'),
(94, 7, 'CUREPTO'),
(95, 7, 'CURICO'),
(96, 10, 'DALCAHUE'),
(97, 3, 'DIEGO DE ALMAGRO'),
(98, 6, 'DONIHUE'),
(99, 13, 'EL BOSQUE'),
(100, 8, 'EL CARMEN'),
(101, 13, 'EL MONTE'),
(102, 5, 'EL QUISCO'),
(103, 5, 'EL TABO'),
(104, 7, 'EMPEDRADO'),
(105, 10, 'ENTRELAGOS'),
(106, 9, 'ERCILLA'),
(107, 13, 'ESTACION CENTRAL'),
(108, 8, 'FLORIDA'),
(109, 9, 'FREIRE'),
(110, 3, 'FREIRINA'),
(111, 10, 'FRESIA'),
(112, 10, 'FRUTILLAR'),
(113, 10, 'FUTALEUFU'),
(114, 14, 'FUTRONO'),
(115, 9, 'GALVARINO'),
(116, 15, 'GENERAL LAGOS'),
(117, 9, 'GORBEA'),
(118, 6, 'GRANEROS'),
(119, 11, 'GUAITECAS'),
(120, 5, 'HIJUELAS'),
(121, 5, 'HORCON'),
(122, 10, 'HUALAIHUE'),
(123, 7, 'HUALANE'),
(124, 8, 'HUALPEN'),
(125, 8, 'HUALQUI'),
(126, 1, 'HUARA'),
(127, 3, 'HUASCO'),
(128, 13, 'HUECHURABA'),
(129, 8, 'HUEPIL'),
(130, 10, 'HUILLINCO'),
(131, 4, 'ILLAPEL'),
(132, 13, 'INDEPENDENCIA'),
(133, 1, 'IQUIQUE'),
(134, 10, 'ISLA CHAULINEC'),
(135, 13, 'ISLA DE MAIPO'),
(136, 5, 'ISLA DE PASCUA'),
(137, 10, 'ISLA QUENAC'),
(138, 5, 'JUAN FERNANDEZ'),
(139, 13, 'LA CISTERNA'),
(140, 5, 'LA CRUZ'),
(141, 6, 'LA ESTRELLA'),
(142, 13, 'LA FLORIDA'),
(143, 13, 'LA GRANJA'),
(144, 4, 'LA HIGUERA'),
(145, 5, 'LA LIGUA'),
(146, 13, 'LA PINTANA'),
(147, 13, 'LA REINA'),
(148, 4, 'LA SERENA'),
(149, 14, 'LA UNION'),
(150, 14, 'LAGO RANCO'),
(151, 11, 'LAGO VERDE'),
(152, 12, 'LAGUNA BLANCA'),
(153, 8, 'LAJA'),
(154, 13, 'LAMPA'),
(155, 14, 'LANCO'),
(156, 6, 'LAS CABRAS'),
(157, 13, 'LAS CONDES'),
(158, 10, 'LAS QUEMAS'),
(159, 10, 'LASTARRIA'),
(160, 9, 'LAUTARO'),
(161, 8, 'LEBU'),
(162, 9, 'LICANRAY'),
(163, 7, 'LICANTEN'),
(164, 5, 'LIMACHE'),
(165, 7, 'LINARES'),
(166, 8, 'LIRQUEN'),
(167, 6, 'LITUECHE'),
(168, 10, 'LIUCURA'),
(169, 5, 'LLAILLAY'),
(170, 10, 'LLANQUIHUE'),
(171, 10, 'LLIFEN'),
(172, 13, 'LO BARNECHEA'),
(173, 13, 'LO ESPEJO'),
(174, 13, 'LO PRADO'),
(175, 6, 'LOLOL'),
(176, 9, 'LONCOCHE'),
(177, 7, 'LONGAVI'),
(178, 9, 'LONQUIMAY'),
(179, 8, 'LOS ALAMOS'),
(180, 5, 'LOS ANDES'),
(181, 8, 'LOS ANGELES'),
(182, 14, 'LOS LAGOS'),
(183, 9, 'LOS LAURELES'),
(184, 10, 'LOS MUERMOS'),
(185, 9, 'LOS SAUCES'),
(186, 4, 'LOS VILOS'),
(187, 8, 'LOTA'),
(188, 9, 'LUMACO'),
(189, 6, 'MACHALI'),
(190, 13, 'MACUL'),
(191, 14, 'MAFIL'),
(192, 13, 'MAIPU'),
(193, 11, 'MALLIN GRANDE'),
(194, 6, 'MALLOA'),
(195, 6, 'MARCHIHUE'),
(196, 2, 'MARIA ELENA'),
(197, 13, 'MARIA PINTO'),
(198, 7, 'MAULE'),
(199, 10, 'MAULLIN'),
(200, 10, 'MECHUQUE'),
(201, 2, 'MEJILLONES'),
(202, 10, 'MELINKA'),
(203, 9, 'MELIPEUCO'),
(204, 13, 'MELIPILLA'),
(205, 10, 'MILLANTU'),
(206, 7, 'MOLINA'),
(207, 8, 'MONTE AGUILA'),
(208, 4, 'MONTE PATRIA'),
(209, 6, 'MOSTAZAL'),
(210, 8, 'MULCHEN'),
(211, 8, 'NACIMIENTO'),
(212, 6, 'NANCAGUA'),
(213, 12, 'NAVARINO'),
(214, 6, 'NAVIDAD'),
(215, 8, 'NEGRETE'),
(216, 10, 'NELTUME'),
(217, 8, 'NINHUE'),
(218, 8, 'NIPAS'),
(219, 8, 'NIQUEN'),
(221, 5, 'NOGALES'),
(222, 10, 'NUEVA BRAUNAU'),
(223, 9, 'NUEVA IMPERIAL'),
(224, 9, 'NUEVA TOLTEN'),
(225, 13, 'NUNOA'),
(226, 6, 'OLIVAR'),
(227, 2, 'OLLAGUE'),
(228, 5, 'OLMUE'),
(229, 10, 'OSORNO'),
(230, 4, 'OVALLE'),
(231, 13, 'P.AGUIRRE CERDA'),
(232, 13, 'PADRE HURTADO'),
(233, 9, 'PADRE LAS CASAS'),
(234, 4, 'PAIGUANO'),
(235, 14, 'PAILLACO'),
(236, 13, 'PAINE'),
(237, 10, 'PALENA'),
(238, 6, 'PALMILLA'),
(239, 14, 'PANGUIPULLI'),
(240, 5, 'PANQUEHUE'),
(241, 5, 'PAPUDO'),
(242, 6, 'PAREDONES'),
(243, 10, 'PARGUA'),
(244, 7, 'PARRAL'),
(245, 7, 'PELARCO'),
(246, 10, 'PELCHUQUIN'),
(247, 7, 'PELLUHUE'),
(248, 8, 'PEMUCO'),
(249, 5, 'PENABLANCA'),
(250, 13, 'PENAFLOR'),
(251, 13, 'PENALOLEN'),
(252, 7, 'PENCAHUE'),
(253, 8, 'PENCO'),
(254, 6, 'PERALILLO'),
(255, 9, 'PERQUENCO'),
(256, 5, 'PETORCA'),
(257, 6, 'PEUMO'),
(258, 1, 'PICA'),
(259, 6, 'PICHIDEGUA'),
(260, 6, 'PICHILEMU'),
(261, 9, 'PILLANLELBUN'),
(262, 8, 'PINTO'),
(263, 13, 'PIRQUE'),
(264, 9, 'PITRUFQUEN'),
(265, 6, 'PLACILLA'),
(266, 8, 'PORTEZUELO'),
(267, 12, 'PORVENIR'),
(268, 1, 'POZO ALMONTE'),
(269, 12, 'PRIMAVERA'),
(270, 13, 'PROVIDENCIA'),
(271, 11, 'PTO CHACABUCO'),
(272, 9, 'PTO DOMINGUEZ'),
(273, 9, 'PTO SAAVEDRA'),
(274, 5, 'PUCHUNCAVI'),
(275, 9, 'PUCON'),
(276, 13, 'PUDAHUEL'),
(277, 13, 'PUENTE ALTO'),
(278, 11, 'PUERTO AYSEN'),
(279, 10, 'PUERTO CHICO'),
(280, 11, 'PUERTO GUADAL'),
(281, 11, 'PUERTO IBANEZ'),
(282, 10, 'PUERTO MONTT'),
(283, 12, 'PUERTO NATALES'),
(284, 10, 'PUERTO OCTAY'),
(285, 11, 'PUERTO SANCHEZ'),
(286, 10, 'PUERTO VARAS'),
(287, 12, 'PUERTO WILLIAMS'),
(288, 6, 'PUMANQUE'),
(289, 4, 'PUNITAQUI'),
(290, 12, 'PUNTA ARENAS'),
(291, 10, 'PUQUELDON'),
(292, 9, 'PUREN'),
(293, 10, 'PURRANQUE'),
(294, 5, 'PUTAENDO'),
(295, 15, 'PUTRE'),
(296, 10, 'PUYEHUE'),
(297, 10, 'QUEILEN'),
(298, 10, 'QUELDON'),
(299, 10, 'QUELLON'),
(300, 10, 'QUEMCHI'),
(301, 9, 'QUEPE'),
(302, 8, 'QUILACO'),
(303, 13, 'QUILICURA'),
(304, 8, 'QUILLECO'),
(305, 8, 'QUILLON'),
(306, 5, 'QUILLOTA'),
(307, 5, 'QUILPUE'),
(308, 10, 'QUINCHAO'),
(309, 6, 'QUINTA DE TILCOCO'),
(310, 13, 'QUINTA NORMAL'),
(311, 5, 'QUINTERO'),
(312, 8, 'QUIRIHUE'),
(313, 8, 'RAMADILLAS'),
(314, 6, 'RANCAGUA'),
(315, 8, 'RANQUIL'),
(316, 7, 'RAUCO'),
(317, 8, 'RECINTO'),
(318, 13, 'RECOLETA'),
(319, 9, 'RENAICO'),
(320, 13, 'RENCA'),
(321, 6, 'RENGO'),
(322, 6, 'REQUINOA'),
(323, 7, 'RETIRO'),
(324, 10, 'REUMEN'),
(325, 5, 'RINCONADA'),
(326, 14, 'RIO BUENO'),
(327, 7, 'RIO CLARO'),
(328, 10, 'RIO FRIO'),
(329, 4, 'RIO HURTADO'),
(330, 11, 'RIO IBANEZ'),
(331, 10, 'RIO NEGRO'),
(332, 10, 'RIO PUELO'),
(333, 11, 'RIO TRANQUILO'),
(334, 12, 'RIO VERDE'),
(335, 7, 'ROMERAL'),
(336, 13, 'S.JOSE DE MAIPO'),
(337, 10, 'S.JUAN DE LA COSTA'),
(338, 7, 'SAGRADA FAMILIA'),
(339, 4, 'SALAMANCA'),
(340, 5, 'SAN ANTONIO'),
(341, 13, 'SAN BERNARDO'),
(342, 8, 'SAN CARLOS'),
(343, 7, 'SAN CLEMENTE'),
(344, 5, 'SAN ESTEBAN'),
(345, 8, 'SAN FABIAN'),
(346, 5, 'SAN FELIPE'),
(347, 6, 'SAN FERNANDO'),
(348, 12, 'SAN GREGORIO'),
(349, 8, 'SAN IGNACIO'),
(350, 7, 'SAN JAVIER'),
(351, 13, 'SAN JOAQUIN'),
(352, 14, 'SAN JOSE DE LA MARIQUINA'),
(353, 13, 'SAN MIGUEL'),
(354, 8, 'SAN NICOLAS'),
(355, 10, 'SAN PABLO'),
(356, 13, 'SAN PEDRO'),
(357, 2, 'SAN PEDRO DE ATACAMA'),
(358, 8, 'SAN PEDRO DE LA PAZ'),
(359, 7, 'SAN RAFAEL'),
(360, 13, 'SAN RAMON'),
(361, 8, 'SAN ROSENDO'),
(362, 6, 'SAN VICENTE'),
(363, 8, 'SANTA BARBARA'),
(364, 6, 'SANTA CRUZ'),
(365, 8, 'SANTA FE'),
(366, 8, 'SANTA JUANA'),
(367, 5, 'SANTA MARIA'),
(368, 13, 'SANTIAGO'),
(369, 5, 'SANTO DOMINGO'),
(370, 9, 'SELVA OSCURA'),
(371, 2, 'SIERRA GORDA'),
(372, 13, 'TALAGANTE'),
(373, 7, 'TALCA'),
(374, 8, 'TALCAHUANO'),
(375, 8, 'TALCAMAVIDA'),
(376, 2, 'TALTAL'),
(377, 9, 'TEMUCO'),
(378, 10, 'TENAUN'),
(379, 7, 'TENO'),
(380, 9, 'TEODORO SCHMIDT'),
(381, 3, 'TIERRA AMARILLA'),
(382, 13, 'TILTIL'),
(383, 12, 'TIMAUKEL'),
(384, 8, 'TIRUA'),
(385, 2, 'TOCOPILLA'),
(386, 9, 'TOLTEN'),
(387, 8, 'TOME'),
(388, 12, 'TORRES DE PAINE'),
(389, 11, 'TORTEL'),
(390, 9, 'TRAIGUEN'),
(391, 8, 'TREGUACO'),
(392, 8, 'TRUPAN'),
(393, 8, 'TUCAPEL'),
(394, 14, 'VALDIVIA'),
(395, 3, 'VALLENAR'),
(396, 5, 'VALPARAISO'),
(397, 7, 'VICHUQUEN'),
(398, 9, 'VICTORIA'),
(399, 4, 'VICUNA'),
(400, 9, 'VILCUN'),
(401, 7, 'VILLA ALEGRE'),
(402, 5, 'VILLA ALEMANA'),
(403, 11, 'VILLA OHIGGINS'),
(404, 9, 'VILLARRICA'),
(405, 5, 'VINA DEL MAR'),
(406, 13, 'VITACURA'),
(407, 10, 'VOIGUE'),
(408, 7, 'YERBAS BUENAS'),
(409, 8, 'YUMBEL'),
(410, 8, 'YUNGAY'),
(411, 5, 'ZAPALLAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
`EMP_CORREL` int(10) unsigned NOT NULL,
  `COM_CORREL` int(10) unsigned DEFAULT NULL,
  `EMP_RUT` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_NOMBRE` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `EMP_DIRECCION` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_TELEFONO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EMP_AREA` set('Bosques','Aserradero','Remanufactura','Celulosa','Papel','Tableros y Chapas') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`EMP_CORREL`, `COM_CORREL`, `EMP_RUT`, `EMP_NOMBRE`, `EMP_DIRECCION`, `EMP_TELEFONO`, `EMP_AREA`) VALUES
(1, 77, '', 'CORMA', '', '', 'Remanufactura,Papel'),
(3, 0, '', 'Prueba', '', '', 'Bosques,Aserradero,Celulosa,Papel,Tableros y Chapas'),
(4, 0, '', 'CMPC Maderas S.A.', '', '', 'Bosques,Aserradero,Remanufactura,Celulosa,Papel,Tableros y Chapas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_has_area`
--

CREATE TABLE IF NOT EXISTS `empresa_has_area` (
  `ARE_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicador`
--

CREATE TABLE IF NOT EXISTS `indicador` (
`IND_CORREL` int(10) unsigned NOT NULL,
  `PLA_CORREL` int(10) unsigned NOT NULL,
  `IND_ANYO` int(10) unsigned NOT NULL,
  `IND_MES` int(10) unsigned NOT NULL,
  `IND_CTP` int(10) unsigned NOT NULL,
  `IND_HHMES` int(10) unsigned NOT NULL,
  `IND_DIASPERDIDOS` int(10) unsigned NOT NULL,
  `IND_DOTACION` int(10) unsigned NOT NULL,
  `IND_PRODUCCION` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `indicador`
--

INSERT INTO `indicador` (`IND_CORREL`, `PLA_CORREL`, `IND_ANYO`, `IND_MES`, `IND_CTP`, `IND_HHMES`, `IND_DIASPERDIDOS`, `IND_DOTACION`, `IND_PRODUCCION`) VALUES
(1, 8, 2015, 1, 15516, 800000, 8424, 8944, 944981);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`PER_CORREL` int(10) unsigned NOT NULL,
  `EMP_CORREL` int(10) unsigned DEFAULT NULL,
  `CAR_CORREL` enum('SUPERVISOR','ADMINISTRATIVO','GUARDABOSQUE','OTROS') COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_RUT` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `PER_NOMBRE` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PER_PATERNO` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PER_MATERNO` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `PER_EMAIL` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_TELEFONO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PER_DIRECCION` varchar(300) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`PER_CORREL`, `EMP_CORREL`, `CAR_CORREL`, `PER_RUT`, `PER_NOMBRE`, `PER_PATERNO`, `PER_MATERNO`, `PER_EMAIL`, `PER_TELEFONO`, `PER_DIRECCION`) VALUES
(9, 1, 'SUPERVISOR', '18.108.559-2', 'Ruben Eduardo', 'Tejeda', 'Roa', 'rbntejeda@hotmail.com', '', ''),
(13, 1, 'ADMINISTRATIVO', '11.111.111-1', 'Juan', 'Jara', 'Meneses', '', '+56 91223304', ''),
(15, 1, 'GUARDABOSQUE', '22.222.222-2', 'ASD', 'ASD', 'ASD', '', '', ''),
(18, 1, 'OTROS', '33.333.333-3', 'Esto', 'es una', 'prueba', '', '', ''),
(29, 1, '', '44.444.444-4', 'Ruben Eduardo', 'Jara', 'Meneses', '', '', ''),
(30, 1, 'SUPERVISOR', '55.555.555-5', 'Ruben Eduardo', 'es una', 'prueba', '', '', ''),
(31, 1, '', '14.211.879-3', 'Macarena', 'Gibert', 'Rabanal', 'mgibert@corma.cl', '2911823', 'salas 277'),
(32, 1, '', '66.666.666-6', 'Ruben Eduardo', '-', '-', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planta`
--

CREATE TABLE IF NOT EXISTS `planta` (
`PLA_CORREL` int(10) unsigned NOT NULL,
  `COM_CORREL` int(10) unsigned DEFAULT NULL,
  `EMP_CORREL` int(10) unsigned DEFAULT NULL,
  `PLA_RUT` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PLA_NOMBRE` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `PLA_DIRECCION` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PLA_TELEFONO` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planta`
--

INSERT INTO `planta` (`PLA_CORREL`, `COM_CORREL`, `EMP_CORREL`, `PLA_RUT`, `PLA_NOMBRE`, `PLA_DIRECCION`, `PLA_TELEFONO`) VALUES
(8, 3, 1, '', 'Corma Bosques', '', ''),
(9, 0, 1, '', 'Prueba Planta Corma 1', '', ''),
(10, 0, 1, '', 'Prueba Planta Corma 2', '', ''),
(11, 0, 1, '', 'Corma Bosques', '', ''),
(12, 0, 4, '', 'Corma Bosques', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `REG_CORREL` int(10) unsigned NOT NULL,
  `REG_NOMBRE` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `REG_SIMBOLO` varchar(4) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`REG_CORREL`, `REG_NOMBRE`, `REG_SIMBOLO`) VALUES
(1, 'TARAPACA', 'I'),
(2, 'ANTOFAGASTA', 'II'),
(3, 'ATACAMA', 'III'),
(4, 'COQUIMBO', 'IV'),
(5, 'VALPARAISO', 'V'),
(6, 'LIBERTADOR GENERAL B. OHIGGINS', 'VI'),
(7, 'MAULE', 'VII'),
(8, 'BIO-BIO', 'VII'),
(9, 'LA ARAUCANIA', 'IX'),
(10, 'LOS LAGOS', 'X'),
(11, 'AYSEN', 'XI'),
(12, 'MAGALLANES Y ANTARTICA', 'XII'),
(13, 'METROPOLITANA DE SANTIAGO', 'RM'),
(14, 'LOS RIOS', 'XIV'),
(15, 'ARICA Y PARINACOTA', 'XV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`PER_CORREL` int(10) unsigned NOT NULL,
  `USU_PASSWORD` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `USU_ROLE` enum('ADMIN','USUARIO','FUNCIONARIO','SUPERADMIN') COLLATE utf8_spanish_ci NOT NULL,
  `USU_MODIFIED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `USU_CREATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`PER_CORREL`, `USU_PASSWORD`, `USU_ROLE`, `USU_MODIFIED`, `USU_CREATE`) VALUES
(9, '5680c801e5c392cfb13992082a1412e1', 'USUARIO', '2015-01-19 18:56:47', '2015-01-19 18:56:47'),
(13, '5680c801e5c392cfb13992082a1412e1', 'USUARIO', '2015-01-19 17:01:06', '2015-01-19 17:01:06'),
(15, '7815696ecbf1c96e6894b779456d330e', 'USUARIO', '2015-01-06 15:35:44', '2015-01-06 15:35:44'),
(18, 'd41d8cd98f00b204e9800998ecf8427e', 'USUARIO', '2015-01-12 15:05:14', '2015-01-12 15:05:14'),
(31, '9aa42b31882ec039965f3c4923ce901b', 'USUARIO', '2015-01-15 20:55:27', '2015-01-15 20:55:27');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usulogin`
--
CREATE TABLE IF NOT EXISTS `usulogin` (
`PER_CORREL` int(10) unsigned
,`username` varchar(12)
,`password` varchar(200)
,`USU_ROLE` enum('ADMIN','USUARIO','FUNCIONARIO','SUPERADMIN')
,`PER_NOMBRE` varchar(152)
,`EMP_CORREL` int(10) unsigned
);
-- --------------------------------------------------------

--
-- Estructura para la vista `usulogin`
--
DROP TABLE IF EXISTS `usulogin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usulogin` AS select `u`.`PER_CORREL` AS `PER_CORREL`,`p`.`PER_RUT` AS `username`,`u`.`USU_PASSWORD` AS `password`,`u`.`USU_ROLE` AS `USU_ROLE`,concat(`p`.`PER_NOMBRE`,' ',`p`.`PER_PATERNO`,' ',`p`.`PER_MATERNO`) AS `PER_NOMBRE`,`p`.`EMP_CORREL` AS `EMP_CORREL` from (`usuario` `u` join `persona` `p` on((`u`.`PER_CORREL` = `p`.`PER_CORREL`)));

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accidente`
--
ALTER TABLE `accidente`
 ADD PRIMARY KEY (`ACC_CORREL`), ADD KEY `FK_REFERENCE_17` (`CAR_CORREL`), ADD KEY `FK_REFERENCE_25` (`PLA_CORREL`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`ARE_CORREL`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
 ADD PRIMARY KEY (`CAR_CORREL`), ADD KEY `FK_REFERENCE_23` (`ARE_CORREL`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
 ADD PRIMARY KEY (`COM_CORREL`), ADD KEY `FK_REFERENCE_5` (`REG_CORREL`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`EMP_CORREL`);

--
-- Indices de la tabla `empresa_has_area`
--
ALTER TABLE `empresa_has_area`
 ADD PRIMARY KEY (`ARE_CORREL`,`EMP_CORREL`), ADD KEY `FK_REFERENCE_22` (`EMP_CORREL`);

--
-- Indices de la tabla `indicador`
--
ALTER TABLE `indicador`
 ADD PRIMARY KEY (`IND_CORREL`), ADD KEY `FK_REFERENCE_3` (`PLA_CORREL`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`PER_CORREL`), ADD KEY `FK_REFERENCE_14` (`EMP_CORREL`);

--
-- Indices de la tabla `planta`
--
ALTER TABLE `planta`
 ADD PRIMARY KEY (`PLA_CORREL`), ADD KEY `FK_REFERENCE_13` (`EMP_CORREL`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`REG_CORREL`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`PER_CORREL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accidente`
--
ALTER TABLE `accidente`
MODIFY `ACC_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
MODIFY `ARE_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
MODIFY `CAR_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
MODIFY `COM_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=412;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
MODIFY `EMP_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `indicador`
--
ALTER TABLE `indicador`
MODIFY `IND_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `PER_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `planta`
--
ALTER TABLE `planta`
MODIFY `PLA_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `PER_CORREL` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accidente`
--
ALTER TABLE `accidente`
ADD CONSTRAINT `FK_REFERENCE_17` FOREIGN KEY (`CAR_CORREL`) REFERENCES `cargo` (`CAR_CORREL`),
ADD CONSTRAINT `FK_REFERENCE_25` FOREIGN KEY (`PLA_CORREL`) REFERENCES `planta` (`PLA_CORREL`);

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
ADD CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`ARE_CORREL`) REFERENCES `area` (`ARE_CORREL`);

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
ADD CONSTRAINT `FK_REFERENCE_5` FOREIGN KEY (`REG_CORREL`) REFERENCES `region` (`REG_CORREL`);

--
-- Filtros para la tabla `empresa_has_area`
--
ALTER TABLE `empresa_has_area`
ADD CONSTRAINT `FK_REFERENCE_20` FOREIGN KEY (`ARE_CORREL`) REFERENCES `area` (`ARE_CORREL`),
ADD CONSTRAINT `FK_REFERENCE_22` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `indicador`
--
ALTER TABLE `indicador`
ADD CONSTRAINT `FK_REFERENCE_3` FOREIGN KEY (`PLA_CORREL`) REFERENCES `planta` (`PLA_CORREL`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
ADD CONSTRAINT `FK_REFERENCE_14` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `planta`
--
ALTER TABLE `planta`
ADD CONSTRAINT `FK_REFERENCE_13` FOREIGN KEY (`EMP_CORREL`) REFERENCES `empresa` (`EMP_CORREL`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`PER_CORREL`) REFERENCES `persona` (`PER_CORREL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
