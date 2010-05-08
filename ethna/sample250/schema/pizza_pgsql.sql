-- Project Name : ピザやさん
-- Date/Time    : 2010/05/08 23:59:42
-- Author       : shinya
-- RDBMS Type   : PostgreSQL
-- Application  : A5:SQL Mk-2

-- 注文内容
create table order_content (
  id serial not null
  , order_id integer not null
  , pizza_id integer not null
  , constraint order_content_PKC primary key (id)
) ;

-- ピザ
create table pizza (
  id serial not null
  , constraint pizza_PKC primary key (id)
) ;

-- 注文
create table order (
  id serial not null
  , user_id integer not null
  , shop_id integer not null
  , constraint order_PKC primary key (id)
) ;

-- 店舗
create table shop (
  id serial not null
  , constraint shop_PKC primary key (id)
) ;

-- 客
create table user (
  id serial not null
  , constraint user_PKC primary key (id)
) ;

alter table order_content
  add constraint order_content_FK1 foreign key (pizza_id) references pizza(id);

alter table order_content
  add constraint order_content_FK2 foreign key (order_id) references order(id);

alter table order
  add constraint order_FK1 foreign key (shop_id) references shop(id);

alter table order
  add constraint order_FK2 foreign key (user_id) references user(id);

