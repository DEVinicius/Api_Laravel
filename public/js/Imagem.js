$.ajaxSetup({
  headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$(document).ready(function(){

  $image_crop = $('#image_demo').croppie({
     enableExif: true,
     viewport: {
       width:250,
       height:250,
       type:'circle'
     },
     boundary:{
       width:350,
       height:350
     }
   });

   $('#upload_file').on('change', function(){
     var reader = new FileReader();
     reader.onload = function (event) {
       $image_crop.croppie('bind', {
         url: event.target.result
       }).then(function(){
         console.log('jQuery bind complete');
       });
     }
     reader.readAsDataURL(this.files[0]);
     $('#uploadimageModal').modal('show');
   });

   $('.crop_image').click(function(event){
     $image_crop.croppie('result', {
       type: 'canvas',
       size: 'viewport'
     }).then(function(response){
       $.ajax({
         url:"{{route('perfilFoto')}}",
         type: "POST",
         data:{"image": response},
         success:function(data)
         {
            $('#uploadimageModal').modal('hide');
            window.location.replace("{{route('home')}}");
         }
       });
     })
   });
 });
