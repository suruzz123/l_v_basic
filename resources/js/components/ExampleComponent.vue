<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3>Example Component</h3></div>
  
                    <div class="card-body">
                        Example Component
                        <br/><br/>
                        <router-link to="/ucomp" class="btn btn-primary">Go to User</router-link>
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