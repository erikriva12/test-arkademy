CREATE TABLE categories (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  PRIMARY KEY `pk_id`(`id`)
);

INSERT INTO `categories` VALUES (NULL, 'nurhadi'), (NULL, 'aldo'), (NULL, 'dodi');

CREATE TABLE hobbies (
  `id` INT NOT NULL AUTO_INCREMENT,
  `person_id` INT(2),
  `hobbies` VARCHAR(255),
  PRIMARY KEY `pk_id`(`id`)
);

INSERT INTO `hobbies` VALUES (NULL,1,'Bird watching' ), (NULL,1, 'Martial arts'), (NULL,2, 'Hikking'), (NULL,1, 'Archery'), (NULL,2, 'Beekeeping'), (NULL,3, 'Book Restoration');

SELECT categories.id, categories.name, hobbies.hobbies from categories, hobbies WHERE categories.id = hobbies.person_id;

SELECT categories.id, categories.name, GROUP_CONCAT(hobbies.hobbies) AS hobbies FROM categories, hobbies WHERE categories.id = hobbies.person_id GROUP BY categories.id, categories.name;