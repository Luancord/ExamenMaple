$(document).ready(function() {
    getCategories();
});

$('form input').keydown(function (e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        return false;
    }
});

function getCategories(){
    console.log("hola mundo")
    $.ajax({  
        url: 'http://127.0.0.1:8000/api/categories',
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

function getBooks(search, category){
    $.ajax({  
        url: 'http://127.0.0.1:8000/api/books',
        type: 'POST',  
        dataType: 'json',  
        data: {title : search, category_id: category}, 
        success: function (data) {  
            let books = '';
            for (i in data){
                books +=  '<tr>'+
                            '<td>'+(parseInt(i)+1)+'</td>'+
                            '<td>'+data[i]['title']+'</td>'+
                            '<td>'+data[i]['category']['name']+'</td>'+
                            '<td>'+data[i]['author']+'</td>'+
                            '<td>'+data[i]['release_date']+'</td>'+
                            '<td>'+data[i]['publish_date']+'</td>'+
                            '</tr>';
            }
            $("#books").html(books);
        },  
        error: function (xhr, textStatus, errorThrown) {  
            console.log('Error in Operation');  
        }  
    });
}