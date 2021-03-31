<?php require 'includes/header.php'?>

    <section>
        
      <h1>COGIP: List of invoices</h1>

      <table>
      <tr>
        <th>Invoice number</th>
        <th>Dates</th>
        <th>Companies</th>
        <th>Type</th>
      </tr>
      <tr>
        <td><?php foreach ($invoices->getInvoice() as $key => $invoice) { ?>
        <p><a href="/index.php?page=invoices&id=<?=$invoice['InvoiceNumber']?>"><?= $invoice['InvoiceNumber']?></a></p><?php } ?>
        <td><?php foreach ($invoices->getInvoice() as $key => $invoice) { ?>
    		<p><?php echo $invoice['InvoiceDate']?></p><?php } ?></td>
        <td><?php foreach ($invoices->getInvoice() as $key => $invoice) { ?>
    		<p><?php echo $invoice['Name']?></p><?php } ?></td>
        <td><?php foreach ($invoices->getInvoice() as $key => $invoice) { ?>
    		<p><?php echo $invoice['Type']?></p><?php } ?></td>
      </tr>
      </table>

    </section>
    
<?php require 'includes/footer.php'?>