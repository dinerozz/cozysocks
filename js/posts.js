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

function showPreviewPosts(posts){
    let output = ''
    for(const post of posts){
        output += `
                    <div class='feature-member'>
                        <div class='image-container'>
                            <img src='${post.img}'>
                        </div>
                            <h4>${post.title}</h4>
                            <p class='post-content'>Desc: ${post.description}</p>
                            <p class='post-content'>Price: ${post.cost}тг/шт</p>
                            <p class='post-content'>Country: ${post.country}</p>
                            <p class='post-content'>Material: ${post.material}</p>
                            <p class='feedback'><span class='eye'><i class='far fa-eye'></i></span> ${post.views} </p>
                            <p class='feedback'><span class='heart'><i class='far fa-heart'></i></span> ${post.likes} </p>
                            <p class='feedback'><span class='message'><i class="far fa-comments"></i></span> ${post.feed} </p><br>
                            <a href='detail.php?id=${post.id}' class='details-button'><i class="fas fa-info-circle"></i> Details</a>
                            </div>
        `
    }
    $('#preview-posts').html(output)

}

function showAllPosts(posts){
    let output = ''
    let counter=0;
    for(const post of posts){
        counter++
        output += `
        <div class='table-responsive'>
        <table class="table table-striped">
        <thead>
          <tr>
            <th>№</th>
            <th><h4>Title</h4></th>
            <th>Desc</th>
            <th>Country</th>
            <th>Material</th>
            <th>Cost</th>
            <th>Count in</th>
            <th>Sizes</th>
            <th>Sex</th>
            <th>Season</th>
            <th><i class='far fa-eye'></i></th>
            <th><i class='far fa-heart'></i></th>
            <th><i class="far fa-comments"></i></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>${counter}</td>
            <td>${post.title}</td>
            <td><p>${post.description}</p></td>
            <td><p>${post.country}</p></td>
            <td><p>${post.material}</p></td>
            <td><p>${post.cost}тг/шт</p></td>
            <td><p>${post.count_in}</p></td>
            <td><p>${post.sizes}</p></td>
            <td><p>${post.sex}</p></td>
            <td><p>${post.season}</p></td>
            <td><p class='feedback'><span class='eye'></span> ${post.views} </p></td>
            <td><p class='feedback'><span class='heart'></span> ${post.likes} </p></td>
            <td><p class='feedback'><span class='message'></span> ${post.feed} </p><br></td>
          </tr>
      
        </tbody>

      </table>
      <div class='card-image'><img src='${post.img}'>
        <a href='detail.php?id=${post.id}' class='btn btn-primary'><i class="fas fa-info-circle"></i></a>
        <a href='products/edit.php?id=${post.id}' class='btn btn-info'><i class="fas fa-pencil-alt"></i></a>
        <a href='products/delete.php?id=${post.id}' class='btn btn-danger'><i class="fas fa-trash-alt"></i></a></div>
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