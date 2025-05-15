CREATE DATABASE analyselog;
USE analyselog;

DROP TABLE IF EXISTS `loueur`;
CREATE TABLE IF NOT EXISTS `loueur` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `appelsKO` int NOT NULL,
  `timeouts` int NOT NULL,
  `motdepasse` varchar(255) DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `numTel` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `loueur`(`id`, `nom`, `appelsKO`, `timeouts`, `motdepasse`)
VALUES ('2000','administrateur','0','0','administrateur');
