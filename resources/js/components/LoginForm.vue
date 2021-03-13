<template >
<div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <h3>
                        Login
                </h3>
            </div>
            </div>
<div class="row">
      <div class="col-md-4 offset-md-2">
            
      
     <div >
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" v-model="user.email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" v-model="user.password" >
      </div>

      <button type="submit" @click="login"  class="btn btn-primary">Submit</button>
    </div>        
</div>
</div>
</div>
</template>
<script>
export default {
  
  //name: 'login'
  // data(){
  //   return {

  //     email: '',
  //     password:'',
  //   }
  // },
  // methods: {
  //   login() {
       
  //   }
  // },
data: () => ({
user: {
email: "",
password:"",

}

}),
methods: {
  login(){
this.$store.dispatch('currentUser/loginUser' , this.user);

  }
},

}
</script>
