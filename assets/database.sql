CREATE DATABASE games;
USE games;

CREATE TABLE `games`(
        `id` int(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL, 
        `description` text NOT NULL, 
        `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
        `updated_at` timestamp NULL DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;;