<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    
</head>
<body>
     <section style="padding-top:60px">
         <div class="container">
         @if(Session::has('detail_saved'))
         <div class="alert alert-success" role="alert">
            {{ Session::get('detail_saved') }}
         </div>
            @endif
      <form action="{{  route('savedata')}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
          <div class="row">
          <div class="col-md-6">
             
                 <div class="form-group">
                   <label> NAME.</label>
                   <input type=text name="name" placeholder="Enter Name..." class="form-control">
               </div>

               <div class="form-group">
               <label> USERNAME..</label>
                   <input type=text name="username" placeholder="Enter UserName..." class="form-control">
                   </div>

               <div class="form-group">
                  <label>E-MAil.</label>
                   <input type=email name="email" placeholder="Enter Email..." class="form-control">
                   
               </div>
               <div class="form-group">
                    <label>Password.</label>
                   <input type=password name="password" placeholder="Enter password..." class="form-control">
                   
               </div>
               <div class="form-group">
               <label>Confirm Password</label>
                   <input type=password name="confirm_password" placeholder=" Confirm Password..." class="form-control">
                   
               </div>
               <div class="form-group">
                    <label>Mobile Number.</label>
                   <input type=number name="mobile" placeholder="Enter Number..." class="form-control">
                   
               </div>
               
                <div class="form-group">
                <label>DOB.</label>
                <input type=date name="dob" placeholder ="Date Of Birth" class="form-control">

                </div>
                <div class="form-group">
                  <label>Address..</label>
                  <textarea name="address" placeholder="Enter Address..." class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label>City.</label>
                <input type=text name="city" placeholder="Enter Your City..." class="form-control">
                </div>
                <div class="form-group">
                 <label>State.</label>
                 <input type=text name="state" placeholder="Enter Your State" class="form-control">
                </div>
                <div class="form-group">
                <label>Country.</label>
                <input type=text name="country" placeholder="Enter Your Country.." class="form-control">
                </div>
                <div class="input-group">
                     <div class="custom-file">
                     <input type="file" name="image" class="custom-file-input">
                     </div><br>
                <button type=submit name="submit" class="btn btn-success">Save</button>
                </div>
                
              </div>       
               
         </form>
        
         </div>
         @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif
     </section>
</body>
</html>