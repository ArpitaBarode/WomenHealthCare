// Check if Firebase app is not already initialized
if (!firebase.apps.length) {
    // Initialize Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyB0-JnOpzU6Ba2M-CGpQe07IKlAIWKf0gM",
    authDomain: "blogging2-site.firebaseapp.com",
    projectId: "blogging2-site",
    storageBucket: "blogging2-site.appspot.com",
    messagingSenderId: "755122377338",
    appId: "1:755122377338:web:c8e5f6902573b8f2a9e1c3"
    };

    firebase.initializeApp(firebaseConfig);
}

// Get a reference to the Firestore database
const db = firebase.firestore();

// Rest of your code in blog.js


let blogId = decodeURI(location.pathname.split("/").pop());

let docRef = db.collection("blog").doc(blogId);

docRef.get().then((doc) => {
    if(doc.exists){
        setupBlog(doc.data());
    } else{
        location.replace("/");
    }
})

const setupBlog = (data) => {
    const banner = document.querySelector('.banner');
    const blogTitle = document.querySelector('.title');
    const titleTag = document.querySelector('title');
    const publish = document.querySelector('.published');
    
    banner.style.backgroundImage = `url(${data.bannerImage})`;

    titleTag.innerHTML += blogTitle.innerHTML = data.title;
    publish.innerHTML += data.publishedAt;

    const article = document.querySelector('.article');
    addArticle(article, data.article);
}

const addArticle = (ele, data) => {
    data = data.split("\n").filter(item => item.length);
     //console.log(data);

    data.forEach(item => {
        // check for heading
        if(item[0] == '#'){
            let hCount = 0;
            let i = 0;
            while(item[i] == '#'){
                hCount++;
                i++;
            }
            let tag = `h${hCount}`;
            ele.innerHTML += `<${tag}>${item.slice(hCount, item.length)}</${tag}>`
        } 
        //checking for image format
        else if(item[0] == "!" && item[1] == "["){
            let seperator;

            for(let i = 0; i <= item.length; i++){
                if(item[i] == "]" && item[i + 1] == "(" && item[item.length - 1] == ")"){
                    seperator = i;
                }
            }

            let alt = item.slice(2, seperator);
            let src = item.slice(seperator + 2, item.length - 1);
            ele.innerHTML += `
            <img src="${src}" alt="${alt}" class="article-image">
            `;
        }

        else{
            ele.innerHTML += `<p>${item}</p>`;
        }
    })
}