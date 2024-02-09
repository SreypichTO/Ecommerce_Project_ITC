
<template>
  <div class="home">
    
    <div class="warpper">
      <div class="bargen-box">
      <b class="">SPRING SALE — 20% OFF WITH CODE: SPRING 
        <button style="background-color: #000000;
         padding: 10px 20px; border-radius: 5px; cursor: pointer;">
          <RouterLink to="/product"><b style="color: aliceblue;">SHOP NOW</b></RouterLink></button>
        </b>
      </div>
<div class="show-product">
        <center>
<div id="p-i" class="" >
     <div class="banner">
        Discover your favourite shoes here!
     </div>   
    <section class="text-black py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center">
                <div class="splide w-full md:w-1/3">
                    <div class="splide__track ">
                        <div class="splide__list">
                            <div v-for="image in images" :key="image.id" class="splide__slide">
                                <img class="object-cover" :src="image" :alt="image.alt">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

          </div>
        </center>
        
</div>

    <div class="list-product">

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
            <p class="product-price">Price:  ${{ product.price }}</p>
            <p class="product-category">Category: {{ product.category }}</p>
            <p class="product-description">Description: {{ product.description }}</p>
            <i class="fa-solid fa-circle-plus cart-icon" @click="addToCart(product)"></i>
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
     
</div>  <!--  home -->
</template>

<!-- <script>
import jsonData from './DataAPI/data/categories.json'; 

export default {
  
  data() {
    return {
      cart: [],
      products: [],
      showAlert: false,
    };
  },
  mounted() {
    this.products = jsonData;
  },

  methods: {
    addToCart(product) {
      // Get the cart data from localStorage
        const cart = JSON.parse(localStorage.getItem('cart'));

      // Add the item to the cart
      if (!cart.find((it) => it.id === product.id)) {
        cart.push({ ...product, quantity: 1 });
      }
      // Store the cart data in localStorage
      localStorage.setItem('cart', JSON.stringify(cart));
      // Your logic to add the product to the cart goes here
      // For this example, let's just show the alert message for 2 seconds
      this.showAlert = true;
      setTimeout(() => {
        this.showAlert = false;
      }, 2000*2); // Hide the alert after 2 seconds
    },
    hideAlert() {
      this.showAlert = false;
    },
  },


}; 
</script> -->


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


<!-- style scoped on data API -->
<!-- body style -->
<style>


.home{
  margin-top: 70px;
  display: block;
  max-width: 100%;
}
.warpper{
  margin-top:75px;
  padding: 0 13px;
}
.banner{
  padding-left: 90px;
  width: 150px;
  color: #111827;
  font-family: 'Inria Sans', sans-serif; 
  font-size: 50px;
  font-weight: 700;
}
.beating-icon {
  animation: pulse 1s infinite;
}

.list-product{
  margin-top: 10px;
  
}
.show-product{
  margin-top: 10px;
}
#p-i{
      width: 100%;
      height: 500px;
      border-radius: 5px;
      background-image: url('../assets/images/banner.jpg');
      background-size: 100%;
      text-align: center;
      padding: 20px;
      font-size: 18px;
      font-weight: bold;
}


/* Styles for large screens */
.row-css {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.column-css {
  flex-basis: 30%;
  background-color: #f1f1f1;
  width: 33.33%;
  padding: 20px;
  box-sizing: border-box;
  
  border-radius: 20px;
  margin: 15px;
  background-image: linear-gradient(to right, #92fe9d 0%, #00c9ff 100%);

}
.claim-button {
  background-color: #f5f0f0;
  padding: 15px;
  border: 2px;
  border-radius: 15px;
  color: rgb(0, 0, 0);
  font-size: 30px;
}

.coupon-icon {
  float: right;
  margin-top: 20px;
  font-size: 50px;
}

.delivery-icon {
  float: right;
  margin-top: -5px;
  font-size: 80px;
}

.membership-icon {
  float: right;
  margin-top: -5px;
  font-size: 80px;
  color: #225dc3;
}
@media screen and (max-width: 950px) {
  .home {
    min-height: 100vh;
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .warpper{
  margin-top:10px;
  }
  .list-product{
  margin-top: -300px;
  }
  .row-css {
    display: flex;
    flex-direction: column;
  }

  .column-css {
    width: 95%;
    text-align: center;
    margin-bottom: 20px;
  }
.claim-button{
  float: left;
}
.claim-button {
  font-size: 15px;
}
.row-css{
  margin-bottom: 300px;
}

  .coupon-icon,
  .delivery-icon,
  .membership-icon {
    float: none;
    margin-top: 10px;
    font-size: 40px;
  }
}
/* Responsive styles for smaller screens */
@media screen and (max-width: 768px ) {
  .row-css {
    display: flex;
    flex-direction: column;
  }

  .column-css {
    width: 95%;
    text-align: center;
    margin-bottom: 20px;
  }
.claim-button{
  float: left;
}
.claim-button {
  font-size: 15px;
}
.row-css{
  margin-bottom: 300px;
}
  .coupon-icon,
  .delivery-icon,
  .membership-icon {
    float: none;
    margin-top: 10px;
    font-size: 40px;
  }
}
@media screen and (max-width: 576px) {
  .home {
    margin-top: 70px;
  }
  .show-product{
  margin-top: 15px;
  
  }
  .list-product{
  margin-top: -220px;
  
}


  #p-i {
    height: 500px;
    padding: 10px;
    font-size: 16px;
  }

  .product-item {
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
  }
  .column-css{
    padding: 10px;
  }
}
@media screen and (max-width: 500px) {
  .home{
  margin-top: 70px;
  display: block;
  max-width: 100%;
}
.warpper{
  margin-top:75px;
  padding: 0 13px;
}

  .list-product{
  margin-top: -220px;
  
}


  #p-i {
    height: 500px;
    padding: 10px;
    font-size: 16px;
  }

  .product-item {
    width: 100%;
    padding: 15px;
    margin-bottom: 15px;
  }
  .column-css{
    padding: 10px;
  }
}




</style>
