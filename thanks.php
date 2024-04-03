<?php
  if($_POST){
      
      //initializing array of errors
      $errors = array();

      //starting validation
      if (empty($_POST['user_name'])){
        $errors['name1'] = 'Your name cannot be empty';
      }
      if (strlen($_POST['user_name']) < 2){
        $errors['name2'] = "Your name must be at least 2 characters long";
      }
      if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['user_name'])){
        $errors['name3'] = "Only letters and white space allowed";
      }
      if (empty($_POST['user_fname'])){
        $errors['firstname1'] = 'Your firstname cannot be empty';
      }
      if (strlen($_POST['user_fname']) < 2){
        $errors['firstname2'] = "Your firstname must be at least 2 characters long";
      }
      if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['user_fname'])){
        $errors['firstname3'] = "Only letters and white space allowed";
      }
      if (empty($_POST['user_mail'])){
        $errors['mail1'] = 'Your mail cannot be empty';
      }
      if (!filter_var($_POST['user_mail'],FILTER_VALIDATE_EMAIL)){
        $errors['mail2'] = 'Invalid email format';
      }
      if (empty($_POST['user_number'])){
        $errors['number1'] = 'Your phone number cannot be empty';
      }
      if (strlen($_POST['user_number']) < 10){
        $errors['number2'] = "Your phone number must be at least 10 characters long";
      }
      if (!preg_match("/^[0-9]*$/", $_POST['user_number'])){
        $errors['number3'] = "Only numbers allowed";
      }
      

      //checking for errors
      if (isset($errors['name1'])){
          echo $errors['name1'];
      }
      if (isset($errors['name2'])){
        echo $errors['name2'];
      }
      if (isset($errors['name3'])){
        echo $errors['name3'];
      }
      if (isset($errors['firstname1'])){
        echo $errors['firstname1'];
      }
      if (isset($errors['firstname2'])){
        echo $errors['firstname2'];
      }
      if (isset($errors['firstname3'])){
        echo $errors['firstname3'];
      }
      if (isset($errors['mail1'])){
        echo $errors['mail1'];
      }
      if (isset($errors['mail2'])){
        echo $errors['mail2'];
      }
      if (isset($errors['number1'])){
        echo $errors['number1'];
      }   
      if (isset($errors['number2'])){
        echo $errors['number2'];
      }
      if (isset($errors['number3'])){
        echo $errors['number3'];
      }

      //redirecting to success message if no errors
      if (count($errors) == 0){
        echo 'Merci '.$_POST['user_fname'].' '.$_POST['user_name'].' de nous avoir contacté à propos de "'.$_POST['subjects'].'".<br><br>Un de nos conseillers vous contactera soit à l\'adresse '.$_POST['user_mail'].' ou par téléphone au '.$_POST['user_number'].' dans les plus brefs délais pour traiter votre demande :<br><br>'.$_POST['user_message'];
      }
    
  }
  
 