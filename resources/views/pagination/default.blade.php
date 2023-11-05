@if($paginator->pages())
    <nav class="page-section">
        <ul class="pagination">
            @if($paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link disabled" href="javascript:void(0)" aria-label="Previous"
                    style="color:#6c757d;">
                    <span aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </a>
            </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
                    <span aria-hidden="true">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                </a>
            </li>
            @endif
            
@foreach($elements as $element)
@if(is_string($element))
<li class="page-item disabled">
    <a class="page-link" href="javacript:void(0)">{{$element}}</a>
</li>
@endif
@if(is_array($element)))
                <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="shop-1.html?page=2">2</a>
                </li>
            @endforeach
@if($paginator->hasMorePages())
            <li class="page-item">
                <a href="{{$paginator->nextPageUrl()}}" class="page-link" aria-label="Next">
                    <span aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </li>
            @else

            <li class="page-item">
                <a href="javascript.void(0)" class="page-link disabled" aria-label="Next">
                    <span aria-hidden="true">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </a>
            </li>
            @endif

        </ul>
    </nav>
@endif
