import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/about",
      name: "about",
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import("../views/AboutView.vue"),
    },
    {
      path: "/card",
      name: "card",
      component: () => import("../views/components/card.vue"),
    },
    {
      path: "/checkout",
      name: "checkout",
      component: () => import("../views/Checkout.vue"),
    },
    {
      path: "/product",
      name: "product",
      component: () => import("../views/Products.vue"),
    },
    {
      path: "/men",
      name: "men",
      component: () => import("../views/components/men.vue"),
    },
    {
      path: "/women",
      name: "women",
      component: () => import("../views/components/women.vue"),
    },
    {
      path: "/kid",
      name: "kid",
      component: () => import("../views/components/kid.vue"),
    },
    {
      path: "/watch",
      name: "watch",
      component: () => import("../views/components/watch.vue"),
    },
    {
      path: "/accessories",
      name: "accessories",
      component: () => import("../views/components/accessories.vue"),
    },
    {
      path: "/shoes",
      name: "shoes",
      component: () => import("../views/components/shoes.vue"),
    },
    // New route for product detail
    {
      path: "/product/:id",
      name: "product-detail",
      component: () => import("../views/detailcart.vue"),
      
    },
    {
      path: "/checkout/address",
      name: "address",
      component: () => import("../views/payment/address.vue"),
      
    },
    {
      path: "/checkout/address/optionpay",
      name: "optionpay",
      component: () => import("../views/payment/optionpay.vue"),
      
    },
    {
      path: "/checkout/address/optionpaycartinfo",
      name: "cartinfo",
      component: () => import("../views/payment/cartinfo.vue"),
      
    },
    {
      path: "/thankyou",
      name: "thankyou",
      component: () => import("../views/payment/thankyou.vue"),
      
    },
  ],
});

export default router;

