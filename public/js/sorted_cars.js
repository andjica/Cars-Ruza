$(document).ready(function () {
    
    var gearshift = localStorage.getItem('gearshift');
    var category = localStorage.getItem('category_id');
    var type = localStorage.getItem('type');
    var benzine = localStorage.getItem('benzine');
    var color = localStorage.getItem('color');
    var url = $('meta[name="base_url"]').attr('content');

    $.ajax({
        url:'http://localhost/cars-laravel/public/sorted_cars',
        method:'POST',
        data:
        {
            "_token": $('#token').val(),
            category,
            gearshift,
            type,
            benzine,
            color
        },
        success: function(data)
        {
            console.log(data);

            var text = `<div class="container my-4" style="margin-top:100px;">
            <div class="row my-4">
            <div class="row my-4">`;

        $.each(data, function(key,value){
            text += `
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
            
              <div class="card h-80">
                <a href="${url}/offerte" data-id="${value['id']}" class="car"><img class="card-img-top" src="img/${value['image']}" style="height: 245px;" alt=""></a>
                <div class="card-body">
                  <p class="card-text">
                  <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> ${value['desc1']}<br>
                  <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> ${value['desc2']}<Br>
                  <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> ${value['desc3']}<BR>
                  <i class="fa fa-check" style="color:orange" aria-hidden="true"></i> ${value['desc4']}</p>
                </div>
              </div>
            
              </div>
            `
        });
        text += `</div></div></div>`;

            $('.sorted').html(text);
        }
    });

    $('.sorted').on('click','.car', function(){
            var car = $(this).data('id');
            localStorage.setItem('car', car);
            alert(car);
        });
})