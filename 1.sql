CREATE TABLE IF NOT EXISTS `tbl_user` (  
`ur_Id` int(11) NOT NULL AUTO_INCREMENT,  
`ur_username` varchar(50) NOT NULL,  
`ur_password` varchar(50) NOT NULL,  
`ur_status` int(11) NOT NULL,  
PRIMARY KEY (`ur_Id`)  
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
