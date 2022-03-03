
<h1 id="headingTag" class="text-center">Hello World</h1>


<div class="py-5">
    <ul class="nav">
        <li class="nav-item"><a href="" id="colorBlue" class="btn btn-primary mr-2 nav-link">Blue</a></li>
        <li class="nav-item"><a href="" id="colorYellow" class="btn btn-warning mr-2 nav-link">Yellow</a></li>
        <li class="nav-item"><a href="" id="colorGray" class="btn btn-secondary mr-2 nav-link">Gray</a></li>
        <li class="nav-item"><a href="" id="colorGreen" class="btn btn-success mr-2 nav-link">Green</a></li>
    </ul>
    <div id="box" class="mt-3" style="height: 300px; width: 300px; border: 1px solid orange;">
    </div>
    <script>
        var btnBlue = document.getElementById('colorBlue');
        var btnYellow = document.getElementById('colorYellow');
        var btnGray = document.getElementById('colorGray');
        var btnGreen = document.getElementById('colorGreen');

        btnBlue.onclick = function () {
            event.preventDefault();
            btnBlue.style.backgroundColor = 'blue';
            var box = document.getElementById('box');
            box.style.backgroundColor = 'blue';
        }
        btnYellow.onclick = function () {
            event.preventDefault();
            btnYellow.style.backgroundColor = 'yellow';
            var box = document.getElementById('box');
            box.style.backgroundColor = 'Yellow';
        }
        btnGray.onclick = function () {
            event.preventDefault();
            btnGray.style.backgroundColor = 'gray';
            var box = document.getElementById('box');
            box.style.backgroundColor = 'Gray';
        }
        btnGreen.onclick = function () {
            event.preventDefault();
            btnGreen.style.backgroundColor = 'green';
            var box = document.getElementById('box');
            box.style.backgroundColor = 'Green';
        }

    </script>
</div>

<script>
    var heading = document.getElementById('headingTag');
    heading.onclick = function () {
        // alert('Hello BITM!');
        // heading.innerText = 'Hello BITM';
        heading.innerHTML = 'Hello BITM';
        heading.style.color = 'green';
    }

    heading.onmouseover = function () {
        heading.style.color = 'red';
    }
    heading.onmouseleave = function () {
        heading.style.color = 'black';
    }
</script>
