@php
    $pageSlug = $pageSlug ?? 'dashboard';
@endphp

<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('DB') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('SALESIANO') }}</a>
        </div>
        <ul class="nav">
            {{-- <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li> --}}
            <li @if ($pageSlug == 'cetpros') class="active " @endif>
                <a href="{{ route('admin.cetpros.index') }}">
                    <i class="tim-icons icon-bank"></i>
                    <p>{{ __('CETPRO') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'alumnos') class="active " @endif>
                <a href="{{ route('admin.alumnos.index') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Alumnos') }}</p>
                </a>
            </li>
            
            <li @if ($pageSlug == 'modulos') class="active " @endif>
                <a href="{{ route('admin.modulos.index') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Modulos') }}</p>
                </a>
            </li>




            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-badge"></i>
                    <span class="nav-link-text" >{{ __('DATOS') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'programas') class="active " @endif>
                            <a href="{{ route('admin.programas.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Programas') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'cursos') class="active " @endif>
                            <a href="{{ route('admin.cursos.index') }}">
                                <i class="tim-icons icon-book-bookmark"></i>
                                <p>{{ __('Cursos') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'marketings') class="active " @endif>
                            <a href="{{ route('admin.marketings.index') }}">
                                <i class="tim-icons icon-single-copy-04"></i>
                                <p>{{ __('Marketing') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
