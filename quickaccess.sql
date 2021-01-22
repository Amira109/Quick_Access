
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `quickaccess`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `Articles_name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Articles_details` text CHARACTER SET utf8mb4  NOT NULL,
  `url_articles` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Articles_img` varchar(256) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `Articles_name`, `Articles_details`, `url_articles`, `Articles_img`) VALUES
(1, '6 EASY YET INCREDIBLY EFFECTIVE TIME MANAGEMENT STRATEGIES', 'In general, our society’s understanding of work is a pretty paradox. Isn’t it weird that we believe everyone’s job would be done in 8 hours per day? Maybe we don’t even believe that anymore, but most people are working a 9-to-schedule, which indicates that they have 8 hours of work to do. You can’t really manage time. You can not take 1,5 hours out of 1 hour or influence the flow of time by any other means..', 'https://medium.com/swlh/the-6-easiest-and-most-effective-time-management-strategies-3e089a545eb', 'article1.jpg'),
(2, '101 TIPS TO MAKE YOU A BETTER DEVELOPER', 'Being in the world of programming comes with a lot of challenges and opportunities for developers like you and me. There’s a lot to learn and master. We have JavaScript frameworks like React, Vue, Angular, and Svelte. We have static site generators, the JAMstack, serverless, Git — and the list goes on..', 'https://medium.com/better-programming/101-tips-to-make-you-a-better-developer-7bb4c3788278', 'article2.jpg'),
(3, 'A COMPREHENSIVE GUIDE TO PROFILING PYTHON PROGRAMS', 'Today, users have high expectations for the programs they use. Users expect programs to have amazing features, to be fast, and to consume a reasonable amount of memory.As developers, we should thrive to give our users the best experience possible. We need to find and eliminate the bottlenecks before they affect our users. Unfortunately, as programs become more and more complex, it becomes harder to find those issues and bottlenecks.', 'https://medium.com/better-programming/a-comprehensive-guide-to-profiling-python-programs-f8b7db772e6', 'article3.jpg'),
(4, 'TOP 10 BLOGS ON WEB DESIGN', 'Web design defines the quality of user experience. If used properly, it can be a serious competitive advantage which substantially increases the conversion of site visitors into customers. At the same time, web design is a pretty complicated domain as it involves a lot of operations and close-to-maniacal attention to details. We compiled this list of blogs to provide you with practical knowledge and experience shared by renowned specialists of the industry which is crucial to moving forward with your efforts in design.', 'https://medium.com/uxreality-blog/top-10-blogs-on-web-design-6e588939a3a3', 'article4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `url_download` varchar(256) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `semester`, `year`, `image`, `url_download`) VALUES
(1, 'Assembly Language for x86 Processors', 'This book is 7th Edition by Kip Irvine for Assembly', 1, 4, 'asmbook.jpg', 'https://1lib.us/book/5156452/246cac'),
(2, 'Operating System: Three Easy Pieces', 'This book is 1.00 Edition by Remiz H Arpaci-Dusseau', 1, 4, 'osbook.jpg', 'https://1lib.us/book/2523323/131fbf'),
(3, 'Data Communications and Networking', 'This book is 6th Edition by Behrouz Forouzan', 1, 4, 'datacombook.jpg', 'https://1lib.us/book/614700/528249?dsource=recommend');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Articles_id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
  `comment` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Articles_id`, `name`, `email`, `comment`) VALUES
(1, 1, 'ansam', 'ansammadi1999@gmail.com', 'Test Form comments');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `user_name`, `user_email`, `content`) VALUES
(1, 'ansam', 'ansammadi1999@gmail.com', 'Test Contact Form');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `program_name` varchar(200) CHARACTER SET utf8mb4  NOT NULL,
  `url_program` varchar(200) CHARACTER SET utf8mb4  NOT NULL,
  `install_program` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `lab_name`, `program_name`, `url_program`, `install_program`, `year`) VALUES
(1, 'Java LAB', 'NETBeans', 'https://netbeans.apache.org/download/index.html', 'https://www.youtube.com/watch?v=vt7_6HwCFOU', 2),
(2, 'Logic LAB', 'Logisim', 'https://sourceforge.net/projects/circuit/', '', 2),
(3, 'Circuits LAB', 'circuit wizard', 'https://circuit-wizard.software.informer.com/3.5/', 'https://www.youtube.com/watch?v=GxlafLlj2Qo', 2),
(4, 'Electronics1 LAB', 'LTspice', 'https://www.analog.com/en/design-center/design-tools-and-calculators/ltspice-simulator.html#', 'https://www.youtube.com/watch?v=UWrZsHtDfd0', 2),
(5, 'Signals LAB', 'MatLab', 'https://www.mathworks.com/downloads/', 'https://www.youtube.com/watch?v=f1UoHTf_Kgk', 3),
(6, 'LinearControlSystem LAB', 'LabView', 'https://www.ni.com/en-us/support/downloads/software-products/download.labview.html#346254', 'https://www.youtube.com/watch?v=XDj68RPnvKs', 3),
(7, 'DataBase LAB', 'postgreSQL', 'https://www.postgresql.org/download/', 'https://www.youtube.com/watch?v=RAFZleZYxsc', 3),
(8, 'Assembly LAB', 'Visual Studio', 'https://visualstudio.microsoft.com/vs/', 'https://www.youtube.com/watch?v=FBo5Cso-ufE', 4),
(9, 'OS LAB', 'virtual box', 'https://www.virtualbox.org/wiki/Downloads', 'https://www.youtube.com/watch?v=8mns5yqMfZk', 4),
(10, 'DataCom LAB', 'WireShark', 'https://www.wireshark.org/download.html', '', 4),
(11, 'WEB LAB', 'visual studio code', 'https://code.visualstudio.com/download', 'https://www.youtube.com/watch?v=8tkuu0Rugg4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sol_books`
--

CREATE TABLE `sol_books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4  NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(256) CHARACTER SET utf8mb4  NOT NULL,
  `url_download` varchar(256) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `sol_books`
--

INSERT INTO `sol_books` (`id`, `name`, `description`, `semester`, `year`, `image`, `url_download`) VALUES
(1, 'Assembly Language for x86 Processors', 'This solution of 7th Edition by Kip Irvine', 1, 4, 'asmbook.jpg', 'https://www.scribd.com/document/376336801/Download-Full-Solution-Manual-Assembly-Language-for-x86-Processors-7th-Edition-by-Kip-R-Irvine-SLP1044'),
(2, 'Operating System: Three Easy Pieces', 'The Solution of 1.00 Edition by Remiz H Arpaci-Dusseau', 1, 4, 'osbook.jpg', 'https://www.pdfdrive.com/operating-systems-three-easy-pieces-d157868341.html'),
(3, 'Data Communications and Networking', 'The solution of 4th Edition by Behrouz Forouzan', 1, 4, 'datacombook.jpg', 'https://www.academia.edu/33884249/Solution_Manual_for_Data_Communications_and_Networking_by_Behrouz_Forouzan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sol_books`
--
ALTER TABLE `sol_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sol_books`
--
ALTER TABLE `sol_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

