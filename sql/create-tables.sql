create table kayttaja (
id serial primary key,
sukunimi varchar (80) not null,
etunimi varchar (80),
puhelin varchar (14),
mail varchar (80),
tunnus varchar (12),
ssana varchar (12));

create table luokka (
id serial primary key,
luokka varchar(20),
kuvaus varchar (400),
kayttajaid integer,
foreign key (kayttajaid) references kayttaja);

create table tarkeys (
id serial primary key,
arvo integer (4),
maarittely varchar (400),
kayttajaid integer,
foreign key (kayttajaid) references kayttaja);

create table tehtava (
id serial primary key,
tehtava varchar (80),
tehtavakuvaus varchar (1200),
luokka varchar (200),
tarkeys integer,
kayttajaid integer,
foreign key (luokka) references luokka,
foreign key (tarkeys) references tarkeys,
foreign key (kayttajaid) references kayttaja);

create table luokitus (
tehtavaid integer,
luokkaid integers,
primay key (tehtavaid, luokkaid),
foreign key (tehtavaid) references tehtava,
foreign key (luokkaid) references luokka);



