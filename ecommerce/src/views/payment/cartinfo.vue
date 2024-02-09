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

          <div class="card">

            <div class="card-body">
  
              <div class="form-group ">
                <label for="cardholder"><strong>Cardholder Name</strong></label>
                <input type="ecardholder" class="form-control" id="name"  placeholder="Cardholder Name" required/>
                <div class="invalid-feedback">
                    Please enter a valid credit card number.
                </div>
              </div>
  
            
              <div class="form-group d-flex mt-3 ">
                <div class=" w-100">
                    <label for="Card-Number"><strong>Card Number</strong></label>
                    <input type="Card Number" class="form-control " id="name"  maxlength="19" placeholder="XXXX-XXXX-XXXX-XXXX" required/>
                    <div class="invalid-feedback">
                        Please enter your name as it appears on your credit card.
                    </div>
                </div>
                <div class=" ms-5 ">
                    <label for="Card-Number"><strong>Expriation</strong></label>
                    <input type="text" class="form-control " size="6" id="exp" minlength="5" maxlength="5" placeholder="MM/YY" required/>
                </div>
                <div class=" ms-5">
                    <label for="Card-Number"><strong>CVV</strong></label>
                    <input type="password" class="form-control " id="name"  minlength="3" maxlength="3" placeholder="123 " required/>
                </div>
                
              </div>

              <div class="form-group mt-3 d-flex ">
            
                <input type="zipcode" class="form-control w-50" id="zipcode" placeholder="Postal code"/>
              </div>
  

            </div>
  
          </div>

          <Router-link to="/thankyou"><button class="btn btn-dark mt-5 mb-2 w-50"> Pay </button></Router-link>
        </div>

       
        <div class="col-md-4 " style="margin-top: 80px;">
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
              <td>{{ product.quantity }}</td>
              <td>${{ product.price }}</td>
            </tr>
          </tbody>
            <tfoot>
              <tr>
              <td>Total</td>
              <td></td>
              <td>${{ total }}</td>
            </tr>
            </tfoot>
          </table>
  
        </div>
      </div>
    </div>
  </template>
  
  <script>
  
  
  export default {
    name: "Checkout",
    data() {
      return {
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

        const cart = JSON.parse(localStorage.getItem('cart'));
        console.log('Stored Cart:', cart);
        if (cart) {
        this.cart = cart;
        }
        },
    
    
  };
  
  </script>


  