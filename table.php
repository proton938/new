<head>

<meta charset = "utf-8">

</head>

<?php

$bz = sqlite_open("arhiv.drtwer");
if (!$bz) exit("Ни хрена у вас не получится");

$tb = sqlite_query($bz, "CREATE TABLE exel1
                         (id integer primary key, 
						 perv TEXT, 
						 field2 TEXT,
						 tret text);
						 ");
if (!$tb) exit("<script>document.location.href = 'showtable.php'</script>");

sqlite_query($bz, "INSERT INTO exel1(perv, field2, tret) VALUES('6546465', '______6646757', ' treytuy');");
sqlite_query($bz, "INSERT INTO exel1(perv, field2, tret) VALUES('treeytrr', 'ytruyut', '76769009');");

echo "<script>document.location.href = 'showtable.php';</script>";


?>