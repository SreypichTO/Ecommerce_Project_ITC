<template>
 <div class="container " style="margin-top: 100px;">
        <!-- icon back -->
        <div class="d-flex justify-content-end" style="margin-top: 150px;">
          <button type="button" class="btn btn-light ms-2 mt-2" onclick="window.history.back()">
            <i
            class="fa-solid fa-circle-xmark"
            style="font-size: 40px; cursor: pointer"
            ></i>
          </button>
        </div>
    <h2 class="mt-3"><b>Payment</b></h2>
    <small class=""><b class="">HOW DO YOU WANT TO PAY?</b></small>

    <div class="card p-2 mb-5">
        <div class="cart-img d-flex justify-content-around">
            <router-link to="/checkout/address/optionpaycartinfo">
              <img src="../../assets/images/visa.png" alt="">
            </router-link>
            <router-link to="/checkout/address/optionpaycartinfo">
              <img src="../../assets/images/mastercard.png" alt="">
            </router-link>
            </div>
        <div class="cart-img ">
        </div>

    </div>
    

 </div>
  </template>
  
  <script>

  </script>
  