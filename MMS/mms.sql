CREATE TABLE `users`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `emri` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `confirm_password` varchar(255) NOT NULL,
    `is_admin` varchar(255)
    )


INSERT INTO `users` (`emri`,`username`,`email`,`password`,`confirm_password`,`is_admin`)VALUES
('Daris','DarisA','darisahmeti1@gmail.com','12345678','12345678','true'),
('Andi','AndiRr','andrrahmani@gmail.com','12345678','12345678','false');



CREATE TABLE `movies`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `movie_name` varchar(255) NOT NULL,
    `movie_desc` varchar(255) NOT NULL,
    `movie_quality` varchar(255) NOT NULL,
    `movie_rating` int(255) NOT NULL,
    `movie_image` varchar(255) NOT NULL
    
    )



    INSERT INTO `movies` (`movie_name`,`movie_desc`,`movie_quality`,`movie_rating`,`movie_image`) VALUES 
('Zgjoi','The movie is based on the true story of a woman, Fahrije, who goes against misogynistic societal expectations to become an entrepreneur after her husband went missing during the 1998–1999 Kosovo War.','3D',10,'zgjoi.png')



CREATE TABLE `bookings`(
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(11) NOT NULL,
    `movie_id` int(11) NOT NULL,
    `nr_tickets` varchar(255) NOT NULL,
    `data` varchar(255) NOT NULL,
    `is_approved` varchar(255) NOT NULL,
    `time` varchar(255)
    )


INSERT INTO `bookings` (`user_id`,`movie_id`,`nr_tickets`,`date`,`is_approved`,`time`) VALUES (1,1,2,'2025-12-16','true','19:00');