<template>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><router-link to="/">Flower</router-link></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><router-link to="/customers">Customers</router-link></li>
               <!-- <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>-->
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">Javascript</a></li>
                <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
    </nav>
</template>

<script>
    import animate from 'gsap-promise';
    export default {

        mounted(){

        },
        methods: {
        }

    }


</script>