$(document).ready(function () {
    
   

    $('.clas').on('keyup','.class',function(){
      
        var id = $(this).attr('id');

        var discount = $('.discount'+id).val();
          
        $.ajax({
          url:"http://localhost/cars-laravel/public/discount",
          method:"GET",
          data:
          {
            id,
            discount
          },
          success:function(data){
              
            var td = $('.discount'+id).on('keyup',function(){
                $("#cost"+id)[0].innerHTML;
            });
            console.log(data);

            $("#cost"+id).html(data); 
          }
        })
      })
})