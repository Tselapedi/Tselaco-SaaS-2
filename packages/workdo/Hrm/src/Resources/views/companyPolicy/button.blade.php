@permission('companypolicy edit')
    <div class="action-btn me-2">
        <a class="mx-3 btn bg-info btn-sm  align-items-center" data-url="{{ URL::to('company-policy/' . $companyPolicy->id . '/edit') }}"
            data-ajax-popup="true" data-size="md" data-bs-toggle="tooltip" title=""
            data-title="{{ __('Edit Company Policy') }}" data-bs-original-title="{{ __('Edit') }}">
            <i class="ti ti-pencil text-white"></i>
        </a>
    </div>
@endpermission
@permission('companypolicy delete')
    <div class="action-btn">
        {{ Form::open(['route' => ['company-policy.destroy', $companyPolicy->id], 'class' => 'm-0']) }}
        @method('DELETE')
        <a class="mx-3 btn bg-danger btn-sm  align-items-center bs-pass-para show_confirm" data-bs-toggle="tooltip" title="{{ __('Delete') }}"
            data-bs-original-title="Delete" aria-label="Delete" data-confirm="{{ __('Are You Sure?') }}"
            data-text="{{ __('This action can not be undone. Do you want to continue?') }}"
            data-confirm-yes="delete-form-{{ $companyPolicy->id }}"><i class="ti ti-trash text-white text-white"></i></a>
        {{ Form::close() }}
    </div>
@endpermission
