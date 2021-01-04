<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  
<?= $this->include('login/content') ?>
    
    <?= $this->renderSection('content') ?>
    <?= $this->include('login/footer') ?>
    
    <script type="text/javascript" src="<?= base_url(); ?>/js/main.js"></script>
</body>

</html>