<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>COGIP</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">

<!-- Navigation-->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/View/includes/nav.php'); ?>
<!-- Masthead-->
<header class="masthead companies">
    <div class="container">
        <div class="masthead-heading text-uppercase">Companies Directory</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#companies">Tell Me More</a>
    </div>
</header>

<!-- Contact -->
<section class="page-section bg-light" id="companies">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">COGIP : List of Companies</h2>
        </div>
        <div>
            <  <h2>Company: <?= $detailCompanies['Name']?></h2>

            <h3>VAT: <?= $detailCompanies['VATNumber']?></h3>
            <h3>Type: <?= $detailCompanies['Type']?></h3>

            <h4>Contact persons</h4>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>
                        <?php foreach ($employees as $key => $employee) { ?>
                            <p><?php echo $employee['FirstName'] . ' ' . $employee['LastName']?></p><?php } ?>
                    </td>
                    <td>
                        <?php foreach ($employees as $key => $employee) { ?>
                            <p><?php echo $employee['Email']?></p><?php } ?>
                    </td>
                </tr>
            </table>


            <h4>Invoices</h4>

            <table>
                <tr>
                    <th>Invoice number</th>
                    <th>Date</th>
                    <th>Contact person</th>
                </tr>
                <tr>
                    <td>
                        <?php foreach ($invoices as $key => $invoice) { ?>
                            <p><?php echo $invoice['InvoiceNumber']?></p><?php } ?>
                    </td>
                    <td>
                        <?php foreach ($invoices as $key => $invoice) { ?>
                            <p><?php echo $invoice['InvoiceDate']?></p><?php } ?>
                    </td>
                    <td>
                        <?php foreach ($invoices as $key => $invoice) { ?>
                            <p><?php echo $invoice['FirstName'] . ' ' . $invoice['LastName']?></p><?php } ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="/assets/mail/jqBootstrapValidation.js"></script>
<script src="/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="/js/scripts.js"></script> 
<!--on ajoute un slash car on doit repartir depuis la racine du site. 
</body>
</html>
<?php require 'includes/footer.php' ?>

