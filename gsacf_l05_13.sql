-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-06-07 17:01:02
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l05_13`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `goodbad_table`
--

CREATE TABLE `goodbad_table` (
  `id` int(11) NOT NULL,
  `good_text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bad_text` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `goodbad_table`
--

INSERT INTO `goodbad_table` (`id`, `good_text`, `bad_text`, `created`) VALUES
(10, '\r\nAmazonプライムでYesterday見た！！', '森重さんのピッチ見た', '2021-06-06'),
(11, 'レコード聞いてみたい', 'ひろしまふじお', '2021-06-06'),
(12, '苦境に立たされている時\r\n神聖なる母が現れ\r\n格言を話してくれる\r\n「あるがままになさい」と', 'When I find myself in times of trouble\r\nMother Mary comes to me\r\nSpeaking words of wisdom\r\nLet it be', '2021-06-06'),
(13, 'あるがままにあるがままにあるがままに', 'Let it be, let it be, let it be, let it be', '2021-06-06'),
(14, '昨日は、悩みなんて遥か遠くにいたのに\r\n今はここにいるかのようで\r\nOh, まだ昨日のような日を信じてる', 'Yesterday, all my troubles seemed so far away\r\nNow it looks as though they\'re here to stay\r\noh, I believe in yesterday\r\n', '2021-06-06'),
(15, 'おかしい', 'プレースホルダー', '2021-06-06');

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'あいうえお', '2021-06-05', '2021-06-01 12:05:49', '2021-06-04 12:17:04'),
(6, 'aa', '2021-06-03', '2021-06-01 16:10:54', '2021-06-01 16:10:54');

-- --------------------------------------------------------

--
-- テーブルの構造 `users_table`
--

CREATE TABLE `users_table` (
  `id` int(12) NOT NULL,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL,
  `is_deleted` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `users_table`
--

INSERT INTO `users_table` (`id`, `username`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 'いいい', 'iiiyyy', 0, 0, '2021-06-04 18:23:20', '2021-06-04 18:47:23');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `goodbad_table`
--
ALTER TABLE `goodbad_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `goodbad_table`
--
ALTER TABLE `goodbad_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- テーブルの AUTO_INCREMENT `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
