CREATE TABLE tb_category (
		cat_id INT(11) NOT NULL AUTO_INCREMENT,
		cat_name VARCHAR(50) NOT NULL,
		cat_text VARCHAR(50) NOT NULL,
		PRIMARY KEY(cat_id)
); 

CREATE TABLE tb_post (
		post_id INT(11) NOT NULL AUTO_INCREMENT,
		post_id_cat INT(11) NOT NULL,
		post_title VARCHAR(100) NOT NULL,
		PRIMARY KEY(post_id),
		FOREIGN KEY(post_id_cat) REFERENCES tb_category(cat_id) ON UPDATE CASCADE ON DELETE RESTRICT
); 

CREATE TABLE tb_photos (
		photo_id INT(11) NOT NULL AUTO_INCREMENT,
		photo_id_post INT(11) NOT NULL,
		photo_title VARCHAR(100) NOT NULL,
		photo_file VARCHAR(256),
		PRIMARY KEY(photo_id),
		FOREIGN KEY(photo_id_post) REFERENCES tb_post(post_id) ON UPDATE CASCADE ON DELETE RESTRICT
); 

CREATE TABLE tb_album (
		album_id INT(11) NOT NULL AUTO_INCREMENT,
		album_id_photo INT(11) NOT NULL,
		album_title VARCHAR(100) NOT NULL,
		PRIMARY KEY(album_id),
		FOREIGN KEY(album_id_photo) REFERENCES tb_photos(photo_id) ON UPDATE CASCADE ON DELETE RESTRICT
); 