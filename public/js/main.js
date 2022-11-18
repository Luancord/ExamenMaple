function getCategories(){
    $.ajax({  
        url: '{{route("categories.index")}}',
        type: 'GET',  
        dataType: 'json',  
        success: function (data) {  
            let options = '<option selected value="0">All</option>';
            for (i in data){
                options += '<option value="'+data[i]['id']+'">'+data[i]['name']+'</option>';
            }
            $("#categories").html(options);
            getBooks($("#search").val(), $("#categories").val());
        },  
        error: function (xhr, textStatus, errorThrown) {  
            console.log('Error in Operation');  
        }  
    });
}