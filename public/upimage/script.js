$('.dropbox').mouseenter(function(){
  $('.icon-container').css("background-color","#6b15b6");
});

$('.dropbox').mouseleave(function(){
  $('.icon-container').css("background-color","#6b15b6")
});

$('.icon-container').change(function(){
  $('.icon-container').hide()
});

function readURL(input) {
   if (input.files && input.files[0]) {
     var reader = new FileReader();

     reader.onload = function (e) {
               
$('#probePreview').attr('src',  e.target.result);}
reader.readAsDataURL(input.files[0]);}
    }

$("#probeUpload").change(function () {
        console.log(this)
        readURL(this);
    });