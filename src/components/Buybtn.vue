<template>
    <div class="main-container">
      <div class="group">
        <div class="">
          <span class="text">{{ btnText }}</span>
        </div>
      </div>
    </div>
</template>


<script>
export default {
  name: "buybtn",
  props:{
      btnText:String,
            
  },
 

}
</script>
<style scoped>
 
.main-container {
  overflow: hidden;
}

.main-container,
.main-container * {
  box-sizing: border-box;
}

.group:hover{
  background: #618264;
  cursor: pointer;
}
.main-container {
  position: relative;
  width: 265px;
  height: 56.17px;
  margin: 0 auto;
  border-radius: 8px;
}
.group {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  flex-wrap: nowrap;
  gap: 10px;
  position: absolute;
  width: 265px;
  height: 56.17px;
  top: 0;
  left: 0;
  padding: 8px 8px 8px 8px;
  background: #79ac78;
  border-radius: 8px;
  box-shadow: 0 8px 23px 0 rgba(0, 0, 0, 0.13);
}
.group-2 {
  flex-shrink: 0;
  position: relative;
  width: 108px;
  font-family: Open Sans, var(--default-font-family);
  font-size: 20px;
  font-weight: 700;
  line-height: 27px;
  text-align: center;
  text-overflow: initial;
  white-space: nowrap;
  z-index: 1;
}
.text {
  position: relative;
  color: #ffffff;
  font-family: 'Open Sans', sans-serif; 
  font-size: 20px;
  font-weight: 700;
  line-height: 27.236px;
  text-align: center;
}
 

</style>