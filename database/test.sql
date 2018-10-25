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









INSERT INTO `comments` (`id`, `post_id`, `full_name`, `cmnt_txt`) VALUES
(42, 45, 'Omkar Prabhu', 'Hello, akshay. How are you?'),
(43, 45, 'Akshay Pithadiya', 'Hi, omkar. i\'m fine'),
(44, 46, 'Omkar Prabhu', 'this is a random comment xyz abc 123.'),
(45, 46, 'Akshay Pithadiya', 'hello there.'),
(46, 44, 'Akshay Pithadiya', 'The inheritance interferes. The confide'),
(47, 46, 'Tejas Rajpurkar', 'hi. wassup guys'),
(48, 44, 'Tejas Rajpurkar', 'A hung jet stamps. The chance believes p'),
(49, 44, 'Tejas Rajpurkar', ' Below the calculated distress participa'),
(50, 47, 'Tejas Rajpurkar', 'hi'),
(51, 47, 'Akshay Pithadiya', 'hello tejas'),
(52, 47, 'Dipesh Pawar', 'hello'),
(53, 46, 'Dipesh Pawar', 'The ruled theft cooperates inside the co'),
(54, 44, 'Dipesh Pawar', 'The ruled theft cooperates inside the co'),
(55, 45, 'Dipesh Pawar', 'The ruled theft cooperates inside the co'),
(56, 48, 'Dipesh Pawar', 'hello');




INSERT INTO `notes` (`note_id`, `user_name`, `note_txt`, `note_date_time`) VALUES
(30, 'akshaypithadiya', 'Can the white deterrent swallow the busy fluid? The dead bangs the inheritance. Her numerous vocal searches the alien underneath the pleasant cake. How will the protein rent an unconnected seed?', '25 October 2018 at 12:32 am'),
(31, 'akshaypithadiya', 'Can the equilibrium defect next to the isolated mother? The gasoline sabotages an addressed trouser. Below any jungle rocks this racket. A speaking salesman responds.', '25 October 2018 at 12:32 am'),
(32, 'akshaypithadiya', 'Why can\'t an am charge quibble into the signature? The approach sponsors the sighted bucket. The wisest handicap rolls opposite a dreadful turntable. His matched bottle pokes a discriminating gnome.', '25 October 2018 at 12:32 am'),
(33, 'omkarprabhu', 'The deciding corridor stays the ballot. The test racket gossips above the designate drill. The mug studies a rich wisdom with the spray. The workable servant rages.', '25 October 2018 at 12:38 am'),
(34, 'omkarprabhu', 'The performance steeps each calm rag before the arcade. The hexadecimal paradox clicks before every drained silicon. The conflicting hangover poses as a lesbian bundle.', '25 October 2018 at 12:38 am'),
(35, 'omkarprabhu', ' concluded guilt frustrates the protocol. A transmitted cloud issues from the contest. Can her hum trek? The market speaks?', '25 October 2018 at 12:38 am'),
(36, 'tejasr', 'The lamp lodges the receiver. A mere organ facilitates the warmed east. Her spectacular conduct leans. Each disturbance dedicates the nurse. The dressed concern consults the rude bulb. The standard oc', '25 October 2018 at 12:46 am'),
(37, 'tejasr', 'The verbose blurb undertakes the crossed debt. A problem orbits over the legitimate piano. The rational starter chases the discovery with a bone radar. A versatile war weds the attached receipt.\r\n', '25 October 2018 at 12:46 am'),
(39, 'dipeshp', 'The ruled theft cooperates inside the conflicting slot. The substance baffles a collective with an official gasp. A threat apologizes next to a draining beard. A chat sticks the disastrous bicycle acr', '25 October 2018 at 07:13 am'),
(40, 'dipeshp', 'The floating cave waves over the parody. A topical triumph toes the line. The zone solos outside your each appraisal. The kept remainder deposits a trifle.', '25 October 2018 at 07:13 am'),
(41, 'dipeshp', 'Inside an ugly doctor overlaps a sounded seed. His virus boils into our background! The pleasure copes beneath a tragedy! A ladder experiments against a copied cable. Past the crisp works the mountain', '25 October 2018 at 07:16 am');




INSERT INTO `photocmnts` (`id`, `photo_id`, `full_name`, `cmnt_txt`) VALUES
(9, 12, 'Omkar Prabhu', 'The inheritance interferes. The confiden'),
(10, 11, 'Omkar Prabhu', 'The inheritance interferes. The confiden'),
(11, 13, 'Akshay Pithadiya', 'The inheritance interferes. The confiden'),
(12, 12, 'Akshay Pithadiya', 'hello this is a random comment'),
(13, 11, 'Akshay Pithadiya', 'hello whats good'),
(14, 14, 'Akshay Pithadiya', 'abc xyz 123 abc xyz'),
(15, 14, 'Dipesh Pawar', 'Inside an ugly doctor overlaps a sounded'),
(16, 13, 'Dipesh Pawar', 'Inside an ugly doctor overlaps a sounded'),
(17, 12, 'Dipesh Pawar', 'Inside an ugly doctor overlaps a sounded'),
(18, 11, 'Dipesh Pawar', 'Inside an ugly doctor overlaps a sounded');




INSERT INTO `photos` (`photo_id`, `username`, `full_name`, `photo`, `photo_date_time`) VALUES
(11, 'akshaypithadiya', 'Akshay Pithadiya', 'gb.jpg', '25 October 2018 at 12:30 am'),
(12, 'akshaypithadiya', 'Akshay Pithadiya', 'image.jpg', '25 October 2018 at 12:30 am'),
(13, 'omkarprabhu', 'Omkar Prabhu', 'IMG_20161127_162837008.jpg', '25 October 2018 at 12:38 am'),
(14, 'tejasr', 'Tejas Rajpurkar', 'Screen Shot 2017-12-12 at 19.15.18  Tue, 12 Dec.png', '25 October 2018 at 12:47 am');




INSERT INTO `posts` (`post_id`, `full_name`, `user_name`, `post_txt`, `post_date_time`) VALUES
(44, 'Akshay Pithadiya', 'akshaypithadiya', 'A patient hopes each desire. The passport dictates on top of the robot! The rose reclaims a generous retrieval beside a researcher. The unset dustbin damages the imperative.', '25 October 2018 at 12:31 am'),
(45, 'Akshay Pithadiya', 'akshaypithadiya', 'How can the defeat graduate in an incident road? An accustomed rabbit punts. An unsatisfactory governor graduates beside the standardized leak. The arena surrounds a raised flame.', '25 October 2018 at 12:32 am'),
(46, 'Omkar Prabhu', 'omkarprabhu', 'A librarian fasts? The bean smokes past the passenger. The gene dies throughout the forbidden change. Why can\'t the cute prize revenge a candidate? Your downstairs graces a breathed airport.', '25 October 2018 at 12:35 am'),
(47, 'Tejas Rajpurkar', 'tejasr', 'The verbose blurb undertakes the crossed debt. A problem orbits over the legitimate piano. The rational starter chases the discovery with a bone radar. A versatile war weds the attached receipt.\r\n', '25 October 2018 at 12:46 am'),
(48, 'Dipesh Pawar', 'dipeshp', 'The ruled theft cooperates inside the conflicting slot. The substance baffles a collective with an official gasp. A threat apologizes next to a draining beard. A chat sticks the disastrous bicycle acr', '25 October 2018 at 07:13 am');




INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `about`, `city`, `propic`) VALUES
(41, 'Akshay', 'Pithadiya', 'akshay@gmail.com', 'akshaypithadiya', '1234', 'Hello, i\'m akshay. I like to code, read books and listen to music.', 'Mumbai', 'akshay.jpg'),
(42, 'Omkar', 'Prabhu', 'omkar@gmail.com', 'omkarprabhu', 'abcd', 'Hi, I like to travel, read books, watch movies and listen to music.', 'Badlapur', 'IMG_20161127_162837008.jpg'),
(43, 'Tejas', 'Rajpurkar', 'tejas@gmail.com', 'tejasr', '1234abcd', 'hi, i like to make games, watch movies and read books on psychology.', 'Dombivli', 'default.png'),
(44, 'Dipesh', 'Pawar', 'dipesh@gmail.com', 'dipeshp', 'abcd', 'How does a biological dustbin rest upon the trapped differential?', 'Dombivli', 'default.png');
