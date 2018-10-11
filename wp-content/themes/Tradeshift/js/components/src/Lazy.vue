<template>
  <div>
     <!-- Customer scrollable element -->
     <!-- <img v-lazy.container="imgUrl"  /> -->
     <!-- <div v-lazy:background-image.container="img" class="lazy-img-fadein"></div> -->
     <!-- <div class="TS-capabilities_wrapper" style="padding-top: 108px">
        <div class="myImage hidden-lg hidden-md"><img v-lazy.container="Tablet_xs" style="position: relative;right: 80px;width: 766px;"  class="lazy-img-fadein" /></div>
        <div class="TS-capabilities col-xs-6">
          <h3>With Tradeshift you can…</h3>
          <p><span>Buy products and services</span> efficiently, save money, and collaborate with suppliers through e&#8209;procurement, AP automation, and supplier management</p>
          <p><span>Find and collaborate with buyers</span>, sell products and services quickly and easily, and get paid with free e&#8209;invoicing</p>
          <p><span>Improve cash flow</span> for your business with dynamic discounting, supply chain finance, and virtual cards</p>
        </div>
        <div class="myImage hidden-sm hidden-xs"><img v-lazy.container="Tablet" style="position: relative;right: 80px;width: 766px;" class="lazy-img-fadein" /></div>
    </div> -->
    <!-- <div class="TS-capabilities_wrapper wow fadeIn" data-wow-delay="0s" data-wow-duration="1.8s" style="padding-top: 108px;visibility:hidden">
      <div class="myImage hidden-lg hidden-md"><img src="/wp-content/themes/Tradeshift/img/main/main-tablet-xs.png" style="position: relative;right: 80px;width: 766px;"  class="lazy-img-fadein" /></div>
      <div class="TS-capabilities col-xs-6">
      <h3>With Tradeshift you can…</h3>
      <p><span>Buy products and services</span> efficiently, save money, and collaborate with suppliers through e&#8209;procurement, AP automation, and supplier management</p>
      <p><span>Find and collaborate with buyers</span>, sell products and services quickly and easily, and get paid with free e&#8209;invoicing</p>
      <p><span>Improve cash flow</span> for your business with dynamic discounting, supply chain finance, and virtual cards</p>
      </div>
      <div class="myImage hidden-sm hidden-xs"><img v-lazy.container="Tablet" style="position: relative;right: 80px;width: 766px;" class="lazy-img-fadein" /></div>
    </div> -->
    <!-- <div class="box-container hidden-sm hidden-xs" style="float: right; width: 200px;">
      <div class="box">
        <img  v-lazy.container="Plant" style="display: block;">
      </div> 
      <div class="box">
        <img  v-lazy.container="Cup" style="position: relative; left: 80px;">
      </div>
    </div> -->
  </div>
</template>

<script>
export default {
  data () {
    return {
      Tablet_xs: 'wp-content/themes/Tradeshift/img/main/main-tablet-xs.png',
      Tablet_sm: 'wp-content/themes/Tradeshift/img/main/main-tablet-sm.png',
      Tablet: 'wp-content/themes/Tradeshift/img/main/main-tablet.png',
      Cup: '/wp-content/themes/Tradeshift/img/main/main-cup.png',
      Plant: '/wp-content/themes/Tradeshift/img/main/main-plant.png'
    }
  }
}
</script>

<style>
  img[lazy=loading] {
    /*your style here*/
  }
  img[lazy=error] {
    /*your style here*/
  }
  img[lazy=loaded] {
    /*your style here*/
  }
  or background-image
  .lazy-img-fadein[lazy=loading] {
    /*your style here*/
    background: blue;
  }
  .yourclass[lazy=error] {
    /*your style here*/
  }
  .lazy-img-fadein[lazy=loaded] {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn;
}
</style>

