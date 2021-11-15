<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-sm-12 col-md-8">
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Tên cửa hàng</label>
                <input type="text" class="form-control" id="inputName" placeholder="Tên cửa hàng..." value="{{old('st_name',isset($stores ->st_name) ? $stores ->st_name : '')}}" name="st_name">
                @if($errors->has('st_name'))
                    <div class="error-txt">{{ $errors->first('st_name') }}</div>
                @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Địa chỉ</label>
            <textarea type="text" name="st_address" id=""  cols="30" rows="2" class="form-control"  placeholder="Mô tả chi tiết địa chỉ">{{old('st_address',isset($stores ->st_address) ? $stores ->st_address : '')}}</textarea>
            @if($errors->has('st_address'))
                <div class="error-txt">{{ $errors->first('st_address') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giờ hoạt động</label>
            <input type="text" class="form-control" id="inputName" placeholder="07:00 - 23:30" value="{{old('st_timeOpen',isset($stores ->st_timeOpen) ? $stores ->st_timeOpen : '')}}" name="st_timeOpen">
            @if($errors->has('st_timeOpen'))
                <div class="error-txt">{{ $errors->first('st_timeOpen') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Giá trung bình của các sản phẩm</label>
            <input type="text" class="form-control" id="inputName" placeholder="18.000 - 50.000" value="{{old('st_price',isset($stores ->st_price) ? $stores ->st_price : '')}}" name="st_price">
            @if($errors->has('st_price'))
                <div class="error-txt">{{ $errors->first('st_price') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Số điện thoại</label>
            <input type="text" class="form-control" id="inputName"  name="st_phone" value="{{old('st_phone',isset($stores ->st_phone) ? $stores ->st_phone : '')}}">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Latitude</label>
            <input type="text" class="form-control" id="inputName" placeholder="Lat....." value="{{old('st_lng',isset($stores ->st_lng) ? $stores ->st_lng : '')}}" name="st_lng">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Longitude</label>
            <input type="text" class="form-control" id="inputName" placeholder="Lng..." value="{{old('st_lat',isset($stores ->st_lat) ? $stores ->st_lat : '')}}" name="st_lat">
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Miêu tả ngắn gọn</label>
            <input type="text" class="form-control" id="inputName" placeholder="Miêu tả ngắn gọn..." value="{{old('st_desc_seo',isset($stores ->st_desc_seo) ? $stores ->st_desc_seo : '')}}" name="st_desc_seo">
        </div>

    </div>
    <div class="col-sm-12 col-md-4">
        <div class="form-group">
            <label for="inputState">Thể loại sản phẩm</label>
            <select class="form-control js-select2" name="st_category_id">
                <option value="">--Chọn thể loại sản phẩm--</option>
                @if(isset($categories))
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" {{old('st_category_id', isset($stores->st_category_id) ? $stores->st_category_id : '') == $category->id ? 'selected' : ''}}>{{$category->c_name}}</option>
                        @endforeach
                @endif
            </select>
            @if($errors->has('st_category_id'))
                <div class="error-txt">{{$errors->first('st_category_id')}}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Khu vực</label>
            <select class="form-control js-select2" name="st_area_id">
                <option value="">--Chọn khu vực--</option>
                @if(isset($areas))
                    @foreach($areas as $area)
                        <option value="{{$area->id}}" {{old('st_area_id', isset($stores->st_area_id) ? $stores->st_area_id : '') == $area->id ? 'selected' : ''}}>{{$area->ar_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('st_area_id'))
                <div class="error-txt">{{ $errors->first('st_area_id') }}</div>
            @endif
        </div>
        <hr>
        <div class="form-group">
            <label for="inputState">Loại sản phẩm</label>
            <select class="form-control js-select2" name="st_typeProduct_id">
                <option value="">--Chọn loại sản phẩm--</option>
                @if(isset($typeProducts))
                    @foreach($typeProducts as $typeProduct)
                        <option value="{{$typeProduct->id}}" {{old('st_typeProduct_id', isset($stores->st_typeProduct_id) ? $stores->st_typeProduct_id : '') == $typeProduct->id ? 'selected' : ''}}>{{$typeProduct->tp_name}}</option>
                    @endforeach
                @endif
            </select>
                        @if($errors->has('st_typeProduct_id'))
                            <div class="error-txt">{{ $errors->first('st_typeProduct_id') }}</div>
                        @endif
        </div>
        <hr>
        <div class="form-group">
            <label for="inputState">Loại ẩm thực</label>
            <select class="form-control js-select2" name="st_typeCook_id">
                <option value="">--Chọn loại ẩm thực--</option>
                @if(isset($typeCooks))
                    @foreach($typeCooks as $typeCook)
                        <option value="{{$typeCook->id}}" {{old('st_typeCook_id', isset($stores->st_typeCook_id) ? $stores->st_typeCook_id : '') == $typeCook->id ? 'selected' : ''}}>{{$typeCook->tc_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('st_typeCook_id'))
                <div class="error-txt">{{ $errors->first('st_typeCook_id') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="inputState">Hình thức cửa hàng</label>
            <select class="form-control js-select2" name="st_typeQuality_id">
                <option value="">--Chọn hình thức--</option>
                @if(isset($typeQualitys))
                    @foreach($typeQualitys as $typeQuality)
                        <option value="{{$typeQuality->id}}" {{old('st_typeQuality_id', isset($stores->st_typeQuality_id) ? $stores->st_typeQuality_id : '') == $typeQuality->id ? 'selected' : ''}}>{{$typeQuality->tq_name}}</option>
                    @endforeach
                @endif
            </select>
{{--            @if($errors->has('st_typeQuality_id'))--}}
{{--                <div class="error-txt">{{ $errors->first('st_typeQuality_id') }}</div>--}}
{{--            @endif--}}
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Ảnh mô tả</label>
            <input type="file" class="form-control"  name="st_avatar" value="{{old('st_avatar',isset($stores ->st_avatar) ? $stores ->st_avatar : '')}}">
                        @if($errors->has('st_avatar'))
                            <div class="error-txt">{{ $errors->first('st_avatar') }}</div>
                        @endif
        </div>
        <div class="form-group">
            <label for="inputName" class="col-form-label" >Trạng thái</label>
            <div class="d-flex align-items-center">
                <div class="form-check">
                    <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" name="st_hot">
                        Nổi bật
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group ">
                <button type="submit" class="btn btn-success" name=submit"">Lưu thông tin</button>
        </div>
    </div>
    </div>

</form>
