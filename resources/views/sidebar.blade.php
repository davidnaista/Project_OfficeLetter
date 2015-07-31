
@foreach($data as $idx=>$val)

    <li class="treeview">

        <a href="{{ $val['uri'] }}">

            {{-- Display icon --}}
            @if ($val['module_item_parent_id'] == 0)
                <i class="fa {{ ($val['icon_cls'] == '') ? 'fa-dashboard' : $val['icon_cls'] }}"></i>

            @else
                <i class="fa {{ ($val['icon_cls'] == '') ? 'fa-circle-o' : $val['icon_cls'] }}"></i>

            @endif

            {{-- Display module name --}}
            <span>{{ $val['module_item_name'] }}</span>

            {{-- show tree arrows if their have children --}}
            @if ($val['children'] !== null)

               <i class="fa fa-angle-left pull-right"></i>

            @endif

        </a>

        {{-- display childs --}}
        @if ($val['children'] !== null)

            <ul class="treeview-menu">
                @include('sidebar', array('data' => $val['children']))
            </ul>

        @endif
    </li>

@endforeach
