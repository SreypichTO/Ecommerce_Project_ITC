<!-- 
<template>

<div style="margin-top: 100px;">
  <search @search="search= $event"/>
</div>
  <div class="card-css">
      <ul class="product-list">
        <li v-for="product in filteredItems" :key="product.id" class="product-item">
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
    <div v-if="showAlert" class="alert alert-success alert-dismissible fade show fixed-top my-alert" role="alert">
        <strong>Item added to cart!</strong>
        <button type="button" class="close" @click="hideAlert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    </div>

    
</template>

<script>
import jsonData from "./DataAPI/data/categories.json";
import Index from "./Index.vue";
import search from "./search.vue";
export default {
  name: 'product',
  components:{
    Index,
     search

  },
  props: {
    search: String,
  },
  data() {
    return {
      products: [],
      cart: [],
      jsonData,
      search: '',
      showAlert: false,
    };
  },
  mounted() {
    this.products = jsonData;
  },
  computed: {
    filteredItems() {
      if (!this.search) return this.jsonData;
      return this.jsonData.filter(product =>
        product.title.toLowerCase().includes(this.search.toLowerCase())
      );
  },
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

      this.showAlert = true;
      setTimeout(() => {
        this.showAlert = false;
      }, 2000 * 2); 
    },
    hideAlert() {
      this.showAlert = false;
    },
  },
};
</script> -->
<!-- 
<template>
<div style="margin-top: 100px;">
  <search @search="search= $event"/>
</div>
  <div class="card-css">
      <ul class="product-list">
        <li v-for="product in filteredItems" :key="product.id" class="product-item">
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
    <div v-if="showAlert" class="alert alert-success alert-dismissible fade show fixed-top my-alert" role="alert">
        <strong>Item added to cart!</strong>
        <button type="button" class="close" @click="hideAlert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    </div>

    
</template>

<script>
import jsonData from "./DataAPI/data/categories.json";
import Index from "./Index.vue";
import search from "./search.vue";
export default {
  name: 'product',
  components:{
    Index,
     search

  },
  props: {
    search: String,
  },
  data() {
    return {
      products: [],
      cart: [],
      jsonData,
      search: '',
      showAlert: false,
    };
  },
  mounted() {
    this.products = jsonData;
  },
  computed: {
    filteredItems() {
      if (!this.search) return this.jsonData;
      return this.jsonData.filter(product =>
        product.title.toLowerCase().includes(this.search.toLowerCase())
      );
  },
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
      
      this.showAlert = true;
      setTimeout(() => {
        this.showAlert = false;
      }, 2000 * 2); 
    },
    hideAlert() {
      this.showAlert = false;
    },
  },
};
</script> -->
<template>
  <div>

    <div style="margin-top: 100px;">
      <search @search="search = $event" />
    </div>

    <div class="card-css">
      <ul class="product-list">
        <li v-for="product in filteredItems" :key="product.id" class="product-item">
          <router-link :to="{ name: 'product-detail', params: { id: product.id }, props: { product } }" class="product-link">
            <div class="product-image">
              <img v-if="product.imagebase64" :src="`data:image/png;base64,${product.imagebase64}`" :alt="product.title" />
              <img v-else :src="product.image" :alt="product.title" />
            </div>
          </router-link>
          <div class="product-details">
            <h4>{{ product.title }}</h4>
            <p class="product-price">Price: ${{ product.price }}</p>
            <p class="product-category">Category: {{ product.category }}</p>
            <p class="product-description">Description: {{ product.description }}</p>
            <i class="fa-solid fa-circle-plus cart-icon " @click="addToCart(product)"></i>
          </div>
        </li>
      </ul>
      <!-- Add the alert message using Bootstrap classes -->
      <div v-if="showAlert" class="alert alert-success alert-dismissible fade show fixed-top my-alert" role="alert">
        <strong>Item added to cart!</strong>
        <button type="button" class="close" @click="hideAlert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    
  </div>
</template>

<script>
import Index from "./Index.vue";
import search from "./search.vue";

export default {
  name: 'product',
  components: {
    Index,
    search
  },
  props: {
    search: String,
  },
  data() {
    return {
      products: [],
      cart: [],
      search: '',
      showAlert: false,
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      fetch('http://127.0.0.1:8000/product/show/json')
        .then(response => response.json())
        .then(data => {
          this.products = data.data; // Assuming the data structure is similar to your provided example
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    },
    addToCart(product) {
      const it = this.cart.find((it) => it.id === product.id);

      if (it) {
        it.quantity++;
      } else {
        this.cart.push({ ...product, quantity: 1 });
      }
      localStorage.setItem('cart', JSON.stringify(this.cart));

      this.showAlert = true;
      setTimeout(() => {
        this.showAlert = false;
      }, 2000 * 2);
    },
    hideAlert() {
      this.showAlert = false;
    },
  },
  computed: {
    filteredItems() {
      if (!this.search) return this.products;
      return this.products.filter(product =>
        product.title.toLowerCase().includes(this.search.toLowerCase())
      );
    },
  },
};
</script>
