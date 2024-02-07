let firebaseConfig = {
    // Enter your firebase credentials
    apiKey: "AIzaSyASKmuJVhr01Slt2y-bl70aiGo4jRAJT0M",
    authDomain: "blogging-website-1e35d.firebaseapp.com",
    projectId: "blogging-website-1e35d",
    storageBucket: "blogging-website-1e35d.appspot.com",
    messagingSenderId: "336860887369",
    appId: "1:336860887369:web:0b818a9f1cd10cd7070298"
};

firebase.initializeApp(firebaseConfig);

let db = firebase.firestore();