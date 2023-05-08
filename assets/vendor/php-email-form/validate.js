jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.php-email-form').submit(function() {
   
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    

    if (ferror) return false;
    else var str = $(this).serialize();

    document.getElementById('lol').innerHTML = action + ' est passé par success';



    var this_form = $(this);
    var action = $(this).attr('action');


    var act = action.replace("monApplicationAjax.php?action=", "")

    document.getElementById('lol').innerHTML = act + ' bon';

    var action = $(this).attr('action');




    
    this_form.find('.reqAjax').slideUp();
    this_form.find('.loading').slideDown();



    
    
    $.ajax({
      type: "POST",
      url:  action,
      data: str,
      success: function(msg) {
        if (msg != 'OK') {
          
          this_form.find('.loading').slideUp();
          this_form.find('.reqAjax').slideDown().html(msg);


        

        
        
         
        } 
      }
    });
    return false;
  });


 



    //Contact
    $('form.php-email-form2').submit(function() {
   
      var f = $(this).find('.form-group'),
        ferror = false,
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
  
      
  
      if (ferror) return false;
      else var str = $(this).serialize();
  
      document.getElementById('lol').innerHTML = action + ' est passé par success';
  
  
  
      var this_form = $(this);
      var action = $(this).attr('action');
  
  
      var act = action.replace("monApplicationAjax.php?action=", "")
  
      document.getElementById('lol').innerHTML = act + ' bon';
  
      var action = $(this).attr('action');
  
  
  
  
      
      this_form.find('.reqAjax').slideUp();
      this_form.find('.loading').slideDown();
  
  
     
      
      
      $.ajax({
        type: "POST",
        url:  action,
        data: str,
        success: function(msg) {
          if (msg != 'OK') {
            
            this_form.find('.loading').slideUp();
            this_form.find('.reqAjax').slideDown().html(msg);


            setTimeout(  location.reload(),2000 );
            
  
  
          
  
          
          
           
          } 
        }
      });
      return false;
    });

});
