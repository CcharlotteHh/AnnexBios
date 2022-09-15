<?php

  require 'functions.php';

  if(isset($_POST['afrekenen_submit'])) {
    afrekenen($_POST);
    // header('Location: ../../index.html');
  }