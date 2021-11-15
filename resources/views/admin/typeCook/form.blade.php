<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên loại ẩm thực</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên loại ẩm thực..." value="{{old('tc_name',isset($typeCook->tc_name) ? $typeCook->tc_name : '')}}" name="tc_name">
                @if($errors->has('tc_name'))
                    <div class="error-txt">{{ $errors->first('tc_name') }}</div>
                @endif
        </div>
    <div class="form-group">
        <label for="inputName" class="col-form-label" >Mô tả</label>
        <input type="text" class="form-control" id="inputName" placeholder="Mô tả..." value="{{old('tc_desc',isset($typeCook->tc_desc) ? $typeCook->tc_desc : '')}}" name="tc_desc">
    </div>
        <div class="form-group ">
                <button type="submit" class="btn btn-success" name=submit"">Lưu thông tin</button>
        </div>
    </div>
    </div>
</form>
