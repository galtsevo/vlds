CREATE TABLE `guest_entry` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `full_name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `email` VARCHAR(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci ,
    `comment` VARCHAR(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci ,
    PRIMARY KEY (`id`)
);

INSERT INTO vlds.guest_entry (id, full_name, email, comment) VALUES (1, 'SHopenaguer', '1@mail.ru', '1111111');
INSERT INTO vlds.guest_entry (id, full_name, email, comment) VALUES (2, 'Bah', '2@mail.ru', '222222');
INSERT INTO vlds.guest_entry (id, full_name, email, comment) VALUES (3, 'Pushkin', '3@mail.ru', '333333');
INSERT INTO vlds.guest_entry (id, full_name, email, comment) VALUES (4, 'Gogol', '4@mail.ru', '4444444');

CREATE TABLE `user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `email` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `password` VARCHAR(254) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO vlds.`user` (id, name, email, password) VALUES (1, 'admin', 'admin@mail.ru', '1234');
INSERT INTO vlds.`user` (id, name, email, password) VALUES (2, 'user', 'user@mail.ru', '3210');
INSERT INTO vlds.`user` (id, name, email, password) VALUES (3, 'new_user', 'new_user@mail.ru', '1234');
INSERT INTO vlds.`user` (id, name, email, password) VALUES (4, 'test', 'test@mail.ru', 'test');
