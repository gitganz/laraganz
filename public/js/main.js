$(function() {
  $('#create-user').on('click', function(e){
      $('#form1').dialog();
      e.preventDefault();
  });

  $('form[data-remote]').on('submit',function(e){
     
      var form = $(this);

      var method = form.find('input[name="_method"]').val() || 'POST';

      var url = form.prop('action');

      $.ajax({
          type: method,
          url: url,
          data: form.serialize(),
          dataType: 'json',
          success: function(response){
             // //alert('all done');
             var message = form.data('remote-success-message'),
                 mod_form = $('#form1 , .ui-dialog, .ui-resizable-handle');
            
             if(response.message){
                
                $('.flash').html(message).fadeIn(300).delay(2500).fadeOut(300);
                
                mod_form.hide();

             }else{
               
                $.each(response, function(i, item){
                   
                    $('.errors').html(response[i]).fadeIn(1000);

                });
                 
             }
             console.log(response);
          }
      });

      e.preventDefault();
  });

  // $('input[data-confirm], button[data-confirm]').on('click', function(e){

  //     var input = $(this);
     
  //     //to disable the button when on process of submission
  //     input.prop('disabled','disabled');

  //     if ( !confirm(input.data('confirm'))){
        
  //       e.preventDefault();
      
  //     }
      
  //     input.removeAttr('disabled');
      
      
  // });

});