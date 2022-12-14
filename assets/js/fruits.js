
$(document).ready(function(){

    show_fruit();
 
    function show_fruit(){
        $.ajax({
            type: 'ajax',
            url: '/crud_ajax_fruits/fruit/fruit_data',
            dataType: 'json',
            success: function(data){
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html+='<tr>'+
                    '<td>'+data[i].id+'</td>'+
                    '<td>'+data[i].name+'</td>'+
                    '<td>'+data[i].price+'</td>'+
                    '<td>'+
                    '<center>'+
                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-fruit_id="'+data[i].id
                    +'" data-fruit_name="'+data[i].name+'" data-price="'+data[i].price+'">EDIT</a>'+' ' +
                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-fruit_id="'+data[i].id
                    +'">DELETE</a>'+
                    '</center>'+
                    '</td>'+
                    '</tr>';
                }
                $('#show_data').html(html);
            }
        });
    }

    $('#btn-save').on('click', function(){
        var fruit_name = $('#fruit_name').val();
        var price = $('#price').val();
        if (fruit_name != '' && price != '') {
            $.ajax({
                type: 'post',
                url: '/crud_ajax_fruits/fruit/save',
                dataType: 'json',
                data: { fruit_name: fruit_name, price: price },
                success: function(data){
                    $('#fruit_name').val('');
                    $('#price').val('');
                    // $('[name="fruit_name"]').val("");
                    // $('[price="price"]').val("");
                    $('#Modal_Add').modal('hide');

                    show_fruit();
                },
            });
        }else{
            alert('Introduzca los datos');
        }
    });

    $('#show_data').on('click', '.item_edit', function(){
        var fruit_id     = $(this).data('fruit_id');
        var fruit_name   = $(this).data('fruit_name');
        var price        = $(this).data('price');
        
        $('#Modal_Edit').modal('show');
        $('#fruit_id_edit').val(fruit_id);
        $('#fruit_name_edit').val(fruit_name);
        $('#price_edit').val(price);
        
        $('#btn_update').on('click', function(){
            var fruit_id     = $('#fruit_id_edit').val();
            var fruit_name   = $('#fruit_name_edit').val();
            var price        = $('#price_edit').val();
            
            $.ajax({
                type: 'post',
                url: '/crud_ajax_fruits/fruit/update',
                dataType: 'json',
                data: { fruit_id: fruit_id, fruit_name: fruit_name,  price: price },
                success: function(data){
                    $('#fruit_id_edit').val('');
                    $('#fruit_name_edit').val('');
                    $('#price_edit').val('');
                    $('#Modal_Edit').modal('hide');
                    
                    show_fruit();
                },
            });
        });
    });
    
    $('#show_data').on('click', '.item_delete', function(){
        var fruit_id = $(this).data('fruit_id');
        
        $('#Modal_Delete').modal('show');
        $('#fruit_id_delete').val(fruit_id);

        $('#btn_delete').on('click', function(){
            var fruit_id = $('#fruit_id_delete').val();
            
            $.ajax({
                type: 'post',
                url: '/crud_ajax_fruits/fruit/delete',
                dataType: 'json',
                data: { fruit_id: fruit_id},
                success: function(data){
                    $('#fruit_id_delete').val('');
                    $('#Modal_Delete').modal('hide');
                    
                    show_fruit();
                },
            });

        });

    })
    
});