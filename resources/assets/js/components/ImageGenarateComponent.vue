<template>
    <div>
        <!-- Modal -->
      <div class="container">
          <div class="container">
              <form v-on:submit.prevent="savePost" class="form-group">
                  <input v-model="name"  class="form-control" >
              </form>
          </div>
      </div>
    </div>

</template>

<script>
    export default {
        props: {},
        data(){
            return {
                name: '', postlistMenu: [], slug: '', postId: ''

            }
        },
        mounted() {

        },
        methods: {

        },
        filters: {}
    }


</script>

<style></style>