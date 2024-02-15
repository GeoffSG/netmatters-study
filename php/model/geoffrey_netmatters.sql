-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 09:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geoffrey_netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Case Studies'),
(2, 'Technologies'),
(3, 'News'),
(4, 'Insights'),
(5, 'Careers'),
(6, 'Environmental');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `company` text NOT NULL,
  `email` text NOT NULL,
  `telephone` text NOT NULL,
  `message` text NOT NULL,
  `marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `sender`, `company`, `email`, `telephone`, `message`, `marketing`) VALUES
(1, 'Geoff', 'netmatter', 'geoff@gmail.com', '01234567891', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(4, 'Bob Ross', '', 'bob@ross.com', '07723456789', 'Happy little messages. &lt;strong&gt;Hello.&lt;/strong&gt;', 0),
(7, 'test', 'test', 'test@test.com', '01234567890', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(8, 'test', 'test', 'test@test.com', '01234567890', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0),
(9, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(10, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(11, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(12, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(13, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(14, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(15, 'qwerytt', 'qweqwe', 'qeq@qweq.qwe', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 1),
(16, 'qwerty', 'qweqwe', 'example@domain-qwerty.co.uk', '321654564651', 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `cover` text NOT NULL,
  `read_time` int(11) NOT NULL,
  `date_posted` date NOT NULL,
  `author_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `cover`, `read_time`, `date_posted`, `author_id`, `service_id`, `category_id`) VALUES
(0, 'The Data Dilemma: The Power BI Tool from Microsoft', 'The Data Dilemma: The Power BI Tool from Microsoft\r\n\r\nIn today’s fast-paced business environment, effective decision-making relies heavily on the availability of accurate and timely data. For many managers who have spent years manually collecting, collating, and analysing data, the process can be both time-consuming and prone to errors.\r\n\r\nManaging the complexities of all the available data we have today is what is commonly referred to as the “Data Dilemma”, however, Microsoft has introduced a game-changing solution at your fingertips: Introducing the Microsoft Business Intelligence (BI) Tool.\r\n\r\nMicrosoft Power BI is a powerful reporting software that makes it much simpler to take a large amount of data from different sources and create a single unified report. As specialists in developing bespoke software solutions, Netmatters can link Microsoft Power BI into any bespoke system, streamlining your business data management and operations.\r\n\r\nIn this article, we explore exactly how Microsoft’s BI Tool can automate the collection and analysis of data, and how integrating this system within your bespoke software can revolutionise your business’ data reporting.', 'nm-news1.png', 4, '2023-11-09', 1, 3, 3),
(1, 'Netmatters 2023 Carbon Neutral Success with Ecologi', 'We are back with another environmental update!\r\n\r\nIt is no secret - Here at Netmatters, we take pride in our dedication to environmental responsibility. As a leading company in bespoke software, IT support, and Digital Marketing, we understand that our impact reaches far beyond the digital world, and we take strides every day to help shape the world for a better future.\r\nEnvironmental Sustainability Is Built into Our Culture\r\n\r\nWe have centred sustainability and environmental commitment throughout all our operations. From adapting to a paperless office to transitioning our fleet to comprise of much eco-friendlier Nissan Leaf\'s, each year we take steps to progress our environmental awareness and minimise our environmental impact.\r\n\r\nProud to champion the Gold Standard for the Carbon Charter, back in 2021, we achieved the significant milestone of attaining a Carbon Neutral Status and were thrilled to partner with Ecologi to provide both a virtual and visual impact on the good our climate contributions are achieving.\r\n\r\nEcologi is a movement dedicated to combating climate change, promoting reforestation, and supporting carbon offset projects worldwide. With their support, we have access to a live virtual forest that provides an up-to-date landscape and representation of the real impact and milestone that have been achieved through our carbon neutral efforts. ', 'netmatters-2023-carbon-3jJP.png', 3, '2023-11-20', 2, 3, 3),
(2, '5 Characteristics of a Good IT Support Partner', 'In the modern interconnected world, one of the most important decisions you’ll make is choosing the right technology partner. You want a partner who will understand your business, steer you intelligently, and help your business to adapt and grow. All of which begs the question: \"What do you need to look out for?\"\r\n\r\nAs a leading IT company that specialises in IT support, bespoke software, and digital marking, we have broken down the 5 most important characteristics you need to look out for in your IT partner to make sure it is best placed to help your business be safe, secure, and drive profitability and growth.\r\nExperience Tailored to Your Industry\r\n\r\nWhen it comes to establishing the priorities and complexities of your business, you need an IT partner who has experience and wants to learn about your business needs. Unfortunatley, finding an IT partner that knows the in-depth intricacies of every industry is unlikely and impractical. Of course, your IT partner needs to draw on a wealth of experience, however, they also need to be asking the right questions, tailored to your business, with a willingness to learn.\r\n\r\nWhat matters to your business? What are your objectives? What are your concerns? These are just some examples of the key questions your IT partner should be asking. Here at Netmatters, we believe that the best way to support our clients is to understand their business and IT needs. That is why we start by asking the right questions, and sharing our experience and knowledge to find a solution for your IT needs. ', 'nm-news2.jpg', 4, '2023-11-16', 1, 1, 3),
(3, 'Kayleigh Hall’s Inspiring Journey: Winner of the Unsung Hero Award', 'Here at Netmatters, we’re thrilled to announce that our very own Kayleigh Hall has won the Unsung Hero Award, hosted by DevelopHER Awards!\r\n\r\nA fantastic achievement that highlights the outstanding hard work that Kayleigh delivers every single day, we are thrilled to see a dedicated member of our team progress from a well-deserved nomination to championing the prestigious Unsung Hero Award as the winner!', 'nm-news3.png', 3, '2023-11-10', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Bespoke Software'),
(2, 'IT Support'),
(3, 'Digital Marketing'),
(4, 'Telecoms Services'),
(5, 'Web Design'),
(6, 'Cyber Security'),
(7, 'Developer Course');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `profile_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `profile_img`) VALUES
(1, 'Netmatters', '', 'netmatters.png'),
(2, 'Test', 'User', 'netmatters.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
