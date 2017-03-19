DROP DATABASE sport;
CREATE DATABASE sport;
USE sport;
create table `users` (`id` int unsigned not null auto_increment primary key, `name` varchar(255) not null, `email` varchar(255) not null, `password` varchar(60) not null, `remember_token` varchar(100) null, `created_at` timestamp default 0 not null, `updated_at` timestamp default 0 not null) default character set utf8 collate utf8_unicode_ci;
 alter table `users` add unique users_email_unique(`email`);
 create table `password_resets` (`email` varchar(255) not null, `token` varchar(255) not null, `created_at` timestamp default 0 not null) default character set utf8 collate utf8_unicode_ci
 alter table `password_resets` add index password_resets_email_index(`email`);
 alter table `password_resets` add index password_resets_token_index(`token`);
 create table `events` (`id` int unsigned not null auto_increment primary key, `name` varchar(255) not null, `date` varchar(255) not null, `venue` varchar(255) not null, `contact_email` varchar(255) not null, `contact_name` varchar(255) not null) default character set utf8 collate utf8_unicode_ci;
 create table `admins` (`id` int unsigned not null auto_increment primary key, `name` varchar(255) not null, `last_name` varchar(255) not null, `username` varchar(255) not null, `password` varchar(255) not null, `created_at` timestamp default 0 not null, `updated_at` timestamp default 0 not null) default character set utf8 collate utf8_unicode_ci;
 create table `abouts` (`id` int unsigned not null auto_increment primary key, `text` varchar(255) not null, `created_at` timestamp default 0 not null, `updated_at` timestamp default 0 not null) default character set utf8 collate utf8_unicode_ci;
 create table `galleries` (`id` int unsigned not null auto_increment primary key, `pic_url` varchar(255) not null, `pic_description` varchar(255) not null, `created_at` timestamp default 0 not null, `updated_at` timestamp default 0 not null) default character set utf8 collate utf8_unicode_ci;
 create table `contacts` (`id` int unsigned not null auto_increment primary key, `email` varchar(255) not null, `contacts` varchar(255) not null, `postal` varchar(255) not null, `physical` varchar(255) not null, `created_at` timestamp default 0 not null, `updated_at` timestamp default 0 not null) default character set utf8 collate utf8_unicode_ci;
