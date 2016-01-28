<?php
include 'valida_cookies.inc';

if(!isset($_POST["email"]))
{
    echo "<html><body>";
    echo "<form method=\"POST\" action=\"gera_email.php\">";
    echo "Seu e-mail: <input type=\"text\" name=\"email\" size=\"30\">";
    echo " <input type=\"submit\" name=\"enviar\" value=\"Enviar\">";
    echo "</form>";
    echo "</body></html>";
}
else
{
    $email = $_POST["email"];

    if (strlen($email)<8 || substr_count($email, "@")!=1  || substr_count($email, ".")==0)
	   echo "Você fez merda na hora de digitar o e-mail.";
    else
    {
        $usuario = $_COOKIE["usuario"];

    
         //mail($email, "AUMENTE SEU PÊNIS", "Zoeira, vai ficar pequeno mesmo.", "From: Brunao <brunocorrea23@barbaslobby.com.br>", "-f brunocorrea23@barbaslobby.com.br");


        mail($email, "AUMENTE SEU PÊNIS", "Zoeira, vai ficar assim mesmo", "From: \"Barba's Lobby\"<admin@barbaslobby.com.br>", "-r admin@barbaslobby.com.br");
        echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"></head><body>";
        echo "<p align=\"center\">As boas novas foram enviadas</p>";
        echo "<p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
        echo "</body></html>";
    }
}

?>
