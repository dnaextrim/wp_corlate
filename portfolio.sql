-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2016 at 06:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wordpress2`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_wp_corlate_portfolio`
--

CREATE TABLE IF NOT EXISTS `wp_wp_corlate_portfolio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `published` tinyint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wp_wp_corlate_portfolio`
--

INSERT INTO `wp_wp_corlate_portfolio` (`id`, `name`, `published`) VALUES
(1, 'My Portfolio', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wp_corlate_portfolio_images`
--

CREATE TABLE IF NOT EXISTS `wp_wp_corlate_portfolio_images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) unsigned DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `description` text,
  `image_url` text,
  `image_path` text,
  `image_type` text,
  `ordering` int(11) DEFAULT '0',
  `published` tinyint(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `wp_wp_corlate_portfolio_images`
--

INSERT INTO `wp_wp_corlate_portfolio_images` (`id`, `project_id`, `name`, `description`, `image_url`, `image_path`, `image_type`, `ordering`, `published`) VALUES
(1, 1, 'General Settings', 'Untuk melakukan setting umum pada corlate template', 'http://localhost/wordpress2/wp-content/uploads/2016/01/general.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/general.jpg', 'image/jpeg', 1, 1),
(2, 1, 'Porfolio Settings', 'Manajemen portfolio', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio.jpg', 'image/jpeg', 2, 1),
(3, 1, 'Portfolio Project Manegement', 'Untuk memanajemen portfolio project', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio_project.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio_project.jpg', 'image/jpeg', 3, 1),
(4, 1, 'Image Gallery from Portfolio Projects', 'Untuk memanajemen gambar-gambar dari portfolio proyek', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio_project_images.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio_project_images.jpg', 'image/jpeg', 4, 1),
(5, 1, 'Portfolio View', 'Tampilan Portfolio pada blog', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio_front.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio_front.jpg', 'image/jpeg', 5, 1),
(6, 1, 'Portfolio Project View', 'Tampilan Portfolio Proyek pada blog', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio_project_front.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio_project_front.jpg', 'image/jpeg', 6, 1),
(7, 1, 'Portfolio Project Images View', 'Tampilan Gambar Portfolio Proyek pada blog', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio_project_images_front.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio_project_images_front.jpg', 'image/jpeg', 7, 1),
(8, 1, 'Slider Management', 'Untuk melakukan setting slider', 'http://localhost/wordpress2/wp-content/uploads/2016/01/slider_management.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/slider_management.jpg', 'image/jpeg', 8, 1),
(9, 1, 'Slider Preview', 'Untuk melihat tampilan slider', 'http://localhost/wordpress2/wp-content/uploads/2016/01/slider_preview.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/slider_preview.jpg', 'image/jpeg', 9, 1),
(10, 1, 'Slider Animation Settings', 'Untuk melakukan setting animasi pada slide', 'http://localhost/wordpress2/wp-content/uploads/2016/01/slider_animation_settings.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/slider_animation_settings.jpg', 'image/jpeg', 10, 1),
(11, 1, 'Slider View', 'Tampilan Slider pada blog', 'http://localhost/wordpress2/wp-content/uploads/2016/01/slider_front.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/slider_front.jpg', 'image/jpeg', 11, 1),
(12, 1, 'Footer Links Management', 'Untuk melakukan setting footer links', 'http://localhost/wordpress2/wp-content/uploads/2016/01/footer_links.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/footer_links.jpg', 'image/jpeg', 12, 1),
(13, 1, 'Footer Links View', 'Tampilan Footer Links pada blog', 'http://localhost/wordpress2/wp-content/uploads/2016/01/footer_links_front.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/footer_links_front.jpg', 'image/jpeg', 13, 1),
(14, 1, 'Insert Portfolio in Page', 'Cara memasukan portfolio pada Page', 'http://localhost/wordpress2/wp-content/uploads/2016/01/portfolio_button.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/portfolio_button.jpg', 'image/jpeg', 2, 1),
(15, 2, 'Kecik Framework Site', 'http://kecik-framework.com', 'http://localhost/wordpress2/wp-content/uploads/2016/01/kecik_framework_site.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/kecik_framework_site.jpg', 'image/jpeg', 1, 1),
(16, 2, 'Hello World', 'Hello World Code', 'http://localhost/wordpress2/wp-content/uploads/2016/01/code.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/code.jpg', 'image/jpeg', 2, 1),
(17, 2, 'Kecik Framework Github', 'https://github.com/kecik-framework/kecik', 'http://localhost/wordpress2/wp-content/uploads/2016/01/github_kecik_framework.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/github_kecik_framework.jpg', 'image/jpeg', 3, 1),
(18, 2, 'Kecik Framework Skeleton', 'Skeleton for Kecik Framework', 'http://localhost/wordpress2/wp-content/uploads/2016/01/skeleton.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/skeleton.jpg', 'image/jpeg', 4, 1),
(19, 2, 'Corlate Template Kecik Framework Skeleton', 'Corlate template pada Kecik Framework Skeleton', 'http://localhost/wordpress2/wp-content/uploads/2016/01/corlate.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/corlate.jpg', 'image/jpeg', 5, 1),
(20, 2, 'Margo Template Kecik Framework Skeleton', 'Margo template pada Kecik Framework Skeleton', 'http://localhost/wordpress2/wp-content/uploads/2016/01/margo.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/margo.jpg', 'image/jpeg', 6, 1),
(21, 2, 'SB-Admin Template Kecik Framework Skeleton', 'SB-Admin Template pada Kecik Framework Skeleton', 'http://localhost/wordpress2/wp-content/uploads/2016/01/sb-admin.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/sb-admin.jpg', 'image/jpeg', 7, 1),
(22, 2, 'AdminLTE Template Kecik Framework Skeleton', 'AdminLTE Template pada Kecik Framework Skeleton', 'http://localhost/wordpress2/wp-content/uploads/2016/01/adminlte.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/adminlte.jpg', 'image/jpeg', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_wp_corlate_portfolio_projects`
--

CREATE TABLE IF NOT EXISTS `wp_wp_corlate_portfolio_projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(11) unsigned DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `description` text,
  `image_url` text,
  `image_path` text,
  `image_type` text,
  `project_url` varchar(255) DEFAULT NULL,
  `open_new_tab` tinyint(4) unsigned DEFAULT '0',
  `published` tinyint(4) unsigned DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wp_wp_corlate_portfolio_projects`
--

INSERT INTO `wp_wp_corlate_portfolio_projects` (`id`, `portfolio_id`, `name`, `description`, `image_url`, `image_path`, `image_type`, `project_url`, `open_new_tab`, `published`, `category`) VALUES
(1, 1, 'WP Corlate Themes', '<p>Merupakan sebuah template dari hasil konversi Template Corlate  HTML menjadi versi Template untuk Wordpress dengan beberapa perubahan dan penambahan fitur pada bagian Administrator seperti management untuk slider, portfolio dan footer links</p>', 'http://localhost/wordpress2/wp-content/uploads/2016/01/wp_corlate.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/wp_corlate.jpg', 'image/jpeg', 'http://donywahyuisp.com', 1, 1, 'Template, Wordpress'),
(2, 1, 'Kecik Framework', 'Merupakan framework dengan satu file system yang sangat sederhana dan modular', 'http://localhost/wordpress2/wp-content/uploads/2016/01/kecik_cover.jpg', 'C:\\wamp\\www\\wordpress2/wp-content/uploads/2016/01/kecik_cover.jpg', 'image/jpeg', 'https://github.com/kecik-framework/kecik', 1, 1, 'PHP, Framework');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
