<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Page</title>
</head>
<body>
    <form id="myForm">
        <div>
            <label for="fullname">Name</label>
            <input type="text" name="fullname" id="fullname" placeholder="First Name">
        </div>
        
        <div>
            <label for="email">Email Address</label>
            <input type="text" name="email" id="email" placeholder="Email Address">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault();

                const formData = $(this).serialize();

                console.log(formData);

                $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: formData,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error, xhr, status) {
                        console.log("Error!");
                    }
                })
            })
        })
    </script>

</body>
</html>