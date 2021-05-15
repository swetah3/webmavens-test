//validation of input field
$(document).ready(function () {
    $("#NumberInput").keypress(function (e) {
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          window.alert("please enter the Number");
          return false;
      }
     })
    });
//form submit Button
let submit = document.getElementById('Submit');

//event listener
submit.addEventListener('click', (event) => {

// Fetching Form data
let requestObject = {}
let number = document.getElementById('NumberInput').value;
requestObject["number"] = number;
// console.log(Number)


// jQuery Ajax Post Request
// $.ajax({
//   type: "POST",
//   url: "page2.php",
//   data: requestObject,
//   contentType: "application/json; charset=utf-8",
//   dataType: "json",
//   success: OnSuccess,
//   failure: function(response) {
//       alert(response.d);
//   }
// });
// function OnSuccess(response) {
//   alert(response.d);
// }
});

