<?php
    include_once('./src/header.inc.php');
?>
<body>
    <header>
        <h1>Vacances à la montagne</h1>
        <nav>
            <ul>
                <li><a href="#"><img src="./asset/logo.png" alt="logo france montagne"></a></li>
                <li><a href="#" class="active">guide des stations</a></li>
                <li><a href="#guide">magazine</a></li>
                <li><a href="#">info live</a></li>
                <li><a href="#footer">réservation</a></li>
                <li><img src="./asset/loop.png" alt="loupe"></li>
            </ul>
        </nav>
    </header>
    <?php
        include_once('./src/main.inc.php');
        include_once('./src/footer.inc.php');
    ?>
    <script src="./js/app.js"></script>
</body>
</html>