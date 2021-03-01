var firebaseConfig = {
    apiKey: "AIzaSyCS1AbjulHwVQX0FXvwdN2hXeku1lJpRh0",
    authDomain: "survey-app-8f47c.firebaseapp.com",
    databaseURL: "https://survey-app-8f47c.firebaseio.com",
    projectId: "survey-app-8f47c",
    storageBucket: "survey-app-8f47c.appspot.com",
    messagingSenderId: "231817333443",
    appId: "1:231817333443:web:0a39c1702af1c74282f076",
    measurementId: "G-T4H5YPNKBM"
  };
  // Initialize Firebase
  //firebase.initializeApp(firebaseConfig);
//  firebase.analytics();
var defaultProject = firebase.initializeApp(firebaseConfig);

  // "[DEFAULT]"

// Option 1: Access Firebase services via the defaultProject variable
var defaultStorage = defaultProject.storage();
var defaultFirestore = defaultProject.firestore();

console.log(defaultProject.name);
console.log(defaultStorage);
console.log(defaultFirestore);