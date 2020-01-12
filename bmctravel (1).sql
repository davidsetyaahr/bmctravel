-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 05:06 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmctravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`, `firstname`, `lastname`, `phone`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'BMC Travel', '0823137643');

-- --------------------------------------------------------

--
-- Table structure for table `bank_options`
--

CREATE TABLE `bank_options` (
  `id_bank` int(10) UNSIGNED NOT NULL,
  `bank_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_options`
--

INSERT INTO `bank_options` (`id_bank`, `bank_name`, `number`, `name`, `img`) VALUES
(1, 'Mandiri', '6032 9873 0553 5871', 'David Setya A', 'mandiri.png'),
(2, 'BNI Syariah', '5210 8382 4022 7080', 'David Setya A', 'bni.png'),
(3, 'BRI', '6013 0101 0607 4694', 'David Setya A', 'bri.png'),
(4, 'BTPN', '4661 6010 2072 0592', 'David Setya A', 'btpn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_booking` int(10) UNSIGNED NOT NULL,
  `id_tour` int(11) NOT NULL,
  `booking_date` datetime NOT NULL,
  `travel_date` datetime NOT NULL,
  `day` tinyint(4) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pax` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `identity_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','11','1','22','222','2') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_booking`, `id_tour`, `booking_date`, `travel_date`, `day`, `id_user`, `pax`, `price`, `identity_card`, `status`) VALUES
(1, 1, '2020-01-10 20:48:51', '2020-01-12 00:00:00', 2, 1, 3, 2700000, '57288.jpg', '2'),
(2, 1, '2020-01-12 22:45:11', '2020-01-14 00:00:00', 2, 1, 4, 3600000, '43896.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `calculation`
--

CREATE TABLE `calculation` (
  `id_calculation` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calculation`
--

INSERT INTO `calculation` (`id_calculation`, `label`, `nominal`) VALUES
(1, 'Bromo Ticket Weekend', 100000),
(2, 'Bromo Ticket Normal', 75000),
(3, 'Bromo Guide', 200000),
(4, 'Jeep', 200000),
(5, 'Bromo Park', 500000),
(6, 'Bromo Hotels', 200000),
(7, 'Breakfast', 25000),
(8, 'Driver Bromo', 150000),
(9, 'Elf Long', 500000),
(10, 'Dinner ', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id_city` int(10) UNSIGNED NOT NULL,
  `province_id` tinyint(4) NOT NULL,
  `city_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id_city`, `province_id`, `city_name`) VALUES
(1, 1, 'Probolinggo'),
(2, 1, 'Bondowoso'),
(3, 1, 'Lumajang'),
(4, 1, 'Jember'),
(5, 1, 'Banyuwangi'),
(6, 1, 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id_destination` int(10) UNSIGNED NOT NULL,
  `destination_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` tinyint(4) NOT NULL,
  `id_city` tinyint(4) NOT NULL,
  `gallery` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id_destination`, `destination_name`, `id_category`, `id_city`, `gallery`, `overview`, `map`, `information`) VALUES
(1, 'Hotel', 5, 0, '', '', '', ''),
(2, 'Airport', 6, 0, '', '', '', ''),
(3, 'Restaurant', 7, 0, '', '', '', ''),
(4, 'Bromo', 1, 1, '1,16,17', 'Being the largest volcanic region in the province, Bromo Tengger Semeru National Park covers a massive area of 800 square km in the center of East Java. Visitors who have an eager interest in volcanic activities must come to the park and witness the smoke of ashes coming from Mount Semeru, an active volcano that rises 3,676 meters above sea level.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31612.360113083476!2d112.93550256877971!3d-7.942493083851207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sMt%20Bromo!5e0!3m2!1sen!2sid!4v1577678579133!5m2!1sen!2sid\r\n', '<h1>Bromo Tengger Semeru National Park</h1>\r\n\r\n<h2><br />\r\n<b>The Land of Sand and Fire</b></h2>\r\n\r\n<p>Being the largest volcanic region in the province, Bromo Tengger Semeru National Park covers a massive area of 800 square km in the center of East Java. Visitors who have an eager interest in volcanic activities must come to the park and witness the smoke of ashes coming from Mount Semeru, an active volcano that rises 3,676 meters above sea level.<br />\r\n&nbsp;</p>\r\n\r\n<p><img alt=\"bromo\" src=\"https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revision-2019/all-revision-destination/bromo1.jpg\" width=\"500\" /></p>\r\n\r\n<p>Bromo Tengger Semeru National Park is the only conservation area in Indonesia that has a 10 km sea of sand called Tengger, from which four new volcanic cones have emerged. Those volcanic cones are Mount Batok (2,470 m), Mount Kursi (2,581 m), Mount Watangan (2,661 m), and Mount Widodaren (2,650 m). However, Mount Bromo is still the only one that is active. Temperatures at the top of Mount Bromo range about 5-18 degrees Celsius. Heading south of the park is a rolling upland plateau divided by valleys and decorated with several scenic lakes reaching to the foot of Mount Semeru.</p>\r\n\r\n<h2>Get There</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><b>By Air</b></p>\r\n\r\n<p>You can fly with Sriwijaya Air, which flies twice daily to Malang from Jakarta. There are also many flights from airlines such as Citilink and Batik Air that fly daily from Jakarta to Surabaya.</p>\r\n\r\n<p><b>By Land</b></p>\r\n\r\n<p>There are multiple ways to get into the park. Visitors can come from Probolinggo through the village of Ngadisari. They can also take the north east approach via Pasuruan through the village of Tosari. The third, which is a more difficult approach, is via Ngadas.</p>\r\n\r\n<p>The Probolinggo approach is the easiest and by far the most popular route, especially if the visitors are traveling by public bus. Wonokitri is the closest and the easiest approach if you are coming by private vehicle from Surabaya (5 hours journey). Once you arrive at those villages, you have to rent 4x4 vehicles in order to get closer to Mount Bromo.</p>\r\n\r\n<p>Most tour groups from Surabaya stay overnight at Tretes, where there are a number of hotels, as there are in Malang, which has the added advantage of having an airport. Alternatively, you can also contact a travel agency to arrange your trip.</p>\r\n\r\n<h2>Get Around</h2>\r\n\r\n<p>Many visitors choose to walk while they arrive at the park. There are clearly marked tracks across the sand sea that leads to the foot of Mount Bromo. Alternatively, you can rent a jeep or hire a horse from Cemoro Lawang to get around.</p>\r\n\r\n<h2>Attraction</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><b>Outdoor Activities</b></p>\r\n\r\n<p><img alt=\"bromo\" src=\"https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revision-2019/all-revision-destination/bromo22.jpg\" width=\"500\" /></p>\r\n\r\n<p><i>Image by furstset</i></p>\r\n\r\n<p>Tengger sand sea with its 5.250 hectares area will make a perfect place to walk around or ride a horse and feel like a wild west cowboy. You can also hike to the top of Mount Bromo or, if you feel challenged enough, to the summit of Mount Semeru, which is the highest mountain in the land of Java. For other options, you can watch the beautiful sunrise from Ranu Kumbolo, where the sun will slowly emerge from the valley between the two hills something just like a fairytale. You can also visit the nearby waterfalls such as Madakaripura, Coban Sewu, Coban Pelangi, and Coban Jahe waterfalls.</p>\r\n\r\n<p><b>Religious Tourism</b></p>\r\n\r\n<p><img alt=\"bromo\" src=\"https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revision-2019/all-revision-destination/bromo3.jpg\" width=\"500\" /></p>\r\n\r\n<p>Most of&nbsp;<a href=\"https://www.indonesia.travel/content/indtravelrevamp/gb/en/event-festivals/yadnya-kasada-and-bromo-excotica-festival-on-bewitching-mt-bromo.html\">Tengger</a>&nbsp;natives embrace Hindu teachings as their religion. Therefore, there are a number of Hindu temples around Bromo Tengger Semeru National Park. You can visit Kidal Temple, Luhur Poten Temple, Mandara Giri Semeru Agung Temple, and Jago Temple to marvel at the historical magnificence.</p>\r\n\r\n<p><b>Signature Experience</b></p>\r\n\r\n<p>Besides all the natural wonders, Bromo Tengger Semeru National Park also has its own cultural charm.&nbsp;<a href=\"https://www.indonesia.travel/content/indtravelrevamp/gb/en/trip-ideas/ngadas-a-serene-village-above-the-clouds-at-mt-bromo-east-java.html\">Ngadas</a>, a serene village up on the slopes of Mt. Bromo, will be a fun thing to not be missed. Situated in the highlands only 6,5 KM away from the majestic Mt. Bromo, the average temperature is around 0 - 25 degrees Celsius, with cool to relatively cold refreshing air. The villagers, which mainly consist of Tengger natives, still practice the ancient rituals and ceremonies that are believed to bring order, good fortune, and prosperity.</p>'),
(5, 'Kawah Ijen', 1, 2, '3,18,19', 'Ijen plateau or known as \'Kawah Ijen\' is highly recommended to mountain buffs and hikers. The Plateau was at one time a huge active crater, 134 sq km in area. Ijen is a quiet but active volcano, and the landscape is dominated by the volcanic cones of Ijen (2,368 asl) and Merapi (2,800 asl) on the northeastern edge of the Plateau, and Raung (3,332 asl) on the southwest corner. The vent is a source of sulfur and collectors work here, making the trek up to the crater and down to the lake every day.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63206.68052769417!2d114.21769349517452!3d-8.058822114489134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd149f2110ae607%3A0x7c04ef029d5e39bc!2sIjen!5e0!3m2!1sen!2sid!4v1577678989193!5m2!1sen!2sid', '<h1>Ijen Crater</h1>\r\n\r\n<p>Ijen plateau or known as &#39;Kawah Ijen&#39; is highly recommended to mountain buffs and hikers. The Plateau was at one time a huge active crater, 134 sq km in area. Ijen is a quiet but active volcano, and the landscape is dominated by the volcanic cones of Ijen (2,368 asl) and Merapi (2,800 asl) on the northeastern edge of the Plateau, and Raung (3,332 asl) on the southwest corner. The vent is a source of sulfur and collectors work here, making the trek up to the crater and down to the lake every day.</p>\r\n\r\n<p><img alt=\"The Active Volcano for Adventurer Hikers\" src=\"https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-all-destination-s-image/ijen2.jpg\" width=\"500\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Get Around</p>\r\n\r\n<p>You can take a walk for about 1-1.5 hour to the crater rim.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Get There</p>\r\n\r\n<p>The Ijen Plateau can be reached through Bondowoso from either the northern or the southern coast. It is closer to&nbsp;<a href=\"https://www.indonesia.travel/content/indtravelrevamp/gb/en/destinations/java/banyuwangi.html\" target=\"_self\">Banyuwangi</a>, but the road is very steep and badly deteriorated. A 4 WD is essential, although difficult to hire in Banyuwangi and outrageously expensive. Most people walk the last 8 km (from about 64 km)&nbsp;along the road to Pos Paltuding (the PHPA Post, the starting point or the trek to the crater) from Bondowoso.</p>'),
(6, 'Tumpak Sewu', 3, 3, '23,24,25', 'The first thing you want to do on your Tumpak Sewu Waterfall adventure from Lumajang is to wake up early. Be at the Tumpak Sewu viewpoint for sunrise. Although the sun won’t be on the waterfall, this is actually what you want. The fog is beautiful in the morning and creates a mystical atmosphere. In the background, Semeru Volcano will be giving you a beautiful backdrop, while Tumpak Sewu slowly comes into focus as the light increases.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4432.282597000537!2d112.91657297825535!3d-8.231388708615219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd614085869da41%3A0x4a94cc5f06772982!2sAir%20Terjun%20Tumpak%20Sewu%20Lumajang!5e0!3m2!1sen!2sid!4v1577679291961!5m2!1sen!2sid', '<h1>TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA</h1>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495-600x337.jpg.optimal.jpg 600w\" height=\"506\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0495-600x337.jpg.optimal.jpg 600w\" width=\"900\" /></p>\r\n\r\n<p>Tumpak Sewu Waterfall (also known as Coban Sewu) is arguably Indonesia&rsquo;s best waterfall. It isn&rsquo;t the largest, even in East Java, but is definitely the most impressive. From above it looks like the tree of life, from below it is immensely powerful and from all angles, it is quite simply mindblowing.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>My Photography Gear:</strong>&nbsp;Wondering what&nbsp;<a href=\"https://www.journeyera.com/travel-blogger-camera-gear/\" rel=\"noopener\" target=\"_blank\" title=\"MY TRAVEL PHOTOGRAPHY GEAR: A DETAILED GUIDE\">Camera and Photography Gear</a>&nbsp;I take all my photos with while traveling around the world?&nbsp;&nbsp;<a href=\"https://www.journeyera.com/travel-blogger-camera-gear/\" title=\"MY TRAVEL PHOTOGRAPHY GEAR: A DETAILED GUIDE\">Click Here</a>&nbsp;to view my detailed guide about all of the gear I use and recommend for travel photography.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>TUMPAK SEWU WATERFALL</h3>\r\n\r\n<p>In this article, I am going to share with you my tips for visiting Tumpak Sewu Waterfall. I will share with you the location, where to stay, the order of viewpoints and trails, other waterfalls to visit on the same day and itinerary for the day so you can be at the right spots at the right time for good lighting. We didn&rsquo;t take a guide but it wouldn&rsquo;t be a bad idea especially for Goa Tetes after.</p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>TUMPAK SEWU VIEWPOINT</h4>\r\n\r\n<p>The first thing you want to do on your Tumpak Sewu Waterfall adventure from Lumajang is to wake up early. Be at the Tumpak Sewu viewpoint for sunrise. Although the sun won&rsquo;t be on the waterfall, this is actually what you want. The fog is beautiful in the morning and creates a mystical atmosphere. In the background, Semeru Volcano will be giving you a beautiful backdrop, while Tumpak Sewu slowly comes into focus as the light increases.</p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA--240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA--600x750.jpg.optimal.jpg 600w\" height=\"560\" sizes=\"(max-width: 448px) 100vw, 448px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA--240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA--600x750.jpg.optimal.jpg 600w\" width=\"448\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281-600x337.jpg.optimal.jpg 600w\" height=\"506\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0281-600x337.jpg.optimal.jpg 600w\" width=\"900\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At sunrise, there will be no-one or hardly anyone at the viewpoint. We had it all to ourselves for the entire hour we visited (It was also a weekday which helped). Most tourists don&rsquo;t wake up for sunrise because they don&rsquo;t care too much about the photo, the colors or the epic lighting. If you put in the effort you can beat the crowds all day just by waking up slightly earlier.</p>\r\n\r\n<p>The viewpoint has a little section that is fenced off. This is a steep hill in front of the viewpoint that is quite steep. There is a path there and it isn&rsquo;t super dangerous but if you do jump the fence just remember the fence is there for a reason and if you do slip you could be in some serious trouble as the drop-off is big. You can get great photos here without taking any huge risks so just be smart, enjoy the waterfall and the viewpoint.</p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389-300x200.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389-600x400.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389-272x182.jpg.optimal.jpg 272w\" height=\"600\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389-300x200.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389-600x400.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01389-272x182.jpg.optimal.jpg 272w\" width=\"900\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0944.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0944.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0944-200x300.jpg.optimal.jpg 200w\" height=\"675\" sizes=\"(max-width: 450px) 100vw, 450px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0944.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0944.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0944-200x300.jpg.optimal.jpg 200w\" width=\"450\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It is a great spot for the drone. If you fly directly above you will see that the river bends around the corner after all of the flows down the cliff meet together. It creates what looks like a tree of life symbol. It&rsquo;s simply incredible viewing from the drone and one of my favorite drone sessions of my life.</p>\r\n\r\n<p>Don&rsquo;t stay too long at the viewpoint otherwise, you may miss the nice lighting inside the canyon at the foot of Tumpak Sewu Waterfall if it is a clear day. You don&rsquo;t want too much sunlight while you are at the bottom of the falls in the morning because it will be directly above the falls and making your photos very blown out.</p>\r\n\r\n<h4><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297-600x750.jpg.optimal.jpg 600w\" height=\"563\" sizes=\"(max-width: 450px) 100vw, 450px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0297-600x750.jpg.optimal.jpg 600w\" width=\"450\" /></h4>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>HIKING DOWN TO TUMPAK SEWU</h4>\r\n\r\n<p>Get down to Tumpak Sewu Waterfall on ground level before the sun rises over the waterfall. The trail is right next to the viewpoint where you were for sunrise. It takes about 10-15 minutes to walk down into the canyon and then about another 5 minutes to walk through the canyon to the waterfall.</p>\r\n\r\n<p>The trail down is pretty sketchy with bamboo ladders and sections where you are walking through small streams but it is nothing too crazy. Just be prepared and definitely wear shoes, not flip-flops.</p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973-600x750.jpg.optimal.jpg 600w\" height=\"566\" sizes=\"(max-width: 453px) 100vw, 453px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0973-600x750.jpg.optimal.jpg 600w\" width=\"453\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000-600x750.jpg.optimal.jpg 600w\" height=\"573\" sizes=\"(max-width: 458px) 100vw, 458px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1000-600x750.jpg.optimal.jpg 600w\" width=\"458\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Once you reach the canyon you start to get an idea of the scale of the walls. You are an ant within the gorge and you know you are about to witness something incredible. After turning the final corner you will never forget the moment you enter the cauldron at the foot of Tumpak Sewu Waterfall. It is pure magic with more than thirty different waterfalls plummeting down into the cauldron into tiny pools below.</p>\r\n\r\n<p>I advise you at this point to understand that you will get wet, it will be gusty and your camera and electronics should be put away or protected. There are several great viewpoints and rock lookouts within the canyon but do beware, these rocks are permanently wet so they are incredibly slippery.</p>\r\n\r\n<p>Cover your gear and go explore the waterfalls. It&rsquo;s incredibly cold but some of the best times you will ever have!</p>\r\n\r\n<p>The journey is not over! Next just around the corner is another waterfall called Goa Tetes that is another incredible spot!</p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02112.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02112.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02112-200x300.jpg.optimal.jpg 200w\" height=\"677\" sizes=\"(max-width: 451px) 100vw, 451px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02112.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02112.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02112-200x300.jpg.optimal.jpg 200w\" width=\"451\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2-600x750.jpg.optimal.jpg 600w\" height=\"565\" sizes=\"(max-width: 452px) 100vw, 452px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-02130-2-600x750.jpg.optimal.jpg 600w\" width=\"452\" /></p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>GOA TETES WATERFALL</h4>\r\n\r\n<p>From Tumpak Sewu you will see signs pointing towards Goa Tetes. It only takes about 10 minutes to walk to Goa Tetes from the foot of Tumpak Sewu.&nbsp; You know when you have arrived because all of the walls are orange!</p>\r\n\r\n<p>Goa Tetes is essentially a collection of caves and waterfalls all the way up the cliff. Most people view it only from the bottom of the gorge and then return to the stairs they came down to visit Tumpak Sewu. Huge mistake! You haven&rsquo;t even seen the glory of Goa Tetes yet. Below is a drone shot showing the wall of Goa Tetes on the right.</p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300-600x337.jpg.optimal.jpg 600w\" height=\"506\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/11/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-0300-600x337.jpg.optimal.jpg 600w\" width=\"900\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Head around the corner to the right and there is a trail leading up to the cliff. Follow this trail for about ten minutes. You will be walking through the stream and it is very slippery. Don&rsquo;t try and avoid getting your shoes wet, to be safe you will need to wade through water throughout most of this journey.</p>\r\n\r\n<p>Continue walking up the stream and always veer left and eventually you will see the caves. From here the adventure is up to you with so many different caves to explore. We scaled one cave in particular and it went really far back into darkness, while the waterfall poured down over the top of us. Absolutely incredible!</p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418-300x200.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418-600x400.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418-272x182.jpg.optimal.jpg 272w\" height=\"600\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418-300x200.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418-600x400.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-01418-272x182.jpg.optimal.jpg 272w\" width=\"900\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1175.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1175.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1175-200x300.jpg.optimal.jpg 200w\" height=\"683\" sizes=\"(max-width: 455px) 100vw, 455px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1175.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1175.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1175-200x300.jpg.optimal.jpg 200w\" width=\"455\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1178.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1178.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1178-200x300.jpg.optimal.jpg 200w\" height=\"668\" sizes=\"(max-width: 445px) 100vw, 445px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1178.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1178.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1178-200x300.jpg.optimal.jpg 200w\" width=\"445\" /></p>\r\n\r\n<p><img alt=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1215.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1215.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1215-200x300.jpg.optimal.jpg 200w\" height=\"693\" sizes=\"(max-width: 462px) 100vw, 462px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1215.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1215.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/TUMPAK-SEWU-WATERFALL-IN-LUMAJANG-EAST-JAVA-1215-200x300.jpg.optimal.jpg 200w\" width=\"462\" /></p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>LEAVING THE CANYON</h4>\r\n\r\n<p>This part isn&rsquo;t necessary but is a good little tip. Once you are at Goa Tetes you can continue up the same trail you are on. You can see the stairs to your right leading up the cliff. This trail will lead you back to the homestay and the entrance of Tumpak Sewu. Otherwise, you have to go all the way down Goa Tetes and then back up the trail to the Tumpak Sewu Waterfall viewpoint.</p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>WHERE IS TUMPAK SEWU (COBAN SEWU)</h4>\r\n\r\n<p>Tumpak Sewu Waterfall (Coban Sewu) can be accessed from two sides of the canyon. The most popular side is the Lumajang side. Below is a pinned location of the entrance goat to Tumpak Sewu viewpoint, which is where the trail down into the canyon is also located.</p>\r\n\r\n<p>As you can see on the map below, there is a homestay called,&nbsp;<strong><em>Edi Travel Home Stay</em></strong>. This is where we stayed for two nights as we explored Tumpak Sewu, Goa Tetes, Kabut Pelangi, Coban Sriti and Kapas Biru all in two days!</p>\r\n\r\n<p>If you need to contact Edi Travel Home Stay to make a booking you can message Mas Yanto on Whatsapp: +62 853 3123 8963</p>\r\n\r\n<p>Tumpak Sewu is almost a five-hour drive from Surabaya but only a couple of hours from Malang. The roads out here are quite stressful to drive on because the trucks are transporting their loads to and from the mines and they take up a lot of the road. I was run off the road once and had to concentrate really hard to get us there safely. On a bike, it is a bit easier to pass by the trucks.</p>\r\n\r\n<p>I highly suggest staying two nights because there are more than five epic waterfalls all within a short distance in this area.</p>'),
(20, 'Tanjung Papuma', 2, 4, '8,26,27', 'Papuma Beach is a white sand beach with amazing crystal clear blue water! Just around the corner is Payangan Beach, an epic black sand beach with lots of hill viewpoints. Both of these beaches can be visited in one day and are a great way to explore the coastline of East Java.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7893.401791841375!2d113.55159292423966!3d-8.431005375748196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd682a6a4b5cd8d%3A0xb9c242f3a09e2d2e!2sPapuma%20Beach!5e0!3m2!1sen!2sid!4v1577764569388!5m2!1sen!2sid', '<h1>PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA</h1>\r\n\r\n<p><img alt=\"PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536-600x337.jpg.optimal.jpg 600w\" height=\"506\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0536-600x337.jpg.optimal.jpg 600w\" width=\"900\" /></p>\r\n\r\n<p>Papuma Beach is a white sand beach with amazing crystal clear blue water! Just around the corner is Payangan Beach, an epic black sand beach with lots of hill viewpoints. Both of these beaches can be visited in one day and are a great way to explore the coastline of East Java.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>PAPUMA BEACH IN EAST JAVA</h4>\r\n\r\n<p>We arrived at Papuma Beach entrance on the recommendation of a local friend. We had no idea it would be so popular. We had to pay 45,000 rupiah, which is only about $3.50 USD but one of the more expensive tickets we paid throughout our time in East Java. There was no parking fee inside.</p>\r\n\r\n<p>The beach itself is beautiful. It has those crystal clear waters and white sand combinations that people dream of on vacations.</p>\r\n\r\n<p>Colorful boats line the beach, waiting to take tourists on a voyage around the nearby rocky islets.</p>\r\n\r\n<p>The rocky islets make a great backdrop for a fun day of hanging out in the sun with that refreshing blue water waiting there for you all day! It is a popular spot with a huge carpark and multiple restaurants. It is not for people looking to have a private beach type of experience. It would be perfect for a family who prioritizes facilities, restaurants, and ease of access over the adventure.</p>\r\n\r\n<p>We had a meal for a few dollars in one of the cafes then hung out on the beach for a bit before heading over to explore Payangan Beach.</p>\r\n\r\n<p><img alt=\"papuma beach payangan beach\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539-300x133.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539-600x266.jpg.optimal.jpg 600w\" height=\"399\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539-300x133.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-0539-600x266.jpg.optimal.jpg 600w\" width=\"900\" /></p>\r\n\r\n<p><img alt=\"papuma beach payangan beach\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-.jpg.optimal.jpg 786w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach--262x300.jpg.optimal.jpg 262w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach--600x687.jpg.optimal.jpg 600w\" height=\"660\" sizes=\"(max-width: 576px) 100vw, 576px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach-.jpg.optimal.jpg 786w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach--262x300.jpg.optimal.jpg 262w, https://s29081.pcdn.co/wp-content/uploads/2018/10/papuma-beach-payangan-beach--600x687.jpg.optimal.jpg 600w\" width=\"576\" /></p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>PAYANGAN BEACH AND VIEWPOINTS IN EAST JAVA</h4>\r\n\r\n<p>We headed out of Papuma and then straight towards Payangan Beach. The entrance here was $1 USD but parking was another $1 USD. The beach is black sand and can get pretty rough. None of the locals were swimming and when we did a local man came down and told me &lsquo;he hopes I will be safe&rsquo;. We were but this beach is probably not for nervous swimmers.</p>\r\n\r\n<p>There are several hill viewpoints here such as Teluk Love and Bukit Domba. We decided to climb up Bukit Domba, which was right next to the black sand beach. The entry was $1 USD and it was a bit full on with huts and paths everywhere. It wasn&rsquo;t very natural at all but still cool to get up there for a good view of the region. There are lots of spot for photos out over the beach and huts to relax in. It seemed to be a hotspot for local couples to hang out and chat in the huts.</p>\r\n\r\n<p>After climbing up the viewpoint in the hot sun, we headed back to refresh in the waters on the black sand beach.</p>\r\n\r\n<h4><img alt=\"PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553-600x337.jpg.optimal.jpg 600w\" height=\"506\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553-300x169.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0553-600x337.jpg.optimal.jpg 600w\" width=\"900\" /></h4>\r\n\r\n<h4><img alt=\"PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558-300x202.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558-600x404.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558-272x182.jpg.optimal.jpg 272w\" height=\"606\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558-300x202.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558-600x404.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-0558-272x182.jpg.optimal.jpg 272w\" width=\"900\" /></h4>\r\n\r\n<h4><img alt=\"PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539-300x200.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539-600x400.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539-272x182.jpg.optimal.jpg 272w\" height=\"600\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539-300x200.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539-600x400.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01539-272x182.jpg.optimal.jpg 272w\" width=\"900\" /></h4>\r\n\r\n<h4><img alt=\"PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01547.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01547.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01547-200x300.jpg.optimal.jpg 200w\" height=\"675\" sizes=\"(max-width: 450px) 100vw, 450px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01547.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01547.jpg.optimal.jpg 600w, https://s29081.pcdn.co/wp-content/uploads/2018/10/PAPUMA-BEACH-AND-PAYANGAN-BEACH-IN-EAST-JAVA-01547-200x300.jpg.optimal.jpg 200w\" width=\"450\" /></h4>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>WHERE ARE PAPUMA AND PAYANGAN BEACH</h4>\r\n\r\n<p>Papuma Beach and Payangan Beach are down in the southern area of East Java. We drove for just over three hours from the Tumpak Sewu area to reach the beaches. The drive was pretty beautiful along the way through rice fields and huge open farm landscapes along tree-lined roads.</p>\r\n\r\n<p>Papuma Beach is the spot beach pinned below to the right is Payangan Beach, which is only a 5-minute drive from Papuma Beach.</p>');
INSERT INTO `destinations` (`id_destination`, `destination_name`, `id_category`, `id_city`, `gallery`, `overview`, `map`, `information`) VALUES
(21, 'Tabuhan Island', 2, 5, '9,4', 'The Banyuwangi region of East Java is home to some of the best beaches Java has to offer. I did an island hopping tour to three locations with Bangsring Underwater tours. We visited Tabuhan Island, Menjangan Island and Rumah Apung.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31605.024955481007!2d114.44360146881967!3d-8.037221679598698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd13f6c4582f3d1%3A0x5a182cafde666aea!2sPulau%20Tabuan!5e0!3m2!1sen!2sid!4v1578320837062!5m2!1sen!2sid', '<article data-article-type=\"\" id=\"post-16297\">\r\n<h1>TABUHAN ISLAND &amp; MENJANGAN ISLAND BOAT TOUR</h1>\r\n\r\n<p><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584-300x181.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584-600x362.jpg.optimal.jpg 600w\" height=\"543\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584.jpg.optimal.jpg 900w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584-300x181.jpg.optimal.jpg 300w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-0584-600x362.jpg.optimal.jpg 600w\" width=\"900\" /></p>\r\n\r\n<p>The Banyuwangi region of East Java is home to some of the best beaches Java has to offer. I did an island hopping tour to three locations with Bangsring Underwater tours. We visited Tabuhan Island, Menjangan Island and Rumah Apung.</p>\r\n\r\n<h4>MENJANGAN ISLAND</h4>\r\n\r\n<p>Menjangan Island is actually accessible quite easily from West Bali National Park. We could have swum over to Bali from Menjangan Island, which was pretty cool.&nbsp; The island is 3,800Ha and it&rsquo;s Savannah terrain is home to unique Javan Rusa deer known as&nbsp; &lsquo;Menjangan&rsquo;, which is how the island received its name.</p>\r\n\r\n<p>There are a couple of beaches on Menjangan with white sand and clear water. There are many great spots to relax on this tropical island and with warm crystal clear water it is perfect. However, the best activities&nbsp;are in the water. The snorkeling and diving at Menjangan Island are great! Corl gardens and extensive marine life make it a perfect spot for snorkelers and scuba divers.</p>\r\n\r\n<p>You need to pay the entrance fee here which was $26 USD per person. These photos below were taken while sitting on Menjangan Island but are actually a little sandbar I swam to 50m away from Menjangan Island.</p>\r\n\r\n<p><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-.jpg.optimal.jpg 706w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java--235x300.jpg.optimal.jpg 235w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java--600x765.jpg.optimal.jpg 600w\" height=\"584\" sizes=\"(max-width: 458px) 100vw, 458px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-.jpg.optimal.jpg 706w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java--235x300.jpg.optimal.jpg 235w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java--600x765.jpg.optimal.jpg 600w\" width=\"458\" /></p>\r\n\r\n<p><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2-600x750.jpg.optimal.jpg 600w\" height=\"570\" sizes=\"(max-width: 456px) 100vw, 456px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-2-600x750.jpg.optimal.jpg 600w\" width=\"456\" /></p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>TABUHAN ISLAND</h4>\r\n\r\n<p>Tabuhan Island was my favorite part of the whole trip. This island was completely empty except for us. The water was incredible. It looked like drinking water it was so clear with the sun&nbsp;making beautiful patterns&nbsp;on the sand beneath the surface.</p>\r\n\r\n<p>Tabuhan is only 5 hectares large but as you can see the reef below the surface is actually quite large in itself. In just fifteen minutes you can circle the entire island.</p>\r\n\r\n<p>Tabuhan Islands got its name from the Banyuwanghi term &lsquo;Teabuhan&rsquo;, which means &lsquo;music&rsquo;. It&rsquo;s because the wind is very loud on this island, which is why it is called the noisy island. This is why it is a popular spot for kitesurfing due to the consistent wind making perfect conditions for kite surfers.</p>\r\n\r\n<p>The snorkeling here was great with lots of fish, corals, large clams and a huge drop off all the way around the edge of the reef. My favorite part of this island was seeing all the volcanoes in Banyuwangi looming in the background.</p>\r\n\r\n<p>I think you can organize a boat to take you out and back to Tabuhan for 500,000 rupiahs. We did the entire three spots for 2.1 million rupiahs but not sure if we could have gotten it lower or not. That included our&nbsp; 300,000 rupiah fee at Menjangan Island.</p>\r\n\r\n<h4><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3.jpg.optimal.jpg 695w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3-232x300.jpg.optimal.jpg 232w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3-600x777.jpg.optimal.jpg 600w\" height=\"594\" sizes=\"(max-width: 459px) 100vw, 459px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3.jpg.optimal.jpg 695w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3-232x300.jpg.optimal.jpg 232w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-3-600x777.jpg.optimal.jpg 600w\" width=\"459\" /></h4>\r\n\r\n<h4><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4.jpg.optimal.jpg 606w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4-202x300.jpg.optimal.jpg 202w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4-600x891.jpg.optimal.jpg 600w\" height=\"675\" sizes=\"(max-width: 454px) 100vw, 454px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4.jpg.optimal.jpg 606w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4-202x300.jpg.optimal.jpg 202w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-4-600x891.jpg.optimal.jpg 600w\" width=\"454\" /></h4>\r\n\r\n<h4><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5.jpg.optimal.jpg 714w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5-238x300.jpg.optimal.jpg 238w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5-600x756.jpg.optimal.jpg 600w\" height=\"581\" sizes=\"(max-width: 461px) 100vw, 461px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5.jpg.optimal.jpg 714w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5-238x300.jpg.optimal.jpg 238w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-5-600x756.jpg.optimal.jpg 600w\" width=\"461\" /></h4>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>BANGSRING UNDERWATER SNORKELING SANCTUARY</h4>\r\n\r\n<p>The final stop of the day was Bangsring Underwater Rumah Apung. It is a floating dock that is surrounded by fish. There are small nets you can swim in here. Most were empty but some had small reef sharks in them. They told us they get released when they are older but we haven&rsquo;t been able to confirm that. We did believe them, however. This is because most of the attraction here is swimming away from the nets with wild fish in the coral gardens and reefs in the surrounding areas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>BOOKING BANGSRING UNDERWATER TOUR</h4>\r\n\r\n<p>This was the most expensive thing I did in East Java. Once I heard about Tabuhan Island,&nbsp; I really wanted to go. Unfortunately, there were no group tours we could join so we had to rent our own boat that worked out to about $75 each for me and my friend. Normally that is way too much but I get stuck on an idea and have to go through with it. The same boat we rented can take an entire group so it would normally be about $15 if you had a group of ten.</p>\r\n\r\n<p>I booked with Bangsring Underwater Tour through this Whatsapp number:&nbsp;<em>0815-5941-059</em></p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>ADVENTURE BAG FROM TABUHAN ISLAND</h4>\r\n\r\n<p>This is an adventure bag. It is full of trash. Every time I go on an adventure I collect one adventure bag full of trash. It&rsquo;s my small way of saying thanks to mother nature for allowing me to enjoy her beautiful creations. If we have time to go on an adventure we have time to collect an adventure bag on the way back out of the trail once we have enjoyed the waterfall, the hike or the beach. Adventure hard!</p>\r\n\r\n<article data-article-type=\"\" id=\"post-16015\">\r\n<p>Tag your #ADVENTUREBAG on Instagram and mention @adventurebag in your Instagram stories to be featured and inspire your friends, family, and followers to join the movement!</p>\r\n\r\n<p><img alt=\"tabuhan island menjangan island east java\" data-lazy-type=\"image\" data-src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101.jpg.optimal.jpg\" data-srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101-600x750.jpg.optimal.jpg 600w\" height=\"556\" sizes=\"(max-width: 445px) 100vw, 445px\" src=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101.jpg.optimal.jpg\" srcset=\"https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101.jpg.optimal.jpg 720w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101-240x300.jpg.optimal.jpg 240w, https://s29081.pcdn.co/wp-content/uploads/2018/10/tabuhan-island-menjangan-island-east-java-6101-600x750.jpg.optimal.jpg 600w\" width=\"445\" /></p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4>MORE EAST JAVA TRAVEL GUIDES</h4>\r\n\r\n<p><strong>The Ultimate Guide:</strong>&nbsp;<a href=\"https://www.journeyera.com/east-java-things-to-do/\" title=\"15 AWESOME THINGS TO DO IN EAST JAVA, INDONESIA\">15 AWESOME THINGS TO DO IN EAST JAVA</a></p>\r\n\r\n<p><strong>Ijen Crater Trek:</strong>&nbsp;<a href=\"https://www.journeyera.com/ijen-crater-trekking/\" rel=\"noopener\" target=\"_blank\" title=\"IJEN CRATER TREK AND THE BLUE FLAME IN EAST JAVA\">IJEN CRATER TREK AND THE BLUE FLAME</a></p>\r\n\r\n<p><strong>Mount Bromo without a guide:</strong>&nbsp;<a href=\"https://www.journeyera.com/mount-bromo-without-tour-sunrise-hike/\" rel=\"noopener\" target=\"_blank\" title=\"MOUNT BROMO WITHOUT A TOUR: SUNRISE VIEWPOINTS, HIKES, MAPS\">MOUNT BROMO WITHOUT A TOUR: SUNRISE VIEWPOINTS, HIKES, MAPS</a></p>\r\n\r\n<p><strong>Madakaripura Waterfall:</strong>&nbsp;<a href=\"https://www.journeyera.com/madakaripura-waterfall-probollingo/\" rel=\"noopener\" target=\"_blank\" title=\"MADAKARIPURA WATERFALL IN PROBOLLINGO, EAST JAVA\">MADAKARIPURA WATERFALL</a></p>\r\n\r\n<p><strong>Island hopping in East Java:</strong>&nbsp;<a href=\"https://www.journeyera.com/tabuhan-island-menjangan-island-tour/\" rel=\"noopener\" target=\"_blank\" title=\"TABUHAN ISLAND &amp; MENJANGAN ISLAND BOAT TOUR\">TABUHAN ISLAND &amp; MENJANGAN ISLAND BOAT TOUR</a></p>\r\n\r\n<p><strong>East Java Beaches:</strong>&nbsp;<a href=\"https://www.journeyera.com/papuma-beach-payangan-beach/\" rel=\"noopener\" target=\"_blank\" title=\"PAPUMA BEACH AND PAYANGAN BEACH IN EAST JAVA\">PAPUMA BEACH AND PAYANGAN BEACH</a></p>\r\n\r\n<p><strong>Tumpak Sewu Waterfall:</strong>&nbsp;<a href=\"https://www.journeyera.com/tumpak-sewu-waterfall-lumajang/\" rel=\"noopener\" target=\"_blank\" title=\"TUMPAK SEWU WATERFALL IN LUMAJANG, EAST JAVA\">TUMPAK SEWU WATERFALL IN LUMAJANG</a></p>\r\n</article>\r\n\r\n<h2>WHAT CAMERA GEAR DO I USE?</h2>\r\n\r\n<ul>\r\n	<li><strong>Mirrorless Camera</strong>:&nbsp;<a data-amzn-asin=\"B07STH7C9F\" href=\"https://www.amazon.com/gp/product/B07STH7C9F/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B07STH7C9F&amp;linkCode=as2&amp;tag=journeyera02-20&amp;linkId=fbb47cce9e12336ec32792279084a99d\" rel=\"nofollow noopener\" target=\"_blank\">Sony A7iii</a></li>\r\n	<li><strong>Drone:</strong>&nbsp;<a data-amzn-asin=\"B07GDC5X74\" href=\"https://www.amazon.com/gp/product/B07GDC5X74/ref=as_li_tl?ie=UTF8&amp;tag=journeyera02-20&amp;camp=1789&amp;creative=9325&amp;linkCode=as2&amp;creativeASIN=B07GDC5X74&amp;linkId=9bbed279747ac92810e37dbbf30e371c\" rel=\"nofollow noopener\" target=\"_blank\">Dji Mavic Pro 2</a></li>\r\n	<li><strong>Landscape Lens:</strong>&nbsp;<a data-amzn-asin=\"B00NGTN25C\" href=\"https://www.amazon.com/gp/product/B00NGTN25C/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&amp;tag=journeyera02-20&amp;camp=1789&amp;creative=9325&amp;linkCode=as2&amp;creativeASIN=B00NGTN25C&amp;linkId=a5cabb8690877989bf83d7eb84121d0d\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">Sony F4 16-35mm</a></li>\r\n	<li><strong>Favorite Lens:</strong>&nbsp;<a data-amzn-asin=\"B076V9P58R\" href=\"https://www.amazon.com/gp/product/B076V9P58R/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B076V9P58R&amp;linkCode=as2&amp;tag=journeyera02-20&amp;linkId=ac75ffa2d478de33b7dfc7641b4763de\" rel=\"nofollow noopener\" target=\"_blank\">Sony F4 24-105mm</a></li>\r\n	<li><strong>GoPro:</strong>&nbsp;<a data-amzn-asin=\"B07GDGZCCH\" href=\"https://www.amazon.com/gp/product/B07GDGZCCH/ref=as_li_tl?ie=UTF8&amp;tag=journeyera02-20&amp;camp=1789&amp;creative=9325&amp;linkCode=as2&amp;creativeASIN=B07GDGZCCH&amp;linkId=bce041ec0c5b690b3a4bc869f1271f69\" rel=\"nofollow noopener\" target=\"_blank\">GoPro Hero 7</a></li>\r\n	<li><strong>GoPro Pole:</strong>&nbsp;<a data-amzn-asin=\"B00MYJENXU\" href=\"https://www.amazon.com/gp/product/B00MYJENXU/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B00MYJENXU&amp;linkCode=as2&amp;tag=journeyera02-20&amp;linkId=0dd05cea7ae844944ade0c314ceecc11\" rel=\"nofollow noopener\" target=\"_blank\">Sandmarc (Long) GoPro pole</a></li>\r\n	<li><strong>Circular Polarizer:</strong>&nbsp;<a data-amzn-asin=\"B003JUJ6RQ\" href=\"https://www.amazon.com/gp/product/B003JUJ6RQ/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&amp;tag=journeyera02-20&amp;camp=1789&amp;creative=9325&amp;linkCode=as2&amp;creativeASIN=B003JUJ6RQ&amp;linkId=e0ed61133ae5fad854d577d1fe9b8bec\" rel=\"nofollow noopener noreferrer\" target=\"_blank\">Hoya 72mm Circular PL Polarizer</a></li>\r\n	<li><strong>Power Bank:&nbsp;</strong><a data-amzn-asin=\"B00Z7SOICG\" href=\"https://www.amazon.com/gp/product/B00Z7SOICG/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B00Z7SOICG&amp;linkCode=as2&amp;tag=journeyera02-20&amp;linkId=d8b7a8e4a7a59931cfeffe512beedd4d\" rel=\"nofollow noopener\" target=\"_blank\">Anker Powerbank</a></li>\r\n	<li><strong>Camera Backpack:&nbsp;</strong><a data-amzn-asin=\"B07RXGL8V5\" href=\"https://www.amazon.com/gp/product/B07RXGL8V5/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B07RXGL8V5&amp;linkCode=as2&amp;tag=journeyera02-20&amp;linkId=f3f6065da77e723a25ac6f53fcd66d6a\" rel=\"nofollow noopener\" target=\"_blank\">WANDRD PRVKE 31L Backpack</a></li>\r\n	<li><strong>Iphone Wide-Angle Lens:</strong>&nbsp;<a data-amzn-asin=\"B074KNX36N\" href=\"https://www.amazon.com/gp/product/B074KNX36N/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B074KNX36N&amp;linkCode=as2&amp;tag=journeyera02-20&amp;linkId=4300f5b633354e36b79686050db1bc6d\" rel=\"nofollow noopener\" target=\"_blank\">Moment Phone Lens</a></li>\r\n	<li><strong>Flexible Tripod:</strong>&nbsp;<a data-amzn-asin=\"B074WC9YKL\" href=\"https://www.amazon.com/gp/product/B074WC9YKL/ref=as_li_tl?ie=UTF8&amp;tag=journeyera02-20&amp;camp=1789&amp;creative=9325&amp;linkCode=as2&amp;creativeASIN=B074WC9YKL&amp;linkId=ed1ffc55207b17c97cc2fc5f3c32b245\" rel=\"nofollow noopener\" target=\"_blank\">Joby GorillaPod</a></li>\r\n</ul>\r\n</article>');

-- --------------------------------------------------------

--
-- Table structure for table `destination_activities`
--

CREATE TABLE `destination_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_destination` tinyint(4) NOT NULL,
  `id_activities` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_activities`
--

INSERT INTO `destination_activities` (`id`, `id_destination`, `id_activities`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 5, 1),
(5, 5, 2),
(6, 6, 2),
(7, 6, 3),
(16, 20, 4),
(17, 20, 2),
(18, 21, 4),
(19, 21, 2),
(20, 21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `destination_categories`
--

CREATE TABLE `destination_categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gallery` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_categories`
--

INSERT INTO `destination_categories` (`id_category`, `category_name`, `id_gallery`) VALUES
(1, 'Mountain', 12),
(2, 'Beach', 14),
(3, 'Waterfall', 13),
(4, 'City', 15),
(5, 'Hotel', 33),
(6, 'Airport', 32),
(7, 'Restaurant', 34);

-- --------------------------------------------------------

--
-- Table structure for table `detail_itinerary`
--

CREATE TABLE `detail_itinerary` (
  `id_detail` int(10) UNSIGNED NOT NULL,
  `id_itinerary` tinyint(4) NOT NULL,
  `id_destination` tinyint(4) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_itinerary`
--

INSERT INTO `detail_itinerary` (`id_detail`, `id_itinerary`, `id_destination`, `time_start`, `time_end`, `caption`) VALUES
(1, 1, 2, '10:00:00', '12:00:00', 'From juanda airport'),
(2, 1, 1, '12:00:00', '17:00:00', 'Arrive to hotel'),
(3, 1, 1, '17:00:00', '17:00:00', 'Break day'),
(4, 2, 3, '08:00:00', '09:00:00', 'Break fast'),
(5, 2, 4, '10:00:00', '17:00:00', 'Trip to bromo'),
(6, 2, 6, '18:00:00', '20:00:00', 'Go to tumpaksewu'),
(19, 2, 20, '21:00:00', '22:00:00', 'Papuma beach'),
(20, 7, 2, '10:00:00', '10:00:00', 'Pickup on airport'),
(21, 7, 3, '11:00:00', '12:00:00', 'Lunch'),
(22, 7, 4, '13:00:00', '17:00:00', 'Trip to bromo'),
(23, 7, 1, '17:00:00', '17:00:00', 'Back to hotel'),
(24, 7, 3, '19:00:00', '19:00:00', 'Dinner'),
(25, 8, 5, '08:00:00', '18:00:00', 'Hiking to ijen mountain'),
(26, 8, 2, '18:00:00', '18:00:00', 'Back to airport'),
(27, 9, 2, '07:00:00', '10:00:00', 'From juanda airport'),
(28, 9, 3, '10:00:00', '12:00:00', 'Lunch'),
(29, 9, 4, '13:00:00', '17:00:00', ' Trip to bromo'),
(30, 9, 1, '18:00:00', '20:00:00', 'Istirahat'),
(31, 10, 5, '08:00:00', '17:00:00', 'Hiking to ijen'),
(32, 11, 2, '07:00:00', '10:00:00', 'Waiting for us'),
(33, 11, 4, '11:00:00', '17:00:00', 'To bromo'),
(34, 11, 1, '17:00:00', '20:00:00', 'Go to hotel'),
(35, 12, 5, '07:00:00', '12:00:00', 'Hiking to ijen'),
(36, 12, 6, '13:00:00', '22:00:00', 'Waterfall');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(10) UNSIGNED NOT NULL,
  `img` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `img`, `id_category`) VALUES
(1, '70089.jpg', 1),
(2, '70143.jpg', 8),
(3, '70152.jpg', 2),
(4, '70172.jpg', 4),
(5, '70202.png', 9),
(6, '70222.jpg', 11),
(7, '70252.jpg', 10),
(8, '70260.jpg', 3),
(9, '70267.jpg', 5),
(10, '70874.jpg', 12),
(11, '70914.jpeg', 12),
(12, '72396.png', 13),
(13, '72407.png', 13),
(14, '72417.png', 13),
(15, '72431.png', 13),
(16, '78376.png', 1),
(17, '78392.jpg', 1),
(18, '78846.jpg', 2),
(19, '78865.jpg', 2),
(23, '79749.jpg', 7),
(24, '79758.jpg', 7),
(25, '79797.jpg', 7),
(26, '64524.jpg', 3),
(27, '64533.jpg', 3),
(28, '28131.jpg', 14),
(29, '28150.JPG', 14),
(30, '28207.jpg', 15),
(31, '28332.jpg', 15),
(32, '77309.png', 13),
(33, '77318.png', 13),
(34, '77329.png', 13);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id_category`, `category_name`) VALUES
(1, 'Bromo'),
(2, 'Ijen'),
(3, 'Papuma'),
(4, 'Menjangan'),
(5, 'Tabuhan'),
(6, 'Madakaripura'),
(7, 'Tumpak Sewu'),
(8, 'Bali'),
(9, 'Kawah Wurung'),
(10, 'Merbabu'),
(11, 'Lombok'),
(12, 'Categories for package'),
(13, 'Icons'),
(14, 'Baratha'),
(15, 'Baratha Family');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id_hotel` int(10) UNSIGNED NOT NULL,
  `hotel_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gallery` tinyint(4) NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id_hotel`, `hotel_name`, `id_gallery`, `map`, `overview`) VALUES
(1, 'Baratha Hotel', 28, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63231.78773425616!2d113.81177611725599!3d-7.896454079568726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6dd2769f1e9a5%3A0xdf0667af9e288f3e!2sBaratha%20Hotel%20%26%20Coffee!5e0!3m2!1sen!2sid!4v1578128970387!5m2!1sen!2sid', 'Baratha Hotel');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_when_tour`
--

CREATE TABLE `hotel_when_tour` (
  `id_hotel_tour` int(10) UNSIGNED NOT NULL,
  `id_room_hotel` tinyint(4) NOT NULL,
  `id_detail_itinerary` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_when_tour`
--

INSERT INTO `hotel_when_tour` (`id_hotel_tour`, `id_room_hotel`, `id_detail_itinerary`) VALUES
(1, 1, 2),
(2, 1, 3),
(7, 1, 23),
(8, 1, 30),
(9, 1, 34);

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `id_informations` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id_informations`, `text`, `type`) VALUES
(1, 'All local land transfers including airport transfers', '0'),
(2, 'All accommodations', '0'),
(3, 'All accommodations’ breakfasts', '0'),
(4, 'Entrance fees to National Park ( Waterfall, Hot springs ).', '0'),
(5, '4WD or Motorcycle for Mount Bromo.', '0'),
(6, 'Ijen guide hike down the crater and Hike to King Kong Hill.', '0'),
(7, 'Gask Mask and Torch.', '0'),
(8, 'Mineral Water During the Tour.', '0'),
(9, 'Travel T-Shirt', '0'),
(10, 'Meals as indicated on the itinerary', '0'),
(11, 'Air tickets*', '1'),
(12, 'Paragliding ( 400.000 )', '1'),
(13, 'Travel insurance*', '1'),
(14, 'Indonesian VISA', '1'),
(15, 'Horse ride at Mount Bromo ( 150.000 Idr )', '1'),
(16, 'Tips', '1'),
(17, 'All expenses of a personal nature', '1'),
(18, 'Light-weight, breathable hiking shirts and long trousers', '2'),
(19, 'Waterproof jacket and trousers', '2'),
(20, 'Warm jacket (fleece, wool or down/synthetic)', '2'),
(21, 'Thermal top and bottom', '2'),
(22, 'Warm hat and gloves', '2'),
(23, 'Sun protection (hat, sunglasses and sunscreen)', '2'),
(24, 'Bug repellent', '2'),
(25, 'Sturdy, broken in hiking shoes or boots', '2'),
(26, 'Swimsuit and small towel', '2'),
(27, 'Head torch', '2'),
(28, 'Small backpack for carrying all your personal gear', '2');

-- --------------------------------------------------------

--
-- Table structure for table `itinerary`
--

CREATE TABLE `itinerary` (
  `id_itinerary` int(10) UNSIGNED NOT NULL,
  `id_tour` tinyint(4) NOT NULL,
  `day` tinyint(4) NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itinerary`
--

INSERT INTO `itinerary` (`id_itinerary`, `id_tour`, `day`, `overview`) VALUES
(1, 1, 1, 'Overview1'),
(2, 1, 2, 'Overview'),
(7, 4, 1, 'DAY 01 SURABAYA AIRPORT – CEMORO LAWANG'),
(8, 4, 2, 'Start trip day 2'),
(9, 5, 1, 'Trip day 1'),
(10, 5, 2, 'Trip day 2'),
(11, 6, 1, 'Overview1'),
(12, 6, 2, 'Overview1');

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
(1, '2019_09_27_022621_crete_tour_categories_table', 1),
(2, '2019_09_27_032755_create_tour_type', 1),
(3, '2019_09_27_033010_create_tour_durations', 1),
(4, '2019_09_27_033113_create_gallery', 1),
(5, '2019_09_27_033257_create_gallery_categories', 1),
(6, '2019_09_27_141249_create_province', 1),
(7, '2019_09_27_141522_create_city', 1),
(8, '2019_09_27_141721_create_destination_categories', 1),
(9, '2019_09_27_142000_create_destinations', 1),
(10, '2019_09_27_142641_create_hotels', 1),
(11, '2019_09_27_142831_create_tour_packages', 1),
(12, '2019_09_27_143209_create_price_categories', 1),
(13, '2019_09_27_143340_create_tour_price', 1),
(14, '2019_09_27_143510_create_itinerary', 1),
(15, '2019_09_27_143659_create_detail_itinerary', 1),
(16, '2019_09_27_144053_create_hotel_when_tour', 1),
(17, '2019_09_27_144154_create_users', 1),
(18, '2019_09_27_144337_create_travel_tips', 1),
(19, '2019_09_27_144710_create_tags', 1),
(20, '2019_09_27_144806_create_travel_tips_tags', 1),
(21, '2019_11_05_131136_create_room_hotels', 1),
(22, '2019_12_03_080931_create_admin_table', 1),
(23, '2019_12_04_115832_create_payment', 1),
(24, '2019_12_04_125545_create_bookings', 1),
(25, '2019_12_22_094613_create_informations', 1),
(26, '2019_12_29_084629_create_tour_informations', 1),
(27, '2019_12_31_030945_create_activities', 2),
(28, '2019_12_31_031858_create_destination_activities', 3),
(29, '2019_12_26_051526_create_calculation', 4),
(30, '2020_01_05_144629_create_tour_packages', 5),
(31, '2020_01_11_041554_create_bank_option', 6),
(32, '2020_01_11_054521_create_notif_admin', 7),
(33, '2020_01_11_055624_create_notif_admin', 8),
(34, '2020_01_11_104304_create_notif_user', 9),
(35, '2020_01_12_052319_create_review', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notif_admin`
--

CREATE TABLE `notif_admin` (
  `id_notif` int(10) UNSIGNED NOT NULL,
  `id_payment` int(11) NOT NULL,
  `status` enum('11','22','222') COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notif_admin`
--

INSERT INTO `notif_admin` (`id_notif`, `id_payment`, `status`, `view`) VALUES
(6, 5, '11', '1'),
(7, 7, '222', '1'),
(8, 7, '222', '1'),
(9, 8, '11', '1'),
(10, 8, '11', '1'),
(11, 9, '222', '1'),
(12, 9, '222', '1');

-- --------------------------------------------------------

--
-- Table structure for table `notif_user`
--

CREATE TABLE `notif_user` (
  `id_notif` int(10) UNSIGNED NOT NULL,
  `id_payment` int(11) NOT NULL,
  `status` enum('11','1','22','222','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notif_user`
--

INSERT INTO `notif_user` (`id_notif`, `id_payment`, `status`, `view`, `datetime`) VALUES
(8, 5, '1', '1', '2020-01-12 08:09:25'),
(9, 7, '222', '1', '2020-01-12 08:32:45'),
(10, 7, '2', '1', '2020-01-12 08:34:14'),
(11, 8, '11', '1', '2020-01-12 22:48:02'),
(12, 8, '1', '1', '2020-01-12 22:49:19'),
(13, 9, '222', '1', '2020-01-12 22:50:23'),
(14, 9, '2', '1', '2020-01-12 22:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(10) UNSIGNED NOT NULL,
  `id_booking` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id_payment`, `id_booking`, `nominal`, `payment_date`, `attachment`) VALUES
(5, 1, 1350000, '2020-01-12 08:08:57', '91337.jpg'),
(7, 1, 1350000, '2020-01-12 08:33:35', '92815.jpg'),
(8, 2, 1800000, '2020-01-12 22:48:50', '44130.jpg'),
(9, 2, 1800000, '2020-01-12 22:50:52', '44252.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id_province` int(10) UNSIGNED NOT NULL,
  `province_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_province`, `province_name`) VALUES
(1, 'East Java'),
(2, 'West Java');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(10) UNSIGNED NOT NULL,
  `id_tour` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rate` tinyint(4) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_tour`, `id_user`, `rate`, `comment`, `datetime`, `status`) VALUES
(2, 1, 1, 4, 'Very good tour package! Absolutely', '2020-01-12 12:00:00', '1'),
(3, 1, 1, 5, 'Good. What a trip! Good job brate', '2020-01-12 13:41:55', '1'),
(4, 1, 1, 5, 'Cant wait to book this trip again. I love it! Realy!!', '2020-01-12 13:43:07', '1'),
(5, 1, 1, 3, 'I really enjoy this trip. But i cant eat bakso cause i have problem with my stomach', '2020-01-12 13:46:23', '1'),
(6, 1, 1, 2, 'Not bad, but i fell good', '2020-01-12 22:51:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room_hotels`
--

CREATE TABLE `room_hotels` (
  `id_room_hotel` int(10) UNSIGNED NOT NULL,
  `id_hotel` tinyint(4) NOT NULL,
  `room_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_hotels`
--

INSERT INTO `room_hotels` (`id_room_hotel`, `id_hotel`, `room_name`, `gallery`) VALUES
(1, 1, 'Family Room', '30,31');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id_tag` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tag`, `tag_name`) VALUES
(1, 'Tips'),
(2, 'Holiday');

-- --------------------------------------------------------

--
-- Table structure for table `tour_categories`
--

CREATE TABLE `tour_categories` (
  `id_category` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gallery` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_categories`
--

INSERT INTO `tour_categories` (`id_category`, `category_name`, `id_gallery`) VALUES
(1, 'Foreigner Package', 10),
(2, 'Domestic Package', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tour_durations`
--

CREATE TABLE `tour_durations` (
  `id_duration` int(10) UNSIGNED NOT NULL,
  `day` tinyint(4) NOT NULL,
  `night` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_durations`
--

INSERT INTO `tour_durations` (`id_duration`, `day`, `night`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 3),
(5, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tour_informations`
--

CREATE TABLE `tour_informations` (
  `id_tour_information` int(10) UNSIGNED NOT NULL,
  `id_tour` tinyint(4) NOT NULL,
  `id_information` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_informations`
--

INSERT INTO `tour_informations` (`id_tour_information`, `id_tour`, `id_information`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 5),
(4, 1, 7),
(5, 1, 8),
(6, 1, 9),
(7, 1, 10),
(8, 1, 11),
(9, 1, 13),
(10, 1, 14),
(11, 1, 15),
(12, 1, 17),
(13, 1, 18),
(14, 1, 20),
(15, 1, 22),
(16, 1, 24),
(17, 1, 26),
(18, 1, 28),
(55, 4, 1),
(56, 4, 3),
(57, 4, 5),
(58, 4, 7),
(59, 4, 8),
(60, 4, 9),
(61, 4, 11),
(62, 4, 12),
(63, 4, 13),
(64, 4, 15),
(65, 4, 18),
(66, 4, 19),
(67, 4, 20),
(68, 4, 21),
(69, 4, 22),
(70, 4, 23),
(71, 4, 24),
(72, 4, 25),
(73, 4, 26),
(74, 4, 27),
(75, 4, 28),
(76, 5, 1),
(77, 5, 2),
(78, 5, 3),
(79, 5, 5),
(80, 5, 7),
(81, 5, 11),
(82, 5, 12),
(83, 5, 13),
(84, 5, 15),
(85, 5, 18),
(86, 5, 20),
(87, 5, 22),
(88, 5, 24),
(89, 6, 1),
(90, 6, 2),
(91, 6, 6),
(92, 6, 9),
(93, 6, 11),
(94, 6, 13),
(95, 6, 14),
(96, 6, 16),
(97, 6, 18),
(98, 6, 20),
(99, 6, 21),
(100, 6, 22),
(101, 6, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id_tour` int(10) UNSIGNED NOT NULL,
  `tour_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` tinyint(4) NOT NULL,
  `id_type` tinyint(4) NOT NULL,
  `id_duration` tinyint(4) NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gallery` tinyint(4) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` tinyint(4) NOT NULL,
  `meeting_point` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`id_tour`, `tour_name`, `id_category`, `id_type`, `id_duration`, `overview`, `id_gallery`, `price`, `sale`, `meeting_point`, `date_created`) VALUES
(1, 'Wonderfull trip Indonesia', 2, 1, 2, 'Be sure to have the camera fully charged as this East Java holiday is brimming with incredible scenery. Explore volcanoes calderas and turquoise crater lakes, travel by Car through the countryside and visit Hidden Waterfall and also highland coffee plantations. In addition, get a taste of Javanese culture with insightful tours and experiences. This retreat will bring you up close to two of the most majestic volcanic landscapes in the Indonesian Ring of Fires; Ijen crater and Mount Bromo. Be mesmerised by the electric blue flames of Ijen which can only be seen in the wee hours. Savour the beauty of the turquoise coloured acidic lake and witness the indomitable spirit of the miners as they battle the treacherous terrain to haul heavy loads of mined sulphur to make a living. Hop on a 4WD to catch the rising sun casting its first rays over the surreal landscape of Tigger Caldera. The fuming Mount Bromo rising from the flat volcanic sand bed of the gigantic caldera will be a sight to behold. The top of Mount Bromo can be reached via 253 concrete steps making it one of the most accessible active volcanos in the world. End the trip with a visit to Surabaya, home to many of the nation’s fiercest independence fighters and thus known to locals as Kota Pahlawan (City of Heroes).', 27, 1000000, 10, 'Juanda Airport', '2020-01-07'),
(4, 'Bromo Midnight Package', 1, 6, 2, 'This short retreat will bring you up close to two of the most majestic volcanic landscapes in the Indonesian Ring of Fires; Ijen crater and Mount Bromo. Be mesmerised by the electric blue flames of Ijen which can only be seen in the wee hours. Savour the beauty of the turquoise coloured acidic lake and witness the indomitable spirit of the miners as they battle the treacherous terrain to haul heavy loads of mined sulphur to make a living. Hop on a 4WD to catch the rising sun casting its first rays over the surreal landscape of Tigger Caldera. The fuming Mount Bromo rising from the flat volcanic sand bed of the gigantic caldera will be a sight to behold. The top of Mount Bromo can be reached via 253 concrete steps making it one of the most accessible active volcanos in the world. End the trip with a visit to Surabaya, home to many of the nation’s fiercest independence fighters and thus known to locals as Kota Pahlawan (City of Heroes).', 16, 1500000, 5, 'Juanda Airport', '2020-01-08'),
(5, 'Trip Bondowoso', 2, 2, 2, 'This short retreat will bring you up close to two of the most majestic volcanic landscapes in the Indonesian Ring of Fires; Ijen crater and Mount Bromo. Be mesmerised by the electric blue flames of Ijen which can only be seen in the wee hours. Savour the beauty of the turquoise coloured acidic lake and witness the indomitable spirit of the miners as they battle the treacherous terrain to haul heavy loads of mined sulphur to make a living. Hop on a 4WD to catch the rising sun casting its first rays over the surreal landscape of Tigger Caldera. The fuming Mount Bromo rising from the flat volcanic sand bed of the gigantic caldera will be a sight to behold. The top of Mount Bromo can be reached via 253 concrete steps making it one of the most accessible active volcanos in the world. End the trip with a visit to Surabaya, home to many of the nation’s fiercest independence fighters and thus known to locals as Kota Pahlawan (City of Heroes).', 5, 1000000, 5, 'Juanda', '2020-01-08'),
(6, 'Mastrip Package', 2, 2, 2, 'Overview', 10, 1500000, 5, 'Juanda', '2020-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tour_type`
--

CREATE TABLE `tour_type` (
  `id_type` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gallery` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tour_type`
--

INSERT INTO `tour_type` (`id_type`, `type_name`, `id_gallery`) VALUES
(1, 'Explore East Java', 5),
(2, 'Explore Bondowoso', 3),
(3, 'Mountain Vibes', 7),
(4, 'Beach Vibes', 6),
(5, 'Menjangan & Tabuhan Island', 9),
(6, 'Bromo Midnight', 1);

-- --------------------------------------------------------

--
-- Table structure for table `travel_tips`
--

CREATE TABLE `travel_tips` (
  `id_travel_tips` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` tinyint(4) NOT NULL,
  `id_gallery` tinyint(4) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insert_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_tips`
--

INSERT INTO `travel_tips` (`id_travel_tips`, `title`, `id_admin`, `id_gallery`, `content`, `permalink`, `insert_date`, `update_date`) VALUES
(1, 'My 25 Best Travel Tips After 10 Years of Traveling the World', 1, 4, '<p>After over ten years of traveling the world, I&rsquo;ve definitely learned my fair share of lessons. Like&nbsp;<a href=\"https://ordinarytraveler.com/tipsarticles/tips-for-keeping-your-valuables-safe-while-traveling\">the time I was robbed on a train</a>&nbsp;because I let my guard down or the time Scott and I showed up at the Bozeman Airport only to find that we no longer had a car rental.</p>\r\n\r\n<p>Some of these travel mishaps can be avoided and some of them are just a part of traveling. You simply cannot plan for everything. However, keeping a few important things in mind will make your travels much easier.</p>\r\n\r\n<p>I&rsquo;ve gathered the best travel tips and tricks to help you save money, avoid mistakes, and travel like a pro!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Table of Contents</p>\r\n\r\n<nav>&nbsp;</nav>\r\n\r\n<h2>My 25 Best Travel Tips</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"My 25 Best Travel Tips After 10 Years of Traveling the World\" data-lazy-type=\"image\" data-src=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Best-Travel-Tips.jpg\" data-srcset=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Best-Travel-Tips.jpg 473w, https://s32388.pcdn.co/wp-content/uploads/2015/06/Best-Travel-Tips-200x300.jpg 200w\" height=\"710\" sizes=\"(max-width: 473px) 100vw, 473px\" src=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Best-Travel-Tips.jpg\" srcset=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Best-Travel-Tips.jpg 473w, https://s32388.pcdn.co/wp-content/uploads/2015/06/Best-Travel-Tips-200x300.jpg 200w\" title=\"My 25 Best Travel Tips After 10 Years of Traveling the World\" width=\"473\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Be Flexible</h3>\r\n\r\n<p>We always plan for delays and try not to get upset when things inevitably go wrong. Patience is extremely important when traveling!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Make a List</h3>\r\n\r\n<p>About a week or so&nbsp;before each trip, I make a mental list of items I don&rsquo;t want to forget &mdash; which I WILL forget if I don&rsquo;t write them down. I&rsquo;ve learned that when I think of something, I need to write it down.</p>\r\n\r\n<p>&nbsp;Packing lists are essential! Read more:&nbsp;<a href=\"https://ordinarytraveler.com/carry-on-packing-guide-for-travel\">The Ultimate Carry-On Packing Guide</a>&nbsp;and our&nbsp;<a href=\"https://ordinarytraveler.com/road-trip-packing-guide\" rel=\"\">Road Trip Packing Guide</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Learn Common Phrases of the Local Language</h3>\r\n\r\n<p>A simple &ldquo;Please,&rdquo; &ldquo;Thank you,&rdquo; and &ldquo;I&rsquo;m sorry&rdquo; in the local language goes a long way. I also like to learn the word for beer, but that&rsquo;s just me.</p>\r\n\r\n<form action=\"https://ordinarytraveler.us2.list-manage.com/subscribe/post?u=4a43c4d427d3242e9379ff4fe&amp;id=f546598baa\" id=\"mc-embedded-subscribe-form\" method=\"post\" name=\"mc-embedded-subscribe-form\" novalidate=\"\" target=\"_blank\"><label for=\"mce-EMAIL\">Join 200,000+ Monthly Readers!</label><label>Sign up now to get insider tips &amp; travel guides delivered right to your inbox!<label><input id=\"mce-EMAIL\" name=\"EMAIL\" placeholder=\"email address\" required=\"\" type=\"email\" value=\"\" /></label></label>\r\n\r\n<p><label><label><input name=\"b_4a43c4d427d3242e9379ff4fe_f546598baa\" type=\"text\" value=\"\" /></label></label></p>\r\n\r\n<p><label><label><input id=\"mc-embedded-subscribe\" name=\"subscribe\" type=\"submit\" value=\"Subscribe\" /></label></label></p>\r\n</form>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Don&rsquo;t Forget an Extra Camera Battery (or Two)</h3>\r\n\r\n<p>Have you ever gotten to that epic sunset photo spot and realized your camera battery is dead and you don&rsquo;t have a back up? I try to bring at least three camera batteries on all of our trips so that we don&rsquo;t miss out on that perfect shot.</p>\r\n\r\n<p>&nbsp;Read more:&nbsp;<a href=\"https://ordinarytraveler.com/travel-photographer-packing-list\" rel=\"\">The Ultimate Packing Guide for Travel Photographers</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Always Bring a Sarong</h3>\r\n\r\n<p>Sarongs&nbsp;can be used as a wrap when you are cold, a towel,&nbsp;a curtain, or a piece of clothing that can be worn dozens of different ways. Solid colors are great, but if you want something that stands out,&nbsp;<a href=\"http://www.amazon.com/gp/product/B000BWHJQU/ref=as_li_tl?ie=UTF8&amp;camp=1789&amp;creative=9325&amp;creativeASIN=B000BWHJQU&amp;linkCode=as2&amp;tag=ordintrave-20&amp;linkId=VEX3EHTZDCPAUR52\" rel=\"nofollow noopener\" target=\"_blank\">I love this sarong</a>.</p>\r\n\r\n<p>&nbsp;Read more:&nbsp;<a href=\"https://ordinarytraveler.com/ways-to-wear-sarong\">8 Ways to Wear a Sarong</a></p>\r\n\r\n<p><img alt=\"Travel Fashion Tips\" data-lazy-type=\"image\" data-src=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Travel-Sarong-Travel-Tips.jpg\" data-srcset=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Travel-Sarong-Travel-Tips.jpg 660w, https://s32388.pcdn.co/wp-content/uploads/2015/06/Travel-Sarong-Travel-Tips-300x200.jpg 300w\" height=\"440\" sizes=\"(max-width: 660px) 100vw, 660px\" src=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Travel-Sarong-Travel-Tips.jpg\" srcset=\"https://s32388.pcdn.co/wp-content/uploads/2015/06/Travel-Sarong-Travel-Tips.jpg 660w, https://s32388.pcdn.co/wp-content/uploads/2015/06/Travel-Sarong-Travel-Tips-300x200.jpg 300w\" title=\"My 25 Best Travel Tips After 10 Years of Traveling the World\" width=\"660\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Always Buy Travel Insurance</h3>\r\n\r\n<p>A medical emergency can wipe out your savings &mdash; or even worse. We use and trust&nbsp;<a href=\"http://www.worldnomads.com/Turnstile/AffiliateLink?partnerCode=woodrow&amp;source=&amp;utm_source=woodrow&amp;utm_content=link&amp;path=https://www.worldnomads.com/travel-insurance/\" rel=\"nofollow noopener\" target=\"_blank\">World Nomads</a>&nbsp;for travel insurance.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Make Photocopies of Important Documents</h3>\r\n\r\n<p>In my early twenties, I was very good about keeping a copy of my passport in a separate bag from my actual passport. Then I got lazy.</p>\r\n\r\n<p>Recently, a friend of mine lost her passport at the airport. She was told that if she had brought a copy of it and extra passport photos they would have let her&nbsp;travel. Since she didn&rsquo;t, she was forced to forfeit a $2,000 flight and a week in Europe. I now carry a copy with me.</p>\r\n\r\n<p>&nbsp;Read more:&nbsp;<a href=\"https://ordinarytraveler.com/tipsarticles/checklist-of-important-things-to-do-before-you-go\">Checklist for Overseas Travel</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Pack Extra Underwear</h3>\r\n\r\n<p>Undies are small and it&rsquo;s always a good idea to&nbsp;</p>', '3oypzLzsEtmHdx3Djo19MBJNBAgdQ1p6', '2020-01-12 14:18:36', '2020-01-12 14:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `travel_tips_tags`
--

CREATE TABLE `travel_tips_tags` (
  `id_tips_tag` int(10) UNSIGNED NOT NULL,
  `id_travel_tips` tinyint(4) NOT NULL,
  `id_tag` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_tips_tags`
--

INSERT INTO `travel_tips_tags` (`id_tips_tag`, `id_travel_tips`, `id_tag`) VALUES
(1, 1, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trip_activities`
--

CREATE TABLE `trip_activities` (
  `id_activities` int(10) UNSIGNED NOT NULL,
  `activities` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_activities`
--

INSERT INTO `trip_activities` (`id_activities`, `activities`) VALUES
(1, 'Hiking'),
(2, 'Holiday'),
(3, 'Honey Moon'),
(4, 'Culinary');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `firstname`, `lastname`, `phone`, `avatar`) VALUES
(1, 'davidsetya24@gmail.com', '$2y$10$WO6VWbroKza0SGLkVLXos.VQTPVq9JAoAHMQ9ioNPdOEy2d/w3ZCi', 'David', 'Setya', '', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bank_options`
--
ALTER TABLE `bank_options`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `calculation`
--
ALTER TABLE `calculation`
  ADD PRIMARY KEY (`id_calculation`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id_destination`);

--
-- Indexes for table `destination_activities`
--
ALTER TABLE `destination_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_categories`
--
ALTER TABLE `destination_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `detail_itinerary`
--
ALTER TABLE `detail_itinerary`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `hotel_when_tour`
--
ALTER TABLE `hotel_when_tour`
  ADD PRIMARY KEY (`id_hotel_tour`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`id_informations`);

--
-- Indexes for table `itinerary`
--
ALTER TABLE `itinerary`
  ADD PRIMARY KEY (`id_itinerary`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif_admin`
--
ALTER TABLE `notif_admin`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `notif_user`
--
ALTER TABLE `notif_user`
  ADD PRIMARY KEY (`id_notif`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `room_hotels`
--
ALTER TABLE `room_hotels`
  ADD PRIMARY KEY (`id_room_hotel`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tour_categories`
--
ALTER TABLE `tour_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tour_durations`
--
ALTER TABLE `tour_durations`
  ADD PRIMARY KEY (`id_duration`);

--
-- Indexes for table `tour_informations`
--
ALTER TABLE `tour_informations`
  ADD PRIMARY KEY (`id_tour_information`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `tour_type`
--
ALTER TABLE `tour_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `travel_tips`
--
ALTER TABLE `travel_tips`
  ADD PRIMARY KEY (`id_travel_tips`);

--
-- Indexes for table `travel_tips_tags`
--
ALTER TABLE `travel_tips_tags`
  ADD PRIMARY KEY (`id_tips_tag`);

--
-- Indexes for table `trip_activities`
--
ALTER TABLE `trip_activities`
  ADD PRIMARY KEY (`id_activities`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_options`
--
ALTER TABLE `bank_options`
  MODIFY `id_bank` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_booking` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calculation`
--
ALTER TABLE `calculation`
  MODIFY `id_calculation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id_city` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id_destination` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `destination_activities`
--
ALTER TABLE `destination_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `destination_categories`
--
ALTER TABLE `destination_categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_itinerary`
--
ALTER TABLE `detail_itinerary`
  MODIFY `id_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_hotel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_when_tour`
--
ALTER TABLE `hotel_when_tour`
  MODIFY `id_hotel_tour` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `id_informations` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `itinerary`
--
ALTER TABLE `itinerary`
  MODIFY `id_itinerary` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `notif_admin`
--
ALTER TABLE `notif_admin`
  MODIFY `id_notif` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notif_user`
--
ALTER TABLE `notif_user`
  MODIFY `id_notif` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_hotels`
--
ALTER TABLE `room_hotels`
  MODIFY `id_room_hotel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_categories`
--
ALTER TABLE `tour_categories`
  MODIFY `id_category` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tour_durations`
--
ALTER TABLE `tour_durations`
  MODIFY `id_duration` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_informations`
--
ALTER TABLE `tour_informations`
  MODIFY `id_tour_information` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id_tour` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `id_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `travel_tips`
--
ALTER TABLE `travel_tips`
  MODIFY `id_travel_tips` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_tips_tags`
--
ALTER TABLE `travel_tips_tags`
  MODIFY `id_tips_tag` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trip_activities`
--
ALTER TABLE `trip_activities`
  MODIFY `id_activities` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
