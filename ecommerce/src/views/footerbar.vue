<template>
    <footer>
    <div class="container">
       
        <center>
          <p class="footer-text">&copy; 2024 SHOES-SHOP. All rights reserved.</p>

        </center>
        
  </div>
  </footer>
</template>
<style>
footer{
 
 background: #111827;
 padding: 20px 0;
 height: 89px;
}

.container {
 max-width: 1600px;
 margin: 0 auto;
 padding: 0 20px;
}

.footer-content {
 display: flex;
 justify-content: space-between;
 /* justify-content: center; */
 align-items: center;

}

.footer-logo a {
color: white;
 font-size: 24px;
 text-decoration: none;
}

.footer-nav ul {
 list-style-type: none;
 display: flex;
}

.footer-nav li:not(:last-child) {
 margin-right: 20px;
 
}

.footer-nav a {
color: white;
text-decoration: none;

}

.footer-text {
 text-align: center;
 /* margin-top: 20px; */
 color: white;
font-family: 'Open Sans', sans-serif; 
font-size: 20px;
font-weight: 700;
}

</style>