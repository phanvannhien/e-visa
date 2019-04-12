<form action="{{ route('menu_item.update', $menu->id ) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    @csrf
    <div class="form-group">
        <label for="menu_title">@lang('menus.menu_title')</label>
        <input type="text" class="form-control" name="menu_title" id="menu_title" value="{{ $menu->menu_title }}" />
    </div>

    <div class="form-group">
        <label for="menu_icon">@lang('menus.menu_icon')</label>
        <input type="text" class="form-control icp icp-auto" name="menu_icon" id="menu_icon" value="{{ $menu->menu_icon }}" />
    </div>

    <div class="form-group">
        <label for="menu_link">@lang('menus.menu_link')</label>
        <input type="text" class="form-control" name="menu_link" id="menu_link" value="{{ $menu->menu_link }}"  />
    </div>
    <div class="form-group">
        <label for="type">@lang('menus.type')</label>
        <select class="form-control" name="type" id="type">
            <option  {{ $menu->type == 'fly' ? 'selected' : '' }} value="fly">Fly</option>
            <option {{ $menu->type == 'mega' ? 'selected' : '' }} value="mega">Mega</option>
        </select>
    </div>
    <div class="form-group">
        <label for="classes">@lang('menus.classes')</label>
        <input type="text" class="form-control" name="classes" id="classes" value="{{ $menu->classes }}"  />
    </div>
    <div class="form-group">
        <label for="status">@lang('menus.status')</label>
        <select class="form-control" name="status" id="status">
            <option {{ $menu->menu_status == 1 ? 'selected' : '' }} value="1">@lang('app.activate')</option>
            <option {{ $menu->menu_status == 0 ? 'selected' : '' }} value="0">@lang('app.deactivate')</option>
        </select>
    </div>
    <div class="form-group">
        <label for="parent">@lang('menus.parent')</label>
        <select name="parent" id="parent" class="form-control">
            <option value="">Root</option>
            {!! App\Utils\Category::renderSelect($menuItems, $menu->parent_id, 'menu_title' ) !!}
        </select>
    </div>
    <button id="save-menu-item" class="btn btn-primary" type="button" name="submit"><i class="fa fa-save"></i> @lang('app.save')</button>
</form>
<script>
    $('.icp-auto').iconpicker();
    $('#save-menu-item').on('click', function (e) {
        e.preventDefault();
        var form = $(this).parent('form');
        $.ajax({
            url: $(form).attr('action'),
            data: $(form).serializeArray(),
            dataType: 'json',
            method: 'PUT',
            success: function (response) {
                if( response.success ){
                    swal({
                        title: "@lang('global.success')",
                        text: "@lang('global.success')",
                        type: "success",
                    });
                }

            }
        });

    });
</script>