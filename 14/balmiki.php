<!DOCTYPE html>
<html>
<head>
    <title>User information</title>
    <link href="../3rd/css/bootstrap.min.css" rel="stylesheet">
    <script src="../3rd/js/bootstrap.bundle.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    .regit{
        width: 400px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 5px;
        margin-top: 100px;
        box-shadow: 2px 2px 19px black;
    }
</style>
<body>
    <div class="container">
        <div class="regit pt-3 pb-3 pe-3 ps-3">
        <div>
            <div class="text-center h3">About you</div>
            <div>
                <span>Name :</span>
                <?php echo $_POST["name"]; ?>
            </div>
            <div class="pt-3">
                <span>Number :</span>
                <?php echo $_POST["contact"]; ?>
            </div>
            <div class="pt-3">
                <span>Email :</span>
                <?php echo $_POST["email"]; ?>
            </div>
            <div class="pt-3">
                <span>Gender :</span>
                <?php echo $_POST["gender"]; ?> 
            </div>
            <div class="pt-3">
                <label>Date of birth :</label>
                <?php echo $_POST["dob"]; ?>
            </div>
            <div class="pt-3">
                <label>Your State :</label>
                <?php echo $_POST["state"]; ?>
            </div>
            <div class="pt-3">
                <label>city :</label>
                <?php echo $_POST["city"]; ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>