CREATE TABLE kayttaja (
id serial PRIMARY KEY,
sukunimi varchar (80),
etunimi varchar (80),
puhelin varchar (14),
mail varchar (80),
tunnus varchar (12) UNIQUE,
ssana varchar (12));

CREATE TABLE luokka (
id serial PRIMARY KEY,
luokka varchar(20),
kuvaus varchar (400),
kayttajaid integer REFERENCES kayttaja(id) ON DELETE CASCADE);

CREATE TABLE tarkeys (
id serial PRIMARY KEY,
arvo integer,
maarittely varchar (400),
kayttajaid integer REFERENCES kayttaja(ID) ON DELETE CASCADE);

CREATE TABLE tehtava (
id serial primary key,
tehtava varchar (80),
tehtavakuvaus varchar (1200),
luokka integer REFERENCES luokka (id) ON DELETE CASCADE,
tarkeys integer REFERENCES tarkeys (id) ON DELETE CASCADE,
kayttajaid integer REFERENCES kayttaja(ID) ON DELETE CASCADE);

CREATE TABLE luokitus (
tehtavaid integer REFERENCES tehtava (id) ON DELETE CASCADE,
luokkaid integer REFERENCES luokka (id) ON DELETE CASCADE);

