$('#perintah_on').click(()=>{
    let data = {act:'write', command:'h'}
    $.ajax({
        type:'POST',
        url:'webservice.php',
        data: data,
        success: function(msg){
            $('#command').html(msg)
        }
    })
})
$('#perintah_off').click(()=>{
    let data = {act:'write', command:'m'}
    $.ajax({
        type:'POST',
        url:'webservice.php',
        data: data,
        success: function(msg){
            $('#command').html(msg)
        }
    })
})


let req = setInterval(()=>{
    let data = {act:'read', command:'s'}
    $.ajax({
        type:'POST',
        url:'webservice.php',
        data:data,
        success: function(msg){
            $('#sensor_value').html(msg)
        }
    })
}, 1000)

$('#stop').click(()=>{
    clearInterval(req);
})