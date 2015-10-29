$(document).ready(function() {

      $("#play").fancybox({
          scrolling: 'no',
          minWidth: 200,
          minHeight : 600,
          autoSize  : true,
          tpl: {
              closeBtn : '<a title="Close" class="kryt" href="javascript:void(0);"></a>'
          },
          helpers : {
              media : {}
          }
      });
     
      $("#owl-demo").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items: 7,
          pagination:false,
          itemsDesktop: [1024,6],
          itemsTablet: [768,5],
          itemsTabletSmall: [600,6],
          itemsMobile:[480,4]
      });

      $(".cont1 .first-3 .form-vopr").fancybox({
          scrolling:'no',
          width:500,
          autoSize:true,
          height:600,
          minWidth: 200,
          minHeight : 400,
          tpl: {
              closeBtn : '<a title="Close" class="kryt" href="javascript:void(0);"></a>'
          }
      });

      $(".cont5 .act1 .form-vopr1").fancybox({
          scrolling:'no',
          width:500,
          autoSize:false,
          height:600,
          minWidth: 300,
          minHeight : 400,
          tpl: {
              closeBtn : '<a title="Close" class="kryt" href="javascript:void(0);"></a>'
          }
      });
      
      $("#main-form").submit(function(e){
          e.preventDefault();
          var user_name = $("#main-form #name").val();
          var user_phone = $("#main-form #phone").val();
          var user_email = $("#main-form #email").val();
          var user_mess = $("#mail-form #mess").val();

          if ($.isEmptyObject(user_name) || $.isEmptyObject(user_phone) || $.isEmptyObject(user_email)){
      
            swal({
              title: "Извините,",
              text: "Необходимо заполнить все поля!",
              type: "error",
              confirmButtonText: "Я все заполню"
            });
        
          } else {
              swal({
                title: "Подождите, сообщение отправляется...",
                text: '<div class="loader"></div>',
                html: true,
                showConfirmButton: false
              });

              e.preventDefault();

              var $that = $(this),
                  formData = new FormData($that.get(0));
              $.ajax({
                  type: "post",
                  url   : "http://176.32.230.251/mydomainwork.com/fitness/mail/mail.php",
                  data  : formData,
                  contentType: false,
                  processData: false,
                  success: function(data) {                      
                    $('a.fancybox-close').click();
                       swal({
                         title: 'Поздравляем, сообщение отправлено',
                         type: "success",
                         confirmButtonText: "ОК"
                       });
                    $("#main-form").trigger('reset');
                  }
              });
            }
        });
     
});
 