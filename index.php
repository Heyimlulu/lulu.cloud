<!DOCTYPE html>
<html>

<head>
    <title>lulu.cloud</title>
    <meta name="description" content="Lulu Cloud">
    <link rel="shortcut icon" href="assets/favicon.jpg" type="image/x-icon">
    <meta name="keywords" content="lulu cloud, lulu, cloud, social, media, social media">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preload" href="assets/font/AzoSuper.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/font.css" />
    <link rel="stylesheet" href="assets/css/styles.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SOCIAL MEDIAS -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lulu.cloud/" />
    <meta property="og:title" content="Lulu Cloud" />
    <meta property="og:description" content="Social media reference landing page" />
    <meta property="og:image" content="https://lulu.cloud/assets/favicon.png">

    <!-- TWITTER CARD -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://lulu.cloud/">
    <meta property="twitter:title" content="Lulu Cloud">
    <meta property="twitter:description" content="Social media reference landing page">
    <meta property="twitter:image" content="https://lulu.cloud/assets/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TPHFP5VLCN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-TPHFP5VLCN');
    </script>

    <?php 
        function getIPAddress() {  
            if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  // whether ip is from the share internet  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  // whether ip is from the proxy  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
            } else { // whether ip is from the remote address  
                $ip = $_SERVER['REMOTE_ADDR'];  
            }  
            return $ip;  
        }  

        $ip = getIPAddress();  

        $servername = 'ec2-18-215-96-22.compute-1.amazonaws.com:5432';
        $user = 'ioygidaukwtmns';
        $password = '71f64771f7bde885093c8a91d8c25abd64cc8b5d523560104c377a50ce65e432';
        $db = 'd832o2qhrcs54n';

        // connect to the database
        $conn = mysqli_connect($servername, $user, $password, $db);

        // Checking connections
        if ($conn -> connect_error) {
            die("Connection failed: " . $conn -> connect_error);
        } 

        // echo "Connected successfully";
        $query1 = "CREATE TABLE IF NOT EXISTS logs (
                    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                    date DATE, 
                    ip_address VARCHAR(45)
                );";

        $query2 = "INSERT INTO logs (date, ip_address) VALUES ('" . date('Y-m-d') . "', '{$ip}');";
            
        $conn -> query($query1);
        $conn -> query($query2);
            
        $conn -> close();
    ?>
</head>

<body class="is-preload">
    <h1 id="title">
        Hello, <br>
        <span id="underline">
            I'm Lulu
        </span>
    </h1>
    <div id="social">
        <ul>
            <li>
                <a href="https://discord.com/users/265896171384340480" target="_blank" rel="noopener noreferrer"
                    aria-label="Discord">
                    <i class="fa-brands fa-discord"></i>
                </a>
            </li>
            <li>
                <a href="https://open.spotify.com/user/wt118h2koc880wzp9dntx4l0l?si=b8ebd45a291f43b9" target="_blank"
                    rel="noopener noreferrer" aria-label="Spotify">
                    <i class="fa-brands fa-spotify"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/Luludev" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/Heyimlulu" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
            <li>
                <a href="https://steamcommunity.com/id/yukibutt/" target="_blank" rel="noopener noreferrer"
                    aria-label="Steam">
                    <i class="fa-brands fa-steam"></i>
                </a>
            </li>
            <li>
                <a href="mailto:hello@lulu.cloud" target="_blank" rel="noopener noreferrer" aria-label="Contact">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
    <footer id="copyright"></footer>
</body>
<script src="assets/js/main.js"></script>
<script>
    document.querySelector('#copyright').innerHTML = `Copyright &copy; ${new Date().getFullYear()} Lulu. All Rights Reserved`;

    console.log('%cHello there :)', 'font-size:2rem;font-weight:bold;color:red;');
</script>

</html>