<?PHP

include 'MailChimp.php';

use \DrewM\MailChimp\MailChimp;

$MailChimp = new MailChimp('c2f307730d190444ebb001d308c5f5f2-us12');

$list_id = '54a4488ddb';

$result = $MailChimp->post("lists/$list_id/members", [

    'email_address' => $email , 'FNAME' => $name , 'status' => 'subscribed',

          ]);


?>
