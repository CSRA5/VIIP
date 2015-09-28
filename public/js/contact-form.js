/* ---------------------------------------------
 Contact form
 --------------------------------------------- */
$(document).ready(function(){

     $("#submit_btn").click(function(){

        
        //get input field values
        var user_name = $('input[name=name_contact]').val();
        var country= $('select[name=country]').val();
        var user_email = $('input[name=email_contact]').val();
        var user_message = $('textarea[name=message_contact]').val();
        var user_phone = $('input[name=phone_contact]').val();
       
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_name == "") {
            $('input[name=name_contact]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_email == "") {
            $('input[name=email_contact]').css('border-color', '#e41919');
            proceed = false;
        }
        
        if (user_message == "") {
            $('textarea[name=message_contact]').css('border-color', '#e41919');
            proceed = false;
        }
         if (user_phone == "") {
            $('input[name=phone_contact]').css('border-color', '#e41919');
            proceed = false;
        }
        if(country=="Selecciona tu país") {

            $('select[name=country]').css('border-color', '#e41919');
            proceed = false;
        }
        
        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userName': user_name,
                'userEmail': user_email,
                'userMessage': user_message,
                'userPhone':user_phone,
                'country': country
            };
            
            //Ajax post data to server
            $.post('../contact_me.php', post_data, function(response){
            
                //load json data from server and output message     
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                }
                else {

                    output = '<div class="success">' + response.text + '</div>';
                    
                    //reset values in all input fields
                    $('#contact_form input').val('');
                      $('#submit_btn').val('Enviar');
                    $('#contact_form textarea').val('');
                  
                }
                
                $("#result").hide().html(output).slideDown();
            }, 'json');
            
        }
        
        return false;
    });
    

     $("#submit_btn_1").click(function(){
        
        var proceed = true;
        //get input field values
        var user_name = 'Directo';
        var user_email = $('input[name=email_1]').val();
        var user_message = 'Mensaje de call to action';
        var user_phone = '1111111';
 
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
       
        if (user_email == "") {
            $('input[name=email_1]').css('border-color', '#e41919');
            proceed = false;
            
        }
                       
        //everything looks good! proceed...
        if (proceed) {
           
           //data to be sent to server
            post_data = {
                'userName': user_name,
                'userEmail': user_email,
                'userMessage': user_message,
                'userPhone' : user_phone
            };
            
            //Ajax post data to server
            $.post('contact_me.php', post_data, function(response){
            
                //load json data from server and output message     
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                }
                else {
                
                    output = '<div class="success">' + response.text + '</div>';
                    
                    //reset values in all input fields
                    $('#contact_form_1 input').val('');
                                     
                }
                 $("#result_1").css('padding', '8px');                
                $("#result_1").hide().html(output).slideDown();
            }, 'json');
            
        }
        
        return false;
    });


    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function(){
        $("#contact_form input, #contact_form textarea").css('border-color', '');
        $("#result").slideUp();
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form_1 input").keyup(function(){
        $("#contact_form_1 input").css('border-color', '');
        $("#result").slideUp();
    });
     
 });
