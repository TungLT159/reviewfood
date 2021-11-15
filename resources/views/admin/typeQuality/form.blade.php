<form action="" method="POST">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên phần chất lượng</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên phần chất lượng..." value="{{old('tq_name',isset($typeQuality->tq_name) ? $typeQuality->tq_name : '')}}" name="tq_name">
                @if($errors->has('tq_name'))
                    <div class="error-txt">{{ $errors->first('tq_name') }}</div>
                @endif
        </div>
    <div class="form-group">
        <label for="inputName" class="col-form-label" >Mô tả</label>
        <input type="text" class="form-control" id="inputName" placeholder="Mô tả..." value="{{old('tq_desc',isset($typeQuality->tq_desc) ? $typeQuality->tq_desc : '')}}" name="tq_desc">
    </div>
        <div class="form-group ">
                <button type="submit" class="btn btn-success" name=submit"">Lưu thông tin</button>
        </div>
    </div>
    </div>
</form>
