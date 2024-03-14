use twitterv;

CREATE TABLE `blocked` (
    `id_user` int NOT NULL,
    `id_blocked` int NOT NULL,
    `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `convo` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(50) DEFAULT NULL,
    `picture` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO
    `convo`
VALUES
    (1, 'la convo des BG', NULL);

CREATE TABLE `convo_users` (
    `id_convo` int NOT NULL,
    `id_user` int NOT NULL,
    `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    `convo_users`
VALUES
    (1, 1, '2024-02-21 09:45:54'),
    (1, 2, '2024-02-21 09:45:56');

CREATE TABLE `follow` (
    `id_user` int NOT NULL,
    `id_follow` int NOT NULL,
    `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    `follow`
VALUES
    (1, 2, '2024-02-21 09:41:13');

CREATE TABLE `hashtag_list` (
    `hashtag` varchar(255) DEFAULT NULL,
    `id` int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)
);

CREATE TABLE `likes` (
    `id_user` int NOT NULL,
    `id_tweet` int NOT NULL,
    `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    `likes`
VALUES
    (2, 1, '2024-02-21 09:44:56'),
    (2, 3, '2024-02-21 09:45:01');

CREATE TABLE `messages` (
    `id` int NOT NULL AUTO_INCREMENT,
    `id_convo` int NOT NULL,
    `id_user` int NOT NULL,
    `content` varchar(10000) DEFAULT NULL,
    `time` datetime DEFAULT CURRENT_TIMESTAMP,
    `id_response` int DEFAULT NULL,
    PRIMARY KEY (`id`)
);

INSERT INTO
    `messages`
VALUES
    (
        1,
        1,
        2,
        'Arrete de tweet maintenant',
        '2024-02-21 10:47:29',
        NULL
    );

CREATE TABLE `reactions` (
    `id_message` int NOT NULL,
    `id_user` int NOT NULL,
    `reaction` varchar(20) DEFAULT NULL
);

CREATE TABLE `retweet` (
    `id_user` int NOT NULL,
    `id_tweet` int NOT NULL,
    `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
    `retweet`
VALUES
    (1, 2, '2024-02-21 09:44:00');

CREATE TABLE `signaled` (
    `id_user` int NOT NULL,
    `id_signaled` int NOT NULL,
    `reason` varchar(255) DEFAULT NULL,
    `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE `subscriptions` (
    `id` int NOT NULL AUTO_INCREMENT,
    `id_user` int NOT NULL,
    `starting_time` DATETIME NOT NULL,
    `stopping_time` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
);


CREATE TABLE `token` (
    `id` int NOT NULL AUTO_INCREMENT,
    `id_user` int NOT NULL,
    `token` varchar(30) DEFAULT NULL,
    `now` DATETIME NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `tweet` (
    `id` int NOT NULL AUTO_INCREMENT,
    `id_user` int NOT NULL,
    `id_response` int DEFAULT NULL,
    `time` datetime DEFAULT CURRENT_TIMESTAMP,
    `content` varchar(255) NOT NULL,
    `id_quoted_tweet` int DEFAULT NULL,
    PRIMARY KEY (`id`)
);


INSERT INTO
    `tweet`
VALUES
    (
        1,
        1,
        NULL,
        '2024-02-21 10:42:31',
        'SALUT VOICI UN TWEET DE SYPHAX',
        NULL
    ),
    (
        2,
        2,
        1,
        '2024-02-21 10:42:53',
        'bon tweet ça',
        NULL
    ),
    (3, 1, 2, '2024-02-21 10:43:17', 'merci', NULL);


CREATE TABLE `user` (
    `id` int NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `at_user_name` varchar(30) NOT NULL,
    `profile_picture` varchar(255) NOT NULL,
    `bio` varchar(255) DEFAULT NULL,
    `banner` varchar(255) NOT NULL,
    `mail` varchar(65) NOT NULL,
    `password` varchar(50) NOT NULL,
    `birthdate` date DEFAULT NULL,
    `private` tinyint(1) DEFAULT NULL,
    `creation_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `city` varchar(50) DEFAULT NULL,
    `campus` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `at_user_name` (`at_user_name`),
    UNIQUE KEY `mail` (`mail`)
);


INSERT INTO
    `user`
VALUES
    (
        1,
        'Syphax',
        '@Syphax',
        'img/lm5p.jpg',
        'Salut ici cest le twitter de Syphax le plus beau',
        'img/1265.jpg',
        'SyphaxLPB@gmail.com',
        'eie2151sfe48465',
        '1999-02-01',
        0,
        '2024-02-21 09:38:51',
        'Paris',
        NULL
    ),
    (
        2,
        'Romain',
        '@ronron',
        'img/3fgm.jpg',
        'ici ça code',
        'img/ab65.jpg',
        'ronron@free.fr',
        'ffqoh861e2151465',
        '2002-05-06',
        1,
        '2024-02-21 09:40:23',
        'Paris',
        NULL
    );