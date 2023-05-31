<?php
  $to      = 'lucasmadranges06@gmail.com';
  $subject = 'the subject';
  $message = 'hello';

  if (mail($to, $subject, $message)) {
    echo 'Mail envoyé avec succèss.';
} else {
    echo 'Unable to send mail. Please try again.';
}
?>