$( document ).ready(function() {
   //alert( "ready!" );
    $('#provider-id').on('change', function() {
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

$.ajax({
    url: 'http://partycraft-matiasrs.c9users.io/proveedores/view' + cid + '/', 
    success: function(data){
        if(data == "refresh")
        {
            window.location.reload();
        }
    }
})
