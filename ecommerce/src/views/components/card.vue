<template>
  <!-- <div class="product">
    <h1>This is an Product page</h1>
  </div> -->
  <div class="card-css">
    <ul class="product-list">
      
      <li v-for="product in products" :key="product.id" class="product-item">
        <!-- <router-link :to="'/product/' + product.id" class="product-link"> -->
        <router-link :to="{ name: 'product-detail', params: { id: product.id }, props: { product } }" class="product-link">
        <div class="product-image">
          <img :src="product.image" :alt="product.title" />
        </div>
        </router-link>


        
        <div class="product-details">
          <h4>{{ product.title }}</h4>
          <p class="product-price">Price: ${{ product.price }}</p>
          <p class="product-category">Category: {{ product.category }}</p>
          <p class="product-description">Description: {{ product.description }}</p>
          <i class="fa-solid fa-circle-plus cart-icon" @click="addToCart(product)"></i>
        </div>
      </li>
    </ul>
    
  </div>
</template>
<script>

import jsonData from '../DataAPI/data/categories.json'; 

export default {
  data() {
    return {
      products: [],
      cart: [],
    };
  },
  mounted() {
    this.products = jsonData.filter(product => product.category === "kid");
  },
  methods: {
      addToCart(product) {
      const it = this.cart.find((it) => it.id === product.id);

      if (it) {
        it.quantity++;
      } else {
        this.cart.push({ ...product, quantity: 1 });
      }
      localStorage.setItem('cart', JSON.stringify(this.cart));
    },
    },
};


</script>

<style>
@media (min-width: 1024px) {
  .product {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}

</style>
