<div class="accordion" id="productSidebar">
    @foreach ($categories as $category)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading-{{ $category->id }}"> 
                <button class="accordion-button collapse" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $category->id }}" aria-expanded="false">
                    {{ strtoupper($category->name) }}
                </button>
            </h2>
            <div id="collapse-{{ $category->id }}" class="accordion-collapse collapse" data-bs-parent="#productSidebar">
                <div class="accordion-body p-0">
                    <ul class="list-group list-group-flush">
                        @foreach ($category->subcategories as $sub)
                            <li class="list-group-item">
                                <a href="{{ route('catalogue', ['category' => $category->slug, 'sub' => $sub->slug ]) }}">
                                    {{ $sub->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>