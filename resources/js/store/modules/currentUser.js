import axios from "axios";

 const state = {
user: {

}

 };
 const getters = {};
 
 const actions = {

loginUser({},user){
axios
.post("api/login",
{
email: user.email,
password: user.password
})
.then( response => {
    console.log(response.data)
if(response.data.token){
    //savetoken
localStorage.setItem(
    "admin_token",
    response.data.token
)
window.location.replace("/home")

}
})
},
registerUser({},user){
    axios
    .post("api/register",
    {
    name:  user.name,    
    email: user.email,
    password: user.password
    })
    .then( response => {
        console.log(response.data)
    if(response.data.token){
        //savetoken
    localStorage.setItem(
        "admin_token",
        response.data.token
    )
    window.location.replace("/login")
    
    }
    })
    
},

 };
 const mutations = {};

 export default {
namespaced : true,     
state,
getters,
actions,
mutations,

 } 