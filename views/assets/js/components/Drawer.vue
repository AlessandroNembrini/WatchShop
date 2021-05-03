<template>
  <div>
    <div class="text-right d-lg-none">
      <a class="drawer__btn" @click="drawerVisible = true">
        <div class="myHamburger"></div>
        <div class="myHamburger"></div>
        <div class="myHamburger"></div>
      </a>
    </div>
    <div
      class="drawer__right"
      :style="{
        width: drawerVisible ? '80%' : '0',
        paddingLeft: drawerVisible ? '10px' : '0',
      }"
    >
      <div class="text-right mx-2 my-2">
        <button class="drawer__close" @click="drawerVisible = false">&#9587;</button>
      </div>
      <h1>The Brand</h1>
      <h4>Watches</h4>
      <h4>Jewellery</h4>
      <h4>Wedding</h4>
      <h4>Academy</h4>
      <h4>Company</h4>
      <h4>Stores</h4>
    </div>
    <!-- We will make the mask fill the screen while the menu is visible. Because its z-index is 1 less than that of the menu, the menu will still be displayed on top of it -->
    <div
      class="drawer__mask"
      :style="{
        width: drawerVisible ? '100vw' : '0',
        opacity: drawerVisible ? '0.6' : '0',
      }"
      @click="drawerVisible = false"
    ></div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      drawerVisible: false,
    };
  },
};
</script>

