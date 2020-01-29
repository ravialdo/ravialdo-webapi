<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test API</div>

                    <div v-if="loading === false" class="card-body">
                        Contoh hasil Pemanggilan Endpoint API

                        <p>Response : </p>
                        {{ data }}

                        {{ error }}
                   </div> 
                    <div v-else>
                        loading...
                    </div>
                </div>
            </div>    
        </div>

        <vue-progress-bar></vue-progress-bar>
    </div>
</template>

<script>

    export default {

        data() {
            return {
                data: [],
                error: null,
                loading:false
            }
        },

        mounted() { 
            this.getData()
        },

        methods: {
            
            getData(){
                this.loading = true
                this.$Progress.start()
                axios.get('/testapi')

                .then((res) => {
                    this.data = res.data.students.data
                    this.loading = false
                    this.$Progress.finish()
                })
                .catch((error) => {
                    this.error = error.message
                    this.loading = false
                    this.$Progress.fail()
                })

            }
        }
    }
</script>
