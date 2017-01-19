<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component 123</div>
                      <div>{{name}}</div>
                    <div class="panel-body">
                        I'm an example component! 123123
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import axios from 'axios';

  export default{
    ready() {
      console.log('test')
    },
    methods: {
      getCustomerList: () => {
        axios.get('/api/customers')
          .then((res) => {
            console.log(res);
          })
      }

    }

  }

</script>
