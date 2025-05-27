-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 17, 2025 lúc 07:10 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `english_learning_website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `introduce` text DEFAULT NULL,
  `imageUrl` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `skill_id`, `title`, `introduce`, `imageUrl`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'A1 listening', '<p>Are you a learner at <a href=\"/english-test?level=A1&skill=listening\">A1 English level (elementary)?</a> This section offers listening practice to help you understand familiar words and basic phrases when people speak slowly and clearly. Situations include meeting people, shopping and conversations at work.</p>\n\n<p>Each lesson has a preparation task, an audio recording and two tasks to check your understanding and to practise a variety of listening skills. <a href=\"/english-test?level=A1&skill=listening\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8042_GettyImages-1063745264-hig.jpg?itok=4wxa4OVN', 'a1-listening', 'Listening practice to help you understand familiar words and basic phrases when people speak slowly and clearly. Situations include meeting people, shopping and conversations at work!', '2025-04-15 13:28:24', '2025-04-15 13:29:56'),
(2, 1, 'A2 listening', '<p>Are you a learner at <a href=\"/english-test?level=A2&skill=listening\">A2 English level (pre-intermediate)?</a> This section offers listening practice to help you understand common vocabulary and expressions in short, clear dialogues. Situations include simple explanations, introductions, messages and announcements.</p>\n\n<p>Each lesson has a preparation task, an audio recording and two tasks to check your understanding and to practise a variety of listening skills. <a href=\"/english-test?level=A2&skill=listening\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2022-10/RS8043_GettyImages-944241720-hig.jpeg?itok=xjTkRzJp', 'a2-listening', 'Listening practice to help you understand common vocabulary and expressions in short, clear dialogues. Situations include simple explanations, introductions, messages and announcements.', '2025-04-15 13:28:24', '2025-04-15 13:29:56'),
(3, 1, 'B1 listening', '<p>Are you a learner at <a href=\"/english-test?level=B1&skill=listening\">B1 English level (intermediate)?</a> This section offers listening practice to help you understand the main points of clear, standard speech about everyday or job-related topics. Situations include phone calls, meetings and interviews.</p>\n\n<p>Each lesson has a preparation task, an audio recording and two tasks to check your understanding and to practise a variety of listening skills. <a href=\"/english-test?level=B1&skill=listening\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8048_GettyImages-722208805-hig.jpg?itok=OZbQ_oO_', 'b1-listening', 'Listening practice to help you understand the main points of clear, standard speech about everyday or job-related topics. Situations include phone calls, meetings and interviews.', '2025-04-15 13:28:24', '2025-04-15 13:29:56'),
(4, 1, 'B2 listening', '<p>Are you a learner at <a href=\"/english-test?level=B2&skill=listening\">B2 English level (upper intermediate)?</a> This section offers listening practice to help you understand extended, standard speech about familiar topics that may contain complex ideas. Situations include broadcasts, reviews, presentations and lectures.</p>\n\n<p>Each lesson has a preparation task, an audio recording and two tasks to check your understanding and to practise a variety of listening skills. <a href=\"/english-test?level=B2&skill=listening\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8049_GettyImages-970432876-hig.jpg?itok=YWtkbSd4', 'b2-listening', 'Listening practice to help you understand extended, standard speech about familiar topics that may contain complex ideas. Situations include broadcasts, reviews, presentations and lectures.', '2025-04-15 13:28:24', '2025-04-15 13:29:56'),
(5, 1, 'C1 listening', '<p>Are you a learner at <a href=\"/english-test?level=C1&skill=listening\">C1 English level (advanced)?</a> This section offers listening practice to help you understand extended speech about abstract, complex or unfamiliar topics. Situations include job interviews, lectures, talks and meetings.</p>\n\n<p>Each lesson has a preparation task, an audio recording and two tasks to check your understanding and to practise a variety of listening skills. <a href=\"/english-test?level=C1&skill=listening\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8051_GettyImages-970429194%20%281%29-hig.jpg?itok=bDFcL_Hy', 'c1-listening', 'Listening practice to help you understand extended speech about abstract, complex or unfamiliar topics. Situations include job interviews, lectures, talks and meetings.', '2025-04-15 13:28:24', '2025-04-15 13:29:56'),
(6, 4, 'A1 speaking', '<p>Are you a learner at <a href=\"/english-test?level=A1&skill=speaking\">A1 English level (elementary)?</a> This section offers speaking practice to help you learn and practise useful phrases that will help you to speak English clearly and effectively.</p>\n\n<p>Each lesson has a preparation task and a video that introduces the language in context and gives you the opportunity to listen to and repeat the useful phrases. There are also tasks to check your understanding of the video and to practise the useful language. <a href=\"/english-test?level=A1&skill=speaking\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8133_GettyImages-746026051-hig.jpg?itok=JRJTUsMR', 'a1-speaking', 'Speaking practice to help you learn useful language for everyday communication. Situations include meeting new people, checking understanding and making suggestions.', '2025-04-17 01:35:49', '2025-04-17 01:35:56'),
(9, 4, 'A2 speaking', '<p>Are you a learner at <a href=\"/english-test?level=A2&skill=speaking\">A2 English level (pre-intermediate)?</a> This section offers speaking practice to help you learn and practise useful phrases that will help you to speak English clearly and effectively.</p>\n\n<p>Each lesson has a preparation task and a video that introduces the language in context and gives you the opportunity to listen to and repeat the useful phrases. There are also tasks to check your understanding of the video and to practise the useful language. <a href=\"/english-test?level=A2&skill=speaking\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS5884_186093891-hig.jpg?itok=U9miAnHD', 'a2-speaking', 'Speaking practice to help you learn useful language for everyday communication. Situations include showing interest, talking about where you\'re from and talking about your job.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(10, 4, 'B1 speaking', '<p>Are you a learner at <a href=\"/english-test?level=B1&skill=speaking\">B1 English level (intermediate)?</a> This section offers speaking practice to help you learn and practise useful phrases that will help you to speak English clearly and effectively.</p>\n\n<p>Each lesson has a preparation task and a video that introduces the language in context and gives you the opportunity to listen to and repeat the useful phrases. There are also tasks to check your understanding of the video and to practise the useful language. <a href=\"/english-test?level=B1&skill=speaking\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8307_GettyImages-1084168538-hig.jpg?itok=ujXeiERw', 'b1-speaking', 'Speaking practice to help you learn useful language for everyday communication. Situations include responding to news, meeting face-to-face and asking a favour.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(11, 4, 'B2 speaking', '<p>Are you a learner at <a href=\"/english-test?level=B2&skill=speaking\">B2 English level (upper intermediate)?</a> This section offers speaking practice to help you learn and practise useful phrases that will help you to speak English clearly and effectively.</p>\n\n<p>Each lesson has a preparation task and a video that introduces the language in context and gives you the opportunity to listen to and repeat the useful phrases. There are also tasks to check your understanding of the video and to practise the useful language. <a href=\"/english-test?level=B2&skill=speaking\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS7897_ThinkstockPhotos-507959212-hig.jpg?itok=jlhUP0P_', 'b2-speaking', 'Speaking practice to help you learn useful language for everyday communication. Situations include giving advice, dealing with a problem and challenging someone\'s ideas.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(13, 2, 'A1 writing', '<p>Are you a learner at <a href=\"/english-test?level=A1&skill=writing\">A1 English level (elementary)?</a> This section offers writing practice to help you write short, simple texts about known topics and fill in forms. Texts include messages, emails and forms.</p>\n\n<p>Each lesson has a preparation task, a model text with writing tips and three tasks to check your understanding and to practise a variety of writing skills. <a href=\"/english-test?level=A1&skill=writing\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2021-10/RS8039_GettyImages-554489637-hig.jpg?itok=DMT6G5Yv', 'a1-writing', 'Writing practice to help you write short, simple texts about known topics and fill in forms. Texts include messages, emails and forms.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(14, 2, 'A2 writing', '<p>Are you a learner at <a href=\"/english-test?level=A2&skill=writing\">A2 English level (pre-intermediate)?</a> This section offers writing practice to help you write short, simple texts, notes and messages. Texts include messages, forum posts, personal profiles, forms and emails.</p>\n\n<p>Each lesson has a preparation task, a model text with writing tips and three tasks to check your understanding and to practise a variety of writing skills. <a href=\"/english-test?level=A2&skill=writing\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS5632_87624041.jpg?itok=QFU4cwOG', 'a2-writing', 'Writing practice to help you write short, simple texts, notes and messages. Texts include messages, forum posts, personal profiles, forms and emails.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(15, 2, 'B1 writing', '<p>Are you a learner at <a href=\"/english-test?level=B1&skill=writing\">B1 English level (intermediate)?</a> This section offers writing practice to help you write simple connected text on familiar topics that are of personal interest. Texts include forum posts, reviews, messages, short essays and emails.</p>\n\n<p>Each lesson has a preparation task, a model text with writing tips and three tasks to check your understanding and to practise a variety of writing skills. <a href=\"/english-test?level=B1&skill=writing\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8036_GettyImages-960950716-hig.jpg?itok=HgUXOhxS', 'b1-writing', 'Writing practice to help you write simple connected text on familiar topics that are of personal interest. Texts include forum posts, reviews, messages, short essays and emails.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(16, 2, 'B2 writing', '<p>Are you a learner at <a href=\"/english-test?level=B2&skill=writing\">B2 English level (upper intermediate)?</a> This section offers writing practice to help you write clear, detailed text on a wide range of topics related to your interests. Texts include essays, reports, reviews, messages and emails.</p>\n\n<p>Each lesson has a preparation task, a model text with writing tips and three tasks to check your understanding and to practise a variety of writing skills. <a href=\"/english-test?level=B2&skill=writing\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8038_GettyImages-769720227-hig.jpg?itok=rt_F3pN0', 'b2-writing', 'Writing practice to help you write clear, detailed text on a wide range of topics related to your interests. Texts include essays, reports, reviews, messages and emails.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(17, 2, 'C1 writing', '<p>Are you a learner at <a href=\"/english-test?level=C1&skill=writing\">C1 English level (advanced)?</a> This section offers writing practice to help you write clear, well-structured texts about complex subjects. Texts include essays, proposals, articles, reports, reviews and emails.</p>\n\n<p>Each lesson has a preparation task, a model text with writing tips and three tasks to check your understanding and to practise a variety of writing skills. <a href=\"/english-test?level=C1&skill=writing\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8038_GettyImages-769720227-hig.jpg?itok=rt_F3pN0', 'c1-writing', 'Writing practice to help you write clear, well-structured texts about complex subjects. Texts include essays, proposals, articles, reports, reviews and emails.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(18, 3, 'A1 reading', '<p>Are you a learner at <a href=\"/english-test?level=A1&skill=reading\">A1 English level (elementary)?</a> This section offers reading practice to help you understand simple information, words and sentences about known topics. Texts include posters, messages, forms and timetables.</p>\n\n<p>Each lesson has a preparation task, a reading text and two tasks to check your understanding and to practise a variety of reading skills. <a href=\"/english-test?level=A1&skill=reading\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8046_GettyImages-1036609896-hig.jpg?itok=MbOoWQsT', 'a1-reading', 'Reading practice to help you understand simple information, words and sentences about known topics. Texts include posters, messages, forms and timetables.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(19, 3, 'A2 reading', '<p>Are you a learner at <a href=\"/english-test?level=A2&skill=reading\">A2 English level (pre-intermediate)?</a> This section offers reading practice to help you understand simple texts and find specific information in everyday material. Texts include emails, invitations, personal messages, tips, notices and signs.</p>\n\n<p>Each lesson has a preparation task, a reading text and two tasks to check your understanding and to practise a variety of reading skills. <a href=\"/english-test?level=A2&skill=reading\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2021-10/RS8045_GettyImages-656287929-hig.jpg?itok=gVsxXy13', 'a2-reading', 'Reading practice to help you understand simple texts and find specific information in everyday material. Texts include emails, invitations, personal messages, tips, notices and signs.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(20, 3, 'B1 reading', '<p>Are you a learner at <a href=\"/english-test?level=B1&skill=reading\">B1 English level (intermediate)?</a> This section offers reading practice to help you understand texts with everyday or job-related language. Texts include articles, travel guides, emails, adverts and reviews.</p>\n\n<p>Each lesson has a preparation task, a reading text and two tasks to check your understanding and to practise a variety of reading skills. <a href=\"/english-test?level=B1&skill=reading\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2021-10/RS5896_182025553-hig.jpg?itok=sHBoR8cN', 'b1-reading', 'Reading practice to help you understand texts with everyday or job-related language. Texts include articles, travel guides, emails, adverts and reviews', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(21, 3, 'B2 reading', '<p>Are you a learner at <a href=\"/english-test?level=B2&skill=reading\">B2 English level (upper intermediate)?</a> This section offers reading practice to help you understand texts with a wide vocabulary where you may need to consider the writer\'s opinion. Texts include articles, reports, messages, short stories and reviews.</p>\n\n<p>Each lesson has a preparation task, a reading text and two tasks to check your understanding and to practise a variety of reading skills. <a href=\"/english-test?level=B2&skill=reading\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2021-10/RS8041_GettyImages-539434611-hig.jpg?itok=-8-oM-Kg', 'b2-reading', 'Reading practice to help you understand texts with a wide vocabulary where you may need to consider the writer\'s opinion. Texts include articles, reports, messages, short stories and reviews.', '2025-04-17 01:35:49', '2025-04-17 01:35:49'),
(22, 3, 'C1 reading', '<p>Are you a learner at <a href=\"/english-test?level=C1&skill=reading\">C1 English level (advanced)?</a> This section offers reading practice to help you understand long, complex texts about a wide variety of topics, some of which may be unfamiliar. Texts include specialised articles, biographies and summaries.</p>\n\n<p>Each lesson has a preparation task, a reading text and two tasks to check your understanding and to practise a variety of reading skills. <a href=\"/english-test?level=C1&skill=reading\">Make a start today.</a></p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8037_GettyImages-985388610-hig.jpg?itok=4lHQBOeh', 'c1-reading', 'Reading practice to help you understand long, complex texts about a wide variety of topics, some of which may be unfamiliar. Texts include specialised articles, biographies and summaries.', '2025-04-17 01:35:49', '2025-04-17 01:35:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`content`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`id`, `course_id`, `title`, `description`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'A request from your boss', 'Listen to requests from a manager to practise and improve your listening skills.', 'a-request-from-your-boss', '{\n    \"introduce\": \"Listen to requests from a manager to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A1_A_request_from_your_boss.mp3\",\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A1-A-request-from-your-boss_1.pdf\",\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/430x261_4/public/RS6784_200491202-001.jpg?itok=H0ee3ahw\",\n    \"transcriptHtml\": \"<div class=\\\"transcript\\\"><p><strong>Susanne:</strong> Hi, Mario. Can you help me prepare some things for the next month?</p><p><strong>Mario:</strong> OK, sure. What can I help you with?</p><p><strong>Susanne:</strong> I need to visit the customer in Germany. It\'s important.</p><p><strong>Mario:</strong> What can I do to help?</p><p><strong>Susanne:</strong> Can you send an email to the customer? Ask them when I can visit them next week. Please do this first. It\'s a priority and very urgent.</p><p><strong>Mario:</strong> Right. I\'ll do it today.</p><p><strong>Susanne:</strong> Thanks. This next task is also important. Can you invite everyone to the next team meeting?</p><p><strong>Mario:</strong> Yes, I will.</p><p><strong>Susanne:</strong> But first you need to book a meeting room. After that, please send everyone an email about it.</p><p><strong>Mario:</strong> Yes, of course.</p><p><strong>Susanne:</strong> And finally, can you write a short report about our new project? I have to give a presentation to our managers next month. Please do it when you have time – sometime in the next two or three weeks. It\'s not too urgent.</p><p><strong>Mario:</strong> Sure, no problem. I can do it this week.</p><p><strong>Susanne:</strong> There\'s no hurry. Take your time.</p></div>\",\n\"discussion\":\"Do you sometimes help other people with their work? What do you do for them?\"\n  }\n', '2025-04-15 13:36:28', '2025-04-15 13:36:28'),
(2, 1, 'A voicemail message', 'Listen to a voicemail message and answer the questions to practise your listening skills.', 'a-voicemail-message', '{\n    \"introduce\": \"Listen to requests from a manager to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A1_A_voicemail_message.mp3\",\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A1-A-voicemail-message_0.pdf\",\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS5811_166623047.jpg?itok=XKwAoikU\",\n    \"transcriptHtml\": \"<p><strong>John:</strong> Hi, this is John. Thanks for calling. I\'m not here at the moment, so please leave a message and I\'ll call you back.</p><p><strong>Marina:</strong> Hi, John, this is Marina Silva calling from Old Time Toys. Your colleague Alex gave me your phone number. She said you can help me.</p><p>I need some information on your new products. Could you please call me when you are back in the office? My phone number is 0-2-0-8, 6-5-5-7-6-2-1.</p><p>Also, can you please email me your new brochure and information about your prices? My email address is Marina, that\'s M-A-R-I-N-A, dot Silva, S-I-L-V-A, at O-L-D-T-I-M-E hyphen toys dot com.</p><p>Thanks a lot. I look forward to hearing from you.</p>\",\n\"discussion\":\"Do you ever make phone calls or leave voicemail messages in English? \"\n}', '2025-04-16 08:55:29', '2025-04-16 08:55:29'),
(3, 1, 'Booking a table', 'Listen to someone booking a table in a restaurant to practise and improve your listening skills!', 'booking-a-table', '{\n    \"introduce\": \"Listen to someone booking a table in a restaurant to practise and improve your listening skills! Do the preparation task first. Then listen to the audio and do the exercises.\",\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A1_Booking_a_table.mp3\",\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A1-Booking-a-table.pdf\",\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8064_GettyImages-908849910-hig.jpg?itok=io-XVmK3\",\n    \"transcriptHtml\": \"<p><strong>Staff:</strong> Hello, Gino\'s.</p><p><strong>Jamie:</strong> Hi. Can I book a table for tomorrow night, please?</p><p><strong>Staff:</strong> How many people is it for?</p><p><strong>Jamie:</strong> Four.</p><p><strong>Staff:</strong> And what time would you like?</p><p><strong>Jamie:</strong> About eight, eight thirty maybe?</p><p><strong>Staff:</strong> Let\'s see ... We\'re pretty busy tomorrow, so I can do half past seven or nine.</p><p><strong>Jamie:</strong> Oh. OK, then. Half seven, please.</p><p><strong>Staff:</strong> What name is it?</p><p><strong>Jamie:</strong> Jamie.</p><p><strong>Staff:</strong> J-A- ...?</p><p><strong>Jamie:</strong> M-I-E</p><p><strong>Staff:</strong> OK, so that\'s a table for four at half past seven tomorrow evening.</p><p><strong>Jamie:</strong> Great. Thanks! Bye.</p><p><strong>Staff:</strong> Bye.</p><p><strong>Staff:</strong> Hello, Gino\'s.</p><p><strong>Jamie:</strong> Hi, I called earlier to book a table for four and I was wondering if I can make it for six instead?</p><p><strong>Staff:</strong> Ah, what name was it?</p><p><strong>Jamie:</strong> It\'s Jamie.</p><p><strong>Staff:</strong> Table for four at half past seven. So you want to change it to 6 o\'clock?</p><p><strong>Jamie:</strong> No, sorry. Can I make it for six people?</p><p><strong>Staff:</strong> Oh, I see. Sorry! That shouldn\'t be a problem. I can move you to a bigger table but it will be nearer the kitchen. Is that OK?</p><p><strong>Jamie:</strong> No problem. Is it possible to change the time as well? Make it a little bit later?</p><p><strong>Staff:</strong> Ah ... yeah, we can. Is eight OK for you?</p><p><strong>Jamie:</strong> Perfect, thanks!</p><p><strong>Staff:</strong> Lovely. See you tomorrow, then.</p><p><strong>Jamie:</strong> Thanks! Bye!</p><p><strong>Staff:</strong> Thanks. Ciao!</p>\",\n    \"discussion\": \"What\'s your favourite kind of restaurant?\"\n}\n', '2025-04-16 08:55:29', '2025-04-16 08:55:29'),
(4, 1, 'Business cards', 'Listen to four people talk about their jobs to practise and improve your listening skills.', 'business-cards', '{\r\n    \"introduce\": \"Listen to four people talk about their jobs to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\r\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A1_Business_cards.mp3\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A1-Business-cards.pdf\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS7862_ThinkstockPhotos-828279292-hig.jpg?itok=1hEzPErx\",\r\n    \"transcriptHtml\": \"<h2>Dialogue A</h2><p><strong>A:</strong> Hello, Doctor Miller. It\'s nice to meet you.</p><p><strong>B:</strong> Please call me Peter.</p><p><strong>A:</strong> OK. Are you a medical doctor? It must be helpful when you sell medical equipment.</p><p><strong>B:</strong> Actually, no. My doctorate was in electronic engineering, but it\'s still helpful for me when I sell our equipment.</p><h2>Dialogue B</h2><p>Good morning, everyone. I\'m happy to be here today to tell you about our new project. My name is Alessandro Rossi. I\'m the project leader on the Starlight programming project.</p><h2>Dialogue C</h2><p>Pleased to meet you. Here\'s my card. My real name is Megumi Tanaka, but people who are not from my country think it\'s difficult to say my name, so I use another name, Meg, when I\'m working internationally.</p><h2>Dialogue D</h2><p>Hello, everyone. My name\'s Andres Mulligan. I\'m very happy to be joining this team for the next few months and learning more about research and development.</p>\",\r\n    \"discussion\": \"Which information do people have on their business cards in your country?\"\r\n}', '2025-04-16 08:55:29', '2025-04-16 08:55:29'),
(5, 1, 'Finding the library', 'Listen to a conversation about the university library to practise and improve your listening skills.', 'finding-the-library', '{\r\n    \"introduce\": \"Listen to four people talk about their jobs to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\r\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A1_Finding_%20the_library.mp3\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A1-Finding-the-library.pdf\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8063_GettyImages-464675623-hig.jpg?itok=UTXDZcKn\",\r\n    \"transcriptHtml\": \"<p><strong>Student:</strong> Hi. Excuse me.</p><p><strong>Student B:</strong> Yes?</p><p><strong>Student:</strong> Where&apos;s the library?</p><p><strong>Student B:</strong> The library? It&apos;s next to the registration office.</p><p><strong>Student:</strong> Ah ... sorry, I&apos;m new. Where&apos;s the registration office?</p><p><strong>Student B:</strong> No problem. See the big building over there?</p><p><strong>Student:</strong> Yes.</p><p><strong>Student B:</strong> OK, so that&apos;s the lecture theatre. Next to that, on the right, is the registration office. And next to that is the library.</p><p><strong>Student:</strong> I see. Thanks!</p><p><strong>Student:</strong> Hello?</p><p><strong>Librarian:</strong> Hello.</p><p><strong>Student:</strong> Is this the library?</p><p><strong>Librarian:</strong> Yes, it is. Quiet, please.</p><p><strong>Student:</strong> Oh, sorry. Thank you.</p><p><strong>Librarian:</strong> Can I help you?</p><p><strong>Student:</strong> Er, yes, please. I want to borrow some books. What do I need?</p><p><strong>Librarian:</strong> You need a library card. Here&apos;s the application form. You can take up to six books maximum today.</p><p><strong>Student:</strong> OK. Six books.</p><p><strong>Librarian:</strong> Yes. You have two weeks to read the books. Then you bring them back.</p><p><strong>Student:</strong> And if I&apos;m late?</p><p><strong>Librarian:</strong> Every day you are late there is a fee of fifty pence.</p><p><strong>Student:</strong> OK, 50p a day. Er, anything else?</p><p><strong>Librarian:</strong> Mobile phones must be switched off in the library. You can bring your laptop, but please use headphones to watch videos or listen to music.</p><p><strong>Student:</strong> OK, great.</p><p><strong>Librarian:</strong> And you can&apos;t bring food or drink.</p><p><strong>Student:</strong> No food, no drink. And ...?</p><p><strong>Librarian:</strong> And please speak quietly! People are working here.</p><p><strong>Student:</strong> Oh! Oh, OK. Thank you.</p><p><strong>Librarian:</strong> You&apos;re welcome.</p>\",\r\n    \"discussion\": \"Do you have a local library? How often do you go there? What do you do there?\"\r\n}', '2025-04-16 08:55:29', '2025-04-16 08:55:29'),
(6, 2, 'A morning briefing', 'Listen to a morning briefing to practise and improve your listening skills.', 'a-morning-briefing', '{\r\n    \"introduce\": \"Listen to a morning briefing to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\r\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A2_Morning_briefing.mp3\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A2-A-morning-briefing.pdf\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS6164_153626054-hig.jpg?itok=vap8XfMk\",\r\n    \"transcriptHtml\": \"<p>Hi, everyone. I know you&apos;re all busy so I&apos;ll keep this briefing quick. I have some important information about a change in the management team. As you already know, our head of department, James Watson, is leaving his position at the end of this week. His replacement is starting at the end of the next month. In the meantime, we&apos;ll continue with our projects as usual.</p><p>I have two more quick points. Firstly, there will be some improvements made to the staff car park next month for a few weeks. It will be closed during that time.</p><p>Don&apos;t worry, we&apos;ve found a solution. We can use the local church car park until our own one is ready. If you arrive before 8.30 a.m., please use our small car park on Brown Street, and if you arrive after that, you should go directly to the church car park. It&apos;s only a five-minute walk away. But they need it in the evenings, so you have to leave before 6 p.m. Sorry about that – I know how much you all love working late!</p><p>The other thing I wanted to tell you about is that the canteen has now introduced a cashless payment system. So, you can&apos;t use cash for payments any more. You can pay directly with your smartphone or you can pay using your company ID card. The total amount put on your company ID card comes off your salary at the end of each month.</p><p>OK. That&apos;s it? Are there any questions?</p>\",\r\n    \"discussion\": \"Who do you have to give information and instructions to? What about?\"\r\n}', '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(7, 2, 'An invitation to a party', 'Listen to some phone messages with directions to practise and improve your listening skills.\n\n\'', 'an-invitation-to-a-party', '{\r\n    \"introduce\": \"Listen to a morning briefing to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\r\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A2_An_invitation_to_a_party.mp3\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A2-An-invitation-to-a-party.pdf\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8061_GettyImages-163845251-hig.jpg?itok=MdlLZwXz\",\r\n    \"transcriptHtml\": \"<p><em>Automated message: You have two new messages. Message number one, received today at 3.45 p.m.</em></p><p>Hi, it&apos;s me. How&apos;s it going? I guess you&apos;re at work and you don&apos;t have your phone on, right? First of all, thank you, THANK YOU for the birthday card and message. I received it this morning. That&apos;s so nice of you. I&apos;m organising a little party for my birthday. It&apos;s nothing very big – only a few of my best and closest friends. That means you too! We&apos;re going to have it at my cousin&apos;s house. She lives in the countryside in a nice big house with a swimming pool. I&apos;d love to see you there. It&apos;s going to be this Friday. I&apos;ll send you the instructions on how to get there later, OK?</p><p>Anyway, have fun at work. Don&apos;t work too hard, OK? Talk soon.</p><p><em>Automated message: You have two new messages. Message number two, received today at 5.15 p.m.</em></p><p>Aw, you&apos;re still not answering your phone! OK, here are the instructions to get to my cousin&apos;s house for the party. Are you going to take your car? If you take the car, drive straight on Forest Road until you get to the motorway. Drive past Brownsville and take exit 13A. That&apos;s 13A. You drive down the road there and turn left. It&apos;s the first big house on the right. OK? If you&apos;re taking a bus, you can get the number 80 to Brownsville. Call me when you get there and somebody can pick you up in a car. I can&apos;t wait. This is going to be so great!</p>\",\r\n    \"discussion\": \"Is it easy to get lost in your town? Have you ever given directions to a visitor?\"\r\n}', '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(8, 2, 'Changing a meeting time', 'Listen to two colleagues arranging a meeting to practise and improve your listening skills.\n\n', 'changing-a-meeting-time', '{\r\n    \"introduce\": \"Listen to a morning briefing to practise and improve your listening skills. Do the preparation task first. Then listen to the audio and do the exercises.\",\r\n    \"audioUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LE_listening_A2_Changing_a_meeting_time.mp3\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Listening-A2-Changing-meeting-time.pdf\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS5856_178577303.jpg?itok=mnYUTRwu\",\r\n    \"transcriptHtml\": \"<p><strong>Lucy:</strong> Hi, Anna. Do you have a minute to talk about the meeting next Tuesday?</p><p><strong>Anna:</strong> Sure. We said 11, didn&apos;t we?</p><p><strong>Lucy:</strong> Yeah, we did. But I have a bit of a problem with the time. Would it be possible to move it?</p><p><strong>Anna:</strong> Oh, I see. We could postpone it to the afternoon, to 1 p.m., for example. Or bring it forward to earlier in the morning. What would suit you?</p><p><strong>Lucy:</strong> Could we make it 9 o&apos;clock? That would really help me. I have another important meeting in the central office at 12.</p><p><strong>Anna:</strong> No problem. It&apos;s important you&apos;re there.</p><p><strong>Lucy:</strong> Thanks a lot, Anna.</p><p><strong>Anna:</strong> Do you need help with any preparation? Did you get the agenda I sent out?</p><p><strong>Lucy:</strong> Yes, I did. And no, that&apos;s all fine, thanks. My report is ready and I&apos;m looking forward to presenting it.</p><p><strong>Anna:</strong> Great.</p><p><strong>Lucy:</strong> I can tell Sven about the time change. I&apos;ll see him later.</p><p><strong>Anna:</strong> Don&apos;t worry about telling Sven. I&apos;ll send an email to everyone to confirm the time has changed and with an updated meeting invite.</p><p><strong>Lucy:</strong> Great. Thanks, Anna.</p><p><strong>Anna:</strong> OK. I&apos;m happy that works for you. We really need you there and it&apos;s good we don&apos;t have to cancel it.</p><p><strong>Lucy:</strong> See you then. Have a good weekend in the meantime.</p><p><strong>Anna:</strong> You too.</p>\",\r\n    \"discussion\": \"What meetings do you have to go to? How do you arrange them?\"\r\n}', '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(9, 2, 'Changing plans', 'Listen to two people talking about changing their plans to practise and improve your listening skills.\n\n', 'changing-plans', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(10, 2, 'Facts and figures', 'Listen to the lecturer giving some facts and figures to practise and improve your listening skills.\n\n', 'facts-and-figures', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(11, 3, 'A phone call from a customer', 'Listen to the phone call from a customer to practise and improve your listening skills.\n\n', 'a-phone-call-from-a-customer', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(12, 3, 'A student discussion', 'Listen to two students comparing Mars and Earth to practise and improve your listening skills.\n\n', 'a-student-discussion', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(13, 3, 'A team meeting about diversity', 'Listen to a team meeting about diversity to practise and improve your listening skills.\n\n', 'a-team-meeting-about-diversity', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(14, 3, 'A weather forecast', 'Listen to a weather forecast and answer the questions to practise and improve your listening skills.\n\n', 'a-weather-forecast', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(15, 3, 'An interview about listening skills', 'Listen to the English teacher talk about listening to practise and improve your listening skills.\n\n', 'an-interview-about-listening-skills', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(16, 4, 'A business interview', 'Listen to the business interview to practise and improve your listening skills.\n\n', 'a-business-interview', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(17, 4, 'A design presentation', 'Listen to the presentation about a new product design to practise and improve your listening skills.\n\n', 'a-design-presentation', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(18, 4, 'A digital detox podcast', 'Listen to the podcast about doing a digital detox to practise and improve your listening skills.\n\n', 'a-digital-detox-podcast', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(19, 4, 'A lecture about an experiment', 'Listen to the lecture about a science experiment to practise and improve your listening skills.\n\n', 'a-lecture-about-an-experiment', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(20, 4, 'A talk about motivation', 'Listen to the talk about motivation to practise and improve your listening skills.', 'a-talk-about-motivation', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(21, 5, 'A job interview', 'Listen to the job interview to practise and improve your listening skills.', 'a-job-interview', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(22, 5, 'A project management meeting', 'Listen to a project management meeting to practise and improve your listening skills.\n\n', 'a-project-management-meeting', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(23, 5, 'An interview about two books', 'Listen to an interview about two books to practise and improve your listening skills.\n\n', 'an-interview-about-two-books', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(24, 5, 'Birthday parties', 'Listen to a conversation about birthday parties between three friends to practise and improve your listening skills.', 'birthday-parties', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(25, 5, 'Catching up after a trip', 'Listen to two friends talking about a recent trip abroad to practise and improve your listening skills.\n\n', 'catching-up-after-a-trip', NULL, '2025-04-17 02:38:32', '2025-04-17 02:38:32'),
(26, 6, 'Checking understanding', 'In this video, Paul has problems understanding Bob. Listen to the language they use for checking understanding and practise saying the useful phrases.', 'checking-understanding', '{\r\n    \"introduce\": \"<p>In this video, Paul has problems understanding Bob. Listen to the language they use for checking understanding and practise saying the useful phrases.</p> Do the preparation exercise first. Then watch the video and do the exercises to check your understanding and practise the language.\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/430x261_4/public/Checking%20understanding%20-%20A1v4_0_1200x678.png?itok=pryMGeBU\",\r\n    \"videoUrl\": \"https://www.youtube.com/watch?v=K5GJt-CRiFk\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Speaking-A1-Checking-understanding.pdf\",\r\n    \"transcriptHtml\": \"<p><strong>Ana:</strong> Hi, I am Ana. Welcome to What to Say!</p><p>Do you know what to say when you want to check your understanding? Listen out for useful language for checking your understanding. Then, we will practise saying the new phrases – after this.</p><p><strong>Bob:</strong> This is not right. Hey! Excuse me, Paul, could you pass me the hammer?</p><p><strong>Paul:</strong> Sorry, Bob, my ears are blocked. I cannot hear you very well. Could you say that again, please?</p><p><strong>Bob:</strong> The hammer. Please could you pass it to me?</p><p><strong>Paul:</strong> The spanner?</p><p><strong>Bob:</strong> No. The hammer!</p><p><strong>Paul:</strong> Sorry, Bob, I do not understand. This is the spanner!</p><p><strong>Bob:</strong> No, Paul, I need the hammer. It is in the toolbox, on the left, under the scissors.</p><p><strong>Paul:</strong> Sorry, Bob. Could you repeat that more slowly, please?</p><p><strong>Bob:</strong> The hammer … in the toolbox … on the left … under the scissors.</p><p><strong>Paul:</strong> On the left … under the scissors … Oh! Do you mean the hammer? Is this it?</p><p><strong>Bob:</strong> Yes, that is right!</p><p><strong>Paul:</strong> Ah! Why did you not say so?</p><p><strong>Bob:</strong> I did!</p><p><strong>Ana:</strong> Hello again! Oh dear. I think Paul needs to go home and sleep. So, did you notice the useful phrases used for checking your understanding? Listen to me and then repeat.</p><p>I am sorry?</p><p>I cannot hear you very well.</p><p>Could you say that again, please?</p><p>I do not understand.</p><p>Can you repeat that more slowly, please?</p><p>Do you mean the hammer?</p><p>Is this it?</p><p>Yes, that is right!</p><p><strong>Ana:</strong> Try and use some of these phrases the next time you want to check your understanding in English. Bye for now!</p>\",\r\n    \"discussion\": \"Did you find the video useful?\"\r\n}\r\n', NULL, NULL),
(27, 6, 'Making suggestions', NULL, 'making-suggestions', NULL, NULL, NULL),
(28, 6, 'Meeting new people', NULL, 'meeting-new-people', NULL, NULL, NULL),
(29, 6, 'Talking about other people', NULL, 'talking-about-other-people', NULL, NULL, NULL),
(30, 6, 'Talking about where you are from', NULL, 'talking-about-where-you-are-from', NULL, NULL, NULL),
(36, 9, 'Apologising', NULL, 'apologising', NULL, NULL, NULL),
(37, 9, 'Giving instructions', NULL, 'giving-instructions', NULL, NULL, NULL),
(38, 9, 'Showing interest', NULL, 'showing-interest', NULL, NULL, NULL),
(39, 9, 'Talking about personal interests', NULL, 'talking-about-personal-interests', NULL, NULL, NULL),
(40, 9, 'Talking about your job', NULL, 'taking-about-your-job', NULL, NULL, NULL),
(41, 10, 'Agreeing and disagreeing', NULL, 'agreeing-and-disagreeing', NULL, NULL, NULL),
(42, 10, 'Asking a favour', NULL, 'asking-a-favour', NULL, NULL, NULL),
(43, 10, 'Keeping a conversation going', NULL, 'keeping-a-conversation-going', NULL, NULL, NULL),
(44, 10, 'Meeting face-to-face', NULL, 'meeting-face-to-face', NULL, NULL, NULL),
(45, 10, 'Responding to news', NULL, 'responding-to-news', NULL, NULL, NULL),
(51, 11, 'Challenging someone\'s ideas', NULL, 'challenging-someones-ideas', NULL, NULL, NULL),
(52, 11, 'Dealing with a problem', NULL, 'dealing-with-a-problem', NULL, NULL, NULL),
(53, 11, 'Discussing advantages and disadvantages', NULL, 'discussing-advantages-and-disadvantages', NULL, NULL, NULL),
(54, 11, 'Giving advice', NULL, 'giving-advice', NULL, NULL, NULL),
(55, 11, 'Persuading someone to do something', NULL, 'persuading-someone-to-do-something', NULL, NULL, NULL),
(56, 13, 'A message to say you are late', 'Learn how to write text messages to tell a friend you\'re going to be late.', 'a-message-to-say-you-are-late', '{\r\n  \"introduce\": \"Learn how to write text messages to tell a friend you are going to be late. Do the preparation task first. Then read the text and tips and do the exercises.\",\r\n  \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Writing-A1-A-message-to-say-youre-late.pdf\",\r\n  \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2021-10/RS6105_ThinkstockPhotos-513071681-hig.jpg?itok=ypqYFt6d\",\r\n  \"transcriptHtml\": \"<p><strong>Aziz:</strong> I\'m running 10 mins late, sorry! (15:57)</p><p><strong>Friend:</strong> No problem! (15:58)</p><p><strong>Aziz:</strong> Aargh! Traffic is really bad. I\'ll be more than 10 mins late now, sorry again!! (16:07)</p><p><strong>Friend:</strong> It\'s OK, don\'t worry. I\'m in the café already so it\'s fine (16:08)</p><p><strong>Aziz:</strong> This is not my day! I\'m here but can\'t find a place to park. I\'m looking for a different car park. Not sure how long I\'ll be (16:09)</p><p><strong>Friend:</strong> OK, LMK when you find a place (16:11)</p><p><strong>Friend:</strong> I might get something to eat tho (16:11)</p><p><strong>Aziz:</strong> Of course! I\'ll be as quick as I can (16:13)</p><p><strong>Friend:</strong> OK! (16:13)</p><p><strong>Aziz:</strong> Found one! Be there in 10 mins (16:16)</p><p><strong>Friend:</strong> Well done! See you soon (16:16)</p><p><strong>Aziz:</strong> Thx for waiting (16:17)</p>\",\r\n  \"discussion\": \"Are you usually on time or late? How many minutes is ‘late’ for you?\",\r\n  \"tips\": \"<p>You do not need to write complete sentences for text messages.</p><p>Use abbreviations like let me know or use emojis to save time writing.</p><p>You do not need to use full stops (periods) at the end of messages.</p><p>Say how many minutes you think you will need, for example, I am running 10 minutes late.</p><p>It is good to say sorry and sorry again, but you do not need to say sorry in every message.</p>\"\r\n}', '2025-04-17 03:57:06', '2025-04-17 03:57:12'),
(57, 13, 'A noticeboard message', NULL, 'a-noticeboard-message', NULL, NULL, NULL),
(58, 13, 'A text message invitation', NULL, 'a-text-message-invitation', NULL, NULL, NULL),
(59, 13, 'A thank-you email', NULL, 'a-thank-you-email', NULL, NULL, NULL),
(60, 13, 'An application form', NULL, 'an-application-form', NULL, NULL, NULL),
(61, 14, 'A personal profile', NULL, 'a-personal-profile', NULL, NULL, NULL),
(62, 14, 'An accommodation form', NULL, 'an-accommodation-form', NULL, NULL, NULL),
(63, 14, 'An email about a business event', NULL, 'an-email-about-a-business-event', NULL, NULL, NULL),
(64, 14, 'An email cover letter', NULL, 'an-email-cover-letter', NULL, NULL, NULL),
(65, 14, 'An email explaining a problem', NULL, 'an-email-explaining-a-problem', NULL, NULL, NULL),
(66, 15, 'A class forum', NULL, 'a-class-forum', NULL, NULL, NULL),
(67, 15, 'A professional profile', NULL, 'a-professional-profile', NULL, NULL, NULL),
(68, 15, 'A report on a student meeting', NULL, 'a-report-on-a-student-meeting', NULL, NULL, NULL),
(69, 15, 'A restaurant review', NULL, 'a-restaurant-review', NULL, NULL, NULL),
(70, 15, 'A thank-you message', NULL, 'a-thank-you-message', NULL, NULL, NULL),
(71, 16, 'A covering email', NULL, 'a-covering-email', NULL, NULL, NULL),
(72, 16, 'A CV', NULL, 'a-cv', NULL, NULL, NULL),
(73, 16, 'A letter of complaint', NULL, 'a-letter-of-complaint', NULL, NULL, NULL),
(74, 16, 'A report on working abroad', NULL, 'a-report-on-working-abroad', NULL, NULL, NULL),
(75, 16, 'A summary of a line graph', NULL, 'a-summary-of-a-line-graph', NULL, NULL, NULL),
(76, 17, 'A music review', NULL, 'a-music-review', NULL, NULL, NULL),
(77, 17, 'A proposal for a digital newspaper', NULL, 'a-proposal-for-a-digital-newspaper', NULL, NULL, NULL),
(78, 17, 'A report on a research study', NULL, 'a-report-on-a-research-study', NULL, NULL, NULL),
(79, 17, 'A response to a complaint', NULL, 'a-response-to-a-complaint', NULL, NULL, NULL),
(80, 17, 'An email explaining an incident', NULL, 'an-email-explaining-an-incident', NULL, NULL, NULL),
(106, 18, 'A poster at work', 'Read an invitation to an office event to practise and improve your reading skills.', 'a-poster-at-work', '{\r\n    \"introduce\": \"Read an invitation to an office event to practise and improve your reading skills. Do the preparation task first. Then read the text and do the exercises.\",\r\n    \"documentUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/LearnEnglish-Reading-A1-A-poster-at-work.pdf\",\r\n    \"imageUrl\": \"https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS7865_ThinkstockPhotos-498708046-hig.jpg?itok=d_L8hJLh\",\r\n    \"transcriptHtml\": \"<p>Come and join our lunchtime yoga class with experienced yoga teacher Divya Bridge!</p><p><strong>When?</strong> Every Tuesday at 1.30 p.m.</p><p><strong>Where?</strong> Meeting Room 7</p><p><strong>How much?</strong> £10 for four 30-minute classes.</p><p><strong>What to bring?</strong> Comfortable clothes. Divya will provide the yoga mats.</p><p><strong>How to join?</strong> Write to Sam at Sam.Holden@example.com</p><p>We can only take a maximum of 20 in the room, so book now!</p>\",\r\n    \"discussion\": \"Do you do any classes outside of your work?\"\r\n}', '0000-00-00 00:00:00', '2025-04-17 05:08:25'),
(107, 18, 'A poster for exam candidates', NULL, 'a-poster-for-exam-candidates', NULL, NULL, NULL),
(108, 18, 'A restaurant menu', NULL, 'a-restaurant-menu', NULL, NULL, NULL),
(109, 18, 'A study timetable', NULL, 'a-study-timetable', NULL, NULL, NULL),
(110, 18, 'An airport departures board', NULL, 'an-airport-departures-board', NULL, NULL, NULL),
(111, 19, 'A message to a new friend', NULL, 'a-message-to-a-new-friend', NULL, NULL, NULL),
(112, 19, 'An airport notice', NULL, 'an-airport-notice', NULL, NULL, NULL),
(113, 19, 'An email from old friend', NULL, 'an-email-from-old-friends', NULL, NULL, NULL),
(114, 19, 'An end of term report', NULL, 'an-end-of-term-report', NULL, NULL, NULL),
(115, 19, 'An infographic on the forgetting curve', NULL, 'an-infographic-on-the-forgetting-curve', NULL, NULL, NULL),
(116, 20, 'A conference programme', NULL, 'a-conference-programme', NULL, NULL, NULL),
(117, 20, 'A flyer for a gym', NULL, 'a-flyer-for-a-gym', NULL, NULL, NULL),
(118, 20, 'A travel guide', NULL, 'a-travel-guide', NULL, NULL, NULL),
(119, 20, 'An email request for help', NULL, 'an-email-request-for-help', NULL, NULL, NULL),
(120, 20, 'Digital habits across generations', NULL, 'digital-habits-across-generations', NULL, NULL, NULL),
(121, 21, 'A Plastic Ocean: a film review', NULL, 'a-plastic-ocean-film-review', NULL, NULL, NULL),
(122, 21, 'A short story extract', NULL, 'a-short-story-extract', NULL, NULL, NULL),
(123, 21, 'An email from a friend', NULL, 'an-email-from-a-friend', NULL, NULL, NULL),
(124, 21, 'Asteroids', NULL, 'asteroids', NULL, NULL, NULL),
(125, 21, 'Cultural expectations and leadership', NULL, 'cultural-expectations-and-leadership', NULL, NULL, NULL),
(126, 22, 'A biography of Kilian Jornet', NULL, 'a-biography-of-kilian-jornet', NULL, NULL, NULL),
(127, 22, 'A threat to bananas', NULL, 'a-threat-to-bananas', NULL, NULL, NULL),
(128, 22, 'Cultural behaviour in business', NULL, 'cultural-behaviour-in-business', NULL, NULL, NULL),
(129, 22, 'Four book summaries', NULL, 'four-book-summaries', NULL, NULL, NULL),
(130, 22, 'Giving and receiving positive feedback', NULL, 'giving-and-receiving-positive-feedback', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_15_125354_create_skills_table', 1),
(5, '2025_04_15_125436_create_courses_table', 1),
(6, '2025_04_15_125457_create_lessons_table', 1),
(7, '2025_04_15_125521_create_tasks_table', 1),
(8, '2025_04_15_125544_create_questions_table', 1),
(9, '2025_04_15_125609_create_options_table', 1),
(10, '2025_04_15_125630_create_comments_table', 1),
(11, '2025_04_16_010121_add_description_to_lessons_table', 2),
(12, '2025_04_16_010452_add_image_url_to_courses_table', 3),
(13, '2025_04_16_013947_update_skills_table', 4),
(14, '2025_04_16_055511_add_introduce_to_courses_table', 5),
(15, '2025_04_16_061822_change_type_introduce_in_courses_table', 6),
(16, '2025_04_16_063505_add_introduce_to_skills_table', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `option_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `type` enum('multiple_choice','checkbox','text_input') NOT NULL,
  `question_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HWOPSPVzgRLOPTpJxXsYZJgpUdqGtDfxXkbIY0G8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFNWZUljWEs1OEhnSzVWZ0J6T2VyYkRtckx4S3dWZmpOWmtDUnFZNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9za2lsbC9saXN0ZW5pbmcvY291cnNlL2ExLWxpc3RlbmluZy9sZXNzb24vYS1yZXF1ZXN0LWZyb20teW91ci1ib3NzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744816866),
('OQy0gSS9BmOzTcZifdYx9yfta5JGmvugL0OWjuxz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1p0NjdaQm9PbUlMREI3dEszVE8xSUpYV2R5TlVsZ1EwaGpQRmRMaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9za2lsbC9yZWFkaW5nL2NvdXJzZS9hMS1yZWFkaW5nL2xlc3Nvbi9hLXBvc3Rlci1hdC13b3JrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1744866520);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `introduce` text DEFAULT NULL,
  `imageUrl` varchar(255) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skills`
--

INSERT INTO `skills` (`id`, `title`, `introduce`, `imageUrl`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Listening', '<p> Here you can find activities to practise your listening skills. Listening will help you to improve your understanding of the language and your pronunciation. </p> <p> The self-study lessons in this section are written and organised by English level based on the Common European Framework of Reference for languages (CEFR). There are recordings of different situations and interactive exercises that practise the listening skills you need to do well in your studies, to get ahead at work and to communicate in English in your free time. The speakers you will hear are of different nationalities and the recordings are designed to show how English is being used in the world today. </p> <p> Take our <a href=\"/english-test\">free online English test</a> to find out which level to choose. Select your level, from A1 English level (elementary) to C1 English level (advanced), and improve your listening skills at your own speed, whenever it\'s convenient for you. </p>', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS4758_AA047774-low.jpg?itok=PZYR9572', 'listening', 'Here you can find activities to practise your listening skills. Listening will help you to improve your understanding of the language and your pronunciation.', '2025-04-15 13:26:57', '2025-04-15 13:26:57'),
(2, 'Writing', '<p>Here you can find activities to practise your writing skills. You can improve your writing by understanding model texts and how they\'re structured.</p>  <p>The self-study lessons in this section are written and organised by English level based on the Common European Framework of Reference for languages (CEFR). There are different types of model texts, with writing tips and interactive exercises that practise the writing skills you need to do well in your studies, to get ahead at work and to communicate in English in your free time.</p>  <p>Take our <a href=\"#\">free online English test</a> to find out which level to choose. Select your level, from <a href=\"#\">A1 English level (elementary)</a> to <a href=\"#\">C1 English level (advanced)</a>, and improve your writing skills at your own speed, whenever it\'s convenient for you.</p>', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/2021-10/RS5825_169280449-hig.jpg?itok=wYILtdrb', 'writing', 'Here you can find activities to practise your writing skills. You can improve your writing by understanding model texts and how they\'re structured.', '2025-04-15 13:26:57', '2025-04-15 13:26:57'),
(3, 'Reading', '<p>Here you can find activities to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary.</p>\r\n\r\n<p>The self-study lessons in this section are written and organised by English level based on the Common European Framework of Reference for languages (CEFR). There are different types of texts and interactive exercises that practise the reading skills you need to do well in your studies, to get ahead at work and to communicate in English in your free time.</p>\r\n\r\n<p>Take our <a href=\"#\">free online English test</a> to find out which level to choose. Select your level, from <a href=\"#\">A1 English level (elementary)</a> to <a href=\"#\">C1 English level (advanced)</a>, and improve your reading skills at your own speed, whenever it\'s convenient for you.</p>\r\n\r\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS7522_ThinkstockPhotos-622015126-hig_0.jpg?itok=qHpUdRl_', 'reading', 'Here you can find activities to practise your reading skills. Reading will help you to improve your understanding of the language and build your vocabulary.', '2025-04-15 13:26:57', '2025-04-15 13:26:57'),
(4, 'Speaking', '<p>Here you can find activities to practise your speaking skills. You can improve your speaking by noticing the language we use in different situations and practising useful phrases.</p>\n\n<p>The self-study lessons in this section are written and organised by English level based on the Common European Framework of Reference for languages (CEFR). There are videos of different conversations at work and interactive exercises that practise the speaking skills you need to get ahead at work and communicate in English. The videos help you practise saying the most useful language and the interactive exercises will help you remember and use the phrases.</p>\n\n<p>Take our <a href=\"#\">free online English test</a> to find out which level to choose. Select your level, from <a href=\"#\">A1 English level (elementary)</a> to <a href=\"#\">B2 English level (upper intermediate)</a>, and improve your speaking skills at your own speed, whenever it\'s convenient for you.</p>\n', 'https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/max_1300x1300/public/RS8016_GettyImages-646457628-hig_2.jpg?itok=z_YbpNkB', 'speaking', 'Here you can find activities to practise your speaking skills. You can improve your speaking by noticing the language we use in different situations and practising useful phrases.', '2025-04-15 13:26:57', '2025-04-15 13:26:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `instructions` text DEFAULT NULL,
  `task_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_lesson_id_foreign` (`lesson_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `courses_skill_id_foreign` (`skill_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lessons_slug_unique` (`slug`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_task_id_foreign` (`task_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_lesson_id_foreign` (`lesson_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_task_id_foreign` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
