function checkname(value) {
    var calling = value.id;
    console.log(calling);
    var msg;
    if (calling == "fname")
        msg = "fn";
    else if (calling == "lname")
        msg = "ln";
    console.log(msg);
    var name = document.getElementById(calling);
    var alphaExp = /^[a-zA-Z]+$/;
    if (name.value.match(alphaExp) || name.value == "") {
        document.getElementById(msg).style.display = "none";
        console.log("1");
    } else {
        name.focus();
        console.log("0");
        var show = document.getElementById(msg);
        show.style.display = "block";
        show.innerHTML = "Name cannot contain special characters!";
        return false;
    }
    return true;
}

function checkmail() {
    var EmailId = document.getElementById("email");
    var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= EmailId.value.length) {
        var show = document.getElementById("eid");
        show.style.display = "block";
        show.innerHTML = "Enter valid email-ID!";
        EmailId.focus();
        return false;
    } else {
        document.getElementById("eid").style.display = "none";
    }

    return true;
}

function checkmob() {
    var mob = document.getElementById("mob");
    if ((mob.value.length != 10) || isNaN(mob.value)) {
        var show = document.getElementById("mobile");
        show.style.display = "block";
        show.innerHTML = "Enter valid mobile number!";
        mob.focus();
        return false;
    } else {
        document.getElementById("mobile").style.display = "none";
    }
    return true;
}

function checkpwd() {
    var pw = document.getElementById("pw");
    var cpw = document.getElementById("cpw");
    if (pw.value != cpw.value || pw.value.length != cpw.value.length) {
        var show = document.getElementById("cpwd");
        show.style.display = "block";
        show.innerHTML = "Passwords do not match!";
        pw.focus();
        cpw.focus();
        return false;
    } else {
        document.getElementById("cpwd").style.display = "none";
    }
    return true;
}

function checkmsg() {
    var msg = document.getElementById("msg");
    if (msg.value.length == 0) {
        var show = document.getElementById("message");
        show.style.display = "block";
        show.innerHTML = "Please enter message!";
        msg.focus();
        return false;
    } else {
        document.getElementById("message").style.display = "none";
    }
    return true;
}

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
    .forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })