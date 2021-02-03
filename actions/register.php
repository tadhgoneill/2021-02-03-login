<?php require_once '../config.php'; ?>
<?php

try {
  throw new Exception("Not yet implemented");
}
catch(Exception $ex) {
  $request->session()->set("flash_message", $ex->getMessage());
  $request->session()->set("flash_message_class", "alert-warning");

  $request->redirect("/views/auth/register-form.php");   
}
?>