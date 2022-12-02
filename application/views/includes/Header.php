<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Japan Travel</title>
  <link rel="icon" type="image/x-icon" href="<?=base_url()?>images/favicon.svg">

  <link rel="stylesheet" href="<?=base_url()?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>vendor/components/font-awesome/css/all.min.css">

  <link rel="stylesheet" href="<?=base_url()?>css/main.css">
  <link rel="stylesheet" href="<?=base_url()?>css/mobile_main.css">

  <!-- google roboto font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">  

</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?=base_url()?>"><i class="fa-solid fa-mountain-sun"></i>&nbsp;&nbsp;Japan Travel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?=$this->router->fetch_class() == 'home' ? 'active' : ''?>" href="<?=base_url()?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$this->router->fetch_class() == 'blog' ? 'active' : ''?>" href="<?=base_url()?>blog/list/">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$this->router->fetch_class() == 'about_us' ? 'active' : ''?>" href="<?=base_url()?>about_us">About Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
  </header>