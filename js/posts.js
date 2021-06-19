let pageVal = 1
getAllPosts(pageVal)
function getAllPosts(page){
    $.ajax({
        url: `products/get.php?page=${page}`
    }).done(function(res){
      
        res=JSON.parse(res)
        showAllPosts(res.posts)
        showPreviewPosts(res.posts)
        showAllPages(res.totalPages)
        console.log(res);
    })
}

// function showPreviewPosts(posts){
//     let output = ''
//     for(const post of posts){
//         output += `
//         <div class='product-card'>
//             <div class='container'>
//                 <div class='card-inner'>
//                     <h5 class='card-header'>${post.title}</h5>
//                     <div class='card-items'> 
//                         <div class='card-member'>
//                             <img src='${post.img}'>
//                             <p class='card-tex'>${post.description}</p>
//                             <p class='card-tex'>Views: ${post.views}</p>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         `
//     }
//     $('#preview-posts').html(output)

// }
function showPreviewPosts(posts){
    let output = ''
    for(const post of posts){
        output += `
                    <div class='feature-member'>
                        <div class='image-container'>
                            <img src='${post.img}'>
                        </div>
                            <h4>${post.title}</h4>
                            <p class='post-content'>${post.description}</p>
                            <p class='feedback'><span class='eye'><i class='far fa-eye'></i></span> ${post.views} </p>
                            <p class='feedback'><span class='heart'><i class='far fa-heart'></i></span> ${post.likes} </p>
                            <p class='feedback'><span class='message'><i class="far fa-comments"></i></span> ${post.feed} </p>
                    </div>
        `
    }
    $('#preview-posts').html(output)

}


// function showAllPosts(posts){
//     let output = ''
//     for(const post of posts){
//         output += `

//         <div class='col-sm-4 mb-5'>
//             <div class='card'>
//                 <div class='card-body'>
//                     <h5 class='card-title'>${post.title}</h5>
//                     <img src='${post.img}'>
//                     <p class='card-text'>${post.description}</p>
//                     <p class='card-text'>Views: ${post.views}</p>
//                     <a href='detail.php?id=${post.id}' class='btn btn-primary'>Details</a>
//                     <a href='products/edit.php?id=${post.id}' class='btn btn-info'>Edit</a>
//                     <a href='products/delete.php?id=${post.id}' class='btn btn-danger'>Delete</a>
//                 </div>
//             </div>
//         </div>
//         `
//     }
  
//     $('#all-posts-admin').html(output)
// }
function showAllPosts(posts){
    let output = ''
    for(const post of posts){
        output += `

        <div class='feature-member'>
            <img src='${post.img}'>
            <h4>${post.title}</h4>
            <p class='post-content'>${post.description}</p>
            <p class='feedback'><span class='eye'><i class='far fa-eye'></i></span> ${post.views} </p>
            <p class='feedback'><span class='heart'><i class='far fa-heart'></i></span> ${post.likes} </p>
            <p class='feedback'><span class='message'><i class="far fa-comments"></i></span> ${post.feed} </p><br>
            <a href='detail.php?id=${post.id}' class='btn btn-primary'>Details</a>
            <a href='products/edit.php?id=${post.id}' class='btn btn-info'>Edit</a>
            <a href='products/delete.php?id=${post.id}' class='btn btn-danger'>Delete</a>
        </div>
        `
    }
  
    $('#all-posts-admin').html(output)
}
function showAllPages(pages){
    let output = ''
    for(let i=1;i<=pages;i++){
        output+=`
        <li class='page-item'><a class='page-link' href='#' onclick="showNext(${i})">${i}</a></li>
        `
    }
    $('#all-pages').html(output)
}
function showNext(page){
    pageVal = page
    getAllPosts(pageVal)
}