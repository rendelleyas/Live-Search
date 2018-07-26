<html>
    <head>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
        <br>
            <div class="form-group">
            <h2>Search</h2>
                <div class="input-group">
                    <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search">
                </div>
            </div>
            <br>
             <!-- Suggestions will be displayed in below div. -->
            <div id="result"></div>
        </div>
    </body>
</html>

<script>
$(document).ready(function(){
    $('#search_text').keyup(function(){  //On pressing a key on "Search box". This function will be called
        var txt = $('#search_text').val(); //Assigning search box value to javascript variable.
        if(txt != ''){ //Validating, if "name" is empty.
            $.ajax({
                type: "post", //method to use
                url: "php/fetch.php", //ginapasa  sa diri nga file and data
                data: {search:txt}, //mao ni nga data
                success: function(html){  //If result found, this funtion will be called.
                    $('#result').html(html).show();  //Assigning result to "result" div.
                }
            });
        }else{
           $('#result').html(""); //Assigning result to "result" div.
        }
    });
});
</script>
