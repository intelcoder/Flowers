<template>
    <div>
        <div id="loading-page"  v-if="isLoading">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
                </div>
            </div>
        </div>
        <table class="table table-striped" v-if="!isLoading">
            <thead>
            <tr>
                <th data-field="id">#</th>
                <th data-field="id">Name</th>
                <th data-field="name">phone</th>
                <th data-field="price">Address</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(customer, index) in customers">
                <td>{{index + 1}}</td>
                <td>{{getFullName(customer.first_name, customer.last_name)}}</td>
                <td>{{customer.phone}}</td>
                <td>{{customer.address.address_code}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    import axios from 'axios';

    export default {
        data () {
            return {
                customers: 'temp ',
                isLoading: true,
                error: null,
                test: ''
            }
        },
        created () {
            this.getCustomerList();
        },
        watch: {
            '$route': 'getCustomerList'
        },

        methods: {
            getCustomerList () {
                axios.get('/api/customers')
                    .then((res) => {
                        if (res.status === 200) {
                            this.isLoading = false;
                            this.customers = res.data.customers
                        }
                    })
            },
            getFullName (firstName, lastName) {
                return firstName + ' ' + lastName
            }
        }
    }

</script>
