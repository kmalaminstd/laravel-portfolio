@extends('layouts.admin-layout')

@section('content')

        <div class="row g-4">
            <!-- Add Skill Form -->
            <div class="col-12">
                <div class="glass-card p-4">
                    <h5 class="text-white mb-4">Add New Skill</h5>
                    <form method="POST" action="/admin/category/{{ $category->id }}/update">
                        @csrf
                        @method("PATCH")
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input name="name" type="text" value="{{ $category->name }}" class="form-control form-control-custom" placeholder="e.g., React.js">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background-color: var(--accent-indigo); border: none;">Save</button>
                    </form>
                </div>
            </div>

            
        </div>


@endsection