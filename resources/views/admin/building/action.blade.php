<form action="{{ route('admin.building.edit', $model) }}" method="get" class="float-left">
    <button type="submit" class="btn btn-icon btn-primary "><i
            class="far fa-edit"></i></button>
</form>
{{-- <a href="{{ route('admin.building.edit', $model) }}'" class="btn btn-icon btn-primary"><i
        class="far fa-edit"></i></a> --}}

<form action="{{ route('admin.building.destroy', $model) }}"  method="post" style="margin-left: 50px">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash"></i></button>
</form>
