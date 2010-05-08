-- Project Name : ピザやさん
-- Date/Time    : 2010/05/09 0:23:25
-- Author       : shinya
-- RDBMS Type   : PostgreSQL
-- Application  : A5:SQL Mk-2

-- 注文内容
create table pizza_order_content (
  id serial not null
  , pizza_order_id integer not null
  , pizza_id integer not null
  , constraint pizza_order_content_PKC primary key (id)
);

-- ピザ
create table pizza (
  id serial not null
  , constraint pizza_PKC primary key (id)
);

-- 注文
create table pizza_order (
  id serial not null
  , consumer_id integer not null
  , shop_id integer not null
  , constraint pizza_order_PKC primary key (id)
);

-- 店舗
create table shop (
  id serial not null
  , constraint shop_PKC primary key (id)
);

-- 客
create table consumer (
  id serial not null
  , constraint consumer_PKC primary key (id)
);

alter table pizza_order_content
  add constraint pizza_order_content_FK1 foreign key (pizza_id) references pizza(id);

alter table pizza_order_content
  add constraint pizza_order_content_FK2 foreign key (pizza_order_id) references pizza_order(id);

alter table pizza_order
  add constraint pizza_order_FK1 foreign key (shop_id) references shop(id);

alter table pizza_order
  add constraint pizza_order_FK2 foreign key (consumer_id) references consumer(id);

