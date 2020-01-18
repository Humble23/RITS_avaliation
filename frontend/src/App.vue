<script>
import HomePage from '@/views/Home.vue';
export default {
  name: 'app',
  components: {
      HomePage
  }
}
</script>

<template>
    <div id="app">
        <home-page />
    </div>
</template>

<style>
@font-face {
  font-family: "TT Norms";
  src: url("~@/assets/fonts/TTNorms-Regular.otf");
}

@font-face {
  font-family: "TT Norms, bold";
  src: url("~@/assets/fonts/TTNorms-Bold.otf");
}

@font-face {
  font-family: "TT Norms, medium";
  src: url("~@/assets/fonts/TTNorms-Medium.otf");
}

html, body {
  height: 100%;
  box-sizing: border-box;
}

#app {
  font-family: "TT Norms";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  height: 100%;
}
</style>
