<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS Tours-Contact</title>
    
     <?php require('inc/links.php');?>
   

<style>
   .availability-form{
    margin-top:-50px;
    z-index: 2;
    position: relative;
    
   }
   @media screen and (max-width: 575px) {
    .availability-form{
    margin-top:25px;
    padding: 0 35px;
   }
   }
</style>
</head>
<body class="bg-light">

<?php require ('inc/header.php') ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center"> Contact US  </h2>
  <div class="h-line bg-dark"> </div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    Molestiae  molestias id <br> adipisci accusamus. 
    Aliquid laudantium porro quas laborum fugiat? Tenetur.</p>
</div>


<div class="container">
  <div class="row">
    <!-- Left side -->
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 ">
          <iframe class="w-100 rounded mb-4" height="320px" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.531719153748!2d73.88323981489185!3d18.459559087444607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eaf47d15ce33%3A0x8098faf1b47cc4ba!2sVishwakarma%20Institute%20of%20Information%20Technology%2C%20Survey%20No.%202%2F3%2F4%2C%20VIM%20Private%20Rd%2C%20Kapil%20Nagar%2C%20Kondhwa%2C%20Pune%2C%20Maharashtra%20411048!5e0!3m2!1sen!2sin!4v1666281437819!5m2!1sen!2sin"   loading="lazy" ></iframe>
        
        <h5>Address</h5>
          <a href="https://goo.gl/maps/JJq5kKPEDnLiqhvj7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
           <i class="bi bi-geo-alt-fill"></i>MS-Travel's,Pune.
          </a> 
        
        <h5 class="mt-4">Call Us</h5>
          <a href="tel: +919322491834" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919322491834
          </a><br>
          <a href="tel: +919322491834" class="d-inline-block  text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+919322491834
          </a>
      
        <h5 class="mt-4">Email Us</h5>
        <a href="mailto: ask.mstravels@gmail.com" class="d-inline-block  text-decoration-none text-dark">
          <i class="bi bi-envelope-fill"></i> ask.mstravels@gmail.com
        </a>

        <h5 class="mt-4">Follow Us</h5>
          <a href="#" class="d-inline-block text-dark fs-6 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="#" class="d-inline-block  text-dark fs-6 me-2">
            <i class="bi bi-instagram me-1"></i>
          </a>
          <a href="#" class="d-inline-block  text-dark fs-6 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
      </div>
    </div>

<!-- Right side -->
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4 ">
        <form>
          <h5>Send Us Message</h5>
          <div class="mt-3">
            <label  class="form-label" style="font-weight: 500">Name</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label  class="form-label" style="font-weight: 500">Email</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label  class="form-label" style="font-weight: 500">Subject</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label  class="form-label" style="font-weight: 500">Message</label>
            <textarea class="form-control shadow-none" rows="5" style="resize: none"></textarea> 
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
        </form>
      </div>
    </div>
 
  </div>
</div>

<?php require('inc/footer.php'); ?>

</body>
</html>