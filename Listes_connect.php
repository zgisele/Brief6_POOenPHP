<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> listes des utilisateur connecter </title>
</head>
<body>


            <?php
            $sql = "SELECT prenom,nom,telephone, email2 FROM ` inscription2`";
            $stm = $db->query($sql);
            $utilisateurs = $stm->fetchAll(PDO::FETCH_ASSOC);
            ?> 
            <div class="tableau">
                <h3>Liste des utilisateurs</h3>
                <table>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                    </tr>
                     <?php foreach ($utilisateurs as $utilisateur): ?> 
                    <tr>
                        <td><?php echo $utilisateur['prenom']; ?></td>
                        <td><?php echo $utilisateur['nom']; ?></td>
                        <td><?php echo $utilisateur['telephone']; ?></td>
                        <td><?php echo$utilisateur['email2']; ?></td>
                    </tr>
                    <?php endforeach;?> 
                </table>
            </div>
</body>
</html>