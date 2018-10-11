<template>
    <div>
    <transition 
        enter-active-class="slideInDownThree" 
        leave-active-class="slideOutRight">
        <div v-if="isShowingText">
          <h1>Why do 1.5 million companies rely on Tradeshift?</h1>
          <div v-if="isShowingSubTitle">
            <h3 class="hidden-xs">Whether you’re running a Fortune 500 company, a sole proprietorship, or any size business in between, Tradeshift is a B2B marketplace with solutions for you to buy, sell, and pay your way to success. Collaborate seamlessly with your buyers, sellers, or both.</h3>
					  <h3 class="visible-xs">Whether you’re running a Fortune 500 company or your own business, Tradeshift offers a B2B marketplace with everything you need to succeed with your trading partners.</h3>
          </div>
        </div>
    </transition>
    <slot></slot>
    </div>
</template>

<script>
export default {
 data() {
     return {
        isShowingSubTitle: false,
        isShowingText: false
    }
 },
 methods: {
    toggleShowText: function() {
      this.isShowingText = !this.isShowingText;
      setTimeout(() => {
        this.toggleShowSubTitle();
      }, 300);
    },
    toggleShowSubTitle: function() {
      this.isShowingSubTitle = !this.isShowingSubTitle;
    }
  },
  mounted() {
    setTimeout(() => {
      this.toggleShowText();
    }, 200);
  }
}

</script>

<style scoped>
    @keyframes slideInLeft {
      0%{opacity:0;transform:translateX(300%)}
      to{ opacity:1;transform:translateX(0%)}
    }
    @keyframes slideInDownThree {
      0%{opacity:0;}
      to{ opacity:1;}
    }
    .slideInLeft {
      z-index: 10;
      position: relative;
      animation: slideInLeft 2s ease-out;
    }
    .slideInDownThree {
      z-index: 11;
      position: relative;
      animation: slideInDownThree 2.5s ease-out;
    }
</style>
