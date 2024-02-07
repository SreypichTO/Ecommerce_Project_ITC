<template>
  
<div>
  
  <div class="container">
      <!-- <img  style=" {{ :backgroundImage:pathImage }}; width: 272px; height: 187px;">:src=pathImage -->
    <div class="pic" :style="{ backgroundImage: 'url(' + pathImage + ')' }"></div>  
    <div class="productLabel">
        <div class="textLabel">{{ disText }}</div>
    </div>
     
    <!-- <div class="pic" :style="{ backgroundImage: 'url(' + pathImage + ')' }"></div>   -->
    <div class="section">
      <span class="text">{{ plantName }}</span>
      <div class="group">
        <span class="text-2">${{ price1 }}</span><span class="text-3">${{ price2 }}</span>
      </div>
    </div>
    <buybtn btnText="Buy"></buybtn>
  </div>
</div>

</template>

 
<script>
import buybtn from "./Buybtn.vue";
export default {


  name:"Cart",
  props:{
      plantName: String,
      price1: String,
      price2: String,
      pathImage : String,
      disText : String,
  },
  components:{
      buybtn,
  },
 
  // methods: {
  //     getPhoto() {
  //       return '../assets/images/similar1.png';
  //     }
  //   },
}
  

</script>

<style scoped>


.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  width: 300px;
  height: 370px;
  background-color: #F0F5F0;
  border-radius: 16px;
  padding: 14px 14px 14px 14px;
 
}
.productLabel {
  width: 58px;
  height: 32px;
  position:relative;
  top: -170px;
  right: -107px;
  background-color: #506B52;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
.textLabel {
  text-align: center;
  font-family: 'Open Sans', sans-serif; 
  color: white;
  font-size: 12px;
  font-weight: 400;
  line-height: 12px;
  position: relative;
  top: 10px;
}
.discount {
  position: relative;
  top:90px;

}
.pic {
 
 /* background-color: #111111; */
 width: 272px;
 height: 187px;
 border-radius: 8px;
 }
.pic {
width: 272px;
height: 187px;
border-radius: 8px;
}
.pic:hover{
  
  cursor: pointer;
}
.section {
display: flex;
flex-direction: column;
align-items: flex-start;
justify-content: center;
align-self: stretch;
flex-wrap: nowrap;
flex-shrink: 0;
gap: 4px;
position: relative;
padding: 0 8px 0 8px;
z-index: 1;
}
.text {
align-self: stretch;
flex-shrink: 0;
flex-basis: auto;
position: relative;
height: 27px;
color: #343434;
font-family: 'Open Sans', sans-serif; 
font-size: 20px;
font-weight: 700;
line-height: 27px;
text-align: left;
white-space: nowrap;
z-index: 2;
}
.group {
display: flex;
align-items: center;
align-self: stretch;
flex-wrap: nowrap;
flex-shrink: 0;
gap: 8px;
position: relative;
z-index: 3;
}
.text-2 {
display: flex;
align-items: flex-start;
justify-content: center;
flex-shrink: 0;
flex-basis: auto;
position: relative;
width: 51px;
height: 27px;
color: #343434;
font-family: Open Sans, var(--default-font-family);
font-size: 20px;
font-weight: 400;
line-height: 27px;
text-align: center;
white-space: nowrap;
z-index: 4;
}
.text-3 {
display: flex;
align-items: flex-start;
justify-content: center;
flex-shrink: 0;
flex-basis: auto;
position: relative;
width: 41px;
height: 22px;
color: #d11e1e;
font-family: Open Sans, var(--default-font-family);
font-size: 16px;
font-weight: 300;
line-height: 21.789px;
text-align: center;
text-decoration: line-through;
white-space: nowrap;
z-index: 5;
}

.text-4 {
flex-grow: 1;
flex-shrink: 0;
flex-basis: auto;
position: relative;
height: 27px;
color: #f0f5f0;
font-family: Open Sans, var(--default-font-family);
font-size: 20px;
font-weight: 700;
line-height: 27px;
text-align: center;
white-space: nowrap;
z-index: 7;
}

</style>