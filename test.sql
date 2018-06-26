-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 09:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(11) NOT NULL,
  `catagory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory`) VALUES
(1, 'samsung'),
(2, 'mobile'),
(3, 'Apple'),
(4, 'Google Pixel');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `catagories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `catagories`, `tags`, `post_data`, `views`, `status`) VALUES
(1, 12, 'Google', 'Md Shahid', 'profile_pic2.jpg', 'slide1.jpg', 'Tech', 'Tech News', 'Google Search is a web search engine, which is Google\'s core product.\r\n                                It receives over 3 billion search queries per day.\r\n                                Google also offers regional search by its 189 regional level domains.\r\n                                Hummingbird – Expanded query analysis. For example, if you search for \'best pie place in Seattle\' Google\r\n                                 will also search for \'best pie restaurant in Seattle\'.\r\n                                PageRank – link analysis algorithm.\r\n                                Snapshots – mechanism that indexes PDFs, Word documents, and more.\r\n                                Google Search functionality – Google Search includes Boolean logical operators, wildcards, and more,\r\n                                 to help users refine their searches.\r\n                                Multiple languages – Google Search is supported by a large number of different languages.\r\n                                Google Author Rank – The idea that an online author can have topical authority within Google Search Results.\r\n                                Experimental Search options for testing new interfaces while searching with Google, including Timeline views\r\n                                 and keyboard shortcuts.\r\n                                Encrypted Search – In May 2010 Google rolled out SSL-encrypted web search.[1] The encrypted search can be accessed\r\n                                 at encrypted.google.com [2]', 11, 'publish'),
(2, 12, 'Foogle', 'Md Shahid', 'profile_pic3.jpg', 'post2.jpg', 'Tech', 'Tech News', 'Google Search is a web search engine, which is Google\'s core product.\r\n                                It receives over 3 billion search queries per day.\r\n                                Google also offers regional search by its 189 regional level domains.\r\n                                Hummingbird – Expanded query analysis. For example, if you search for \'best pie place in Seattle\' Google\r\n                                 will also search for \'best pie restaurant in Seattle\'.\r\n                                PageRank – link analysis algorithm.\r\n                                Snapshots – mechanism that indexes PDFs, Word documents, and more.\r\n                                Google Search functionality – Google Search includes Boolean logical operators, wildcards, and more,\r\n                                 to help users refine their searches.\r\n                                Multiple languages – Google Search is supported by a large number of different languages.\r\n                                Google Author Rank – The idea that an online author can have topical authority within Google Search Results.\r\n                                Experimental Search options for testing new interfaces while searching with Google, including Timeline views\r\n                                 and keyboard shortcuts.\r\n                                Encrypted Search – In May 2010 Google rolled out SSL-encrypted web search.[1] The encrypted search can be accessed\r\n                                 at encrypted.google.com [2]', 45, 'publish'),
(3, 12, 'Doodle', 'Md Shahid', 'profile_pic2.jpg', 'slide6.jpg', 'Tech', 'Tech News', 'Google Search is a web search engine, which is Google\'s core product.\r\n                                It receives over 3 billion search queries per day.\r\n                                Google also offers regional search by its 189 regional level domains.\r\n                                Hummingbird – Expanded query analysis. For example, if you search for \'best pie place in Seattle\' Google\r\n                                 will also search for \'best pie restaurant in Seattle\'.\r\n                                PageRank – link analysis algorithm.\r\n                                Snapshots – mechanism that indexes PDFs, Word documents, and more.\r\n                                Google Search functionality – Google Search includes Boolean logical operators, wildcards, and more,\r\n                                 to help users refine their searches.\r\n                                Multiple languages – Google Search is supported by a large number of different languages.\r\n                                Google Author Rank – The idea that an online author can have topical authority within Google Search Results.\r\n                                Experimental Search options for testing new interfaces while searching with Google, including Timeline views\r\n                                 and keyboard shortcuts.\r\n                                Encrypted Search – In May 2010 Google rolled out SSL-encrypted web search.[1] The encrypted search can be accessed\r\n                                 at encrypted.google.com [2]', 33, 'publish'),
(4, 12, 'Doodle', 'dshahid380', 'profile_pic.jpg', 'slide4.jpg', 'Tech', 'Tech News', 'Google Search is a web search engine, which is Google\'s core product.\r\n                                It receives over 3 billion search queries per day.\r\n                                Google also offers regional search by its 189 regional level domains.\r\n                                Hummingbird – Expanded query analysis. For example, if you search for \'best pie place in Seattle\' Google\r\n                                 will also search for \'best pie restaurant in Seattle\'.\r\n                                PageRank – link analysis algorithm.\r\n                                Snapshots – mechanism that indexes PDFs, Word documents, and more.\r\n                                Google Search functionality – Google Search includes Boolean logical operators, wildcards, and more,\r\n                                 to help users refine their searches.\r\n                                Multiple languages – Google Search is supported by a large number of different languages.\r\n                                Google Author Rank – The idea that an online author can have topical authority within Google Search Results.\r\n                                Experimental Search options for testing new interfaces while searching with Google, including Timeline views\r\n                                 and keyboard shortcuts.\r\n                                Encrypted Search – In May 2010 Google rolled out SSL-encrypted web search.[1] The encrypted search can be accessed\r\n                                 at encrypted.google.com [2]', 33, 'publish'),
(5, 12, 'Doodle', 'dshahid380', 'profile_pic.jpg', 'top-image-2.jpg', 'Tech', 'Tech News', 'Google Search is a web search engine, which is Google\'s core product.\r\n                                It receives over 3 billion search queries per day.\r\n                                Google also offers regional search by its 189 regional level domains.\r\n                                Hummingbird – Expanded query analysis. For example, if you search for \'best pie place in Seattle\' Google\r\n                                 will also search for \'best pie restaurant in Seattle\'.\r\n                                PageRank – link analysis algorithm.\r\n                                Snapshots – mechanism that indexes PDFs, Word documents, and more.\r\n                                Google Search functionality – Google Search includes Boolean logical operators, wildcards, and more,\r\n                                 to help users refine their searches.\r\n                                Multiple languages – Google Search is supported by a large number of different languages.\r\n                                Google Author Rank – The idea that an online author can have topical authority within Google Search Results.\r\n                                Experimental Search options for testing new interfaces while searching with Google, including Timeline views\r\n                                 and keyboard shortcuts.\r\n                                Encrypted Search – In May 2010 Google rolled out SSL-encrypted web search.[1] The encrypted search can be accessed\r\n                                 at encrypted.google.com [2]', 50, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
