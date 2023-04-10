<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title> Test System  </title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
    {{-- <link rel="stylesheet" href="../css/stylehome.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
    <!-- jquery cdn link  -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <!-- Demo styles -->
    <!-- video cdn library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <style>


        body {
            /* background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000; */
            margin: 0;
            padding: 0;
        }
#map{
           width: 100%;
           height: 500px;
       }
        .swiper {
            width: 100%;
            height: 100%;
            font-size: 14px;
            position: relative;

        }


   .container_vedio{
           max-width: 800px;
           margin: 0px auto;

       }
       .yt-holder{
           position: relative;
           overflow: hidden;
           height: 0;
           padding-bottom: 56%;
       }
       .yt-holder > iframe {
           position: absolute;
           width: 100%;
           height: 100%;
       }

/*======= Scroll bar =======*/
::-webkit-scrollbar{
  width: 15px;
  background: #fff;
}

::-webkit-scrollbar-thumb{
  width: 100%;
  background: #337ab7;
  border-radius: 2em;
}

::-webkit-scrollbar-thumb:hover{
  background: #454f6b;
}

/*======= Main CSS =======*/
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none; border:none;
  text-decoration: none;
  list-style: none;
}

body{
  background: #fff;
  text-decoration: none;
  font-family: 'Tajawal', sans-serif;
  margin: 0;
  padding: 0;
}

.to-top {
    background: white;
    position: fixed;
    bottom: 16px;
    right:32px;
    width:50px;
    height:50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size:32px;
    color:#1f1f1f;
    text-decoration: none;
    opacity:0;
    pointer-events: none;
    transition: all .4s;
  }

  .to-top.active {
    bottom:32px;
    pointer-events: auto;
    opacity:1;
  }


label.logo{
    color: rgb(43, 39, 39);
    font-size: 1rem;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
  }
  nav ul{
    float: left;
    margin-right: 100px;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
  }
  nav ul li a{
    color: rgb(43, 39, 39);
    font-size: 1.0625rem;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }
  nav a.active,a:hover{
    background: #f72585;
    transition: .5s;
    color: #fff;
  }
  .logo333.active,.logo333:hover{
    background: none;
    transition: .5s;
    color: #fff;
  }
  .checkbtn{
      font-size: 1.4rem;
      color: #383d41;
      float: left;
      line-height: 80px;
      margin-left: 40px;
      cursor: pointer;
      display: none;
  }
  #check{
    display: none;
  }
  header{
      width:100%;
      display: flex;
      align-items: center;
      justify-content: center;
      padding:.2rem 3%;
      background:#fff;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
      position: fixed;
      top: 0; left: 0;
      z-index: 1000;

  }


   .img_logo{
      height: 4.5rem;
      margin-left: 2rem;
  }
  #title_logo{
    display: none;
    color: #383d41;
}


  @media (max-width: 952px){
    label.logo{
      font-size: 1rem;
      padding-left: 50px;
      font-weight: 700;
    }
    nav ul li a{
      font-size: 1rem;
    }
  }
  @media (max-width: 858px){
    .checkbtn{
      display: block;
    }
    ul{
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #337ab7;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all .5s;
    }
    header{
      justify-content: space-between;
    }
    nav ul{

      margin-right: 100px;
    }
    nav ul li{
      display: block;
      margin: 50px 0;
      line-height: 30px;
    }

    nav ul li a{
      font-size: 1rem;
    }
    a:hover,a.active{
      background: none;
      color: #fff;
    }
    #check:checked ~ ul{
      left: 0;
    }
  }



  /* ======================= MEDIA QUERIES=================== */

  @media screen and (max-width: 480px) {
      #header .img_logo{
          height: 3rem;

      }
  }
  @media (max-width:788px){

      #header .img_logo{
          height: 3rem;

      }
      header{
          padding:1rem 2%;
          justify-content: space-between;
      }

      nav ul{

        margin-right: 0px;
      }
      #title_logo{
          display: contents ;
          font-size: 1rem;
          color:#383d41;
          font-family: 'Tajawal', sans-serif;
      }
  }

section{
  position: relative;

}

.section{
  color: #fff;
  background: #202834;
  padding: 35px 200px;
  transition: 0.3s ease;
}


/*======= Background slider =======*/
.bg-slider{
  /* z-index: 777; */
  position: relative;
  width: 100%;
  min-height: 100vh;
  top: 5rem;
}

.bg-slider .swiper-slide{
  position: relative;
  width: 100%;
  height: 100vh;
  /* top: 0%; */
}

.bg-slider .swiper-slide img{
  width: 100%;
  height: 100vh;
  object-fit: cover;
  background-position: center;
  background-size: cover;
  pointer-events: none;

}
.image{
  width: 100%;
  height: 100vh;
  background-position: center;
  background-size: cover;
  background-image: url("../images/22.jpg");
  margin-top: 20%;
  margin-bottom: 10%;
}
.image-overlay{
  width: 100%;
  height: 100vh;
  /* background-color: rgba(255, 166, 0, 0.5); */
  background-color: #161b24;
  opacity: 0.375;
  display: flex;
  justify-content: center;
  align-items: center;

}
.swiper-slide .text-content{
  position: absolute;
  top: 30%;
  color: #fff;
  margin: 0 100px;
  transition: 0.3s ease;
  background-color: rgba(0,0,0,.75);
  padding: 30px 24px 60px;
  display: block;
    background-color: rgba(0,0,0,.75);
    max-width: 783px;
    padding: 40px 55px 20px 30px;
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.swiper-slide .text-content .title{
  font-size: 4em;
  font-weight: 700;
  text-shadow: var(--text-shadow);
  margin-bottom: 20px;
  transform: translateY(-50px);
  opacity: 0;
}

.swiper-slide-active .text-content .title{
  transform: translateY(0);
  opacity: 1;
  transition: 3s ease;
  transition-delay: 0.5s;
  transition-property: transform, opacity;
}

.swiper-slide .text-content .title span{
  font-size: 0.3em;
  font-weight: 300;
}

.swiper-slide .text-content p{

  padding: 10px 0px;

  transform: translateX(-80px);
  opacity: 0;
}

.swiper-slide-active .text-content p{
  transform: translateX(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}

.swiper-slide .text-content .read-btn{

  margin-top: 40px;
  transform: translateX(50px);
  opacity: 0;
  /* US CODE */
  border: solid 2px #f72585;
  background-color: #f72585;
  text-decoration: none;
  color: #fff;
  /* font-size: 1em; */
  font-weight: 700;
  /* padding: 8px 25px; */
  /* min-width: 150px; */
  border-radius: 999px;
  display: inline-block;
  line-height: 1em;
  text-align: center;
  transition: .2s all linear;
  /* margin: 5px 0; */
  margin-right: 40px;
  box-sizing: border-box;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  padding: 15px;
  min-width: 220px;
  font-size: 20px;

}
.site {
    text-decoration: none;
    color: #fff;
}

.swiper-slide-active .text-content .read-btn{
  transform: translateX(0);
  opacity: 1;
  transition: 1s ease;
  transition-delay: 0.3s;
  transition-property: transform, opacity;
}

.swiper-slide .text-content .read-btn i{
  font-size: 1.6em;
  transition: 0.3s ease;
}

.swiper-slide .text-content .read-btn:hover i{
  transform: translateX(5px);
}

.dark-layer:before{
  content: '';
  position: absolute;
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.1);
}


/* ///////////////////video section////////////////////////////// */

    /*=============================== style video===================================== */
      .title_video{
        /* margin-top: 3rem; */
        text-align: center;
        margin-bottom: 2rem;
        /* margin-top: 2rem; */
        color: rgb(110, 110, 110) !important;
        font-family: 'Tajawal', sans-serif;
        animation-duration: 1s;
       }
       .title_video h1:hover{
        color:#337ab7;
       }
       .title_video h2{
        color:#337ab7;
        margin-top: 2rem;
       }
       .title_video h1{
        color:#337ab7;
        margin-top: 6rem;
       }

/* /////////////////////////end video section//////////////////////////////////// */
/* /////////////start application section///////////////////////// */
.section_home {
  
    background: url('../images/a4.jpg') no-repeat;
    /* background-size: 66%; */
    background-size: 67%;
    background-position: left;
    overflow: hidden;
    padding: 8.57rem 0rem 5rem 0rem;
    margin: 4rem auto;
}

.section_wrap1{
  width: 37%;
  height: 30vh;
  float: right;
  background-color: #ffffff;
  padding: 3.5rem 1rem;
  box-sizing: border-box;
  box-shadow: 0 16px 20px -6px rgb(199, 199, 199);
  text-align: center;
}
  .section_wrap1 p{
  color: rgb(110, 110, 110);
  font-size: 1.5rem;
  margin-bottom: 2.4rem;
  }
  .section_wrap1 h1{
  color: #337ab7;
  margin-bottom: .75rem;
  font-size: 1.5rem;
  }
  .section_wrap1 .fill_app{
    color: #fff;
    text-decoration: none;
    /* font-size: 1.2rem; */
    background-color: #f72585;
    /* padding: 1rem 1.5rem; */
    transition: .2s all linear;
    transform: translateX(50px);
    border: solid 2px #f72585;
    font-weight: 700;
    border-radius: 999px;
    outline: none;
    line-height: 1em;
    text-align: center;
    cursor: pointer;
    padding: 15px;
    min-width: 220px;
    font-size: 20px;

  }

  /* /////////////////end application section/////////////////// */



/*======= Media queries (max-width: 1100px) =======*/
@media screen and (max-width: 1100px){

  .section{
    padding: 25px 50px;
  }


  .swiper-slide .text-content{
    margin: 0 120px 0 50px;
  }

}

/*======= Media queries (max-width: 785px) ===============================================================*/
@media screen and (max-width: 785px){


  .section{
    padding: 25px 20px;
  }


  .swiper-slide .text-content{
    margin: 0 30px;
    padding: 30px 35px 10px 20px;
  }
  header{
    justify-content: space-between;
  }
  nav ul{

    margin-right: 0px;
  }
  .swiper-slide .text-content .title{
    font-size: 1.5rem;
  }

  .swiper-slide .text-content .title span{
    font-size: .5rem;
  }

  .swiper-slide .text-content p{
    font-size: 0.5rem;
  }
  .bg-slider .swiper-slide img{
    width: 100%;
    height: 70vh;


  }


  .swiper-slide .text-content .read-btn{
    font-size: 0.8rem;
    padding: 5px 15px;
    margin-top: 20px;
    margin-right: 0px;
    min-width: 100px;
  }
  .swiper-button-next:after, .swiper-button-prev:after {
    font-size: 2rem;
}
.bg-slider{

    min-height: 50vh;
    /* top: 6rem; */
  }

.bg-slider .swiper-slide{

    height: 70vh;
    /* top: 0%; */
  }
 .swiper-slide{

    height: 70vh;
    /* top: 0%; */
  }
   .title_video h2{
    margin-top: 0rem;
   padding: .8rem;
   font-size: .5rem;
   margin-bottom: 0rem;

   }
   .title_video h1{

   font-size: 1rem;
   }
   .container{

    height: 350px;
  }
  .section_home {

    background-size: 80%;
    background-position: left;

    padding: 3rem 0rem 3rem 0rem;
    margin: 0rem auto;
}

.section_wrap1{
    width: 47%;
    height: 30vh;
    float: right;

    padding: 3.5rem 1rem;

}
    .section_wrap1 p{

    font-size: .7rem;
    margin-bottom: 2.4rem;
    }
    .section_wrap1 h1{

    margin-bottom: .75rem;
    font-size: .9rem;
    }
    .section_wrap1 .fill_app{

      padding: 15px;
      min-width: 50px;
      font-size: .8rem;

    }
}
/* ///////////////end Queryyyyyyyyyyyyyyyy////////////// */



/* ///////////contact section start */
.container_main {
          font-family: 'Tajawal', sans-serif;
          /* background-color: #fff; */
          line-height: 1.9;
          color: #8c8c8c;
          position: relative; }
 .container_main:before {
          z-index: -1;
          position: absolute;
          height: 50vh;
          content: "";
          top: 0;
          left: 0;
          right: 0;
          background: #3379b728;
        width: 100%; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
          font-family: 'Tajawal', sans-serif;
          /* color: #000; */
        }

a {
          -webkit-transition: .3s all ease;
          -o-transition: .3s all ease;
          transition: .3s all ease; }
  a, a:hover {
          text-decoration: none !important; }

.text-black {
          color: #000; }

.content_main {
  direction: rtl;
  padding: 7rem 0; }

.heading {
  font-size: 2.5rem;
  font-weight: 900; }

.form-control {
  border: none;
  border-bottom: 1px solid #ccc;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0;
  background: none; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.col-form-label {
  color: #000;
  font-size: 13px; }

/*.btn33, .form-control, .custom-select {*/
/*  height: 45px; }*/

.custom-select:active, .custom-select:focus {
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-color: #000; }

.btn33 {
  color: #fff;
    text-decoration: none;
    /* font-size: 1.2rem; */
    background-color: #f72585;
    /* padding: 1rem 1.5rem; */
    transition: .2s all linear;
    transform: translateX(50px);
    border: solid 2px #f72585;
    font-weight: 700;
    border-radius: 999px;
    outline: none;
    line-height: 1em;
    text-align: center;
    cursor: pointer;
    padding: 15px;
    min-width: 220px;
    font-size: 20px;
    margin: 0px auto;
 }
/*  .btn33.btn-primary {*/
/*    background: #f72585;*/
/*    color: #fff;*/
/*    padding: 15px 20px; }*/
/*  .btn33:hover {*/
/*    color: #fff; }*/
/*  .btn33:active, .btn33:focus {*/
/*    outline: none;*/
/*    -webkit-box-shadow: none;*/
/*    box-shadow: none;*/

/*}*/

.contact-wrap {
    width: 60%;
    margin: 0px auto;
    -webkit-box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
    box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
    font-family: 'Tajawal', sans-serif;
 }
  .contact-wrap .col-form-label {
    font-size: 14px;
    color: #b3b3b3;
    margin: 0 0 10px 0;
    display: inline-block;
    padding: 0; }
  .contact-wrap .form, .contact-wrap .contact-info {
    padding: 40px; 
   font-size: 0.95rem;
    
  }
  .contact-wrap .contact-info {
    color: rgba(255, 255, 255, 0.5); }
    .contact-wrap .contact-info ul li {
      margin-bottom: 15px;
      color: rgba(255, 255, 255, 0.5); }
      .contact-wrap .contact-info ul li .wrap-icon {
        font-size: 20px;
        color: #fff;
        /* margin-top: 5px; */
    }
  .contact-wrap .form {
    background: #fff; }
    .contact-wrap .form h3 {
      color: #35477d;
      font-size: 20px;
      margin-bottom: 30px;
    text-align: center;}
  .contact-wrap .contact-info {

    background: #337ab7;
}
    .contact-wrap .contact-info h3 {
      color: #fff;
      font-size: 20px;
      margin-bottom: 30px; }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

  .list-unstyled {

    padding-right: 0;
  }

  .mr-3, .mx-3 {
    margin-left: 1rem!important;
}

.mb-5, .my-5{
  margin-bottom: 1.5rem!important;
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    direction: rtl;
    text-align: right;}
/* /////////////contact end ////////////////// */

/* =============FOOTER============== */

#footer{
 
  width: 100%;
  background-color: #337ab7;
  min-height: auto;
  align-items: center;
  text-align: right;
 
}
.footer__container{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;

}


.footer .footer__container .box{
  margin:2rem;
  flex:1 1 2rem;
  
}

.footer .footer__container .box img{
  height:6rem;
}

.footer .footer__container .box p{
  font-size: 1rem;
  color: #fff;
  padding: .6rem 0;
}

.footer .footer__container .box p i{
 
  color: #fff;
  margin-left: 1rem;
}
.footer .footer__container .box h4{
  font-size: 1rem;
  color:  #fff;
  padding:1rem 0;
}
.footer .footer__container .box .fab{
 
  line-height: 4.8rem;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
  font-size: 1rem;
  color:  #fff;
  margin-left: 1rem;
}

.footer .footer__container .box .footer_list a:hover{
 
  color:  #fff;
}
.footer .footer__container .box  .fab:hover{
 
  color: #f72585;
}



.footer_link{
  text-decoration: none;
  color:  #fff;
  font-size: 1rem;
  display: block;
  padding: .6rem 0;
}
.footer_link:hover{
  color:  #f72585;
}


#add{
  color:  #fff;
  font-size: 0.8rem;
}
.copy_right{
  font-family: 'Tajawal', sans-serif;
  font-size: 0.8rem;
  text-align: center;
  margin: 2rem 3rem 0rem 3rem;
  font-weight: lighter;
  letter-spacing: .1rem;
  color: rgb(192, 187, 187);
  border-top: .1rem solid rgba(255,255,255,.7);
  padding: 1rem 1rem;
  color: #eee;
}


/* ======end footer======== */


/* ==========scroll=========== */

.to-top {
    background: white;
    position: fixed;
    bottom: 16px;
    right:32px;
    width:50px;
    height:50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size:32px;
    color:#1f1f1f;
    text-decoration: none;
    opacity:0;
    pointer-events: none;
    transition: all .4s;
  }

  .to-top.active {
    bottom:32px;
    pointer-events: auto;
    opacity:1;
  }

@media (max-width:788px){


      .footer .footer__container .box p {
        font-size: .7rem;
        padding: .3rem 0;
    }
    .footer .footer__container .box .fab {
        line-height: 4.8rem;

        font-size: 1rem;}
    }
   .footer_link{
 
  font-size: 1rem;
 
}
    .footer .footer__container .box h4 {
        font-size: .9rem;
    }
    /* ///////////end of Queryyyy//////////// */

    @media screen and (max-width: 540px) {
      .video_container {

        margin-top: 20%;
      }
      .container{

        height: 350px;
      }
      .wrapper .video-controls{
        padding: 3px 10px 7px;
      }
      .options input, .progress-area span{
        display: none!important;
      }
      .options button{
        height: 30px;
        width: 30px;
        font-size: 17px;
      }
      .options .video-timer{
        margin-left: 5px;
      }
      .video-timer .separator{
        font-size: 14px;
        margin: 0 2px;
      }
      .options button :where(i, span) {
        line-height: 30px;
      }
      .options button span{
        font-size: 21px;
      }
      .options .video-timer, .progress-area span, .speed-options li{
        font-size: 12px;
      }
      .playback-content .speed-options{
        width: 75px;
        left: -30px;
        bottom: 30px;
      }
      .speed-options li{
        margin: 1px 0;
        padding: 3px 0 3px 10px;
      }
      .right .pic-in-pic{
        display: none;
      }
      .section_home {

        background-size: 80%;
        background-position: left;

        padding: 3rem 0rem 3rem 0rem;
        margin: 0rem auto;
    }

    .section_wrap1{
        width: 47%;
        height: 30vh;
        float: right;

        padding: 3rem 1rem;

    }
        .section_wrap1 p{

        font-size: .7rem;
        margin-bottom: 2.4rem;
        }
        .section_wrap1 h1{

        margin-bottom: .75rem;
        font-size: .9rem;
        }
        .section_wrap1 .fill_app{

          padding: 15px;
          min-width: 50px;
          font-size: .8rem;

        }
    }

    @media screen and (max-width: 375px) {
    .submit-btn .input-data input {
        font-size: .9rem;
    }
    .container_contact .text {
        font-size: 1.5rem;
    }

.section_wrap1 .fill_app {
    padding: 10px;
    min-width: 20px;
    font-size: .6rem;
}
.section_wrap1 h1 {
    font-size: .8rem;
}
}
/* //////////////////////////end of Queryyyyyyyyyyyyyyyyyyy////////////////////////// */


    </style>
</head>

<body >

{{-- ////////////////start of header////////////////////// --}}
<header id="header" dir="rtl">

    <a href="#home23" class="logo333"><img src="logo.png" alt="" class="img_logo"></a>
    <p id="title_logo">شركة توزيع المنتجات النفطية</p>
    <!-- <div id="menu" class="fas fa-bars"></div> -->
    <nav id="nav_container">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <!-- <label class="logo">DesignX</label> -->
        <ul>
            <li><a class="active" href="#">الصفحة الرئيسية</a></li>
            <li><a href="#home">أستمارة تسجيل البطاقات</a></li>
            <!--<li><a href="#">المحطات</a></li>-->
            <li><a href="#contactForm">أتصل بنا</a></li>
            {{-- <li><a href="#">تسجيل خروج</a></li> --}}
            @if (Route::has('login'))
                @auth
                    <li>   <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">لوحة التحكم</a></li>
                @else
                    <li>    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">تسجيل دخول</a></li>
                @endauth
            @endif
        </ul>
    </nav>


</header>
{{-- ////////////////end of header////////////////////// --}}

{{-- ///////////////start of home////////////////////////////////// --}}
<div class="swiper mySwiper bg-slider" dir="rtl" id="home23">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="images/wholesale-hero.jpg" alt="">
            <div class="text-content">
                <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
                <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>
                <button class="read-btn">
                    <a class="site" href="https://opdc.oil.gov.iq/">أقــرأ المــزيد </a>
                    <i class="uil uil-arrow-right"></i></button>
            </div>
        </div>
        <div class="swiper-slide">
            <img src="images/1.jpg" alt="">
            <div class="text-content">
                <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
                <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>

                <button class="read-btn">
                    <a class="site" href="https://opdc.oil.gov.iq/">أقــرأ المــزيد </a>
                    <i class="uil uil-arrow-right"></i></button>          </div>
        </div>
        <div class="swiper-slide">
            <img src="images/369.jpg" alt="">
            <div class="text-content">
                <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
                <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>

                <button class="read-btn">
                    <a class="site" href="https://opdc.oil.gov.iq/">أقــرأ المــزيد </a>
                    <i class="uil uil-arrow-right"></i></button>          </div>
        </div>
        <div class="swiper-slide">
            <img src="images/4.jpg" alt="">
            <div class="text-content">
                <h2 class="title">هـــيأة تــوزيع بغداد <span>قسم برمجيات التوزيع والطباعة الرقمية</span></h2>
                <p>حسب توجيهات السيد مدير عام شركة توزيع المنتجات النفطية الأستاذ (حسين طالب عبود)، أوعز السيد مدير هيأة توزيع بغداد الأستاذ (محمد عبد الاله شبر) بأن تقوم المحطات الحكومية وابتداء من  شهر تشرين الثاني من العام الماضي  بتوزيع النفط الأبيض للمواطنين وحسب البطاقة الوقودية ويكون التوزيع من بداية الصباح حتى الساعة العاشرة ليلاَ  في العاصمة بغداد.ويقوم مدير الهيأة بمتابعة آلية توزيع النفط الأبيض إلى المواطنين بنفسه،</p>

                <button class="read-btn">
                    <a href="https://opdc.oil.gov.iq/"  class="site">أقــرأ المــزيد </a>
                    <i class="uil uil-arrow-right"></i></button>          </div>
        </div>

        <!-- <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div> -->
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<!-- <div class="image">
   <div class="image-overlay">

</div></div> -->


<!-- =============video section============== -->
<!-- ===================end video section================== -->

<div class="title_video">
    <h1> يمكنك مشاهدة الفديو </h1>
    <h2>كيـــفية ملئ استمارة تفــعيل بطــاقات أصحاب المركــبات التي تعمل على منتوج الكاز</h2>
  </div>
<div class="container_vedio">
    <div class="yt-holder">
<iframe width="560" height="315"
src="https://www.youtube.com/embed/XO-4GdOgxfk" title="YouTube video player"
frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
 allowfullscreen></iframe>
</div>
</div>
<!-- ===================end video section================== -->


<!-- ==============application section start============= -->

<!-- =========HOME ============= -->
<section class="section_home" id="home" dir="rtl">
    <div class="section_wrap1">
        <h1>استمارة تسجيل  بطاقات ذوي المركبات التي تعمل على منتوج الكاز </h1>
        <p> اضغط على الزر ادناه  لملئ الاستمارة </p>
        <a href="/car/create" class="fill_app">أضغط هنا</a>
        <!-- <br> -->
    </div>
    <!-- <div class="section_wrap2">
            <img src="scanner.jpg" alt="" id="img_home">
    </div> -->
</section>

<!-- ====END SECTION HOME -->
<!-- <div class="app_container" dir="rtl">
  <h1>استمارة التسجيل لأصحاب المركبات التي تعمل على الوقود</h1>

  <p>اضغط على الرابط لملئ الاستمارة</p>
  <a href="#" class="fill_app">استمارة التسجيل</a>
</div> -->
<!-- ============== applicationend section================== -->


<!-- contact section starts -->

<div class="container_main">
    <div class="content_main">
      {{-- <div class="container_form_wrap"> --}}
        <div class="row align-items-stretch no-gutters contact-wrap">
          <div class="col-md-8">
            <div class="form h-100">
              <h3>للتـــواصل معــنا</h3>
              <!--<form class="mb-5" method="post" id="contactForm" name="contactForm">-->
                    <form id="contactForm" class="mb-5" action="/" method="post" dir="rtl" name="contactForm" >
                    @csrf
                    @method('POST')
                <div class="row">
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">الاسم *</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="الاسم">
                  </div>
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">الايميل *</label>
                    <input type="text" class="form-control" name="email" id="email"  placeholder="الايميل">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">رقم الهاتف</label>
                    <input type="text" class="form-control" name="phone" id="phone"  placeholder="رقم الهاتف #">
                  </div>
                  <div class="col-md-6 form-group mb-5">
                    <label for="" class="col-form-label">المحافظة</label>
                    <input type="text" class="form-control" name="government" id="government"  placeholder="المحافظة">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group mb-5">
                    <label for="message" class="col-form-label">اكتب رسالتك هنا او استفسارك *</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="اكتبك رسالتك هنا"></textarea>
                  </div>
                </div>
                <div class="row">
                  <!--<div class="col-md-12 form-group">-->
                     <button class="btn33">أرسل رسالتك</button>

                    <!--<input type="submit" value="أرسل رسالتك" class="btn33 btn-primary rounded-0 py-2 px-4">-->
                    <!--<span class="submitting"></span>-->
                  <!--</div>-->
                </div>
              </form>

              <!--<div id="form-message-warning mt-4"></div>-->
              <!--<div id="form-message-success">-->
              <!--  تم ارسال رسالتك, شكرا لك-->
              <!--</div>-->

            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-info h-100">
              <h3>معلومات التواصل</h3>
              <p class="mb-5">شركة توزيع المنتجات النفطية/هيأة توزيع بغداد</p>
              <ul class="list-unstyled">
                <li class="d-flex">
                    <span class="wrap-icon mr-3">    <i class=" fa-solid fa-location-dot"></i></span></span>
                  <span class="text">ساحة الكيلاني</span>
                </li>
                <li class="d-flex">
                    <span class="wrap-icon mr-3">  <i class=" fas fa-phone"></i></span></span>
                  <span class="text">+964 (0) 7700000000</span>
                </li>
                <li class="d-flex">
                    <span class="wrap-icon mr-3">  <i class=" fa-regular fa-envelope"></i></span></span>
                  <span class="text">oil.12@gmail.com</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      {{-- </div> --}}

    </div>
  </div>


<!-- =============end contact======== -->


<!-- ========================= map-section end ========================= -->
<section class="map-section map-style-9">
    <div class="map-container">
        <div id="map"></div>

        {{-- <object id="map" style="border:0; height: 500px; width: 100%;"
        data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object> --}}
    </div>
</section>
<!-- ========================= map-section end ========================= -->

<!-- =============start footer============= -->

<footer class="footer" id="footer" dir="rtl">

    <div class="footer__container">

        <div class="box">
            <img src="logo.png" alt="" >
            <p>شــركة توزيــع المنتجات النفطية <br> هيــأة توزيــع بغــداد</p>
        </div>

        <div class="box">
            <h4>أتــصل بنا</h4>
            <p> <i class="fas fa-phone"></i> +9640077000000 </p>
            <p> <i class="fas fa-envelope"></i> example@gmail.com </p>
            <p> <i class="fas fa-map-marker-alt"></i> بغداد- مصفى الدورة </p>
            <p> <i class="fas fa-map-marker-alt"></i> بغداد- الكيلاني </p>
        </div>



        <div class="box">
          <h4> مواقع مهمة</h4>
          <a href="https://oil.gov.iq/" class="footer_link">وزارة النفط</a>
          <a href="https://opdc.oil.gov.iq/" class="footer_link">شركة توزيع المنتجات النفطية </a>
          <a href="#" class="footer_link">هيأة توزيع بغداد</a>
      </div>

       <div class="box">
            <h4> برمجة وتصميم</h4>
            <p>  م. منذر عامر </p>
            <p>  م. عذراء فرج </p>
            
        </div>

      <div class="box">
        <h4> مواقع التواصل الاجتماعي</h4>
        <a href="#" class="fab fa-youtube"></a>
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
    </div>
    </div>

   
    <div class="copy_right">
        <p><span id="add"> جميع الحقوق محفوظة لهيأة توزيع بغداد / شركة توزيع المنتجات النفطية</span>&copy; 2023 </p>
    </div>
    <!-- <h1 class="credit"> created by <span>mr. web designer</span> | all rights reserved! </h1> -->

  </footer>
<!-- =============== end FOOTER============== -->

<!-- scroll top  -->
<a href="#home23" class="to-top">
    <i class="fas fa-chevron-up"></i>
</a>
{{-- <a href="#header" class="fas fa-arrow-up" id="scroll-top"></a> --}}
<script>
    const toTop = document.querySelector(".to-top");

    window.addEventListener("scroll", () => {
        if (window.pageYOffset > 100) {
            toTop.classList.add("active");
        } else {
            toTop.classList.remove("active");
        }
    });
</script>
<!-- Swiper JS -->
<!-- this is for slider side img -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=EG
         async defer"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

<!-- custom js file link  -->
{{-- <script src="js/script9.js"></script> --}}
<script>
    $("#pac-input").focusin(function() {
        $(this).val('');
    });
    $('#latitude').val('');
    $('#longitude').val('');
    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.
    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 24.740691, lng: 46.6528521 },
            zoom: 13,
            mapTypeId: 'roadmap'
        });
        // move pin and current location
        infoWindow = new google.maps.InfoWindow;
        geocoder = new google.maps.Geocoder();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                map.setCenter(pos);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(pos),
                    map: map,
                    title: 'موقعك الحالي'
                });
                markers.push(marker);
                marker.addListener('click', function() {
                    geocodeLatLng(geocoder, map, infoWindow,marker);
                });
                // to get current position address on load
                google.maps.event.trigger(marker, 'click');
            }, function() {
                handleLocationError(true, infoWindow, map.getCenter());
            });
        } else {
            // Browser doesn't support Geolocation
            console.log('dsdsdsdsddsd');
            handleLocationError(false, infoWindow, map.getCenter());
        }
        var geocoder = new google.maps.Geocoder();
        google.maps.event.addListener(map, 'click', function(event) {
            SelectedLatLng = event.latLng;
            geocoder.geocode({
                'latLng': event.latLng
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        deleteMarkers();
                        addMarkerRunTime(event.latLng);
                        SelectedLocation = results[0].formatted_address;
                        console.log( results[0].formatted_address);
                        splitLatLng(String(event.latLng));
                        $("#pac-input").val(results[0].formatted_address);
                    }
                }
            });
        });
        function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {
            var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
            /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
            $('#latitude').val(markerCurrent.position.lat());
            $('#longitude').val(markerCurrent.position.lng());
            geocoder.geocode({'location': latlng}, function(results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        map.setZoom(8);
                        var marker = new google.maps.Marker({
                            position: latlng,
                            map: map
                        });
                        markers.push(marker);
                        infowindow.setContent(results[0].formatted_address);
                        SelectedLocation = results[0].formatted_address;
                        $("#pac-input").val(results[0].formatted_address);
                        infowindow.open(map, marker);
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
            SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());
        }
        function addMarkerRunTime(location) {
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
            markers.push(marker);
        }
        function setMapOnAll(map) {
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
            }
        }
        function clearMarkers() {
            setMapOnAll(null);
        }
        function deleteMarkers() {
            clearMarkers();
            markers = [];
        }
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        $("#pac-input").val("أبحث هنا ");
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();
            if (places.length == 0) {
                return;
            }
            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];
            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(100, 100),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };
                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));
                $('#latitude').val(place.geometry.location.lat());
                $('#longitude').val(place.geometry.location.lng());
                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            map.fitBounds(bounds);
        });
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
    function splitLatLng(latLng){
        var newString = latLng.substring(0, latLng.length-1);
        var newString2 = newString.substring(1);
        var trainindIdArray = newString2.split(',');
        var lat = trainindIdArray[0];
        var Lng  = trainindIdArray[1];
        $("#latitude").val(lat);
        $("#longitude").val(Lng);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKZAuxH9xTzD2DLY2nKSPKrgRi2_y0ejs&libraries=places&callback=initAutocomplete&language=ar&region=EG
             async defer"></script>
             
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script>
      $(function() {

'use strict';

// Form

var contactForm = function() {

  if ($('#contactForm').length > 0 ) {
    $( "#contactForm" ).validate( {
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        },
        message: {
          required: true,
          minlength: 5
        }
      },
      messages: {
        name: "Please enter your name",
        email: "Please enter a valid email address",
        message: "Please enter a message"
      },
      /* submit via ajax */
      submitHandler: function(form) {		
        var $submit = $('.submitting'),
          waitText = 'Submitting...';

        $.ajax({   	
            type: "POST",
            url: "php/send-email.php",
            data: $(form).serialize(),

            beforeSend: function() { 
              $submit.css('display', 'block').text(waitText);
            },
            success: function(msg) {
                 if (msg == 'OK') {
                   $('#form-message-warning').hide();
                  setTimeout(function(){
                     $('#contactForm').fadeOut();
                   }, 1000);
                  setTimeout(function(){
                     $('#form-message-success').fadeIn();   
                   }, 1400);
                   
                } else {
                   $('#form-message-warning').html(msg);
                  $('#form-message-warning').fadeIn();
                  $submit.css('display', 'none');
                }
            },
            error: function() {
              $('#form-message-warning').html("Something went wrong. Please try again.");
               $('#form-message-warning').fadeIn();
               $submit.css('display', 'none');
            }
          });    		
        }
      
    } );
  }
};
contactForm();

});
</body>
</html>
