<form action="" method="POST">
    @csrf
    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label" >Tên danh mục</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="inputName" placeholder="Tên danh mục..." value="{{old('name',isset($category->c_name) ? $category->c_name : '')}}" name="name">
            @if($errors->has('name'))
                <div class="error-txt">{{ $errors->first('name') }}</div>
            @endif
        </div>
    </div>
{{--    <div class="form-group row">--}}
{{--        <label for="inputName" class="col-md-2 col-form-label" >Icon</label>--}}
{{--        <div class="col-md-8">--}}
{{--            <input type="text" class="form-control" id="inputName" placeholder="fa fa-home" value="{{old('icon',isset($category->c_icon) ? $category->c_icon : '')}}" name="icon">--}}
{{--            @if($errors->has('icon'))--}}
{{--                <div class="error-txt">{{ $errors->first('icon') }}</div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label" >Tiêu đề danh mục (SEO)</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="inputName" placeholder="Tên tiêu đề..." value="{{old('c_title_seo',isset($category->c_title_seo) ? $category->c_title_seo : '')}}" name="c_title_seo">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label" >Miêu tả ngắn gọn</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="inputName" placeholder="Miêu tả ngắn gọn..." value="{{old('c_desc_seo',isset($category->c_desc_seo) ? $category->c_desc_seo : '')}}" name="c_desc_seo">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-md-2 col-form-label" >Trạng thái</label>
        <div class="col-md-8 d-flex align-items-center">
            <div class="form-check">
                <label class="form-check-label" for="defaultCheck1">
                    <input class="form-check-input" type="checkbox" name="hot" id="defaultCheck1">
                    Nổi bật
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-8 d-flex justify-content-center">
            <button type="submit" class="btn btn-success" name=submit"">Lưu thông tin</button>
        </div>
    </div>
</form>
