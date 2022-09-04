    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
    $( document ).ready(()=> {
        console.log( "document Jquery loaded" );
    });
 
    $( window ).on( "load", ()=> {
        console.log( "window loaded" );
    });

    mojeImie = "Karol";
    function fun1(){
        console.log(mojeImie);
    }
    $(document).ready(fun1());

    </script>
