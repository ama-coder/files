CREATE TABLE IF NOT EXISTS `tbl_user` (  
`ur_Id` int(11) NOT NULL AUTO_INCREMENT,  
`ur_username` varchar(50) NOT NULL,  
`ur_password` varchar(50) NOT NULL,  
`ur_status` int(11) NOT NULL,  
PRIMARY KEY (`ur_Id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



INSERT INTO `tbl_user` (`ur_Id`, `ur_username`, `ur_password`, `ur_status`) VALUES  
(1, 'masoudline@gmail.com', 'مسعود', 1),  
(2, 'support@roxo.ir', 'انجمن روکسو', 1),  
(3, 'info@roxo.ir', 'برنامه نویسی روکسو', 1);
