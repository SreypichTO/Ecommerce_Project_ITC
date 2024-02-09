<template>
    <div class="container" style="margin-top: 200px;">
     
        <div class="d-flex justify-content-center mt-5">
            <i class="fa-regular fa-circle-check my-5" style="font-size: 200px;
            color: green;"></i>
            </div>
           
      <h1 class="text-center" style="font-size: 100px;">Thank you, Grande!</h1>
      <hr>
      <p class="text-center" style="font-size: 50px;">Your order is confirmed.</p>
      <p class="text-center" style="font-size: 50px;">We've accepted your order and we're getting ready to ship it out.</p>
      <hr>

      <p class="text-center" style="font-size: 50px;">Thank you for your business!</p>
   
        <div class="d-flex justify-content-center mt-5 mb-5">
             <router-link to="/"><button type="button" class="tn btn-warning btn-lg btn block me-3">Go To Home Page</button></router-link>
             <router-link to="/product"><button type="button" class="btn btn-success btn-lg btn block">Go To Product Page</button></router-link>
         </div>

    </div>
  </template>
  
  <script>
 
  
  export default {
    name: "ThankYouEmail",
  };
  </script>

  