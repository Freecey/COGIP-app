<?php require 'includes/header.php'?>

    <section>
        
        <h1>Clients</h1>

        <table>
        <tr>
          <th>Name</th>
          <th>VAT</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>
          <?php foreach ($clients->getClients() as $key => $client) { ?>
            <p><a href="/index.php?page=clients&id=<?=$client['Id']?>"><?= $client['Name']?></a></p><?php } ?>     
          </td>
          <td>
            <?php foreach ($clients->getClients() as $key => $client) { ?>
            <p><?php echo $client['VATNumber']?></p><?php } ?>
          </td>
          <td>
            <?php foreach ($clients->getClients() as $key => $client) { ?>
            <p><?php echo $client['Country']?></p><?php } ?>
          </td>
        </tr>
        </table>

    </section>
    
<?php require 'includes/footer.php'?>