<?php

    session_start();

    function __autoload($classname)
    {
        require_once($classname . '.php');
    }

    $registratieformulier   =   "registratie.php";
    $connection =   new PDO( 'mysql:host=localhost;dbname=phpoefening029', 'root', '' );


    if (isset($_POST['generate-wachtwoord']))
    {
        $wachtwoord_gen     =   wil_wachtwoord(16);

        $_SESSION['registratie']['email']        =   $_POST['email'];
        $_SESSION['registratie']['wachtwoord']   =   $wachtwoord_gen;

        header( 'location: ' . $registratieformulier );
    }

    elseif (isset($_POST['submit'])) 
    {
        $email      =   $_POST['email'];
        $wachtwoord   =   $_POST['wachtwoord'];

        $_SESSION['registratie']['email']      =   $email;
        $_SESSION['registratie']['wachtwoord'] =   $wachtwoord;

        $isEmail    =   filter_var( $email, FILTER_VALIDATE_EMAIL );


        if ($email ==='') 
        {
            $lege_email     =   new Message ("fout", "Er is geen E-mailadres opgegeven. Probeer opnieuw.");
            header( 'location: ' . $registratieformulier );
        }

        elseif (!$isEmail) 
        {
            $lege_email     =   new Message ("fout", "'". $email . "' is geen geldig E-mailadres. Probeer opnieuw.");
            header( 'location: ' . $registratieformulier );
        }

        if ($isEmail) 
        {
            $db = new Database( $connection );

            $gebruikers   =   $db->query( 'SELECT * 
                                        FROM users 
                                        WHERE email = :email', 
                                    array(':email' => $email ) );

            if (isset($gebruikers[0])) 
            {
                $gebruiker_bestaat_al     =   new Message ("fout", "'". $email . "' bestaat al. Gelieve een ander E-mailadres te gebruiken.");
                header( 'location: ' . $registratieformulier );
            }

            else
            {
                $nieuwe_gebruiker   =   Gebruikers::nieuwe_gebruiker($connection, $email, $wachtwoord);

                if ($nieuwe_gebruiker)
                {
                    $gebruiker_toegevoegd = new Message("succes", "Welkom, u bent vanaf nu geregistreerd in onze app.");
                    header('location: dashboard.php');
                }
            }        
        }
    }

   function wil_wachtwoord( $lengte) 
   {
    $karakters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $wachtwoord = substr( str_shuffle( $karakters ), 0, $lengte );
    return $wachtwoord;
    }
?>