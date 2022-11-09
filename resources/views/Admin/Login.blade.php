@extends('admin.app3')
@section('title','Admin Login')
@section('content2')

<div class="container ">
<div class="row justify-content-center d-flex mt-5 mb-5">
      <form  action=" "  class="m-5 loginForm">
        <div class="form-group">
        <label for="exampleInputEmail1">User Name (admin)</label>
         <input required="" name="userName" value="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password (admin)</label>
          <input  required="" name="userPassword"  value="" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <button name="submit" type="submit" class="btn btn-block btn-danger">Login</button>
        </div>
    </form>
</div>
</div>


@endsection


@section('script2')
<script type="text/javascript">
    $('.loginForm').on('submit',function (event) {
        event.preventDefault();
        let formData=$(this).serializeArray();
        let userName=formData[0]['value'];
        let password=formData[1]['value'];
        let url="/onLogin";
        axios.post(url,{
            user:userName,
            pass:password
        }).then(function (response) {
           if(response.status==200 && response.data==1){
               window.location.href="/admin";
           }
           else{
               toastr.error('Login Fail ! Try Again');
           }
        }).catch(function (error) {
            toastr.error('Login Fail ! Try Again');
        })
    })
</script>
@endsection
