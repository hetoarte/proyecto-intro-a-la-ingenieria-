
  var db = firebase.firestore();

function guardar(){
    var nombre = document.getElementById('nombre').value;
    var link = document.getElementById('link').value;
    var raiz = document.getElementById('raiz');

    var ra = raiz.innerText
    
    console.log(ra);


    db.collection("mates").doc("mate1").collection("apuntes").add({
    name: nombre,
    link: link   
    })
    .then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
        var nombre = document.getElementById('nombre').value = '' ;
        var link = document.getElementById('link').value = '' ;

    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });

}

// leer documentos 
var tabla = document.getElementById("list-fire");
db.collection("mates").doc("mate1").collection("apuntes").get().then((querySnapshot) => {
    tabla.innerHTML = '';
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data()}`);
        tabla.innerHTML += `
        <p> <a href= ${doc.data().link}> ${doc.data().name}</a> </p>
        
        `
    });
});


