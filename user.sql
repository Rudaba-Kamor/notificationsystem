CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `message`, `status`) VALUES
(1, 1, 3, 'Hello Bhaavit', 1),
(2, 1, 2, 'Hello Amit', 1),
(3, 1, 1, 'Hello Vishal', 1),
(4, 1, 1, 'Hello Vishal', 1),
(5, 1, 1, 'Hi  Vishal', 1),
(6, 1, 2, 'Hi Amit', 1),
(7, 1, 3, 'Hello Bhaavit, ', 1),
(8, 3, 1, 'Hello Vishal', 1),
(9, 2, 1, 'Hi Hello Vishal', 1),
(10, 1, 2, 'Hello Amit,', 1),
(11, 1, 2, 'Hello Amit,', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Vishal', 'vishal', 'vishal@1'),
(2, 'Amit', 'amit', 'amit@1'),
(3, 'Bhaavit', 'bhaavit', 'bhaavit@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
