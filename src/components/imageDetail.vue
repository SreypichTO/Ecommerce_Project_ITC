<template>
<div class="Container">
    <div class="group-row">
        <div class="left-row" :style="{ backgroundImage: 'url(' +Image+ ')' }"></div>  
       
        <div class="right-row">
            <div class="rr1">
                <div class="text">{{ plantName  }}</div>
                <div class="groupPrice">
                    <span class="text">${{ price1  }}</span><span class="text1">${{ price2  }}</span>
                </div>
                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In explicabo eum fuga eligendi? Aliquid cupiditate esse, 
                    labore eos unde rerum?</p>
                </div>
                <div class="starIcon">
                    ssssss
                </div>
                <div class="addbtn">BBB</div>
            </div>  
            <div class="rr2">
                <div><buybtn btnText="Add to cart"></buybtn></div>
            </div>
       </div >
       
</div>
</div       >
</template>

<script>
import buybtn from "../components/Buybtn.vue";
 
    export default {
        name: "imageDetail",
        props:{
            Image:String,
            price1: String,
            price2: String,
            plantName:String,
        },
        components:{
            buybtn,
             
        },
    }
</script>

<style  scoped>
.Container{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 1440px;
    /* height: 571px; */
}
.group-row{
    /* background-color: grey; */
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    /* height: 571px; */
}
.left-row{
    width: 40%;
    height: 420px;
    border-radius: 10px;
    object-fit:fill;
    /* background-color:#879588; */
}
.right-row{
    width: 46.7%;
    height: 420px;
    display: flex;
    flex-direction: column;
    /* background-color:#D0E7D2;   */
}
.rr1{
    display: flex;
    flex-direction: column;
    gap: 18px;
    padding-left: 20px;
    padding-top: 20px;

}
.rr2{
    display: flex;
    justify-content: flex-end; 
    align-items: flex-end; 
    width: 100%;
    height: 100%;
}
.groupPrice {
    display: flex;
    align-items: center;
    align-self: stretch;
    flex-shrink: 0;
    gap: 10px;
 
}
.text{
    /* background-color: gray; */
    font-family: 'Inria Sans', sans-serif; 
    font-size: 22px;
    font-weight: 700;
    color: #618264;
}
 
.text1 {
    font-family: 'Open Sans', sans-serif; 
    font-size: 18px;
    color: red;
    text-decoration: line-through;
}
p{
    width: 589px;
    font-family: 'Open Sans', sans-serif;
    color: #343434;
}
</style>