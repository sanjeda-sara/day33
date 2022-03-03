<style>
    .small-image{
        height: 100px;
        width: 100px;
        cursor: pointer;
    }
</style>

<div class="ml-5" style="height: 400px; width: 600px;">
    <img src="{{asset('assets/img/8.jpg')}}" alt="" class="img-fluid h-100" id="image">
</div>

<div class="ml-5 mt-2" id="box">
    <img src="{{asset('assets/img/8.jpg')}}" class="small-image mr-2" id="smallImage1" alt="">
    <img src="{{asset('assets/img/16.jpg')}}" class="small-image mr-2" id="smallImage2" alt="">
    <img src="{{asset('assets/img/19.jpg')}}" class="small-image mr-2" id="smallImage3" alt="">
    <img src="{{asset('assets/img/20.jpg')}}" class="small-image mr-2" id="smallImage4" alt="">
</div>

<script>
    var img1 = document.getElementById('smallImage1');
    var img2 = document.getElementById('smallImage2');
    var img3 = document.getElementById('smallImage3');
    var img4 = document.getElementById('smallImage4');

    var image = document.getElementById('image');

        img1.onclick = function () {
           image.setAttribute("src", "{{asset('assets/img/8.jpg')}}");
    }
        img2.onclick = function () {
           image.setAttribute("src", "{{asset('assets/img/16.jpg')}}");
    }
        img3.onclick = function () {
           {{--image.setAttribute("src", "{{asset('assets/img/19.jpg')}}");--}}
           image.src = "{{asset('assets/img/19.jpg')}}";
    }
        img4.onclick = function () {
           image.setAttribute("src", "{{asset('assets/img/20.jpg')}}");
    }

//------------------------------------------------------------------------------------------------------------






</script>
