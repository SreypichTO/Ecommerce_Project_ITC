
<template>
  <header>
  
   <nav class="nav">
    <i class="uil uil-bars navOpenBtn"></i>
    <a href="#" class="logo"><RouterLink to="/"><h3>SHOES-SHOP</h3></RouterLink></a>
   
     <ul class="nav-links">
       <i class="uil uil-times navCloseBtn"></i>
       <li><RouterLink to="/men">MEN</RouterLink></li>
       <li><RouterLink to="/women">WOMEN</RouterLink></li>
       <li><RouterLink to="/kid">KIDS</RouterLink></li>
       <li><RouterLink to="/accessories">ACCESSORIES</RouterLink></li>
       <li><RouterLink to="/watch">WATCH</RouterLink></li>
       <li><RouterLink to="/shoes">SHOES</RouterLink></li>
       <!-- <li><a href="#">About Us</a></li>
       <li><a href="#">Contact Us</a></li> -->
     </ul>



     <nav class="footer-nav">
              <ul>
              <li><RouterLink to="/">Home</RouterLink></li>
              <li><RouterLink to="/about">About</RouterLink></li>
              <li><RouterLink to="/product">Product</RouterLink></li>
              </ul>
      </nav>

     <div>
     <i class="uil uil-search search-icon" id="searchIcon"></i>
     <RouterLink to="/checkout"><i class="uil uil-user user-icon" id="userId"></i></RouterLink>
     <RouterLink to="/checkout"><i class="uil uil-shopping-cart cart-icon" id="cartId"></i></RouterLink>

     </div>
     
     <div class="search-box">
       <i class="uil uil-search search-icon"></i>
       <input type="text" v-model="searchTerm" placeholder="Search here..." />
      </div>
   </nav>

  </header>
 
<!--  -->
 <RouterView />

<footerbar/>
</template>


<script>
import footerbar from './footerbar.vue';
export default {
  components: {
    footerbar,
  },
 mounted() {
   const nav = document.querySelector(".nav");
   const searchIcon = document.querySelector("#searchIcon");
   const navOpenBtn = document.querySelector(".navOpenBtn");
   const navCloseBtn = document.querySelector(".navCloseBtn");

   searchIcon.addEventListener("click", () => {
     nav.classList.toggle("openSearch");
     nav.classList.remove("openNav");
     if (nav.classList.contains("openSearch")) {
       searchIcon.classList.replace("uil-search", "uil-times");
     } else {
       searchIcon.classList.replace("uil-times", "uil-search");
     }
   });

   navOpenBtn.addEventListener("click", () => {
     nav.classList.add("openNav");
     nav.classList.remove("openSearch");
     searchIcon.classList.replace("uil-times", "uil-search");
   });

   navCloseBtn.addEventListener("click", () => {
     nav.classList.remove("openNav");
   });
 },
};
</script>
<style>
/* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;
}

.nav {
 position: fixed;
 top: 0;
 left: 0;
 width: 100%;
 padding: 15px 200px;
 background: #111827;

}
.nav,
.nav .nav-links {
 display: flex;
 align-items: center;
}
.nav-links{
  background-color: #111827;

}
.nav {
 justify-content: space-between;
}
a {
color: white;
font-family: 'Open Sans', sans-serif; 
font-size: 20px;
font-weight: 700;
 text-decoration: none;

}
.nav .logo {
 font-size: 22px;
 font-weight: 500;
 
}
.nav .nav-links {
 column-gap: 20px;
 list-style: none;
}
.nav .nav-links a {
 transition: all 0.2s linear;
}
.nav.openSearch .nav-links a {
 opacity: 0;
 pointer-events: none;
}
.nav .search-icon {
  color: white;
 font-size: 20px;
 cursor: pointer;
}
.nav .cart-icon {
 margin-left: 20px;
 color: white;
 font-size: 20px;
 cursor: pointer;
}
.nav .user-icon {
 margin-left: 20px;
 color: white;
 font-size: 20px;
 cursor: pointer;
 float: right;
}
.nav .search-box {
 position: absolute;
 right: 250px;
 height: 45px;
 max-width: 555px;
 width: 100%;
 opacity: 0;
 pointer-events: none;
 transition: all 0.2s linear;
}
.nav.openSearch .search-box {
 opacity: 1;
 pointer-events: auto;
}
.search-box .search-icon {
 position: absolute;
 left: 15px;
 top: 50%;
 left: 15px;
 color: white;
 transform: translateY(-50%);
}
.search-box input {
 height: 100%;
 width: 100%;
 border: none;
 outline: none;
 border-radius: 6px;
 background-color: #fff;
 padding: 0 15px 0 45px;
}

.nav .navOpenBtn,
.nav .navCloseBtn {
 display: none;
}

/* responsive */
@media screen and (max-width: 2500px) {
  .nav {
    padding: 15px 100px;
  }
  .nav .search-box {
    right: 150px;
  }
  .nav .navOpenBtn,
  .nav .navCloseBtn {
    display: block;
  }
  .nav {
    padding: 15px 20px;
  }
  .nav .logo {
    margin-right: 55%;
  }
  .nav .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    max-width: 280px;
    width: 100%;
    padding-top: 120px;
    row-gap: 30px;
    flex-direction: column;
    background-color: #111827;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    z-index: 100;
  }
  .nav.openNav .nav-links {
    left: 0;
  }
  .nav .navOpenBtn {
    color: white;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .navCloseBtn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: white;
    font-size: 20px;
    cursor: pointer;
  }
  
}
@media screen and (max-width: 1124px){
  .nav .logo {
    margin-left: 0%;
  }
}
@media screen and (max-width: 768px) {
  .nav {
    padding: 15px 50px;
  }
  .nav .search-box {
    right: 100px;
    max-width: 400px;
  }
  .nav .logo {
    margin-right:0;
    
}
  .nav .navOpenBtn,
  .nav .navCloseBtn {
    display: block;
  }
  .nav {
    padding: 15px 20px;
  }
  .nav .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    max-width: 280px;
    width: 100%;
    padding-top: 100px;
    row-gap: 30px;
    flex-direction: column;
    background-color: #111827;
    background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
    background-blend-mode: lighten;
    background-blend-mode: soft-light,screen;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    z-index: 100;
  }
  .nav.openNav .nav-links {
    left: 0;
  }
  .nav .navOpenBtn {
    color: white;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .navCloseBtn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: white;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .search-box {
    top: calc(100% + 10px);
    max-width: calc(100% - 20px);
    right: 50%;
    transform: translateX(50%);

  }
}


</style>

