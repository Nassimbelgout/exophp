<?php


    echo "Variables serveur :";
    // echo $_SERVER;
    ?>
    <?php
    
    foreach($_SERVER as $item => $valeur) {
        ?>
        <b> http host :<?php echo $valeur[0]?> </b>
<table>
    <tr>
        <td>ITEMS</td>
        <td>VALEURS</td>
    </tr>
    <tr>
        <td><?php echo $item; ?> </td>
        <td><?php echo $valeur; ?> </td>
    </tr>
</table>

    <?php
    
    
}
?>






