$( document ).ready(function() {
   //alert( "ready!" );
    $('#devices-types-id').on('change', function() {
        alert( this.value ); 

         $.ajax({
                type:"POST",
                url: $('#devices-types-id').data('ajax-url'),
                dataType: 'categoriaProveedores',
                async:false,
                success: function(data){
                    alert(data);
                },
                error: function (data) {
                    alert(data);
                }
            });

    }); 
}); 