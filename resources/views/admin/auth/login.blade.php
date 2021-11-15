<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

<div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%)">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card border-secondary">
                <div class="card-header" style="background: #333333; text-align: center; color: #fff; font-size: 1.5rem;">
                    <h3 class="mb-0 my-2">Đăng nhập ADMIN</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label  class="mb-2">Email</label>
                            <input type="email" class="form-control"  placeholder="Email..." name="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <div class="error-txt mt-2 text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label  class="mb-2">Password</label>
                            <input type="password" class="form-control" placeholder="password" title="At least 6 characters with letters and numbers" name="password">
                            @if($errors->has('password'))
                                <div class="error-txt mt-2 text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-dark">Đăng Nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
</div>


