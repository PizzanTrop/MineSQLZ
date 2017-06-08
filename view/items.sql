CREATE TABLE IF NOT EXISTS `items` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `item` int(255) NOT NULL,
  `name` text NOT NULL,
  `http` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1250 AUTO_INCREMENT=4 ;

INSERT INTO `items` (`id`, `item`, `name`, `http`) VALUES
(1, 2, '0vDg4uA=', 'http://newmine.ru/itemshop/item_2.png');
