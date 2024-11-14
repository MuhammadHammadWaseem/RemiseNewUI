@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Product List'))

@push('css_or_js')

@endpush

@section('content')
<div class="content container-fluid">
    <div class="mb-3">
        <h2 class="h1 mb-0 text-capitalize d-flex gap-2">
            <img src="{{ asset('/public/assets/back-end/img/inhouse-product-list.png') }}" alt="">
            @if($type == 'in_house')
                {{ \App\CPU\translate('In-House_Product_List') }}
            @elseif($type == 'seller')
                {{ \App\CPU\translate('Seller_Product_List') }}
            @endif
            <span class="badge badge-soft-dark radius-50 fz-14 ml-1">{{ $pro->total() }}</span>
        </h2>
    </div>

    <div class="row mt-20">
        <div class="col-md-12">
            <div class="card">
                <div class="px-3 py-4">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <!-- Search -->
                            <form action="{{ url()->current() }}" method="GET">
                                <div class="input-group input-group-custom input-group-merge">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="tio-search"></i>
                                        </div>
                                    </div>
                                    <input id="datatableSearch_" type="search" name="search" class="form-control"
                                           placeholder="{{ \App\CPU\translate('Search Product Name') }}" 
                                           aria-label="Search orders" value="{{ $search }}">
                                    <input type="hidden" value="{{ $request_status }}" name="status">
                                    <button type="submit" class="btn btn--primary">{{ \App\CPU\translate('search') }}</button>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-8 mt-3 mt-lg-0 d-flex flex-wrap gap-3 justify-content-lg-end">
                            <button type="button" class="btn btn-outline--primary" data-toggle="dropdown">
                                <i class="tio-download-to"></i>
                                {{ \App\CPU\translate('Export') }}
                                <i class="tio-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.product.export-excel', ['in_house', request()->status]) }}">
                                        {{ \App\CPU\translate('Excel') }}
                                    </a>
                                </li>
                                <div class="dropdown-divider"></div>
                            </ul>

                            <button class="btn btn-danger" id="delete-selected">{{ \App\CPU\translate('Delete Selected') }}</button>
                            <a href="{{ route('admin.product.add-new') }}" class="btn btn--primary">
                                <i class="tio-add"></i>
                                <span class="text">{{ \App\CPU\translate('Add_New_Product') }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100">
                        <thead class="thead-light thead-50 text-capitalize">
                            <tr>
                                <th><input type="checkbox" id="check-all"></th>
                                <th>{{ \App\CPU\translate('SL') }}</th>
                                <th>{{ \App\CPU\translate('Product Name') }}</th>
                                <th class="text-right">{{ \App\CPU\translate('Product Type') }}</th>
                                <th class="text-right">{{ \App\CPU\translate('purchase_price') }}</th>
                                <th class="text-right">{{ \App\CPU\translate('selling_price') }}</th>
                                <th class="text-right">{{ \App\CPU\translate('Sold by') }}</th>
                                <th class="text-center">{{ \App\CPU\translate('Show_as_featured') }}</th>
                                <th class="text-center">{{ \App\CPU\translate('Active status') }}</th>
                                <th class="text-center">{{ \App\CPU\translate('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pro as $k=>$p)
                            <tr>
                                <td><input type="checkbox" class="productbox" value="{{ $p['id'] }}"></td>
                                <th scope="row">{{ $pro->firstItem() + $k }}</th>
                                <td>
                                    <a href="{{ route('admin.product.view', [$p['id']]) }}" class="media align-items-center gap-2">
                                        <img src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $p['thumbnail'] }}"
                                             onerror="this.src='{{ asset('/public/assets/back-end/img/brand-logo.png') }}'"
                                             class="avatar border" alt="">
                                        <span class="media-body title-color hover-c1">{{ \Illuminate\Support\Str::limit($p['name'], 20) }}</span>
                                    </a>
                                </td>
                                <td class="text-right">{{ \App\CPU\translate(str_replace('_',' ', $p['product_type'])) }}</td>
                                <td class="text-right">{{ \App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($p['purchase_price'])) }}</td>
                                <td class="text-right">{{ \App\CPU\BackEndHelper::set_symbol(\App\CPU\BackEndHelper::usd_to_currency($p['unit_price'])) }}</td>
                                <td class="text-right">{{ $p->seller->f_name ?? '' }} {{ $p->seller->l_name ?? '' }}</td>
                                <td class="text-center">
                                    <label class="mx-auto switcher">
                                        <input class="switcher_input" type="checkbox" onclick="featured_status('{{ $p['id'] }}')" {{ $p->featured == 1 ? 'checked' : '' }}>
                                        <span class="switcher_control"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <label class="mx-auto switcher">
                                        <input type="checkbox" class="status switcher_input" id="{{ $p['id'] }}" {{ $p->status == 1 ? 'checked' : '' }}>
                                        <span class="switcher_control"></span>
                                    </label>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a class="btn btn-outline-info btn-sm square-btn" title="{{ \App\CPU\translate('barcode') }}"
                                            href="{{ route('admin.product.barcode', [$p['id']]) }}">
                                            <i class="tio-barcode"></i>
                                        </a>
                                        <a class="btn btn-outline-info btn-sm square-btn" title="View" href="{{route('admin.product.view',[$p['id']])}}">
                                            <i class="tio-invisible"></i>
                                        </a>
                                        <a class="btn btn-outline--primary btn-sm square-btn"
                                            title="{{\App\CPU\translate('Edit')}}"
                                            href="{{route('admin.product.edit',[$p['id']])}}">
                                            <i class="tio-edit"></i>
                                        </a>
                                        <a class="btn btn-outline-danger btn-sm square-btn" href="javascript:"
                                            title="{{\App\CPU\translate('Delete')}}"
                                            onclick="form_alert('product-{{$p['id']}}','Want to delete this item ?')">
                                            <i class="tio-delete"></i>
                                        </a>
                                    </div>
                                        <form action="{{ route('admin.product.delete', [$p['id']]) }}" method="post" id="product-{{ $p['id'] }}">
                                            @csrf @method('delete')
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        {!! $pro->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    // Check/Uncheck all checkboxes
    document.getElementById('check-all').onclick = function() {
        let checkboxes = document.querySelectorAll('.productbox');
        for (let checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    };

    // Delete selected products
    document.getElementById('delete-selected').onclick = function() {
        let selected = [];
        let checkboxes = document.querySelectorAll('.productbox:checked');
        for (let checkbox of checkboxes) {
            selected.push(checkbox.value);
        }
        if (selected.length > 0) {
            if (confirm('Are you sure you want to delete the selected products?')) {
                fetch('{{ route('admin.product.bulk-delete') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ ids: selected })
                }).then(response => {
                    return response.json();
                }).then(data => {
                        console.log(data);  // Add this line to log the response
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Failed to delete products');
                    }
                });
            }
        } else {
            alert('Please select at least one product to delete.');
        }
    };
    
    
</script>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });

        $(document).on('change', '.status', function () {
            var id = $(this).attr("id");
            if ($(this).prop("checked") == true) {
                var status = 1;
            } else if ($(this).prop("checked") == false) {
                var status = 0;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('admin.product.status-update')}}",
                method: 'POST',
                data: {
                    id: id,
                    status: status
                },
                success: function (data) {
                    if(data.success == true) {
                        toastr.success('{{\App\CPU\translate('Status updated successfully')}}');
                    }
                    else if(data.success == false) {
                        toastr.error('{{\App\CPU\translate('Status updated failed. Product must be approved')}}');
                        setTimeout(function(){
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });

        function featured_status(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('admin.product.featured-status')}}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function () {
                    toastr.success('{{\App\CPU\translate('Featured status updated successfully')}}');
                }
            });
        }

    </script>
@endpush
@endsection
