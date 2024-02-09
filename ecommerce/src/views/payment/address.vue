<template>
    <div class="container">
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
        <div class="col-md-8">

          <div class="card-css">
            <div class="card-body">
  
              <div class="form-group">
                <input type="email" class="form-control" id="name"  placeholder="Email"/>
              </div>
  
              <h4 class="card-title mt-4 mb-3">Shipping Address</h4>
  
              <div class="form-group mt-2">
                <select class="form-select mb-3" v-model="selectedCountry">
                  <option v-for="country in countries" :key="country.alpha2Code" :value="country.alpha2Code">{{ country.name }}</option>
                </select>
              </div>
  
              <div class="form-group d-flex ">
                <input type="text" class="form-control me-3" id="name" placeholder="Frist name"/>
                <input type="text" class="form-control" id="name" placeholder="Last name" />
              </div>
  
              <div class="form-group mt-3">
                
                <input type="text" class="form-control" id="address" placeholder="Address" />
              </div>
  
              <div class="form-group mt-3">
                
                <input type="text" class="form-control" id="city" placeholder="City"/>
              </div>
  
              <div class="form-group mt-3 d-flex ">
               
                <input type="state" class="form-control me-3" id="state" placeholder="State"/>
                <input type="zipcode" class="form-control" id="zipcode" placeholder="Postal code"/>
              </div>
  

            </div>
            <Router-link to="/checkout/address/optionpay"><button class="btn btn-dark mt-5 mb-2 w-50"> Proceed to Payment </button></Router-link>
          </div>
          
        </div>

       
        <div class="col-md-4 " style="margin-top: 120px;">
          <h4>Summary</h4>
          <table class="table">
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
              <td>{{ product.quantity}}</td>
              <td>${{ product.price }}</td>
            </tr>
            </tbody>
            <tfoot>

              <tr>
                <td></td>
                <td>Total</td>
                <td>{{ total }}</td>
              </tr>
            </tfoot>
          </table>
  
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: "Checkout",
    data() {
      return {
        email: "",
        selectedCountry: "",
        countries: [],
        cart: [],
      };
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
    mounted() {

      axios.get('https://restcountries.com/v3.1/all')
        .then(response => {
          this.countries = response.data.map(country => {
            return {
              alpha2Code: country.alpha2Code,
              name: country.name.common
            };
          });
        })
        .catch(error => {
          console.error(error);
        });

        const cart = JSON.parse(localStorage.getItem('cart'));
        console.log('Stored Cart:', cart);
        if (cart) {
        this.cart = cart;
        }
        },
    
    
  };
  
  </script>

  