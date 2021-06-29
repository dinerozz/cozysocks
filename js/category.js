getAllCategories()
function getAllCategories(){
    $.ajax({
        url: `products/get.php`
    }).done(function(res){
        res=JSON.parse(res)
        showAllCategories(res)
        console.log(res)
    })
}

function showAllCategories(categories){
    let output = ''
    output+='<a class="p-2 link-secondary" href="#" onlick="setCategory(0)>All</a>'
    for(const category of categories){
        output += `
            <a class="p-2 link-secondary" href="#" onlick="setCategory(${category.id})">${category.name}</a>
        `
    }
    $('#all-categories').html(output)
}