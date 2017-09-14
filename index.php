<link rel="shortcut icon" href="favicon.ico">
<title>Ramais</title>

<center>
<img width="300px" height="90px" img src="logo.png">
</center>
<br>

<?php
include("./bd.php");

$select = "SELECT glpi_users.firstname, glpi_users.realname, glpi_users.phone, glpi_users.phone2, glpi_users.mobile, glpi_useremails.email FROM glpi_users INNER JOIN g$

echo "  <table border=1 style='border:2px solid black;border-collapse:collapse;' align='center'>
                        <tr>
                                <td align='center'>
                                <font face='verdana'><b>NOME</b></font>
                                </td>
                                <td align='center'>
                                <font face='verdana'><b>SOBRENOME</b></font>
                                </td>
                                <td align='center'>
                                <font face='verdana'><b>FONE 1</b></font>
                                </td>
                                <td align='center'>
                                <font face='verdana'><b>FONE 2</b></font>
                                </td>
                                <td align='center'>
                                <font face='verdana'><b>CELULAR</b></font>
                                </td>
                                <td align='center'>
                                <font face='verdana'><b>E-MAIL</b></font>
                                </td>
                        </tr>";
$query = mysqli_query($mysqli, $select);
while($dados = mysqli_fetch_array($query)){
        echo "<tr>      <td><font face='verdana'>".$dados['firstname']."</font></td>
                                <td><font face='verdana'>".$dados['realname']."</font></td>
                                <td><font face='verdana'>".$dados['phone']."</font></td>
                                <td><font face='verdana'>".$dados['phone2']."</font></td>
                                <td><font face='verdana'>".$dados['mobile']."</font></td>
                                <td><font face='verdana'><a href='mailto:".$dados['email']."'>".$dados['email']."</a></font></td>
                        </tr>";
}

echo "</table>";
?>


