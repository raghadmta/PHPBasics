<html>

<body>
    <form method="post" action="">
        <div id="form-output">
            <p id="name">
                <?= $_POST["name"] ?>
            </p>
            <p id="best">
                <?= $_POST["best"] ?>
            </p>
        </div>
        Your name:
        <br>
        <input type="text" name="name">
        <br><br>
        What is the best thing about learning to code:
        <br>
        <input type="text" name="best">
        <br><br>
        <input type="submit" value="Submit Answers">
    </form>
    <a href="index.php">Reset</a>
</body>

</html>