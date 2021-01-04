<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?= $this->include('register/content') ?>
    
    <?= $this->renderSection('content') ?>
    <?= $this->include('register/footer') ?>
    
    <script type="text/javascript" src="/js/main.js"></script>
</body>

</html>