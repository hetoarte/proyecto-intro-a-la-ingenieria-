function login(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    

    firebase.auth().signInWithEmailAndPassword(email, password)
    
    .catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        // ...
      });
    
}

function observador(){
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
          console.log("activo");
          aparecer();
          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          // ...
        } else {
          // User is signed out.
          console.log("no activo")
          // ...
        }
      });
}
observador();

function aparecer(){
    var contenido = document.getElementById('contenido');
    contenido.innerHTML = `
    <button onclick="cerrar()">salir</button>
    
    `;
}

function cerrar(){
    firebase.auth().signOut()
    .then(function(){
        console.log("saliendo...")
    })
    .catch(function(error){
        console-log(error)
    })
}