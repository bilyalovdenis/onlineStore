function registerNewUser(){
    validation_input();
    $.ajax({
        type: 'POST',
        data: {first_name: $('#first_name').val(),
               second_name: $('#second_name').val(),
               email: $('#email').val(),
               password: $('#password').val()},
        url: 'user_reg.php',   
        dataType: "json",
        success: function(data){
            registrationAnswer(data);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
}
function loginUser(){
    validation_input();
    $.ajax({
        type: 'POST',
        data: {email: $('#login_email').val(),
               password: $('#login_password').val()},
        url: 'user_login.php',   
        dataType: "json",
        success: function(data){
            loginAnswer(data);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
}
function logout(){
    validation_input();
    $.ajax({
        type: 'GET',
        url: 'user_logout.php',   
        dataType: "json",
        success: function(data){
            console.log(data);
            location.reload(true);
        },
        error: function( xhr, textStatus ) {
            alert( [ xhr.status, textStatus ] );
        },
    });
}
function validation_input(){
    $('#reg_email_error').css({'display':'none'})
    $('#login_error').css({'display':'none'});
    console.log('validation_input');
}
function registrationAnswer($serverAnswer){
    switch ($serverAnswer){
        case ('accept'):
            alert('Учетная запись успещно создана!');   
        window.location.replace('http://localhost:8081/');
            break;
        case (1062):
            $('#reg_email_error').text('Пользователь с указанным email уже существует')
            $('#reg_email_error').css({'display':'block'})
            break;    
    }   
}
function loginAnswer($answer){
    if($answer == 'error'){
        $('#login_error').text('Логин или пароль указаны неверно');
        $('#login_error').css({'display':'block'});
    }else if($answer=='accept'){
        alert('Вы успешно вошли в систему!');
        window.location.replace('http://localhost:8081/');
    }
}