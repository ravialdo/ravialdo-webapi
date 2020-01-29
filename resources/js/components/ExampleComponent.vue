<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header">Test API</div>

                    <div v-if="loading === false" class="card-body">
                        Contoh hasil Pemanggilan Endpoint API

                        <table class="table table-striped mt-3">
                            <thead class="table-success">
                                <th>Nama</th>
                                <th>Jk</th>
                                <th>Dibuat Pada</th>
                            </thead>
                            <tbody>

                                <tr v-for="item in data" key="item.id">
                                    <td>{{ item.nama }}</td>
                                    <td>{{ item.jk }}</td>
                                    <td>{{ item.created_at }}</td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- <p>Response : </p>
                        {{ data }}

                        {{ error }} -->
                   </div> 
                    <div v-else  class="card-body">
                        loading...
                    </div>
                </div>
            </div> 
        </div>
        <!-- Progress bar vue -->
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
