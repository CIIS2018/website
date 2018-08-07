$("#inscripcion").submit(function (event) {
    event.preventDefault();

    var config = {
        apiKey: "AIzaSyCx0QW4ToFrqqFhaRSpMiJQKz5Uy7fGSuk",
        authDomain: "ciis-fe146.firebaseapp.com",
        databaseURL: "https://ciis-fe146.firebaseio.com",
        projectId: "ciis-fe146",
        storageBucket: "ciis-fe146.appspot.com",
        messagingSenderId: "542438907490"
    };
    firebase.initializeApp(config);

    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var dni = document.getElementById('dni').value;
    var ciudad = document.getElementById('ciudad').value;
    var postsRef = firebase.database().ref().child("registrados");
    var newPostRef = postsRef.push();

    newPostRef.set({
        nombre: nombre,
        apellido: apellido,
        email: email,
        dni: dni,
        imagen: ciudad
    });

});