<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS Tours-HOME</title>
    
     <?php require('inc/links.php');?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

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

<div class="container-fluid px-lg-4 mt4">
<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
                <img src="images\carousel\1.png " class="w-100 d-block"></img>
                </div>
                <div class="swiper-slide">
                <img src="images\carousel\2.png" class="w-100 d-block"></img>
                </div>
                <div class="swiper-slide">
                <img src="images\carousel\3.png" class="w-100 d-block"></img>
                </div>
                <div class="swiper-slide">
                  <img src="images\carousel\4.png" class="w-100 d-block"></img>
                </div>
                <div class="swiper-slide">
                  <img src="images\carousel\5.png" class="w-100 d-block"></img>
                </div>
                <div class="swiper-slide">
                  <img src="images\carousel\6.png" class="w-100 d-block"></img>
                </div>
    </div>  
</div>
<!-- 
check packages -->
<div class="container availability-form">
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Avilable Packages</h5>
            <form>
                <div class="row align-items-end ">
                    <div class="col-lg-3 mb-3">
                        <label  class="form-label " style="font-weight:500;">Starting Day</label>
                        <input type="date" class="form-control shadow-none"> 
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label  class="form-label " style="font-weight:500;">Returning Day</label>
                        <input type="date" class="form-control shadow-none"> 
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label  class="form-label " style="font-weight:500;">Adult</label>
                        <select class="form-select shadow-none" >
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label  class="form-label " style="font-weight:500;">Children</label>
                        <select class="form-select shadow-none" >
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-lg-3">
                        <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Our packages -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Packages</h2>
<div class="container">
    <div class="row">
        <div class=" col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 300px; margin:auto;">
                <img src="https://images.unsplash.com/photo-1528127269322-539801943592?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=400&q=60"  class="card-img-top" alt="...">
                <div class="card-body">
                <h5>Goa</h5>
                <h6 class="mb-4">₹40000</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       3 Days 2 Night
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       1 Receiving Car
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       2 Rooms
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       1 Guide
                    </span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       Travelling Vechicle
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       Care Taker(if required)
                    </span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
                    </span>   
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                </div>
                </div>  
            </div>
        </div>
        <div class=" col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 300px; margin:auto;">
                <img src="https://images.unsplash.com/photo-1565523925028-812f891b0e8c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=400&q=60" class="card-img-top" alt="...">
                <div class="card-body">
                <h5>Uttar Pradesh</h5>
                <h6 class="mb-4">₹50000</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       6 Days 5 Night
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       1 Receiving Car
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       4 Rooms
                    </span>
                    
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       Travelling Vechicle
                    </span><br>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       Free Club Party
                    </span>
                    
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
                    </span>   
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                </div>
                </div>  
            </div>
        </div>
        <div class=" col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 300px; margin:auto;">
                <img src="https://media.istockphoto.com/photos/traditional-nile-sailboats-near-the-banks-of-aswan-egypt-picture-id1327507461?b=1&k=20&m=1327507461&s=170667a&w=0&h=S3TFtQC9hcgHRwBgc8TJnGeCxIiBSYxY53LRoaJ3-9U=" class="card-img-top" alt="...">
                <div class="card-body">
                <h5>Texas</h5>
                <h6 class="mb-4">₹1,30,000</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       5 Days 4 Night
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                        Receiving Car
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                        Rooms
                    </span>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                        Guide
                    </span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       Travelling Vechicle
                    </span><br>
                    <span class="badge bg-light text-dark  text-wrap lh-base">
                       Free ift Hamper
                    </span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
                    </span>   
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                </div>
                </div>  
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5 ">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Packages>>></a>
        </div>
    </div>
</div>

<!-- Our facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-5 px-md-0">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHRyYXZlbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=400&q=60" width="80px">
        <h5 class="mt-3">Guide</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="https://plus.unsplash.com/premium_photo-1664360971127-4afa228e90aa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y2FyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60" width="80px">
        <h5 class="mt-3">Travelling Vechicle</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="https://images.unsplash.com/photo-1562133567-b6a0a9c7e6eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fGhvdGVsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60" width="80px">
        <h5 class="mt-3">Hotels</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="https://images.unsplash.com/photo-1517263904808-5dc91e3e7044?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzZ8fHBhcnR5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60" width="80px">
        <h5 class="mt-3">Parties</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-4">
        <img src="https://images.unsplash.com/photo-1587500154541-1cafd74f0efc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FyZXRha2VyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=400&q=60" width="80px">
        <h5 class="mt-3">Care Taker</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>  
    </div>
  </div>
</div>

<!-- Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
<div class="container mt-5">
<div class="swiper mySwiper-test">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex alin-item-center mb-3">
            <img src="https://media.istockphoto.com/photos/productivity-powered-by-digital-technology-picture-id1330965067?b=1&k=20&m=1330965067&s=170667a&w=0&h=ys_MV3zYkn2HJCtHC4s_03Sz1MUC2BZv6PcDdk__XSc=" width="30px" >
            <h6 class="m-0 ms-2">Saloni</h6>
          </div>
          <p>It was a very good experience. All the tour program was well planned and properly executed. We had a wonderful experience in the house boat stay...Amazing</p>
          <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex alin-item-center mb-3">
            <img src="https://media.istockphoto.com/photos/shot-of-a-young-businessman-using-a-laptop-in-a-modern-office-picture-id1354898581?b=1&k=20&m=1354898581&s=170667a&w=0&h=Jkv4uO6gEaLFtz6F22ZrEk4VQljqLNKMuVpdRlIYoEY=" width="30px" >
            <h6 class="m-0 ms-2">Makarand</h6>
          </div>
          <p>Tour planning should be properly guided by travel  agent.Because due to improper route planning sometimes some tourist spots may be missed out.Everyone must experienced </p>
          <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex alin-item-center mb-3">
            <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8d29tYW58ZW58MHx8MHx8&auto=format&fit=crop&w=400&q=60" width="30px" >
            <h6 class="m-0 ms-2">Mahima</h6>
          </div>
          <p>We had booked a family trip for Himachal and Amritsar... The overall experience was good... Hotels were good... Food quality served was very good...
          </p>
          <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning" ></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill"></i>
          </div>
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>  
    </div>
</div>

<!-- Reach Us -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-4 bg-white rounded">
    <iframe class="w-100 rounded" height="320px" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.531719153748!2d73.88323981489185!3d18.459559087444607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eaf47d15ce33%3A0x8098faf1b47cc4ba!2sVishwakarma%20Institute%20of%20Information%20Technology%2C%20Survey%20No.%202%2F3%2F4%2C%20VIM%20Private%20Rd%2C%20Kapil%20Nagar%2C%20Kondhwa%2C%20Pune%2C%20Maharashtra%20411048!5e0!3m2!1sen!2sin!4v1666281437819!5m2!1sen!2sin"   loading="lazy" ></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel: +919322491834" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+919322491834</a><br>
          <a href="tel: +919322491834" class="d-inline-block  text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i>+919322491834</a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-twitter me-1"></i>Twitter
          </span></a><br>
          <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-instagram me-1"></i>Instagram
          </span></a><br>
          <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
          <i class="bi bi-facebook me-1"></i>Facebook
          </span></a><br>
        </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        effect: "fade",
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay:3500,
            disableOnInteraction: false,
        }
      });
</script>
<script>
      var swiper = new Swiper(".mySwiper-test", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop:true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints:{
          320:{
            slidesPerView:"1",
          },
          640:{
            slidesPerView:"1",
          },
          768:{
            slidesPerView:"2",
          },
          1024:{
            slidesPerView:"3",
          },
        }
      });
    </script>
</body>
</html>