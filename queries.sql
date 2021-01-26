use readme;
insert into content_type (type,icon)
values ('post-quote','quote'),
('post-text','text'),
('post-photo', 'photo'),
('post-link','link'),
('post-video','video');

insert into user(email,username,password)
values ('larisa@amail.com','Лариса','larisa_password'),
('vladik@bmail.com','Владик','vladik_password'),
('viktor@cmail.com','Виктор', 'viktor_password');

insert into post (header, content_text,content_media,user_id,content_type_id,views)
values ('Цитата','Мы в жизни любим только раз, а после ищем лишь похожих',null,1,1,10),
('Игра престолов','Не могу дождаться начала финального сезона своего любимого сериала!',null,2,2,1),
('Наконец, обработал фотки!',null,'rock-medium.jpg',3,3,10),
('Моя мечта',null,'coast-medium.jpg',1,3,101),
('Лучшие курсы',null,'www.htmlacademy.ru',2,4,5),
('Полезный пост про Байкал',null,'Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.',1,2,15);

insert into comment(content,user_id,post_id)
values ('Lorem ipsum dolor','1','2'),
('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia rem esse quis aliquid quam ea ratione vel cupiditate similique? Expedita tempora porro ad impedit dignissimos deleniti voluptates, ea consectetur delectus?','2','1'),
('Quia rem esse quis','2','6'),
('Expedita tempora porro','3','1'),
('Lorem ipsum dolor sit amet consectetur adipisicing elit','2','1'),
('Quia rem esse quis aliquid','1','3'),
('Lorem ipsum dolor sit amet','3','6');

select post.id, header,views, username, type
from post
join user on user_id = user.id
join content_type on content_type_id = content_type.id
order by views desc;

select p.id,header, username,views
from post p
join user u on user_id = u.id
where user_id = 1;

select content,c.date_created,username,header
from comment c
join post p on post_id = p.id
join user u on c.user_id = u.id
where post_id = 1;

insert into like_post (user_id,post_id)
values (1,2), (2,4);

insert into subscription (user_id, subscriber_id)
values(2,3);
