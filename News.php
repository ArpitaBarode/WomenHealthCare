<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregnancy News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="style/stylenews.css">
   
</head>
<body>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <img src="img/ne.jpg" class="toplogo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="home" aria-current="page" href="mainpage.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pregnancy"  onclick="onnavitemclick('pregnancy')"  href="#">Pregnancy</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" id="periods cramps"  onclick="onnavitemclick('periods cramps')" href="#">Periods</a>
        </li>
        </ul>
      <form class="d-flex" role="search">
        <input id="searchInput" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button id="search" class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

</nav>

<div class="container mt-3" style="padding-left:8%">
<h3 class="mt-4">Welcome to NewsApp</h3>
<div class="row content">
<div class="card my-2 mx-2 shadow-sm " style="width: 25rem; height:34rem;overflow:hidden;box-shadow: 7 8px 8px black;">
  <img src="..." class="card-img-top"style="height:200px;width:250px;margin:auto;margin-top:20px;" alt="...">
  <div class="card-body  "style="display:flex;flex-direction:column;">
    <h5 class="card-title">Card title</h5>
    <p class="card-text" style="-webkit-line-clamp:4;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn my-2 mt-auto "style="width:100%; background-color:Hot pink;">Read More</a>
  </div>
</div>

</div>
<div class="d-flex justify-content-around my-4">

<button class=" btn " style="background-color:#DE3162;color:white;" id="previous">Previous Page</button>
<button class=" btn " style="background-color:#DE3162;color:white;"  id="next">Next Page</button>
</div>

</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    let currentquery = "pregnancy"
    let currentpage = 1
    const fetchNews = async (page , q)=>{

/* var url = 'https://newsapi.org/v2/top-headlines?' +
         
          'q=' +q+ 
          '&from=2023-10-13&' +
           
           'pageSize=20&' +
           'page='+ page +
          
          '&sortBy=popularity&' +
          'apiKey=8fcdae8df89a4111be6e8eb3ea68d09c';*/
   //var url=(`https://newsapi.org/v2/everything?q=tesla&from=2023-09-14&sortBy=publishedAt&apiKey=8fcdae8df89a4111be6e8eb3ea68d09c`)
          var url =(`https://newsapi.org/v2/everything?from=2023-10-22&to=2030-09-26&pageSize=20&language=en&sortBy=publishedAt&apiKey=8fcdae8df89a4111be6e8eb3ea68d09c&page=${page}&q=${q}`);
var req = new Request(url);

let a = await fetch(req)
  let response = await a.json()
  
  
   
    let str=""
   
for(let item of response.articles){
    str = str + `<div class="card  my-2 mx-2 shadow-sm" style="width: 16rem ;height:31rem;overflow:hidden;box-shadow: 0 1px 1px rgba(72,78,85,.6);">
  <img src="${item.urlToImage}" class="card-img-top" style="height:200px;width:250px;margin:auto;margin-top:20px;"alt="...">
  <div class="card-body " style="display:flex;flex-direction:column;">
    <h5 class="card-title">${item.title.slice(0,50)}</h5>
    <p class="card-text"style="-webkit-line-clamp:4;overflow:hidden">${item.description.slice(0,100)}...</p>
    <a href="${item.url}"  target="_blank"  class="btn  mt-auto" style="width:150px;background-color:#DE3162;color:white;">Read More</a>
  </div>
</div>` 
}
document.querySelector(".content").innerHTML = str
}
fetchNews(1,currentquery)
search.addEventListener("click",(e)=>{
    
    e.preventDefault()
    let query=searchInput.value;
    currentquery=query
    fetchNews(1,query)
})

previous.addEventListener("click",(e)=>{
    
    e.preventDefault()
    if(currentpage>1){
    currentpage =currentpage -1
    
    
    fetchNews(currentpage,currentquery)
    }
})
next.addEventListener("click",(e)=>{
    
    e.preventDefault()
    currentpage =currentpage+1

    
    fetchNews(currentpage,currentquery)
})
function onnavitemclick(id){
  fetchNews(1,id);
}

</script>

</body>
</html>
<!-- periods cramps-->