
<div class="test1 display1 day">
   <h1 class="title">test1</h1>
</div>

<div class="test2 display2 day">
   <h1 class="title">test2</h1>
</div>





<script>
$(document).ready(function () {
    $('.display1').css('display', 'block');
    $('.display2').css('display', 'none');

    $('.test1').on('click', function() {

     $('.display1').css('display', 'none');
     $('.display').css('display', 'block');
    });

});


// <div id="lists-overview">
//         <form>
//             <input type="text" placeholder="Create a list">
//             <input type="submit" value="Add List" id="list-builder">
//         </form>
//           <ul>
//               <li><a href="index.html">Item 1</a></li>
//               <li><a href="#">Item 2</a></li>
//               <li><a href="#">Item 3</a></li>
//           </ul>
// </div>
// Javascript:

// var createList = $('#lists-overview input[type="text"]').val();

// $('#list-builder').click(function() {
//     $('#lists-overview ul li:last').after('<li>Test</li>');

// });

</script>