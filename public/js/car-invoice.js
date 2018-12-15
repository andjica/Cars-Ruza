$(document).ready(function(){

    var id = localStorage.getItem('car');
    var url = $('meta[name="base_url"]').attr('content');

    $.ajax({
        url: url+'/car-invoice',
        method:'GET',
        data:
        {
            id
        },
        success:function(data)
        {
            console.log(data);
            $.post('http://localhost/cars-laravel/public/test', {
                car:data,
                _token: TOKEN
            });

            var text = `
            <tr>
                <td>${id}</td>
                <td>${data['car']}</td>
                <td>${data['motor']['gearshift']},${data['motor']['type']},${data['motor']['benzine']}</td>
                <td>1</td>
                <td> ${data['cost']} &euro;</td>
                <td> ${data['cost']} &euro; </td>
            </tr>
            `;

            $('.car-invoice').html(text);
        }

    })
});