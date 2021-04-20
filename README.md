# reorder_row

## create database sortable

## create table

CREATE TABLE IF NOT EXISTS `sorting_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `position_order` int(11) NOT NULL,
  `is_deleted` int(4) default(0),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;
