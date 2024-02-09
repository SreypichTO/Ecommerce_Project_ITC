
<template>
  <div class="checkout" style="margin-top: 80px">

        <!-- icon back -->
        <div class="d-flex justify-content-end" style="margin-top: 150px;">
          <button type="button" class="btn btn-light ms-2 mt-2" onclick="window.history.back()">
            <i
            class="fa-solid fa-circle-xmark"
            style="font-size: 40px; cursor: pointer"
            ></i>
          </button>
        </div>
    <div class="row">
      <div class="col-md-5 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">

          <div>
            Summary: (items)
          </div>
          <!-- <span class="text-success quantity"></span> -->
        </h4>
        <!--  -->
        <table class="table numbered-table">
          <thead>
              <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
              </tr>
            </thead>
          <tbody>
            <tr v-for="product in cart" :key="product.id">
              <!-- <td>({{ index + 1 }})</td> -->
              <td>{{ product.title }}</td>
              <td>{{ product.quantity }}</td>
              <td>${{ product.price }}</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Tax</td>
              <td></td>
              <td class="text-success">FREE</td>
            </tr>
            <tr>
              <td>Delivery</td>
              <td></td>
              <td class="text-success">FREE</td>
            </tr>
            <tr>
              <td>Total</td>
              <td></td>
              <td>${{ total }}</td>
            </tr>
          </tfoot>
        </table>
        
        <Router-link to="/checkout/address"><button class="btn btn-dark mt-5 mb-2 w-50"> Proceed to Payment </button></Router-link>
        <!--  -->
      </div>
      <div class="col-md-7 order-md-1">
        <table class="table table-striped">
          <thead>
            <td>Image</td>
            <td>Price</td>
            <td>Quantity</td>
          </thead>
          <tbody>
            <tr v-for="product in cart" :key="product.id">
              <td>
                <!-- <img :src="product.image" alt="item Image" width="150" /> -->
                <router-link :to="{ name: 'product-detail', params: { id: product.id }, props: { product } }" class="product-link">
                <img :src="product.image" :alt="product.title" width="150"/>
              </router-link>
              </td>

              <td>
                <tr > {{product.title}}</tr>
                <tr> ${{ product.price }}</tr>
               
              </td>
              <td>
                <!-- <tr> {{ product.quantity }}</tr> -->
                <button  id="amount-button" class="me-1 px-4 btn btn-light" @click="decreaseQuantity(product)">-</button>
                <span id="amount-button" class="me-1 px-4 py-2 btn btn-light">{{ product.quantity }}</span>
                <button id="amount-button" class="me-1 px-4 btn btn-light" @click="increaseQuantity(product)">+</button>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </div>
   
  </div>
  <button @click="$emit('cancel')">Cancel</button>
</template>

<style>
@media (max-width: 768px) {
  .checkout {
    margin-top: 80px;
  }
}

</style>
<script>
import jsonData from "./DataAPI/data/categories.json";

export default {
  data() {
    return {
      cart: [],

    };
  },

  mounted() {
    const cart = JSON.parse(localStorage.getItem('cart'));
    console.log('Stored Cart:', cart);
    if (cart) {
      this.cart = cart;
    }
  },

  computed: {

    subtotal() {
      return this.cart.reduce((total, product) => {
        return total + product.price * product.quantity;
      }, 0);
    },
    total() {
      let tax = 0;
      let delivery= 0;
      return (this.subtotal*tax)+delivery+this.subtotal;
    },
  },
  methods:{
 
    removeItem(product) {
      const index = this.cart.indexOf(product);
      const modifiedCart = this.cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(modifiedCart));
      localStorage.removeItem('cart-old');
    },
    increaseQuantity(product) {
      product.quantity++;
      localStorage.setItem('cart', JSON.stringify(this.cart));
    },
    decreaseQuantity(product) {
      if (product.quantity > 1) {
        product.quantity--;
        localStorage.setItem('cart', JSON.stringify(this.cart));
      } else {
        this.removeItem(product);
        localStorage.setItem('cart', JSON.stringify(this.cart));
      }

    },
  }

};
</script>
