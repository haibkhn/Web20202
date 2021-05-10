Huong dan de chay duoc MVC todo
1. Thay doi DB_NAME, DB_USER, DB_PASSWORD, DB_HOST trong config/config.php de connect duoc voi phpmyadmin
2. Dang nhap vao phpmyadmin 
3. Tao database ten la todo
4. Dung cau truy van sql sau de tao table 'items' va chen cac de lieu trong database todo:
    CREATE TABLE `items` (
    `id` int(11) NOT NULL auto_increment,
    `item_name` varchar(255) NOT NULL,
    PRIMARY KEY  (`id`)
    );
    
    INSERT INTO `items` VALUES(1, 'Get Milk');
    INSERT INTO `items` VALUES(2, 'Buy Application');
5. Vao duong dan "ten-folder/items/viewall" de xem ket qua