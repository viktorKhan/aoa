-- Lugar
UPDATE cowctkq_lugar SET  coordenadaX = NULL WHERE true;
ALTER TABLE `%prefix%_lugar`
CHANGE COLUMN `coordenadaX` `lng` DECIMAL(11, 8)  SIGNED COMMENT 'Longitud del lugar' ;

UPDATE cowctkq_lugar SET  coordenadaY = NULL WHERE true;
ALTER TABLE `%prefix%_lugar`
CHANGE COLUMN `coordenadaY` `lat` DECIMAL(10, 8)  SIGNED COMMENT 'Latitud del lugar' ;