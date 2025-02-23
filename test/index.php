<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=".//script.js"></script>
    <style>#content {
    transition: opacity 0.3s ease-in-out;
}
</style>
</head>
<body>
    <div class="" id="">
        <?php include 'bar.php'; ?>
    </div>

    <div class="sidebar">
        <?php include 'sidebar.php'; ?>
    </div>
    

    <div class="content" id="content">
        <?php include 'content.php'; ?>
    </div>

    <div id="loader" style="display: none; text-align: center; margin-top: 20px;">
    <img src="loader.gif" alt="Chargement..." width="50">
</div>


</body>
</html>
