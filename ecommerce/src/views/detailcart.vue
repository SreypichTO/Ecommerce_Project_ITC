
<template>
  <div class="container"  style="margin-top: 30px; margin-bottom: 30px;">
    <div class="card-css">
      <div class="d-flex justify-content-end">
        <i class="fa-solid fa-circle-xmark" style="font-size: 40px; cursor: pointer;" @click="goToPreviousPage"></i>
      </div>
      <div class="wrapper row d-flex justify-content-between align-items-center">
        <!-- <div class="col-md-6 d-flex justify-content-center align-items-center">
          <img v-bind:src="product.image" class="img-fluid" style="max-height: 100%; max-width: 100%;"/>
        </div> -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img v-if="product.imagebase64" :src="`data:image/png;base64,${product.imagebase64}`" class="img-fluid" style="max-height: 100%; max-width: 100%;" :alt="product.title" />
            <img v-else :src="product.image" class="img-fluid" style="max-height: 100%; max-width: 100%;" :alt="product.title" />
        </div>
        <div class="details col-md-6">
            <h3 class="title">{{ product.title }}</h3>
            <h4 class="price mt-2">$ {{ product.price }}</h4>
            <p class="description mt-2">{{ product.description }}</p>
            
            <div class="size">
              <p class="mt-1">available size : </p>
                <ul class="d-flex mx-1">
                    <li style="list-style: none;"><button type="button" class="me-3 px-4 btn btn-light">S</button></li>
                    <li style="list-style: none;"><button type="button" class="me-3 px-4 btn btn-light">M</button></li>
                    <li style="list-style: none;"><button type="button" class="me-3 px-4 btn btn-light">L</button></li>
                </ul>
            </div>
            <!-- <hr class="hr"> -->
            <div class="amount">
                <h4>Quantity</h4>
                <button  id="amount-button" class="me-3 px-4 btn btn-light" @click="decreaseAmount">-</button>
                <span id="amount-button" class="me-3 px-4 py-2 btn btn-light">{{ amount }}</span>
                <button id="amount-button" class="me-3 px-4 btn btn-light" @click="increaseAmount">+</button>
            </div>
            <div class="subtotal">
              <p class="subtotal mt-4">Subtotal: ${{ subtotal }}</p>
            </div>
            <div class="action">
                <button class="btn btn-dark add-to-cart mt-2" type="button" @click="addToCart(product)">Add to cart</button>
            </div>
            <!-- Add the alert message using Bootstrap classes -->
            <div v-if="showAlert" class="alert alert-success alert-dismissible fade show fixed-top my-alert" role="alert">
                <strong>Item added to cart!</strong>
                <button type="button" class="close" @click="hideAlert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
        </div>
      </div>
    </div>
  </div>
</template>
  
  <!-- <script>
  import jsonData from "./DataAPI/data/categories.json"; 

  export default {
    data(){
      return{
        showAlert: false,
        product: jsonData.find((p) => p.id == this.$route.params.id),
        amount: 1
      }
    },
    computed: {
    subtotal() {
      return this.amount * this.product.price;
    },
    },
    methods: {
      increaseAmount() {
        this.amount++;
      },
      decreaseAmount() {
        if (this.amount > 0) {
          this.amount--;
      }
      },
      goToPreviousPage() {
      this.$router.go(-1); 
    },

      addToCart(product) {

        this.showAlert = true;
        setTimeout(() => {
          this.showAlert = false;
        }, 2000); 
      },
      hideAlert() {
        this.showAlert = false;
      },
    }
    
  };
  </script>
  
  <style>

  </style>
   -->

   <script>
  export default {
    data() {
      return {
        showAlert: false,
        product: {},
        amount: 1,
      };
    },
    computed: {
      // Calculate the subtotal based on the amount and product price
      subtotal() {
        return this.amount * this.product.price;
      },
    },
    mounted() {
      this.fetchProductData();
    },
    methods: {
      increaseAmount() {
        this.amount++;
      },
      decreaseAmount() {
        if (this.amount > 0) {
          this.amount--;
        }
      },
      goToPreviousPage() {
        this.$router.go(-1); // Navigates to the previous page
      },
      fetchProductData() {
        const productId = this.$route.params.id;
  
        // Fetch product data from the API endpoint
        fetch(`http://127.0.0.1:8000/product/show/json/${productId}`)
          .then((response) => response.json())
          .then((data) => {
            // Assuming the data structure is similar to your provided example
            this.product = data.data;
          })
          .catch((error) => {
            console.error('Error fetching product data:', error);
          });
      },
      addToCart(product) {
        // Your logic to add the product to the cart goes here
        // For this example, let's just show the alert message for 2 seconds
        this.showAlert = true;
        setTimeout(() => {
          this.showAlert = false;
        }, 2000); // Hide the alert after 2 seconds
      },
      hideAlert() {
        this.showAlert = false;
      },
    },
  };
  </script>
  
  <style>
  /* Add your styles for the product detail page here */
  </style>