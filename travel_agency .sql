-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 08:07 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `achivements`
--

CREATE TABLE `achivements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt1_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt2_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt3_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achivements`
--

INSERT INTO `achivements` (`id`, `title1`, `title2`, `description`, `opt1`, `opt1_value`, `opt2`, `opt2_value`, `opt3`, `opt3_value`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'GO FOT ADVENTURE', 'we will handle the rest', 'Isn\'t this world wonderful? These ocean, mountains, river, desert? Isn\'t people are so diverse? Culture, cuisine,cloth, tradition? Want to explore everything? Start now with us Isn\'t this world wonderful? These ocean, mountains, river, desert? Isn\'t people are2', 'successful tour', '500', 'happy customer', '25000', 'destination', '300', 'achivement', 'achivement.png', NULL, '2020-09-09 07:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannerPage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `caption`, `bannerPage`, `bannerImg`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT US', NULL, '2', 'About.jpg', '2020-08-31 00:53:24', '2020-08-31 03:14:26'),
(2, 'Make Your Adventure Memorable With Us', 'ADVENTURE IS OUT THERE', '1', 'Home.jpg', '2020-08-31 00:54:51', NULL),
(3, 'Destination Tour', NULL, '3', 'Destiantion.jpg', '2020-08-31 00:56:50', NULL),
(9, 'Our Blog', NULL, '4', 'Blog.jpg', '2020-08-31 01:05:05', NULL),
(10, 'Contact Us', NULL, '5', 'Contact.jpg', '2020-08-31 01:06:10', NULL),
(11, 'Package Details', NULL, '7', 'SingleDestinaion.png', '2020-09-01 06:59:27', NULL),
(12, 'Blog', NULL, '6', 'SingleBlog.jpg', '2020-09-01 06:59:53', '2020-09-12 11:46:40'),
(13, 'Search Result', NULL, '9', 'search_result.jpg', '2020-09-09 23:52:42', NULL),
(14, 'Our members', NULL, '8', 'all_members.png', '2020-09-09 23:53:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `post_details`, `author`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'It was an amazing tour', 'It_was_an_amazing_tour.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '1', 'It_was_an_amazing_tour', '2020-09-12 09:26:08', NULL),
(2, 'Great moments of my life', 'Great_moments_of_my_life.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '1', 'Great_moments_of_my_life', '2020-09-12 09:26:55', NULL),
(3, 'Nature is really beautiful', 'Nature_is_really_beautiful.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '1', 'Nature_is_really_beautiful', '2020-09-12 09:27:19', NULL),
(4, 'This world is awsome', 'This_world_is_awsome.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '4', 'This_world_is_awsome', '2020-09-12 10:31:44', NULL),
(6, 'Memoriable tour', 'Memoriable_tour.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '5', 'Memoriable_tour', '2020-09-12 11:06:57', NULL),
(7, 'Amazing moments of my life', 'Amazing_moments_of_my_life.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '5', 'Amazing_moments_of_my_life', '2020-09-12 11:07:44', NULL),
(8, 'Wonderful! Experience', 'Wonderful__Experience.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '5', 'Wonderful__Experience', '2020-09-12 11:08:10', NULL),
(9, 'Great view of my life', 'Great_view_of_my_life.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '5', 'Great_view_of_my_life', '2020-09-12 11:08:54', NULL),
(10, 'Great Experience', 'Great_Experience.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '1', 'Great_Experience', '2020-09-12 11:12:09', NULL),
(11, 'Beautiful weather', 'Beautiful_weather.png', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, esse vero laborum velit architecto mollitia tenetur impedit sed sunt doloribus eos. Molestias incidunt quaerat eveniet possimus accusamus, iusto laborum, unde, corrupti eaque repudiandae facilis totam at natus illo quas dicta doloribus ex praesentium? Reprehenderit nesciunt dolores laborum ratione ipsa quis facilis quae, nemo delectus aperiam quos deserunt fuga at debitis similique architecto pariatur natus laboriosam a quia sit. Explicabo doloremque et illo rerum vel autem modi animi facilis aliquid maiores totam fuga voluptatem ex, corrupti quaerat. Dolorem excepturi, facilis aliquam vero fugiat exercitationem adipisci repellendus, repudiandae quod beatae quasi mollitia pariatur est voluptates id soluta? Odit nihil veniam iusto nulla architecto numquam error inventore officiis, quis fugiat aspernatur minima quaerat facilis sunt exercitationem nam saepe officia aut aliquam quo quasi. Facere necessitatibus excepturi quaerat eligendi culpa dolorum atque iure eveniet hic? Distinctio quae unde dignissimos totam explicabo illum optio ad voluptates quaerat dolorem consequuntur, saepe maiores harum, quis nihil. Vitae, recusandae autem? Ut vitae nobis nihil animi maiores, nam officiis error ducimus laboriosam eveniet quod molestias placeat adipisci voluptatibus sapiente distinctio odio commodi itaque maxime non ab, molestiae optio, vel voluptates! Eos ducimus qui iure sit magni aspernatur iusto corporis id, architecto repellat nemo, modi recusandae ipsa perspiciatis corrupti autem perferendis odio unde suscipit error voluptatem. Aliquid, voluptatibus aliquam! Ullam nostrum earum harum vero accusantium enim magni id tenetur quae quia. Libero quasi culpa ab voluptas quaerat necessitatibus, nemo, vero, illo minima assumenda natus sint obcaecati maiores deserunt repellat quod. Hic, magni aliquid nulla repellat sit distinctio, magnam dolorem explicabo velit pariatur fugiat iusto possimus, expedita asperiores aspernatur officiis iure debitis quis vel! Labore consequuntur voluptate at alias amet ea qui nemo quidem veritatis dicta obcaecati eius, sequi adipisci corporis asperiores, non harum itaque quam dolorum praesentium numquam, eos ad.', '1', 'Beautiful_weather', '2020-09-12 11:13:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogSlug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = unseen, 1 = seen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `name`, `email`, `message`, `blogSlug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Arman', 'arman@gmail.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta perferendis exercitationem quibusdam, fugit dolorum ea laudantium quia voluptas excepturi labore.', 'Beautiful_weather', '1', '2020-09-12 23:22:22', '2020-09-13 08:49:16'),
(4, 'Md Arman', 'arman@gmail.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta perferendis exercitationem quibusdam, fugit dolorum ea laudantium quia voluptas excepturi labore.', 'Great_Experience', '1', '2020-09-13 03:55:38', '2020-09-13 08:49:16'),
(6, 'Nabil Rahman', 'nabil@gmail.com', 'I want to visit this place', 'Amazing_moments_of_my_life', '1', '2020-09-13 08:43:26', '2020-09-13 08:49:16'),
(7, 'Mominur', 'momenserdar@gmail.com', 'Amazing tour', 'Great_Experience', '1', '2020-09-13 11:48:52', '2020-09-13 11:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `popular` char(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '''on'' mark as popular',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `title`, `slug`, `price`, `day`, `country`, `city`, `description`, `popular`, `image`, `tour_details`, `created_at`, `updated_at`) VALUES
(1, 'Bali, Indonesia 5 day tour $299/per person', 'Bali__Indonesia_5_day_tour__299_per_person', '$299/per person', '5', 'Indonesia', 'Bali', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, 'Bali__Indonesia_5_day_tour__299_per_person.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: center;\"><br></p>', '2020-09-02 10:33:50', '2020-09-09 09:53:15'),
(5, '5 day tour ice land per person 299$', '5_day_tour_ice_land_per_person_299_1599110781', '299$', '5', 'ICELAND', 'Reynisfjara', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor', NULL, '5_day_tour_ice_land_per_person_299_1599110781.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: center;\"><br></p>', '2020-09-02 23:26:21', '2020-09-09 09:52:58'),
(6, 'Japan 5 day tour $299/per person', 'Japan_5_day_tour__299_per_person', '299$', '4', 'Japan', 'Honshu', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, 'Japan_5_day_tour__299_per_person.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '2020-09-02 23:42:58', '2020-09-09 09:52:40'),
(7, 'Male, Maldives $300/per person', 'Male__Maldives__300_per_person', '$300/per person', '8', 'Maldives', 'Male', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, 'Male__Maldives__300_per_person.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', '2020-09-02 23:45:43', '2020-09-09 09:52:17'),
(9, '$300/per person', '_300_per_person', '$300/per person', '8', 'Egypt', 'Giza', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'on', '_300_per_person.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: center;\"><br></p>', '2020-09-03 00:01:20', '2020-09-09 09:51:53'),
(10, 'Bavaria, Germany 7days $250/per person', 'Bavaria__Germany_7days__250_per_person', '$250/per person', '7', 'Germany', 'Bavaria,', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', NULL, 'Bavaria__Germany_7days__250_per_person.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: center;\"><br></p>', '2020-09-03 00:12:05', '2020-09-09 09:51:38'),
(11, 'Bavaria, Germany 5 days tour $299/per person', 'Bavaria__Germany_5_days_tour__299_per_person', '$299/per person', '5', 'UAE', 'Dubai', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'on', 'Bavaria__Germany_5_days_tour__299_per_person.png', '<h4 style=\"color: rgb(33, 37, 41);\">Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4 style=\"color: rgb(33, 37, 41);\">Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: center;\"><br></p>', '2020-09-03 00:15:14', '2020-09-09 09:50:21'),
(12, 'Rome, Italy 7 days tour $300/per person', 'Rome__Italy_8_days_tour__300_per_person', '$300/per person', '7', 'Switzerland', 'Rome', 'Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'on', 'Rome__Italy_8_days_tour__300_per_person.png', '<h4>Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><p><br></p><p style=\"text-align: center;\"><br></p>', '2020-09-03 00:19:26', '2020-09-09 10:54:41'),
(13, 'Matterhorn, Switzerland 7 days tour $250/per person', 'Matterhorn__Switzerland_7_days_tour__250_per_person', '$250/per person', '7', 'Switzerland', 'Matterhorn', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor', 'on', 'Matterhorn__Switzerland_7_days_tour__250_per_person.png', '<h4 style=\"text-align: left;\">Day-1:</h4><p style=\"text-align: left;\">Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: left;\"><br></p><h4>Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><br></p>', '2020-09-03 00:35:49', '2020-09-09 09:47:31'),
(14, 'Male, Maldives 8 days tour', 'Male__Maldives_8_days_tour', '$300/per person', '8', 'Maldives', 'Male', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor', 'on', 'Male__Maldives_8_days_tour.png', '<h4>Day-1:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-2:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-3:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-4:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-5:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><h4>Day-6:</h4><p>Lorem ipsum dolor sit amet, consectetur quis nostrud exercit adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis&nbsp; nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><p><br></p><p style=\"text-align: center;\"><br></p>', '2020-09-03 01:58:15', '2020-09-09 09:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `copyright`, `instagram`, `facebook`, `twitter`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Times New Roman&quot;; vertical-align: baseline; text-align: center; background-color: rgb(51, 58, 56);\"><font color=\"#ffffff\">© This site is Graphic Designed(UI) By&nbsp;</font><span style=\"margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"><font color=\"#00ffff\">Sanjida Alam Chawdhury</font></span></p><p style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: &quot;Times New Roman&quot;; vertical-align: baseline; color: rgb(255, 255, 255); text-align: center; background-color: rgb(51, 58, 56);\">© And Web design/Frontend and backend developed By&nbsp;<span style=\"color: rgb(0, 255, 255); font-weight: 700;\">Md. Mominur Rahman</span></p>', 'http://instagram.com', 'http://facebook.com', 'http://twitter.com', 'http://whatsapp.com', NULL, '2020-09-10 08:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `genarel_settings`
--

CREATE TABLE `genarel_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genarel_settings`
--

INSERT INTO `genarel_settings` (`id`, `site_title`, `logo`, `logo_slug`, `title1`, `title2`, `description`, `image`, `slug`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to our site', 'logo.png', 'logo', 'who we are ?', 'we are here for adventurous people', 'Isn\'t this world wonderful? These ocean, mountains, river, desert? Isn\'t people are so diverse? Culture, cuisine,cloth, tradition? Want to explore everything? Start now with us Isn\'t this world wonderful? These ocean, mountains, river, desert? Isn\'t peopl', 'about_us.png', 'about_us', '203 Fake St. Mountain View, San Diego, California, USA', 'youremail@gmail.com', '+47892320', NULL, '2020-09-13 04:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = unseen, 1 = seen',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `first_name`, `last_name`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Mominur', 'Rahman', 'momenserdar@gmail.com', 'hlw', '1', '2020-09-13 11:45:58', '2020-09-14 03:53:55'),
(5, 'Hasan', 'Serdar', 'mdh2315@gmail.com', 'hlw guyz,', '1', '2020-09-13 11:47:19', '2020-09-13 11:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_08_30_145924_create_pages_table', 2),
(15, '2020_08_30_104535_create_banners_table', 3),
(16, '2020_08_31_163339_create_services_table', 4),
(17, '2020_09_02_141041_create_destinations_table', 5),
(22, '2020_09_03_163047_create_tourist_expers_table', 6),
(27, '2020_09_06_034542_create_achivements_table', 8),
(28, '2020_09_04_095945_create_our_teams_table', 9),
(29, '2020_09_06_142308_create_why_choose_uses_table', 10),
(30, '2020_09_06_150333_create_genarel_settings_table', 11),
(31, '2020_09_10_130248_create_footers_table', 12),
(36, '2014_10_12_000000_create_users_table', 13),
(37, '2020_09_03_124652_create_blogs_table', 13),
(38, '2020_09_13_035530_create_blog_comments_table', 14),
(40, '2020_09_13_091002_create_notifications_table', 15),
(42, '2020_09_13_145953_create_messages_table', 16),
(43, '2020_09_14_130713_create_news_latter_controllers_table', 17),
(44, '2020_09_14_134204_create_news_letters_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `news_latter_controllers`
--

CREATE TABLE `news_latter_controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_letters`
--

INSERT INTO `news_letters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'mdh2315@gmail.com', '2020-09-14 07:49:15', NULL),
(3, 'gangofghost.gog2@gmail.com', '2020-09-14 07:57:24', NULL),
(4, 'momenserdar@gmail.com', '2020-09-14 08:05:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 = unreed , 1 = reed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notify_id`, `auth_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'genarel_setting', NULL, '1', '0', '2020-09-12 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'on = marked',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_teams`
--

INSERT INTO `our_teams` (`id`, `title`, `role`, `image`, `facebook`, `twitter`, `instagram`, `mark`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'SAM DOE', 'stuff', 'SAM_DOE.png', 'https://www.facebook.com/profile.php?id=100007443287577', NULL, NULL, NULL, 'SAM_DOE', '2020-09-06 07:26:26', '2020-09-10 00:33:27'),
(2, 'LEE CHANG', 'stuff', 'LEE_CHANG.png', NULL, NULL, NULL, NULL, 'LEE_CHANG', '2020-09-06 07:39:45', '2020-09-10 00:33:29'),
(3, 'JOHN WALKER', 'stuff', 'JOHN_WALKER.png', NULL, NULL, NULL, 'on', 'JOHN_WALKER', '2020-09-06 07:40:44', NULL),
(4, 'John doe', 'Manager', 'John_doe.jpg', NULL, NULL, NULL, NULL, 'John_doe', '2020-09-10 00:23:10', '2020-09-10 00:33:45'),
(5, 'Jack doe', 'CEO', 'Jack_doe.jpg', NULL, NULL, NULL, 'on', 'Jack_doe', '2020-09-10 00:23:44', NULL),
(6, 'Shahinur', 'stuff', 'Shahinur.jpg', NULL, NULL, NULL, 'on', 'Shahinur', '2020-09-10 00:30:59', '2020-09-14 03:57:18'),
(7, 'Emma watson', 'stuff', 'Emma_watson.jpg', NULL, NULL, NULL, NULL, 'Emma_watson', '2020-09-10 00:32:18', NULL),
(8, 'Angelena Jolly', 'stuff', 'Angelena_Jolly.png', NULL, NULL, NULL, NULL, 'Angelena_Jolly', '2020-09-10 00:32:42', NULL),
(9, 'Spider Man', 'stuff', 'Spider_Man.png', NULL, NULL, NULL, NULL, 'Spider_Man', '2020-09-10 00:33:00', NULL),
(10, 'Wonder Woman', 'stuff', 'Wonder_Woman.webp', NULL, NULL, NULL, 'on', 'Wonder_Woman', '2020-09-10 00:34:51', '2020-09-14 03:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL),
(2, 'About', NULL, NULL),
(3, 'Destiantion', NULL, NULL),
(4, 'Blog', NULL, NULL),
(5, 'Contact', NULL, NULL),
(6, 'SingleBlog', NULL, NULL),
(7, 'SingleDestinaion', NULL, NULL),
(8, 'all_members', NULL, NULL),
(9, 'search_result', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_pra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceImg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `service_pra`, `slug`, `serviceImg`, `created_at`, `updated_at`) VALUES
(2, 'Adventure', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation lamco laboris nisi aliquip', 'Adventure', 'Adventure.png', '2020-08-31 11:18:03', '2020-08-31 12:26:38'),
(3, 'Travel Arrangements', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation lamco laboris nisi aliquip', 'Travel_Arrangements', 'Travel_Arrangements.png', '2020-08-31 11:19:20', NULL),
(4, 'Location Manager', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation lamco laboris nisi aliquip', 'Location_Manager', 'Location_Manager.png', '2020-08-31 11:20:11', NULL),
(7, 'Private Guide', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation lamco laboris nisi aliquip', 'Private_Guide', 'Private_Guide.png', '2020-08-31 12:23:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tourist_expers`
--

CREATE TABLE `tourist_expers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tourist_expers`
--

INSERT INTO `tourist_expers` (`id`, `title`, `role`, `description`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Babul', 'Graphics Designer', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation', 'Babul', 'Babul.png', '2020-09-04 02:34:32', NULL),
(3, 'Mominur', 'Frone end developer', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation', 'Mominur', 'Mominur.png', '2020-09-04 02:35:44', NULL),
(4, 'Ismail Hossain', 'Web developer', 'Lorem ipsum dolor amet, consectetur adipiscing, sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation', 'Ismail_Hossain1599212413', 'Ismail_Hossain1599212413.png', '2020-09-04 03:40:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1 = admin, 0 = moderator',
  `admin_confirmation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '1 = confirm, 0 = not confirm',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `admin_confirmation`, `slug`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mominur Rahman', 'momenserdar@gmail.com', '2020-09-11 23:31:53', '1', '1', 'Mominur_Rahman', 'Mominur_Rahman.jpg', '$2y$10$atdiVwE5f7p0JnnwxrosUumx1lnL3PNYEG0WiG3Grtmmog0lgnfVi', NULL, '2020-09-11 23:27:10', '2020-09-12 02:27:34'),
(5, 'Md Hasan', 'mdh2315@gmail.com', '2020-09-12 11:03:17', '0', '1', NULL, 'avatar.png', '$2y$10$rFkciSVXxEkULx9WEryuqeWG/4SBhIp5YliCcwTYyuqy4AYV4u46G', NULL, '2020-09-12 11:02:58', '2020-09-12 11:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_uses`
--

CREATE TABLE `why_choose_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_uses`
--

INSERT INTO `why_choose_uses` (`id`, `title`, `description`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'GREAT SERVICES WITH BEST DEAL', 'we provide you great services in best price. we provide you great services in best price.', 'GREAT_SERVICES_WITH_BEST_DEAL.png', 'GREAT_SERVICES_WITH_BEST_DEAL', '2020-09-06 08:31:16', '2020-09-06 08:49:47'),
(2, 'GREAT TEAM AND TRAVEL GUIDE', 'our guide will handle everything. so you don\'t have to worry about anything', 'GREAT_TEAM_AND_TRAVEL_GUIDE.png', 'GREAT_TEAM_AND_TRAVEL_GUIDE', '2020-09-06 08:50:40', NULL),
(3, 'BEST TRAVEL EXPERIENCE', 'your satisfaction is our goal your satisfaction is our goal your satisfaction is our goa', 'BEST_TRAVEL_EXPERIENCE.png', 'BEST_TRAVEL_EXPERIENCE', '2020-09-06 08:51:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achivements`
--
ALTER TABLE `achivements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genarel_settings`
--
ALTER TABLE `genarel_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_latter_controllers`
--
ALTER TABLE `news_latter_controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourist_expers`
--
ALTER TABLE `tourist_expers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_uses`
--
ALTER TABLE `why_choose_uses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achivements`
--
ALTER TABLE `achivements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genarel_settings`
--
ALTER TABLE `genarel_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `news_latter_controllers`
--
ALTER TABLE `news_latter_controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tourist_expers`
--
ALTER TABLE `tourist_expers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `why_choose_uses`
--
ALTER TABLE `why_choose_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
