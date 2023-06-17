/*
* login page's password field's toggle button (eye icon)
* toogle password and text when toogle button click
*/
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("toggle-password").addEventListener("click", function() {    
      var passwordInput = document.getElementsByName("password")[0];
      console.log(passwordInput);
      passwordInput.type = passwordInput.type === "password" ? "text" : "password";
    });
});

/*
* if employee list page's  delete icon click, 
* show alert box, blur background, and set employee_id value of this row to input type hidden's id="#emp_id"
*/
document.addEventListener("DOMContentLoaded", function() {
  document.getElementsByName("show-alert-msg")[0].addEventListener("click", function() {    
    var deleteIcon = this;
    var alertBox = document.getElementsByClassName('alart-box-card')[0];
    alertBox.style.display = "block";
    document.getElementsByClassName("list-container")[0].style.filter="blur(5px)";
    employeeId = deleteIcon.parentElement.parentElement.querySelector("#emp_id").innerHTML;
    document.querySelector("#delete_emp_id").value = employeeId;
  });
});

/*
* if alert box's cancle button click,
* hide alert box, remove blur background and remove employee_id from input type hidden's id="emp_id"
*/
document.addEventListener("DOMContentLoaded", function() {
  document.getElementsByName("alert_msg_cancel")[0].addEventListener("click", function() {    
    var deleteIcon = this;
    var alertBox = document.getElementsByClassName('alart-box-card')[0];
    alertBox.style.display = "";
    document.getElementsByClassName("list-container")[0].style.filter="";
    document.querySelector("#delete_emp_id").value = "";
  });
});

/*
*  when create or edit form's upload photo button click , it read image from specific path and then  show upload photo icon dynamically.
*/
function loadPhoto(event) {
    var e = event.target;
    var file = e.files[0];
    var reader = new FileReader();

    reader.onload = function(event) {
        var image = document.createElement('img');
        image.src = event.target.result;
        image.style.width = '130px';
        image.style.height = '130px';
        image.style.position = "relative";
        image.style.left= "0px";
        image.style.top = "0px";
        image.setAttribute("data-image", file.name);
        console.log(image.getAttribute('data-image'));
        var preview = document.getElementById("preview");
        preview.innerHTML = '';
        preview.appendChild(image);
    };
    reader.readAsDataURL(file);
}