ALTER TABLE `loueur` ADD `motdepasse` VARCHAR(255);
INSERT INTO `loueur`(`id`, `nom`, `appelsKO`, `timeouts`, `motdepasse`) 
VALUES ('2000','administrateur','0','0','administrateur');

ALTER TABLE `loueur` ADD `pays` VARCHAR(255);
ALTER TABLE `loueur` ADD `email` VARCHAR(255);
ALTER TABLE `loueur` ADD `numTel` VARCHAR(255);
ALTER TABLE `loueur` ADD `date` DATETIME DEFAULT CURRENT_TIMESTAMP;