<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Add Patients</title>
</head>
<body>
    
    <div class="card" style="padding:20px 250px 0px 250px">
        <div class="card-title">
            <div style="text-align: center">
                <p style="font-size: 40px;">Add Patient</p>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success">
                      {{ Session::get('success') }}
                </div>
            @endif
            <form method="post" action="{{route('addPatient')}}">
                @csrf              
                <div class="form-group">
                    <label for="">First name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="First name" required>
                </div>          
                <div class="form-group">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last name" required>
                </div>
                <div class="form-group">
                    <label for="">Gender</label>
                    <br>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label>Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label>Female</label>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="text" class="form-control" name="dob" placeholder="MM/DD/YYYY" required>
                    {{-- <input type="date" id="start" name="dob" value="2018-07-22"
                    min="2018-01-01" max="2018-12-31"> --}}
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="">Primary Phone No:</label>
                    <input class="form-control" type="number" name="primary_phone_no" min="7" max="15" placeholder="+4400000000" required>
                </div>
                <div class="form-group">
                    <label for="">Secondary Phone No:</label>
                    <input  class="form-control" type="number" name="secondary_phone_no" min="7" max="15" placeholder="+4400000000" required>
                </div>
                <div class="form-group">
                    <label for="">Street Name</label>
                    <input class="form-control" type="text" name="address1" placeholder="street name" required>
                </div>
                <div class="form-group">
                    <label for="">Apartment/Suite</label>
                    <input  class="form-control" type="text" name="address2" placeholder="apartment/suite" required>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input class="form-control" type="text" name="city" placeholder="city" required>
                </div>
                <div class="form-group">
                    <label for="">Postcode</label>
                    <input class="form-control" type="text" name="postcode" placeholder="postcode" required>
                </div>
                <div class="form-group">
                    <label for="">Country</label>
                    <input class="form-control" type="text" name="country" placeholder="country" required>
                </div>
                <br>
                <input type="submit" class="btn btn-outline-success form-control" value="Submit">  
            </form>
        </div>
    </div>
   
    
</body>
</html>