@extends('layouts.admin-layout')

@section('content')

        <div class="row g-4">
            <!-- Add Skill Form -->
            <div class="col-lg-4">
                <div class="glass-card p-4">
                    <h5 class="text-white mb-4">Add New Skill</h5>
                    <form method="POST" action="/admin/category">

                        @csrf
                            
                        @if($errors->any())
                            <ul>
                                @foreach ($errors as $err)
                                    <li>$err</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input name="name" type="text" class="form-control form-control-custom" placeholder="e.g., React.js">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="background-color: var(--accent-indigo); border: none;">Save</button>
                    </form>
                </div>
            </div>

            <!-- Existing Skills Grid -->
            <div class="col-lg-8">
                <div class="glass-card p-4 h-100">
                    <h5 class="text-white mb-4">Existing Category</h5>
                    
                    <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 g-3">

                        @forelse ($categories as $cat)                            
                            <div class="col">
                                <div class="tech-card">
                                    <div class="actions">
                                        <a href="/admin/category/{{ $cat->id }}/edit" class="btn btn-sm text-info p-0 mx-1"><i class="ph ph-pencil-simple"></i></a>
                                        <form method="POST" action="/admin/category/{{ $cat->id }}/delete">
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-sm text-danger p-0 mx-1"><i class="ph ph-trash"></i></button>
                                        </form>
                                    </div>
                                    <i class="ph-fill ph-file-php text-gradient fs-1 mb-2 mt-2"></i>
                                    <h6 class="text-white mb-1">{{ $cat->name }}</h6>
                                    <div class="progress mt-2" style="height: 5px; background-color: rgba(255,255,255,0.1);">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            @empty

                            <h4>There are no categories</h4>

                        @endforelse


                        
                    </div>
                    
                </div>
            </div>
        </div>


@endsection