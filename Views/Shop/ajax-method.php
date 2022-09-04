<button id="btn-click">Click</button>
<div id="div1">
    <p class="h5" id='text1'></p>
</div>

<script>
    $(document).on('click','#btn-click', 'click', function () {
        $.getJSON({
            type: "POST",
            url: 'http://localhost/shop/ajaxValue' ,
            data: {
                name: 'Karol',
                age: 19,
            },
            dataType: "JSON",
            beforeSend:function(){
                $('#text1').val('before')
                console.log('before');
            },
            success: function (data,status, xhr) {
                console.log(data);
                $('#div1').append("name: "+data.data.name+"data: "+data+"\n - ");
                location.reload()
            },
        });
    });
</script>

<div class="div2">
    <p id="text2"></p>
    <p id="text3"></p>
</div>
<form action="">
    <input type="text" name="name" id="name" class="name">
    <button id="btn-click2">Click</button>
</form>
<script>
    $(document).ready(function () {
        $('#name').keyup(function () { 
            var name = $('#name').val();
            
            $.post("ajaxValue", {
                'name': name,
            },
                function (data, textStatus, jqXHR) {
                    $('#text2').text(data.data.name);
                    console.log(data);
                    console.log(data.data.name);
                },
                "json"
            );
        });
        $('#btn-click2').click(function () { 
            var name = $('#name').val();
            $.post("ajaxValue", 
            {
                'name': name,
            },
                function (data, textStatus, jqXHR) {
                    $("#text3").text(data.data.name)
                },
                "json"
            );
        });
    });
</script>