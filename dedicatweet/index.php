<link rel="stylesheet" type="text/css" href="../base.css" media="screen" />
<title>Twitter Dedicated Tweet - FancyTweet</title>
</head>

<body>
    <?php 
        require_once '../head.php'; 
        require_once '../header.php';
    ?>
    
    <div id="main">
        <form name="tweetbox" method="POST">
        <?php
       if (isset($user)) {
             if (isset($_POST['submit'])) {
                require_once '../database.php';
                $myDB = new Database($db['host'], $db['username'], $db['password'], $db['database']);
                $myDB->connect();

                $table = "dedications";
                
                $user_id = $_SESSION['user_id'];
                $tweet_number = $_POST['tweet_number'];
                $tweet_message = $_POST['tweet_message'];
                
                $data = array('user_id'=>$user_id, 'tweet_count'=>$tweet_number, 'dedication_message'=>$tweet_message, 'status'=>'0');
                
                $myDB->insert($table, $data);
            }
            ?>
            <h3>Your current tweet count is:&nbsp;&nbsp;&nbsp;<em>X</em></h3>
            Dedicated Tweet Number:<input type="text" name="tweet_number"/><br/>
            Dedicated Tweet Message:<br/><textarea style="width:50%" rows="3" name="tweet_message"></textarea>
            <br/>
            <input type="submit" name="submit" value="Save"/>
        </form>
            <?php
        } else {
            echo "You are not signed in via Twitter. Sign in with twitter first to start Dedicating your Tweets!";
        }
        ?>
    </div>
</body>