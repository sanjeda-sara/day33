@extends('master')

@section('title')
    Java Script
@endsection

@section('body')
    @include('includes.color-change')
    @include('includes.image-change')
{{--    <h1 class="text-center text-info">hello world</h1>--}}

    <h1 id="h1" class=" text-info">  </h1>
    <div id="content"></div>

    <script>
        var name = 'jennifer';  //single var
        document.write(name + ' ');
        var data = [10,20,30];  //array
        for(key in data)
        {
            document.write(data[2] + '<br/>');
        }
        //var location = {country: 'BD', city:'Dhaka', area:'Khilgaon'};
        //var student = {name: 'Shanto', phone:'0101111', email:'shanto@gmail.com'};
        var students = [
            {name: 'Shanto', phone:'0101111', email:'shanto@gmail.com'},
            {name: 'Arif', phone:'99101111', email:'arif@gmail.com'},
            {name: 'Sudipto', phone:'8788000', email:'cr@gmail.com'},
            {name: 'Jennifer', phone:'6621400', email:'jenny@gmail.com'},
            {name: 'Shawon', phone:'3789025', email:'shawon@gmail.com'},
            {name: 'Joya', phone:'1289025', email:'joya@gmail.com'},
        ];
        // document.write(students[0].name);
        for(index in students)
        {
            document.write('Student Name: ' + '&nbsp;&nbsp;' + students[index].name + ' Student Phone: '  + students[index].phone + ' Student Email: ' + students[index].email + '<br/>');
        }

    </script>

{{--    <script>--}}

{{--        // --------------------------------FUNCTION---------------------------------------}}
{{--        //-- block of code--}}
{{--        //-- used for specific tasks--}}
{{--        //-- cannot work alone--}}
{{--        //-- have to be called--}}
{{--        //-- is reuseable--}}

{{--        // function name() {--}}
{{--        //     document.write('Jenny');--}}
{{--        //     alert('hello there');--}}
{{--        // }--}}
{{--        // name();--}}

{{--        // var firstName = 'Shawon';--}}
{{--        // var lastName = 'Akter';--}}
{{--        //function e kono variable nei nai. The above two are declared globally--}}
{{--        // function printName() {--}}
{{--        //     document.write(firstName+ ' ' + lastName);--}}
{{--        // }--}}
{{--        // printName();--}}
{{--        //--}}
{{--        // getResult(10,2);--}}
{{--        // function getResult(firstNumber, lastNumber) {--}}
{{--        //     document.write(firstNumber - lastNumber + '<br/>');--}}
{{--        // }--}}
{{--        // getResult(100,50);--}}

{{--        // function getFullName(firstName, lastName) {--}}
{{--        //     var fullName = firstName + ' ' + lastName;--}}
{{--        //     // var h1Element = document.getElementById('h1');--}}
{{--        //     // var h1Element = document.getElementsByTagName('h1')[0];--}}
{{--        //     //h1Element.innerHTML = fullName;--}}
{{--        //    // document.write(firstName + ' ' + lastName + '<br/>');--}}
{{--        //     document.getElementsByTagName('h1')[0].innerHTML = fullName; //by tag--}}
{{--        // }--}}
{{--        // getFullName('Habibur', "Rahman");--}}




{{--        //---------------------------------------------------------------------------------------------------------------------}}

{{--        // --------------------------------ARRAY---------------------------------------}}
{{--        //     var data = ['shila', 'sadia', false, 100, 100.25, 'bitm', true, 'bangladesh', 200, 250.25 ];--}}

{{--            // document.write(data[6]);--}}
{{--            // document.write(data[60]); --> output = undefined--}}

{{--        //to print each data separately in different lines:--}}
{{--        //document.write(data.length)--}}


{{--        --}}{{--for(key in data)--}}
{{--        --}}{{--{--}}
{{--        --}}{{--    // document.write(data[key]+'<br/>');--}}
{{--        --}}{{--    // document.write([key]+' ' + data[key] + '<br/>');--}}
{{--        --}}{{--    @if(key > 1)--}}
{{--        --}}{{--    {--}}
{{--        --}}{{--        document.write(data[key] + '<br/>');--}}
{{--        --}}{{--    }--}}
{{--        --}}{{--}--}}

{{--//---------------------------------------------------------------------------------------------------------------------}}

{{--          // document.write("hello world")--}}
{{--          // var firstName = 'Sanjida';--}}
{{--          // var lastName = 'Akter';--}}
{{--          //--}}
{{--          // document.write(firstName + ' &nbsp;&nbsp;&nbsp; ' + lastName);--}}

{{--// --------------------------------------------Major Rules for Variables-----------------------------------------------}}
{{--//         1. starts with var--}}
{{--//         2. A-Z, a-z, 0-9, $--}}
{{--//         3. No number comes first--}}

{{--        // var Bangladesh = 'Hello Bangladesh';--}}
{{--        // var arif_name = 'his name is arif';--}}
{{--        // var hellojennifer = "Hello Jennifer";--}}
{{--        // var crShaheb = 'Sudipto Saha';--}}
{{--        //--}}
{{--        // var firstNumber = 10;--}}
{{--        // var bitm = 'bitm';--}}
{{--        //--}}
{{--        // document.write(typeof ('gfd'));--}}
{{--        // document.write(crShaheb);--}}

{{--// --------------------------------------------------------}}
{{--//         function createDiv(height, width, color) {--}}
{{--//             var div = document.createElement('div');    //this div is just a variable name. thid can also be jenny--}}
{{--//             div.style.height = height + 'px';--}}
{{--//             div.style.width = width + 'px';--}}
{{--//             div.style.backgroundColor = color;--}}
{{--//             div.style.float = 'left';--}}
{{--//             //div.style.borderRadius = '300px';--}}
{{--//             div.setAttribute('id', 'colorDiv');--}}
{{--//--}}
{{--//             var content = document.getElementById('content');--}}
{{--//             content.append(div);--}}
{{--//         }--}}
{{--//         createDiv("300","400", "Red");--}}
{{--//         createDiv("200","100", "Green");--}}
{{--//         createDiv("300","150", "Gray");--}}
{{--//         createDiv("500","300", "Black");--}}


{{--    </script>--}}
@endsection
