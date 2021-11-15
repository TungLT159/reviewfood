<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên khu vực</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên khu vực..." value="{{old('ar_name',isset($area->ar_name) ? $area->ar_name : '')}}" name="ar_name">
                @if($errors->has('ar_name'))
                    <div class="error-txt">{{ $errors->first('ar_name') }}</div>
                @endif
        </div>
    <div class="form-group">
        <label for="inputName" class="col-form-label" >Mô tả</label>
        <input type="text" class="form-control" id="inputName" placeholder="Mô tả..." value="{{old('ar_desc',isset($area->ar_desc) ? $area->ar_desc : '')}}" name="ar_desc">
    </div>
        <div class="form-group ">
                <button type="submit" class="btn btn-success" name=submit"">Lưu thông tin</button>
        </div>
    </div>
    </div>
</form>
