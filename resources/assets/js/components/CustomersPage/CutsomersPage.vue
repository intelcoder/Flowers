<template>
    <div>
        <Customer/>
        <DashboardSideNav/>
    </div>


</template>


<script>
    import Customers from '../Customers/Customers.vue';
    import DashboardSideNav from '../DashboardSideNav/DashboardSideNav.vue';

    export default {
        components: {
            'Customer': Customers,
            'DashboardSideNav': DashboardSideNav
        }
    }

</script>