<?php

error_reporting(0);
if (!file_exists('token')) {
    mkdir('token', 0777, true);
}

include ("curl.php");
echo "\n";
echo "\e[94m       CIYEEE AKHIR NYA SAMPE SINI JUGA!!    \n";
echo "\e[91m      HAYOOO MAU NGAPAIN BUKA SCRIPT INI?    \n";
echo "\e[93m     MAU NGECROOT + CROOT CROOT CROOT YAA!!  \n";
echo "\n";
echo "\e[96m[?] Masukkan kemana coba? : ";
$nope = trim(fgets(STDIN));
$register = register($nope);
if ($register == false)
    {
    echo "\e[91m[x] Belum Rejeki \n";
    }
  else
    {
    otp:
    echo "\e[96m[!] nomor togel hari ini adalah: ";
    $otp = trim(fgets(STDIN));
    $verif = verif($otp, $register);
    if ($verif == false)
        {
        echo "\e[91m[x] Mungkin Lagi Apes Aja!!!\n";
        goto otp;
        }
      else
        {
        echo "\033[31;1m[!] Mencoba Claim  Voucher : COBAGOFOOD090320A !\n";
        $claim = claim1($verif);
        if ($claim == false){
            echo "\033[34;1m[!] Gagal claim otomatis, Silahkan Claim Manually\n";
			      sleep(3);
            echo "\033[31;1m[!] Mencoba Claim Voucher : COBAINGORIDEPAY !\n";
			      goto ride;
            }else{
                echo "\e[+] ".$claim."\n";
				    sleep(3);
                echo "\033[31;1m[!] Mencoba Claim Voucher : COBAGOFOOD090320A !\n";
                sleep(3);
                goto ride;
            }
            ride:
            $claim = ride($verif);
            if ($claim == false){
            echo "\033[34;1m[!] Gagal claim otomatis, Silahkan Claim Manually\n";
			      sleep(3);
            echo "\033[31;1m[!] Mencoba Claim Voucher :COBAINGORIDE !\n";
            sleep(3);
            }else{
                echo "\e[+] ".$claim."\n";
				    sleep(3);
                echo "\033[31;1m[!] Mencoba Claim Voucher : COBAINGORIDEPAY !\n";
                sleep(3);
                goto pengen;
            }
            pengen:
            $claim = cekvocer($verif);
            if ($claim == false ) {
            echo "\033[34;1m[!] Gagal claim otomatis, Silahkan Claim Manually\n";
           }
		  else
			{
			echo $claim . "\n";
			}
		}
	}
}
?>
