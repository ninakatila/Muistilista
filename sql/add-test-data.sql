insert into kayttaja (sukunimi, etunimi, puhelin, mail, tunnus, ssana) values 
('Testaaja', 'Tiina', '0505551111', 'tiina@mail.fi', 'testtiin', 'SyksyTalvi1'),
('Testaaja', 'Taavi', '0505551112', 'taavi@mail.fi', 'testtaav', 'SyksyTalvi2')

insert into luokka (luokka, kuvaus, kayttajaid) values
('Ty�', 'Ty�h�n liittyv�t teht�v�t', (select id from kayttaja where tunnus = 'testtiin')),
('Koulu', 'Kouluun liittyv�t teht�v�t', (select id from kayttaja where tunnus = 'testtiin')),
('Koti', 'Kotiin liittyv�t teht�v�t', (select id from kayttaja where tunnus = 'testtiin'))
('Opiskelu', 'Opiskeluun liittyv�t teht�v�t', (select id from kayttaja where tunnus = 'testtaav')),
('Harrastus', 'Harrastuksiin liittyv�t teht�v�t', (select id from kayttaja where tunnus = 'testtaav'));

insert into tarkeys (arvo, maarittely, kayttajaid) values
('1', 'Tee heti', (select id from kayttaja where tunnus = 'testtiin')),
('2', 'Tee sitten, kun kaikki ykk�set on tehty', (select id from kayttaja where tunnus = 'testtiin')),
('1', 'T�rke�', (select id from kayttaja where tunnus = 'testtaav')),
('2', 'Melko t�rke�', (select id from kayttaja where tunnus = 'testtiin')),
('3', 'Tee, kun huvittaa', (select id from kayttaja where tunnus = 'testtiin'));

insert into tehtava (tehtava, tehtavakuvaus, luokka, tarkeys, kayttajaid) values
('Soita Matille', 'Kerro miten toimitaan', (select id from luokka where luokka = 'Ty�'), (select id from tarkeys where arvo = '1'), (select id from kayttaja where tunnus = 'testtiin')),
('Vastaa Pirjolle', 'Vastaa Pirjon mailiin', (select id from luokka where luokka = 'Ty�'), (select id from tarkeys where arvo = '2'), (select id from kayttaja where tunnus = 'testtiin')),
('tsoha laskarit', 'Tee tsohan laskarit, viim. 24.11.', (select id from luokka where luokka = 'Opiskelu'), (select id from tarkeys where arvo = '1'), (select id from kayttaja where tunnus = 'testtaav')),
('jym laskarit', 'Tee jymin laskarit, viim. 20.11.', (select id from luokka where luokka = 'Opiskelu'), (select id from tarkeys where arvo = '1'), (select id from kayttaja where tunnus = 'testtaav'));


