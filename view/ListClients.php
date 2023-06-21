<?php
include_once ('../controller/ClientC.php');
$clientC = new ClientC();
$list = $clientC->listClients();

?>
<html>
<head></head>

<body>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Adress</th>
      <th>Date de naissance</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($list as $client): ?>
      <tr>
        <td><?php echo $client['idClient']; ?></td>//affichage du colonne de bd
        <td><?php echo $client['lastName']; ?></td>
        <td><?php echo $client['firstName']; ?></td>
        <td><?php echo  $client['adress'] ; ?></td>
        <td><?php echo $client['dob']; ?></td>
        <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $client['idClient']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?php echo $client['idClient']; ?>">Delete</a>
                </td>
                
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

    </body>
    </html>