<div class="col-3">
  <ul class="list-unstyled py-3 ps-4">
    <li class="p-3 {{ Route::currentRouteName() === 'admin.dashboard' ? 'active_link' : '' }}">
      <a class="text-decoration-none w-100 d-block" href="{{ route('admin.dashboard') }}">{{__('Dashboard')}}</a>
    </li>
    <li class="p-3 {{ str_starts_with(Route::currentRouteName(), 'admin.projects') ? 'active_link' : '' }}">
      <a class="text-decoration-none w-100 d-block" href="{{ route('admin.projects.index') }}">{{__('Projects')}}</a>
    </li>
    <li class="p-3 {{ str_starts_with(Route::currentRouteName(), 'admin.types') ? 'active_link' : '' }}">
      <a class="text-decoration-none w-100 d-block" href="{{ route('admin.types.index') }}">{{__('Types')}}</a>
    </li>
  </ul>
</div>
<!-- /.col-3 -->
