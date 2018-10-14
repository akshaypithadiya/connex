CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `cmnt_txt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `notes` (
  `note_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `note_txt` varchar(240) NOT NULL,
  `note_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `photocmnts` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `cmnt_txt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `post_txt` text NOT NULL,
  `post_date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `fname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `email` varchar(24) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `about` varchar(120) NOT NULL,
  `city` varchar(50) NOT NULL,
  `propic` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);


ALTER TABLE `photocmnts`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);


ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;


ALTER TABLE `notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;


ALTER TABLE `photocmnts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;


ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

