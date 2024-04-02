<?php
  echo 'Merci '.$_POST['user_fname'].' '.$_POST['user_name'].' de nous avoir contacté à propos de "'.$_POST['subjects'].'".<br><br>Un de nos conseillers vous contactera soit à l\'adresse '.$_POST['user_mail'].' ou par téléphone au '.$_POST['user_number'].' dans les plus brefs délais pour traiter votre demande :<br><br>'.$_POST['user_message'];
?>