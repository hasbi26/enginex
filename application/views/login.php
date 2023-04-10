<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Engine X</title>


<link rel="stylesheet" href="<?= base_url(); ?>assets/css/login.css" media="all">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome.css" media="all">

<?php if($this->session->flashdata('message_login_error')): ?>
			<div class="text-danger">
					<?= $this->session->flashdata('message_login_error') ?>
			</div>
		<?php endif ?>

<div class="container"> <div class="row"> <div class="col-md-6"> <div class="card"> 
    <!-- <form onsubmit="event.preventDefault()" class="box">  -->
    <form action="" method="post"  class="box">
    <h1>Login</h1> 
    <p class="text-muted"> Please enter your login and password!</p> 
    <!-- <input type="text" name="username" placeholder="Username" value="" required> -->
    <input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>"
					placeholder="Your username or email" value="<?= set_value('username') ?>" required />
    <div class="text-danger">
					<?= form_error('username') ?>
				</div> 
    <input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
					placeholder="Enter your password" value="<?= set_value('password') ?>" required />
    <div class="text-danger">
					<?= form_error('password') ?>
				</div>
    <a class="forgot text-muted" href="#">Forgot password?</a> <input type="submit" name="" value="Login" href="#"> 
   


<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-3.6.3.min.js"></script>

