<template>
    <footer>
    <div class="container">
    <div class="footer-content">
      <div class="footer-logo">
        <a href="#"><RouterLink to="/"><h3>HENG VISOTHI</h3></RouterLink></a>
      </div>
      <nav class="footer-nav">
        <ul>
        <li><RouterLink to="/">Home</RouterLink></li>
        <li><RouterLink to="/about">About</RouterLink></li>
        <li><RouterLink to="/product">Product</RouterLink></li>
        </ul>
      </nav>
    </div>
    <p class="footer-text">&copy; 2023 HENG VISOTHI. All rights reserved.</p>
  </div>
  </footer>
</template>
<style>
footer {
 /* background-color: #4a98f7;
 color: #fff; */
 background: #C9CCD3;
 background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
 background-blend-mode: lighten;
 padding: 20px 0;
}

.container {
 max-width: 1200px;
 margin: 0 auto;
 padding: 0 20px;
}

.footer-content {
 display: flex;
 justify-content: space-between;
 align-items: center;
}

.footer-logo a {
 /* color: #fff; */
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
 /* color: #fff; */
 text-decoration: none;
}

.footer-text {
 text-align: center;
 margin-top: 20px;
}

</style>