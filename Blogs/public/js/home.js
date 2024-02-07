// Check if Firebase app is not already initialized

// Rest of your code in blog.js
;

const blogSection = document.querySelector('.blogs-section');

db.collection("blog").get().then((blogs) => {
    blogs.forEach(blog => {
        if(blog.id != decodeURI(location.pathname.split("/").pop())){
            createBlog(blog);
        }
    })
})

const createBlog = (blog) => {
    let data = blog.data();
    let title = data.title ? (data.title.length > 100 ? data.title.substring(0, 100) + '...' : data.title) : '';
    let article = data.article ? (data.article.length > 200 ? data.article.substring(0, 200) + '...' : data.article) : '';

    blogSection.innerHTML += `
    <div class="blog-card">
    <img src="${data.bannerImage || ''}" class="blog-image" alt="">
    <h1 class="blog-title">${title}</h1>
    <p class="blog-overview">${article}</p>
    <a href="/${blog.id}" class="btn dark">read</a>
</div>
    `;
}