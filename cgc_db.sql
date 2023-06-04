-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2023 г., 18:42
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cgc_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(255) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_author` int(255) NOT NULL,
  `branch_createDate` timestamp NOT NULL,
  `branch_priority` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_author`, `branch_createDate`, `branch_priority`) VALUES
(1, 'FAQ', 1, '2023-04-06 21:00:00', 0),
(2, 'Hunting Progress', 1, '2023-04-06 21:00:00', 0),
(7, 'ꅐꁝꁲꋖ ꐔꊿꌈ ꀷꊿꃔꑀ', 13, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(255) NOT NULL,
  `comment_text` longtext NOT NULL,
  `comment_author` int(255) NOT NULL,
  `comment_createDate` timestamp NOT NULL,
  `comment_priority` int(1) NOT NULL DEFAULT '0',
  `comment_theme` int(255) NOT NULL,
  `comment_banned` int(1) NOT NULL DEFAULT '0',
  `comment_isTopTheme` int(1) NOT NULL DEFAULT '0',
  `comment_createKey` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `comment_author`, `comment_createDate`, `comment_priority`, `comment_theme`, `comment_banned`, `comment_isTopTheme`, `comment_createKey`) VALUES
(1, 'Hello Everyone!!! If you want to ask something, you can make a theme, or just ask something here. We, or other users will try to answer them!!!', 1, '2023-05-04 21:00:00', 1, 1, 0, 1, ''),
(2, 'Micro going out. Thanks God I have a voice activated report system. Hello to all who will read this. Please, don\'t fear, that you missed Entry #2. There wasn\'t any. Why? Because we, [ᖇᙓᙃᗣᙅƮᙓᙃ], believe, that only odd numbers can bring peace to mind and luck into your adventure. Even numbers is weak and divisible, but odd numbers stay strong. Just likᙓ 9. Anyway, I started experimenting. I found out, that all I need to investigate, to get my answers, lies inside a soul. I needed to get inside it. I started to make a some sort of a machine, called \"ርዪቹልፕዐዪ\" by me, cause we will create a new page in history of psychology. Also, I have no voluntears, so, I will perform this experiment on myself. Is it dangerous? Yes sir! Nobody made something like this before, so... Anyways, I could use some ᕼ-[ᘿ]-ᒪᕵ if anyone would be not so scared. Nothing more to say. Just keep searching for , there something hidden inside MAIN possibilities, you can\'t see. Maybe it is even hidden here, or inside [ᖇᙓᙃᗣᙅƮᙓᙃ], you\'ll never know. Bye for now! End of line\r\n\\n\\n\r\n[ᖇ-ᙓ-13-ᙅ-Ʈ]', 13, '0000-00-00 00:00:00', 1, 3, 0, 1, 'creatorkey'),
(3, 'Hello everyone. [ᖇᙓᙃᗣᙅƮᙓᙃ] with you. Some new updates on a current situation. Afteᖇ 2 days \"ርዪቹልፕዐዪ\" was made, I firstly tried it out. Object of experimentation was me. Firstly, I was in complete darkness, with different voices surrounding me. My whole life was in hand distance. I was at agony, I couldn\'t keep myself calm. I tried, byt it refused... I tried one more time... Same responce... After last time I was in such pain, my body just shut down itself. Now I am in different place. At least I managed to pack some things with myself. But to my surprise, not everything I packed I need. After day of exloring I need no food or water. I can still eat it, but I don\'t crave it and need it to survive. Firstly, when I arived here, I was greeted by some strangers... They called me their names... But I could\'nt even see their faces... I couldn\'t really hear their names, it was like a statick. But still, I can speak to them, in any kind of language I could understand and speak. They had even the same level of language as me. It was scary at first, but I don\'t see danger coming from them. Just taking it at consideration, maybe it will be usefull in further experimentation... On our way of ethernal darkness we found more people. There was in total 30 of them, and I realised, that all of them was atracted more to groups of 6, that were really similar with each other. Need also to check that. On our way we saw beatiful things, and some things that i can not explain, but nearly all the times, all around us was blank black, somethimes changing the hue to lighter colors. No object, Just a floor with blank surface.. So much non explainable things... \r\nSometimes, I think, I could feel myself in another dimmension... Meaning that, I am not in control here... Need to understand them more. End of line', 13, '0000-00-00 00:00:00', 1, 4, 0, 1, 'creatorkey'),
(4, 'Hello... My Head started hurting... So I will put all news straight up. In progress of our adventure, that people said me, that their life - is to deffend. They don\'t say who, or what, but I think, it is really important in this world of darkness. Maybe it is giving energy and life to everithing here, like me for example. I am here for quite a long time, and I am not starving, not dead. Their life is an adventure. Also we see many situations and episodes between dark. It is like a door, which take us out of dark kingdom, for some time, inside anything in episodes. Nearly all episodes are from our dimmension. And these people have a tradition, never to stand in one episode, even if it good enough to stay. Some of them are sad, some happy, some give me anger, some disgust, some give me chils, and some surprise. All of the teams like different things, and it is feels some type of odd... Why someone would like to fear, or to be angry? Just why? These situations all wake up some type of emotion in me... All of them are familiar to me... But this information is so distant in my brain... Also, not so good things happened here. After some time, we encountered some kind of people, and also monsters, that wasn\'t kind to us. Our team said, that it is what they are deffending the \"thing\" from. And... I KNOW THEM!!! But.. Who they are again?.. I was in charge of defending crew, and for their traditions, in there they have to be only in trio, without counting who in charge, because I was not in battle. While I was in charge, many of our people died... After all deaths... My head is in pain... After their deaths, I finaly could see their faces... I know who are they... I know their names... Now I understand. Maybe, I am one step closer to understand who they are for real, what is this place and what are the answers to my previous questions... How to cure... What is weakness of all... ᙅover me, 7...\r\n\\n\\n\r\nI am close to end of this experiment... Fog fades... Line of Life dissapears... End of line', 13, '0000-00-00 00:00:00', 1, 5, 0, 1, 'creatorkey'),
(5, 'For sake of experiment, we made a mistake... I can see someone, but I cant see anything. I can feel [ᖇᙓᙃᗣᙅƮᙓᙃ] crawling my spine, but I can\'t feel my body. We destroyed all we could and shouldn\'t... We even not realised, how important all our [ᖇᙓᙃᗣᙅƮᙓᙃ] was. After destroying something particular, we got overwhelmed with dominating [ᖇᙓᙃᗣᙅƮᙓᙃ]... My head... I can\'t It feels like a...\r\n\\n\r\n...\r\n\\n\r\nWhat is Me? I... Am I going insane... Pain... Piece by Piece... To You, who will read my entries... Sane... Pain... Make sure... Hidden... Need to maintain... But Too Late... Only aƮ 0... HAHAHAHAha', 13, '0000-00-00 00:00:00', 1, 6, 0, 1, 'creatorkey'),
(6, 'Project \"ርዪቹልፕዐዪ\" - project to understand human, why some people better off with suicide, why all suffer. Maybe it will help someone one day. I hope it will... Anyways, I would need to get inside a soul. Only one try. Will be I able to survive? I dunno. Hope I will get someone to make experiment on\r\n\\n\\n\r\nDanger: Very dangerous. Nobody else made it this far. Some people says that it could be achieved by person all by himself. All said that they are crazy, but I believe them. Why? Because I think I am really close...\r\n\\n\\n\r\nDifficulty: It would be tough. Get inside a soul... Nobody done it to this day... But only not Gary [ᖇᙓᙃᗣᙅƮᙓᙃ]. He is a legend in that field. But I am only a simple mad scientist, so, no luck for me\r\n\\n\\n\r\nSafety Keys: Would keep it inside my entries. If I would know, that I am on brink of going insane, forget all, or even dead, I will try to give external safety key. Main safety key will be encrypted inside my entries, to someone could get it in case of further studies\r\n\\n\\n\r\nComments: For safety, I need to pack my essentials. If it would get me inside, I maybe would not come back, until puzzle is solved. Also, need to fix my audio powered system of entries before, cause I am too lazy to write reports on my own... Sooo, good luck for me... I would need that... Thank you me!!! OK, need to go to preparing work, cause project would not make itself. Goodbye all, who will read it!!! Hope we could keep in touch in future!!!\r\n\\n\\n\r\nSigned: Doctor [ᖇᙓᙃᗣᙅƮᙓᙃ] [ᖇᙓᙃᗣᙅƮᙓᙃ], The \"Dragalon\" ', 13, '0000-00-00 00:00:00', 1, 2, 0, 1, 'creatorkey'),
(7, 'Someone got here with a bunch of secrets... Can you find it all? Teamwork can do it better!!! Or you another treasure hunter, that wants fame only for yourself? Choose, pick is yours. Here you can form a treasure hunting group and explore something together!!!\r\n\\n\\n\r\nGood luck, treasure hunters. End of line', 1, '2023-04-06 21:00:00', 1, 7, 0, 1, 'creatorkey'),
(8, 'Hello everyone!!! I am new to this company, but I heard about you, that you plan to make game in close future. Is it true? If yes, than I am thrilled to play it already!!! And what it would be about? What type of game?', 14, '2023-06-04 08:15:00', 0, 8, 0, 1, 'I51qG1IwDJ'),
(9, 'Heeelooo there! Yes, we plan to make one game in close future. At it is not a rumors. But sorry, we cant share much about it. Type of a game possibly a RPG|JRPG type of game\r\n\r\nOne thing for sure, there is someone invading our site, hiding various interesting messages acros it, so we forming Treasure Hunter battalion. Maybe something you will learn there!!!\r\nGood Luck and wait for us! We will Forge our CRAZZZINES into your Happiness eventualy (83)', 1, '2023-06-04 10:25:22', 0, 8, 0, 0, 'SENVGMM1We');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `news_id` int(255) NOT NULL,
  `news_image` text NOT NULL,
  `news_name` text NOT NULL,
  `news_preview` text NOT NULL,
  `news_text` longtext NOT NULL,
  `news_author` int(255) NOT NULL,
  `news_createDate` timestamp NOT NULL,
  `news_priority` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`news_id`, `news_image`, `news_name`, `news_preview`, `news_text`, `news_author`, `news_createDate`, `news_priority`) VALUES
(1, 'blocker-cgc.jpg', 'We Are OPEN!!!', 'Well, hello everyone!!! Crazzzy Guys Company welcomes you here, in our Domain!!! We are open for all, that want to learn something new about us, or our work, so, be Our guests!!! We suggest You to go explore all our pages, but if you Want detailed Excursion of our Home, You can click on photo, to read more!!!', 'And now, when you clicked a photo, we can lead you an excursion here. On the main page, up there, you can find 6 buttons (actually 8). What you can do with them:\r\n\\n\\n\r\nMain Page - I think you know what I am about to say (83)\r\n\\n\\n\r\nGames - Here you will find all our games. If you can\'t find games there yet, then you need to wait a little bit more. We are starting company, so we can\'t really count our possible work time, sooooo...Just wait and we will sure reforge our crazzzines to your happiness\r\n\\n\\n\r\nForum - Here you can speack with other people, and also with us. Before you will start conversations on topics, you need to have an account, and then read the rules. Forum split in 3 categories. Branches, Themes and Comments. When you will try forum out, you will understand what is what. While you in the forum, and is authorizated (logined), you can customise your profile as you want, and also view other profiles! Make the most interesting in there, you have all the POWEEER! Also, if you want to find something in forum by number (ID), you are free to try it inside your URL!!! If you will make some glorious deeds, or you sharing us or our games on the internet, you can also get your new shiny role, that will show you off in crowd!\r\n\\n\\n\r\nSupport Us - Have spare doubloons? Want to keep our work paid and motivated! Then welcome! There we have all methods, with what we can recieve your material support. If you have another method, please, contact us. And if you want to send something in our office, you\'ll need to contact someone, because our office is as crazzzy as we are))) \r\n\\n\r\nBut... We don\'t really work for money, at least at start. We also would love your moral support, because you know, nowadays gamedev is very chalanging, and without the most precious support you can give us, we maybe won\'t make it...\r\n\\n\\n\r\nAbout Us - You want to know more about our CRAZZZY Crew? Go forward, and don\'t hesitate. We will share some our lifes with you. If you have some more questions, please, go contact us\r\n\\n\\n\r\nContacts - If you need to say us something, ask or give us a question, or find us on other platforms, be free to visit all of them!\r\n\\n\\n\r\nAll pages are free to visit, even that are off limits (if you can find them), but something crawling begind the cuirtains... Anyways, good day, fellow treasure hunters!!!', 1, '2023-04-06 21:00:00', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `themes`
--

CREATE TABLE `themes` (
  `theme_id` int(255) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `theme_author` int(255) NOT NULL,
  `theme_createDate` timestamp NOT NULL,
  `theme_priority` int(1) NOT NULL DEFAULT '0',
  `theme_branch` int(255) NOT NULL,
  `theme_banned` int(1) NOT NULL DEFAULT '0',
  `theme_createKey` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `themes`
--

INSERT INTO `themes` (`theme_id`, `theme_name`, `theme_author`, `theme_createDate`, `theme_priority`, `theme_branch`, `theme_banned`, `theme_createKey`) VALUES
(1, 'Ask Your Desired Questions Here!!!', 1, '2023-04-06 21:00:00', 1, 1, 0, 'creatorkey'),
(2, 'Project \"ርዪቹልፕዐዪ\"', 13, '0000-00-00 00:00:00', 1, 7, 0, 'creatorkey'),
(3, '[ᖇᙓᙃᗣᙅƮᙓᙃ] #3', 13, '0000-00-00 00:00:00', 0, 7, 0, 'creatorkey'),
(4, 'Entry #5', 13, '0000-00-00 00:00:00', 0, 7, 0, 'creatorkey'),
(5, 'Entry #7', 13, '0000-00-00 00:00:00', 0, 7, 0, 'creatorkey'),
(6, 'Ɇ₦₮ⱤɎ #➊➊', 13, '0000-00-00 00:00:00', 0, 7, 0, 'creatorkey'),
(7, 'Found something odd, that not belong here? Something interesting? Come on, we\'ll hear you out! Lets find out!', 1, '2023-04-06 21:00:00', 1, 2, 0, 'creatorkey'),
(8, 'Hello, It is my first theme!!! I wanted to ask something', 14, '2023-06-04 08:15:00', 0, 1, 0, '25oIEjMlpD');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `login` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_photo` text NOT NULL,
  `nickname` varchar(32) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `gender` varchar(6) NOT NULL DEFAULT '',
  `birthday` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `about_me` longtext NOT NULL,
  `registration_date` datetime NOT NULL,
  `hide_country` int(1) NOT NULL DEFAULT '0',
  `hide_email` int(1) NOT NULL DEFAULT '0',
  `hide_gender` int(1) NOT NULL DEFAULT '0',
  `hide_birthday` int(1) NOT NULL DEFAULT '0',
  `role` int(1) NOT NULL DEFAULT '1',
  `banned` int(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) NOT NULL,
  `secret_one_unlocked` int(1) NOT NULL DEFAULT '0',
  `login_key` varchar(10) NOT NULL,
  `recover_key` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `email`, `password`, `user_photo`, `nickname`, `country`, `gender`, `birthday`, `about_me`, `registration_date`, `hide_country`, `hide_email`, `hide_gender`, `hide_birthday`, `role`, `banned`, `ban_reason`, `secret_one_unlocked`, `login_key`, `recover_key`) VALUES
(1, 'MISTIKMAKS', 'mistikmaks80885@gmail.com', '2c0816b42cdffd2d0df28c21144413a6', 'user_1.jpeg', 'MISTIKMAKS', 'Ukraine', 'Male', '2004-04-07 08:25:13', 'Just a simple developer, but a &quot;Human Outside, Knight Inside&quot;', '2023-06-01 08:45:45', 0, 0, 0, 0, 3, 0, '', 1, 'cg4kHuWpVy', ''),
(2, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(3, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(4, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(5, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(6, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(7, '???', '???', '???', '', '???', '???', '???', '0000-00-00 00:00:00', 'Something comming...', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(8, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(9, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(10, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(11, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(12, 'Developer_Unknown', 'Developer_Unknown', 'Developer_Unknown', '', 'Developer_Unknown', '???', '???', '0000-00-00 00:00:00', 'Nobody here... But you can be!!! Feel free to contact us!!!', '0000-00-00 00:00:00', 0, 0, 0, 0, 1, 0, '', 0, '', ''),
(13, 'Stranger', 'stranger_danger@gmail.com', 'doyoureallythinkihaveapassword?', 'user_13.png', '丂ㄒ尺卂刀ム乇尺', 'DarkSide', 'Male?', '3000-01-03 00:00:00', 'Bone to the Bone, Eye for an Eye. Theme is the [7], I\'m ready to Survive', '1300-00-00 00:00:00', 0, 0, 0, 0, 13, 1, 'No need to understand all, that you see... Maybe all that you see is a lie... Or maybe it is sacred truth... Feel it... Don\'t try to understand...', 1, 'mykeyisnot', ''),
(14, 'TesterOne', 'testerone123@gmail.com', '8768273bad6a7c0a8e794c1107d760e8', 'user_14.jpeg', 'Hiro', 'Antarctica', 'Female', '2004-04-10 20:13:07', 'Hello everyone!!! I am just another fan of CGC. Waiting for games to come!!! Lets go)))', '2023-06-04 10:28:58', 0, 0, 0, 0, 1, 0, '', 0, 'rXQ8WRl9CA', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `branch_author` (`branch_author`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `comment_author` (`comment_author`),
  ADD KEY `comment_theme` (`comment_theme`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `news_author` (`news_author`);

--
-- Индексы таблицы `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`theme_id`),
  ADD KEY `theme_branch` (`theme_branch`),
  ADD KEY `theme_author` (`theme_author`),
  ADD KEY `theme_id` (`theme_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `themes`
--
ALTER TABLE `themes`
  MODIFY `theme_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`branch_author`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`comment_author`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`comment_theme`) REFERENCES `themes` (`theme_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_author`) REFERENCES `users` (`user_id`);

--
-- Ограничения внешнего ключа таблицы `themes`
--
ALTER TABLE `themes`
  ADD CONSTRAINT `themes_ibfk_1` FOREIGN KEY (`theme_author`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `themes_ibfk_2` FOREIGN KEY (`theme_branch`) REFERENCES `branches` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
