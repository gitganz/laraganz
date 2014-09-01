-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2014 at 10:17 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `philclass_db`
--
CREATE DATABASE IF NOT EXISTS `philclass_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `philclass_db`;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `posts` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `posts`, `created_at`, `updated_at`) VALUES
(2, 'beauty gonzales', 'sexy dairing, lovely', '2014-08-19 23:02:47', '2014-08-19 23:23:32'),
(3, 'gang raped', 'eyed on manila ', '2014-08-20 03:24:39', '2014-08-20 03:24:39'),
(4, 'paolo see ufo', 'very bigvcxdxcv', '2014-08-26 01:20:02', '2014-08-26 01:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `image`) VALUES
(1, 'Ab nesciunt hic vel nihil dicta maiores.', 'Blanditiis et consequuntur sit odit. Et similique ', 'http://lorempixel.com/300/200/'),
(2, 'Quasi quam accusamus eos quae non.', 'Deleniti eveniet aperiam et eveniet magnam repelle', 'http://lorempixel.com/300/200/'),
(3, 'Aliquam sapiente ut quae sunt.', 'Animi sed dolores quibusdam earum in eos sed. Magn', 'http://lorempixel.com/300/200/'),
(4, 'Ipsum qui totam voluptatem.', 'Eligendi natus facilis nihil neque. Porro velit la', 'http://lorempixel.com/300/200/'),
(5, 'Aut dolores ut ut quam dolores.', 'Modi et ipsam beatae voluptatibus enim nesciunt et', 'http://lorempixel.com/300/200/'),
(6, 'Sunt voluptas dolorum in dolor beatae quis.', 'Cum quis eaque quia dolores nostrum. Cum corrupti ', 'http://lorempixel.com/300/200/'),
(7, 'Autem ut dolores veniam.', 'Qui ea sapiente veritatis sequi ea excepturi. Aspe', 'http://lorempixel.com/300/200/'),
(8, 'Tempore ut tempora in commodi maiores quia asperio', 'Possimus excepturi in soluta consequatur laboriosa', 'http://lorempixel.com/300/200/'),
(9, 'Doloribus quas natus commodi atque ducimus.', 'Aut incidunt libero nesciunt consequatur. Perspici', 'http://lorempixel.com/300/200/'),
(10, 'Ipsum est aut odit.', 'Non voluptatibus blanditiis impedit est sit deleni', 'http://lorempixel.com/300/200/'),
(11, 'Atque provident magnam qui illum.', 'Minima cum fugit voluptatem ratione distinctio qui', 'http://lorempixel.com/300/200/'),
(12, 'Esse magnam consequatur fuga numquam quo.', 'Mollitia provident odit minima quis. Ut eligendi c', 'http://lorempixel.com/300/200/'),
(13, 'Mollitia nihil perferendis et sapiente est.', 'Id ipsum tenetur eos et et sit atque. Voluptatibus', 'http://lorempixel.com/300/200/'),
(14, 'Fugit minus non aut enim accusantium.', 'Provident aut quaerat est cumque libero impedit. Q', 'http://lorempixel.com/300/200/'),
(15, 'Voluptas autem pariatur vitae ipsa hic ipsum volup', 'Et explicabo consectetur ut voluptatem. Quod susci', 'http://lorempixel.com/300/200/'),
(16, 'Dicta repellendus vitae et voluptates dolores volu', 'Nisi amet laboriosam incidunt velit harum. Vitae n', 'http://lorempixel.com/300/200/'),
(17, 'Nisi quas sed consequatur qui non est id.', 'Ut est et quidem deserunt amet consequuntur. Volup', 'http://lorempixel.com/300/200/'),
(18, 'Quasi minima ipsam culpa quia similique.', 'Error dolorem aliquam odio illum et quia eos. Quae', 'http://lorempixel.com/300/200/'),
(19, 'Dolores voluptates consequuntur rerum sed nihil et', 'Eaque quo quia sunt et repellat eaque. Quod fugiat', 'http://lorempixel.com/300/200/'),
(20, 'Non ut nihil fugiat ut delectus.', 'Sint ducimus at et odit et omnis. Iure minima porr', 'http://lorempixel.com/300/200/'),
(21, 'Inventore cumque ut ut non dolorem vel.', 'Voluptatum ab aut rerum sed illum perspiciatis num', 'http://lorempixel.com/300/200/'),
(22, 'Quis libero rerum totam iste commodi.', 'Sed cupiditate voluptas voluptatibus commodi hic m', 'http://lorempixel.com/300/200/'),
(23, 'Ratione minus soluta qui iste ut nesciunt accusamu', 'Illo ea debitis eius nisi minima vitae maxime. Qui', 'http://lorempixel.com/300/200/'),
(24, 'Et placeat quaerat tempora sint quo molestiae veli', 'Enim quia aut eos quia qui. Est blanditiis qui et ', 'http://lorempixel.com/300/200/'),
(25, 'Harum nemo odio eligendi in occaecati rerum dolore', 'Vel ut aut sequi eos sunt ducimus quos cum. Id nis', 'http://lorempixel.com/300/200/'),
(26, 'Aut qui quibusdam laudantium.', 'Et enim saepe consequatur odit cum. Id voluptas al', 'http://lorempixel.com/300/200/'),
(27, 'Fuga qui mollitia eaque quisquam nam repellendus.', 'Ut et consequatur suscipit quas. Unde recusandae h', 'http://lorempixel.com/300/200/'),
(28, 'Dolorem quis quisquam qui accusantium qui.', 'Aut debitis quis sit itaque rerum est necessitatib', 'http://lorempixel.com/300/200/'),
(29, 'Culpa dolores quisquam quia maiores est et earum f', 'Dolorum officia nihil sint corrupti maxime iste au', 'http://lorempixel.com/300/200/'),
(30, 'Saepe error ad non quo officiis dolorum.', 'Et aut vel doloribus rerum. Ipsa voluptate officia', 'http://lorempixel.com/300/200/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'bong', 'd06cb93fd8be1a15ae46681e957d9403c31572ec', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'gani@gani.com', 'gani', '$2y$10$Dt/vqlzSmKWgU777YwI3.O5.0.Bls3TPe.3NW/xcKlek9D8hJSoYG', 'XroJqjjtmzCXnckGxa08AQK7KhRJvGZM216UNvCz8g55xdgQkRfjVtKCuPC1', '2014-08-25 15:44:44', '2014-08-26 20:54:15'),
(3, 'admin@admin.com', 'admin', '$2y$10$OCfD5zselg9mY5ZOVtIHoeiLFvhQAKjyqVp7brP6/fO95R1KDcoD2', 'MCum2SBNASkW75QDpxrRUBvO2JPqaZpaa0weU6aXSPq1SnerkrvNLwQ220TX', '0000-00-00 00:00:00', '2014-08-26 21:03:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
