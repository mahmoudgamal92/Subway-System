<?php
include 'database.php';

doQuary("


CREATE TABLE allstation (
  name varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO allstation (name) VALUES
('Assuit'),
('Asswan'),
('Cairo'),
('Elmenya'),
('Louxor'),
('Qena');

ALTER TABLE allstation
  ADD PRIMARY KEY (name);
COMMIT;
  CREATE TABLE Assuit (
  id int(11) NOT NULL,
  class int(2) NOT NULL,
  ArTime varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Assuit (id, class, ArTime) VALUES
(48, 2, '2:33'),
(57, 4, '12:55'),
(62, 2, '6:05'),
(67, 4, '1:00'),
(70, 2, '9:20'),
(85, 2, '3:30'),
(88, 4, '5:44 '),
(95, 4, '10:15'),
(98, 4, '3:55'),
(99, 2, '11:15'),
(485, 3, '8:25'),
(512, 3, '9:20'),
(648, 3, '12:15'),
(787, 3, '4:10'),
(808, 3, '3:30'),
(2008, 1, '8:40'),
(2010, 1, '9:35'),
(2015, 1, '11:55'),
(2017, 1, '5:25'),
(2020, 1, '11:30');
CREATE TABLE Asswan (
  id int(11) NOT NULL,
  class int(2) NOT NULL,
  ArTime varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Asswan (id, class, ArTime) VALUES
(48, 2, '2:33'),
(57, 4, '12:55'),
(62, 2, '6:05'),
(67, 4, '1:00'),
(70, 2, '9:20'),
(85, 2, '3:30'),
(88, 4, '5:44 '),
(95, 4, '10:15'),
(98, 4, '3:55'),
(99, 2, '11:15'),
(485, 3, '8:25'),
(512, 3, '9:20'),
(648, 3, '12:15'),
(787, 3, '4:10'),
(808, 3, '3:30'),
(2008, 1, '8:40'),
(2010, 1, '9:35'),
(2015, 1, '11:55'),
(2017, 1, '5:25'),
(2020, 1, '11:30');
CREATE TABLE Cairo (
  id int(11) NOT NULL,
  class int(2) NOT NULL,
  ArTime varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Cairo (id, class, ArTime) VALUES
(48, 2, '2:33'),
(57, 4, '12:55'),
(62, 2, '6:05'),
(67, 4, '1:00'),
(70, 2, '9:20'),
(85, 2, '3:30'),
(88, 4, '5:44 '),
(95, 4, '10:15'),
(98, 4, '3:55'),
(99, 2, '11:15'),
(485, 3, '8:25'),
(512, 3, '9:20'),
(648, 3, '12:15'),
(787, 3, '4:10'),
(808, 3, '3:30'),
(2008, 1, '8:40'),
(2010, 1, '9:35'),
(2015, 1, '11:55'),
(2017, 1, '5:25'),
(2020, 1, '11:30');
CREATE TABLE Louxor (
  id int(11) NOT NULL,
  class int(2) NOT NULL,
  ArTime varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Louxor(id, class, ArTime) VALUES
(48, 2, '2:33'),
(57, 4, '12:55'),
(62, 2, '6:05'),
(67, 4, '1:00'),
(70, 2, '9:20'),
(85, 2, '3:30'),
(88, 4, '5:44 '),
(95, 4, '10:15'),
(98, 4, '3:55'),
(99, 2, '11:15'),
(485, 3, '8:25'),
(512, 3, '9:20'),
(648, 3, '12:15'),
(787, 3, '4:10'),
(808, 3, '3:30'),
(2008, 1, '8:40'),
(2010, 1, '9:35'),
(2015, 1, '11:55'),
(2017, 1, '5:25'),
(2020, 1, '11:30');
CREATE TABLE Elmenya (
  id int(11) NOT NULL,
  class int(2) NOT NULL,
  ArTime varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Elmenya(id, class, ArTime) VALUES
(48, 2, '2:33'),
(57, 4, '12:55'),
(62, 2, '6:05'),
(67, 4, '1:00'),
(70, 2, '9:20'),
(85, 2, '3:30'),
(88, 4, '5:44 '),
(95, 4, '10:15'),
(98, 4, '3:55'),
(99, 2, '11:15'),
(485, 3, '8:25'),
(512, 3, '9:20'),
(648, 3, '12:15'),
(787, 3, '4:10'),
(808, 3, '3:30'),
(2008, 1, '8:40'),
(2010, 1, '9:35'),
(2015, 1, '11:55'),
(2017, 1, '5:25'),
(2020, 1, '11:30');
CREATE TABLE Qena (
  id int(11) NOT NULL,
  class int(2) NOT NULL,
  ArTime varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO Qena(id, class, ArTime) VALUES
(48, 2, '2:33'),
(57, 4, '12:55'),
(62, 2, '6:05'),
(67, 4, '1:00'),
(70, 2, '9:20'),
(85, 2, '3:30'),
(88, 4, '5:44 '),
(95, 4, '10:15'),
(98, 4, '3:55'),
(99, 2, '11:15'),
(485, 3, '8:25'),
(512, 3, '9:20'),
(648, 3, '12:15'),
(787, 3, '4:10'),
(808, 3, '3:30'),
(2008, 1, '8:40'),
(2010, 1, '9:35'),
(2015, 1, '11:55'),
(2017, 1, '5:25'),
(2020, 1, '11:30');
ALTER TABLE Assuit
ADD PRIMARY KEY (id);
ALTER TABLE Asswan
ADD PRIMARY KEY (id);
ALTER TABLE Cairo
ADD PRIMARY KEY (id);
ALTER TABLE Louxor
ADD PRIMARY KEY (id);
ALTER TABLE Elmenya
ADD PRIMARY KEY (id);
ALTER TABLE Qena
ADD PRIMARY KEY (id);
");
$arr=getrows("SELECT * FROM allstation ;",array());
  
?>
<form action="Display.php" method="post">
      <select name="form" id="select1">
       
<?php 
foreach ($arr as $key => $value) 
{
echo "<option value=$value[0]>".$value[0]."</option>";
}
 ;?>
       </select><br />
        <select name="to" id="select2">
<?php 

foreach ($arr as $key => $value) 
{

echo "<option value=$value[0]>".$value[0]."</option>";
}
 ;?>
       </select><br />
        <select name="class" id="select3">
            <option selected value="0">عرض جميع الدرجات</option>
            <option value="1">VIP</option>
            <option value="2">مكيف </option>
            <option value="3">نوم</option>
            <option value="4">مميز</option>
        </select><br />
        <input type="submit" value="عرض القطارات" id="submit1" /><br />
    </form>