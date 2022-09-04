<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
$(document).ready(()=>{
    $("body").append("<h2>Hello World</h2>")
    $(".text1").css("border","5px dotted green")
    $(".text1:last").css("border","5px solid red")
    $(".text1:first").css("border","5px solid red")
    $(".text").css()
})

$("document").ready(()=>{
    var newText = $("p")
    newText.append("<h4>What is Lorem Ipsum?</h4>")
    $("#textBox").html(newText)
})

$("document").ready(()=>{
    $("#textBox2").on("click", mouseClick)

    $("#textBox2").on("mouseleave", mouseLeaves)

    function mouseClick(){
        $("#textBox2").html('<h3>Mouse was click.</h3>')
    }
    function mouseLeaves(){
        $("#textBox2").html('<h3>Where are you going?</h3>')
    }
})

$(document).ready(()=>{
    $("#show").on("click", ()=>{
        $("#text1").show()
    })
})

$("document").ready(()=>{
    $(".textCopy").hover(hightCopy)
    function hightCopy(){
        $(this).toggleClass("hightLinght")

    }
})

$("document").ready(()=>{
    $("#boxText1").addClass("highlight")
    $("#boxText1").toggleClass("highlight")

    function ClassToggle(){
    $("#boxText1").toggleClass("highlight")
    $(this).toggleClass("highlight")
    }
    ClassToggle("#boxText1")
})

$("document").ready(()=>{
    
    $("#fade-in").on("click", ()=>{
        $("#textBox5").fadeIn(3000, ()=>{
            alert("I'm Fading In!")
        })
    })
    
    $("#fade-out").on("click", ()=>{
        $("#textBox5").fadeOut("fast", ()=>{
            alert("I'm Fading Out!")
        })
    })
})

$("document").ready(()=>{
    $("#slide-up").click(()=>{
        $("#textBox6").slideUp("2000", "linear")
    })
    
    $("#slide-down").click(()=>{
        $("#textBox6").slideDown("2000","linear")
    })

    $("#tooggleSlide").click(()=>{
        $("#textBox6").slideToggle("2000",()=>{
            alert("Done")
        })
    })
})

$("document").ready(()=>{
    $("#tooggle7").click(()=>{
        $("#textBox7").toggle(4000, "swing")
    })
})

$("document").ready(()=>{
    $("#grow").click(()=>{
        $("#textBox8").animate({color: "red",fontSize: "30px"},1000)
    })
    $("#move").click(()=>{
        $("#textBox8").animate({marginLeft: "50px",backgroundColor: "red"},1000)
    })
    $("#bigger").click(()=>{
        $("#textBox8").animate({fontSize: "12fr",backgroundColor: "red"},1000)
    })
    $("#many").click(()=>{
        $("#textBox8").animate({width: "500px",backgroundColor: "blue",fontSize: "12px"},1000)
    })  
})

$("document").ready(()=>{
    $("p").css("color","#black")
    $("#headerTop").css("border","1px blue solid")
    $(".greenBorder").css("border","2px green dashed")
})
$("docuent").ready(()=>{
    $("#container2 h5:odd").css("border","2px yellow dashed")
    $("#container2 h5:first").css("border","2px green dashed")

    $("div > h5:eq(2)").css("color","red")
    $("#box + ul").css("color","red")

    $("#container2> h5:last-of-type").css("border","1px solid green")
    $("h5:contains('Karol')").css("color", "blue")
    $("h5:nth-chile(3)").css("color", "chocolate")

})


$("document").ready(()=>{
    $("#create_text").click(()=>{
        $("#container3 p:last").text("Hello Karol")
    })
})
$("document").ready(()=>{
    $("#append").click(()=>{
        $("#container4 p:first").append("I just append")
    })
    $("#prepend").click(()=>{
        $("#container4 p:first").prepend("I just prepend")
    })
})

$("document").ready(()=>{
    $("#container5 p").wrap("<div class='colorBox'>")
    $("#container5 p:first").empty()

    $("#span1").replaceWith("<p>My name is Karol.</p>")

})
</script>