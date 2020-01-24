<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3>User Component</h3></div>
  
                    <div class="card-body">
                        User Component
                        <br/><br/>
                        <router-link to="/" class="btn btn-danger">Go to Home</router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.card{
text-align: center;
}
</style>