    function getPrice(product_name){    
        // $(document).ready(function(){
        //     $('select[name="product_name"]').on('change',function(){
                // var product_name=$(this).val();
                alert(product_name);
                if(product_name){
                   $.ajax({
                        type: 'get',
                        url: 'get_price/'+product_name,
                        dataType: 'json',
                        success: function(data){
                            console.log(data);
                            $('input[name="price"]').empty();
                            $.each(data, function(key,value){
                                $('input[name="price"]').val(value);
                            });
                        }
                    });
                }
        //     });
        // });
}