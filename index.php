<?php 
include "topo.php";

?>
<?php
    if (isset($_GET['p'])){
        $p = $_GET['p'];
        switch($p){
            case 1:
            include "meio.php";
            break;
            case 2: 
              include "vestidos.php";
            break;
            case 3: 
              include "ternos.php";
            break;
            case 4: 
              include "superior.php";
            break;
            case 5: 
              include "inferior.php";
            break;
            case 6: 
              include "alugar.php";
            break;
            case 7: 
              include "alugar.php";
            break;
            case 8: 
              include "alugar.php";
            break;
            case 9: 
              include "alugar.php";
            break;
            case 10: 
              include "sobrenos.php";
            break;
            case 11: 
              include "login.php";
            break;
            case 12: 
              include "cadastrar.php";
            break;
            case 13: 
              include "cadastrar.php";
            break;
            case 14: 
              include "personalizado.php";
            break;
            case 15:
              include "enviado.php";
            break;
            case 16:
              include "falecon.php";
            break;
            case 17:
              include "comprar.php";
            break;
            default: include "meio.php";
            break;
        }

    }
    else{
        include "meio.php"; //pagina default
    }
?>
<?php
    include "rodape.php";
?>