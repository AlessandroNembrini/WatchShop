<template>
  <div>
    <div style="text-align: right">
      <button class="toggle" @click="drawerVisible = true">
        &#8942;&#8942;&#8942; Show Menu
      </button>
    </div>
    <div
      class="right-drawer"
      :style="{
        width: drawerVisible ? '100%' : '0',
        paddingLeft: drawerVisible ? '10px' : '0',
      }"
    >
      <div style="text-align: right; margin: 5px">
        <button class="close" @click="drawerVisible = false">&#9587;</button>
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
      class="drawer-mask"
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

