

//login user
function logIn(){
  let  username= document.getElementById("username").value; 
  let  password= document.getElementById("password").value;
    // Create a new instance of the user class
    var user = Parse.User
        .logIn(username, password).then(function(user) {
            console.log('User created successful with name: ' + user.get("username") + ' and email: ' + user.get("email"));
            localStorage.setItem('nome',user.get("username"));
            localStorage.setItem('conta',user.get("email"));
            location.href="app.html";
    }).catch(function(error){
        console.log("Error: " + error.code + " " + error.message);
    });
}
if(localStorage.getItem('nome')){
  let resultName = document.getElementById("resultName");
  let resultEmail = document.getElementById("resultEmail");
  resultName.innerHTML = localStorage.getItem('nome');
  resultEmail.innerHTML = localStorage.getItem('conta');
  console.log('resu:::::',resultEmail);
}
//logout user
function logout(){
  Parse.User.logOut().then(() => {
    localStorage.clear();
    localStorage.removeItem('username');
    localStorage.removeItem('email');
    var currentUser = Parse.User.current();  
     location.href="login.html";
    // this will now be null
  });
 alert("Sessão terminada");
}

//Criar user
function signUp(){ 
  var user = new Parse.User();
  user.save({
  username: document.getElementById("username").value,
  email: document.getElementById("email").value,
  password: document.getElementById("password").value
}).then(function(response) {
  alert('New object create with success! ObjectId: ' + response.id + ', '+ user.get('username'));
}).catch(function(error) {
  alert('Error: ' + error.message);
});
}
//redefinir senha 
function resetPassword() {
  let email='';
  Parse.User.requestPasswordReset(email).then(function() {
    console.log("Password reset request was sent successfully");
  }).catch(function(error) {
    console.log("The login failed with error: " + error.code + " " + error.message);
  });
}

console.log(":::::: running");


        


