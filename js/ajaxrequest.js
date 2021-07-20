function addStu(){
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    $.ajax({
        url : 'student/addStudent.php',
        type : 'POST',
        data: {
            stusignup = "signup",
            stuname = stuname,
            stuemail = stuemail,
            stupass = stupass,
        },
        success : function(data){
            console.log(data)
        }
    })

}