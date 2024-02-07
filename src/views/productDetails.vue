<template><br>
<div class="container">
    <center>Product Detail</center>
    <div>
        <imageDetail 
            v-for="c in imageDetail"
            :key="c.id"
            :plantName="c.plantName"
            :price1="c.price1"
            :price2="c.price2"
            :Image="c.Image"
        ></imageDetail>
    </div>
    <div class="description">
        <ul class="tabs">
             <li id="tab_1" class="tab" href="#CareGuide" @click="toggletab('tab1','tab_1')"
                style="background-color:#D0E7D2; color: #436E35;"
             >Care Guide</li>
             <li id="tab_2" class="tab" href="#Desc" @click="toggletab('tab2','tab_2')">Description</li>
             <li id="tab_3" class="tab" href="#Review" @click="toggletab('tab3','tab_3')">Review</li>
        </ul>
        <div class="paragraph">
            <div class="sub-paragraph">
                <!-- This is tab1 : Care Guide-->
                <div id="tab1" class="tabcontent">    
                    <div class="text"><b>Weekly Watering</b><br>
                    <p>Calatheas enjoy weekly waterings, allowing the top 2,of soil to dry out partially. 
                        In winter, we recommend watering less frequently to prevent overwatering and root rot. 
                        This plant is not very drought tolerant, and extended periods of dryness will cause leaf edges to brown.
                    </p>
                </div>
                <div class="text"><b>Light Requirements</b><br>
                    <p>
                        Calatheas thrive in medium, indirect sunlight but tolerate lower light levels too. 
                        Bright direct sunlight can cause the stunning colours on their leaves to fade, with 
                        prolonged exposure likely to burn and scorch their leaves.
                    </p>
                </div>
                <div class="text"><b>Humidity</b><br>
                    <p>
                        Your Calathea will also appreciate being placed in a humid environment, which you can create with by misting it frequently, 
                        placing it close to other plants or on a pebble tray partly filled with water. Calatheas thrive in steamy bathrooms and kitchens.
                    </p>
                </div>
                </div>
                <!-- This is tab2 : Description-->
                <div id="tab2" class="tabcontent" style="display: none;"> <center class="text">Description</center>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam qui porro dolorem minus. Sed tenetur, at,
                     fuga ab, unde autem blanditiis eveniet explicabo officia soluta nobis repudiandae dicta consequatur maiores 
                     quis praesentium omnis ex ducimus cupiditate qui. Error est, ratione eaque iure totam eum eos fugit magni placeat temporibus suscipit.
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam qui porro dolorem minus. Sed tenetur, at,
                     fuga ab, unde autem blanditiis eveniet explicabo officia soluta nobis repudiandae dicta consequatur maiores 
                     quis praesentium omnis ex ducimus cupiditate qui. Error est, ratione eaque iure totam eum eos fugit magni placeat temporibus suscipit.
                </div>
                <!-- This is tab3 : Product Reviews-->
                <div id="tab3" class="tabcontent" style="display: none;">
                    <center class="text">Don’t take our word for it. Trust our customers</center>
                    <div class="review-wrap" >
                        <div style="width: 370px;height: 260px;background-color:white; border-radius: 10px;"></div>
                        <div style="width: 370px;height: 260px;background-color:white; border-radius: 10px;"></div>
                        <div style="width: 370px;height: 260px;background-color:white; border-radius: 10px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text_vector">   
        <span class="hot-sale">Hot Sale</span>
        <div class="vector"></div>
    </div>
        <div class="wrapcart">
             <Cart
                v-for="c in Cart"
                :key="c.id"
                :plantName="c.plantName"
                :price1="c.price1"
                :price2="c.price2"
                :pathImage="c.pathImage"
                :disText="c.disText"
             ></Cart>
 
       </div>
</div>
</template>

<script>
import { mapState } from 'pinia'
import { useProductStore } from "@/stores/Product";
import Cart from "../components/Cart.vue";
import imageDetail from "../components/imageDetail.vue";

const ProductStore = useProductStore() 
export default {
    name: "productDetails",
    props:{
 
    },
    components:{
        Cart,
        imageDetail,
    },
    computed: {
        ...mapState(useProductStore, ["Cart"]),
        ...mapState(useProductStore, ["imageDetail"])    
    },
    methods:{
        toggletab(tabId, tablink){
            var i,tabcontent,tabLink;
            tabcontent = document.getElementsByClassName("tabcontent");
            tabLink = document.getElementsByClassName("tab");
            for (i = 0; i <tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
                tabLink[i].style.backgroundColor = "transparent";
                tabLink[i].style.color = "white";

            }
            document.getElementById(tablink).style.backgroundColor = "#D0E7D2";
            document.getElementById(tablink).style.color = "#436E35";
            document.getElementById(tabId).style.display = "block";
        },

    },
    
};


// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();

</script>

<style scoped>

.container{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 1440px;
    height: 100vh;
    gap: 59px;
    /* background-color: rgb(167, 176, 183); */
}

ul{
    background-color: #79AC78;
    width: 1440px;
    height: 50px;
    display: flex;
    padding-left: 6.3%;
    flex-direction: row;
}
li:hover{
    cursor: pointer;background-color: #D0E7D2;
    color: #436E35;
}
li{
    display: flex;
    justify-content: center;
    align-items: center;
    /* margin-right: 1px; */
    width: 144Px;
    height: 50px;
    font-family: 'Inria Sans', sans-serif;
    color: white;
    font-size: 20px;
    font-weight: 700;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    /* background-color: #D0E7D2; */
}
.paragraph{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 1440px;
    height: 379px;
    background-color: #D0E7D2;
}
.sub-paragraph{
    display: flex;
    flex-direction: column;
    gap: 20px;
    width: 86.6%;
    height: 320px;
    /* background-color:#618264; */
}
.text{
    /* background-color: gray; */
    font-family: 'Inria Sans', sans-serif;
    font-size: 18px;
}
.review-wrap{
    display: flex;flex-direction: row;
    justify-content: space-between;
    margin-top: 10px;
    height: 266.4px;
    /* background-color:antiquewhite; */
}
.wrapcart{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 1400px;
    height: 369.5px;
    /* background-color: rgb(28, 168, 133); */
}


center{
color: #618264;
font-family: 'Inria Sans', sans-serif;
font-size: 30px;
font-weight: 700;
line-height: 35.97px;
}
.hot-sale {
  display: flex;
  align-items: flex-start;
  justify-content: center;
  flex-shrink: 0;
  flex-basis: auto;
  position: relative;
  width: 175px;
  height: 58px;
  color: #343434;
  font-family: 'Inria Sans', sans-serif;
  font-size: 48px;
  font-weight: 700;
  line-height: 57.552px;
  text-align: center;
  white-space: nowrap;
}
.vector {
  flex-shrink: 0;
  position: relative;
  width: 202px;
  height: 2px;
  background-color:#343434;
  z-index: 1;
}
.text_vector{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 28px;
    padding-bottom: 28px;
}
</style>