CREATE TABLE `users` (
                          `id` int NOT NUll AUTO_INCREMENT,
                          `name` varchar(100) NOT NULL,
                          PRIMARY KEY (`id`)
);

CREATE TABLE `phone_numbers` (
                          `id` int NOT NUll AUTO_INCREMENT,
                          `number` int(11) NOT NULL,
                          PRIMARY KEY (`id`)
);

CREATE TABLE `many_to_many` (
                                 people_id int NOT NULL REFERENCES users(id),
                                 phone_id int NOT NULL REFERENCES phone_numbers(id),
                                 PRIMARY KEY (people_id, phone_id)
);
