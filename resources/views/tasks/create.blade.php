<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <form action="#" id="addCompanyForm" method="POST" class="row g-3 needs-validation">
        @csrf
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="validationCustom01" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="validationCustom02"  required>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#addCompanyForm').submit(function(e) {
            e.preventDefault();
            var formData = {
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                _token: '{{ csrf_token() }}'
            };

            $.ajax({
                type: 'POST',
                url: '{{route("getstore")}}',
                data: formData,
                success: function(response) {
                    alert(response.message);
                    $('input[name="name"]').val('');
                    $('input[name="email"]').val('');
                },
                error: function(error) {
                    console.error(error);
                }
            });
        });
    });
    </script>


</body>
</html>
