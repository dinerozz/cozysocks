// signin.php

/* auth */

$('.login-btn').click(function(e){ // e - event
    e.preventDefault();

    $(`input`).removeClass('error'); 

    let login = $('input[name="login"]').val();
    let password = $('input[name="password"]').val();

    $.ajax({
        url: 'signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data){
            if(data.status){
                document.location.href = 'admin.php'
            }
            else{
                if(data.type === 1){
                    data.fields.forEach(function(field){
                        $(`input[name="${field}"]`).addClass('error'); 
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }



            // JSON
        }
    });
    console.log(login);
});


/* Getting avatar from field */
let avatar = false;

$('input[name="avatar"]').change(function(e){
    avatar = e.target.files[0];
    console.log(avatar);
});

/* reg */

$('.register-btn').click(function(e){ // e - event
    e.preventDefault();

    $(`input`).removeClass('error'); 

    let login = $('input[name="login"]').val();
    let password = $('input[name="password"]').val();
    let full_name = $('input[name="full_name"]').val();
    let email = $('input[name="email"]').val();
    let password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('full_name', full_name);
    formData.append('email', email);
    formData.append('avatar', avatar);

    $.ajax({
        url: 'signup.php',
        type: 'POST',
        dataType: 'json',
		contentType: false,
		processData: false,
        cache: false,
        data: formData,
        success (data){
            if(data.status){
                document.location.href = 'login.php'
            }
            else{
                if(data.type === 1){
                    data.fields.forEach(function(field){
                        $(`input[name="${field}"]`).addClass('error'); 
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }



            // JSON
        }
    });
    console.log(login);
});