<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test API</div>

                    <div class="card-body">
                        Contoh hasil Pemanggilan Endpoint API
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.getData()
        },

        methods: {
            getData(){
                axios.get('/testapi')
            }
        }
    }
</script>
