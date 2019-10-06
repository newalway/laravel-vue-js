<template >
  <div class="">

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="name" v-model="name" type="text" class="form-control " name="name"  required autocomplete="name" autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="email" v-model="email" type="email" class="form-control" name="email"  required autocomplete="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="password" v-model="password" password type="password" class="form-control" name="password" required autocomplete="new-password">

            </div>
        </div>

        <!-- <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div> -->

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button v-on:click="addNewUser()" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>


  </div>

</template>

<script type="text/javascript">
export default{
    data(){
        return{
          name:'',
          email:'',
          password:'',
        }
    },
    methods:{
      addNewUser(){
          axios.post('/api/users',{
            name:this.name,
            email:this.email,
            password:this.password
          }).then(function(response) {
            console.log(response);
            router.push({ name: 'users' })
          }).catch(function(error) {
            console.log(error);
          })
      }
    }

}

</script>
