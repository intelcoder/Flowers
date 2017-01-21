<template>
  <div id="loading-page">
      <div class="preloader-wrapper big active">
          <div class="spinner-layer spinner-blue">
              <div class="circle-clipper left">
                  <div class="circle"></div>
              </div>
              <div class="gap-patch">
                  <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                  <div class="circle"></div>
              </div>
          </div>
      </div>
  </div>
</template>


<script>

  import axios from 'axios';

  export default {
    data () {
      return {
      }
    },
  }
</script>


<style lang="scss" scoped>
  #loading-page {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

</style>
