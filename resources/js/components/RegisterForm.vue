<template >
<div>
        <div class="row">
            <div class="col-md-4 offset-md-2">
                <h3>
                        Register
                </h3>
            </div>
            </div>
<div class="row">
      <div class="col-md-4 offset-md-2">
            
      
     <div>
      <div class="form-group">
        <label for="exampleInputEmail1">Admin Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name" v-model="user.name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="user.email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>    
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="user.password">
      </div>

      <button  type="submit" @click="register"  class="btn btn-primary">Submit</button>
    </div>        
</div>
</div>
</div>
</template>
<script>
export default {
 /* name: 'register'  */
 data: () => ({
user: {
name: "",  
email: "",
password:"",

}

}),
methods: {
  register(){
this.$store.dispatch('currentUser/registerUser' , this.user);

  }
},
}
</script>
