<template>
    <ul id="slide-out" class="side-nav">
        <li><a href="#!">Second Link</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
</template>


<script>
    import animate from 'gsap-promise';
    import sideNave from 'materialize-css/js/sideNav';
    global.jQuery = require('jquery');
    var $ = global.jQuery;
    window.$ = $;
    export default {
        mounted() {
            $(".button-collapse").sideNav();
            const sideNav = document.querySelector('.side-nav');
            animate.to(sideNav, 0.75, {transform: 'translateX(0%)', ease: Expo.easeOut});
        }
    }
</script>


