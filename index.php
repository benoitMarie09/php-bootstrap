<?php
ini_set('display_errors', 1);
error_reporting(~0);
#region === Use namespace ============================================
use Html\Html;
use Html\Body\Navbar\Navbar;
use Html\Body\Navbar\Link;
#endregion ===========================================================
#region === Intégration des classes ==================================
spl_autoload_register( function ( $class ) {
    require_once( 'class/' . str_replace( '\\', '/', $class ). '.php' );
    });
#endregion ===========================================================

$html = new Html();
$nav = new Navbar( "My Notes" );
$nav->addLink( new Link( 'Accueil', 'index.php?page=accueil' ) );
$nav->addLink( new Link( 'Création', 'index.php?page=creation' ) );
$html->body->addElement( $nav );
echo $html->render()

#region === Router ===================================================
// $page = $_REQUEST['page'] ?? 'accueil' ;
// if (! file_exists(  "pages/$page.php" )){
//     echo "404 page non trouvée";
// }
// else{
//     include( "pages/$page.php");
// };
#endregion ===========================================================

?>
